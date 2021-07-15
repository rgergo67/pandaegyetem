<?php

namespace App\Mail;

use App\Models\Order;
use App\Services\StatisticService;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendOrder extends Mailable implements ShouldQueue
{
    use Queueable;
    use SerializesModels;

    public function __construct(
        public Order $order,
    ) {}

    public function build()
    {
        return $this->markdown('emails.send_order')
            ->subject('Jobb jegyek 10 lépésben')
            ->bcc('rgergo67@gmail.com', 'Ratting Gergely')
            ->attach(storage_path('app/jobb_jegyek_10_lepesben.pdf'), [
                'as' => 'jobb_jegyek_10_lepesben.pdf',
                'mime' => 'application/pdf',
            ]);
    }
}
