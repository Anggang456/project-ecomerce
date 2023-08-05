@extends('layouts.header')

@section('content')

<section class="py-3">
    <div class="container">
        <div class="card">
            <div class="card-body shadow-lg rounded">
                <div id="TableSorterCard" class="card">
                    <div class="row">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table id="ipi-table" class="table table-striped table tablesorter rounded">
                                    <thead class="thead-dark">
                                        <tr>
                                            <td><b>Order</b></td>
                                            <td><b>date</b></td>
                                            <td><b>status</b></td>
                                            <td><b>Total</b></td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($pesanan as $pesanan)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $pesanan->tanggal ?? '' }}</td>
                                            <td>{{ $pesanan->status }}</td>
                                            <td>Rp. {{ number_format($pesanan->jumlah_harga) }}</td>
                                            <td><a class="fa fa-eye animate__animated animate__tada" href="{{ url('history') }}/{{ $pesanan->id }}"></a></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection