<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Smec - Amir Rudin</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        .breadcrumb-arrow {
    height: 36px;
    padding: 0;
    line-height: 36px;
    list-style: none;
    background-color: #e6e9ed
}
.breadcrumb-arrow li:first-child a {
    border-radius: 4px 0 0 4px;
    -webkit-border-radius: 4px 0 0 4px;
    -moz-border-radius: 4px 0 0 4px
}
.breadcrumb-arrow li, .breadcrumb-arrow li a, .breadcrumb-arrow li span {
    display: inline-block;
    vertical-align: top
}
.breadcrumb-arrow li:not(:first-child) {
    margin-left: -5px
}
.breadcrumb-arrow li+li:before {
    padding: 0;
    content: ""
}
.breadcrumb-arrow li span {
    padding: 0 10px
}
.breadcrumb-arrow li a, .breadcrumb-arrow li:not(:first-child) span {
    height: 36px;
    padding: 0 10px 0 25px;
    line-height: 36px
}
.breadcrumb-arrow li:first-child a {
    padding: 0 10px
}
.breadcrumb-arrow li a {
    position: relative;
    color: #fff;
    text-decoration: none;
    background-color: #3bafda;
    border: 1px solid #3bafda
}
.breadcrumb-arrow li:first-child a {
    padding-left: 10px
}
.breadcrumb-arrow li a:after, .breadcrumb-arrow li a:before {
    position: absolute;
    top: -1px;
    width: 0;
    height: 0;
    content: '';
    border-top: 18px solid transparent;
    border-bottom: 18px solid transparent
}
.breadcrumb-arrow li a:before {
    right: -10px;
    z-index: 3;
    border-left-color: #3bafda;
    border-left-style: solid;
    border-left-width: 11px
}
.breadcrumb-arrow li a:after {
    right: -11px;
    z-index: 2;
    border-left: 11px solid #2494be
}
.breadcrumb-arrow li a:focus, .breadcrumb-arrow li a:hover {
    background-color: #4fc1e9;
    border: 1px solid #4fc1e9
}
.breadcrumb-arrow li a:focus:before, .breadcrumb-arrow li a:hover:before {
    border-left-color: #4fc1e9
}
.breadcrumb-arrow li a:active {
    background-color: #2494be;
    border: 1px solid #2494be
}
.breadcrumb-arrow li a:active:after, .breadcrumb-arrow li a:active:before {
    border-left-color: #2494be
}
.breadcrumb-arrow li span {
    color: #434a54
}
</style>
</head>
<body>
    <div id="app">

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
