@extends('layouts.master_white')
@section('title','Kategori Article')
@section('content')
<div class="row">
	<div class="col-md-3 sidebar-left">
		@include('includes.sidebar_panel')
	</div>
	<div class="col-md-9 content-page">
		@If (Session::has('pesan'))
		<div class="alert alert-success">
			{{ Session::get('pesan') }}
		</div>
		@Endif
		@if ($errors->any())
		<div class="alert alert-warning">
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</div>
		@endif
		<div class="card">
			<div class="card-header">
				<div class="row">
					<div class="col-md-4">
						Daftar Kategori
					</div>
					<div class="col-md-8 text-right">
						<a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tambah-kategori">Tambah Kategori</a>
					</div>
				</div>
			</div>
			<div class="card-body">
				<table class="table" id="daftarCategory">
					<thead>
						<tr>
							<th>ID Kategori</th>
							<th>Nama Kategori</th>
							<th>Aksi</th>
						</tr>
					</thead>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="tambah-kategori" tabindex="-1" role="dialog" aria-labelledby="tambah-kategori" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="tambah-kategori">Tambah Kategori</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				{!! Form::open(['route' => 'category.store']) !!}
				<div class="form-group">
					{!! Form::label('nama_kategori','Nama Kategori') !!}
					{!! Form::text('nama_kategori', null, ['class'=>'form-control','placeholder'=>'Masukkan nama kategori']) !!}
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				{!! Form::submit('Tambah Kategori',['class' => 'btn btn-primary']) !!}
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>
@stop
@push('dataku')
{{ Html::script('js/jquery.dataTables.min.js') }}
<script>
$(function() {
    $('#daftarCategory').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! route('Ajax Load Category') !!}',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'nama_kategori', name: 'nama_kategori' },
            { data: 'action', name : 'aksi', searchable : false, orderable : false}
        ]
    });
});
</script>
@endpush