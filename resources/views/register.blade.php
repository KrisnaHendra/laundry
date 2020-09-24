<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V8</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{{ URL::asset('template/login') }}/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('template/login') }}/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('template/login') }}/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('template/login') }}/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('template/login') }}/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('template/login') }}/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('template/login') }}/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('template/login') }}/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('template/login') }}/css/util.css">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('template/login') }}/css/main.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">
		<div class="container-login100" style="background-image: url('https://png.pngtree.com/thumb_back/fh260/back_our/20190621/ourmid/pngtree-blue-laundry-liquid-promotion-poster-image_194588.jpg'); background-size: cover;">
			<div class="wrap-login100">
				<form class="login100-form validate-form p-l-55 p-r-55 p-t-100" action="{{ url('register') }}" method="POST">
          {{ csrf_field() }}
					<span class="login100-form-title" style="padding-top: 20px; padding-bottom: 20px;">
						<!-- <img src="{{ URL::asset('template/login/images/towel.png') }}" class="" alt="logo" width="60px"> -->
            Register
					</span>

					<div class="wrap-input100 validate-input m-b-10" data-validate="Please enter username">
						<input class="input100" type="text" name="name" placeholder="Full Name" style="height:45px">
						<span class="focus-input100"></span>
					</div>

          <div class="wrap-input100 validate-input m-b-10" data-validate="Please enter username">
						<input class="input100" type="text" name="username" placeholder="Username" style="height:45px">
						<span class="focus-input100"></span>
					</div>

          <div class="wrap-input100 validate-input m-b-10" data-validate="Please enter username">
						<input class="input100" type="email" name="email" placeholder="Email" style="height:45px">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Please enter password">
						<input class="input100" type="password" name="password" placeholder="Password" style="height:45px">
						<span class="focus-input100"></span>
					</div>

          <div class="wrap-input100 validate-input m-b-10" data-validate = "Please enter password">
						<input class="input100" type="password" name="password_confirmation" placeholder="Repeat Password" style="height:45px">
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" style="height:45px">
							Sign in
						</button>
					</div>


				</form>
        <div class="flex-col-c p-t-20 p-b-20">
          <span class="txt1 p-b-9">
            Developed By <a href="#">FadeIn</a>
          </span>

          <a href="{{ url('login') }}" class="txt3">
            Sign In
          </a>
        </div>
        @if ($errors->any())
            <!-- <div class="alert alert-danger">
                <ul>
                    <?php foreach($errors->all() as $error): ?>
                      <?= '<li>'.$error.'</li>' ?>
                    <?php endforeach; ?>
                </ul>
            </div>
        @endif -->
      </div>
		</div>
	</div>


<!--===============================================================================================-->
	<script src="{{ URL::asset('template/login') }}/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="{{ URL::asset('template/login') }}/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="{{ URL::asset('template/login') }}/vendor/bootstrap/js/popper.js"></script>
	<script src="{{ URL::asset('template/login') }}/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="{{ URL::asset('template/login') }}/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="{{ URL::asset('template/login') }}/vendor/daterangepicker/moment.min.js"></script>
	<script src="{{ URL::asset('template/login') }}/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="{{ URL::asset('template/login') }}/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="{{ URL::asset('template/login') }}/js/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
  @if ($errors->any())
  <script type="text/javascript">
    Swal.fire({
    title: 'Error',
    icon: 'error',
    html: '<ul>' + "<?php foreach($errors->all() as $error):?> <?= '<li>'.$error.'</li>' ?> <?php endforeach; ?>" + '</ul>',
  });
  </script>
  @endif

</body>
</html>
<!--  -->
