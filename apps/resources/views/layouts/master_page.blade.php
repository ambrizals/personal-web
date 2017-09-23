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
        <nav class="breadcrumb nav-blog">
            <div class="container">
                <a class="breadcrumb-item" href="{{ url('') }}">Home</a>
                <a class="breadcrumb-item active" href="{{ url()->current() }}">{!! $page->judul_page !!}</a>
            </div>
        </nav>
        <div class="cover-article">
            <img src="{!! url('/').'/img/page/'.$page->cover_page !!}"/>
        </div>
        <div class="info-article">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 head">
                        <h2>{!! $page->judul_page !!}</h2>
                        <p>Ditulis oleh : {!! $page->User->name !!} | Diterbitkan : {!! $page->created_at !!} 
                        </p>
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