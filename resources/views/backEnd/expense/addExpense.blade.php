@extends('backEnd.dashboard.home.master')
@section('title')
    Add Expense
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
                            <div class="card-head">
                                <h2>Add New Expense</h2>
                            </div>
                            <div class="card-body ">
                                <div class="main-body">
                                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                        <form action="{{ route('expense.store') }}" method="post"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                    <div class="form-group">
                                                        <label for="customer_id">Customer</label>
                                                        <select class="form-control" id="customer_id" name="customer_id">
                                                            <option value="">Select</option>
                                                            @foreach ($customer as $item)
                                                                <option value="{{ $item->id }}">{{ $item->name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                    <div class="form-group">
                                                        <label for="category_id">Category</label>
                                                        <select class="form-control" id="category_id" name="category_id">
                                                            <option value="">Select</option>
                                                            @foreach ($category as $item)
                                                                <option value="{{ $item->id }}">{{ $item->title }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                    <div class="form-group">
                                                        <label for="name">Name</label>
                                                        <input type="text" class="form-control" id="name"
                                                            name="name">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                    <div class="form-group">
                                                        <label for="amount">Amount</label>
                                                        <input type="number" class="form-control" id="amount"
                                                            name="amount">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                    <div class="form-group">
                                                        <label for="date">Date</label>
                                                        <input type="date" class="form-control" id="date"
                                                            name="date">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                    <div class="form-group">
                                                        <label for="currency">Currency</label>
                                                        <select class="form-control" id="currency" name="currency">
                                                            <option value="">Select</option>
                                                            <option value="USD">USD</option>
                                                            <option value="BDT">BDT</option>
                                                            <option value="AUD">AUD</option>
                                                            <option value="GBP">GBP</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                    <div class="form-group">
                                                        <label for="file">Attach File</label>
                                                        <input type="file" class="form-control" id="file"
                                                            name="file">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                    <div class="form-group">
                                                        <label for="payment_mode">payment_mode</label>
                                                        <select class="form-control" id="payment_mode" name="payment_mode">
                                                            <option value="">Select</option>
                                                            <option value="Bank">Bank</option>
                                                            <option value="Online Payment">Online Payment</option>
                                                            <option value="Cash">Cash</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                                    <div class="form-group">
                                                        <label for="note">note</label>
                                                        <textarea class="form-control" name="note" id="note"></textarea>
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
