<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChangePasswordRequest extends FormRequest
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
            'old_password' => 'required',
            'password_baru' => 'required',
            'password_konfirmasi' => 'required|same:password_baru',
            'captcha' => 'required|valid_captcha'
        ];
    }

    public function messages() {
        return [
            'old_password.required' => 'Password lama harus di isi',
            'password_baru.required' => 'Password baru harus di isi',
            'password_konfirmasi.required' => 'Password konfirmasi harus di isi',
            'password_konfirmasi.same' => 'Password konfirmasi harus sama dengan password baru',
            'captcha.required' => 'Kode captcha harus dimasukkan',
            'captcha.valid_captcha' => 'Kode captcha yang dimasukkan salah !',
        ];
    }
}
