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
									<a href="#" class="nav-link text-sm disabled">
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
							<div class="block">
                            @if(\Illuminate\Support\Facades\Auth::check())
                            @else
								<!--Method-->
								<div class="block-header">
									<h3 class="text-uppercase mb-0">Checkout method                    </h3>
								</div>
								<div class="block-body">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <a href="{{route('register')}}" class=" btn text-uppercase
                                            mb-3 btn-pink btn-block">Register</a>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <a href="{{route('login')}}" class="btn text-uppercase
                                            mb-3 btn-pink btn-block">Log in</a>
                                        </div>
                                    </div>
								</div>
                            @endif
                            @if(\Illuminate\Support\Facades\Auth::check())
                            <form action="{{route('checkout.store1')}}" method="POST">
                                @csrf
								<!-- Invoice Address-->
								<div class="block-header">
									<h3 class="text-uppercase mb-0">Invoice address</h3>
								</div>

								<div class="block-body">
                                    @foreach($addresses as $address)
                                        @foreach($cities as $city)
                                            @foreach($regions as $region)
                                                @php($i=0)
                                                @foreach($countries as $country)
                                                    @php($i++)
                                                    @if($country->pivot->id ===$region->pivot->id and
                                                    $region->pivot->id===$city->pivot->id and
                                                    $city->pivot->id===$address->pivot->id )

                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="optradio"
                                                                   value="{{$city->pivot->id}}">Address
                                                            {{$i}}
                                                        </label>
									                    <div class="row">
                                                            <div class="form-group col-md-6">
                                                                <label class="form-label">Street</label>
                                                                <input type="text"
                                                                       placeholder="{{$address->street}} {{$address->streetnumber}}
                                                                       {{$address->boxnumber}}"
                                                                        class="form-control" >
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label class="form-label">City</label>
                                                                <input type="text" placeholder="{{$city->city}}"
                                                                       class="form-control">
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label  class="form-label">ZIP</label>
                                                                <input type="text" placeholder="{{$city->postalcode}}"
                                                                       class="form-control">
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label class="form-label">State</label>
                                                                <input type="text" placeholder="{{$region->region}}"
                                                                       class="form-control">
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label class="form-label">Country</label>
                                                                <input type="text" placeholder="{{$country->country}}"
                                                                        class="form-control mb-4">
                                                            </div>
									                    </div>
                                                    </div>
                                                    @endif
                                                @endforeach
                                            @endforeach
                                        @endforeach
                                    @endforeach

									<!-- /Invoice Address-->
								</div>
                                @endif
								<!-- Shipping Address-->

								<div class="mb-5 d-flex justify-content-between flex-column flex-lg-row">
                                    <a href="{{route('cart.index')}}" class="btn btn-link text-muted">
                                        <i class="fa fa-angle-left mr-2"></i>Back </a>
                                    @if(\Illuminate\Support\Facades\Auth::check())
                                        <button type="submit" class="btn-pink">
                                            Choose delivery method
                                            <i class="fa fa-angle-right ml-2"></i>
                                        </button>
                                   @else
                                        <button  disabled style="background-color:
                                        darkgray">Choose delivery method<i class="fa fa-angle-right ml-2"></i></button>
                                    @endif
								</div>
                            </form>
                                    @if(session()->has('checkout_message'))
                                        <div class="alert alert-primary">
                                            {{session()->get('checkout_message')}}
                                        </div>
                                    @endif
							</div>
					</div>
                    @include('includes.ordersummary')
				</div>
			</div>
		</section>
		
		@include('includes.tops')
        @include('includes.subscribe')

	</div>


@endsection
