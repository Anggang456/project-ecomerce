@extends('layouts.welcome')

@section('content')


@if ($message = Session::get('warning'))

<div class="alert alert-danger">
    <h5 style="text-align: center;">{{ $message }}</h5>
</div>
@endif
<header class="bg-primary-gradient">
    <div class="container pt-4 pt-xl-5">
        <div class="row pt-5">
            <div class="col-md-8 col-xl-6 text-center text-md-start mx-auto">
                <div class="text-center">
                    <p class="fw-bold text-success mb-2">Voted #1 Worldwide</p>
                    <h1 class="fw-bold">The best solution for you and your customers</h1>
                </div>
            </div>
            <div class="col-12 col-lg-10 mx-auto">
                <div class="position-relative" style="display: flex;flex-wrap: wrap;justify-content: flex-end;">
                    <div style="position: relative;flex: 0 0 45%;transform: translate3d(-15%, 35%, 0);"><img class="img-fluid rounded" data-bss-parallax data-bss-parallax-speed="0.8" src="{{ asset('img/products/3.jpg') }}"></div>
                    <div style="position: relative;flex: 0 0 45%;transform: translate3d(-5%, 20%, 0);"><img class="img-fluid rounded" data-bss-parallax data-bss-parallax-speed="0.4" src="{{ asset('img/products/2.jpg') }}"></div>
                    <div style="position: relative;flex: 0 0 60%;transform: translate3d(0, 0%, 0);"><img class="img-fluid rounded" data-bss-parallax data-bss-parallax-speed="0.25" src="{{ asset('img/products/1.jpg') }}"></div>
                </div>
            </div>
        </div>
    </div>
</header>
<section class="py-5">
    <div class="col-md-8 col-xl-6 text-center text-md-start mx-auto">
        <div class="text-center">
            <p class="fw-bold text-success mb-2">Categories</p>
            <h1 class="fw-bold">Today's best choice</h1>
        </div>
    </div>
    <div class="container text-center py-5">
            <button class="btn btn-product" style="border-radius: 5px;">
                <span>
                    <img class="img-icon" src="{{ asset('img/laptop-svgrepo-com.png') }}" width="50px" height="50px" alt="">
                </span>
                <br>
                <h6>Laptop</h6>
            </button>
            <button class="btn btn-product " style="border-radius: 5px;">
                <span>
                    <img class="img-icon" src="{{ asset('img/electricity-svgrepo-com.png') }}" width="50px" height="50px" alt="">
                </span>
                <br>
                <h6>Electronics</h6>
            </button>
            <button class="btn btn-product " style="border-radius: 5px;">
                <span>
                    <img class="img-icon" src="{{ asset('img/cellphone-electronics-handphone-svgrepo-com.png') }}" width="50px" height="50px" alt="">
                </span>
                <br>
                <h6>Handphone</h6>
            </button>
            <button class="btn btn-product " style="border-radius: 5px;">
                <span>
                    <img class="img-icon" src="{{ asset('img/suit-and-tie-svgrepo-com.png') }}" width="50px" height="50px" alt="">
                </span>
                <br>
                <h6>Fashion</h6>
            </button>
    </div>
</section>
<section>
    <div class="container bg-primary-gradient rounded py-5">
        <div class="row">
            <div class="col-md-8 col-xl-6 text-center mx-auto">
                <p class="fw-bold text-success mb-2">Our Services</p>
                <h3 class="fw-bold">What we can do for you</h3>
            </div>
            <div class="card-body mt-2">
                <div class="container" style="padding-right: 20px;">
                    <div class="row gx-2 gx-lg-3 row-cols-3 row-cols-xl-6 justify-content-center">
                        @foreach($data as $data)
                        <div class="col">
                            <div class="card-product shadow-lg rounded">
                                <img class="img-product card-img-top" src="{{ url($data->gambar) }}" height="240px" alt="Responsive Image" />
                                <div class="card-body">
                                    <div class="text-center">
                                        <h7>{{ $data->nama }}</h7>
                                        <br>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fw-bolder">Rp.{{ number_format ($data->harga) }}</span>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="text-center">
                                        <a class="stretched-link" style="border-radius: 5px;" href="{{ url('cart') }}/{{ $data->id }}"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
</section>
<section>
    <div class="container py-5">
        <div class="mx-auto" style="max-width: 900px;">
            <div class="row row-cols-1 row-cols-md-2 d-flex justify-content-center">
                <div class="col mb-4">
                    <div class="card bg-primary-light">
                        <div class="card-body text-center px-4 py-5 px-md-5">
                            <p class="fw-bold text-primary card-text mb-2">Transparent</p>
                            <h5 class="fw-bold card-title mb-3">Your payment will be processed to seller after you have receieved at good</h5><button class="btn btn-primary btn-sm" type="button">Learn more</button>
                        </div>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="card bg-secondary-light">
                        <div class="card-body text-center px-4 py-5 px-md-5">
                            <p class="fw-bold text-secondary card-text mb-2">Safety</p>
                            <h5 class="fw-bold card-title mb-3">Compare the reviews to various trusted online shops in the worldz</h5><button class="btn btn-secondary btn-sm" type="button">Learn more</button>
                        </div>
                    </div>
                </div>
                <div class="col mb-4">
                    <span>
                        
                    </span>
                    <div class="card bg-info-light">
                        <div class="card-body text-center px-4 py-5 px-md-5">
                            <p class="fw-bold text-info card-text mb-2">Trusted</p>
                            <h5 class="fw-bold card-title mb-3">Lorem ipsum dolor sit&nbsp;nullam et quis ad cras porttitor</h5><button class="btn btn-info btn-sm" type="button">Learn more</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection