<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="Shadesofgray template">
	<meta name="keywords" content="shadesofgray, template">
	<meta name="author" content="Tom Vanhoutte">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
	      integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<title>Products</title>
</head>
<body>
<header>
	<nav class="topnav navbar navbar-expand-lg navbar-light py-0 px-0">
		<a class="navbar-brand text-uppercase px-lg-5 mr-0" href="index.blade.php">Abani</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
		        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			<div class="navbar-nav mx-auto">
				<a class="nav-item nav-link text-uppercase active mr-xl-5 mr-lg-2" href="index.blade.php">Home <span
						class="sr-only">
					(current)</span></a>
				<a class="nav-item nav-link text-uppercase mr-xl-5 mr-lg-2" href="sale.blade.php">Sale</a>
				<a class="nav-item nav-link text-uppercase mr-xl-5 mr-lg-2" href="face.blade.php">Face</a>
				<a class="nav-item nav-link text-uppercase mr-xl-5 mr-lg-2" href="lips.blade.php">Lips</a>
				<a class="nav-item nav-link text-uppercase mr-xl-5 mr-lg-2" href="eyes.blade.php">Eyes</a>
				<a class="nav-item nav-link text-uppercase mr-xl-5 mr-lg-2" href="#">Brands</a>
				<a class="nav-item nav-link text-uppercase mr-xl-5 mr-lg-2" href="#">portfolio</a>
				<a class="nav-item nav-link text-uppercase mr-xl-5 mr-lg-2" href="#">blogs</a>
			</div>
		</div>
		<div class="d-flex ">
			<div id="custom-search-input">
				<div class="input-group">
					<input type="text" class="form-control input-lg align-self-center search"
					       placeholder="search" />
					<span class="input-group-btn">
						<button class="btn btn-nav  " type="button">
							<i class="fas fa-search"></i>
						</button>
					</span>
				</div>
			</div>
			<button class="btn btn-nav" type="button">
				<i class="fas fa-cog"></i>
			</button>
			<button class="btn btn-nav " type="button">
				<i class="fas fa-shopping-bag"></i>
			</button>
			<button class="btn btn-nav " type="button">
				<i class="fas fa-arrow-circle-up"></i>
			</button>
		</div>
	
	</nav>
