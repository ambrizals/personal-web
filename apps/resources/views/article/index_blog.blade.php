@extends('layouts.master')
@section('title', $halaman)
@section('content')
<div class="row">
	<div class="col-md-8 blog-page">
		@foreach ($article as $item)
		<div class="article-box border">
			<div class="row">
				<div class="col-md-4 thumbnail">
					<img src="{!! url('/').'/img/thumbnail/'.$item->thumbnail_article !!}"/>
				</div>
				<div class="col-md-7 content">
					<div class="article-header">
						<h3><a href="{{ route('articles.show', $item->slug_article) }}">{!! $item->judul_article !!}</a></h3>
						<p>Penulis : {!! $item->User->name !!} | Kategori : {!! $item->CategoryArticle->nama_kategori !!} | Tanggal terbit {!! $item->created_at !!} | <a href="{{ route('articles.show', $item->slug_article.'#disqus_thread') }}"></a></p>
					</div>
					<div class="article-content">
						{{ strip_tags(str_limit($item->konten_article,300)) }}
					</div>
				</div>
			</div>
		</div>
		@endforeach
		{{ $article->links() }}
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