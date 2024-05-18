@extends('backEnd.dashboard.home.master')
@section('title')
Dashboard
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
                    <h1>Customer</h1>
                    <a href="{{route('add.customer')}}" class="btn btn-primary"><i class="fa fa-plus"></i> Customer</a>
                </div>
            </div>
           </div>
          </div>
          <!-- /.col -->
         
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
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