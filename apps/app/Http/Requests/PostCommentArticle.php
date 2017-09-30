<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostCommentArticle extends FormRequest
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
            'nama_comment' => 'required',
            'content_comment' => 'required'
        ];
    }
    public function messages(){
        return[
            'nama_comment.required' => 'Wajib mengisi nama anda !',
            'content_comment.required' => 'Wajib mengisi isi komentar'
        ];
    }
}
