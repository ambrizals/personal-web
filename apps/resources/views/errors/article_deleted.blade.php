@extends('layouts.errors')
@section('title', 'Error 404')
@section('content')
<div class="card text-center error-panel">
  <div class="card-header">
    Terdapat kesalahan !
  </div>
  <div class="card-body">
    <h4 class="card-title">Artikel telah dihapus!</h4>
    <p class="card-text">Artikel yang dituju telah dihapus.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
  <div class="card-footer text-muted">
    Error : ARTICLE_DELETED
  </div>
</div>
@stop