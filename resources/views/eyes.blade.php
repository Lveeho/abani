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
					<div class="col-lg-3 border-right">
						<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingOne">
									<h2 class="panel-title pt-5">
										<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
											Categories
										</a>
									</h2>
								</div>
								<div id="collapseOne" class="panel-collapse collapse show" role="tabpanel"
								     aria-labelledby="headingOne">
									<div class="panel-body">
										<div class="panel-group" id="accordion1" role="tablist"
										     aria-multiselectable="true">
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="headingOne1">
													<h3 class="panel-title">
														<a role="button" data-toggle="collapse"
														   data-parent="#accordion1" href="#collapseOne1"
														   aria-expanded="false" aria-controls="collapseOne1"
														   class="collapsed">
															Sale
														</a>
													</h3>
												</div>
												<div id="collapseOne1" class="panel-collapse collapse in"
												     role="tabpanel" aria-labelledby="headingOne1">
													<div class="panel-body">
														<div class="panel-group" id="accordion2" role="tablist"
														     aria-multiselectable="true">
															<div class="panel panel-default">
																<div class="panel-heading" role="tab"
																     id="headingOne11">
																	<h4 class="panel-title">
																		<a role="button"
																		   data-toggle="collapse"
																		   data-parent="#accordion2"
																		   href="#collapseOne11"
																		   aria-expanded="true" aria-controls="collapseOne11">
																			Face
																		</a>
																	</h4>
																</div>
																<div id="collapseOne11"
																     class="panel-collapse collapse in"
																     role="tabpanel"
																     aria-labelledby="headingOne11">
																	<div class="panel-body">
																		<form class="text-dark">
																			<label class="form-check">
																				<input class="form-check-input" type="checkbox" value="">
																				<span class="form-check-label"> Blush
																				</span>
																			</label>
																			<label class="form-check">
																				<input class="form-check-input" type="checkbox" value="">
																				<span class="form-check-label"> Bronzer
																				</span>
																			</label>
																			<label class="form-check">
																				<input class="form-check-input" type="checkbox" value="">
																				<span class="form-check-label">
																					Concealer
																				</span>
																			</label>
																			<label class="form-check">
																				<input class="form-check-input" type="checkbox" value="">
																				<span class="form-check-label"> Contour
																				</span>
																			</label>
																			<label class="form-check">
																				<input class="form-check-input" type="checkbox" value="">
																				<span class="form-check-label"> Spray
																				</span>
																			</label>
																			<label class="form-check">
																				<input class="form-check-input" type="checkbox" value="">
																				<span class="form-check-label">
																					Foundation
																				</span>
																			</label>
																			<label class="form-check">
																				<input class="form-check-input" type="checkbox" value="">
																				<span class="form-check-label">
																					Highlight
																				</span>
																			</label>
																			<label class="form-check">
																				<input class="form-check-input" type="checkbox" value="">
																				<span class="form-check-label"> Powder
																				</span>
																			</label>
																			<label class="form-check">
																				<input class="form-check-input" type="checkbox" value="">
																				<span class="form-check-label"> Primer
																				</span>
																			</label>
																			
																			<button class="btn btn-pink">OK</button>
																		</form>
																	</div>
																</div>
															</div>
															<div class="panel panel-default">
																<div class="panel-heading" role="tab"
																     id="headingOne12">
																	<h4 class="panel-title">
																		<a class="collapsed" role="button"
																		   data-toggle="collapse"
																		   data-parent="#accordion"
																		   href="#collapseOne12"
																		   aria-expanded="false"
																		   aria-controls="collapseOne12">
																			Lips
																		</a>
																	</h4>
																</div>
																<div id="collapseOne12"
																     class="panel-collapse collapse"
																     role="tabpanel"
																     aria-labelledby="headingOne12">
																	<div class="panel-body">
																		<form class="text-dark">
																			<label class="form-check">
																				<input class="form-check-input" type="checkbox" value="">
																				<span class="form-check-label"> Lipliner
																				</span>
																			</label>
																			<label class="form-check">
																				<input class="form-check-input" type="checkbox" value="">
																				<span class="form-check-label"> Lipgloss
																				</span>
																			</label>
																			<label class="form-check">
																				<input class="form-check-input" type="checkbox" value="">
																				<span class="form-check-label">
																					Lipbalm</span>
																			</label>
																			<label class="form-check">
																				<input class="form-check-input" type="checkbox" value="">
																				<span class="form-check-label"> Lipstick
																				</span>
																			</label>
																			<label class="form-check">
																				<input class="form-check-input" type="checkbox" value="">
																				<span class="form-check-label">
																					Liquid lipstick
																				</span>
																			</label>
																			
																			
																			<button class="btn btn-pink">OK</button>
																		</form>
																	</div>
																</div>
															</div>
															<div class="panel panel-default">
																<div class="panel-heading" role="tab"
																     id="headingOne13">
																	<h4 class="panel-title">
																		<a class="collapsed" role="button"
																		   data-toggle="collapse"
																		   data-parent="#accordion"
																		   href="#collapseOne13"
																		   aria-expanded="false"
																		   aria-controls="collapseOne13">
																			Eyes
																		</a>
																	</h4>
																</div>
																<div id="collapseOne13"
																     class="panel-collapse collapse"
																     role="tabpanel"
																     aria-labelledby="headingOne13">
																	<div class="panel-body">
																		<form class="text-dark">
																			<label class="form-check">
																				<input class="form-check-input" type="checkbox" value="">
																				<span class="form-check-label"> Brows
																				</span>
																			</label>
																			<label class="form-check">
																				<input class="form-check-input" type="checkbox" value="">
																				<span class="form-check-label"> Eyeliner
																				</span>
																			</label>
																			<label class="form-check">
																				<input class="form-check-input" type="checkbox" value="">
																				<span class="form-check-label"> Eye
																				                                primer
																				</span>
																			</label>
																			<label class="form-check">
																				<input class="form-check-input" type="checkbox" value="">
																				<span class="form-check-label"> Eye
																				                                shadow
																				</span>
																			</label>
																			<label class="form-check">
																				<input class="form-check-input" type="checkbox" value="">
																				<span class="form-check-label"> False
																				                                lashes
																				</span>
																			</label>
																			<label class="form-check">
																				<input class="form-check-input" type="checkbox" value="">
																				<span class="form-check-label"> Mascara
																				</span>
																			</label>
																			
																			<button class="btn btn-pink">OK</button>
																		</form>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="headingOne2">
													<h3 class="panel-title">
														<a  role="button"
														   data-toggle="collapse" data-parent="#accordion"
														   href="#collapseOne2" aria-expanded="true"
														   aria-controls="collapseOne2">
															Makeup
														</a>
													</h3>
												</div>
												<div id="collapseOne2" class="panel-collapse collapse show"
												     role="tabpanel" aria-labelledby="headingOne2">
													<div class="panel-body">
														<div class="panel-group" id="accordion4" role="tablist"
														     aria-multiselectable="true">
															<div class="panel panel-default">
																<div class="panel-heading" role="tab"
																     id="headingOne21">
																	<h4 class="panel-title">
																		<a role="button"
																		   data-toggle="collapse"
																		   data-parent="#accordion4"
																		   href="#collapseOne21"
																		   aria-expanded="false"
																		   aria-controls="collapseOne21"
																		class="collapsed">
																			Face
																		</a>
																	</h4>
																</div>
																<div id="collapseOne21"
																     class="panel-collapse collapse in"
																     role="tabpanel"
																     aria-labelledby="headingOne21">
																	<div class="panel-body">
																		<form class="text-dark">
																			<label class="form-check">
																				<input class="form-check-input" type="checkbox" value="">
																				<span class="form-check-label"> Blush
																				</span>
																			</label>
																			<label class="form-check">
																				<input class="form-check-input" type="checkbox" value="">
																				<span class="form-check-label"> Bronzer
																				</span>
																			</label>
																			<label class="form-check">
																				<input class="form-check-input" type="checkbox" value="">
																				<span class="form-check-label">
																					Concealer
																				</span>
																			</label>
																			<label class="form-check">
																				<input class="form-check-input" type="checkbox" value="">
																				<span class="form-check-label"> Contour
																				</span>
																			</label>
																			<label class="form-check">
																				<input class="form-check-input" type="checkbox" value="">
																				<span class="form-check-label"> Spray
																				</span>
																			</label>
																			<label class="form-check">
																				<input class="form-check-input" type="checkbox" value="">
																				<span class="form-check-label">
																					Foundation
																				</span>
																			</label>
																			<label class="form-check">
																				<input class="form-check-input" type="checkbox" value="">
																				<span class="form-check-label">
																					Highlight
																				</span>
																			</label>
																			<label class="form-check">
																				<input class="form-check-input" type="checkbox" value="">
																				<span class="form-check-label"> Powder
																				</span>
																			</label>
																			<label class="form-check">
																				<input class="form-check-input" type="checkbox" value="">
																				<span class="form-check-label"> Primer
																				</span>
																			</label>
																			
																			<button class="btn btn-pink">OK</button>
																		</form>
																	</div>
																</div>
															</div>
															<div class="panel panel-default">
																<div class="panel-heading" role="tab"
																     id="headingOne22">
																	<h4 class="panel-title">
																		<a class="collapsed" role="button"
																		   data-toggle="collapse"
																		   data-parent="#accordion"
																		   href="#collapseOne22"
																		   aria-expanded="false"
																		   aria-controls="collapseOne22">
																			Lips
																		</a>
																	</h4>
																</div>
																<div id="collapseOne22"
																     class="panel-collapse collapse"
																     role="tabpanel"
																     aria-labelledby="headingOne22">
																<div class="panel-body">
																	<form class="text-dark">
																		<label class="form-check">
																			<input class="form-check-input" type="checkbox" value="">
																			<span class="form-check-label"> Lipliner
																			</span>
																		</label>
																		<label class="form-check">
																			<input class="form-check-input" type="checkbox" value="">
																			<span class="form-check-label"> Lipgloss
																			</span>
																		</label>
																		<label class="form-check">
																			<input class="form-check-input" type="checkbox" value="">
																			<span class="form-check-label">
																				Lipbalm</span>
																		</label>
																		<label class="form-check">
																			<input class="form-check-input" type="checkbox" value="">
																			<span class="form-check-label"> Lipstick
																			</span>
																		</label>
																		<label class="form-check">
																			<input class="form-check-input" type="checkbox" value="">
																			<span class="form-check-label">
																				Liquid lipstick
																			</span>
																		</label>
																		
																		
																		<button class="btn btn-pink">OK</button>
																	</form>
																</div>
																</div>
															</div>
														</div>
														<div class="panel panel-default">
															<div class="panel-heading" role="tab"
															     id="headingOne23">
																<h4 class="panel-title">
																	<a  role="button"
																	   data-toggle="collapse"
																	   data-parent="#accordion"
																	   href="#collapseOne23"
																	   aria-expanded="true"
																	   aria-controls="collapseOne23">
																		Eyes
																	</a>
																</h4>
															</div>
															<div id="collapseOne23"
															     class="panel-collapse collapse show"
															     role="tabpanel"
															     aria-labelledby="headingOne23">
																<div class="panel-body">
																	<form class="text-dark">
																		<label class="form-check">
																			<input class="form-check-input" type="checkbox" value="">
																			<span class="form-check-label"> Brows
																			</span>
																		</label>
																		<label class="form-check">
																			<input class="form-check-input" type="checkbox" value="">
																			<span class="form-check-label"> Eyeliner
																			</span>
																		</label>
																		<label class="form-check">
																			<input class="form-check-input" type="checkbox" value="">
																			<span class="form-check-label"> Eye
																			                                primer
																			</span>
																		</label>
																		<label class="form-check">
																			<input class="form-check-input" type="checkbox" value="">
																			<span class="form-check-label"> Eye
																			                                shadow
																			</span>
																		</label>
																		<label class="form-check">
																			<input class="form-check-input" type="checkbox" value="">
																			<span class="form-check-label"> False
																			                                lashes
																			</span>
																		</label>
																		<label class="form-check">
																			<input class="form-check-input" type="checkbox" value="">
																			<span class="form-check-label"> Mascara
																			</span>
																		</label>
																		
																		<button class="btn btn-pink">OK</button>
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
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingTwo">
									<h2 class="panel-title">
										<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
											Price
										</a>
									</h2>
								</div>
								<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
									<div class="panel-body">
										<div class="filter-price p-0" id="menu-top2">
											<div class="form-row">
												<div class="form-group mr-3" style="width: 40%">
													<label class="text-dark">Min</label>
													<input type="number" class="form-control " id="inputEmail4"
													       placeholder="€0">
												</div>
												<div class="form-group text-right" style="width: 40%">
													<label class="text-dark">Max</label>
													<input type="number" class="form-control " placeholder="€200">
												</div>
											</div>
											<button class="btn btn-pink">OK</button>
										</div>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingThree">
									<h2 class="panel-title">
										<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
											Brand
										</a>
									</h2>
								</div>
								<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
									<div class="panel-body">
										<form class="text-dark" id="menu-top3">
											<label class="form-check">
												<input class="form-check-input" type="checkbox" value="">
												<span class="form-check-label"> Brand 1</span>
											</label>
											<label class="form-check">
												<input class="form-check-input" type="checkbox" value="">
												<span class="form-check-label"> Brand 2</span>
											</label>
											<label class="form-check">
												<input class="form-check-input" type="checkbox" value="">
												<span class="form-check-label"> Brand 3</span>
											</label>
											<label class="form-check">
												<input class="form-check-input" type="checkbox" value="">
												<span class="form-check-label"> Brand 4</span>
											</label>
											<label class="form-check">
												<input class="form-check-input" type="checkbox" value="">
												<span class="form-check-label"> Brand 5</span>
											</label>
											<label class="form-check">
												<input class="form-check-input" type="checkbox" value="">
												<span class="form-check-label"> Brand 6</span>
											</label>
											<button class="btn btn-pink">OK</button>
										
										</form>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingFour">
									<h2 class="panel-title">
										<a class="collapsed" role="button" data-toggle="collapse"
										   data-parent="#accordion" href="#collapseFour" aria-expanded="false"
										   aria-controls="collapseFour">
											Color
										</a>
									</h2>
								</div>
								<div id="collapseFour" class="panel-collapse collapse" role="tabpanel"
								     aria-labelledby="headingFour">
									<div class="panel-body">
										<form class="text-dark" id="menu-top4">
											<label class="form-check">
												<input class="form-check-input" type="checkbox" value="">
												<span class="color" style="color: grey"> <i class="fas fa-circle"></i></span>
												<span class="form-check-label"> Metallic</span>
											</label>
											<label class="form-check">
												<input class="form-check-input" type="checkbox" value="">
												<span class="color" style="color: navajowhite">
													<i class="fas fa-circle"></i></span>
												<span class="form-check-label"> Nude</span>
											</label>
											<label class="form-check">
												<input class="form-check-input" type="checkbox" value="">
												<span class="color" style="color: peachpuff">
													<i class="fas fa-circle"></i></span>
												<span class="form-check-label"> Peach</span>
											</label>
											<label class="form-check">
												<input class="form-check-input" type="checkbox" value="">
												<span class="color" style="color: goldenrod">
													<i class="fas fa-circle"></i></span>
												<span class="form-check-label"> Rose gold</span>
											</label>
											<label class="form-check">
												<input class="form-check-input" type="checkbox" value="">
												<span class="color" style="color: chocolate">
													<i class="fas fa-circle"></i></span>
												<span class="form-check-label"> Chrome</span>
											</label>
											<label class="form-check">
												<input class="form-check-input" type="checkbox" value="">
												<span class="color" style="color: black">
													<i class="fas fa-circle"></i></span>
												<span class="form-check-label"> Black</span>
											</label>
											<label class="form-check">
												<input class="form-check-input" type="checkbox" value="">
												<span class="color" style="color: antiquewhite">
													<i class="fas fa-circle"></i></span>
												<span class="form-check-label"> White</span>
											</label>
											<label class="form-check">
												<input class="form-check-input" type="checkbox" value="">
												<span class="color" style="color: green">
													<i class="fas fa-circle"></i></span>
												<span class="form-check-label"> Green</span>
											</label>
											<label class="form-check">
												<input class="form-check-input" type="checkbox" value="">
												<span class="color" style="color: yellow">
													<i class="fas fa-circle"></i></span>
												<span class="form-check-label"> Yellow </span>
											</label>
											<label class="form-check">
												<input class="form-check-input" type="checkbox" value="">
												<span class="color" style="color: orange">
													<i class="fas fa-circle"></i></span>
												<span class="form-check-label"> Orange</span>
											</label>
											<label class="form-check">
												<input class="form-check-input" type="checkbox" value="">
												<span class="color" style="color: red">
													<i class="fas fa-circle"></i></span>
												<span class="form-check-label"> Red</span>
											</label>
											<label class="form-check">
												<input class="form-check-input" type="checkbox" value="">
												<span class="color" style="color: pink">
													<i class="fas fa-circle"></i></span>
												<span class="form-check-label"> Pink</span>
											</label>
											<label class="form-check">
												<input class="form-check-input" type="checkbox" value="">
												<span class="color" style="color: purple">
													<i class="fas fa-circle"></i></span>
												<span class="form-check-label"> Purple</span>
											</label>
											<label class="form-check">
												<input class="form-check-input" type="checkbox" value="">
												<span class="color" style="color: blue">
													<i class="fas fa-circle"></i></span>
												<span class="form-check-label"> Blue</span>
											</label>
											<label class="form-check">
												<input class="form-check-input" type="checkbox" value="">
												<span class="color" style="color: grey"> <i class="fas fa-circle"></i></span>
												<span class="form-check-label"> Gray</span>
											</label>
											<label class="form-check">
												<input class="form-check-input" type="checkbox" value="">
												<span class="color" style="color: white">
													<i class="fas fa-circle"></i></span>
												<span class="form-check-label"> Transparant</span>
											</label>
											<label class="form-check">
												<input class="form-check-input" type="checkbox" value="">
												<span class="color" style="color: silver">
													<i class="fas fa-circle"></i></span>
												<span class="form-check-label"> Silver</span>
											</label>
											<label class="form-check">
												<input class="form-check-input" type="checkbox" value="">
												<span class="color" style="color: saddlebrown">
													<i class="fas fa-circle"></i></span>
												<span class="form-check-label"> Brown</span>
											</label>
											<label class="form-check">
												<input class="form-check-input" type="checkbox" value="">
												<span class="color" style="color: rosybrown">
													<i class="fas fa-circle"></i></span>
												<span class="form-check-label"> Bronze</span>
											</label>
											<button class="btn btn-pink">OK</button>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-9 pl-lg-5 pr-0 pt-md-3 pt-lg-0">
						<h1 class="titelnav text-uppercase pt-lg-5">eyes</h1>
						<img src="assets/images/eyesbigpic.jpg" class="w-100 img-fluid mb-4" alt="Responsive image">
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


