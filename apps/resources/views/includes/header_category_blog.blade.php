@include('includes.header_user')
@include('includes.header_menu')
<div class="jumbotron box-page">
  <div class="container">
    <h1>{{ $category->nama_kategori }}</h1>
    <p>{{ $category->deskripsi_kategori }}</p>
  </div>
</div>  