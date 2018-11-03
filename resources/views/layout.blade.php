<!DOCTYPE html>
<html lang="en">
<style>
    body, html {
        height: 100%;
    }
</style>
<head>
    <title>@yield('title')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{asset('image/logo.ico')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
    @yield('css')

    @yield('head')
</head>

<body>
    <main>
        <!-- Content goes here -->
        @yield('content')
    </main>

    <div class="footer">
        <div class="footer-title">
            Copyright &copy; 2018 | Powered by ADOPET
        </div>

        <div class="footer-media">
            <a href="https://www.facebook.com">
                <img src="{{URL::asset('image/logo/facebook.png')}}" width="25" height="25">
            </a>
            <a href="https://www.instagram.com">
                <img src="{{URL::asset('image/logo/instagram.png')}}" width="25" height="25">
            </a>
        </div>

    </div>
</body>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
</html>