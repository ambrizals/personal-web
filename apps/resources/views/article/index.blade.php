@extends('layouts.master_white')
@section('title','Article Posts')
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
		<div class="card">
			<div class="card-header">
				<div class="row">
					<div class="col-md-4">
						Daftar Artikel
					</div>
					<div class="col-md-8 text-right">
						<a href="{!! Route('posts.create')!!}" class="btn btn-sm btn-primary">Buat Artikel</a>
					</div>
				</div>
			</div>
			<div class="card-body">
				<table class="table table-responsive" id="daftarArticle">
					<thead>
						<tr>
							<th>Judul Artikel</th>
							<th>Kategori Artikel</th>
							<th>Ditulis</th>
							<th>Tanggal terbit</th>
							<th>Aksi</th>
						</tr>
					</thead>
				</table>
			</div>
		</div>
	</div>
</div>
@stop
@push('dataku')
{{ Html::script('js/jquery.dataTables.min.js') }}
<script>
$(function() {
    $('#daftarArticle').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! route('Ajax Load Article') !!}',
        columns: [
            { data: 'judul_article', orderable: false},
            { data: 'nama_kategori', searchable : false},
			{ data: 'name', searchable : false},
			{ data: 'created_at', searchable : false},
			{ data: 'aksi', orderable : false, searchable : false},
        ]
    });
});
</script>
@endpush
