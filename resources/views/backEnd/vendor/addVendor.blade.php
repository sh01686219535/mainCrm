@extends('backEnd.dashboard.home.master')
@section('title')
    Vendor Create
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
                            <div class="card-head main-body m-3">
                                <h1>Vendor Create</h1>
                                <a class="btn btn-primary" href="{{ route('vendor.index') }}"><i
                                        class="fa fa-plus"></i>Vendor List</a>
                            </div>
                            <div class="card-body ">
                                <div class="main-body">
                                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                        @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                        <form action="{{ route('vendor.store') }}" method="post"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-4 col-xl-4 col-lg-4 col-sm-4">
                                                    <div class="form-group">
                                                        <label for="name">Full Name</label>
                                                        <input type="text" id="name" name="name"
                                                            class="form-control" placeholder="Enter Full Name">
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-xl-4 col-lg-4 col-sm-4">
                                                    <div class="form-group">
                                                        <label for="phone">Phone Number</label>
                                                        <input type="number" id="phone" name="phone"
                                                            class="form-control" placeholder="Enter Phone Number">
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-xl-4 col-lg-4 col-sm-4">
                                                    <div class="form-group">
                                                        <label for="email">Email Address</label>
                                                        <input type="email" id="email" name="email"
                                                            class="form-control" placeholder="Enter Email Address">
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-xl-4 col-lg-4 col-sm-4">
                                                    <div class="form-group">
                                                        <label for="position ">Position</label>
                                                        <input type="text" id="position" name="position"
                                                            class="form-control" placeholder="Enter Position">
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-xl-4 col-lg-4 col-sm-4">
                                                    <div class="form-group">
                                                        <label for="street ">Street</label>
                                                        <input type="text" id="street" name="street"
                                                            class="form-control" placeholder="Enter Street">
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-xl-4 col-lg-4 col-sm-4">
                                                    <div class="form-group">
                                                        <label for="city ">City</label>
                                                        <input type="text" id="city" name="city"
                                                            class="form-control" placeholder="Enter City">
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-xl-4 col-lg-4 col-sm-4">
                                                    <div class="form-group">
                                                        <label for="state">State</label>
                                                        <input type="text" id="state" name="state"
                                                            class="form-control" placeholder="Enter State">
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-xl-4 col-lg-4 col-sm-4">
                                                    <div class="form-group">
                                                        <label for="zipCode ">Zip Code</label>
                                                        <input type="number" id="zipCode" name="zipCode"
                                                            class="form-control" placeholder="Enter Zip Code">
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-xl-4 col-lg-4 col-sm-4">
                                                    <div class="form-group">
                                                        <label for="country">Country</label>
                                                        <input type="text" id="country" name="country"
                                                            class="form-control" placeholder="Enter Country">
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-xl-4 col-lg-4 col-sm-4">
                                                    <div class="form-group">
                                                        <label for="notes">Notes</label>
                                                        <textarea name="notes" id="notes" class="form-control" placeholder="Enter Notes"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Submit</button>

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
