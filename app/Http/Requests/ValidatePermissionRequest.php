<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidatePermissionRequest extends FormRequest
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
        $rules = [
            'name' => 'required|string|unique:permissions,name', // Ensure uniqueness in the permissions table
        ];

        // If this is an update request, modify the rules
        if ($this->isMethod('put') || $this->isMethod('patch')) {
            $id = $this->route('permission'); // Get the permission id from the URL (assuming you're using route model binding)
            $rules['name'] = 'required|string|unique:permissions,name,' . $id; // Allow updating the current permission name
        }

        return $rules;
    }

    /**
     * Get the custom validation messages.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'The permission name is required.',
            'name.unique' => 'The permission name must be unique.',
            // You can add more custom messages here
        ];
    }
}
