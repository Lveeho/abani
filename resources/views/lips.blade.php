@extends('layouts.app')
@section('content')
	<div class="container-fluid">
		<section id="BCproducts" class="row BC">
			<div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb mb-0 pl-0">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active" aria-current="page">Makeup</li>
					</ol>
				</nav>
			</div>
		</section>

		<section id="categoryleft" class=" row justify-content-between mb-5">
			<div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
				<div class="row">
                    @include('includes.category')
					<div class="col-lg-9 pl-lg-5 pr-0">
						<h1 class="titelnav text-uppercase pt-lg-5">lips</h1>
						<img src="assets/images/lipsbigpic.jpg" class="w-100 img-fluid mb-4" alt="Responsive image">
						<section class="top-filters">
							<form>
								<div class="d-lg-flex top-filters-color text-dark align-items-center mb-4">
									<div class="grid-cell">
										<label for="sortselect" class="hidden-xs ml-3 mb-0">Sort by</label>
										<select class="round-corners my-3" id="sortselect" name="sort"
										        onchange="$('#filter_form').submit();">
											<option value="default">Standaard</option>
											<option value="popular" selected="selected">Populariteit</option>
											<option value="newest">Nieuwste producten</option>
											<option value="lowest">Laagste prijs</option>
											<option value="highest">Hoogste prijs</option>
											<option value="asc">Naam oplopend</option>
											<option value="desc">Naam aflopend</option>
										</select>
									</div>
									<span class="grid-cell page-info mx-auto">
										<a class="plain-text hidden-xs hidden-sm hidden-md ml-3">Toon 1 - 24 van
										                                                           2596</a>
									</span>
									<div class="pagination d-flex mx-auto">
										<a class="p-2 my-auto" href="#">&laquo;</a>
										<a class="p-2 my-auto" href="#">1</a>
										<a class="p-2 my-auto active" href="#">2</a>
										<a class="p-2 my-auto" href="#">3</a>
										<a class="p-2 my-auto" href="#">4</a>
										<a class="p-2 my-auto" href="#">5</a>
										<a class="p-2 my-auto" href="#">6</a>
										<a class="p-2 my-auto" href="#">&raquo;</a>
									</div>
								</div>
							</form>
						</section>
						<section class="productsgrids d-flex">
							<div class="row">
								<div class="col-lg-4">
									<div class="card w-100 mr-lg-3 cont">
										<div class="hartje">
											<img class="card-img-top image border" src="assets/images/facegrid1.jpg"
											     alt="Card image cap">
											<div class="middle d-flex ">
												<a href="#" class="btn btn-add flex-fill" role="button" >
													<div class="text-uppercase text-white pr-3">
														<i class="fas fa-shopping-bag px-2 py-2"></i> add to cart
													</div>
												</a>
												<a href="details.blade.php" class="btn btn-look flex-fill" role="button">
													<i class="text-white fas fa-search py-2 px-2"></i>
												</a>
											</div>

											<div class="btn hartpos rotate" role="button">
												<span class="fa-stack fa-1x">
													<i class="fas fa-circle fa-stack-2x text-white"></i>
													<i class="fas fa-heart fa-stack-1x"></i>
												</span>
											</div>
										</div>
										<div class="card-body">
											<p class="text-dark card-text text-center">Product<br><span>€ 40 </span> </p>
										</div>
									</div>
								</div>
								<div class="col-lg-4">
									<div class="card w-100 mr-lg-3 cont">
										<div class="hartje">
											<img class="card-img-top image border" src="assets/images/facegrid1.jpg"
											     alt="Card image cap">
											<div class="middle d-flex ">
												<a href="#" class="btn btn-add flex-fill" role="button" >
													<div class="text-uppercase text-white pr-3">
														<i class="fas fa-shopping-bag px-2 py-2"></i> add to cart
													</div>
												</a>
												<a href="details.blade.php" class="btn btn-look flex-fill" role="button">
													<i class="text-white fas fa-search py-2 px-2"></i>
												</a>
											</div>

											<div class="btn hartpos rotate" role="button">
												<span class="fa-stack fa-1x">
													<i class="fas fa-circle fa-stack-2x text-white"></i>
													<i class="fas fa-heart fa-stack-1x"></i>
												</span>
											</div>
										</div>
										<div class="card-body">
											<p class="text-dark card-text text-center">Product<br><span>€ 40 </span> </p>
										</div>
									</div>
								</div>
								<div class="col-lg-4">
									<div class="card w-100 mr-lg-3 cont">
										<div class="hartje">
											<img class="card-img-top image border" src="assets/images/facegrid1.jpg"
											     alt="Card image cap">
											<div class="middle d-flex ">
												<a href="#" class="btn btn-add flex-fill" role="button" >
													<div class="text-uppercase text-white pr-3">
														<i class="fas fa-shopping-bag px-2 py-2"></i> add to cart
													</div>
												</a>
												<a href="details.blade.php" class="btn btn-look flex-fill" role="button">
													<i class="text-white fas fa-search py-2 px-2"></i>
												</a>
											</div>

											<div class="btn hartpos rotate" role="button">
												<span class="fa-stack fa-1x">
													<i class="fas fa-circle fa-stack-2x text-white"></i>
													<i class="fas fa-heart fa-stack-1x"></i>
												</span>
											</div>
										</div>
										<div class="card-body">
											<p class="text-dark card-text text-center">Product<br><span>€ 40 </span> </p>
										</div>
									</div>
								</div>
								<div class="col-lg-4">
									<div class="card mr-lg-3 w-100 cont">
										<div class="hartje">
											<img class="card-img-top image border" src="assets/images/facegrid1.jpg"
											     alt="Card image cap">
											<div class="middle d-flex ">
												<a href="#" class="btn btn-add flex-fill" role="button" >
													<div class="text-uppercase text-white pr-3">
														<i class="fas fa-shopping-bag px-2 py-2"></i> add to cart
													</div>
												</a>
												<a href="details.blade.php" class="btn btn-look flex-fill" role="button">
													<i class="text-white fas fa-search py-2 px-2"></i>
												</a>
											</div>

											<div class="btn hartpos rotate" role="button">
												<span class="fa-stack fa-1x">
													<i class="fas fa-circle fa-stack-2x text-white"></i>
													<i class="fas fa-heart fa-stack-1x"></i>
												</span>
											</div>
										</div>
										<div class="card-body">
											<p class="text-dark card-text text-center">Product<br><span>€ 40 </span> </p>
										</div>
									</div>
								</div>
								<div class="col-lg-4">
									<div class="card w-100 mr-lg-3 cont">
										<div class="hartje">
											<img class="card-img-top image border" src="assets/images/facegrid1.jpg"
											     alt="Card image cap">
											<div class="middle d-flex ">
												<a href="#" class="btn btn-add flex-fill" role="button" >
													<div class="text-uppercase text-white pr-3">
														<i class="fas fa-shopping-bag px-2 py-2"></i> add to cart
													</div>
												</a>
												<a href="details.blade.php" class="btn btn-look flex-fill" role="button">
													<i class="text-white fas fa-search py-2 px-2"></i>
												</a>
											</div>

											<div class="btn hartpos rotate" role="button">
												<span class="fa-stack fa-1x">
													<i class="fas fa-circle fa-stack-2x text-white"></i>
													<i class="fas fa-heart fa-stack-1x"></i>
												</span>
											</div>
										</div>
										<div class="card-body">
											<p class="text-dark card-text text-center">Product<br><span>€ 40 </span> </p>
										</div>
									</div>
								</div>
								<div class="col-lg-4">
									<div class="card w-100 mr-lg-3 cont">
										<div class="hartje">
											<img class="card-img-top image border" src="assets/images/facegrid1.jpg"
											     alt="Card image cap">
											<div class="middle d-flex ">
												<a href="#" class="btn btn-add flex-fill" role="button" >
													<div class="text-uppercase text-white pr-3">
														<i class="fas fa-shopping-bag px-2 py-2"></i> add to cart
													</div>
												</a>
												<a href="details.blade.php" class="btn btn-look flex-fill" role="button">
													<i class="text-white fas fa-search py-2 px-2"></i>
												</a>
											</div>

											<div class="btn hartpos rotate" role="button">
												<span class="fa-stack fa-1x">
													<i class="fas fa-circle fa-stack-2x text-white"></i>
													<i class="fas fa-heart fa-stack-1x"></i>
												</span>
											</div>
										</div>
										<div class="card-body">
											<p class="text-dark card-text text-center">Product<br><span>€ 40 </span> </p>
										</div>
									</div>
								</div>
								<div class="col-lg-4">
									<div class="card w-100 mr-lg-3 cont">
										<div class="hartje">
											<img class="card-img-top image border" src="assets/images/facegrid1.jpg"
											     alt="Card image cap">
											<div class="middle d-flex ">
												<a href="#" class="btn btn-add flex-fill" role="button" >
													<div class="text-uppercase text-white pr-3">
														<i class="fas fa-shopping-bag px-2 py-2"></i> add to cart
													</div>
												</a>
												<a href="details.blade.php" class="btn btn-look flex-fill" role="button">
													<i class="text-white fas fa-search py-2 px-2"></i>
												</a>
											</div>

											<div class="btn hartpos rotate" role="button">
												<span class="fa-stack fa-1x">
													<i class="fas fa-circle fa-stack-2x text-white"></i>
													<i class="fas fa-heart fa-stack-1x"></i>
												</span>
											</div>
										</div>
										<div class="card-body">
											<p class="text-dark card-text text-center">Product<br><span>€ 40 </span> </p>
										</div>
									</div>
								</div>
								<div class="col-lg-4 ">
									<div class="card w-100 mr-lg-3 cont">
										<div class="hartje">
											<img class="card-img-top image border" src="assets/images/facegrid1.jpg"
											     alt="Card image cap">
											<div class="middle d-flex ">
												<a href="#" class="btn btn-add flex-fill" role="button" >
													<div class="text-uppercase text-white pr-3">
														<i class="fas fa-shopping-bag px-2 py-2"></i> add to cart
													</div>
												</a>
												<a href="details.blade.php" class="btn btn-look flex-fill" role="button">
													<i class="text-white fas fa-search py-2 px-2"></i>
												</a>
											</div>

											<div class="btn hartpos rotate" role="button">
												<span class="fa-stack fa-1x">
													<i class="fas fa-circle fa-stack-2x text-white"></i>
													<i class="fas fa-heart fa-stack-1x"></i>
												</span>
											</div>
										</div>
										<div class="card-body">
											<p class="text-dark card-text text-center">Product<br><span>€ 40 </span> </p>
										</div>
									</div>
								</div>
								<div class="col-lg-4 ">
									<div class="card w-100 mr-lg-3 cont">
										<div class="hartje">
											<img class="card-img-top image border" src="assets/images/facegrid1.jpg"
											     alt="Card image cap">
											<div class="middle d-flex ">
												<a href="#" class="btn btn-add flex-fill" role="button" >
													<div class="text-uppercase text-white pr-3">
														<i class="fas fa-shopping-bag px-2 py-2"></i> add to cart
													</div>
												</a>
												<a href="details.blade.php" class="btn btn-look flex-fill" role="button">
													<i class="text-white fas fa-search py-2 px-2"></i>
												</a>
											</div>

											<div class="btn hartpos rotate" role="button">
												<span class="fa-stack fa-1x">
													<i class="fas fa-circle fa-stack-2x text-white"></i>
													<i class="fas fa-heart fa-stack-1x"></i>
												</span>
											</div>
										</div>
										<div class="card-body">
											<p class="text-dark card-text text-center">Product<br><span>€ 40 </span> </p>
										</div>
									</div>
								</div>
							</div>
						</section>
						<section id="pagination-under">
							<div class="d-flex bg-white text-dark align-items-center mb-4 border">
								<span class="grid-cell page-info ml-3">
									<a class="plain-text hidden-xs hidden-sm hidden-md">Toon 1 - 24 van 2596</a>
								</span>
								<div class="pagination d-flex ml-auto">
									<a class="p-2 my-auto" href="#">&laquo;</a>
									<a class="p-2 my-auto" href="#">1</a>
									<a class="p-2 my-auto active" href="#">2</a>
									<a class="p-2 my-auto" href="#">3</a>
									<a class="p-2 my-auto" href="#">4</a>
									<a class="p-2 my-auto" href="#">5</a>
									<a class="p-2 my-auto" href="#">6</a>
									<a class="p-2 my-auto" href="#">&raquo;</a>
								</div>
							</div>
						</section>
					</div>
				</div>
			</div>
		</section>
        @include('includes.tops')
        @include('includes.subscribe')
	</div>

@endsection
