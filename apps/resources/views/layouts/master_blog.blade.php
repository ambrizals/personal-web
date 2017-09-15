<!DOCTYPE html>
<html lang="en">
    <head>
        <title>@yield('title')</title>
        {{ Html::style('css/bootstrap.min.css') }}
        {{ Html::style('css/main.css') }}
        {{ Html::style('css/font-awesome.min.css') }}
        {{ Html::script('ckeditor/ckeditor.js') }}
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
            @yield('content')   
        </div>
        {{ Html::script('js/jquery-3.2.1.slim.min.js') }}
        {{ Html::script('js/popper.min.js') }}
        {{ Html::script('js/bootstrap.min.js') }}
        @include('includes.footer')
    </body>
</html>