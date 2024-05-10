@extends('backEnd.dashboard.home.master')
@section('title')
Add Task
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
                                <h2>Add New Task</h2>
                            </div>
                            <div class="card-body ">
                                <div class="main-body">
                                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                        <form action="{{ route('task.store') }}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                    <div class="form-group">
                                                        <label for="title">Title</label>
                                                        <input type="text" class="form-control" id="title"
                                                            name="title">
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                                    <div class="form-group">
                                                        <label for="lead_id">Lead</label>
                                                        <Select class="form-control" id="lead_id"
                                                        name="lead_id">
                                                            <option value="">Select</option>
                                                            @foreach ($lead as $item)
                                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                            @endforeach
                                                        </Select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                                    <div class="form-group">
                                                        <label for="teamLeader">Team Leader</label>
                                                        <select class="form-control" name="team_leader_id" id="teamLeader">
                                                            <option value="">Select</option>
                                                            @foreach ($teamLeader as $value)
                                                                <option value="{{ $value->id }}">{{ $value->name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                                    <div class="form-group">
                                                        <label for="sales_people_id">Sales Officer</label>
                                                        <select class="form-control" name="sales_people_id"
                                                            id="sales_people_id">
                                                            <option value="">Select</option>
                                                            @foreach ($salesPerson as $value)
                                                                <option value="{{ $value->id }}">{{ $value->name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                                    <div class="form-group">
                                                        <label for="start_date">Start Date</label>
                                                        <input type="date" class="form-control" id="start_date"
                                                            name="start_date">
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                                    <div class="form-group">
                                                        <label for="due_date">Due Date</label>
                                                        <input type="date" class="form-control" id="due_date"
                                                            name="due_date">
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                                    <div class="form-group">
                                                        <label for="priority">Priority</label>
                                                        <select class="form-control" name="priority" id="priority">
                                                            <option value="">Select</option>
                                                            <option value="Hight">Hight</option>
                                                            <option value="Low">Low</option>
                                                            <option value="Medium">Medium</option>
                                                            <option value="Urgent">Urgent</option>
                                                        </select>
                                                    </div>
                                                </div> 
                                                <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                                    <div class="form-group">
                                                        <label for="status">Status</label>
                                                        <select class="form-control" name="status" id="status">
                                                            <option value="">Select</option>
                                                            <option value="In_Progress">In Progress</option>
                                                            <option value="Testing">Testing</option>
                                                            <option value="Awaiting_Feedback">Awaiting Feedback</option>
                                                            <option value="Complete">Complete</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                                    <div class="form-group">
                                                        <label for="file">Attach File</label>
                                                        <input type="file" class="form-control" id="file"
                                                            name="file">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                    <div class="form-group">
                                                        <label for="description">Description</label>
                                                        <textarea class="form-control" name="description" id="description" cols="" rows=""></textarea>
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
