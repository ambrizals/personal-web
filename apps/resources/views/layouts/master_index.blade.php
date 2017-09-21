<!DOCTYPE html>
<html lang="en">
    <head>
        <title>@yield('title')</title>
        {{ Html::style('css/bootstrap.min.css') }}
        {{ Html::style('css/main.css') }}
        {{ Html::style('css/font-awesome.min.css') }}
        {{ Html::script('ckeditor/ckeditor.js') }}
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    </head>
    <body class="bg-dark">
        @include('includes.header_index')
        <!-- /.navbar-collapse -->
        <!-- Page Heading -->
        <div class="container content">
            @yield('content')   
        </div>
        <!-- /.row --> 
        <script id="dsq-count-scr" src="//ambrizalofficialsblog.disqus.com/count.js" async></script>
        {{ Html::script('js/jquery-3.2.1.slim.min.js') }}
        {{ Html::script('js/popper.min.js') }}
        {{ Html::script('js/bootstrap.min.js') }}
        @include('includes.footer')
    </body>
</html>