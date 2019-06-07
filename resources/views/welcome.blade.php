@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <section id="eersteslider" class="row text-dark">
            <div class="col-12 mt-3 px-0">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block img-fluid" src="{{asset('assets/images/slide1.jpg')}}" alt="First slide">
                            <div class="pb-5 carousel-caption caption1 ">
                                <h1 class="text-uppercase text-dark">sale</h1>
                                <h2 class="sub text-dark">Extra <span>30 %</span> off</h2>
                                <h3 class="text-uppercase text-muted "> when you buy 2 or more...</h3>
                                <a href="sale.blade.php" class="btn btn-outline-dark btn-lg-lg btn-sm btn-xl-lg" >
                                    <span class="text-uppercase"> shop now</span>
                                </a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="{{asset('assets/images/slide2.jpg')}}" alt="Second slide">
                            <div class="pb-5 carousel-caption caption1 ">
                                <h1 class="text-uppercase text-dark">sale</h1>
                                <h2 class="sub text-dark ">Extra <span> 30 %</span> off</h2>
                                <h3 class="text-uppercase text-muted"> when you buy 2 or more...</h3>
                                <a href="sale.blade.php" class="btn btn-outline-light btn-lg-lg btn-sm btn-xl-lg" >
                                    <span class="text-uppercase"> shop now</span>
                                </a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="{{asset('assets/images/slide3.jpg')}}" alt="Third slide">
                            <div class="pb-5 carousel-caption caption1 ">
                                <h1 class="text-uppercase">sale</h1>
                                <h2 class="sub ">Extra <span> 30 %</span> off</h2>
                                <h3 class="text-uppercase text-muted mb-lg-5"> when you buy 2 or more...</h3>
                                <a href="sale.blade.php" class="btn btn-outline-light btn-lg-lg btn-sm btn-xl-lg" >
                                    <span class="text-uppercase"> shop now</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </section>
        <section id="grid" class="row">
            <div class="col-lg-10 offset-1">
                <div class="row">
                    <div class="col-6">
                        <img src="{{asset('assets/images/grid1.jpg')}}" class="img-fluid mt-5" alt="">
                        <img src="{{asset('assets/images/grid2.jpg')}}" class="img-fluid mt-5" alt="">
                    </div>
                    <div class="col-6">
                        <img src="{{asset('assets/images/grid3.jpg')}}" class="img-fluid mt-5" alt="">
                        <img src="{{asset('assets/images/grid4.jpg')}}" class="img-fluid mt-5" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section id="newarrival" class="row">
            <div class="col-lg-10 offset-lg-1">
                <h2 class="text-uppercase text-dark mt-5 pt-5 text-center"> New arrivals</h2>
                <div class="text-center mt-lg-4">
                    <a href="#" class="btn btn-outline-dark " role="button" aria-pressed="true"><i class="fas fa-arrow-left"></i></a>
                    <a href="#" class="btn btn-outline-dark active" role="button" aria-pressed="true"><i
                            class="fas fa-arrow-right"></i></a>
                </div>
                <div class="justify-content-center mt-4 mb-4">
                    <ul class="nav nav-pills justify-content-center" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active text-uppercase mb-3" id="pills-featured-tab" data-toggle="pill"
                               href="#pills-featured"
                               role="tab" aria-controls="pills-featured" aria-selected="true">featured</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-uppercase mb-3" id="pills-toprated-tab" data-toggle="pill"
                               href="#pills-toprated"
                               role="tab" aria-controls="pills-toprated" aria-selected="false">top rated</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-uppercase mb-3" id="pills-latest-tab" data-toggle="pill"
                               href="#pills-latest"
                               role="tab" aria-controls="pills-latest" aria-selected="false">Latest</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-featured" role="tabpanel"
                             aria-labelledby="pills-featured-tab">

                            <div class="d-flex row">
                                <div class="col-6 col-lg-3">
                                    <div class="card mr-lg-3 cont mb-3">
                                        <div class="hartje">
                                            <img class="card-img-top image border" src="{{asset('assets/images/facegrid1.jpg')}}"
                                                 alt="Card image cap">
                                            <div class="middle d-flex ">
                                                <a href="shoppingcart.blade.php" class="btn btn-add flex-fill" role="button" >
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
                                <div class="col-6 col-lg-3">
                                    <div class="card mr-lg-3 cont mb-3">
                                        <div class="hartje">
                                            <img class="card-img-top image border" src="{{asset('assets/images/facegrid1.jpg')}}"
                                                 alt="Card image cap">
                                            <div class="middle d-flex ">
                                                <a href="shoppingcart.blade.php" class="btn btn-add flex-fill" role="button" >
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
                                <div class="col-6 col-lg-3">
                                    <div class="card mr-lg-3 cont mb-3">
                                        <div class="hartje">
                                            <img class="card-img-top image border" src="{{asset('assets/images/facegrid1.jpg')}}"
                                                 alt="Card image cap">
                                            <div class="middle d-flex ">
                                                <a href="shoppingcart.blade.php" class="btn btn-add flex-fill" role="button" >
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
                                <div class="col-6 col-lg-3">
                                    <div class="card mr-lg-3 cont mb-3">
                                        <div class="hartje">
                                            <img class="card-img-top image border" src="{{asset('assets/images/facegrid1.jpg')}}"
                                                 alt="Card image cap">
                                            <div class="middle d-flex ">
                                                <a href="shoppingcart.blade.php" class="btn btn-add flex-fill" role="button" >
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
                            <div class="d-flex row">
                                <div class="col-6 col-lg-3">
                                    <div class="card mr-lg-3 cont mb-3">
                                        <div class="hartje">
                                            <img class="card-img-top image border" src="{{asset('assets/images/grid1.jpg')}}"
                                                 alt="Card image cap">
                                            <div class="middle d-flex ">
                                                <a href="shoppingcart.blade.php" class="btn btn-add flex-fill" role="button" >
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
                                <div class="col-6 col-lg-3">
                                    <div class="card mr-lg-3 cont mb-3">
                                        <div class="hartje">
                                            <img class="card-img-top image border" src="{{asset('assets/images/grid1.jpg')}}"
                                                 alt="Card image cap">
                                            <div class="middle d-flex ">
                                                <a href="shoppingcart.blade.php" class="btn btn-add flex-fill" role="button" >
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
                                <div class="col-6 col-lg-3">
                                    <div class="card mr-lg-3 cont mb-3">
                                        <div class="hartje">
                                            <img class="card-img-top image border" src="{{asset('assets/images/grid1
											.jpg')}}"
                                                 alt="Card image cap">
                                            <div class="middle d-flex ">
                                                <a href="shoppingcart.blade.php" class="btn btn-add flex-fill" role="button" >
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
                                <div class="col-6 col-lg-3">
                                    <div class="card mr-lg-3 cont mb-3">
                                        <div class="hartje">
                                            <img class="card-img-top image border" src="{{asset('assets/images/grid1.jpg')}}"
                                                 alt="Card image cap">
                                            <div class="middle d-flex ">
                                                <a href="shoppingcart.blade.php" class="btn btn-add flex-fill" role="button" >
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
                        </div>
                        <div class="tab-pane fade" id="pills-toprated" role="tabpanel"
                             aria-labelledby="pills-toprated-tab">

                            <div class="d-flex row">
                                <div class="col-6 col-lg-3">
                                    <div class="card mr-lg-3 cont mb-3">
                                        <div class="hartje">
                                            <img class="card-img-top image border" src="{{asset('assets/images/grid1.jpg')}}"
                                                 alt="Card image cap">
                                            <div class="middle d-flex ">
                                                <a href="shoppingcart.blade.php" class="btn btn-add flex-fill" role="button" >
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
                                <div class="col-6 col-lg-3">
                                    <div class="card mr-lg-3 cont mb-3">
                                        <div class="hartje">
                                            <img class="card-img-top image border" src="{{asset('assets/images/grid1.jpg')}}"
                                                 alt="Card image cap">
                                            <div class="middle d-flex ">
                                                <a href="shoppingcart.blade.php" class="btn btn-add flex-fill" role="button" >
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
                                <div class="col-6 col-lg-3">
                                    <div class="card mr-lg-3 cont mb-3">
                                        <div class="hartje">
                                            <img class="card-img-top image border" src="{{asset('assets/images/grid1.jpg')}}"
                                                 alt="Card image cap">
                                            <div class="middle d-flex ">
                                                <a href="shoppingcart.blade.php" class="btn btn-add flex-fill" role="button" >
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
                                <div class="col-6 col-lg-3">
                                    <div class="card mr-lg-3 cont mb-3">
                                        <div class="hartje">
                                            <img class="card-img-top image border" src="{{asset('assets/images/grid1.jpg')}}"
                                                 alt="Card image cap">
                                            <div class="middle d-flex ">
                                                <a href="shoppingcart.blade.php" class="btn btn-add flex-fill" role="button" >
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
                            <div class="d-flex row">
                                <div class="col-6 col-lg-3">
                                    <div class="card mr-lg-3 cont mb-3">
                                        <div class="hartje">
                                            <img class="card-img-top image border" src="{{asset('assets/images/grid1.jpg')}}"
                                                 alt="Card image cap">
                                            <div class="middle d-flex ">
                                                <a href="shoppingcart.blade.php" class="btn btn-add flex-fill" role="button" >
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
                                <div class="col-6 col-lg-3">
                                    <div class="card mr-lg-3 cont mb-3">
                                        <div class="hartje">
                                            <img class="card-img-top image border" src="{{asset('assets/images/grid1.jpg')}}"
                                                 alt="Card image cap">
                                            <div class="middle d-flex ">
                                                <a href="shoppingcart.blade.php" class="btn btn-add flex-fill" role="button" >
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
                                <div class="col-6 col-lg-3">
                                    <div class="card mr-lg-3 cont mb-3">
                                        <div class="hartje">
                                            <img class="card-img-top image border" src="{{asset('assets/images/grid1.jpg')}}"
                                                 alt="Card image cap">
                                            <div class="middle d-flex ">
                                                <a href="shoppingcart.blade.php" class="btn btn-add flex-fill" role="button" >
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
                                <div class="col-6 col-lg-3">
                                    <div class="card mr-lg-3 cont mb-3">
                                        <div class="hartje">
                                            <img class="card-img-top image border" src="{{asset('assets/images/grid1.jpg')}}"
                                                 alt="Card image cap">
                                            <div class="middle d-flex ">
                                                <a href="shoppingcart.blade.php" class="btn btn-add flex-fill" role="button" >
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
                        </div>
                        <div class="tab-pane fade" id="pills-latest" role="tabpanel"
                             aria-labelledby="pills-latest-tab">

                            <div class="d-flex row">
                                <div class="col-6 col-lg-3">
                                    <div class="card mr-lg-3 cont mb-3">
                                        <div class="hartje">
                                            <img class="card-img-top image border" src="{{asset('assets/images/grid1.jpg')}}"
                                                 alt="Card image cap">
                                            <div class="middle d-flex ">
                                                <a href="shoppingcart.blade.php" class="btn btn-add flex-fill" role="button" >
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
                                <div class="col-6 col-lg-3">
                                    <div class="card mr-lg-3 cont mb-3">
                                        <div class="hartje">
                                            <img class="card-img-top image border" src="{{asset('assets/images/grid1.jpg')}}"
                                                 alt="Card image cap">
                                            <div class="middle d-flex ">
                                                <a href="shoppingcart.blade.php" class="btn btn-add flex-fill" role="button" >
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
                                <div class="col-6 col-lg-3">
                                    <div class="card mr-lg-3 cont mb-3">
                                        <div class="hartje">
                                            <img class="card-img-top image border" src="{{asset('assets/images/grid1.jpg')}}"
                                                 alt="Card image cap">
                                            <div class="middle d-flex ">
                                                <a href="shoppingcart.blade.php" class="btn btn-add flex-fill" role="button" >
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
                                <div class="col-6 col-lg-3">
                                    <div class="card mr-lg-3 cont mb-3">
                                        <div class="hartje">
                                            <img class="card-img-top image border" src="{{asset('assets/images/grid1.jpg')}}"
                                                 alt="Card image cap">
                                            <div class="middle d-flex ">
                                                <a href="shoppingcart.blade.php" class="btn btn-add flex-fill" role="button" >
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
                            <div class="d-flex row">
                                <div class="col-6 col-lg-3">
                                    <div class="card mr-lg-3 cont mb-3">
                                        <div class="hartje">
                                            <img class="card-img-top image border" src="{{asset('assets/images/grid1.jpg')}}"
                                                 alt="Card image cap">
                                            <div class="middle d-flex ">
                                                <a href="shoppingcart.blade.php" class="btn btn-add flex-fill" role="button" >
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
                                <div class="col-6 col-lg-3">
                                    <div class="card mr-lg-3 cont mb-3">
                                        <div class="hartje">
                                            <img class="card-img-top image border" src="{{asset('assets/images/grid1.jpg')}}"
                                                 alt="Card image cap">
                                            <div class="middle d-flex ">
                                                <a href="shoppingcart.blade.php" class="btn btn-add flex-fill" role="button" >
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
                                <div class="col-6 col-lg-3">
                                    <div class="card mr-lg-3 cont mb-3">
                                        <div class="hartje">
                                            <img class="card-img-top image border" src="{{asset('assets/images/grid1.jpg')}}"
                                                 alt="Card image cap">
                                            <div class="middle d-flex ">
                                                <a href="shoppingcart.blade.php" class="btn btn-add flex-fill" role="button" >
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
                                <div class="col-6 col-lg-3">
                                    <div class="card mr-lg-3 cont mb-3">
                                        <div class="hartje">
                                            <img class="card-img-top image border" src="{{asset('assets/images/grid1.jpg')}}"
                                                 alt="Card image cap">
                                            <div class="middle d-flex ">
                                                <a href="shoppingcart.blade.php" class="btn btn-add flex-fill" role="button" >
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
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="dealoftheday" class="row bg-dotd mt-5">
            <div class="col-12 pb-5 text-center">
                <h2 class="text-uppercase pt-5 mb-4 text-center text-white"> deal of the day</h2>
                <h3 class="text-uppercase text-center text-white"> elegant products many people waiting and crave</h3>
                <ul class="text-center" id="dagentot">
                    <li><span id="days"></span>days</li>
                    <li><span id="hours"></span>Hours</li>
                    <li><span id="minutes"></span>Minutes</li>
                    <li><span id="seconds"></span>Seconds</li>
                </ul>
                <h4 class="text-center"> €170.00 <span class="cross">€178.00</span> </h4>
                <h5 class="text-center"> Discount: 4% </h5>
                <a href="sale.blade.php" class="btn  mt-4 mb-4 btn-outline-light" >
                    <span class="text-uppercase"> shop now</span>
                </a>

            </div>
        </section>
        <section id="newtrending" class="row pb-4">
            <div class="col-10 offset-1">
                <h2 class="text-uppercase text-dark mt-5 mb-5 text-center"> New trending</h2>
                <div class="row text-center">
                    <div class="mx-auto mb-3 mb-md-4 mb-lg-5 mb-xl-1">
                        <img src="{{asset('assets/images/newtrending1.jpg')}}" class="img-fluid" alt="">
                        <h3> Product title</h3>
                        <h4> €12 </h4>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                    </div>
                    <div class="mx-auto  mb-3 mb-md-4 mb-lg-5 mb-xl-1">
                        <img src="{{asset('assets/images/newtrending2.jpg')}}" class="img-fluid" alt="">
                        <h3> Product title</h3>
                        <h4> €21 </h4>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div>
                    <div class="mx-auto  mb-3 mb-md-4 mb-lg-5 mb-xl-1">
                        <img src="{{asset('assets/images/newtrending3.jpg')}}" class="img-fluid" alt="">
                        <h3> Product title</h3>
                        <h4> €27 </h4>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                    </div>

                    <div class="mx-auto  mb-3 mb-md-4 mb-lg-5 mb-xl-1">
                        <img src="{{asset('assets/images/newtrending4.jpg')}}" class="img-fluid" alt="">
                        <h3> Product title</h3>
                        <h4> €35 </h4>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div>

                    <div class="mx-auto  mb-3 mb-md-4 mb-lg-5 mb-xl-1">
                        <img src="{{asset('assets/images/newtrending5.jpg')}}" class="img-fluid"  alt="">
                        <h3> Product title</h3>
                        <h4> €54 </h4>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div>
                </div>
            </div>
        </section>
        @include('includes.informationbanner')
        <section id="newsandblogs" class="row">
            <div class="col-10 offset-1 mb-1">
                <h2 class="text-uppercase text-dark mt-5 mb-5 text-center"> News & blogs</h2>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card mb-4 shadow-sm h-100">
                            <img class="bd-placeholder-img card-img-top img-fluid" src="{{asset
							('assets/images/newsandblogs1.jpg')}}" alt="">
                            <div class="card-body d-lg-flex">
                                <div class="d-flex flex-column  pr-3">
                                    <span class="fa-stack fa-2x mx-auto mb-2">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fas fa-camera fa-stack-1x text-white"></i>
                                    </span>
                                </div>
                                <div class="align-items-center pr-3">
                                    <h3 class="text-uppercase text-dark text-center text-lg-left">The week in parties</h3>
                                    <p class="card-text text-dark pt-4 text-justify"> New trend in town! Lorem ipsum dolor sit
                                                                                      amet,
                                                                                      consectetur adipisicing elit. Accusantium, aliquam autem eligendi et ex excepturi facilis fuga iste libero natus officiis placeat quo rem tempore ullam unde vel velit voluptatum.</p>
                                    <button class="btn btn-outline-dark">View post</button>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-lg-0 mt-2">
                        <div class="card mb-4 shadow-sm h-100">
                            <div class="card-img">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/bhZypXrRyRU" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>
                            <div class="card-body d-lg-flex">
                                <div class="d-flex flex-column pr-3">
                                    <span class="fa-stack fa-2x mx-auto mb-2">
                                        <i class="fas fa-circle fa-stack-2x "></i>
                                        <i class="fas fa-play fa-stack-1x text-white"></i>
                                    </span>
                                </div>
                                <div class="align-items-center pr-3">
                                    <h3 class="text-uppercase text-dark text-center text-lg-left">north pallet
                                                                                                  review</h3>
                                    <p class="card-text text-dark pt-4 text-justify"> Is it Jeffree Star approved? Lorem ipsum
                                                                                      dolor sit amet, consectetur adipisicing elit. Consequuntur deserunt hic id itaque qui. Dolorem doloribus, earum error expedita fugiat magnam modi perferendis quae quibusdam reprehenderit sequi tempore velit voluptate.</p>
                                    <button class="btn btn-outline-dark">View post</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @include('includes.tops')
        @include('includes.brands')
        @include('includes.subscribe')
    </div>
    <script type="text/javascript">
        const second = 1000,
            minute = second * 60,
            hour = minute * 60,
            day = hour * 24;

        let countDown = new Date('May 22, 2020 03:00:00').getTime(),
            x = setInterval(function() {

                let now = new Date().getTime(),
                    distance = countDown - now;

                document.getElementById('days').innerText = Math.floor(distance / (day)),
                    document.getElementById('hours').innerText = Math.floor((distance % (day)) / (hour)),
                    document.getElementById('minutes').innerText = Math.floor((distance % hour) / minute),
                    document.getElementById('seconds').innerText = Math.floor((distance % (minute)) / second);

                //do something later when date is reached
                //if (distance < 0) {
                //  clearInterval(x);
                //  'IT'S MY BIRTHDAY!;
                //}

            }, second);
    </script>
    @endsection
