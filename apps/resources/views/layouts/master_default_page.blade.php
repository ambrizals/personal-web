<!DOCTYPE html>
<html lang="en">
    <head>
        <title>@yield('title')</title>
        @include('includes.head')
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    </head>
    <body class="bg-dark">
        @include('includes.header')
        <!-- /.navbar-collapse -->
        <!-- Page Heading -->
        <div class="container content">
            <nav class="breadcrumb">
                <a class="breadcrumb-item" href="{{ url('') }}">Home</a>
                <a class="breadcrumb-item active" href="{{ url()->current() }}">@yield('title')</a>
            </nav>
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
        <!-- /.row --> 
        <script id="dsq-count-scr" src="//ambrizalofficialsblog.disqus.com/count.js" async></script>
        @include('includes.footer')
    </body>
</html>