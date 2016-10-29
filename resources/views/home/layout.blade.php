<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Home about</title>
        <link href="{!! asset('bootstrap/css/bootstrap.min.css') !!}" media="all" rel="stylesheet" type="text/css" />        
        <link href="{!! asset('css/app.css') !!}" media="all" rel="stylesheet" type="text/css" />
        <script src="{{asset('js/jquery-3.1.1.min.js')}}"></script>
    </head>

    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="brand" href="home">Instapics</a>
                    <div class="nav-collapse">
                        <ul class="nav">
                            @section('navigation')
                            <li class="active"><a href="home">Home</a></li>
                             @show
                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>

        <div class="container">
            @yield('main')
            <hr>
            <footer>
                <p>&copy; Instapics 2012</p>
            </footer>
            @yield('footer')
        </div> <!-- /container -->
        <script>
             console.log(($('div.container').width()));
        </script>
    </body>
</html>