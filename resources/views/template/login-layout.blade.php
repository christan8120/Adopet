@extends('template.master')
@section('master-head')        
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>  
@endsection

@section('master-container')
    <div class="wrap-login100 p-l-55 p-r-55 p-t-50 p-b-40">        
        @yield('back')
        <span class="login100-form-title p-b-49">
            <img src="{{asset('image/logo/logo.png')}}" height="100%" , width="100%"> <br><br>
            WELCOME TO ADOPET <br> <br>
            @yield('title') <br>
        </span>	

        @yield('content')
    </div>
@endsection