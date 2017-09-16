<!DOCTYPE html>
<html lang="en">
    <head>
        <title>@yield('title')</title>
        {{ Html::style('css/jquery.datatable.css') }}
        {{ Html::style('css/bootstrap.min.css') }}
        {{ Html::style('css/main.css') }}
        {{ Html::style('css/font-awesome.min.css') }}
        {{ Html::script('js/jquery.min.js') }}
        {{ Html::script('js/main.js') }}
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    </head>
    <body>
        @include('includes.header')
        <!-- /.navbar-collapse -->
        <!-- Page Heading -->
        <div class="container">
            @yield('content')
        </div>
        <!-- /.row --> 
        {{ Html::script('js/popper.min.js') }}
        {{ Html::script('js/bootstrap.min.js') }}
        @stack('dataku')
        @include('includes.footer')
    </body>
</html>