@extends('layouts.welcome')

@section('content')
<section>
    <div class="container px-4 px-lg-5 my-5" style="padding-top: 40px;">
        <div class="card bg-secondary-gradient shadow-lg">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div id="carousel-1" class="carousel slide" data-bs-ride="false">
                            <div class="carousel-inner" style="border-radius: 10px;">
                                <div class="carousel-item active"><img class="img-cart" src="{{ url($data->gambar)}}" alt="Responsive image" width="600" height="440" style="border-radius: 10px;" /></div>
                                <div class="carousel-item"><img class="img-cart" src="{{ url($data->gambar)}}" alt="Responsive image" width="600" height="440" style="border-radius: 10px;" /></div>
                                <div class="carousel-item"><img class="img-cart" src="{{ url($data->gambar)}}" alt="Responsive image" width="600" height="440" style="border-radius: 10px;" /></div>
                            </div>

                            <ol class="carousel-indicators">
                                <li class="active" data-bs-target="#carousel-1" data-bs-slide-to="0"></li>
                                <li data-bs-target="#carousel-1" data-bs-slide-to="1"></li>
                                <li data-bs-target="#carousel-1" data-bs-slide-to="2"></li>
                            </ol>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h1>{{ $data->nama }}</h1>
                        <h6 class="text-muted py-3">batik</h6>

                        <span style="font-weight: bold;font-size: 20px;">Rp. {{number_format($data->harga) }}</span>
                        <div class="ref-variant py-3"><label><span>Size </span>
                                <select class="ref-form-control ref-field-variants" name="variant-state" required>
                                    <option value="199976733_s">S</option>
                                    <option value="199976733_m">M</option>
                                    <option value="199976733_l">L</option>
                                </select>
                            </label>
                        </div>
                        <hr />
                        <p class="py-4" style="text-align: justify;">Lorem ipsum dolor sit amet. Est quis quod ab voluptas omnis et aperiam consequuntur ut dolorem dignissimos est illo omnis est facilis tempore?</p>
                        <h6 style="font-weight: bold">Quantity</h6>
                        <form method="post" action="{{ url('cart') }}/{{ $data->id ?? '' }}">
                            @csrf
                            <div class="row">
                                <div class="quantity buttons_added">
                                    <button type="button" class="minus btn-number" disabled="disabled" data-type="minus" data-field="jumlah_pesan">
                                        <i class="fa fa-minus"></i>
                                    </button>
                                    <input name="jumlah_pesan" class="input-text qty text input-number" value="1" min="1" max="5">
                                    <button type="button" class="plus btn-number" data-type="plus" data-field="jumlah_pesan">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                    <span class="text-muted"> stok sisa: {{ $data->stok }}</span>
                                </div>
                            </div>
                            <h6 class="text-muted py-3">max pembelian 5pcs</h6>
                            <button type="#" class="btn btn-outline-primary" style="border-radius: 5px;">
                                <i class="fa fa-plus" aria-hidden="true"></i>
                                cart
                            </button>
                            <button type="submit" class="btn btn-outline-success" style="border-radius: 5px;" onclick="return confirm('Anda Yakin?')">
                                checkout
                            </button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <section>
        <div class="container px-4 px-lg-5 my-5">
            <div class="card shadow-lg">
                <div class="card-body">

                    <div class="row">
                        <div class="card-body mt-2">
                            
                                <div class="row gx-2 gx-lg-3 row-cols-3 row-cols-xl-6 justify-content-center">
                                    @foreach($item as $data)
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
                    </div>
                </div>
    </section>
    @endsection