<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateArticleRequests extends FormRequest
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
            'judul_article' => 'required',
            'kategori_article' => 'required',
            'konten_article' => 'required',
            'cover_article' => 'mimes:jpeg,jpg,png|image',
            'thumbnail_article' => 'mimes:jpeg,jpg,png|image|dimensions:width=300,height=300',
        ];
    }
    public function messages(){
      return [
        'judul_article.required' => 'Judul article tidak boleh kosong !',
        'kategori_article.required' => 'Kategori tidak boleh kosong !',
        'konten_article.required' => 'Konten tidak boleh kosong !',
        'cover_article.image' => 'Hanya menerima file gambar !',
        'cover_article.mimes' => 'Ekstensi file tidak didukung !',
        'thumbnail_article.mimes' => 'Ekstensi file tidak didukung !',
        'thumbnail_article.image' => 'Hanya menerima file gambar !',
        'thumbnail_article.dimensions' => 'Dimensi gambar harus 300 x 300 pixel',
      ];
    }
}
