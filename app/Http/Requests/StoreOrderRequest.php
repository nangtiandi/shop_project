<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrderRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'receiver_name' => 'required|max:255',
            'phone' => 'required|numeric',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zip_code' => 'required|numeric',
            'payment' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'receiver_name.required' => 'You need to fill blank!',
            'phone.required' => 'You should fill blank!',
            'address.required' => 'You should fill blank!',
            'city.required' => 'You should fill blank!',
            'state.required' => 'You should fill blank!',
            'zip_code.required' => 'You should fill blank!',
            'payment.required' => 'You should fill blank!',
        ];
    }
}
