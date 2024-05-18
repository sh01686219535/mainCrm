@extends('backEnd.dashboard.home.master')
@section('title')
Lead Report List
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
                                    <h1>Task Report</h1>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="report mb-5">
                                    <form action="" method="GET">
                                        @csrf
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
                                                <th>Title</th>
                                                <th>Lead</th>
                                                <th>Sales Person</th>
                                                <th>Team Leader</th>
                                                <th>Start Date</th>
                                                <th>Due Date</th>
                                                <th>Priority</th>
                                                <th>Status</th>                                            
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php $i = 1 @endphp
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->

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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
@endpush
