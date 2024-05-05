@extends('backEnd.dashboard.home.master')
@section('title', 'Projects')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="main-body">
                                    <h1>Projects</h1>
                                    <div>
                                        <a href="{{ route('invoice.create') }}" class="btn btn-primary"><i
                                                class="fa fa-plus"></i>New Invoice</a>
                                    </div>
                                   
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
                                        <th>invoice_no</th>
                                        <th>total</th>
                                        <th>invoice_date</th>
                                        <th>customer_id</th>
                                        <th>project_id</th>
                                        <th>Status</th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $i = 1 @endphp
                                    {{-- @foreach ($invoice as $item)
                                        <tr>
                                            <td>{{ $i++ }}</td>
                                            <td>{{ $item->title }}</td>
                                            <td>{{ $item->customer->name ?? '' }}</td>
                                            <td>{{ $item->billing_type  }}</td>
                                            <td>{{ $item->status }}</td>

                                            
                                            <td>{{ $item->billing_rate }}</td> --}}
                                            
                                        </tr>
                                    {{-- @endforeach --}}
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
