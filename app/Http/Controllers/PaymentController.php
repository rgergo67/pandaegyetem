<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Mail\SendOrder;
use App\Models\Order;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use LaravelHungary\Barion\BarionFacade as Barion;
use LaravelHungary\Barion\Enums\Currency;
use LaravelHungary\Barion\Enums\FundingSource;
use LaravelHungary\Barion\Enums\Locale;
use LaravelHungary\Barion\Enums\PaymentType;

class PaymentController extends Controller
{
    public function index()
    {
        return view('payment.index');
    }

    public function store(OrderRequest $request)
    {
        $order = Order::create([
            'email' => $request->input('email'),
            'billing_name' => $request->input('billing_name'),
            'billing_zip' => $request->input('billing_zip'),
            'billing_city' => $request->input('billing_city'),
            'billing_address' => $request->input('billing_address'),
            'billing_tax_number' => $request->input('billing_tax_number'),
        ]);
        $payment = Payment::create([
            'order_id' => $order->id,
            'total' => config('pandaegyetem.price'),
            'status' => Payment::INITIALIZED,
            'comment' => 'Jobb jegyek 10 lépésben',
        ]);

        $response = Barion::paymentStart([
            'PaymentRequestId' => $payment->id,
            'PaymentType' => PaymentType::IMMEDIATE,
            'GuestCheckOut' => true,
            'FundingSources' => [FundingSource::ALL],
            'Locale' => Locale::HU,
            'Currency' => Currency::HUF,
            'OrderNumber' => $order->id . " Jobb Jegyek",
            'RedirectUrl' => route('payment.thankyou'),
            'CallbackUrl' => route('payment.callback'),
            'PayerHint' => $order->email,
            'Transactions' => [
                [
                    'POSTransactionId' => $payment->id,
                    'Payee' => config('laravel-barion.payee'),
                    'Total' => $payment->total,
                    'Comment' => $payment->comment,
                    'Items' => [
                        [
                            'Name' => 'Jobb jegyek 10 lépésben: Hackeld meg az agyad!',
                            'Description' => 'Tanulást segítő e-book',
                            'Quantity' => 1,
                            'Unit' => 'db',
                            'UnitPrice' => $payment->total,
                            'ItemTotal' => $payment->total
                        ]
                    ]
                ]
            ]
        ]);

        $payment->transaction_id = $response->PaymentId;
        $payment->status = $response->Status;

        $payment->save();

        return redirect($response->GatewayUrl);
    }

    public function callback(Request $request)
    {
        $this->processResponse($request->input('paymentId'));
    }

    public function thankyou(Request $request)
    {
        if (! empty($request->input('paymentId'))) {
            $payment = $this->processResponse($request->input('paymentId'));

            if ($payment->status == 'Succeeded') {
                if (! $payment->order->email_sent) {
                    $payment->order->email_sent = true;
                    $payment->order->save();
                    Mail::to($payment->order->email)
                        ->queue(new SendOrder($payment->order));
                }
                return view('payment.thankyou', [
                    'payment' => $payment
                ]);
            } else {
                return view('payment.failed', [
                    'payment' => $payment
                ]);
            }
        } else {
            return redirect(route('payment.index'));
        }
    }

    protected function processResponse(string $paymentId)
    {
        $response = Barion::getPaymentState($paymentId);

        $payment = Payment::firstWhere('transaction_id', $paymentId);
        $payment->status = $response->Status;
        $payment->payload = json_encode($response);

        $payment->save();

        return $payment;
    }
}
