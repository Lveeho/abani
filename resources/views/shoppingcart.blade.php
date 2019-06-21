@extends('layouts.app')
@section('content')
	<div class="container-fluid">
		<section id="BCproducts" class="row BC">
			<div class="col-lg-8 offset-lg-2">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb mb-0 pl-0">
						<li class="breadcrumb-item"><a href="index.blade.php">Home</a></li>
						<li class="breadcrumb-item active" aria-current="page">Shopping cart</li>
					</ol>
				</nav>
			</div>
		</section>
		<section id="shoppingcart" class="row">
			<div class="col-lg-8 offset-lg-2">
				<h2 class="text-uppercase text-dark py-5 ">Shopping Cart</h2>
				<div class="row mb-5 text-dark">

					<div class="col-lg-8">
						<div class="cart">

							<div class="cart-header text-center px-0">
                                @if(session()->has('success_message'))
                                    <div class="alert alert-success">
                                        {{session()->get('success_message')}}
                                    </div>
                                @endif


								<div class="row text-uppercase">
									<div class="col-md-4"><strong>Items</strong></div>
									<div class="col-md-8 d-none d-md-block">
										<div class="row">
											<div class="col-md-3"><strong>Price</strong></div>
											<div class="col-md-4"><strong>Quantity</strong></div>
											<div class="col-md-3"><strong>Total</strong></div>
											<div class="col-md-2"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="cart-body">
                                @foreach(Cart::content() as $item)
								<!-- Product-->
								<div class="cart-item">
									<div class="row d-flex align-items-center text-left text-center">
										<div class="col-12 col-md-4"><a href="#"
										                                class="cart-remove close mt-3 d-md-none"><i class="fa fa-times">                                                                                   </i></a>
											<div class="d-flex align-items-center"><a href="details.blade.php"><img
													src="assets/images/facegrid3.jpg" alt="..." class="cart-item-img"></a>
												<div class="cart-title text-left ml-2"><a href="details.blade.php"
												                                     class="text-uppercase text-dark"><strong>Product 1</strong></a><br><span class="text-muted text-sm">Color: Green</span>
												</div>
											</div>
										</div>
										<div class="col-12 col-md-8 mt-4 mt-md-0">
											<div class="row align-items-center">
												<div class="col-md-3">
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
															<div class="d-flex align-items-center">
																<div class="btn btn-items btn-items-decrease">-</div>
																<input type="text" value="4" class="form-control text-center border-0 border-md input-items">
																<div class="btn btn-items btn-items-increase">+</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-md-3">
													<div class="row">
														<div class="col-6 d-md-none text-muted text-left">Total price </div>
														<div class="col-6 col-md-12 text-right text-center">€260.00</div>
													</div>
												</div>
												<div class="col-2 d-none d-md-block text-center p-0"><a href="#"
												                                                    class="cart-remove"> <i class="delete fa fa-times"></i></a></div>
											</div>
										</div>
									</div>
								</div>
                                @endforeach
								<!-- Product-->
								<div class="cart-item">
									<div class="row d-flex align-items-center text-left text-center">
										<div class="col-12 col-md-4"><a href="#"
										                                class="cart-remove close mt-3 d-md-none"><i class="fa fa-times">                                                                                   </i></a>
											<div class="d-flex align-items-center"><a href="details.blade.php"><img
													src="assets/images/facegrid4.jpg" alt="..." class="cart-item-img"></a>
												<div class="cart-title text-left ml-2"><a href="details.blade.php"
												                                     class="text-uppercase text-dark"><strong>Product 2</strong></a><br><span class="text-muted text-sm">Color: Medium</span>
												</div>
											</div>
										</div>
										<div class="col-12 col-md-8 mt-4 mt-md-0">
											<div class="row align-items-center">
												<div class="col-md-3">
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
															<div class="d-flex align-items-center">
																<div class="btn btn-items btn-items-decrease">-</div>
																<input type="text" value="3" class="form-control text-center border-0 border-md input-items">
																<div class="btn btn-items btn-items-increase">+</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-md-3">
													<div class="row">
														<div class="col-6 d-md-none text-muted text-left">Total price
														</div>
														<div class="col-6 col-md-12 text-right text-center">€165.00</div>
													</div>
												</div>
												<div class="col-2 d-none d-md-block text-center"><a href="#" class="cart-remove"> <i class="delete fa fa-times"></i></a></div>
											</div>
										</div>
									</div>
								</div>
								<!-- Product-->
								<div class="cart-item">
									<div class="row d-flex align-items-center text-left text-center">
										<div class="col-12 col-md-4"><a href="#"
										                                class="cart-remove close mt-3 d-md-none"><i class="fa fa-times">                                                                                   </i></a>
											<div class="d-flex align-items-center"><a href="details.blade.php"><img
													src="assets/images/facegrid2.jpg" alt="..." class="cart-item-img"></a>
												<div class="cart-title text-left ml-2"><a href="details.blade.php"
												                                     class="text-uppercase text-dark"><strong>Product 3</strong></a><br><span class="text-muted text-sm">Color: Medium</span>
												</div>
											</div>
										</div>
										<div class="col-12 col-md-8 mt-4 mt-md-0">
											<div class="row align-items-center">
												<div class="col-md-3">
													<div class="row">
														<div class="col-6 d-md-none text-muted text-left">Price per item</div>
														<div class="col-6 col-md-12 text-right text-center">€55.00</div>
													</div>
												</div>
												<div class="col-md-4">
													<div class="row align-items-center">
														<div class="d-md-none col-6 col-sm-9 text-muted text-left">Quantity</div>
														<div class="col-6 col-sm-3 col-md-12">
															<div class="d-flex align-items-center">
																<div class="btn btn-items btn-items-decrease">-</div>
																<input type="text" value="3" class="form-control text-center border-0 border-md input-items">
																<div class="btn btn-items btn-items-increase">+</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-md-3">
													<div class="row">
														<div class="col-6 d-md-none text-muted text-left">Total price </div>
														<div class="col-6 col-md-12 text-right text-center">€165.00</div>
													</div>
												</div>
												<div class="col-2 d-none d-md-block text-center"><a href="#" class="cart-remove"> <i class="delete fa fa-times"></i></a></div>
											</div>
										</div>
									</div>
								</div>
							</div>
                            @if(count($errors)>0)
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach($errors->all() as $error)
                                            <li>{{$error}}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            @if(Cart::count()>0)
                                <p>{{Cart::count()}} item(s) in Shopping Cart</p>
                            @else
                                <p>No items in cart</p>
                                @endif
						</div>
						<div class="my-5 d-flex justify-content-between flex-column flex-lg-row"><a
                            href="categories.blade.php" class="btn btn-link text-muted"><i
								class="fa fa-chevron-left"></i> Continue Shopping</a><a href="checkout1.blade.php"
						                                                                class="btn btn-pink">Proceed to checkout <i class="fa fa-chevron-right"></i>                                                     </a></div>
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
		
		@include('includes.tops')
        @include('includes.subscribe')
	</div>
@endsection
