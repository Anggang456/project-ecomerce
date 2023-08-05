@extends('layouts.admin')
@section('content')
            <section>   
                <div class="container-fluid">
                    <h3 class="text-dark mb-4">Brand</h3>
                    <div class="card shadow-lg">
                        <div class="card-header py-3">
                            <span class="text-primary m-0 fw-bold">Brand Edit</span>
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
                                        <th>Parallax1</th>
                                        <th>Parallax2</th>
                                        <th>Parallax3</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($parallax as $parallax)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td><img src="{{ url($parallax->parallax1) }}" width='50' height='50' class="rounded-circle me-2" /></td>
                                        <td><img src="{{ url($parallax->parallax2) }}" width='50' height='50' class="rounded-circle me-2" /></td>
                                        <td><img src="{{ url($parallax->parallax3) }}" width='50' height='50' class="rounded-circle me-2" /></td>
                                        <td>
                                            <form action="{{ route('parallax.destroy',$parallax->id) }}" method="Post">
                                                <a class="btn btn-primary" href="{{ route('parallax.edit',$parallax->id) }}"><i class="fa fa-edit"></i> Edit</a>
                                                @csrf @method('DELETE')
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                </table>
                            </div>
                            <div class="row">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection