@extends('layouts.frontend')
@section('content-frontend')
<!--start page wrapper -->
<div class="page-wrapper">
<div class="page-content">
	<!--start breadcrumb-->
	<section class="py-3 border-bottom d-none d-md-flex">
		<div class="container">
			<div class="page-breadcrumb d-flex align-items-center">
				<h3 class="breadcrumb-title pe-3">Forgot Password</h3>
				<div class="ms-auto">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb mb-0 p-0">
							<li class="breadcrumb-item">
								<a href="{{ route('home') }}"><i class="bx bx-home-alt"></i> Home</a>
							</li>
							<li class="breadcrumb-item active" aria-current="page">Forgot Password</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!--end breadcrumb-->
	<!--start shop cart-->
	<section class="">
		<div class="container">
			<div class="authentication-forgot d-flex align-items-center justify-content-center">
				<div class="card forgot-box">
					<div class="card-body">
						<form method="POST" action="{{ route('password.email') }}">
						@csrf
							<div class="p-4 rounded  border">
								<div class="text-center">
									<img src="{{ asset('frontend/assets/images/icons/forgot-2.png ') }}" width="120" alt="" />
								</div>
								<h4 class="mt-5 font-weight-bold">Forgot Password?</h4>
								<p class="">Enter your registered email ID to reset the password</p>
								<div class="my-4">
									<label class="form-label">Email id</label>
									<input type="email" type="email" name="email" class="form-control form-control-lg" placeholder="example@user.com" />
									@error('email')
										<span class="text-danger" style="font-weight: bolder;">{{ $message }}</span>
									@enderror
								</div>
								<div class="d-grid gap-2">
									<button type="submit" class="btn btn-light btn-lg">Send</button> <a href="{{ route('login') }}" class="btn btn-light btn-lg"><i class='bx bx-arrow-back me-1'></i>Back to Login</a>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--end shop cart-->
</div>
</div>
<!--end page wrapper -->
@endsection
