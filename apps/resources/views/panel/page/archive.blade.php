@extends('layouts.master_panel')
@section('title', $halaman)
@section('content')
@If (Session::has('pesan'))
<div class="alert alert-success">
	{{ Session::get('pesan') }}
</div>
@Endif
<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col-md-4">
				Daftar Arsip Halaman
			</div>
		</div>
	</div>
	<div class="card-body">
		<table class="table" id="daftarPage">
			<thead>
				<tr>
					<th>ID Kategori</th>
					<th>Nama Halaman</th>
					<th>Aksi</th>
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
    $('#daftarPage').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! route('page.loadarchive') !!}',
        columns: [
            { data: 'id_page', name: 'id_page' },
            { data: 'judul_page', name: 'judul_page' },
            { data: 'aksi', name : 'aksi', searchable : false, orderable : false}
        ]
    });
});
</script>
@endpush