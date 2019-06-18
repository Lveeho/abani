<section id="brands" class="row">
    <div class="col-10 offset-1 my-4">
        <div id="carouselExampleSlidesOnly" class="carousel slide"
             data-ride="carousel">
            @php($brands=\App\Brand::all())
            <div class="carousel-inner">

                @foreach($brands as $brand)
                <div class="carousel-item {{$loop->first? 'active':''}}">
                    <div class="d-flex">
                        {{--src="{{url('uploads/brands/'.$brand->photo)}}"--}}
                        <img src="{{$brand->photo}}" class="d-block w-100 px-3 pb-lg-0 pb-3"
                             alt="...">{{--foto1--}}
                        <img src="{{$brand->photo}}" class="d-block w-100 px-3 pb-lg-0 pb-3"
                             alt="...">{{--foto1--}}
                        <img src="{{$brand->photo}}" class="d-block w-100 px-3 pb-lg-0 pb-3"
                             alt="...">{{--foto1--}}
                        <img src="{{$brand->photo}}" class="d-block w-100 px-3 pb-lg-0 pb-3"
                             alt="...">{{--foto1--}}

                    </div>
                </div>
                @endforeach
                {{--<div class="carousel-item">
                    <div class="d-flex">
                        <img src="{{asset('assets/images/brands.png')}}" class="d-block w-100 pr-5 pb-lg-0 pb-3" alt="...">
                        <img src="{{asset('assets/images/brands.png')}}" class="d-block w-100 pr-5 pb-lg-0 pb-3" alt="...">
                        <img src="{{asset('assets/images/brands.png')}}" class="d-block w-100 pr-5 pb-lg-0 pb-3" alt="...">
                        <img src="{{asset('assets/images/brands.png')}}" class="d-block w-100 pr-5 pb-lg-0 pb-3" alt="...">
                        <img src="{{asset('assets/images/brands.png')}}" class="d-block w-100 pr-5 pb-lg-0 pb-3" alt="...">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-flex">
                        <img src="{{asset('assets/images/brands.png')}}" class="d-block w-100 pr-5 pb-lg-0 pb-3" alt="...">
                        <img src="{{asset('assets/images/brands.png')}}" class="d-block w-100 pr-5 pb-lg-0 pb-3" alt="...">
                        <img src="{{asset('assets/images/brands.png')}}" class="d-block w-100 pr-5 pb-lg-0 pb-3" alt="...">
                        <img src="{{asset('assets/images/brands.png')}}" class="d-block w-100 pr-5 pb-lg-0 pb-3" alt="...">
                        <img src="{{asset('assets/images/brands.png')}}" class="d-block w-100 pr-5 pb-lg-0 pb-3" alt="...">
                    </div>
                </div>--}}
            </div>
        </div>
    </div>
</section>
