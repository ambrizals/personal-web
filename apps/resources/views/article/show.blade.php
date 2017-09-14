@extends('layouts.master')
@section('title', $halaman)
@section('content')
<div class="row">
	<div class="col-md-8 blog-page">
		<div class="blog-header">
			<h2>{!! $article->judul_article !!}</h2>
			<p>Ditulis oleh : {!! $article->User->name !!} | Diterbitkan : {!! $article->created_at !!} | Kategori : {!! $article->CategoryArticle->nama_kategori !!}</p>
			<img src="{!! url('/').'/img/article/'.$article->thumbnail_article !!}"/>
		</div>
		{!! $article->konten_article !!}
    	
	</div>
	<div class="col-md-4">
		<a class="twitter-timeline" data-height="500" data-theme="dark" href="https://twitter.com/ambrizals">Tweets by ambrizals</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
		<div class="card text-white bg-dark mb-3 border-light">
			<div class="card-header border-light">
				Contact
			</div>
			<div class="card-body">
				<h4 class="card-title">Menghubungi Saya ?</h4>
				<p class="card-text">Ada beberapa cara yang bisa anda lakukan untuk menghubungi saya, baik melalui akun sosial media, email, telepon, maupun melalui website ini.</p>
				<a href="mailto:sabuncolek@ambrizal.net" class="btn btn-primary"><i class="fa fa-envelope btn-ico"></i> Send a email</a> or <a href="tel:628115349997" class="btn btn-success"><i class="fa fa-phone btn-ico"></i> Call Me</a>
			</div>
		</div>
	</div>
</div>
@stop