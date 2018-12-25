@extends('template.main-layout')
@section('title','Adopet')

@section('content')

    <link rel="stylesheet" type="text/css" href="{{asset('css/profile.css')}}">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <div class="container">
        <div class="row justify-content-center">
                <button onclick="myFunction()"class="menuP col-4"><a href="#profile">Your Profile</a></button>
                <button onclick="myFunction1()"class="menuP col-4"><a href="#adoption">Adoption</a></button>
                <button onclick="myFunction2()"class="menuP col-4"><a href="#loveMate">Love-Mate</a></button>
        </div>
            <div class="row">   
                <div class="col-md-9">
                    <div id="profile" class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4>Your Profile</h4>
                                    <hr>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <form>
                                    <div class="form-group row">
                                        <label for="email" class="col-4 col-form-label">Email*</label> 
                                        <div class="formS col-8">
                                        {{$user->email}}
                                        <!-- <input id="email" name="email" placeholder="Abcde@gmail.com" class="form-control here" required="required" type="text"> -->
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="name" class="col-4 col-form-label">Full Name</label> 
                                        <div class="formS col-8">
                                        {{$user->name}}
                                        <!-- <input id="name" name="name" placeholder="Abcde" class="form-control here" type="text"> -->
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="text" class="col-4 col-form-label">Gender</label> 
                                        <div class="formS col-8">
                                        {{$user->gender}}
                                        <!-- <input id="radio" name="gender" placeholder="Male" class="form-control here" required="required" type="text"> -->
                                        </div>
                                    </div>
                                    <!-- <div class="form-group row">
                                        <label for="select" class="col-4 col-form-label">Pet</label> 
                                        <div class="formS col-8">
                                        Dog
                                        <select id="select" name="select" class="custom-select">
                                            <option value="admin">Admin</option>
                                        </select>
                                        </div>
                                    </div> -->
                                    <div class="form-group row">
                                        <label for="address" class="col-4 col-form-label">Address</label> 
                                        <div class="formS col-8">
                                        {{$user->address}}
                                        <!-- <input id="website" name="website" placeholder="website" class="form-control here" type="text"> -->
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="phoneNumber" class="col-4 col-form-label">Phone Number</label> 
                                        <div class="formS col-8">
                                        
                                        <!-- <textarea id="publicinfo" name="publicinfo" cols="40" rows="4" class="form-control"></textarea> -->
                                        </div>
                                    </div>
                                    <!-- disini harusnya bukan submit, tapi tombol untuk masuk settings profile tapi gw bingung :) tolong dong -->
                                    <div class="form-group row">
                                        <label for="newpass" class="col-4 col-form-label">New Password</label> 
                                        <div class="formS col-8">
                                        <input id="newpass" name="newpass" placeholder="New Password" class="form-control here" type="text">
                                        </div>
                                    </div> 
                                    <!-- disini harusnya bukan submit, tapi tombol untuk masuk settings profile tapi gw bingung :) tolong dong -->
                                    <div class="form-group row">
                                        <div class="offset-4 col-8">
                                        <button class="buttonS" name="submit" type="submit">Update My Profile</button>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>

            <!-- BAGIAN PROFILE >>>> MENU ADOPTION UNTUK MELIHAT PET YANG SUDAH DI ADOPSI -->
		    <div class="row">   
		            <div class="col-md-9">
		                <div id="adoption" class="card">
		                    <div class="card-body">
		                        <div class="row">
		                            <div class="col-md-12">
		                                <h4>Your Adoption</h4>		                                
		                            </div>
		                        </div>
                                @foreach($adoptedPets as $ap)
                                <hr>
		                        <div class="row">
		                            <div class="col-md-12">
		                                <form>
		                                <div class="form-group row">
		                                    <label for="namePet" class="col-4 col-form-label">Pet Name</label> 
		                                    <div class="formS col-8">
		                                    {{$ap->fkPet->pet_name}}
		                                    <!-- <input id="email" name="email" placeholder="Abcde@gmail.com" class="form-control here" required="required" type="text"> -->
		                                    </div>
		                                </div>
		                                <div class="form-group row">
		                                    <label for="Age" class="col-4 col-form-label">Age</label> 
		                                    <div class="formS col-8">
		                                    {{$ap->fkPet->age}}
		                                    <!-- <input id="name" name="name" placeholder="Abcde" class="form-control here" type="text"> -->
		                                    </div>
		                                </div>
		                                <div class="form-group row">
		                                    <label for="gender" class="col-4 col-form-label">Gender</label> 
		                                    <div class="formS col-8">
		                                    {{$ap->fkPet->gender}}
		                                    <!-- <input id="radio" name="gender" placeholder="Male" class="form-control here" required="required" type="text"> -->
		                                    </div>
		                                </div>
		                                <div class="form-group row">
		                                    <label for="Deskripsi" class="col-4 col-form-label">Deskripsi</label> 
		                                    <div class="formS col-8">
		                                    {{$ap->fkPet->description}}
		                                    <!-- <textarea id="publicinfo" name="publicinfo" cols="40" rows="4" class="form-control"></textarea> -->
		                                    </div>
		                                </div>
		                            	</form>
		                        	</div>
		                    	</div>
                                @endforeach
		                	</div>
		            	</div>
		        	</div>
		    </div>
		    

            <!-- BAGIAN FIND LOVE >> apabila ada yang cocok dengan pet kita -->
            <div class="row">   
		            <div class="col-md-9">
		                <div id="loveMate" class="card">
		                    <div class="card-body">
		                        <div class="row">
		                            <div class="col-md-12">
		                                <h4>Your Mate</h4>		                                
		                            </div>
		                        </div>
                                <hr>
                                @foreach($loveMates as $lm)
		                        <div class="row">
		                            <div class="col-md-12">
		                                <form>
                                        <div class="form-group row">
		                                    <label for="ownerName" class="col-4 col-form-label">Owner Name</label> 
		                                    <div class="formS col-8">
		                                    {{$lm->fkUserLove->name}}
		                                    <!-- <input id="email" name="email" placeholder="Abcde@gmail.com" class="form-control here" required="required" type="text"> -->
		                                    </div>
                                        </div>
                                        <div class="form-group row">
		                                    <label for="Email" class="col-4 col-form-label">Email</label> 
		                                    <div class="formS col-8">
		                                    {{$lm->fkUserLove->email}}
		                                    <!-- <input id="email" name="email" placeholder="Abcde@gmail.com" class="form-control here" required="required" type="text"> -->
		                                    </div>
		                                </div>
		                                <div class="form-group row">
		                                    <label for="namePet" class="col-4 col-form-label">Pet Name</label> 
		                                    <div class="formS col-8">
		                                    {{$lm->fkPetLove->pet_name}}
		                                    <!-- <input id="email" name="email" placeholder="Abcde@gmail.com" class="form-control here" required="required" type="text"> -->
		                                    </div>
		                                </div>
		                                <div class="form-group row">
		                                    <label for="Age" class="col-4 col-form-label">Age</label> 
		                                    <div class="formS col-8">
		                                    {{$lm->fkPetLove->pet_age}}
		                                    <!-- <input id="name" name="name" placeholder="Abcde" class="form-control here" type="text"> -->
		                                    </div>
		                                </div>
		                                <div class="form-group row">
		                                    <label for="gender" class="col-4 col-form-label">Gender</label> 
		                                    <div class="formS col-8">
		                                    {{$lm->fkPetLove->gender}}
		                                    <!-- <input id="radio" name="gender" placeholder="Male" class="form-control here" required="required" type="text"> -->
		                                    </div>
		                                </div>
		                                <div class="form-group row">
		                                    <label for="Deskripsi" class="col-4 col-form-label">Description</label> 
		                                    <div class="formS col-8">
		                                    {{$lm->fkPetLove->description}}
		                                    <!-- <textarea id="publicinfo" name="publicinfo" cols="40" rows="4" class="form-control"></textarea> -->
		                                    </div>
                                        </div>
                                        <!-- disini harusnya bukan submit, tapi tombol untuk oke untuk menerima tapi gw bingung bikinnya harus 1-1  :) tolong dong -->
                                        <div class="form-group row">
                                            <div class="offset-4 col-8">
                                            <a href="/acceptMate/{{$lm->id}}" class="buttonS">Accept Mate!</a>
                                            </div>
                                        </div>
		                            	</form>
		                        	</div>
		                    	</div>
                                @endforeach
		                	</div>
		            	</div>
		        	</div>
		    </div>
		    
    </div>



<script src="{{asset('js/profile.js')}}"></script>
@endsection