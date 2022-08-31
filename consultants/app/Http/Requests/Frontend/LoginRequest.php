<?php

namespace App\Http\Requests\Frontend;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'email' => ['required', 'email', 'max:255', 'exists:users,email'],
            'password' => ['required'],
        ];
    }

    public function messages()
    {
        return [
            'email.required' =>  'هذا الحقل مطلوب',
            'email.email' =>  'صيغة البريد الإلكتروني غير صحيحة',
            'email.exists' =>  'هذا البريد غير موجود لدينا',
            'password.required' => 'هذا الحقل مطلوب',


        ];
    }
}
