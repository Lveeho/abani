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
                                    <div class="block-body">
                                        @php($amount=Gloudemans\Shoppingcart\Facades\Cart::total())
                                        @php($newAmount=(int)str_replace('.','',$amount))



                                        <form id="checkout-form" action="{{route('buy')}}" method="POST">
                                            {{csrf_field()}}
                                            <input type="hidden" name="stripeToken" id="stripeToken">
                                            <input type="hidden" name="stripeEmail" id="stripeEmail">
                                            <button type="submit" id="buy"> Betaal </button>

                                            <script src="https://checkout.stripe.com/checkout.js"></script>
                                            <script>
                                                var amountVar ='<?php echo $newAmount; ?>';
                                                let stripe=StripeCheckout.configure({
                                                    key:"{{config('services.stripe.key')}}",
                                                    image:"https://stripe.com/img/documentation/checkout/marketplace.png",
                                                    locale:"auto",
                                                    token:function(token){
                                                        document.querySelector('#stripeEmail').value=token.email;
                                                        document.querySelector('#stripeToken').value=token.id;
                                                        document.querySelector('#checkout-form').submit();

                                                    }
                                                });
                                                document.querySelector('#buy').addEventListener('click',function(e){
                                                    stripe.open({
                                                        name:'mijn product',
                                                        description: 'details over product',
                                                        zipCode:false /*niet nodig in EU*/,
                                                        amount: amountVar,
                                                        currency:'eur',
                                                    });
                                                    e.preventDefault();
                                                });
                                            </script>

                                        </form>
                                    </div>

								</div>

							</div>
						</div>
						<div class="mb-5 d-flex justify-content-between flex-column flex-lg-row"><a
                            href="{{route('checkout.step2')}}" class="btn btn-link text-muted"> <i
								class="fa fa-angle-left mr-2"></i>Back to the delivery method</a></div>
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
