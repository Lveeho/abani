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
                            <form action="{{route('checkout.store2')}}" method="POST">
                                @csrf
							<div class="block-body">
								<div class="row">

									<div class="form-group col-md-6 d-flex align-items-center">
										<input type="radio" name="shipping" id="option0">
										<label for="option0" class="ml-3"><strong class="d-block text-uppercase mb-2">Usps next day</strong><span class="text-muted text-sm">Get it right on next day - fastest option possible.</span></label>
									</div>

								</div>
							</div>
							<div class="mb-5 d-flex justify-content-between flex-column flex-lg-row"><a
                                href="{{route('checkout.step1')}}" class="btn btn-link text-muted"> <i
									class="fa fa-angle-left mr-2"></i>Back to the addresses</a>
                                <button type="submit" class="btn-pink">
                                    Check out
                                    <i class="fa fa-angle-right ml-2"></i>
                                </button>

                            </div>
                        </form>

                        @if(session()->has('checkout_message2'))
                            <div class="alert alert-primary">
                                {{session()->get('checkout_message2')}}
                            </div>
                        @endif



						</div>
					</div>
                    @include('includes.ordersummary')
				</div>
			</div>
		</section>
        @include('includes.informationbanner')

	</div>

@endsection
