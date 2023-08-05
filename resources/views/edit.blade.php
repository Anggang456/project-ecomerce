@extends('layouts.admin')

@section('content')

<section class="py-3">
    <div class="container-fluid">
        <h3 class="text-dark mb-4">Edit Product</h3>
        <div class="card shadow-lg">
            <div class="card-header py-3">
                <a href="{{ url('produk') }}" class="btn btn-outline-warning"><i class="fa fa-arrow-left"></i> back</a>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <form action="{{ route('produk.update', $produk->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf @method('PUT')
                            <div class="form-group">
                                <label class="font-weight-bold">Input Category :</label>
                                <select id="jenis" name="jenis" class="form-control" value="{{ old('jenis', $produk->jenis) }}">
                                    <option value="Electronics">Electronics</option>
                                    <option value="Fashion">Fashion</option>
                                    <option value="Handpone">Handpone</option>
                                    <option value="Laptop">Laptop</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">New Name :</label>
                                <input name="nama" type="text" class="form-control" placeholder="Input New Name" value="{{ old('nama', $produk->nama) }}">
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Size :</label>
                                <select id="ukuran" class="form-control" value="{{ old('ukuran', $produk->ukuran) }}">
                                    <option value="S">S</option>
                                    <option value="M">M</option>
                                    <option value="XL">XL</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Stock :</label>
                                <input name="stok" type="number" class="form-control" placeholder="Input Stock" value="{{ old('stok', $produk->stok) }}">
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Price :</label>
                                <input name="harga" type="number" class="form-control" placeholder="Input Price" value="{{ old('harga', $produk->harga) }}">
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Masukkan Gambar Batik</label>
                                <br>
                                <tr>
                                    <td>
                                        <input type="file" name="gambar" id="gambar" class="form-control">
                                        <hr>
                                        <img src="{{ url($produk->gambar) }}" class="img-thumbnail" style="width:100px">
                                        <hr>
                                    </td>
                                </tr>
                            </div>
                            <button type="submit" class="btn btn-secondary" onclick="return confirm('sure ?')">CONFIRM</button>
                            <button type="reset" class="btn btn-outline-info"><i class="fa fa-refresh"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    @endsection