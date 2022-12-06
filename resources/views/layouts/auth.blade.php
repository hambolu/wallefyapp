<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Authentication</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="{{ assets('assets/img/wallefy-logo.png') }}" type="image/x-icon"/>

	<!-- Fonts and icons -->
	<script src="{{ assets('assets/js/plugin/webfont/webfont.min.js') }}"></script>
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
	<link rel="stylesheet" href="{{ assets('assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ assets('assets/css/azzara.min.css') }}">
</head>
<body class="login">
	<div class="wrapper wrapper-login">

		<div class="container container-login animated fadeIn">
            <div class="text-center">

                <img src="{{ assets('assets/img/wallefy-logo.png') }}" width="50px" alt="Wallefy">
            </div>
            @include('layouts.flash-message')
@yield('content')
</div>
<script src="{{ assets('assets/js/core/jquery.3.2.1.min.js') }}"></script>
<script src="{{ assets('assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}"></script>
<script src="{{ assets('assets/js/core/popper.min.js') }}"></script>
<script src="{{ assets('assets/js/core/bootstrap.min.js') }}"></script>
<script src="{{ assets('assets/js/ready.js') }}"></script>
</body>
</html>

