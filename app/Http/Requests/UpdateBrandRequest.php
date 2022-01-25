<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBrandRequest extends FormRequest
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
            'title' => 'required|max:255',
            'logo' => 'required|mimes:jpg,png,jpeg',
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'You need to fill blank!',
            'logo.required' => 'You should fill blank!',
        ];
    }
}
