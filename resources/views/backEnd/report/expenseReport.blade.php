@extends('backEnd.dashboard.home.master')
@section('title')
Expense Report
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
                                <h1>Expense Report</h1>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="report mb-5">
                                <form action="/expense/report" method="GET">
                                    <div class="col-md-12 d-flex">
                                        <div class="col-lg-3 col-xl-3 col-md-3 col-sm-3 col-3" style="padding: 0 0px 0 5px">
                                            <input class="form-control" type="date" name="from_date">
                                        </div>
                                        <div class="col-lg-3 col-xl-3 col-md-3 col-sm-3 col-3" style="padding: 0 0px 0 5px">
                                            <input class="form-control" type="date" name="to_date">
                                        </div>
        
                                        <div class="col-lg-3 col-xl-3 col-md-3 col-sm-3 col-3">
                                            <input class="btn btn-secondary mx-2" type="submit" value="Search">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover table-bodered" id="example">
                                    <thead>
                                        <tr>
                                            <th>Sl</th>
                                            <th>Customer</th>
                                            <th>Category</th>
                                            <th>Name</th>
                                            <th>Amount</th>
                                            <th>Date</th>
                                            <th>Payment</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $i = 1 @endphp
                                        @foreach ($expense as $item)
                                            <tr>
                                                <td>{{ $i++ }}</td>
                                                <td>{{ $item->customer->name ?? ''  }}</td>
                                                <td>{{ $item->category->title ?? ''  }}</td>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->amount }}</td>
                                                <td>{{ \Carbon\Carbon::parse($item->date)->format('d-m-y') }}</td>
                                                <td>{{ $item->payment_mode }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

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