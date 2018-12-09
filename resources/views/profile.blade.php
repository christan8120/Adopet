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
                                        Abcde@gmail.com
                                        <!-- <input id="email" name="email" placeholder="Abcde@gmail.com" class="form-control here" required="required" type="text"> -->
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="name" class="col-4 col-form-label">Full Name</label> 
                                        <div class="formS col-8">
                                        Abcde
                                        <!-- <input id="name" name="name" placeholder="Abcde" class="form-control here" type="text"> -->
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="text" class="col-4 col-form-label">Gender</label> 
                                        <div class="formS col-8">
                                        Male
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
                                        Jl. dimana-mana hatiku senang
                                        <!-- <input id="website" name="website" placeholder="website" class="form-control here" type="text"> -->
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="phoneNumber" class="col-4 col-form-label">Phone Number</label> 
                                        <div class="formS col-8">
                                        0857788441122
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
		                                <hr>
		                            </div>
		                        </div>
		                        <div class="row">
		                            <div class="col-md-12">
		                                <form>
		                                <div class="form-group row">
		                                    <label for="namePet" class="col-4 col-form-label">Pet Name</label> 
		                                    <div class="formS col-8">
		                                    Doggy
		                                    <!-- <input id="email" name="email" placeholder="Abcde@gmail.com" class="form-control here" required="required" type="text"> -->
		                                    </div>
		                                </div>
		                                <div class="form-group row">
		                                    <label for="Age" class="col-4 col-form-label">Age</label> 
		                                    <div class="formS col-8">
		                                    5
		                                    <!-- <input id="name" name="name" placeholder="Abcde" class="form-control here" type="text"> -->
		                                    </div>
		                                </div>
		                                <div class="form-group row">
		                                    <label for="gender" class="col-4 col-form-label">Gender</label> 
		                                    <div class="formS col-8">
		                                    Male
		                                    <!-- <input id="radio" name="gender" placeholder="Male" class="form-control here" required="required" type="text"> -->
		                                    </div>
		                                </div>
		                                <div class="form-group row">
		                                    <label for="Deskripsi" class="col-4 col-form-label">Deskripsi</label> 
		                                    <div class="formS col-8">
		                                    blam-blam-blam-blam-blam
		                                    <!-- <textarea id="publicinfo" name="publicinfo" cols="40" rows="4" class="form-control"></textarea> -->
		                                    </div>
		                                </div>
		                            	</form>
		                        	</div>
		                    	</div>
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
		                                <hr>
		                            </div>
		                        </div>
		                        <div class="row">
		                            <div class="col-md-12">
		                                <form>
                                        <div class="form-group row">
		                                    <label for="ownerName" class="col-4 col-form-label">Owner Name</label> 
		                                    <div class="formS col-8">
		                                    Fghijk
		                                    <!-- <input id="email" name="email" placeholder="Abcde@gmail.com" class="form-control here" required="required" type="text"> -->
		                                    </div>
                                        </div>
                                        <div class="form-group row">
		                                    <label for="Email" class="col-4 col-form-label">Email</label> 
		                                    <div class="formS col-8">
		                                    Fghijk@gmail.com
		                                    <!-- <input id="email" name="email" placeholder="Abcde@gmail.com" class="form-control here" required="required" type="text"> -->
		                                    </div>
		                                </div>
		                                <div class="form-group row">
		                                    <label for="namePet" class="col-4 col-form-label">Pet Name</label> 
		                                    <div class="formS col-8">
		                                    Doggy
		                                    <!-- <input id="email" name="email" placeholder="Abcde@gmail.com" class="form-control here" required="required" type="text"> -->
		                                    </div>
		                                </div>
		                                <div class="form-group row">
		                                    <label for="Age" class="col-4 col-form-label">Age</label> 
		                                    <div class="formS col-8">
		                                    5
		                                    <!-- <input id="name" name="name" placeholder="Abcde" class="form-control here" type="text"> -->
		                                    </div>
		                                </div>
		                                <div class="form-group row">
		                                    <label for="gender" class="col-4 col-form-label">Gender</label> 
		                                    <div class="formS col-8">
		                                    Male
		                                    <!-- <input id="radio" name="gender" placeholder="Male" class="form-control here" required="required" type="text"> -->
		                                    </div>
		                                </div>
		                                <div class="form-group row">
		                                    <label for="Deskripsi" class="col-4 col-form-label">Description</label> 
		                                    <div class="formS col-8">
		                                    blam-blam-blam-blam-blam
		                                    <!-- <textarea id="publicinfo" name="publicinfo" cols="40" rows="4" class="form-control"></textarea> -->
		                                    </div>
                                        </div>
                                        <!-- disini harusnya bukan submit, tapi tombol untuk oke untuk menerima tapi gw bingung bikinnya harus 1-1  :) tolong dong -->
                                        <div class="form-group row">
                                            <div class="offset-4 col-8">
                                            <button class="buttonS" name="submit" type="submit">Accept Mate!</button>
                                            </div>
                                        </div>
		                            	</form>
		                        	</div>
		                    	</div>
		                	</div>
		            	</div>
		        	</div>
		    </div>
		    
    </div>



<script src="{{asset('js/profile.js')}}"></script>
@endsection