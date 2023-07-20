<?php

namespace App\Http\Requests\Master;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class PostStoreRequest extends FormRequest
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
        $this->request->set('slug', Str::slug($this->request->get('slug')));

        return [
            'category_id' => 'required|exists:categories,id',
            'name' => 'required|unique:posts',
            'slug' => 'required|unique:posts',
            'description' => 'required|string',
            'image' => 'required|mimes:jpg,jpeg,png',
            'meta_title' => 'required|string',
            'meta_description' => 'required|string',
            'meta_keyword' => 'required|string',
            'status' => 'nullable|string',
        ];
    }
}
