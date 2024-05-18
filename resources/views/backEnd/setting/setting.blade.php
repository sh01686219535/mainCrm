@extends('backEnd.dashboard.home.master')
@section('title')
    Setting List
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
                                    <h1>General Information</h1>
                                </div>
                            </div>
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
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('setting.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <!-- /.row -->
                                    <div class="row">
                                        <div class="col-lg-4 col-sm-4 col-xl-4 col-md-4">
                                            <div class="form-group">
                                                <label for="companyName">Company Name <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" name="companyName" value="{{ $setting->companyName }}"
                                                    id="companyName" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-4 col-xl-4 col-md-4">
                                            <div class="form-group">
                                                <label for="phone">Phone<span class="text-danger">*</span></label>
                                                <input type="number" name="phone" value="{{ $setting->phone }}"
                                                    id="phone" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-4 col-xl-4 col-md-4">
                                            <div class="form-group">
                                                <label for="email">Email <span class="text-danger">*</span></label>
                                                <input type="email" name="email" value="{{ $setting->email }}"
                                                    id="email" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-4 col-xl-4 col-md-4">
                                            <div class="form-group">
                                                <label for="city">City</label>
                                                <input type="text" name="city" value="{{ $setting->city }}"
                                                    id="city" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-4 col-xl-4 col-md-4">
                                            <div class="form-group">
                                                <label for="state">State</label>
                                                <input type="text" name="state" value="{{ $setting->state }}"
                                                    id="state" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-4 col-xl-4 col-md-4">
                                            <div class="form-group">
                                                <label for="country">Country</label>
                                                <input type="text" name="country" value="{{ $setting->country }}"
                                                    id="country" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-4 col-xl-4 col-md-4">
                                            <div class="form-group">
                                                <label for="zipCode">Zip Code</label>
                                                <input type="number" name="zipCode" value="{{ $setting->zipCode }}"
                                                    id="zipCode" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-4 col-xl-4 col-md-4">
                                            <div class="form-group">
                                                <label for="componyLogoMenu">Compony Logo Top Menu</label>
                                                <input type="file" name="componyLogoMenu" id="componyLogoMenu"
                                                    class="form-control">
                                                @if ($setting->componyLogoMenu)
                                                    <img class="imageUN" src="{{ asset($setting->componyLogoMenu) }}"
                                                        alt="" class="image-style mb-3">
                                                @else
                                                    <img class="imageUN" id="showImage"
                                                        src="{{ asset('backEndAsset/img/previewImage.png') }}"
                                                        alt="" class="image-style mb-3">
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-4 col-xl-4 col-md-4">
                                            <div class="form-group">
                                                <label for="componyLogoFooter">Compony Logo Footer</label>
                                                <input type="file" name="componyLogoFooter" id="componyLogoFooter"
                                                    class="form-control">
                                                @if ($setting->componyLogoFooter)
                                                    <img class="imageUN" src="{{ asset($setting->componyLogoFooter) }}"
                                                        alt="" class="image-style mb-3">
                                                @else
                                                    <img class="imageUN" id="showNImage"
                                                        src="{{ asset('backEndAsset/img/previewImage.png') }}"
                                                        alt="" class="image-style mb-3">
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-3 col-xl-3 col-md-3">
                                            <input type="submit" class="btn btn-success" value="Submit">
                                        </div>
                                    </div>
                                    <!-- /.row -->
                                </form>
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
    <script>
        //   userImage  
        $(document).ready(function() {
            $('#componyLogoMenu').change('click', function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
        //nominee image 
        $(document).ready(function() {
            $('#componyLogoFooter').change('click', function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('.showNImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
@endpush
