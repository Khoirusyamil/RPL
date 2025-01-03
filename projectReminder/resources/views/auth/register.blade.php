<!doctype html>
<html lang="en">
  <head>
  	<title>Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="{{asset('logregister/css/style.css')}}">

	</head>
	<body>
	<x-auth-session-status class="mb-4" :status="session('status')" />
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<!-- <h2 class="heading-section">Login #04</h2> -->
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="img" style="background-image: url('{{asset('logregister/images/sb.png')}}');">
			      </div>
						<div class="login-wrap p-4 p-md-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4">Sign Up</h3>
			      		</div>
								<!-- <div class="w-100">
									<p class="social-media d-flex justify-content-end">
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
									</p>	
								</div> -->
			      	</div>
					  <form method="POST"  class="signin-form" action="{{ route('register') }}">
						@csrf
                        <div class="form-group mb-3">
			      			<label class="label" for="name">Name</label>
			      			<input type="text" id="name" name="name" :value="old('name')" required autofocus autocomplete="username" class="form-control" placeholder="Username">
							<x-input-error :messages="$errors->get('name')" class="mt-2" />
			      		</div>
			      		<div class="form-group mb-3">
			      			<label class="label" for="email">Email</label>
			      			<input type="email" id="email" name="email" :value="old('email')" required autofocus autocomplete="email" class="form-control" placeholder="Username">
							<x-input-error :messages="$errors->get('email')" class="mt-2" />
			      		</div>
						<div class="form-group mb-3">
							<label class="label" for="password">Password</label>
							<input type="password" id="password" name="password" required autocomplete="password" class="form-control" placeholder="Password">
							<x-input-error :messages="$errors->get('password')" class="mt-2" />
						</div>
                        <div class="form-group mb-3">
							<label class="label" for="password_confirmation">Password</label>
							<input type="passwordd" id="password_confirmation" name="password_confirmation" required autocomplete="password_confirmation" class="form-control" placeholder="Password">
							<x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
						</div>
		            <div class="form-group">
		            	<button type="submit" class="form-control btn-primary rounded submit ">Sign Up</button>
		            </div>
		            <!-- <div class="form-group d-md-flex">
		            	<div class="w-50 text-left">
			            	<label class="checkbox-wrap checkbox-primary mb-0">Remember Me
									  <input type="checkbox" checked>
									  <span class="checkmark"></span>
										</label>
									</div>
									<div class="w-50 text-md-right">
										<a href="#">Forgot Password</a>
									</div>
		            </div> -->
		          </form>
		          <p class="text-center">Not a member? <a class="text-primary" href="{{route('login')}}">Sign In</a></p>
                  <p class="text-center">Back to <a class="text-primary" href="{{url('/')}}">Home</a></p>
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="{{asset('logregister/js/jquery.min.js')}}"></script>
  <script src="{{asset('logregister/js/popper.js')}}"></script>
  <script src="{{asset('logregister/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('logregister/js/main.js')}}"></script>

	</body>
</html>

