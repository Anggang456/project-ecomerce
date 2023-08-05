@extends('layouts.admin')

@section('content')
@if(session('status'))
<div class="alert alert-success mb-1 mt-1">
    {{ session('status') }}
</div>
@endif
<section class="py-4">
            <form action="{{ route('parallax.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="container-fluid">
                <h3 class="text-dark mb-4">Add Products</h3>
                    <div class="card shadow-lg">
                        <div class="card-header py-3">
                            <a href="{{ url('parallax') }}" class="btn btn-outline-warning"><i class="fa fa-arrow-left"></i> back</a>
                        </div>
                        <div class="card-body">
                            <div class="row">

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Image :</strong>
                                    </div>
                                    <input type="file" name="parallax1" class="form-control" placeholder="Input Image">
                                    <br>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Image :</strong>
                                    </div>
                                    <input type="file" name="parallax2" class="form-control" placeholder="Input Image">
                                    <br>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Image :</strong>
                                    </div>
                                    <input type="file" name="parallax3" class="form-control" placeholder="Input Image">
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