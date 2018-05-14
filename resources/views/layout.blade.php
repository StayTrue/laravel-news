<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="/css/app.css">
        <title>@yield('title')</title>
    </head>
    <body>
    @include('nav') 
        <div class = "app">
            <div class="container">
                <div class="page-header">
                    <div class = "row align-items-center">
                        <div class = "col-sm-6 col-9">
                            <h1>@yield('title')</h1>
                        </div>
                        @yield('action')
                    </div>
                </div>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Newsfeed</a></li>
                    @yield('breadcrumbs')
                </ol>
            </div>
            @yield('content')
        </div>
    </body>
    <script type="text/javascript" src="/js/app.js"></script>
</html>


