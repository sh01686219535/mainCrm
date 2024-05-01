@extends('backEnd.dashboard.home.master')
@section('title', 'Lead')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="main-body">
                                    <h1>Task</h1>
                                    {{-- <form action="{{ route('lead.exportExcel') }}" method="post" target="blank"> --}}
                                    {{-- @csrf --}}
                                    <div>
                                        <a href="{{ route('task.create') }}" class="btn btn-primary"><i
                                                class="fa fa-plus"></i>New Lead</a>
                                        {{-- <a href="" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-plus"></i>Import Lead</a> --}}


                                        {{-- <input type="submit" class="btn btn-success" value="Export"> --}}

                                    </div>
                                    {{-- </form> --}}

                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-bodered" id="example">
                                <thead>
                                    <tr>
                                        <th>Sl</th>
                                        <th>Title</th>
                                        <th>Lead</th>
                                        <th>Sales Person</th>
                                        <th>Team Leader</th>
                                        <th>Start Date</th>
                                        <th>Due Date</th>
                                        <th>Priority</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $i = 1 @endphp
                                    @foreach ($task as $item)
                                        <tr>
                                            <td>{{ $i++ }}</td>
                                            <td>{{ $item->title }}</td>
                                            <td>{{ $item->lead->name }}</td>
                                            <td>{{ $item->salesPerson->name ?? '' }}</td>
                                            <td>{{ $item->teamLeader->name ?? '' }}</td>

                                            <td>{{ \Carbon\Carbon::parse($item->start_date)->format('d-M-y') }}</td>
                                            <td>{{ \Carbon\Carbon::parse($item->due_date)->format('d-M-y') }}</td>
                                            <td>{{ $item->priority }}</td>
                                            <td>{{ $item->status }}</td>
                                            <td>
                                                <a href="{{ route('task.edit', $item->id) }}"
                                                    class="btn btn-outline-primary"><i class="fa fa-edit"></i></a>
                                                <form action="{{ route('task.destroy', $item->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-outline-danger"><i
                                                            class="fa fa-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Button trigger modal -->


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Import Excel</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('lead.excel') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <p>Note: Duplicate email rows are not allowed. Rows with empty first column will be ignored.</p>
                        <input type="file" name="excel_file" id="excel_file" class="form-control">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
