<?php

namespace App\Http\Requests\QuestionOne\User;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserCreateRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required|email:rfc,dns',
            'password' => 'required|min:8',
            'role' => 'required|exists:roles,name',
            'department_name' => [Rule::in(['IT', 'Marketing', 'Office']), 'required'],
        ];
    }
}
