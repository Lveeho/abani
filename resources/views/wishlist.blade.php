@extends('layouts.app')
@section('content')
	<div class="container-fluid">
		<section id="BCproducts" class="row BC">
			<div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb mb-0 pl-0">
						<li class="breadcrumb-item"><a href="index.blade.php">Home</a></li>
						<li class="breadcrumb-item active" aria-current="page">Wishlist</li>
					</ol>
				</nav>
			</div>
		</section>
		<section id="wishlist" class="row">
			<div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1 mt-5">
				<h1 class="text-uppercase text-dark pt-md-5 pb-2 ">Wishlist</h1>
				<p class="text-dark d-flex justify-content-end mr-3">@if(Cart::instance('wishlist')->count()>0)
                    <p>{{Cart::instance('wishlist')->count()}} item(s) in Wishlist</p>
                @else
                    <p>No items in wishlist</p>
                    @endif
				<div class="row mt-3">
                    @foreach(Cart::instance('wishlist')->content() as $item)
					<div class="col-6 col-md-3 pb-lg-5  pb-3">
						<div class="card w-100 mr-lg-3 cont">
							<div class="hartje">
                                @if(empty($item->mainpicture))
                                    <img class="card-img-top image"
                                         src='http://place-hold.it/400x400'
                                         alt="Generated image">
                                @else
                                    <img class="card-img-top image"
                                         src="{{url('uploads/products/'.$item->mainpicture)}}"
                                         alt="Card image cap">
                                @endif
								<div class="middle d-flex ">
                                    <a href="{{route('details',$item->id)}}" class="btn btn-look
												flex-fill"
                                       role="button">
                                        <i class="text-white fas fa-search py-2 px-2"></i>
                                    </a>

								</div>
                                <form action="{{route('wishlist.destroy',$item->rowId)}}" method="POST">
                                    {{csrf_field()}}
                                    {{method_field('DELETE')}}
                                    <button type="submit" class="btn hartpos" style="background:
                                                    none;border: none">
                                        <span class="fa-stack fa-2x">
                                            <i class="far fa-circle fa-stack-2x"></i>
                                            <i class="fas fa-times fa-stack-1x"></i>
                                        </span>
                                    </button>
                                </form>
							</div>
							<div class="card-body">
								<p class="text-dark card-text text-center">{{$item->name}}<br><span>€{{$item->price}}
                                    </span>
                                </p>
							</div>
						</div>
					</div>

                    @endforeach
					{{--<div class="col-6 col-md-3 pb-lg-5  pb-3">
						<div class="card w-100 mr-lg-3 cont">
							<div class="hartje">
								<img class="card-img-top image" src="assets/images/facegrid1.jpg"
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
								
								<a href="#" class="btn hartpos" role="button">
									<span class="fa-stack fa-2x">
										<i class="far fa-circle fa-stack-2x"></i>
										<i class="fas fa-times fa-stack-1x"></i>
									</span>
								</a>
							</div>
							<div class="card-body">
								<p class="text-dark card-text text-center">Product<br><span>€ 40 </span> </p>
							</div>
						</div>
					</div>
					<div class="col-6 col-md-3 pb-lg-5  pb-3">
						<div class="card w-100 mr-lg-3 cont">
							<div class="hartje">
								<img class="card-img-top image" src="assets/images/facegrid1.jpg"
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
								
								<a href="#" class="btn hartpos" role="button">
									<span class="fa-stack fa-2x">
										<i class="far fa-circle fa-stack-2x"></i>
										<i class="fas fa-times fa-stack-1x"></i>
									</span>
								</a>
							</div>
							<div class="card-body">
								<p class="text-dark card-text text-center">Product<br><span>€ 40 </span> </p>
							</div>
						</div>
					</div>
					<div class="col-6 col-md-3 pb-lg-5  pb-3">
						<div class="card w-100 mr-lg-3 cont">
							<div class="hartje">
								<img class="card-img-top image" src="assets/images/facegrid1.jpg"
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
								
								<a href="#" class="btn hartpos" role="button">
									<span class="fa-stack fa-2x">
										<i class="far fa-circle fa-stack-2x"></i>
										<i class="fas fa-times fa-stack-1x"></i>
									</span>
								</a>
							</div>
							<div class="card-body">
								<p class="text-dark card-text text-center">Product<br><span>€ 40 </span> </p>
							</div>
						</div>
					</div>
					<div class="col-6 col-md-3 pb-lg-5  pb-3">
						<div class="card w-100 mr-lg-3 cont">
							<div class="hartje">
								<img class="card-img-top image" src="assets/images/facegrid1.jpg"
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
								
								<a href="#" class="btn hartpos" role="button">
									<span class="fa-stack fa-2x">
										<i class="far fa-circle fa-stack-2x"></i>
										<i class="fas fa-times fa-stack-1x"></i>
									</span>
								</a>
							</div>
							<div class="card-body">
								<p class="text-dark card-text text-center">Product<br><span>€ 40 </span> </p>
							</div>
						</div>
					</div>
					<div class="col-6 col-md-3 pb-lg-5  pb-3">
						<div class="card w-100 mr-lg-3 cont">
							<div class="hartje">
								<img class="card-img-top image" src="assets/images/facegrid1.jpg"
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
								
								<a href="#" class="btn hartpos" role="button">
									<span class="fa-stack fa-2x">
										<i class="far fa-circle fa-stack-2x"></i>
										<i class="fas fa-times fa-stack-1x"></i>
									</span>
								</a>
							</div>
							<div class="card-body">
								<p class="text-dark card-text text-center">Product<br><span>€ 40 </span> </p>
							</div>
						</div>
					</div>
					<div class="col-6 col-md-3 pb-lg-5  pb-3">
						<div class="card w-100 mr-lg-3 cont">
							<div class="hartje">
								<img class="card-img-top image" src="assets/images/facegrid1.jpg"
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
								
								<a href="#" class="btn hartpos" role="button">
									<span class="fa-stack fa-2x">
										<i class="far fa-circle fa-stack-2x"></i>
										<i class="fas fa-times fa-stack-1x"></i>
									</span>
								</a>
							</div>
							<div class="card-body">
								<p class="text-dark card-text text-center">Product<br><span>€ 40 </span> </p>
							</div>
						</div>
					</div>
					<div class="col-6 col-md-3 pb-lg-5  pb-3">
						<div class="card w-100 mr-lg-3 cont">
							<div class="hartje">
								<img class="card-img-top image" src="assets/images/facegrid1.jpg"
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
								
								<a href="#" class="btn hartpos" role="button">
									<span class="fa-stack fa-2x">
										<i class="far fa-circle fa-stack-2x"></i>
										<i class="fas fa-times fa-stack-1x"></i>
									</span>
								</a>
							</div>
							<div class="card-body">
								<p class="text-dark card-text text-center">Product<br><span>€ 40 </span> </p>
							</div>
						</div>
					</div>
					<div class="col-6 col-md-3 pb-lg-5  pb-3">
						<div class="card w-100 mr-lg-3 cont">
							<div class="hartje">
								<img class="card-img-top image" src="assets/images/facegrid1.jpg"
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
								
								<a href="#" class="btn hartpos" role="button">
									<span class="fa-stack fa-2x">
										<i class="far fa-circle fa-stack-2x"></i>
										<i class="fas fa-times fa-stack-1x"></i>
									</span>
								</a>
							</div>
							<div class="card-body">
								<p class="text-dark card-text text-center">Product<br><span>€ 40 </span> </p>
							</div>
						</div>
					</div>--}}
				</div>
			</div>
		
		</section>
        @include('includes.tops')
        @include('includes.subscribe')

	</div>
@endsection
