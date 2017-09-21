@extends('layouts.master_category_blog')
@section('title', 'Kategori Blog : '. $category->nama_kategori )
@section('content')
@foreach ($article as $item)
<div class="article-box border">
	<div class="row">
		<div class="col-md-4 thumbnail">
			<img src="{!! url('/').'/img/thumbnail/'.$item->thumbnail_article !!}"/>
		</div>
		<div class="col-md-7 content">
			<div class="article-header">
				<h3><a href="{{ route('articles.show', $item->slug_article) }}">{!! $item->judul_article !!}</a></h3>
				<p>Penulis : {!! $item->User->name !!} | Kategori : <a href="{{ route('articles.category', $item->CategoryArticle->slug_kategori) }}">{!! $item->CategoryArticle->nama_kategori !!}</a> | Tanggal terbit {!! $item->created_at !!} | <a href="{{ route('articles.show', $item->slug_article.'#disqus_thread') }}"></a></p>
			</div>
			<div class="article-content">
				{{ strip_tags(str_limit($item->konten_article,300)) }}
			</div>
		</div>
	</div>
</div>
@endforeach
{{ $article->links() }}
@stop