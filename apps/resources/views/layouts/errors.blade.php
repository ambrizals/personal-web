<!DOCTYPE html>
<html lang="en">
    <head>
        <title>@yield('title')</title>
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
            @yield('content')
        </div>
        <!-- /.row -->
        {{ Html::script('js/jquery-3.2.1.slim.min.js') }}
        {{ Html::script('js/popper.min.js') }}
        {{ Html::script('js/bootstrap.min.js') }}
    </body>
</html>