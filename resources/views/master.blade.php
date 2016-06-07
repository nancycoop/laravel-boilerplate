<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="favicon.ico" />
        <title>My website - @yield('title')</title>
        
        
        
        
        <link rel="stylesheet" href="{{$url->css}}styles.css" />
        @yield('extra_css')
        @yield('extra_font')
    </head>
    <body>
        @include('components.header')

        <section id="main">
            @yield('content')
        </section>


        @include('components.footer')

        <!-- Include Javascript -->
        
        <script src="{{$url->js}}jquery-2.2.4.min.js"></script>
        <script src="{{$url->js}}bootstrap.min.js"></script>
        @yield('extra_js')
        <script src="{{$url->js}}app.js"></script>

    </body>
</html>