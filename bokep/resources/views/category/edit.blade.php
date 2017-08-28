@extends('layouts.master_white')
@section('title','Ubah Kategori Artikel')
@section('content')
<div class="row">
	<div class="col-md-3 sidebar-left">
		@include('includes.sidebar_panel')
	</div>
	<div class="col-md-9 content-page">
		<div class="card">
			<div class="card-header">
				Ubah Kategori
			</div>
			<div class="card-body">
				{!! Form::model($CategoryArticle,['route' => ['category.update', $CategoryArticle->id], 'method' => 'PUT']) !!}
				<div class="form-group">
					{!! Form::label('nama_kategori','Nama Kategori') !!}
					{!! Form::text('nama_kategori', null, ['class' => 'form-control', 'placeholder' => 'Masukkan nama kategori']) !!}
				</div>
				{!! Form::submit('Simpan Perubahan', ['class' => 'btn btn-primary btn-block']) !!}
				{!! Form::close() !!}
			</div>
		</div>
		<div class="card text-center bg-danger mb-3	text-white">
			<div class="card-header">
				Hapus Kategori
			</div>
			<div class="card-body">
				<p>Kategori yang dihapus tidak dapat terhapus secara langsung dan akan diarsipkan pada halaman arsip.</p>
				{!! Form::open(['url' => 'panel/article/category/'.$CategoryArticle->id]) !!}
				{!! Form::hidden('_method', 'DELETE') !!}
				{!! Form::submit('Hapus Kategori', ['class' => 'btn btn-warning btn-block']) !!}
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>
@stop