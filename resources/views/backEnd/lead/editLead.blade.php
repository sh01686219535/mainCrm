@extends('backEnd.dashboard.home.master')

@section('title', 'Edit Lead')

@push('css')
    <style>
        .form-section.current {
            display: inherit;
        }

        .dummy {
            color: rgb(0, 0, 0);
        }
    </style>
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
                                <h1>Lead Update</h1>
                                <a class="btn btn-primary" href="{{ route('lead.index') }}"><i class="fa fa-list"></i> Lead
                                    List</a>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body ">
                                <div class="main-body">
                                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                        <form action="{{ route('lead.update', $lead->id) }}" method="post"
                                            class="form-demo">
                                            @csrf
                                            @method('PUT')
                                            <!-- /.row -->
                                            <div class="row">
                                                <div class="col-xl-4 col-md-4 col-sm-4 col-lg-4">
                                                    <div class="form-group">
                                                        <label for="name">Full Name</label>
                                                        <input type="text" value="{{ $lead->name }}"
                                                            class="form-control" id="name" name="name">
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-md-4 col-sm-4 col-lg-4">
                                                    <div class="form-group">
                                                        <label for="email">Email</label>
                                                        <input type="email" value="{{ $lead->email }}"
                                                            class="form-control" id="email" name="email">
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-md-4 col-sm-4 col-lg-4">
                                                    <div class="form-group">
                                                        <label for="phone">Phone Number</label>
                                                        <input type="number" value="{{ $lead->phone }}"
                                                            class="form-control" id="phone" name="phone">
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-md-4 col-sm-4 col-lg-4">
                                                    <div class="form-group">
                                                        <label for="address">Address</label>
                                                        <textarea class="form-control" name="address" id="address" cols="" rows="">{{ $lead->address }}</textarea>
                                                    </div>
                                                </div>
                                                <!-- Additional form rows can be added here -->
                                                <div class="col-xl-4 col-md-4 col-sm-4 col-lg-4">
                                                    <div class="form-group">
                                                        <label for="status">Status</label>
                                                        <select class="form-control" name="status" id="status">
                                                            <option value="">Select</option>
                                                            <option value="Contacted"
                                                                {{ $lead->status == 'Contacted' ? 'selected' : '' }}>
                                                                Contacted</option>
                                                            <option value="Customer"
                                                                {{ $lead->status == 'Customer' ? 'selected' : '' }}>Customer
                                                            </option>
                                                            <option value="New"
                                                                {{ $lead->status == 'New' ? 'selected' : '' }}>New</option>
                                                            <option value="Proposal_Sent"
                                                                {{ $lead->status == 'Proposal_Sent' ? 'selected' : '' }}>
                                                                Proposal sent</option>
                                                            <option value="Qualified"
                                                                {{ $lead->status == 'Qualified' ? 'selected' : '' }}>
                                                                Qualified</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-md-4 col-sm-4 col-lg-4">
                                                    <div class="form-group">
                                                        <label for="source">Source</label>
                                                        <select class="form-control" name="source" id="source">
                                                            <option value="">Select</option>
                                                            <option value="Facebook"
                                                                {{ $lead->source == 'Facebook' ? 'selected' : '' }}>
                                                                Facebook</option>
                                                            <option value="Twitter"
                                                                {{ $lead->source == 'Twitter' ? 'selected' : '' }}>Twitter
                                                            </option>
                                                            <option value="Google"
                                                                {{ $lead->source == 'Google' ? 'selected' : '' }}>Google
                                                            </option>
                                                            <option value="Personal"
                                                                {{ $lead->source == 'Personal' ? 'selected' : '' }}>
                                                                Personal</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-md-4 col-sm-4 col-lg-4">
                                                    <div class="form-group">
                                                        <label for="website">Website</label>
                                                        <input type="text" value="{{ $lead->website }}"
                                                            class="form-control" id="website" name="website">
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-md-4 col-sm-4 col-lg-4">
                                                    <div class="form-group">
                                                        <label for="description">Description</label>
                                                        <textarea class="form-control" name="description" id="description" cols="" rows="">{{ $lead->description }}</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-md-4 col-sm-4 col-lg-4">
                                                    <div class="form-group">
                                                        <label for="city">City</label>
                                                        <input type="text" value="{{ $lead->city }}"
                                                            class="form-control" id="city" name="city">
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-md-4 col-sm-4 col-lg-4">
                                                    <div class="form-group">
                                                        <label for="state">State</label>
                                                        <input type="text" value="{{ $lead->state }}"
                                                            class="form-control" id="state" name="state">
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-md-4 col-sm-4 col-lg-4">
                                                    <div class="form-group">
                                                        <label for="company">Company Name</label>
                                                        <input type="text" value="{{ $lead->company }}"
                                                            class="form-control" id="company" name="company">
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-md-4 col-sm-4 col-lg-4">
                                                    <div class="form-group">
                                                        <label for="position">Position</label>
                                                        <input type="text" value="{{ $lead->position }}"
                                                            class="form-control" name="position" id="position">
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-md-4 col-sm-4 col-lg-4">
                                                    <div class="form-group">
                                                        <label for="zip_code">Zip Code</label>
                                                        <input type="text" value="{{ $lead->zip_code }}"
                                                            class="form-control" id="zip_code" name="zip_code">
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-md-4 col-sm-4 col-lg-4">
                                                    <div class="form-group">
                                                        <label for="country">Country</label>
                                                        <input type="text" value="{{ $lead->country }}"
                                                            class="form-control" id="country" name="country">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.row -->
                                            <!-- /.row -->
                                            <div class="row">
                                                <div class="col-xl-3">
                                                    <input type="submit" class="btn btn-outline-success" value="Save">
                                                </div>
                                            </div>
                                            <!-- /.row -->

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
