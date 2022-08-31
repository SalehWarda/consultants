<?php

namespace App\Http\Requests\Frontend;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
            'email' => ['required', 'string', 'email', 'unique:users,email,'.auth()->id()],
            'mobile' => ['required', 'numeric', 'unique:users,mobile,'.auth()->id()],
            'age' => ['required', 'numeric'],
            'job' => ['required', 'string'],
            'password' => ['nullable', 'string', 'min:8', 'confirmed'],
            'password_confirmation' => ['nullable', 'string', 'min:8', 'same:password'],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'هذا الحقل مطلوب',
            'email.required' =>  'هذا الحقل مطلوب',
            'email.email' =>  'صيغة البريد الإلكتروني غير صحيحة',
            'email.unique' =>  'هذا البريد موجود يرجى إدخال بريد غيره',
            'mobile.required' =>  'هذا الحقل مطلوب',
            'mobile.unique' =>  'هذا الرقم موجود يرجى إدخال رقم غيره',
            'age.required' => 'هذا الحقل مطلوب',
            'job.required' => 'هذا الحقل مطلوب',
            'password.min' => 'يجب أن لا تقل كلمة المرور عن 8 رموز',
            'password_confirmation.same' => 'يجب أن يكون مشابه لكلمة المرور',

        ];
    }
}