</header>
<main>
	<div class="container-fluid">
		<section id="BCproducts" class="row BC">
			<div class="col-8 offset-2">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb mb-0 pl-0">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active" aria-current="page">Makeup</li>
					</ol>
				</nav>
			</div>
		</section>
		<section id="categoryleft" class=" row justify-content-between mb-5">
			<div class="col-lg-8 offset-lg-2">
				<div class="row">
					<div class="col-lg-3 border-right">
						<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingOne">
									<h2 class="panel-title pt-5">
										<a role="button" data-toggle="collapse" data-parent="#accordion"
										   href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
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
														   aria-expanded="true" aria-controls="collapseOne1">
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
													<a class="collapsed" role="button"
													   data-toggle="collapse" data-parent="#accordion"
													   href="#collapseOne2" aria-expanded="false"
													   aria-controls="collapseOne2">
														Makeup
													</a>
												</h3>
											</div>
											<div id="collapseOne2" class="panel-collapse collapse show"
											     role="tabpanel" aria-labelledby="headingOne2">
												<div class="panel-body">
													<div class="panel-group" id="accordion3" role="tablist"
													     aria-multiselectable="true">
														<div class="panel panel-default">
															<div class="panel-heading" role="tab"
															     id="headingOne21">
																<h4 class="panel-title">
																	<a role="button"
																	   data-toggle="collapse"
																	   data-parent="#accordion3"
																	   href="#collapseOne21"
																	   aria-expanded="true"
																	   aria-controls="collapseOne21">
																		Face
																	</a>
																</h4>
															</div>
															<div id="collapseOne21"
															     class="panel-collapse collapse show"
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
													<div class="panel panel-default">
														<div class="panel-heading" role="tab"
														     id="headingOne23">
															<h4 class="panel-title">
																<a class="collapsed" role="button"
																   data-toggle="collapse"
																   data-parent="#accordion"
																   href="#collapseOne23"
																   aria-expanded="false"
																   aria-controls="collapseOne23">
																	Eyes
																</a>
															</h4>
														</div>
														<div id="collapseOne23"
														     class="panel-collapse collapse"
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
												<span class="form-check-label"> Metallic</span>
											</label>
											<label class="form-check">
												<input class="form-check-input" type="checkbox" value="">
												<span class="form-check-label"> Nude</span>
											</label>
											<label class="form-check">
												<input class="form-check-input" type="checkbox" value="">
												<span class="form-check-label"> Peach</span>
											</label>
											<label class="form-check">
												<input class="form-check-input" type="checkbox" value="">
												<span class="form-check-label"> Rose gold</span>
											</label>
											<label class="form-check">
												<input class="form-check-input" type="checkbox" value="">
												<span class="form-check-label"> Chrome</span>
											</label>
											<label class="form-check">
												<input class="form-check-input" type="checkbox" value="">
												<span class="form-check-label"> Black</span>
											</label>
											<label class="form-check">
												<input class="form-check-input" type="checkbox" value="">
												<span class="form-check-label"> White</span>
											</label>
											<label class="form-check">
												<input class="form-check-input" type="checkbox" value="">
												<span class="form-check-label"> Green</span>
											</label>
											<label class="form-check">
												<input class="form-check-input" type="checkbox" value="">
												<span class="form-check-label"> Yellow </span>
											</label>
											<label class="form-check">
												<input class="form-check-input" type="checkbox" value="">
												<span class="form-check-label"> Orange</span>
											</label>
											<label class="form-check">
												<input class="form-check-input" type="checkbox" value="">
												<span class="form-check-label"> Red</span>
											</label>
											<label class="form-check">
												<input class="form-check-input" type="checkbox" value="">
												<span class="form-check-label"> Pink</span>
											</label>
											<label class="form-check">
												<input class="form-check-input" type="checkbox" value="">
												<span class="form-check-label"> Purple</span>
											</label>
											<label class="form-check">
												<input class="form-check-input" type="checkbox" value="">
												<span class="form-check-label"> Blue</span>
											</label>
											<label class="form-check">
												<input class="form-check-input" type="checkbox" value="">
												<span class="form-check-label"> Gray</span>
											</label>
											<label class="form-check">
												<input class="form-check-input" type="checkbox" value="">
												<span class="form-check-label"> Transparant</span>
											</label>
											<label class="form-check">
												<input class="form-check-input" type="checkbox" value="">
												<span class="form-check-label"> Silver</span>
											</label>
											<label class="form-check">
												<input class="form-check-input" type="checkbox" value="">
												<span class="form-check-label"> Brown</span>
											</label>
											<label class="form-check">
												<input class="form-check-input" type="checkbox" value="">
												<span class="form-check-label"> Bronze</span>
											</label>
											<button class="btn btn-pink">OK</button>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
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
												<a href="#" class="btn btn-look flex-fill" role="button">
													<i class="text-white fas fa-search py-2 px-2"></i>
												</a>
											</div>
											
											<a href="#" class="btn hartpos" role="button">
												<span class="fa-stack fa-3x">
													<i class="fas fa-circle fa-stack-2x text-white"></i>
													<i class="far fa-heart fa-stack-1x "></i>
												</span>
											</a>
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
												<a href="#" class="btn btn-look flex-fill" role="button">
													<i class="text-white fas fa-search py-2 px-2"></i>
												</a>
											</div>
											
											<a href="#" class="btn hartpos" role="button">
												<span class="fa-stack fa-3x">
													<i class="fas fa-circle fa-stack-2x text-white"></i>
													<i class="far fa-heart fa-stack-1x "></i>
												</span>
											</a>
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
												<a href="#" class="btn btn-look flex-fill" role="button">
													<i class="text-white fas fa-search py-2 px-2"></i>
												</a>
											</div>
											
											<a href="#" class="btn hartpos" role="button">
												<span class="fa-stack fa-3x">
													<i class="fas fa-circle fa-stack-2x text-white"></i>
													<i class="far fa-heart fa-stack-1x "></i>
												</span>
											</a>
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
												<a href="#" class="btn btn-look flex-fill" role="button">
													<i class="text-white fas fa-search py-2 px-2"></i>
												</a>
											</div>
											
											<a href="#" class="btn hartpos" role="button">
												<span class="fa-stack fa-3x">
													<i class="fas fa-circle fa-stack-2x text-white"></i>
													<i class="far fa-heart fa-stack-1x "></i>
												</span>
											</a>
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
												<a href="#" class="btn btn-look flex-fill" role="button">
													<i class="text-white fas fa-search py-2 px-2"></i>
												</a>
											</div>
											
											<a href="#" class="btn hartpos" role="button">
												<span class="fa-stack fa-3x">
													<i class="fas fa-circle fa-stack-2x text-white"></i>
													<i class="far fa-heart fa-stack-1x "></i>
												</span>
											</a>
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
												<a href="#" class="btn btn-look flex-fill" role="button">
													<i class="text-white fas fa-search py-2 px-2"></i>
												</a>
											</div>
											
											<a href="#" class="btn hartpos" role="button">
												<span class="fa-stack fa-3x">
													<i class="fas fa-circle fa-stack-2x text-white"></i>
													<i class="far fa-heart fa-stack-1x "></i>
												</span>
											</a>
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
												<a href="#" class="btn btn-look flex-fill" role="button">
													<i class="text-white fas fa-search py-2 px-2"></i>
												</a>
											</div>
											
											<a href="#" class="btn hartpos" role="button">
												<span class="fa-stack fa-3x">
													<i class="fas fa-circle fa-stack-2x text-white"></i>
													<i class="far fa-heart fa-stack-1x "></i>
												</span>
											</a>
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
												<a href="#" class="btn btn-look flex-fill" role="button">
													<i class="text-white fas fa-search py-2 px-2"></i>
												</a>
											</div>
											
											<a href="#" class="btn hartpos" role="button">
												<span class="fa-stack fa-3x">
													<i class="fas fa-circle fa-stack-2x text-white"></i>
													<i class="far fa-heart fa-stack-1x "></i>
												</span>
											</a>
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
												<a href="#" class="btn btn-look flex-fill" role="button">
													<i class="text-white fas fa-search py-2 px-2"></i>
												</a>
											</div>
											
											<a href="#" class="btn hartpos" role="button">
												<span class="fa-stack fa-3x">
													<i class="fas fa-circle fa-stack-2x text-white"></i>
													<i class="far fa-heart fa-stack-1x "></i>
												</span>
											</a>
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
				</div>
			</div>
		</section>
		<section id="tops" class="row pt-5 pb-4">
			<div class="col-8 offset-2">
				<div class="row">
					<div class="d-flex flex-column mt-5 mx-auto bg-white pr-lg-5 mb-5" >
						<h2 class="text-uppercase text-dark d-flex flex-column pb-4 pl-3 pt-3"> top rated</h2>
						<div class="d-flex pb-4">
							<img class="flex-column mx-3 my-3" src="assets/images/toprated1.jpg" alt="">
							<div class="align-items-center">
								<h3 class="text-dark pt-3 pr-1"> Product title here</h3>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<p class="text-dark">€22</p>
							</div>
						</div>
						<div class="d-flex pb-4">
							<img class="flex-column mx-3 my-3" src="assets/images/toprated2.jpg" alt="">
							<div class="align-items-center">
								<h3 class="text-dark pt-3 pr-1"> Product title here</h3>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<p class="text-dark">€22</p>
							</div>
						</div>
						<div class="d-flex pb-4">
							<img class="flex-column mx-3 my-3" src="assets/images/toprated3.jpg" alt="">
							<div class="align-items-center">
								<h3 class="text-dark pt-3 pr-1"> Product title here</h3>
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
							<img class="flex-column mx-3 my-3" src="assets/images/bestsellers1.jpg" alt="">
							<div class="align-items-center">
								<h3 class="text-dark pt-3 pr-1"> Product title here</h3>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<p class="text-dark">€22</p>
							</div>
						</div>
						<div class="d-flex pb-4">
							<img class="flex-column mx-3 my-3" src="assets/images/bestsellers2.jpg" alt="">
							<div class="align-items-center">
								<h3 class="text-dark pt-3 pr-1"> Product title here</h3>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<p class="text-dark">€22</p>
							</div>
						</div>
						<div class="d-flex pb-4">
							<img class="flex-column mx-3 my-3" src="assets/images/bestsellers3.jpg" alt="">
							<div class="align-items-center">
								<h3 class="text-dark pt-3 pr-1"> Product title here</h3>
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
							<img class="flex-column mx-3 my-3" src="assets/images/populars1.jpg" alt="">
							<div class="align-items-center">
								<h3 class="text-dark pt-3 pr-1"> Product title here</h3>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<p class="text-dark">€22</p>
							</div>
						</div>
						<div class="d-flex pb-4">
							<img class="flex-column mx-3 my-3" src="assets/images/populars2.jpg" alt="">
							<div class="align-items-center">
								<h3 class="text-dark pt-3 pr-1"> Product title here</h3>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<p class="text-dark">€22</p>
							</div>
						</div>
						<div class="d-flex pb-4">
							<img class="flex-column mx-3 my-3" src="assets/images/populars3.jpg" alt="">
							<div class="align-items-center">
								<h3 class="text-dark pt-3 pr-1"> Product title here</h3>
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


