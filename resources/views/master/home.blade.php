@extends('masterpage/main-layout')
@section('title','Adopet')

@section('content')
    <script src="{{asset('js/home.js')}}"></script>

    <style>
        body {font-family: Arial, Helvetica, sans-serif;}

        /* The Modal (background) */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            padding-top: 100px; /* Location of the box */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        }

        /* Modal Content */
        .modal-content-1 {
            background-color: #fefefe;
            margin: auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
        }

        /* The Close Button */
        .close-1 {
            color: #aaaaaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close-1:hover,
        .close-1:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }

        /* ------ */
        .img-fluid{
            width:30%;
            height:300px;
            margin:1%;
        }
        
        .img-fluid-modal{
            width:300px;
            height:300px;
            margin:1%;
        }
        
        .header{
            width: 100%;
            height: 50%;
        }

        .header-logo{
            text-align: center;
        }

        .header-logo img{
            width:90vw;
            max-width: 500px;
        }

        @media(max-width: 576px){
            .img-fluid{
                width:30%;
                height:100px;
                margin:1%;
            }

            .img-fluid-modal{
                width:170px;
                height:170px;
                margin:1%;
            }
        }


    </style>
    
    <div class="limiter">
        <div class="container-login100">
            <!-- <div class="wrap-login100"> -->
                <header>
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
                            <!-- <h3 class="my-3">Project Details</h3> -->
                            <!--  <ul>
                            <li>Lorem Ipsum</li>
                            <li>Dolor Sit Amet</li>
                            <li>Consectetur</li>
                            <li>Adipiscing Elit</li>
                            </ul> -->
                        </div>
                    </div>

                    </div>
                    @endforeach
                @endif
                
            <!-- </div> -->
        </div>
    </div>

@endsection