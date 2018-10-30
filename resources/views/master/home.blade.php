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
            width:250px;
            height:250px;
            margin:1%;
        }
        


    </style>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100" style="text-align:center;">

                @if(count($pets) > 0)
                    @foreach($pets as $pet)
                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <img id="myImg{{$pet->id}}" class="img-fluid img-thumbnail" src="{{asset($pet->picture_src)}}" alt="" onclick="imgOnClick({{$pet->id}})">
                    </div>

                    <div id="myModal{{$pet->id}}" class="modal">
                    <!-- Modal content -->
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <div class="col-md-8">
                            <img class="img-fluid" id="alt_{{$pet->id}}" src="{{asset($pet->picture_src)}}" alt="">
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
                <!-- <div class="col-lg-3 col-md-4 col-xs-6">

                    <img id="myImg1" class="img-fluid img-thumbnail" src="{{asset('image/pet/cat/1.jpg')}}" alt="">
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6">
                    <img id="myImg2" class="img-fluid img-thumbnail" src="{{asset('image/pet/cat/2.jpg')}}" alt="">
                </div> -->

                <!-- <div id="myModal1" class="modal"> -->

                    <!-- Modal content -->
                    <!-- <div class="modal-content">
                        <span class="close">&times;</span>
                        <div class="col-md-8">
                            <img class="img-fluid" id="alt_1" src="{{asset('image/pet/cat/1.jpg')}}" alt="">
                        </div>

                        <div class="col-md-4">
                            <h3 class="my-3">Project Description</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim.</p>
                             <h3 class="my-3">Project Details</h3> -->
                            <!--  <ul>
                               <li>Lorem Ipsum</li>
                               <li>Dolor Sit Amet</li>
                               <li>Consectetur</li>
                               <li>Adipiscing Elit</li>
                             </ul> -->
                        <!-- </div>
                    </div>

                </div>  -->

                <!-- The Modal -->
                <!-- <div id="myModal2" class="modal"> -->

                    <!-- Modal content -->
                    <!-- <div class="modal-content">
                        <span class="close">&times;</span>
                        <div class="col-md-8">
                            <img class="img-fluid" id="alt_1" src={{asset('image/pet/cat/2.jpg')}} alt="">
                        </div>

                        <div class="col-md-4">
                            <h3 class="my-3">Project Description</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim.</p>
                            <h3 class="my-3">Project Details</h3>
                            <ul>
                                <li>Lorem Ipsum</li>
                                <li>Dolor Sit Amet</li>
                                <li>Consectetur</li>
                                <li>Adipiscing Elit</li>
                            </ul>
                        </div>
                    </div>

                </div> -->
            </div>
        </div>
    </div>

@endsection