@extends('backEnd.dashboard.home.master')
@section('title')
    Edit Project
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
                            <div class="card-head">
                                <h2>Add New Project</h2>
                            </div>
                            <div class="card-body ">
                                <div class="main-body">
                                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                        <form action="{{ route('project.update',$project->id) }}" method="post">
                                            @csrf
                                            @method('PUT')
                                            <div class="row">
                                                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                    <div class="form-group">
                                                        <label for="title">Title</label>
                                                        <input type="text" value="{{ $project->title }}" class="form-control" id="title"
                                                            name="title">
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                                    <div class="form-group">
                                                        <label for="customer_id ">Customer</label>
                                                        <Select class="form-control" id="customer_id" name="customer_id">
                                                            <option value="">Select</option>
                                                            @foreach ($customer as $item)
                                                                <option value="{{ $item->id }}" {{ $item->id == $project->customer_id ? 'selected' : '' }}>{{ $item->name }}
                                                                </option>
                                                            @endforeach
                                                        </Select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                                    <div class="form-group">
                                                        <label for="billing_type">Billing Type</label>
                                                        <select class="form-control" id="billing_type" name="billing_type">
                                                            <option value="">Select</option>
                                                            <option value="Fixed_Rate" {{ $project->billing_type == 'Fixed_Rate' ? 'selected' : '' }}>Fixed Rate</option>
                                                            <option value="Task_Hour" {{ $project->billing_type == 'Task_Hour' ? 'selected' : '' }}>Task Hour</option>
                                                            <option value="Project_Hour" {{ $project->billing_type == 'Project_Hour' ? 'selected' : '' }}>Project Hour</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                                    <div class="form-group">
                                                        <label for="status">Status</label>
                                                        <select class="form-control" id="status" name="status">
                                                            <option value="">Select</option>
                                                            <option value="Not_Started" {{ $project->status == 'Not_Started' ? 'selected' : '' }}>Not Started</option>
                                                            <option value="In_Progress" {{ $project->status == 'In_Progress' ? 'selected' : '' }}>In Progress</option>
                                                            <option value="On_Hold" {{ $project->status == 'On_Hold' ? 'selected' : '' }}>On Hold</option>
                                                            <option value="Cancelled" {{ $project->status == 'Cancelled' ? 'selected' : '' }}>Cancelled</option>
                                                            <option value="Finished" {{ $project->status == 'Finished' ? 'selected' : '' }}>Finished</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                                    <div class="form-group">
                                                        <label for="billing_rate">Billing Rate</label>
                                                        <input type="text" class="form-control" value="{{ $project->billing_rate }}" id="billing_rate"
                                                            name="billing_rate">
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                                    <div class="form-group">
                                                        <label for="start_date">Start Date</label>
                                                        <input type="date" value="{{ \Carbon\Carbon::parse($project->start_date)->format('Y-m-d') }}" class="form-control" id="start_date"
                                                            name="start_date">
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                                    <div class="form-group">
                                                        <label for="deadline">Deadline</label>
                                                        <input type="date" value="{{ \Carbon\Carbon::parse($project->deadline)->format('Y-m-d') }}" class="form-control" id="deadline"
                                                            name="deadline">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                    <div class="form-group">
                                                        <label for="description">Description</label>
                                                        <textarea class="form-control" name="description" id="description" cols="" rows="">{{ $project->description }}</textarea>
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
