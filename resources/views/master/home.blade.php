@extends('layout')
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
        .modal-content {
            background-color: #fefefe;
            margin: auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
        }

        /* The Close Button */
        .close {
            color: #aaaaaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }
        .img-fluid{
<<<<<<< HEAD
                width:30%;
                height:170px;
                margin:1%;
            }
        @media(max-width: 576px){
            .img-fluid{
                width:30%;
                height:100px;
                margin:1%;
            }
        }
=======
            width:30%;
            height:170px;
            margin:1%;
        }
        
        .img-fluid-modal{
                width:300px;
                height:300px;
                margin:1%;
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
>>>>>>> f5f4ce18594124a208d7d345e101bf7473825e4f


    </style>
    
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">

                @if(count($pets) > 0)
                    <div class="col-lg-3 col-md-4 col-xs-6">
<<<<<<< HEAD
                    @foreach($pets as $pet)                    
                        <img id="myImg{{$pet->id}}" class="img-fluid img-thumbnail" src="{{asset($pet->picture_src)}}" alt="" onclick="imgOnClick({{$pet->id}})">                    
                    @endforeach
                    </div>
=======
                    @foreach($pets as $pet)
                        <img id="myImg{{$pet->id}}" class="img-fluid img-thumbnail" src="{{asset($pet->picture_src)}}" alt="" onclick="imgOnClick({{$pet->id}})">
                    @endforeach
                    </div>
                    
>>>>>>> f5f4ce18594124a208d7d345e101bf7473825e4f
                    @foreach($pets as $pet)
                    <div id="myModal{{$pet->id}}" class="modal">
                    <!-- Modal content -->
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <div class="col-md-8">
                            <img class="img-fluid-modal" id="alt_{{$pet->id}}" src="{{asset($pet->picture_src)}}" alt="">
                        </div>

                        <div class="col-md-4">
                            <h3 class="my-3">{{$pet->category->category_name}} Description</h3>
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
                
            </div>
        </div>
    </div>

@endsection