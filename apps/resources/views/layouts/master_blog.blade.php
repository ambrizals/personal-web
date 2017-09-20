<!DOCTYPE html>
<html lang="en">
    <head>
        <title>@yield('title')</title>
        {{ Html::style('css/bootstrap.min.css') }}
        {{ Html::style('css/main.css') }}
        {{ Html::style('css/font-awesome.min.css') }}
        {{ Html::script('ckeditor/ckeditor.js') }}
        {{ Html::script('js/jquery.min.js') }}
        {{ Html::script('js/main.js') }}
        {{ Html::script('js/popper.min.js') }}
        {{ Html::script('js/bootstrap.min.js') }}
        <script id="dsq-count-scr" src="//ambrizalofficialsblog.disqus.com/count.js" async></script>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    </head>
    <body class="bg-dark">
        @include('includes.header_without-title')
        <div class="cover-article">
            <img src="{!! url('/').'/img/article/'.$article->cover_article !!}"/>
        </div>
        <div class="info-article">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 head">
                        <h2>{!! $article->judul_article !!}</h2>
                        <p>Ditulis oleh : {!! $article->User->name !!} | Diterbitkan : {!! $article->created_at !!} | Kategori : {!! $article->CategoryArticle->nama_kategori !!}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container content">
            <div class="row frontend">
                <div class="col-md-8 blog-page">
                    @yield('content')
                </div>
                <div class="sidebar-collapse">
                    <a href="#" data-toggle="collapse" data-target="#sidebar" aria-expanded="false" aria-controls="sidebar" id="sidebarCollapse-btn"><i class="fa fa-bars"></i></a>
                </div>
                <div class="col-md-4" id="sidebar">
                    <a class="twitter-timeline" data-height="500" data-theme="dark" href="https://twitter.com/ambrizals">Tweets by ambrizals</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                    <div class="card text-white bg-dark mb-3 border-light">
                        <div class="card-header border-light">
                            Contact
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Menghubungi Saya ?</h4>
                            <p class="card-text">Ada beberapa cara yang bisa anda lakukan untuk menghubungi saya, baik melalui akun sosial media, email, telepon, maupun melalui website ini.</p>
                            <a href="mailto:sabuncolek@ambrizal.net" class="btn btn-primary"><i class="fa fa-envelope btn-ico"></i> Send a email</a> or <a href="tel:628115349997" class="btn btn-success"><i class="fa fa-phone btn-ico"></i> Call Me</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('includes.footer')
    </body>
</html>