<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{asset('image/logo/logo.png')}}"/>
    
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">    
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">    
    <link rel="stylesheet" type="text/css" href="{{asset('css/login/util.css')}}">
    <script type="text/javascript" src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>  

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
</html>