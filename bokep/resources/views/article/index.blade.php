@extends('layouts.master_white')
@section('title','Article Posts')
@section('content')
<div class="row">
	<div class="col-md-3 sidebar-left">
		@include('includes.sidebar_panel')
	</div>
	<div class="col-md-9 content-page">
		<table class="table" id="daftarCategory">
			<thead>
				<tr>
					<th>Judul Artikel</th>
					<th>Kategori Artikel</th>
					<th>Ditulis</th>
					<th>Tanggal terbit</th>
					<th>Tanggal Update</th>
				</tr>
			</thead>
		</table>
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
        ajax: '{!! route('Ajax Load Article') !!}',
        columns: [
            { data: 'judul_article', name: 'Judul Artikel' },
            { data: 'nama_kategori', name: 'nama_kategori' },
			{ data: 'name', name : 'Ditulis'},
			{ data: 'created_at', name: 'Tanggal terbit'},
			{ data: 'updated_at', name: 'Tanggal update'}
        ]
    });
});
</script>
@endpush