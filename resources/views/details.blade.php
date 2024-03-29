@extends('layouts.app')
@section('content')

	<div class="container-fluid">
		<section id="BCproducts" class="row BC">
			<div class="col-lg-12 col-md-10 offset-md-1">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb mb-0 pl-0">
						<li class="breadcrumb-item"><a href="index.blade.php">Home</a></li>
						<li class="breadcrumb-item active" aria-current="page">Makeup</li>
						<li class="breadcrumb-item active" aria-current="page">Details</li>
					</ol>
				</nav>
			</div>
		</section>
		<section id="details" class="row">
			<div class="col-lg-12 col-md-10 offset-md-1">
				<div class="row">


                            <div id="detailsphoto" class="col-lg-5 pl-lg-0 pr-lg-4 p-0 pt-4 mt-2">
                                @if(empty($product->mainpicture))
                                    <img class="img-fluid px-5 mx-auto d-flex"
                                         src='http://place-hold.it/400x400'
                                         alt="Generated image">
                                @else
                                    <img src="{{url('uploads/products/'.$product->mainpicture)}}"
                                         class="img-fluid px-5 mx-auto d-flex" alt="">
                                @endif


                                <div id="myCarousel" class="carousel slide py-5" data-ride="carousel" data-interval="0">
                                    <!-- Carousel indicators -->
                                    <ol class="carousel-indicators">
                                        <li data-target="#myCarousel" data-slide-to="0" class=""></li>
                                        <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
                                    </ol>
                                    <!-- Wrapper for carousel items -->
                                    <div class="carousel-inner">

                                        <div class="item carousel-item active">
                                            <div class="row">
                                                @foreach($photoIds as $photoId)

                                                    @php($uniquePhotos=\App\Photo::where('product_color_id',
                                                    $photoId->id)->get())
                                                        @foreach($uniquePhotos as $uniquePhoto)
                                                            <div class="col-3">
                                                                <div class="thumb-wrapper">
                                                                    <div class="img-box">
                                                                        @if(empty($uniquePhoto->name))
                                                                            <img class="img-responsive img-fluid mb-2"
                                                                                 src='http://place-hold.it/400x400'
                                                                                 alt="Generated image">
                                                                        @else
                                                                            <img src="{{url('uploads/productcolors/'.$uniquePhoto->name)}}"
                                                                                 class="img-responsive img-fluid mb-2"
                                                                                 alt="">
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                @endforeach

                                            </div>
                                        </div>

                                        {{--<div class="item carousel-item active">
                                            <div class="row">
                                                <div class="col-3">
                                                    <div class="thumb-wrapper">
                                                        <div class="img-box">
                                                            <img src="assets/images/detailpicbody.jpg" class="img-responsive img-fluid" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <div class="thumb-wrapper">
                                                        <div class="img-box">
                                                            <img src="assets/images/detailpicbody.jpg" class="img-responsive img-fluid" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <div class="thumb-wrapper">
                                                        <div class="img-box">
                                                            <img src="assets/images/detailpicbody.jpg" class="img-responsive img-fluid" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <div class="thumb-wrapper">
                                                        <div class="img-box">
                                                            <img src="assets/images/detailpicbody.jpg" class="img-responsive img-fluid" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>--}}
                                    </div>
                                    <!-- Carousel controls -->
                                    <a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
                                        <i class="fa fa-angle-left"></i>
                                    </a>
                                    <a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                </div>

                            </div>

					<div id="detailstext" class="col-lg-7 pl-4" >
						<h1 class="text-uppercase text-dark pt-5 pb-2 border-bottom">product details</h1>
						<div id="detailrating" class="d-flex border-bottom pt-3">
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star pr-4"></span>
							<p class=" text-dark pr-2"> 3 reviews</p>
						</div>
						<div id="descriptionshort" class="border-bottom">
							<h2 class="text-dark text-uppercase pt-4"> Short description</h2>
							<p class="text-dark">{{$product->description}} </p>
						</div>
						<div id="productdetails" class="border-bottom">
							<h2 class="text-dark pt-4">
								<strong><span>{{$product->price}}</span></strong>
							</h2>
                            @php($totalStock=0)
                            @foreach($product->lots as $lot)
                                @php($totalStock+=$lot->pivot->stock)
                            @endforeach
                            <h3 class="text-dark">
                                <em> Availability:
                                    @if($totalStock<1)
                                        <span style="color: red">
                                            <i class="fas fa-check-circle"></i>
                                            out of stock
                                        </span>
                                    @elseif($totalStock<50)
                                        <span style="color: darkorange">
                                            <i class="fas fa-check-circle"></i>
                                            low in stock
                                        </span>
                                    @else
                                        <span style="color: greenyellow">
                                            <i class="fas fa-check-circle"></i>
                                            in stock
                                        </span>
                                    @endif
                                </em>
                            </h3>

							<h3 class="text-dark pt-1 pb-3"> Product code: <strong>{{$product->code}}</strong> </h3>
						</div>
                        <form action="{{route('cart.store')}}" method="POST" id="formquantity">
                            @csrf
						<div id="selectordetails" class="row">

							<div class="col-lg-4">
								<div class="py-4">
                                    <p class="control-label requiredStar text-dark"> Color</p>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="mt-4 mt-lg-0">
                                                <ul class="list-inline mb-0 colours-wrapper">
                                                    <li class="list-inline-item">
                                                        @foreach($product->colors as $color)
                                                            <label class="form-check">
                                                                <input class="form-check-input" type="radio" name="color">
                                                                <span class="color bg-light" style="color: {{$color->color}}">
                                                                    <i class="fas fa-circle"></i>
                                                                </span>

                                                            </label>
                                                        @endforeach
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>

                                    </div>

								</div>
							</div>
							<div class="col-lg-8">
								<div class="py-4">
									<p class="control-label requiredStar text-dark"> Quantity</p>
									<div class="input-group input-number-group">

                                            <input class="input-number swatch" name="quantity" type="number" value="1"
                                                                                                     min="0"
                                                   max="10">

									</div>
								</div>
							
							</div>
                            <div class="col-lg-6">
                                @if(session()->has('success_message_wishlist'))
                                    <div class="alert alert-success">
                                        {{session()->get('success_message_wishlist')}}
                                    </div>
                                @endif
                            </div>
							<div class="col-lg-12 p-0 py-lg-3 mt-3">
								<div class="d-flex pr-3">

                                        <input type="hidden" name="id" value="{{$product->id}}">
                                        <input type="hidden" name="name" value="{{$product->name}}">
                                        <input type="hidden" name="price" value="{{$product->price}}">
                                        <input type="hidden" name="color" value="white">
                                        <input type="hidden" name="mainpicture"
                                               value="{{$product->mainpicture}}">
                                        @if($totalStock<1)
                                            <button type="submit" class="btn-add text-uppercase
                                                     text-white pr-3" disabled style="background-color: darkgray">
                                                <i class="fas fa-shopping-bag px-2 py-2"></i> add to cart
                                            </button>
                                        @else
                                            <button type="submit" id="submitBtn" class="btn-pink btn-add text-uppercase
                                                     text-white pr-3">
                                                <i class="fas fa-shopping-bag px-2 py-2"></i> add to cart
                                            </button>
                                        @endif

                                    </form>

                                    <form action="{{route('wishlist.store')}}" method="POST" >
                                        @csrf
                                        <input type="hidden" name="id" value="{{$product->id}}">
                                        <input type="hidden" name="name" value="{{$product->name}}">
                                        <input type="hidden" name="price" value="{{$product->price}}">
                                        <input type="hidden" name="quantity" value="1">
                                        <input type="hidden" name="mainpicture"
                                               value="{{$product->mainpicture}}">
                                        <button type="submit" class="btn-pink d-flex
									align-items-center">
                                            <i class="text-white far fa-heart py-2 px-2"></i>
                                        </button>
                                    </form>


								</div>
							</div>
						</div>
						<div id="sharedetails" class="row pt-3 pt-lg-0">
							<div class="col-12 d-flex">
								<p class="text-dark pr-3">Share:</p>
								<a href="" ><i class="fab fa-facebook-f fa-1x fa-fw py-1 rounded mr-2"></i></a>
								<a href="#" ><i class="fab fa-twitter fa-1x fa-fw py-1 rounded mr-2"></i></a>
								<a href="#"><i class="fab fa-youtube fa-1x fa-fw py-1 rounded mr-2"></i></a>
								<a href="#"><i class="fab fa-instagram fa-1x fa-fw py-1 rounded mr-2"></i></a>
							
							</div>
						</div>
						<div id="tabsdetails" class="row mt-5 pt-3 w-100" >
							<div class="col-12">
								<nav>
									<div class="nav nav-tabs d-flex flex-column flex-md-row" id="nav-tab"
									     role="tablist">
										<a class="nav-item nav-link text-uppercase" id="nav-ingredients-tab" data-toggle="tab"
										   href="#nav-ingredients"
										   role="tab" aria-controls="nav-ingredients" aria-selected="false">Ingredients</a>
										<a class="nav-item nav-link text-uppercase" id="nav-reviews-tab" data-toggle="tab" href="#nav-reviews"
										   role="tab" aria-controls="nav-reviews" aria-selected="false">Reviews</a>
									</div>
								</nav>
								<div class="tab-content text-dark" id="nav-tabContent">
									<div class="tab-pane fade my-5" id="nav-ingredients" role="tabpanel"
									     aria-labelledby="nav-ingredients-tab">
										<p>@foreach($product->lots as $lot)
                                            Ingrediënten batch nr {{$lot->id}}:<br>
                                                {{$lot->ingredients}}
                                                <br>
                                               @endforeach
                                        </p>
									</div>
									<div class="tab-pane fade my-5" id="nav-reviews" role="tabpanel"
									     aria-labelledby="nav-reviews-tab">
										<div id="review_form_response1" style="display:none;" class="alert"></div>
										
										<div id="review_list" class="my-4">
											<div class="theme-review" id="comment_25773">
												<div class="theme_review_item">
													<div class="theme-review__heading">
														<div class="theme-review__heading__item">
															<h4>Amazing!</h4>
															<ul class="list-dotted" style="list-style: none">
																<li class="list-dotted__item">by MARIOS</li>
																<li class="list-dotted__item">1 month ago</li>
															</ul>
														</div>
													</div>
													<div class="theme-review__body">
														<div class="main_reply_form">
															<div class="media-body">
																<form class="review_edit_form">
																	<input type="hidden" name="action" value="review_edit">
																	<input type="hidden" name="post_id" value="1651">
																	<input type="hidden" name="comm_id" value="25773">
																	<div class="row">
																		<div class="form-group col-md-8 mb-3">
																			<label class="col-form-label" for="reviewTitle">Review title</label>
																			<input class="form-control required" type="text" name="reviewTitle" id="reviewTitle" value="Amazing!">
																			<div class="invalid-feedback">Please provide a title</div>
																		</div>
																		<div class="form-group col-md-4 mb-3">
																			<label class="col-form-label" for="reviewScore">Review</label>
																			<select class="form-control required" name="reviewScore" id="reviewScore">
																				<option value="5" selected="selected">★★★★★ (5/5)</option>
																				<option value="4">★★★★☆ (4/5)</option>
																				<option value="3">★★★☆☆ (3/5)</option>
																				<option value="2">★★☆☆☆ (2/5)</option>
																				<option value="1">★☆☆☆☆ (1/5)</option>
																			</select>
																			<div class="invalid-feedback">Please select a score</div>
																		</div>
																		<div class="form-group col-12">
																			<label class="col-form-label" >Review</label>
																			<span class="form-sublink" id="reviewBody_edit_count">139/500</span>
																			<textarea class="form-control required" name="reviewBody" id="reviewBody_edit">Excellent theme , perfectly organized and amazing support! I loved the technologies used, the sections , feeling and warmth of the project.</textarea>
																			<div class="invalid-feedback">Please enter a review</div>
																		</div>
																		<div class="form-group col-12">
																			<button class="btn btn-pink btn-block review_edit_button" type="button">Update review</button>
																		</div>
																	</div>
																</form>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
	
	{{--<div class="container-fluid">
		<section id="relatedproducts" class="col-lg-8 offset-lg-2 py-5 border-top">
			<div class="row d-flex pb-3">
				<h2 class="text-uppercase text-dark mr-auto my-auto">Related products</h2>
				<a href="#" class="btn btn-pink py-2 my-auto rounded mr-3" role="button">
					<div class="text-uppercase text-white">view all</div>
				</a>
				<a class="mijncarousselvorige my-auto " href="#carouselExampleIndicators" role="button"
				   data-slide="prev">
					<span class="fa-stack fa-1x" aria-hidden="true">
						<i class="fas fa-chevron-circle-left fa-stack-2x"></i>
					</span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="mijncarousselvolgende my-auto " href="#carouselExampleIndicators" role="button"
				   data-slide="next">
					<span class="fa-stack fa-1x" aria-hidden="true">
						<i class="fas fa-chevron-circle-right fa-stack-2x"></i>
					</span>
					<span class="sr-only">Next</span>
				</a>
			</div>
			<div class="row">
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner w-100 mx-auto">
						<div class="carousel-item active">
							<div class="row">
								<div class="card col-6 col-lg-3 cont">
									<div class="borderwrapper">
										<div class="hartje">
											<img class="card-img-top img-fluid" src="assets/images/detailpicbody.jpg"
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
										</div>
										<div class="card-body pb-0 text-center">
											<p class="text-dark pt-1 pr-1"> Product title here</p>
											<p class="text-dark"><strong>€22</strong></p>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
										</div>
									
									</div>
								</div>
								<div class="card col-6 col-lg-3 cont">
									<div class="borderwrapper">
										<div class="hartje">
											<img class="card-img-top img-fluid" src="assets/images/detailpicbody.jpg"
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
										</div>
										<div class="card-body pb-0 text-center">
											<p class="text-dark pt-1 pr-1"> Product title here</p>
											<p class="text-dark"><strong>€22</strong></p>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
										</div>
									
									</div>
								</div>
								<div class="card col-6 col-lg-3 cont">
									<div class="borderwrapper">
										<div class="hartje">
											<img class="card-img-top img-fluid" src="assets/images/detailpicbody.jpg"
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
										</div>
										<div class="card-body pb-0 text-center">
											<p class="text-dark pt-1 pr-1"> Product title here</p>
											<p class="text-dark"><strong>€22</strong></p>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
										</div>
									
									</div>
								</div>
								<div class="card col-6 col-lg-3 cont">
									<div class="borderwrapper">
										<div class="hartje">
											<img class="card-img-top img-fluid" src="assets/images/detailpicbody.jpg"
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
										</div>
										<div class="card-body pb-0 text-center">
											<p class="text-dark pt-1 pr-1"> Product title here</p>
											<p class="text-dark"><strong>€22</strong></p>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star unchecked"></span>
											<span class="fa fa-star unchecked"></span>
										</div>
									
									</div>
								</div>
							</div>
						</div>
						<div class="carousel-item">
							<div class="row">
								
								<div class="card col-6 col-lg-3 cont">
									<div class="borderwrapper">
										<div class="hartje">
											<img class="card-img-top img-fluid" src="assets/images/detailpicbody.jpg"
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
										</div>
										<div class="card-body pb-0 text-center">
											<p class="text-dark pt-1 pr-1"> Product title here</p>
											<p class="text-dark"><strong>€22</strong></p>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
										</div>
									
									</div>
								</div>
								<div class="card col-6 col-lg-3 cont">
									<div class="borderwrapper">
										<div class="hartje">
											<img class="card-img-top img-fluid" src="assets/images/detailpicbody.jpg"
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
										</div>
										<div class="card-body pb-0 text-center">
											<p class="text-dark pt-1 pr-1"> Product title here</p>
											<p class="text-dark"><strong>€22</strong></p>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
										</div>
									
									</div>
								</div>
								<div class="card col-6 col-lg-3 cont">
									<div class="borderwrapper">
										<div class="hartje">
											<img class="card-img-top img-fluid" src="assets/images/detailpicbody.jpg"
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
										</div>
										<div class="card-body pb-0 text-center">
											<p class="text-dark pt-1 pr-1"> Product title here</p>
											<p class="text-dark"><strong>€22</strong></p>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
										</div>
									
									</div>
								</div>
								<div class="card col-6 col-lg-3 cont">
									<div class="borderwrapper">
										<div class="hartje">
											<img class="card-img-top img-fluid" src="assets/images/detailpicbody.jpg"
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
										</div>
										<div class="card-body pb-0 text-center">
											<p class="text-dark pt-1 pr-1"> Product title here</p>
											<p class="text-dark"><strong>€22</strong></p>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
										</div>
									
									</div>
								</div>
							</div>
						</div>
						<div class="carousel-item">
							<div class="row">
								
								<div class="card col-6 col-lg-3 cont">
									<div class="borderwrapper">
										<div class="hartje">
											<img class="card-img-top img-fluid" src="assets/images/detailpicbody.jpg"
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
										</div>
										<div class="card-body pb-0 text-center">
											<p class="text-dark pt-1 pr-1"> Product title here</p>
											<p class="text-dark"><strong>€22</strong></p>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
										</div>
									
									</div>
								</div>
								<div class="card col-6 col-lg-3 cont">
									<div class="borderwrapper">
										<div class="hartje">
											<img class="card-img-top img-fluid" src="assets/images/detailpicbody.jpg"
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
										</div>
										<div class="card-body pb-0 text-center">
											<p class="text-dark pt-1 pr-1"> Product title here</p>
											<p class="text-dark"><strong>€22</strong></p>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
										</div>
									
									</div>
								</div>
								<div class="card col-6 col-lg-3 cont">
									<div class="borderwrapper">
										<div class="hartje">
											<img class="card-img-top img-fluid" src="assets/images/detailpicbody.jpg"
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
										</div>
										<div class="card-body pb-0 text-center">
											<p class="text-dark pt-1 pr-1"> Product title here</p>
											<p class="text-dark"><strong>€22</strong></p>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
										</div>
									
									</div>
								</div>
								<div class="card col-6 col-lg-3 cont">
									<div class="borderwrapper">
										<div class="hartje">
											<img class="card-img-top img-fluid" src="assets/images/detailpicbody.jpg"
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
										</div>
										<div class="card-body pb-0 text-center">
											<p class="text-dark pt-1 pr-1"> Product title here</p>
											<p class="text-dark"><strong>€22</strong></p>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
										</div>
									
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
        --}}{{--@include('include.tops')
		@include('include.subscribe')--}}{{--
	</div>--}}
@endsection
