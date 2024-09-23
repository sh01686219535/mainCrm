@extends('backEnd.dashboard.home.master')
@section('title')
    Customer List
@endsection
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
                            <div class="card-body ">
                                <div class="main-body">
                                    <h1>Customer List</h1>
                                    <!-- <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                                                                                                                                class="fa fa-plus"></i> Approve Customer</a> -->
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
                                                <th>Name</th>
                                                <th>Phone</th>
                                                <th>Email</th>
                                                <th>Image</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php $i = 1 @endphp
                                            @foreach ($customer as $item)
                                                <tr>
                                                    <td>{{ $i++ }}</td>
                                                    <td>{{ $item->name }}</td>
                                                    <td>{{ $item->phone }}</td>
                                                    <td>{{ $item->email }}</td>
                                                    <td>
                                                        <img src="{{ asset($item->user_image) }}" class="teamLeader_img"
                                                            alt="">
                                                    </td>
                                                    <td class="d-flex justify-content-between">
                                                        <a href="{{ route('customer.edit', $item->id) }}"
                                                            class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
                                                        <a href="{{ route('delete.customer', $item->id) }}"
                                                            class="delete btn btn-danger btn-sm"><i
                                                                class="fa fa-trash"></i></a>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
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
        <section class="content">
            <div class="container-fluid">
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    </div>
@endsection
@push('js')
    {{-- id="example" --}}
@endpush
