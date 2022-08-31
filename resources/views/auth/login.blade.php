@extends('layouts.admin.master')

@section('text')

<div class="form-structor">
	<div class="signup slide-up">

		<h2 class="form-title" id="signup"><span>or</span>Sign up</h2>
		<div class="form-holder">
			<input type="text" class="input" placeholder="Name" />
			<input type="email" class="input" placeholder="Email" />
			<input type="password" class="input" placeholder="Password" />
		</div>
		<button class="submit-btn">Sign up</button>
	</div>
	<div class="login ">
		<div class="center">
			<h2 class="form-title" id="login"><span>or</span>Log in</h2>
			<form method="post" action="{{ route('login') }}">
				@csrf
				<div class="form-holder">
					<input type="email" class="input" name="email" id="username" placeholder="Email" />
					<input type="password" class="input" name="password" id="password" placeholder="Password" />
				</div>
				<button class="submit-btn">Log in</button>
			</form>
		</div>
	</div>
</div>



<!-- <form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
@csrf
					<center>
						<img src="{{ asset('admin/images/logo.png')}}">
					</center>
					<span class="login100-form-title p-b-34 p-t-15">
						<h1>เข้าสู่ระบบ</h1>
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="email" placeholder="Username" id="username">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="password" placeholder="Password" id="password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

					<div class="text-center p-t-90">
						<a class="txt1" href="{{ route('password.request') }}">
							Forgot Password?
						</a>
					</div>
</form> -->
@endsection
