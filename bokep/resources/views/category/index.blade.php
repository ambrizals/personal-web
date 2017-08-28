@extends('layouts.master_white')
@section('title','Kategori Article')
@section('content')
<div class="row">
	<div class="col-md-3 sidebar-left">
		@include('includes.sidebar_panel')
	</div>
	<div class="col-md-9 content-page">
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