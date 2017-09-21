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
            <div class="row">
                <div class="col-md-3 sidebar-left">
                    @include('includes.sidebar_panel')
                </div>
                <div class="col-md-9 content-page">
                    @yield('content')
                </div>
            </div>
        </div>
        <!-- /.row --> 
        {{ Html::script('js/popper.min.js') }}
        {{ Html::script('js/bootstrap.min.js') }}
        @stack('dataku')
        @include('includes.footer')
    </body>
</html>