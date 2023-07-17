@extends('layouts.header')

@section('content')
<div class="container mt-2">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>

            @endif
            <div class="col-md-13" style="padding-top: 80px;">
                <div class="card shadow-lg">
                    <div class="card-body bg-info">
                        <h3 class="text-center align-miidle text-white">{{ $pesanan->status }} Order</h3>
                        <span class="text-white">Lorem ipsum dolor sit amet. Ut rerum Quis sit voluptatem dignissimos aut incidunt rerum qui voluptatibus Quis vel omnis quas aut dolores nemo aut sunt provident. Ut quos dicta qui minima perferendis sed quos aperiam ut veritatis nemo aut incidunt voluptates est labore obcaecati.</span>
                        <br>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-12  mb-4 mb-lg-0">
                    <div class="card shadow-lg">
                        <h5 class="card-header">Detail Order</h5>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Jumlah</th>
                                            <th>Harga</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($pesanan_details as $pesanan_detail)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $pesanan_detail->produk->nama }}</td>
                                            <td>{{ $pesanan_detail->jumlah }} Produk</td>
                                            <td>Rp. {{ number_format($pesanan_detail->produk->harga) }}</td>
                                            <td>Rp. {{ number_format($pesanan_detail->jumlah_harga) }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            @endsection