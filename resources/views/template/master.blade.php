<!DOCTYPE html>
<html lang="en">
    <head>
        <title>@yield('title')</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="{{asset('image/logo/logo.png')}}"/>
        
        <script type="text/javascript" src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
                
        <link rel="stylesheet" type="text/css" href="{{asset('css/login/util.css')}}">   
        <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">       

        @yield('master-head')
    </head>
    <body id="page-top">
        @yield('master-navigation')
        <main>
            <div class="limiter">
                <div class="container-login100">
                    @yield('master-container')
                </div>
            </div>
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
</html>