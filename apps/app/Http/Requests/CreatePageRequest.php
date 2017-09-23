<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePageRequest extends FormRequest
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
            'judul_page' => 'required',
            'konten_page' => 'required',
            'cover_page' => 'mimes:jpg,jpeg,png|image',
        ];
    }

    public function messages(){
        return [
            'judul_page.required' => 'Judul halaman wajib di isi !',
            'konten_page.required' => 'Konten halaman wajib di isi !',
            'cover_page.image' => 'Cover hanya menerima file gambar',
            'cover_page.mimes' => 'Hanya menerima ekstensi file jpg, jpeg dan png',
        ];
    }
}
