@extends('layouts.master_panel')
@section('title', $halaman)
@section('content')
@if($errors->any())
	<div class="alert alert-warning">
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</div>
@endif

{!! Form::model($page, ['route' => ['page.update',$page->id_page] , 'method' => 'PUT','files' => 'true']) !!}
<div class="form-group">
	{!! Form::label('judul_page', 'Judul Halaman') !!}
	{!! Form::text('judul_page', $page->judul_page, ['class' => 'form-control', 'placeholder' => 'Masukkan Judul Halaman']) !!}
</div>
<div class="form-group">
	{!! Form::label('konten_page', 'Konten Halaman') !!}
	{!! Form::textarea('konten_page', $page->konten_Page, ['class' => 'form-control', 'placeholder' => 'Masukkan konten halaman']) !!}
</div>
<div class="form-group">
	{!! Form::label('cover_page', 'Cover Halaman') !!}
	{!! Form::file('cover_page', ['class' => 'form-control']) !!}
</div>
{!! Form::submit('Tambah Halaman', ['class' => 'btn btn-primary btn-block']) !!}
{!! Form::close() !!}
<br/>
<div class="card text-center bg-danger mb-3	text-white">
	<div class="card-header">
		Hapus Halaman
	</div>
	<div class="card-body">
		<p>Halaman yang telah dihapus tidak langsung terhapus dan akan dimasukkan ke arsip</p>
		{!! Form::open(['route' => ['page.destroy', $page->id_page]]) !!}
		{!! Form::hidden('_method', 'DELETE') !!}
		{!! Form::submit('Hapus Halaman', ['class' => 'btn btn-warning btn-block']) !!}
		{!! Form::close() !!}
	</div>
</div>
@stop
@push('dataku')
{{ Html::script('ckeditor/ckeditor.js') }}
<script>
		CKEDITOR.replace( 'konten_page' );
</script>
@endpush