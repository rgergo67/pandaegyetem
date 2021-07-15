<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'billing_address' => 'required',
            'billing_city' => 'required',
            'billing_name' => 'required',
            'billing_zip' => 'required',
            'billing_tax_number' => 'nullable',
            'email' => 'required',
            'terms' => 'accepted',
        ];
    }
}
