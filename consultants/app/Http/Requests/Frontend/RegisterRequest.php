<?php

namespace App\Http\Requests\Frontend;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255'],
            'email_reg' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'mobile' => ['required', 'numeric', 'unique:users,mobile'],
            'age' => ['required', 'numeric', 'max:255'],
            'job' => ['required', 'string', 'max:255'],
            'password_reg' => ['required', 'string', 'min:8'],
            'password_confirmation' => ['required', 'string', 'min:8', 'same:password_reg'],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'هذا الحقل مطلوب',
            'email_reg.required' =>  'هذا الحقل مطلوب',
            'email_reg.email' =>  'صيغة البريد الإلكتروني غير صحيحة',
            'email_reg.unique' =>  'هذا البريد موجود يرجى إدخال بريد غيره',
            'mobile.required' =>  'هذا الحقل مطلوب',
            'mobile.unique' =>  'هذا الرقم موجود يرجى إدخال رقم غيره',
            'age.required' => 'هذا الحقل مطلوب',
            'job.required' => 'هذا الحقل مطلوب',
            'password_reg.required' => 'هذا الحقل مطلوب',
            'password_reg.min' => 'يجب أن لا تقل كلمة المرور عن 8 رموز',
            'password_confirmation.same' => 'يجب أن يكون مشابه لكلمة المرور',

        ];
    }
}
