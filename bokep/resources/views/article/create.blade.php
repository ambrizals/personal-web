@extends('layouts.master_white')
@section('title', 'Buat Artikel')
@section('content')
<div class="row">
	<div class="col-md-3 sidebar-left">
		@include('includes.sidebar_panel')
	</div>
	<div class="col-md-9 content-page">
		{!! Form::open(['route' => 'posts.store', 'method' => 'POST', 'class' => 'form-control', 'files' => 'true']) !!}
		<div class="form-group">
			{!! Form::label('judul_article', 'Judul Artikel') !!}
			{!! Form::text('judul_article', null, ['class' => 'form-control', 'placeholder' => 'Masukkan judul disini']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('kategori_article', 'Kategori Artikel') !!}
			{!! Form::select('kategori_article', $category , 'null', ['class' => 'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('konten_article', 'Konten') !!}
			{!! Form::textarea('konten_article', null, ['class' => 'form-control']) !!}
		</div>
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
