@extends('template.main-layout')
@section('title','Adopet')

@section('content')
    <link rel="stylesheet" type="text/css" href="{{asset('css/home.css')}}">    

    <div class="limiter">
        <div class="main-container">
                
                @if(count($pets) > 0)
                    <div class="text-center">
                    @foreach($pets as $pet)
                        <img id="myImg{{$pet->id}}" class="img-fluid img-thumbnail" src="{{asset($pet->picture_src)}}" alt="" onclick="imgOnClick({{$pet->id}})">
                    @endforeach
                    </div>
                    
                    @foreach($pets as $pet)
                    <div id="myModal{{$pet->id}}" class="modal">
                    <!-- Modal content -->
                    <div class="modal-content-1">
                        <span class="close-1">&times;</span>
                        <div class="text-center">
                            <img class="img-fluid-modal" id="alt_{{$pet->id}}" src="{{asset($pet->picture_src)}}" alt="">
                        </div>

                        <div class="">
                            <h3 class="">{{$pet->category->category_name}} Description</h3>
                            <p>{{$pet->description}}</p>                            
                        </div>
                        <button  type="button" class="btn btn-primary confirm-adopt-button" onclick="confirmationPanel();">Adopt</button>
                        <div class="text-center">
                            <button  type="button" class="btn btn-primary confirm-yes" onclick="confirmAdopt({{$pet->id}});">Yes</button>
                            <button  type="button" class="btn btn-primary confirm-no" onclick="confirmationPanel();">No</button>
                        </div>
                    </div>

                    

                    </div>
                    @endforeach
                @endif
        </div>
    </div>
    <script src="{{asset('js/home.js')}}"></script>
@endsection