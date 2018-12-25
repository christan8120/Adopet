@extends('template.login-layout')
@section('title','Login')

@section('content')	
	<link rel="stylesheet" type="text/css" href="{{asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('fonts/iconic/css/material-design-iconic-font.min.css')}}">		    

	{{-- <script>
	var exist = '{{Session::has('error')}}';
		if(exist){			
			swal({
				title: "Opps...",
				text: "Wrong email or password",
				icon: "error"
			});
		}
	</script> --}}
	<script>
        var msg = '{{Session::get('alert')}}';
        var exist = '{{Session::has('alert')}}';
        if(exist){
            swal({
                title: "Oops!",
                text: msg,
                icon: "warning"
            });
        }
    </script>
	<form class="login100-form validate-form" method="post" action="/login/submit">
	{{csrf_field()}}				
		<div class="wrap-input100 validate-input m-b-23" data-validate = "Email is required">
			<span class="label-input100">Email</span>
			<input class="input100" type="email" name="username" placeholder="Type your email">
			<span class="focus-input100" data-symbol="&#xf206;"></span>
		</div>

		<div class="wrap-input100 validate-input" data-validate="Password is required">
			<span class="label-input100">Password</span>
			<input class="input100" type="password" name="pass" placeholder="Type your password">
			<span class="focus-input100" data-symbol="&#xf190;"></span>
		</div>

		<div class="text-right p-t-8 p-b-31">
			<a href="#">
				Forgot password?
			</a>
		</div>

		<div class="container-login100-form-btn">
			<div class="wrap-login100-form-btn">
				<div class="login100-form-bgbtn"></div>
				<button class="login100-form-btn">
					Login
				</button>
			</div>
		</div>	
		<div class="txt1 text-center p-t-54 p-b-20">
			<span>
				Or Sign Up Using
			</span>
		</div>

		<div class="flex-c-m">
			<a href="{{url('/loginProvider/facebook')}}" class="login100-social-item bg1">
				<i class="fa fa-facebook"></i>
			</a>

			<a href="{{url('/loginProvider/twitter')}}" class="login100-social-item bg2">
				<i class="fa fa-twitter"></i>
			</a>

			<a href="{{url('/loginProvider/google')}}" class="login100-social-item bg3">
				<i class="fa fa-google"></i>
			</a>
		</div>

		<div class="flex-col-c p-t-15">
			<a href="/register" class="txt2">
				Sign Up
			</a>
		</div>
	</form>
	<script src="{{asset('js/login/main.js')}}"></script>
@endsection

	<!-- <script src="vendor/animsition/js/animsition.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>	
	<script src="vendor/select2/select2.min.js"></script>
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<script src="vendor/countdowntime/countdowntime.js"></script> -->
