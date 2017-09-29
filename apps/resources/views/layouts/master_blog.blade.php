<!DOCTYPE html>
<html lang="en">
    <head>
        <title>@yield('title')</title>
        @include('includes.head')
        <script id="dsq-count-scr" src="//ambrizalofficialsblog.disqus.com/count.js" async></script>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    </head>
    <body class="bg-dark">
        @include('includes.header_without-title')
        <nav class="breadcrumb nav-blog">
            <div class="container">
                <a class="breadcrumb-item" href="{{ url('') }}">Home</a>
                <a class="breadcrumb-item" href="{{ route('articles.index') }}">Blog</a>
                <a class="breadcrumb-item" href="{{ route('articles.category',$article->CategoryArticle->slug_kategori) }}">{!! $article->CategoryArticle->nama_kategori !!}</a>
                <a class="breadcrumb-item active" href="{{ url()->current() }}">{!! $article->judul_article !!}</a>
            </div>
        </nav>
        <div class="cover-article">
            <img src="{!! url('/').'/img/article/'.$article->cover_article !!}"/>
        </div>
        <div class="info-article">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-auto time_article">
                                <div class="content">
                                    <span class="date">{{ $article->created_at->format('d') }}</span>
                                    <span class="month">{{ $article->created_at->format('F') }}</span>
                                    <span class="year">{{ $article->created_at->format('Y') }}</span>
                                </div>
                            </div>
                            <div class="col head">
                                <h2>{!! $article->judul_article !!}</h2>
                                <span class="detail">Ditulis oleh : {!! $article->User->name !!} | Kategori : {!! $article->CategoryArticle->nama_kategori !!}</span>
                            </div>
                        </div>
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
                    @include('includes.sidebar')
                </div>
            </div>
        </div>
        @include('includes.footer')
    </body>
</html>