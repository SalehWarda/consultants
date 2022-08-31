<?php

namespace App\Http\Requests\Frontend;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            //
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required' =>  'هذا الحقل مطلوب',
            'email.required' =>  'هذا الحقل مطلوب',
            'email.email' =>  'صيغة البريد الإلكتروني غير صحيحة',
            'subject.required' => 'هذا الحقل مطلوب',
            'message.required' => 'هذا الحقل مطلوب',


        ];
    }
}
