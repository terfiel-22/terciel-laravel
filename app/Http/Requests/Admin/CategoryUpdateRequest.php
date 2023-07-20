<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CategoryUpdateRequest extends FormRequest
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
            'name' => 'required|unique:categories,name,'.$this->category->id,
            'slug' => 'required|unique:categories,slug,'.$this->category->id,
            'description' => 'required|string',
            'image' => 'nullable|mimes:jpg,jpeg,png',
            'meta_title' => 'required|string',
            'meta_description' => 'required|string',
            'meta_keyword' => 'required|string',
            'display_on_navbar' => 'nullable|string',
            'status' => 'nullable|string',
        ];
    }
}
