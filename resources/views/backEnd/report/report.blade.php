@extends('backEnd.dashboard.home.master')
@section('title')
    Report List
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
                                    <h1>Report</h1>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <!-- Example split danger button -->
                                <div class="main-menu">
                                    <a href="" class="btn btn-light dropdown-toggle menu1" data-bs-toggle="dropdown"
                                        aria-expanded="false>Lead">Task</a>
                                    <a href="" class="btn btn-light dropdown-toggle menu2" data-bs-toggle="dropdown"
                                        aria-expanded="false>Lead">Lead</a>
                                    <a href="" class="btn btn-light dropdown-toggle menu3" data-bs-toggle="dropdown"
                                        aria-expanded="false>Lead">Task</a>
                                    <a href="" class="btn btn-light dropdown-toggle menu4" data-bs-toggle="dropdown"
                                        aria-expanded="false>Lead">Task</a>
                                    <a href="" class="btn btn-light dropdown-toggle menu5" data-bs-toggle="dropdown"
                                        aria-expanded="false>Lead">Task</a>
                                    <a href="" class="btn btn-light dropdown-toggle menu6" data-bs-toggle="dropdown"
                                        aria-expanded="false>Lead">Task</a>
                                </div>
                                <div class="menu-item menu-item-1">
                                    <a href="" class="item-btn">Overview</a>
                                    <a href="" class="item-btn">Monthly</a>
                                </div>
                                <div class="menu-item menu-item-2">
                                    <a href="" class="item-btn">Overview</a>
                                    <a href="" class="item-btn">Monthly</a>
                                </div>
                                <div class="menu-item menu-item-3">
                                    <a href="" class="item-btn">Overview</a>
                                    <a href="" class="item-btn">Monthly</a>
                                </div>
                                <div class="menu-item menu-item-4">
                                    <a href="" class="item-btn">Overview</a>
                                    <a href="" class="item-btn">Monthly</a>
                                </div>
                                <div class="menu-item menu-item-5">
                                    <a href="" class="item-btn">Overview</a>
                                    <a href="" class="item-btn">Monthly</a>
                                </div>
                                <div class="menu-item menu-item-6">
                                    <a href="" class="item-btn">Overview</a>
                                    <a href="" class="item-btn">Monthly</a>
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
@push('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
    
    // Toggle visibility for .menu-item-1
    $('.menu-item-1').css('visibility', function(i, visibility) {
        return (visibility === 'visible') ? 'hidden' : 'visible';
    });
    // Assuming you want to toggle the visibility for other menu items as well
    $('.menu-item-2').css('visibility', function(i, visibility) {
        return (visibility === 'visible') ? 'hidden' : 'visible';
    });
    $('.menu-item-3').css('visibility', function(i, visibility) {
        return (visibility === 'visible') ? 'hidden' : 'visible';
    });
    $('.menu-item-4').css('visibility', function(i, visibility) {
        return (visibility === 'visible') ? 'hidden' : 'visible';
    });
    $('.menu-item-5').css('visibility', function(i, visibility) {
        return (visibility === 'visible') ? 'hidden' : 'visible';
    });
    $('.menu-item-6').css('visibility', function(i, visibility) {
        return (visibility === 'visible') ? 'hidden' : 'visible';
    });
$('.menu1').on('click', function() {
    $('.menu-item-1, .menu-item-2, .menu-item-3, .menu-item-4, .menu-item-5, .menu-item-6').toggleClass('hidden');
});
        $('.menu2').on('click', function() {
            $('.menu-item-2').css('display','block');
            $('.menu-item-1').css('display','none');
            $('.menu-item-3').css('display','none');
            $('.menu-item-4').css('display','none');
            $('.menu-item-5').css('display','none');
            $('.menu-item-6').css('display','none');
        });
        $('.menu3').on('click', function() {
            $('.menu-item-3').css('display','block');
            $('.menu-item-1').css('display','none');
            $('.menu-item-2').css('display','none');
            $('.menu-item-4').css('display','none');
            $('.menu-item-5').css('display','none');
            $('.menu-item-6').css('display','none');
        });
        $('.menu4').on('click', function() {
            $('.menu-item-4').css('display','block');
            $('.menu-item-1').css('display','none');
            $('.menu-item-2').css('display','none');
            $('.menu-item-3').css('display','none');
            $('.menu-item-5').css('display','none');
            $('.menu-item-6').css('display','none');
        });
        $('.menu5').on('click', function() {
            $('.menu-item-5').css('display','block');
            $('.menu-item-1').css('display','none');
            $('.menu-item-2').css('display','none');
            $('.menu-item-3').css('display','none');
            $('.menu-item-4').css('display','none');
            $('.menu-item-6').css('display','none');
        });
        $('.menu6').on('click', function() {
            $('.menu-item-6').css('display','block');
            $('.menu-item-1').css('display','none');
            $('.menu-item-2').css('display','none');
            $('.menu-item-3').css('display','none');
            $('.menu-item-4').css('display','none');
            $('.menu-item-5').css('display','none');
        });
    });
</script>

@endpush
