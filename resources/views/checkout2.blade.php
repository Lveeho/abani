<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="checkout step 2">
	<meta name="keywords" content="checkout step 2">
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
	<div class="container-fluid">
		<section id="BCproducts" class="row BC">
			<div class="col-lg-8 offset-lg-2">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb mb-0 pl-0">
						<li class="breadcrumb-item"><a href="index.blade.php">Home</a></li>
						<li class="breadcrumb-item active" aria-current="page">Checkout</li>
					</ol>
				</nav>
			</div>
		</section>
		
		<section id="checkout" class="row">
			<div class="col-lg-8 offset-lg-2">
				<h2 class="text-uppercase text-dark py-5 ">Checkout</h2>
				<div class="row mb-5 text-dark">
					<div class="col-lg-8">
						<div style="position: relative">
							<ul class="custom-nav nav nav-pills mb-5">
								<li class="nav-item w-25 text-dark">
									<a href="checkout1.blade.php" class="nav-link text-sm active">
										
										<span class="fa-stack">
											<i class="fas fa-circle fa-stack-2x"></i>
											<i class="far fa-edit fa-stack-1x fa-inverse"></i>
										</span>
										<p>Address</p>
									</a>
								</li>
								<li class="nav-item w-25">
									<a href="#" class="nav-link text-sm active">
										<span class="fa-stack">
											<i class="fas fa-circle fa-stack-2x"></i>
											<i class="fas fa-map-marker-alt fa-stack-1x fa-inverse"></i>
										</span>
										<p>Delivery Method</p>
									</a>
								</li>
								<li class="nav-item w-25">
									<a href="#" class="nav-link text-sm disabled">
										<span class="fa-stack">
											<i class="fas fa-circle fa-stack-2x"></i>
											<i class="fas fa-wallet fa-stack-1x fa-inverse"></i>
										</span>
										<p>Payment Method</p>
									</a>
								</li>
								<li class="nav-item w-25">
									<a href="#" class="nav-link text-sm disabled">
										<span class="fa-stack">
											<i class="fas fa-circle fa-stack-2x"></i>
											<i class="fas fa-scroll fa-stack-1x fa-inverse"></i>
										</span>
										<p>Order Review</p>
									</a>
								</li>
							</ul>
							<div id="timeline">
							</div>
						</div>
						<div class="block my-5">
							<div class="block-body">
								<div class="row">
									<div class="form-group col-md-6 d-flex align-items-center">
										<input type="radio" name="shippping" id="option0">
										<label for="option0" class="ml-3"><strong class="d-block text-uppercase mb-2">Usps next day</strong><span class="text-muted text-sm">Get it right on next day - fastest option possible.</span></label>
									</div>
									<div class="form-group col-md-6 d-flex align-items-center">
										<input type="radio" name="shippping" id="option1">
										<label for="option1" class="ml-3"><strong class="d-block text-uppercase mb-2">Usps next day</strong><span class="text-muted text-sm">Get it right on next day - fastest option possible.</span></label>
									</div>
									<div class="form-group col-md-6 d-flex align-items-center">
										<input type="radio" name="shippping" id="option2">
										<label for="option2" class="ml-3"><strong class="d-block text-uppercase mb-2">Usps next day</strong><span class="text-muted text-sm">Get it right on next day - fastest option possible.</span></label>
									</div>
									<div class="form-group col-md-6 d-flex align-items-center">
										<input type="radio" name="shippping" id="option3">
										<label for="option3" class="ml-3"><strong class="d-block text-uppercase mb-2">Usps next day</strong><span class="text-muted text-sm">Get it right on next day - fastest option possible.</span></label>
									</div>
								</div>
							</div>
							<div class="mb-5 d-flex justify-content-between flex-column flex-lg-row"><a
                                href="checkout1.blade.php" class="btn btn-link text-muted"> <i
									class="fa fa-angle-left mr-2"></i>Back to the addresses</a><a
                                    href="checkout3.blade.php" class="btn btn-pink">Choose payment method<i
									class="fa fa-angle-right ml-2"></i></a></div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="block mb-5">
							<div class="block-header">
								<h3 class="text-uppercase mb-0"><strong>Order Summary</strong></h3>
							</div>
							<div class="block-body bg-light pt-1">
								<p class="text-sm">Shipping and additional costs are calculated based on values you have entered.</p>
								<ul class="order-summary mb-0 list-unstyled">
									<li class="order-summary-item"><span>Order Subtotal </span><span>€390.00</span></li>
									<li class="order-summary-item"><span>Shipping and handling</span><span>€10.00</span></li>
									<li class="order-summary-item"><span>Tax</span><span>€0.00</span></li>
									<li class="order-summary-item border-0"><span>Total</span><strong class="order-summary-total">€400.00</strong></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="informationbanner" class="row mt-5 pb-4">
			<div class="col-10 offset-1 d-lg-flex flex-lg-row">
				<div class="mx-auto">
					<i class="fas fa-truck fa-2x text-dark pt-5 pb-3"></i>
					<h2 class="text-uppercase text-dark pt-3"> free delivery worldwide </h2>
					<p class="text-dark"> We are free shipping worldwide, you <br> can buy and receive goods anywhere. <br>
					                      Fast
					                      and
					                      safe. </p>
				</div>
				<div class="mx-auto">
					<i class=" fas fa-wallet fa-2x text-dark pt-5 pb-3"></i>
					<h2 class="text-uppercase text-dark pt-3">100% money back</h2>
					<p class="text-dark"> If you are not satisfied with the <br>quality of products or our services, <br>you
					                      can return the goods & receive a 100% <br>money back </p>
				</div>
				<div class="mx-auto">
					<i class=" fas fa-user-friends fa-2x text-dark pt-5 pb-3"></i>
					<h2 class="text-uppercase text-dark pt-3"> member discount</h2>
					<p class="text-dark"> Please register with us to receive <br> friendly member gifts and discounts on
						<br>purchases weekly
					</p>
				</div>
			</div>
		</section>
		
		
		<section id="tops" class="row pt-5 pb-4">
			<div class="col-lg-8 offset-lg-2">
				<div class="row">
					<div class="d-flex flex-column mt-5 mx-auto bg-white pr-lg-5 mb-5" >
						<h2 class="text-uppercase text-dark d-flex flex-column pb-4 pl-3 pt-3"> top rated</h2>
						<div class="d-flex pb-4">
							<img class="flex-column mx-3 my-3" src="assets/images/toprated1.jpg" alt="">
							<div class="align-items-center">
								<h3 class="text-dark pt-3 pr-lg-1 pr-3"> Product title here</h3>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<p class="text-dark">€22</p>
							</div>
						</div>
						<div class="d-flex pb-4">
							<img class="flex-column mx-3 my-3" src="assets/images/toprated2.jpg" alt="">
							<div class="align-items-center">
								<h3 class="text-dark pt-3 pr-lg-1 pr-3"> Product title here</h3>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<p class="text-dark">€22</p>
							</div>
						</div>
						<div class="d-flex pb-4">
							<img class="flex-column mx-3 my-3" src="assets/images/toprated3.jpg" alt="">
							<div class="align-items-center">
								<h3 class="text-dark pt-3 pr-lg-1 pr-3"> Product title here</h3>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<p class="text-dark">€22</p>
							</div>
						</div>
					</div>
					<div class="d-flex flex-column mt-5 mx-auto bg-white pr-lg-5 mb-5">
						<h2 class="text-uppercase text-dark d-flex flex-column pb-4 pl-3 pt-3"> best sellers</h2>
						<div class="d-flex pb-4">
							<img class="flex-column mx-3 my-3" src="assets/images/bestsellers1.jpg" alt="">
							<div class="align-items-center">
								<h3 class="text-dark pt-3 pr-lg-1 pr-3"> Product title here</h3>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<p class="text-dark">€22</p>
							</div>
						</div>
						<div class="d-flex pb-4">
							<img class="flex-column mx-3 my-3" src="assets/images/bestsellers2.jpg" alt="">
							<div class="align-items-center">
								<h3 class="text-dark pt-3 pr-lg-1 pr-3"> Product title here</h3>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<p class="text-dark">€22</p>
							</div>
						</div>
						<div class="d-flex pb-4">
							<img class="flex-column mx-3 my-3" src="assets/images/bestsellers3.jpg" alt="">
							<div class="align-items-center">
								<h3 class="text-dark pt-3 pr-lg-1 pr-3"> Product title here</h3>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<p class="text-dark">€22</p>
							</div>
						</div>
					</div>
					<div class="d-flex flex-column mt-5 mx-auto bg-white mb-5 pr-lg-5 mr-lg-0" >
						<h2 class="text-uppercase text-dark d-flex flex-column pb-4 pl-3 pt-3"> populars</h2>
						<div class="d-flex  pb-4">
							<img class="flex-column mx-3 my-3" src="assets/images/populars1.jpg" alt="">
							<div class="align-items-center">
								<h3 class="text-dark pt-3 pr-lg-1 pr-3"> Product title here</h3>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<p class="text-dark">€22</p>
							</div>
						</div>
						<div class="d-flex pb-4">
							<img class="flex-column mx-3 my-3" src="assets/images/populars2.jpg" alt="">
							<div class="align-items-center">
								<h3 class="text-dark pt-3 pr-lg-1 pr-3"> Product title here</h3>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<p class="text-dark">€22</p>
							</div>
						</div>
						<div class="d-flex pb-4">
							<img class="flex-column mx-3 my-3" src="assets/images/populars3.jpg" alt="">
							<div class="align-items-center">
								<h3 class="text-dark pt-3 pr-lg-1 pr-3"> Product title here</h3>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<p class="text-dark">€22</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="subscribe" class="row ">
			<div class="col-10 offset-1 d-lg-flex">
				<div class="d-lg-flex mx-auto">
					<h2 class="py-3 px-3 my-0 d-lg-inline"> Do you want to <strong>discover us</strong>?
					                                        Just subscribe
					                                        now!</h2>
					<form class="d-lg-flex pb-2 pb-lg-0">
						<div class="form-group my-auto ">
							<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
						</div>
					</form>
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
