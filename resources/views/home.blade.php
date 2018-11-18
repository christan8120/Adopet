@extends('template.main-layout')
@section('title','Adopet')

@section('content')
    <link rel="stylesheet" type="text/css" href="{{asset('css/home.css')}}">    

    <div class="limiter">
        <div class="main-container">            
                <header class="m-b-50">
                    <div class="header-logo">
                        <img src="{{asset('image/logo/logo.png')}}">
                    </div>
                </header>
                
                @if(count($pets) > 0)
                    <div class="">
                    @foreach($pets as $pet)
                        <img id="myImg{{$pet->id}}" class="img-fluid img-thumbnail" src="{{asset($pet->picture_src)}}" alt="" onclick="imgOnClick({{$pet->id}})">
                    @endforeach
                    </div>
                    
                    @foreach($pets as $pet)
                    <div id="myModal{{$pet->id}}" class="modal">
                    <!-- Modal content -->
                    <div class="modal-content-1">
                        <span class="close-1">&times;</span>
                        <div class="">
                            <img class="img-fluid-modal" id="alt_{{$pet->id}}" src="{{asset($pet->picture_src)}}" alt="">
                        </div>

                        <div class="">
                            <h3 class="">{{$pet->category->category_name}} Description</h3>
                            <p>{{$pet->description}}</p>                            
                        </div>
                    </div>

                    </div>
                    @endforeach
                @endif
        </div>
    </div>
    <script src="{{asset('js/home.js')}}"></script>
@endsection