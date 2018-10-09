<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <script src="main.js"></script>
</head>
<body>
    <div class="content">
        <header class="header-content">
            <div class="header-content-title"></div>
            <div class="header-content-menu"></div>
        </header>
        <main class="main-content">@yield('content')</main>
        <footer class="footer-content"></footer>
    </div>
</body>
</html>