<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreItemRequest extends FormRequest
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
            'model' => 'required|max:255',
            'feature_image' => 'required|mimes:jpg,png,jpeg',
            'description' => 'required',
            'price' => 'required|numeric',
            'brand_id' => 'required',
            'category_id' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'model.required' => 'You need to fill blank!',
            'description.required' => 'You need to fill blank!',
            'feature_image.required' => 'You need to fill blank!',
            'price.required' => 'You need to fill blank!',
            'brand_id.required' => 'You need to fill blank!',
            'category_id.required' => 'You need to fill blank!',
        ];
    }
}
