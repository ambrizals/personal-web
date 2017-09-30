<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\PostCommentArticle;
use App\article_comment;
use App\Article;

class CommentController extends Controller
{
	public function cekUser(){
		if (Auth::check()){
			return Auth::user()->id;
		} else {
			return null;
		}
	}
	public function postComment(PostCommentArticle $request, $id_article){
		$comment = new article_comment;
		$comment->article_comment = $id_article;
		$comment->akun_id = $this->cekUser();
		$comment->nama_comment = $request->get('nama_comment');
		$comment->content_comment = $request->get('content_comment');
		$comment->save();
		$article = Article::where('id_article',$comment->article_comment)->first();
		$comment_count = $article->comment_article + 1;
		Article::where('id_article', $article->id_article)->update([
			'comment_article' => $comment_count
		]);
		return redirect()->route('articles.show', $article->slug_article)->with('comment','Komentar anda berhasil di publikasikan !');	
	}
}
