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
									<a href="{{route('checkout.step1')}}" class="nav-link text-sm active"
                                       style="color:#b97171;background-color: transparent">
										
										<span class="fa-stack">
											<i class="fas fa-circle fa-stack-2x"></i>
											<i class="far fa-edit fa-stack-1x fa-inverse"></i>
										</span>
										<p>Address</p>
									</a>
								</li>
								<li class="nav-item w-25">
									<a href="{{route('checkout.step2')}}" class="nav-link text-sm active"
                                       style="color:#b97171;background-color: transparent">
										<span class="fa-stack">
											<i class="fas fa-circle fa-stack-2x"></i>
											<i class="fas fa-map-marker-alt fa-stack-1x fa-inverse"></i>
										</span>
										<p>Delivery Method</p>
									</a>
								</li>
								<li class="nav-item w-25">
									<a href="{{route('checkout.step3')}}" class="nav-link text-sm active"
                                       style="color:#b97171;background-color: transparent">
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
						<div class="mb-5">
							<div id="accordion" role="tablist">
								<div class="block mb-3">
									<div id="headingOne" role="tab" class="block-header"><strong><a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="accordion-link">Credit Card</a></strong></div>
									<div id="collapseOne" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion" class="collapse show">
										<div class="block-body">
											<form action="#">
												<div class="row">
													<div class="form-group col-md-6">
														<label for="card-name" class="form-label">Name on Card</label>
														<input type="text" name="card-name" placeholder="Name on card" id="card-name" class="form-control">
													</div>
													<div class="form-group col-md-6">
														<label for="card-number" class="form-label">Card Number</label>
														<input type="text" name="card-number" placeholder="Card number" id="card-number" class="form-control">
													</div>
													<div class="form-group col-md-4">
														<label for="expiry-date" class="form-label">Expiry Date</label>
														<input type="text" name="expiry-date" placeholder="MM/YY" id="expiry-date" class="form-control">
													</div>
													<div class="form-group col-md-4">
														<label for="cvv" class="form-label">CVC/CVV</label>
														<input type="text" name="cvv" placeholder="123" id="cvv" class="form-control">
													</div>
													<div class="form-group col-md-4">
														<label for="zip" class="form-label">ZIP</label>
														<input type="text" name="zip" placeholder="123" id="zip" class="form-control">
													</div>
												</div>
											</form>
										</div>
									</div>
								</div>
								<div class="block mb-3">
									<div id="headingTwo" role="tab" class="block-header"><strong><a data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" class="accordion-link collapsed">Paypal</a></strong></div>
									<div id="collapseTwo" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion" class="collapse">
										<div class="block-body py-5 d-flex align-items-center">
											<input type="radio" name="shippping" id="payment-method-1">
											<label for="payment-method-1" class="ml-3"><strong class="d-block text-uppercase mb-2"> Pay with PayPal</strong><span class="text-muted text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit.                                          </span></label>
										</div>
									</div>
								</div>
								<div class="block mb-3">
									<div id="headingThree" role="tab" class="block-header"><strong><a data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree" class="accordion-link collapsed">Pay on delivery</a></strong></div>
									<div id="collapseThree" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion" class="collapse">
										<div class="block-body py-5 d-flex align-items-center">
											<input type="radio" name="shippping" id="payment-method-2">
											<label for="payment-method-2" class="ml-3"><strong class="d-block text-uppercase mb-2"> Pay on delivery</strong><span class="text-muted text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit.    </span></label>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="mb-5 d-flex justify-content-between flex-column flex-lg-row"><a
                            href="{{route('checkout.step2')}}" class="btn btn-link text-muted"> <i
								class="fa fa-angle-left mr-2"></i>Back to the delivery method</a><a
                                href="checkout4.blade.php" class="btn btn-pink">Continue to order review<i
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
        @include('includes.informationbanner')

	</div>

@endsection