</main>
<footer>
	<div class="py-5" id="top">
		<div class="row text-light">
			<div class="col-10 offset-1 d-lg-flex" >
				<div class="mx-auto">
					<h1 class="pb-2 mb-4">Abani</h1>
					<div class="d-flex d-inline">
						<i class="fas fa-map-marker-alt mr-3"></i>
						<p class="text-uppercase"> any street, 126bm rositower, <br> newyork, USA</p>
					</div>
					<div class="d-flex d-inline">
						<i class="fas fa-envelope-open mr-3"></i>
						<p class="text-uppercase"><span>contact@abanistore.com</span></p>
					</div>
					<div class="d-flex d-inline">
						<i class="fas fa-phone mr-3"></i>
						<p class="text-uppercase">phone: +84 912 345 678</p>
					</div>
					<a href="https://www.facebook.com/" ><i class="fab fa-facebook-f fa-2x fa-fw py-1 rounded mr-1"></i></a>
					<a href="https://twitter.com/?lang=nl" ><i class="fab fa-twitter fa-2x fa-fw py-1 rounded mr-1"></i></a>
					<a href="https://www.youtube.com/?gl=BE"><i class="fab fa-youtube fa-2x fa-fw py-1 rounded mr-1"></i></a>
					<a href="https://www.instagram.com/?hl=nl"><i class="fab fa-instagram fa-2x fa-fw py-1 rounded mr-1"></i></a>
				</div>
				<div class="mx-auto">
					<h2 class="text-uppercase pb-3 mb-4 pt-5 pt-lg-0"> usefull links</h2>
					<ul class="text-uppercase">
						<li><a href="404.blade.php">my account</a> </li>
						<li><a href="404.blade.php">orders and returns</a></li>
						<li><a href="404.blade.php">terms of use</a></li>
						<li><a href="404.blade.php">shipping information</a></li>
					</ul>
				</div>
				<div class="mx-auto">
					<h2 class="text-uppercase pb-3 mb-4">customer care</h2>
					<ul class="text-uppercase">
						<li><a href="404.blade.php">about us</a></li>
						<li><a href="404.blade.php">terms & condition</a></li>
						<li><a href="404.blade.php">privacy policy</a></li>
						<li><a href="404.blade.php">sale & special offers</a></li>
						<li><a href="404.blade.php">contact us</a></li>
					</ul>
				</div>
				<div class="mx-auto">
					<h2 class="text-uppercase pb-3 mb-4">featured news</h2>
					<div class="d-flex pb-3">
						<img class="flex-column pr-2" src="assets/images/featuredfooter.png" alt="">
						<div>
							<h3 class="d-block"><a href="404.blade.php">Mauris bandit aliqut elit</a></h3>
							<h4 class="text-uppercase"> 11 hours ago</h4>
						</div>
					</div>
					<div class="d-flex pb-3">
						<img class="flex-column pr-2" src="assets/images/featuredfooter.png" alt="">
						<div>
							<h3 class="d-block"><a href="404.blade.php">Mauris bandit aliqut elit</a></h3>
							<h4 class="text-uppercase"> 11 hours ago</h4>
						</div>
					</div>
					<div class="d-flex pb-3">
						<img class="flex-column pr-2" src="assets/images/featuredfooter.png" alt="">
						<div>
							<h3 class="d-block"><a href="404.blade.php">Mauris bandit aliqut elit</a></h3>
							<h4 class="text-uppercase"> 11 hours ago</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="bottom">
		<div class="row">
			<div class="col-12 text-center">
				<p class="py-2 m-0"> &copy; 2019 Designed by <span>Lore Vanhooren</span> </p>
			</div>
		</div>
	</div>
</footer>



<script src="js/jquery.min.js"></script>
<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
<script src="js/main.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/scrollup/2.4.1/jquery.scrollUp.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script>


</body>
</html>
