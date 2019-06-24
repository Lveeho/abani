@extends('layouts.app')
@section('content')
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
										<a href="checkout1.blade.php" class="nav-link text-sm active"  style="color:#b97171;background-color: transparent">
											
											<span class="fa-stack">
												<i class="fas fa-circle fa-stack-2x"></i>
												<i class="far fa-edit fa-stack-1x fa-inverse"></i>
											</span>
											<p>Address</p>
										</a>
									</li>
									<li class="nav-item w-25">
										<a href="#" class="nav-link text-sm active"  style="color:#b97171;background-color: transparent">
											<span class="fa-stack">
												<i class="fas fa-circle fa-stack-2x"></i>
												<i class="fas fa-map-marker-alt fa-stack-1x fa-inverse"></i>
											</span>
											<p>Delivery Method</p>
										</a>
									</li>
									<li class="nav-item w-25">
										<a href="#" class="nav-link text-sm active"  style="color:#b97171;background-color: transparent">
											<span class="fa-stack">
												<i class="fas fa-circle fa-stack-2x"></i>
												<i class="fas fa-wallet fa-stack-1x fa-inverse"></i>
											</span>
											<p>Payment Method</p>
										</a>
									</li>
									<li class="nav-item w-25">
										<a href="#" class="nav-link text-sm active"  style="color:#b97171;background-color: transparent">
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
						<div class="mb-5">
							<div class="cart">
								<div class="cart-header text-center px-0">
									<div class="row text-uppercase">
										<div class="col-md-4"><strong>Items</strong></div>
										<div class="col-md-8 d-none d-md-block">
											<div class="row">
												<div class="col-md-4"><strong>Price</strong></div>
												<div class="col-md-4"><strong>Quantity</strong></div>
												<div class="col-md-4"><strong>Total</strong></div>
												
											</div>
										</div>
									</div>
								</div>
								<div class="cart-body">
									<!-- Product-->
									<div class="cart-item">
										<div class="row d-flex align-items-center text-left text-center">
											<div class="col-12 col-md-4">
												<div class="d-flex align-items-center"><a href="details.blade.php"><img
														src="assets/images/facegrid3.jpg" alt="..." class="cart-item-img"></a>
													<div class="cart-title text-left ml-2"><a href="details.blade.php"
													                                          class="text-uppercase text-dark"><strong>Product 1</strong></a><br><span class="text-muted text-sm">Color: Green</span>
													</div>
												</div>
											</div>
											<div class="col-12 col-md-8 mt-4 mt-md-0">
												<div class="row align-items-center">
													<div class="col-md-4">
														<div class="row">
															<div class="col-6 d-md-none text-muted text-left">Price per
															                                                  item</div>
															<div class="col-6 col-md-12 text-right text-center">€65.00</div>
														</div>
													</div>
													<div class="col-md-4">
														<div class="row align-items-center">
															<div class="d-md-none col-6 col-sm-9 text-muted text-left">Quantity</div>
															<div class="col-6 col-sm-3 col-md-12">
																<div class="text-center">
																	4
																</div>
															</div>
														</div>
													</div>
													<div class="col-md-4">
														<div class="row">
															<div class="col-6 d-md-none text-muted text-left">Total price </div>
															<div class="col-6 col-md-12 text-right text-center">€260.00</div>
														</div>
													</div>
													
												</div>
											</div>
										</div>
									</div>
									<!-- Product-->
									<div class="cart-item">
										<div class="row d-flex align-items-center text-left text-center">
											<div class="col-12 col-md-4">
												<div class="d-flex align-items-center"><a href="details.blade.php"><img
														src="assets/images/facegrid4.jpg" alt="..." class="cart-item-img"></a>
													<div class="cart-title text-left ml-2"><a href="details.blade.php"
													                                          class="text-uppercase text-dark"><strong>Product 2</strong></a><br><span class="text-muted text-sm">Color: Medium</span>
													</div>
												</div>
											</div>
											<div class="col-12 col-md-8 mt-4 mt-md-0">
												<div class="row align-items-center">
													<div class="col-md-4">
														<div class="row">
															<div class="col-6 d-md-none text-muted text-left">Price per
															                                                  item</div>
															<div class="col-6 col-md-12 text-right text-center">€55.00</div>
														</div>
													</div>
													<div class="col-md-4">
														<div class="row align-items-center">
															<div class="d-md-none col-6 col-sm-9 text-muted text-left">
																Quantity</div>
															<div class="col-6 col-sm-3 col-md-12">
																<div class="text-center">
																	3
																</div>
															</div>
														</div>
													</div>
													<div class="col-md-4">
														<div class="row">
															<div class="col-6 d-md-none text-muted text-left">Total price
															</div>
															<div class="col-6 col-md-12 text-right text-center">€165.00</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- Product-->
									<div class="cart-item">
										<div class="row d-flex align-items-center text-left text-center">
											<div class="col-12 col-md-4">
												<div class="d-flex align-items-center"><a href="details.blade.php"><img
														src="assets/images/facegrid2.jpg" alt="..." class="cart-item-img"></a>
													<div class="cart-title text-left ml-2"><a href="details.blade.php"
													                                          class="text-uppercase text-dark"><strong>Product 3</strong></a><br><span class="text-muted text-sm">Color: Medium</span>
													</div>
												</div>
											</div>
											<div class="col-12 col-md-8 mt-4 mt-md-0">
												<div class="row align-items-center">
													<div class="col-md-4">
														<div class="row">
															<div class="col-6 d-md-none text-muted text-left">Price per item</div>
															<div class="col-6 col-md-12 text-right text-center">€55.00</div>
														</div>
													</div>
													<div class="col-md-4">
														<div class="row align-items-center">
															<div class="d-md-none col-6 col-sm-9 text-muted text-left">Quantity</div>
															<div class="col-6 col-sm-3 col-md-12">
																<div class="text-center">
																	3
																</div>
															</div>
														</div>
													</div>
													<div class="col-md-4">
														<div class="row">
															<div class="col-6 d-md-none text-muted text-left">Total price </div>
															<div class="col-6 col-md-12 text-right text-center">€165.00</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						
						<div class="mb-5 d-flex justify-content-between flex-column flex-lg-row"><a
                            href="checkout3.blade.php" class="btn btn-link text-muted"> <i
								class="fa fa-angle-left mr-2"></i>Back to the delivery method</a>
                            <a
                                href="{{route('face')}}" class="btn btn-pink">Continue Shopping<i
								class="fa fa-angle-right ml-2"></i></a></div>
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
							<img class="flex-column mx-3 my-3 img-fluid" src="assets/images/toprated1.jpg" alt="">
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
							<img class="flex-column mx-3 my-3 img-fluid" src="assets/images/toprated2.jpg" alt="">
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
							<img class="flex-column mx-3 my-3 img-fluid" src="assets/images/toprated3.jpg" alt="">
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
							<img class="flex-column mx-3 my-3 img-fluid" src="assets/images/bestsellers1.jpg" alt="">
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
							<img class="flex-column mx-3 my-3 img-fluid" src="assets/images/bestsellers2.jpg" alt="">
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
							<img class="flex-column mx-3 my-3 img-fluid" src="assets/images/bestsellers3.jpg" alt="">
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
							<img class="flex-column mx-3 my-3 img-fluid" src="assets/images/populars1.jpg" alt="">
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
							<img class="flex-column mx-3 my-3 img-fluid" src="assets/images/populars2.jpg" alt="">
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
							<img class="flex-column mx-3 my-3 img-fluid" src="assets/images/populars3.jpg" alt="">
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


@endsection
