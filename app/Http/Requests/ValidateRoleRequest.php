<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateRoleRequest extends FormRequest
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
        $id = $this->route('id'); // Fetch ID for update validation

        $rules = [
            'name' => 'required|string|unique:roles,name' . ($id ? ',' . $id : ''),
        ];

        if ($this->isMethod('post')) {
            // Rules for creating a role
            $rules['name'] = 'required|string|unique:roles,name';
        }

        if ($this->isMethod('put')) {
            // Rules for updating a role
            $rules['name'] = 'required|string|unique:roles,name,' . $id;
        }

        return $rules;
    }

    /**
     * Get custom validation messages.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'The role name is required.',
            'name.unique' => 'The role name already exists. Please choose a different name.',
        ];
    }
}
