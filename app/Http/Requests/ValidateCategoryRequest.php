<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class ValidateCategoryRequest extends FormRequest
{
    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'status' => 'error',
            'errors' => $validator->errors(),
        ], 422));
    }
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules()
    {

        // $id = $this->route('category'); // Category ID for update

        // return [
        //     'name' => 'required|string|max:255|unique:categories,name,' . $id,
        //     // 'image' => 'nullable|string', // Or 'nullable|image' if you're uploading an image
        //     'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        //     'is_active' => 'nullable|boolean',
        // ];
        return [
            'name' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
            'is_active' => 'nullable',
        ];
    }

    /**
     * Custom messages for validation errors.
     */
    public function messages()
    {
        return [
            'name.required' => 'The category name is required.',
            'name.unique' => 'This category name already exists.',
        ];
    }
}
