@extends('layouts.app')
@section('content')
	<div class="container-fluid">
		<section id="BCproducts" class="row BC">
			<div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb mb-0 pl-0">
						<li class="breadcrumb-item"><a href="index.blade.php">Home</a></li>
						<li class="breadcrumb-item active" aria-current="page">404 page</li>
					</ol>
				</nav>
			</div>
		</section>
		<section id="404" class="row text-dark">
			<div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1 text-center my-5">
				<h1 class="display-1 mb-5">404</h1>
				<h2 class="text-uppercase mb-5">We're sorry, but the page you were <br>looking for doesn't exist.</h2>
				<a href="details.blade.php" class="btn btn-pink">Back to previous page</a>
			</div>
		</section>
	</div>
@endsection
