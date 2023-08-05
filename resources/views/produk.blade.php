@extends('layouts.admin')
@section('content')
            <section>   
                <div class="container-fluid">
                    <h3 class="text-dark mb-4">Add Products</h3>
                    <div class="card shadow-lg">
                        <div class="card-header py-3">
                            <span class="text-primary m-0 fw-bold">Products</span>
                            <button class="border-0 bg-transparent" style="float: right;">
                                <a class="btn btn-outline-success" href="{{ route('produk.create') }}"><span>Tambah Data </span>
                                <i class="fa fa-plus"></i></a>
                            </button>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 text-nowrap">
                                    <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable"><label class="form-label">Show&nbsp;<select class="d-inline-block form-select form-select-sm">
                                                <option value="10" selected="">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select>&nbsp;</label></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="text-md-end dataTables_filter" id="dataTable_filter"><label class="form-label"><input type="search" class="form-control form-control-sm" aria-controls="dataTable" placeholder="Search"></label></div>
                                </div>
                            </div>
                            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                                <table class="table my-0" id="dataTable">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Jenis</th>
                                        <th>Nama</th>
                                        <th>Ukuran</th>
                                        <th>Stok(cm)</th>
                                        <th>Harga</th>
                                        <th>Gambar</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $barang)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $barang->jenis?? 'Jenis Batik Tidak Ditemukan' }}</td>
                                        <td>{{ $barang->nama?? 'Nama Batik Tidak Ditemukan' }}</td>
                                        <td>{{ $barang->ukuran ?? 'Ukuran Tidak Ditemukan' }}
                                            </td>
                                        <td>{{ $barang->stok ?? 'Jumlah Stok Tidak Ditemukan'}}</td>
                                        <td>Rp
                                            {{ number_format ($barang->harga) ?? 'Jumlah Harga Tidak Ditemukan'}}
                                        </td>
                                        <td><img src="{{ url($barang->gambar) }}" width='50' height='50' class="rounded-circle me-2" /></td>
                                        <td>
                                            <form action="{{ route('produk.destroy',$barang->id) }}" method="Post">
                                                <a class="btn btn-primary" href="{{ route('produk.edit',$barang->id) }}"><i class="fa fa-edit"></i> Edit</a>
                                                @csrf @method('DELETE')
                                                <button type="submit" class="btn btn-danger" onclick="return confirm('Anda Yakin?')"><i class="fa fa-trash"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-md-6 align-self-center">
                                    <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite">Showing 1 to 10 of 27</p>
                                </div>
                                <div class="col-md-6">
                                    <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                                        <ul class="pagination">
                                            <li class="page-item disabled"><a class="page-link" aria-label="Previous" href="#"><span aria-hidden="true">«</span></a></li>
                                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" aria-label="Next" href="#"><span aria-hidden="true">»</span></a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection