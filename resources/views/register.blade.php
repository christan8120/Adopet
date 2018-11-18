@extends('template.login-layout')
@section('title','Registrasi Adopet')

@section('content')
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/login/register.css')}}">             
    <script src="{{asset('js/register.js')}}"></script>
    
    <script>
        var msg = '{{Session::get('alert')}}';
        var exist = '{{Session::has('alert')}}';
        if(exist){
            // swal("Yay", msg + " is successfully created!", "success");
            swal({
                title: "Yay!",
                text: msg + " is successfully created!",
                icon: "success"
            }).then(function() {
                window.location = "/";
            });
        }
    </script>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">                                                
				<div class="content">					
					<div class="content-form p-t-65 ">
                        <div class="login100-form-title p-b-49 content-title">
                            <a href="/"><img src="{{asset('image/logo/logo.png')}}" height="100%" , width="100%"></a> <br><br>
						    WELCOME TO ADOPET <br> <br>
						    Register Form <br>
                        </div>
						<form action="/register" method="post" onsubmit="return Submit()" class="login100-form validate-form">
                            @csrf
							<input id="txtName" type="text" name="name" placeholder="Full name"><br>
							<input id="txtPassword" type="password" name="password" placeholder="password"><br>
							<input id="txtPassword2" type="password" name="password2" placeholder="repeat password"><br>
							<input id="txtEmail" type="email" name="email" placeholder="email">

							<textarea id="txtAddress" name="address" placeholder="address"></textarea>

                            <div id="gender">
                                <input id="rbMale" type="radio" name="gender" value="male"><label for="rbMale">Male</label>
                                <input id="rbFemale" type="radio" name="gender" value="female" style="margin-left:30%"><label for="rbFemale">Female</label>
                            </div>

							<div id="agreement"><input id="cbxAgree" type="checkbox" name="agreement"><label for="cbxAgree"> agree with the terms and conditions</label></div>

                            <div class="container-login100-form-btn">
                                <div class="wrap-login100-form-btn">
                                    <div class="login100-form-bgbtn"></div>
                                    <button id="submit" class="login100-form-btn">
                                        Submit
                                    </button>
                                </div>
                            </div>
						</form>
					</div>
				</div>
			</div>
		</div>


	</div>
@endsection

