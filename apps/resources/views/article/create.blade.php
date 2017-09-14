@extends('layouts.master_white')
@section('title', 'Buat Artikel')
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
		{!! Form::open(['route' => 'posts.store', 'method' => 'POST', 'class' => 'form-control', 'files' => 'true']) !!}
		<div class="form-group">
			{!! Form::label('judul_article', 'Judul Artikel') !!}
			{!! Form::text('judul_article', null, ['class' => 'form-control', 'placeholder' => 'Masukkan judul disini']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('kategori_article', 'Kategori Artikel') !!}
			{!! Form::select('kategori_article', $category , null, ['class' => 'form-control', 'placeholder' => 'Pilih kategori !']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('konten_article', 'Konten') !!}
			{!! Form::textarea('konten_article', null, ['class' => 'form-control']) !!}
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					{!! Form::label('cover_article','Cover Artikel') !!}
					{!! Form::file('cover_article',['class' => 'form-control']) !!}
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					{!! Form::label('thumbnail_article','Thumbnail Artikel') !!}
					{!! Form::file('thumbnail_article',['class' => 'form-control']) !!}
				</div>
			</div>
		</div>
		<div class="card">
			<div class="card-body">
				Catatan : Jika gambar cover atau thumbnail artikel tidak diupload, maka gambar cover atau thumbnail akan menggunakan value default dengan nama "default_cover.jpg". File tersebut tersedia pada direktori /img/article/ atau /img/thumbnail/.
			</div>
		</div>
		<br/>
		{!! Form::submit('Buat Artikel', ['class' => 'btn btn-primary btn-block']) !!}
		{!! Form::close() !!}
	</div>
</div>
@stop
@push('dataku')
{{ Html::script('ckeditor/ckeditor.js') }}
<script>
		CKEDITOR.replace( 'konten_article' );
</script>
@endpush
