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

{{ Form::open(['route' => 'page.store', 'method' => 'POST', 'class' => 'form-control', 'files' => 'true']) }}
<div class="form-group">
	{{ Form::label('judul_page', 'Judul Halaman') }}
	{{ Form::text('judul_page', null, ['class' => 'form-control', 'placeholder' => 'Masukkan Judul Halaman']) }}
</div>
<div class="form-group">
	{{ Form::label('konten_page', 'Konten Halaman') }}
	{{ Form::textarea('konten_page', null, ['class' => 'form-control', 'placeholder' => 'Masukkan konten halaman']) }}
</div>
<div class="form-group">
	{{ Form::label('cover_page', 'Cover Halaman') }}
	{{ Form::file('cover_page', ['class' => 'form-control']) }}
</div>
{{ Form::submit('Tambah Halaman', ['class' => 'btn btn-primary btn-block']) }}
{{ Form::close() }}
@stop
@push('dataku')
{{ Html::script('ckeditor/ckeditor.js') }}
<script>
		CKEDITOR.replace( 'konten_page' );
</script>
@endpush