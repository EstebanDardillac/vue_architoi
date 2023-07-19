<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
            'lastname' => 'required',
            'name' => 'required',
            'gender_id' => 'required',
            'email' => 'required|unique:users|email',
            'password' => 'required',
            'country_id' => 'required',
            'city' => 'required',
            'postal' => 'required|numeric',
            'adress' => 'required',
            'number' => 'required|numeric',
            'job' => 'required',
            'hobby_id' => 'required',
        ];
    }
}
