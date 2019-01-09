@extends('template.main-layout')
@section('title','Find Love')

@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" type="text/css" href="{{asset('css/findlove.css')}}">

<div class="limiter">    
    @if(count($usersPets) > 0)
    <div class="row">
                <p for="">Choose Your Pet</p>
                <select name="mypet" id="selectMyPet">
                    @foreach($usersPets as $pet)
                        <option value="{{$pet->id}}">{{$pet->pet_name}}</option>
                    @endforeach
                </select>
            </div>  
    @endif
    <div class="demo__content">
        <div class="demo__card-cont">
            @if(count($usersPets)<=0)
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" id="btnPopUp" >Add Pet                
            </button>              
            @endif      
            <div class="modal fade" id="myModal">
                <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                
                    <div class="modal-header">
                    <h4 class="modal-title">You don't have any pet(s)</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <form action="/savePet" method="POST" enctype="multipart/form-data">
                        {{@csrf_field()}}
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="">Pet Name</label>
                                <input class="form-control" type="text" name="pet_name" placeholder="pet_name">                                
                            </div>
                            <div class="form-group">
                            <label for="">Age</label>
                                <input class="form-control" type="text" name="age" placeholder="age">
                            </div>
                            <div class="form-group">
                            <label for="">Gender</label>
                                <input class="form-control" type="text" name="gender" placeholder="gender">
                            </div>
                            <div class="form-group">
                            <label for="">Description</label>
                                <input class="form-control" type="text" name="description" placeholder="description">
                            </div>
                            <div class="form-group">
			                    <label for="category_id">Category</label>
			                    <select name="category_id" class="form-control">
                                    @foreach($categories as $category)					
                                    <option value="{{$category->id}}">{{$category->category_name}}</option>				
                                    @endforeach
			                    </select>
		                    </div>
                            
                            {{--<--Input file-->--}}
                            <input type="file" name="picture_src"><br>
                        </div>
                        
                        <div class="modal-footer">
                        <button class="btn btn-secondary">Save</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="window.location='/index'">
                            Adopt                            
                        </button>
                        </div>
                    </form>
                </div>
                </div>
            </div>          
            @if(count($usersPets)>0)        
            @foreach($availablePets as $pet)
            <div class="demo__card" id="{{$pet->id}}">
                <img src="{{asset($pet->picture_src)}}" alt="" width="100%" heigth="100%">
                <!-- <div class="demo__card__top brown">
                    <div class="demo__card__img"></div>
                    <p class="demo__card__name">Hungry cat 6</p>
                </div>!-->
                <!-- <div class="demo__card__btm">
                    <p class="demo__card__we">Whatever</p>                    
                </div> -->
                <div class="demo__card__choice m--reject"></div>
                <div class="demo__card__choice m--like"></div>
                <div class="demo__card__drag"></div>
                <div class="text-center">{{$pet->user->name}}</div>      
            </div>      
            
            @endforeach
            @endif
            <!-- <div class="demo__card">
                <div class="demo__card__top lime">
                    <div class="demo__card__img"></div>
                    <p class="demo__card__name">Hungry cat 5</p>
                </div>
                <div class="demo__card__btm">
                    <p class="demo__card__we">Whatever</p>
                </div>
                <div class="demo__card__choice m--reject"></div>
                <div class="demo__card__choice m--like"></div>
                <div class="demo__card__drag"></div>
            </div>
            <div class="demo__card">
                <div class="demo__card__top cyan">
                    <div class="demo__card__img"></div>
                    <p class="demo__card__name">Hungry cat 4</p>
                </div>
                <div class="demo__card__btm">
                    <p class="demo__card__we">Whatever</p>
                </div>
                <div class="demo__card__choice m--reject"></div>
                <div class="demo__card__choice m--like"></div>
                <div class="demo__card__drag"></div>
            </div>
            <div class="demo__card">
                <div class="demo__card__top indigo">
                    <div class="demo__card__img"></div>
                    <p class="demo__card__name">Hungry cat 3</p>
                </div>
                <div class="demo__card__btm">
                    <p class="demo__card__we">Whatever</p>
                </div>
                <div class="demo__card__choice m--reject"></div>
                <div class="demo__card__choice m--like"></div>
                <div class="demo__card__drag"></div>
            </div>
            <div class="demo__card">
                <div class="demo__card__top blue">
                    <div class="demo__card__img"></div>
                    <p class="demo__card__name">Hungry cat 2</p>
                </div>
                <div class="demo__card__btm">
                    <p class="demo__card__we">Whatever</p>
                </div>
                <div class="demo__card__choice m--reject"></div>
                <div class="demo__card__choice m--like"></div>
                <div class="demo__card__drag"></div>
            </div>
            <div class="demo__card">
                <div class="demo__card__top purple">
                    <div class="demo__card__img"></div>
                    <p class="demo__card__name">Hungry cat</p>
                </div>
                <div class="demo__card__btm">
                    <p class="demo__card__we">Whatever</p>
                </div>
                <div class="demo__card__choice m--reject"></div>
                <div class="demo__card__choice m--like"></div>
                <div class="demo__card__drag"></div>
            </div> -->
        </div>        
    </div>
</div>
<script>    
    @if(count($usersPets)>0)    
    @else
    $('#btnPopUp').click();
    @endif
</script>            
<script src="{{asset('js/findlove.js')}}"></script>
@endsection