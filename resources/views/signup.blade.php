<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="signup page">
	<meta name="keywords" content="signup sign up ">
	<meta name="author" content="Lore Vanhooren">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
	      integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<title>Products</title>
</head>
<body>
<header>
	<nav class="topnav navbar navbar-expand-lg navbar-light py-0 px-0">
		<a class="navbar-brand text-uppercase px-lg-5 mr-0" href="index.blade.php">Abani</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
		        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			<div class="navbar-nav mx-auto">
				<a class="nav-item nav-link text-uppercase active mr-xl-5 mr-lg-2" href="index.blade.php">Home <span
						class="sr-only">
					(current)</span></a>
				<a class="nav-item nav-link text-uppercase mr-xl-5 mr-lg-2" href="sale.blade.php">Sale</a>
				<a class="nav-item nav-link text-uppercase mr-xl-5 mr-lg-2" href="face.blade.php">Face</a>
				<a class="nav-item nav-link text-uppercase mr-xl-5 mr-lg-2" href="lips.blade.php">Lips</a>
				<a class="nav-item nav-link text-uppercase mr-xl-5 mr-lg-2" href="eyes.blade.php">Eyes</a>
				<a class="nav-item nav-link text-uppercase mr-xl-5 mr-lg-2" href="404.blade.php">Brands</a>
				<a class="nav-item nav-link text-uppercase mr-xl-5 mr-lg-2" href="404.blade.php">portfolio</a>
				<a class="nav-item nav-link text-uppercase mr-xl-5 mr-lg-2" href="404.blade.php">blogs</a>
			</div>
		</div>
		<div class="d-flex ">
			<form class="navbar-form collapsed navbar-right my-auto m-0 pl-2 pl-lg-0" role="search" action="/search"
			      method="get">
				<div class="form-group input-group m-0">
					<input type="text" class="form-control input-sm m-0" placeholder="Search" id="sitesearch"
					       name="query">
					<span class="input-group-addon">
						<button type="submit" class="btn btn-default btn-xs">
							<i class="fas fa-search"></i>
						</button>
					</span>
				</div>
			</form>
			
			<a href="initialize.blade.php" class="btn btn-nav ml-xl-5" role="button" >
				<i class="fas fa-cog"></i>
			</a>
			<a href="shoppingcart.blade.php" class="btn btn-nav" role="button">
				<i class="fas fa-shopping-bag"></i>
			</a>
			
			<a href="wishlist.blade.php" class="btn btn-nav" role="button">
				<i class="fab fa-gratipay"></i>
			</a>
		</div>
	
	</nav>
</header>
<main>
	<div class="container-fluid loginbg">
		<section id="signup">
			<div class="col-12 ">
				<div class="row pt-5">
					<div class="col-lg-4 col-md-6 m-auto ">
						<div class="mb-2 text-white text-center">
							<h2 class="text-uppercase shadow pb-2">Create a new account</h2>
						</div>
						<div class="mb-2">
							<form method="post">
								<div class="form-group">
									<input class="form-control bg-transparent" type="text" placeholder="Name">
								</div>
								<div class="form-group">
									<input class="form-control bg-transparent" type="email" placeholder="Email">
								</div>
								<div class="form-group">
									<input class="form-control bg-transparent" type="password" placeholder="Password">
								</div>
								<div class="form-group">
									<input class="form-control bg-transparent" type="password"
									       placeholder="Confirm password">
								</div>
								
								<div class="form-group">
									<button class="btn btn-pink btn-block" type="submit">Login
									</button>
								</div>
							</form>
						</div>
						<div class="mb-2 text-white">
							<p class="text-center"><small > By signing up, you agree to the terms of service</small></p>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		
	</div>


</main>
<footer>
	<div class="py-5" id="top">
		<div class="row text-light">
			<div class="col-10 offset-1 d-lg-flex" >
				<div class="mx-auto">
					<h1 class="pb-2 mb-4">Abani</h1>
					<div class="d-flex d-inline">
						<i class="fas fa-map-marker-alt mr-3"></i>
						<p class="text-uppercase"> any street, 126bm rositower, <br> newyork, USA</p>
					</div>
					<div class="d-flex d-inline">
						<i class="fas fa-envelope-open mr-3"></i>
						<p class="text-uppercase"><span>contact@abanistore.com</span></p>
					</div>
					<div class="d-flex d-inline">
						<i class="fas fa-phone mr-3"></i>
						<p class="text-uppercase">phone: +84 912 345 678</p>
					</div>
					<a href="https://www.facebook.com/" ><i class="fab fa-facebook-f fa-2x fa-fw py-1 rounded mr-1"></i></a>
					<a href="https://twitter.com/?lang=nl" ><i class="fab fa-twitter fa-2x fa-fw py-1 rounded mr-1"></i></a>
					<a href="https://www.youtube.com/?gl=BE"><i class="fab fa-youtube fa-2x fa-fw py-1 rounded mr-1"></i></a>
					<a href="https://www.instagram.com/?hl=nl"><i class="fab fa-instagram fa-2x fa-fw py-1 rounded mr-1"></i></a>
				</div>
				<div class="mx-auto">
					<h2 class="text-uppercase pb-3 mb-4 pt-5 pt-lg-0"> usefull links</h2>
					<ul class="text-uppercase">
						<li><a href="404.blade.php">my account</a> </li>
						<li><a href="404.blade.php">orders and returns</a></li>
						<li><a href="404.blade.php">terms of use</a></li>
						<li><a href="404.blade.php">shipping information</a></li>
					</ul>
				</div>
				<div class="mx-auto">
					<h2 class="text-uppercase pb-3 mb-4">customer care</h2>
					<ul class="text-uppercase">
						<li><a href="404.blade.php">about us</a></li>
						<li><a href="404.blade.php">terms & condition</a></li>
						<li><a href="404.blade.php">privacy policy</a></li>
						<li><a href="404.blade.php">sale & special offers</a></li>
						<li><a href="404.blade.php">contact us</a></li>
					</ul>
				</div>
				<div class="mx-auto">
					<h2 class="text-uppercase pb-3 mb-4">featured news</h2>
					<div class="d-flex pb-3">
						<img class="flex-column pr-2" src="assets/images/featuredfooter.png" alt="">
						<div>
							<h3 class="d-block"><a href="404.blade.php">Mauris bandit aliqut elit</a></h3>
							<h4 class="text-uppercase"> 11 hours ago</h4>
						</div>
					</div>
					<div class="d-flex pb-3">
						<img class="flex-column pr-2" src="assets/images/featuredfooter.png" alt="">
						<div>
							<h3 class="d-block"><a href="404.blade.php">Mauris bandit aliqut elit</a></h3>
							<h4 class="text-uppercase"> 11 hours ago</h4>
						</div>
					</div>
					<div class="d-flex pb-3">
						<img class="flex-column pr-2" src="assets/images/featuredfooter.png" alt="">
						<div>
							<h3 class="d-block"><a href="404.blade.php">Mauris bandit aliqut elit</a></h3>
							<h4 class="text-uppercase"> 11 hours ago</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="bottom">
		<div class="row">
			<div class="col-12 text-center">
				<p class="py-2 m-0"> &copy; 2019 Designed by <span>Lore Vanhooren</span> </p>
			</div>
		</div>
	</div>
</footer>



<script src="js/jquery.min.js"></script>
<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
<script src="js/main.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/scrollup/2.4.1/jquery.scrollUp.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script>


</body>
</html>
