@extends('template.master')
@section('master-head')                
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">     
@endsection

@section('master-navigation')
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
          <img src="{{asset('image/logo/logo.png')}}">
          Adopet
        </a>
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
@endsection

@section('master-container')
        
    <div class="wrap-login100 p-l-55 p-r-55 p-t-50 p-b-40 m-t-65">	
      @yield('content')
      
    </div>
@endsection

