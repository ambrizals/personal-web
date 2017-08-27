<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Error 404</title>
        {{ Html::style('css/bootstrap.min.css') }}
        {{ Html::style('css/main.css') }}
        {{ Html::style('css/font-awesome.min.css') }}
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    </head>
    <body class="bg-dark">
        @include('includes.header_without-title')
        <!-- /.navbar-collapse -->
        <!-- Page Heading -->
        <div class="container">
          <div class="card text-center error-panel">
            <div class="card-header">
              Terdapat kesalahan !
            </div>
            <div class="card-body">
              <h4 class="card-title">Halaman tidak ditemukan!</h4>
              <p class="card-text">Halaman yang anda tuju tidak dapat ditemukan, mohon periksa kembali URL tujuan anda.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
            <div class="card-footer text-muted">
              Error 404
            </div>
          </div>
        </div>
        <!-- /.row -->
        {{ Html::script('js/jquery-3.2.1.slim.min.js') }}
        {{ Html::script('js/popper.min.js') }}
        {{ Html::script('js/bootstrap.min.js') }}
    </body>
</html>
