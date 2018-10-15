<!DOCTYPE html>
<html>
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
		else if(!rbMale.prop('checked') && !rbFemale.prop('checked')){
			swal("","Your haven't chosen your gender!", "error");
			return false;
		}
		else if(txtAddress.val()===""){
			swal("","Your address hasn't been filled", "error");
			return false;
		}
		else if(!cbxAgree.prop('checked')){
			swal("","Your have not checked the terms and conditions", "error");
			return false;
		}
		return true;
	}	
</script>

<style>
	body {
		background-image: url('{{ asset('image/bg-01.jpg') }}');
	}
</style>

<head>
	<title>Registrasi Adopet</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="{{URL::asset('css/login/register.css')}}">

	<link rel="stylesheet" type="text/css" href="{{asset('css/login/main.css')}}">

	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
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
						<form action="/" method="post" onsubmit="return Submit()">
							<input id="txtName" type="text" name="Full name" placeholder="Full name"><br>
							<input id="txtPassword" type="password" name="password" placeholder="password"><br>
							<input id="txtPassword2" type="password" name="password" placeholder="password"><br>
							<input id="txtEmail" type="email" name="email" placeholder="email">

							<div id="gender">
								<input id="rbMale" type="radio" name="gender">Male
								<input id="rbFemale" type="radio" name="gender" style="margin-left:30%">Female
							</div>

							<textarea id="txtAddress" placeholder="address" style="height: 65px"></textarea>
							<div id="agreement"><input id="cbxAgree" type="checkbox" name="agreement"> I agree with the terms and conditions</div>

							<input id="submit" type="submit" value="submit" >

						</form>

					</div>
				</div>
			</div>
		</div>

		<div class="footer">
			<div class="footer-title">
				Copyright &copy; 2018 | Powered by ADOPET
			</div>

			<div class="footer-media">
				<a href="https://www.facebook.com">
					<img src="{{URL::asset('image/logo/facebook.png')}}" width="25" height="25">
				</a>
				<a href="https://www.instagram.com">
					<img src="{{URL::asset('image/logo/instagram.png')}}" width="25" height="25">
				</a>
			</div>
		</div>
	</div>
</body>
</html>

