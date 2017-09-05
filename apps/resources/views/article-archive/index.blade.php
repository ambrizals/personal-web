@extends('layouts.master_white')
@section('title','Arsip Artikel')
@section('content')
<div class="row">
    <div class="col-md-3 sidebar-left">
        @include('includes.sidebar_panel')
    </div>
    <div class="col-md-9 content-page">
        <nav class="nav nav-tabs" id="myTab" role="tablist">
            <a class="nav-item nav-link active" id="nav-category-tab" data-toggle="tab" href="#nav-category" role="tab" aria-controls="nav-category" aria-expanded="true">Kategori</a>
            <a class="nav-item nav-link" id="nav-article-tab" data-toggle="tab" href="#nav-article" role="tab" aria-controls="nav-article">Artikel</a>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-category" role="tabpanel" aria-labelledby="nav-category-tab">
              <div class="tab-window">
                  <table class="table" id="daftarCategory">
                      <thead>
                          <tr>
                              <th>ID Kategori</th>
                              <th>Nama Kategori</th>
                          </tr>
                      </thead>
                  </table>
              </div>
            </div>
            <div class="tab-pane fade" id="nav-article" role="tabpanel" aria-labelledby="nav-article-tab">
              <div class="tab-window">
                  <table class="table" id="daftarArticle">
                      <thead>
                          <tr>
                              <th>Judul Artikel</th>
                              <th>Nama Kategori</th>
                              <th>Penulis</th>
                          </tr>
                      </thead>
                  </table>
              </div>
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
        ajax: '{!! route('Ajax Category Archive') !!}',
        columns: [
            { data: 'id_category', name: 'id_category' },
            { data: 'nama_kategori', name: 'nama_kategori' }
        ]
    });
});
$(function() {
    $('#daftarArticle').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! route('Ajax Article Archive') !!}',
        columns: [
            { data: 'judul_article' },
            { data: 'nama_kategori', searchable : false},
            { data: 'name', searchable: false, orderable:false}
        ]
    });
});
</script>
@endpush
