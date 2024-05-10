@extends('backEnd.dashboard.home.master')
@section('title')
    Vendor List
@endsection
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12 col-md-12 col-lg-12 col-sm-12">
                        <div class="card">
                            <div class="card-body ">
                                <div class="main-body">
                                    <h1>Vendor</h1>
                                    <a class="btn btn-primary"  href="{{ route('vendor.create') }}"><i
                                            class="fa fa-plus"></i> Vendor Create</a>
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
                                                <th>Position</th>
                                                <th>Street</th>
                                                <th>City</th>
                                                <th>State</th>
                                                <th>ZipCode</th>
                                                <th>Country</th>
                                                <th>Notes</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php $i = 1 @endphp
                                            @foreach ($vendor as $item)
                                                <tr>
                                                    <td>{{ $i }}</td>
                                                    <td>{{ $item->name }}</td>
                                                    <td>{{ $item->phone }}</td>
                                                    <td>{{ $item->email }}</td>
                                                    <td>{{ $item->position }}</td>
                                                    <td>{{ $item->street }}</td>
                                                    <td>{{ $item->city }}</td>
                                                    <td>{{ $item->state }}</td>
                                                    <td>{{ $item->zipCode }}</td>
                                                    <td>{{ $item->country }}</td>
                                                    <td>{{ Str::limit($item->notes,20) }}</td>
                                                    <td>
                                                        <a class="btn btn-primary action-btn" href="{{route('vendor.edit',$item->id)}}"><i class="fa fa-edit"></i></a>
                                                        <form action="{{ route('vendor.destroy', $item->id) }}" method="POST" class="action-btn">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-outline-danger action-btn" id="delete"><i
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
                    </div><!-- /.col -->

                </div><!-- /.row -->
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
