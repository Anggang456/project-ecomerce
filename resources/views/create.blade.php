@extends('layouts.admin')

@section('content')
@if(session('status'))
<div class="alert alert-success mb-1 mt-1">
    {{ session('status') }}
</div>
@endif
<section class="py-4">
            <form action="{{ route('produk.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="container-fluid">
                <h3 class="text-dark mb-4">Add Products</h3>
                    <div class="card shadow-lg">
                        <div class="card-header py-3">
                            <a href="{{ url('produk') }}" class="btn btn-outline-warning"><i class="fa fa-arrow-left"></i> back</a>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Category:</strong>
                                        <select name="jenis" class="form-control" value="jenis">
                                            <option value="Electronics">Electronics</option>
                                            <option value="Fashion">Fashion</option>
                                            <option value="Handpone">Handpone</option>
                                            <option value="Laptop">Laptop</option>
                                        </select>
                                        @error('jenis')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Name Product :</strong>
                                        <input type="text" name="nama" class="form-control" placeholder="Name Product">
                                        @error('nama')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group" style="width: 50px;">
                                        <strong>Size :</strong>
                                        <select name="ukuran" class="form-control" value="ukuran">
                                            <option value="S">S</option>
                                            <option value="M">M</option>
                                            <option value="XL">XL</option>
                                        </select>
                                        @error('ukuran')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Stock :</strong>
                                        <input type="number" name="stok" class="form-control" placeholder="Input Stock">
                                        @error('stok')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Price :</strong>
                                        <input type="number" name="harga" class="form-control" placeholder="Input Price">
                                        @error('nama')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Image :</strong>
                                    </div>
                                    <input type="file" name="gambar" class="form-control" placeholder="Input Image">
                                    @error('file')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                    <br>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <button type="submit" class="btn btn-primary ml-3" onclick="return confirm('Sure?')">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</section>
@endsection