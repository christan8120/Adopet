<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{asset('image/logo/logo.png')}}"/>
    
    <script type="text/javascript" src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>        
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">            
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">     
    <link rel="stylesheet" type="text/css" href="{{asset('css/login/util.css')}}">   
    
</head>

<body id="page-top">
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Adopet</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="/index">Adopt Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/informasi">Informasi Klinik</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/findlove">Find Love!</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/signout">Sign Out</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

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

