<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostCommentArticle;
use App\article_comment;

class CommentController extends Controller
{
	public function postComment(PostCommentArticle $request, $slug_article){
		$comment = new article_comment;
		$comment->article_comment = $request->get('article_comment');
		$comment->nama_comment = $request->get('nama_comment');
		$comment->content_comment = $request->get('content_comment');
		$comment->save();
		return redirect()->route('articles.show', $request->article_comment)->with('comment','Komentar anda berhasil di publikasikan !');
	}
}
