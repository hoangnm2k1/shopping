<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "name" => "required|min:5|max:50",
            "image" => "required|image",
            "price" => "required|numeric|min:1000|max:5000000",
        ];
    }

    public function messages()
    {
        return [
            "name.required" => "Name not empty",
            "name.min" => "Name at least 5 characters",
            "name.max" => "Name at maximum 50 characters",
            "image.required" => "Image not empty",
            "image.image" => "Wrong image format",
            "price.required" => "Price not empty",
            "price.min" => "Price at least 1000",
            "price.max" => "Price at maximum 5000000",
        ];
    }
}
