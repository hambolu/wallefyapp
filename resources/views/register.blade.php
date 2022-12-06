<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Authentication</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="assets/img/wallefy-logo.png" type="image/x-icon"/>

	<!-- Fonts and icons -->
	<script src="assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Open+Sans:300,400,600,700"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands"], urls: ['assets/css/fonts.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/azzara.min.css">
</head>
<body class="login">
	<div class="wrapper wrapper-login">



		<div class="container container-login">
            <div class="text-center">

                <img src="assets/img/wallefy-logo.png" width="50px" alt="Wallefy">
            </div>
			<h3 class="text-center">Sign Up</h3>
            <form action="{{ route('register') }}" method="post">
                @include('layouts.flash-message')
                @csrf
                <div class="login-form">
                    <div class="form-group form-floating-label">
                        <div class="form-group form-group-default">
                            <label>Account Type</label>
                            <select class="form-control" id="entity" name="entity" onchange="showDiv('hidden_div', this)">
                                <option value="INDIVIDUAL">Individual</option>
                                <option value="BUSINESS">Buisness</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group form-floating-label">
                        <div class="form-group form-group-default">
                            <label for="first_name" >First Name</label>
                        <input  id="first_name" name="first_name" type="text" class="form-control " required>
                        @if ($errors->has('first_name'))
                                <span class="text-danger">{{ $errors->first('first_name') }}</span>
                                @endif
                        </div>
                    </div>
                    <div class="form-group form-floating-label">
                        <div class="form-group form-group-default">
                            <label for="last_name" >Last Name</label>
                        <input  id="last_name" name="last_name" type="text" class="form-control " required>
                        @if ($errors->has('last_name'))
                                <span class="text-danger">{{ $errors->first('last_name') }}</span>
                                @endif
                        </div>
                    </div>
                    <div class="form-group form-floating-label">
                        <div class="form-group form-group-default">
                            <label for="email" >Email</label>
                        <input  id="email" name="email" type="email" class="form-control " required>
                        @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                        </div>
                    </div>
                    <div class="form-group form-floating-label">
                        <div class="form-group form-group-default">
                            <label for="password" >Password</label>
                        <input  id="password" name="password" type="password" class="form-control " required>
                        <div class="show-password">
                            <i class="flaticon-interface"></i>
                        </div>
                        </div>
                    </div>
                    <div class="form-group form-floating-label">
                        <div class="form-group form-group-default">
                            <label for="passwordConfirmation" >Confirm Password</label>
                        <input  id="passwordConfirmation" name="passwordConfirmation" type="password" class="form-control " required>
                        <div class="show-password">
                            <i class="flaticon-interface"></i>
                        </div>
                        </div>
                    </div>
                    <div class="row form-sub m-0">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" name="agree" id="agree">
                            <label class="custom-control-label" for="agree">I Agree the terms and conditions.</label>
                        </div>
                    </div>
                    <div class="form-action">
                        <button type="submit" class="btn btn-success  btn-login">Sign Up</button>
                    </div>
                    <div class="login-account">
                        <span class="msg">Already have an account ?</span>
                        <a href="/" class="link">Sign In</a>
                    </div>
                </div>
            </form>
		</div>
	</div>
	<script src="assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="assets/js/core/popper.min.js"></script>
	<script src="assets/js/core/bootstrap.min.js"></script>
	<script src="assets/js/ready.js"></script>
</body>
</html>
