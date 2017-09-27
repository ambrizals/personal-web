<!DOCTYPE html>
<html lang="en">
    <head>
        <title>@yield('title')</title>
        {{ Html::style('css/jquery.datatable.css') }}
        @include('includes.head')
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
        @stack('dataku')
        @include('includes.footer')
    </body>
</html>