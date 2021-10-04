<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PaymentCreateRequest extends FormRequest
{
    

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name_on_card' => 'required ',
            'card_number' => 'required',
            'ex_year' => 'required',
            'ex_month' => 'required',
            'cvv' => 'required',
            'sub_name' => 'required',
            'price' => 'required',
        ];
    }
}
