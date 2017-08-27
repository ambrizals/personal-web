@extends('layouts.master_white')
@section('title','Kategori')
@section('content')
<div class="row">
	<div class="col-md-3">
		<div class="card">
			<div class="card-header">
				Artikel
			</div>
			<div class="list-group list-group-flush">
				<a href="#" class="list-group-item list-group-item-action">Buat Artikel</a>
				<a href="{{ url('panel/article') }}" class="list-group-item list-group-item-action">Daftar Artikel</a>
				<a href="#" class="list-group-item list-group-item-action">Arsip Artikel</a>
			</div>
		</div>
		<br/>
		<div class="card">
			<div class="card-header">
				Kategori
			</div>
			<div class="list-group list-group-flush">
				<a href="#" class="list-group-item list-group-item-action">Buat Kategori</a>
				<a href="{{ url('panel/category') }}" class="list-group-item list-group-item-action active">Daftar Kategori</a>
				<a href="#" class="list-group-item list-group-item-action">Arsip Kategori</a>
			</div>
		</div>
	</div>
	<div class="col-md-9">
		Konten
	</div>
</div>
@stop