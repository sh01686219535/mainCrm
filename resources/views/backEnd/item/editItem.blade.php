@extends('backEnd.dashboard.home.master')
@section('title')
    Edit Item
@endsection
@push('css')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endpush

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <!-- /.row -->
                <div class="row mb-2">
                    <!-- /.col -->
                    <div class="col-sm-12 col-md-12 col-lg-12 col-sm-12">
                        <div class="card">
                            <div class="card-head main-body m-3">
                                <h1>Item Update</h1>
                                <a class="btn btn-primary" href="{{ route('item.index') }}"><i class="fa fa-list"></i>
                                    Item
                                    List</a>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body ">
                                <div class="main-body">
                                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                        <form action="{{ route('item.update', $item->id) }}" method="post"
                                            enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <!-- /.row -->
                                            <div class="row">
                                                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                    <div class="form-group">
                                                        <label for="name">Item Name</label>
                                                        <input type="text" value="{{ $item->name }}"
                                                            class="form-control" id="name" name="name">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                    <div class="form-group">
                                                        <label for="item_group">Item Group</label>
                                                        <select class="form-control" id="item_group" name="item_group">
                                                            <option value="">Select</option>
                                                            <option value="Product"
                                                                {{ $item->item_group == 'Product' ? 'selected' : '' }}>
                                                                Product</option>
                                                            <option value="Service"
                                                                {{ $item->item_group == 'Product' ? 'Task_Hour' : '' }}>
                                                                Service</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                    <div class="form-group">
                                                        <label for="customer_id">Description</label>
                                                        <textarea class="form-control" name="description" id="description" cols="30" rows="10">{{ $item->description }}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.row -->
                                            <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                                <input type="submit" class="btn btn-outline-success" value="Update">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- /.col -->

                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
    </div>
@endsection

@push('js')
    {{-- Additional JavaScript if needed --}}
@endpush
