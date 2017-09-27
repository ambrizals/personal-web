<!DOCTYPE html>
<html lang="en">
    <head>
        <title>@yield('title')</title>
        @include('includes.head')
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
        @include('includes.footer')
    </body>
</html>