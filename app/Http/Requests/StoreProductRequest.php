<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name'=> 'required|min:1|max:255|string|unique:product,name',
            'slug' => 'required|alpha_dash|unique:product,slug',
            'price' => 'required|min:0|integer|numeric',
            'discount_price' => 'min:0|numeric|integer|lt:price',
            'sku' => 'required|string|min:1|max:255|unique:product,sku',
            'short_description' => 'required|string|min:10',
            'description' => 'required|string|min:10',
            'specification' => 'required|string|min:10',
            'qty' => 'required|numeric|integer|min:1|max:1000000',
            'shipping' => 'required|string|min:1',
            'weight' => 'required|numeric|min:0.1|max:1000',
            'image_url' => 'required|mimes:jpeg,png,jpg|max:2048',
            'status' => 'required|boolean',
            'product_category_id' => 'required|exists:product_category,id',
        ];
    }
}
