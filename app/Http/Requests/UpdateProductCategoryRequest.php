<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductCategoryRequest extends FormRequest
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
            'name'=> 'required|min:1|max:255|string|unique:product_category,name,'.$this->id,
            'slug'=> 'required|alpha_dash|unique:product_category,slug,'.$this->id,
            'status'=> 'required|boolean',
        ];
    }
}
