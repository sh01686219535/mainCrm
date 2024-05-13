@extends('backEnd.dashboard.home.master')
@section('title')
    Payment List
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
                                    <h1>Payment</h1>
                                    <a class="btn btn-outline-primary" href="{{ route('add.payment') }}"><i class="fa fa-plus"></i>
                                        Payment</a>
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
                                                <th>Customer</th>
                                                <th>S-Date</th>
                                                <th>E-Date</th>
                                                <th>Total Ins.</th>
                                                <th>Per Ins.</th>
                                                <th>Amount</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php $i = 1 @endphp
                                            @foreach ($payment as $item)
                                                <tr>
                                                    <td>{{ $i++ }}</td>
                                                    <td>{{ $item->customer->name ?? '' }}</td>
                                                    <td>{{ \Carbon\Carbon::parse($item->startdate)->format('d-M-y') }}</td>
                                                    <td>{{ \Carbon\Carbon::parse($item->endDate)->format('d-M-y') }}</td>
                                                    <td>{{ $item->totalInstallment }}</td>
                                                    <td>{{ $item->perInstallment }}</td>
                                                    <td>{{ $item->mainAmount }}</td>
                                                    <td>
                                                        <form action="{{route('payment.delete',$item->id)}}" method="post" class="action-btn">
                                                            @csrf
                                                            <button type="submit" class="action-btn btn btn-outline-danger"
                                                                id="delete"><i class="fa fa-trash"></i></button>
                                                        </form>
                                                    </td>
                                                </tr>
                                                <form class="action-btn" action="{{ route('task.destroy', $item->id) }}"
                                                    method="POST">
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
