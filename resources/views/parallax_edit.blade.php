@extends('layouts.admin')

@section('content')

<section class="py-3">
    <div class="container-fluid">
        <h3 class="text-dark mb-4">Edit Product</h3>
        <div class="card shadow-lg">
            <div class="card-header py-3">
                <a href="{{ url('parallax') }}" class="btn btn-outline-warning"><i class="fa fa-arrow-left"></i> back</a>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <form action="{{ route('parallax.update', $parallax->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf @method('PUT')
                            <div class="form-group">
                                <label class="font-weight-bold">Input Image Parallax1</label>
                                <br>
                                <tr>
                                    <td>
                                        <input type="file" name="parallax1" id="parallax1" class="form-control">
                                        <hr>
                                        <img src="{{ url($parallax->parallax1) }}" class="img-thumbnail" style="width:100px">
                                        <hr>
                                    </td>
                                </tr>
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Input Image Parallax2</label>
                                <br>
                                <tr>
                                    <td>
                                        <input type="file" name="parallax2" id="parallax2" class="form-control">
                                        <hr>
                                        <img src="{{ url($parallax->parallax2) }}" class="img-thumbnail" style="width:100px">
                                        <hr>
                                    </td>
                                </tr>
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Input Image Parallax3</label>
                                <br>
                                <tr>
                                    <td>
                                        <input type="file" name="parallax3" id="parallax3" class="form-control">
                                        <hr>
                                        <img src="{{ url($parallax->parallax3) }}" class="img-thumbnail" style="width:100px">
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