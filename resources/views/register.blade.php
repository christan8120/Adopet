@extends('layout')
@section('title','Registrasi Adopet')

@section('head')
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/login/register.css')}}">

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@endsection

@section('content')
    <script>
        function Submit(){
            var txtName = $('#txtName');
            var txtAddress = $('#txtAddress');
            var txtEmail = $('#txtEmail');
            var txtPassword = $('#txtPassword');
            var txtPassword2 = $('#txtPassword2');
            var rbFemale = $('#rbFemale');
            var rbMale = $('#rbMale');
            var cbxAgree = $('#cbxAgree');

            if(txtName.val().length < 5){
                swal("","Your name needs to be at least 5 chars!", "error");
                return false;
            }
            else if(txtPassword.val()===""){
                swal("","Your password hasn't been filled", "error");
                return false;
            }
            else if(txtPassword.val()!==txtPassword2.val()){
                swal("","Your passwords don't match", "error");
                return false;
            }
            else if(txtEmail.val()===""){
                swal("","Your email hasn't been filled", "error");
                return false;
            }
            else if(txtAddress.val()===""){
                swal("","Your address hasn't been filled", "error");
                return false;
            }
            else if(!rbMale.prop('checked') && !rbFemale.prop('checked')){
                swal("","Your haven't chosen your gender!", "error");
                return false;
            }
            else if(!cbxAgree.prop('checked')){
                swal("","Your have not checked the terms and conditions", "error");
                return false;
            }
            return true;
        }
    </script>


	<div class="limiter">
		<div class="container-login100">
			<div class="container wrap-login100">
				<div class="header">
					<div class="header-logo">
						<a href="/login"><img src="{{URL::asset('image/logo/logo.png')}}" ></a>
					</div>
				</div>
				<div class="content">
					<div class="content-title">
						Register Form
					</div>

					<div class="content-form">
						<form action="/login" method="post" onsubmit="return Submit()">
							<input id="txtName" type="text" name="Full name" placeholder="Full name"><br>
							<input id="txtPassword" type="password" name="password" placeholder="password"><br>
							<input id="txtPassword2" type="password" name="password" placeholder="password"><br>
							<input id="txtEmail" type="email" name="email" placeholder="email">

							<textarea id="txtAddress" placeholder="address"></textarea>

                            <div id="gender">
                                <input id="rbMale" type="radio" name="gender">Male
                                <input id="rbFemale" type="radio" name="gender" style="margin-left:30%">Female
                            </div>

							<div id="agreement"><input id="cbxAgree" type="checkbox" name="agreement"> I agree with the terms and conditions</div>

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

