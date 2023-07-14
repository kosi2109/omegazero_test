<?php

namespace App\Http\Requests\QuestionTwo;

use Illuminate\Foundation\Http\FormRequest;

class MailSendRequest extends FormRequest
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
            'email' => 'required|email:rfc,dns|exists:users,email',
            'subject' => 'required:min:5',
            'body' => 'required:min:20',
        ];
    }
}
