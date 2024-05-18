@extends('backEnd.dashboard.home.master')
@section('title')
    Add Payment
@endsection
@push('css')
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
                            <div class="card-body ">
                                <div class="main-body">
                                    <h1>Payment</h1>
                                    <a class="btn btn-primary" href="{{ route('payment') }}"><i class="fa fa-list"></i>
                                        Payment List</a>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body ">
                                <div class="main-body">
                                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                        <form action="{{ route('payment.store') }}" method="post"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <!-- /.row -->
                                            <div class="row">
                                                <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                                    <div class="form-group">
                                                        <label for="customer_id">Customer</label>
                                                        <select name="customer_id" id="customer_id" class="form-control">
                                                            <option value="">Select Customer</option>
                                                            @foreach ($customer as $item)
                                                                <option value="{{ $item->id }}">{{ $item->phone }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                                    <div class="form-group">
                                                        <label for="startdate">Start Date</label>
                                                        <input type="date" class="form-control" id="startdate"
                                                            name="startdate">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                                    <div class="form-group">
                                                        <label for="endDate">End Date</label>
                                                        <input type="date" class="form-control" id="endDate"
                                                            name="endDate">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                                    <div class="form-group">
                                                        <label for="totalInstallment">Total Installment</label>
                                                        <input type="text" class="form-control" name="totalInstallment"
                                                            id="totalInstallment"></input>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                                    <div class="form-group">
                                                        <label for="perInstallment">Per Installment</label>
                                                        <input type="text" class="form-control" id="perInstallment"
                                                            name="perInstallment">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                                    <div class="form-group">
                                                        <label for="mainAmount">Main Amount</label>
                                                        <input type="text" class="form-control" id="mainAmount"
                                                            name="mainAmount">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                                    <div class="form-group">
                                                        <label for="dueAmount">Due Amount</label>
                                                        <input type="text" class="form-control" id="dueAmount"
                                                            name="dueAmount" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                                    <div class="form-group">
                                                        <label for="paidAmount">Paid Amount</label>
                                                        <input type="text" class="form-control" id="paidAmount"
                                                            name="paidAmount" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                                    <div class="form-group">
                                                        <label for="amount">Amount</label>
                                                        <input type="text" class="form-control" id="amount"
                                                            name="amount">
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
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
    </div>
@endsection

@push('js')
    {{-- select 2  --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script>
        $("#customer_id").select2();
    </script>
    {{-- end select 2  --}}
    {{-- customer_ajax call --}}
    <script>
        $(document).ready(function() {
        $("#customer_id").change(function() {
            var customer_id = $(this).val();
            $.ajax({
                url: '/getCustomer',
                type: 'get',
                dataType: 'json',
                data: {
                    customer_id: customer_id 
                },
                success: function(data) {
                    if (data.length > 0) {
                        var customer = data[0];
                        var payment = data[1];
                        var mainAmount = customer.mainAmount;
                        var main = mainAmount - payment;
                        // console.log(main);
                        $("#startdate").val(customer.inStallmentStart);
                        $("#endDate").val(customer.inStallmentTo);
                        $("#totalInstallment").val(customer.noOfInstallment);
                        $("#perInstallment").val(customer.instPerMonth);
                        $("#mainAmount").val(customer.mainAmount);
                        $("#dueAmount").val(main);
                        $("#paidAmount").val(payment);
                    } else {
                        console.error("No customer data found for the selected ID.");
                    }
                },
                error: function(xhr, error, status) {
                    console.error(xhr.responseText);
                }
            });
        });
    });
    </script>
@endpush
