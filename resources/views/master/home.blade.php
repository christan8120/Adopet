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


    </style>
    
    <div class="limiter">
        <div class="container-login100">
        <div class="add">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
        </div>
            <div class="wrap-login100">

                @if(count($pets) > 0)
                    <div class="col-lg-3 col-md-4 col-xs-6">
                    @foreach($pets as $pet)
                        <img id="myImg{{$pet->id}}" class="img-fluid img-thumbnail" src="{{asset($pet->picture_src)}}" alt="" onclick="imgOnClick({{$pet->id}})">
                    @endforeach
                    </div>
                    
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