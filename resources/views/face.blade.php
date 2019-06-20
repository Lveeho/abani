@extends('layouts.app')
@section('content')
	<div class="container-fluid">
		<section id="BCproducts" class="row BC">
			<div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb mb-0 pl-0">
						<li class="breadcrumb-item"><a href="index.blade.php">Home</a></li>
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
						<h1 class="titelnav text-uppercase pt-lg-5">Face</h1>
						<img src="assets/images/productbigpic2.jpg" class="img-fluid mb-4 w-100" alt="Responsive image">
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
										<a class="plain-text hidden-xs hidden-sm hidden-md ml-3">
                                            Toon X - Y van {{$products->total()}}
                                            </a>
									</span>
									<div class="pagination d-flex mx-auto">
                                        <div class="mt-3 mr-3">
                                            {{$products->render()}}
                                        </div>
									</div>
								</div>
							</form>
						</section>
						<section class="productsgrids d-flex">
							<div class="row">
                                @foreach($products as $product)
								<div class="col-lg-4">
									<div class="card w-100 mr-lg-3 cont ">
										<div class="hartje">
                                            @if(empty($product->mainpicture))
                                                <img class="card-img-top image border shadow"
                                                     src='http://place-hold.it/400x400'
                                                     alt="Generated image">
                                                @else
                                                <img class="card-img-top image border shadow"
                                                     src="{{url('uploads/products/'.$product->mainpicture)}}"
                                                     alt="Card image cap">
                                              @endif
											<div class="middle d-flex ">
												<a href="#" class="btn btn-add flex-fill" role="button" >
													<div class="text-uppercase text-white pr-3">
														<i class="fas fa-shopping-bag px-2 py-2"></i> add to cart
													</div>
												</a>
												<a href="{{route('details')}}" class="btn btn-look flex-fill" role="button">
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
											<p class="text-dark card-text
											text-center">{{$product->name}}
                                                <br>
                                                <span>€ {{$product->price}} </span>
                                            </p>
										</div>
									</div>
								</div>
                                @endforeach
							</div>
						</section>


						<section id="pagination-under">
							<div class="d-flex bg-white text-dark align-items-center mb-4 border">
								<span class="grid-cell page-info ml-3">
									<a class="plain-text hidden-xs hidden-sm hidden-md">Toon {{count($products)}} - Y
                                                                                        van
                                        {{$products->total()}}</a>
								</span>
								<div class="pagination ml-auto">
                                    <div class="mt-3 mr-3">
                                        {{$products->render()}}
                                    </div>
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
