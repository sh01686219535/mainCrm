@extends('backEnd.dashboard.home.master')
@section('title')
    Add Items
@endsection
@push('css')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endpush

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12 col-md-12 col-lg-12 col-sm-12">
                        <div class="card">
                            <div class="card-head m-3">
                                <h2>Add New Item</h2>
                            </div>
                            <div class="card-body ">
                                <div class="main-body">
                                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                        <form action="{{ route('item.store') }}" method="post"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                    <div class="form-group">
                                                        <label for="name">Item Name</label>
                                                        <input type="text" class="form-control" id="name"
                                                            name="name">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                    <div class="form-group">
                                                        <label for="item_group">Item Group</label>
                                                        <select class="form-control" id="item_group" name="item_group">
                                                            <option value="">Select</option>
                                                            <option value="Product">Product</option>
                                                            <option value="Service">Service</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                    <div class="form-group">
                                                        <label for="customer_id">Description</label>
                                                        <textarea class="form-control" name="description" id="description" cols="30" rows="10"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                                <input type="submit" class="btn btn-outline-success" value="Save">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div><!-- /.col -->

                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
    </div>
@endsection

@push('js')
    {{-- Additional JavaScript if needed --}}
@endpush
