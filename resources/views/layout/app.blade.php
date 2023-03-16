<html>
    <head>
        <title>App Name - @yield('title')</title>
        <link rel="stylesheet" href="{{asset("/css/bootstrap.min.css")}}">
        @section("links")
        @show
    </head>
        <body>
            <div class="container" style="color: red">
                @section("navbar")
                @show
                @yield('content')
            </div>
        <script src="{{asset("/js/bootstrap.min.js")}}"></script>
    </body>
</html>
