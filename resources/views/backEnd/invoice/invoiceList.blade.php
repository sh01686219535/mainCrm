@extends('backEnd.dashboard.home.master')
@section('title', 'Invoices')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="main-body">
                                    <h1>Invoices</h1>
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
                                        <th>Invoice No</th>
                                        <th>Total</th>
                                        <th>Invoice Date</th>
                                        <th>Due Date</th>
                                        <th>Customer</th>
                                        <th>Sales People </th>
                                        <th>Project</th>
                                        <th>Currency</th>
                                        <th>Action</th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $i = 1 @endphp
                                    @foreach ($invoice as $item)
                                        <tr>
                                            {{-- <td>{{ $i++ }}</td> --}}
                                            <td>{{ $item->invoice_no }}</td>
                                            <td>{{ $item->total }}</td>
                                            <td>{{ \Carbon\Carbon::parse($item->invoice_date)->format('d-M-y') }}</td>
                                            <td>{{ \Carbon\Carbon::parse($item->due_date)->format('d-M-y') }}</td>
                                            <td>{{ $item->customer->name ?? '' }}</td>
                                            <td>{{ $item->salesperson->name ?? ''  }}</td>
                                            <td>{{ $item->project->title ?? '' }}</td>
                                            <td>{{ $item->currency }}</td>
                                            <td>
                                                <form action="{{ route('invoice.destroy',$item->id) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-outline-danger" id="delete"><i class="fas fa-trash"></i></button>
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
