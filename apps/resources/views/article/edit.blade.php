@extends('layouts.master_white')
@section('title', 'Ubah Artikel : '.$posts->judul_article)
@section('content')
<div class="row">
  <div class="col-md-3 sidebar-left">
    @include('includes.sidebar_panel')
  </div>
  <div class="col-md-9 content-page">
    @if ($errors->any())
		<div class="alert alert-danger">
				<ul>
						@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
						@endforeach
				</ul>
		</div>
		@endif
    {!! Form::model($posts,['route' => ['posts.update', $posts->id_article], 'method' => 'PUT', 'files'=> true]) !!}
    <div class="form-group">
			{!! Form::label('judul_article', 'Judul Artikel') !!}
			{!! Form::text('judul_article', $posts->judul_article, ['class' => 'form-control', 'placeholder' => 'Masukkan judul disini']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('kategori_article', 'Kategori Artikel') !!}
			{!! Form::select('kategori_article', $category , $posts->kategori_article, ['class' => 'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('konten_article', 'Konten') !!}
			{!! Form::textarea('konten_article', $posts->konten_article, ['class' => 'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('thumbnail_article','Thumbnail Artikel') !!}
			{!! Form::file('thumbnail_article',['class' => 'form-control']) !!}
		</div>
    {!! Form::submit('Simpan Perubahan', ['class' => 'btn btn-primary btn-block']) !!}
    {!! Form::close() !!}
    <br/>
    <div class="card text-center bg-danger mb-3	text-white">
			<div class="card-header">
				Hapus Article
			</div>
			<div class="card-body">
				<p>Article yang dihapus tidak dapat terhapus secara langsung dan akan diarsipkan pada halaman arsip.</p>
				{!! Form::open(['route' => ['posts.destroy', $posts->id_article]]) !!}
				{!! Form::hidden('_method', 'DELETE') !!}
				{!! Form::submit('Hapus Article', ['class' => 'btn btn-warning btn-block']) !!}
				{!! Form::close() !!}
			</div>
		</div>
  </div>
</div>
@stop
@push('dataku')
{{ Html::script('ckeditor/ckeditor.js') }}
<script>
		CKEDITOR.replace( 'konten_article' );
</script>
@endpush
