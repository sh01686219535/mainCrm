@extends('backEnd.dashboard.home.master')
@section('title')
Customer
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12 col-xl-12">
            <div class="card">
                <div class="card-body">
                    <h3>Customer</h3>
                    <a href="" class="btn btn-warning"></a>
                    <div class="invoice p-3 mb-3">
                        <!-- title row -->
                        <div class="row">
                          <div class="col-12">
                            <h4>
                              <i class="fas fa-globe"></i> AdminLTE, Inc.
                              <small class="float-right">Date: 2/10/2014</small>
                            </h4>
                          </div>
                          <!-- /.col -->
                        </div>
                        <!-- info row -->
                        <div class="row invoice-info">
                          <div class="col-sm-4 invoice-col">
                            From
                            <address>
                              <strong>Admin, Inc.</strong><br>
                              795 Folsom Ave, Suite 600<br>
                              San Francisco, CA 94107<br>
                              Phone: (804) 123-5432<br>
                              Email: info@almasaeedstudio.com
                            </address>
                          </div>
                          <!-- /.col -->
                          <div class="col-sm-4 invoice-col">
                            To
                            <address>
                              <strong>John Doe</strong><br>
                              795 Folsom Ave, Suite 600<br>
                              San Francisco, CA 94107<br>
                              Phone: (555) 539-1037<br>
                              Email: john.doe@example.com
                            </address>
                          </div>
                          <!-- /.col -->
                          <div class="col-sm-4 invoice-col">
                            <b>Invoice #007612</b><br>
                            <br>
                            <b>Order ID:</b> 4F3S8J<br>
                            <b>Payment Due:</b> 2/22/2014<br>
                            <b>Account:</b> 968-34567
                          </div>
                          <!-- /.col -->
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection