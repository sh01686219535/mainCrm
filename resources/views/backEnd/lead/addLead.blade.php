@extends('backEnd.dashboard.home.master')
@section('title')
    Add Customer
@endsection
@push('css')
<style>
    

    .form-section.current {
        display: inherit;
    }


    .dummy {
        color: rgb(0, 0, 0)
    }
</style>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

{{-- --}}
@endpush
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <form action="{{route('lead.store')}}" class="form-demo">
                            @csrf
                            <div class="form-section ">
                            <div class="card">
                                <div class="card-body">
                                    <h2>Lead Info</h2>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                            <div class="form-group">
                                                <label for="name">Full Name</label>
                                                <input type="text" class="form-control" id="name" name="name">
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input type="email" class="form-control" id="email" name="email">
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                            <div class="form-group">
                                                <label for="phone">Phone Number</label>
                                                <input type="number" class="form-control" id="phone" name="phone">
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                            <div class="form-group">
                                                <label for="phone">Address</label>
                                                <textarea class="form-control" name="address" id="address" cols="" rows=""></textarea>
                                            </div>
                                        </div>
                                
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                            <div class="form-group">
                                                <label for="city">City</label>
                                                <input type="text" class="form-control" id="city" name="city">
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                            <div class="form-group">
                                                <label for="state">State</label>
                                                <input type="text" class="form-control" id="state" name="state">
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                            <div class="form-group">
                                                <label for="company">Company Name</label>
                                                <input type="text" class="form-control" id="company" name="company">
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                            <div class="form-group">
                                                <label for="position">Position</label>
                                                <input type="text" class="form-control" name="position" id="position">
                                            </div>
                                        </div>
                                
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                            <div class="form-group">
                                                <label for="zip_code">Zip Code</label>
                                                <input type="text" class="form-control" id="zip_code" name="zip_code">
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                            <div class="form-group">
                                                <label for="country">Country</label>
                                                <input type="text" class="form-control" id="country" name="country">
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                            <div class="form-group">
                                                <label for="website">Website</label>
                                                <input type="text" class="form-control" id="website" name="website">
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                            <div class="form-group">
                                                <label for="description">description</label>
                                                <textarea class="form-control" name="description" id="description" cols="" rows=""></textarea>
                                            </div>
                                        </div>
                                
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                            <div class="form-group">
                                                <label for="status">Status</label>
                                                <select class="form-control" name="status" id="status">
                                                    <option value="">Select</option>
                                                    <option value="Contacted">Contacted</option>
                                                    <option value="Contacted">Customer</option>
                                                    <option value="New">New</option>
                                                    <option value="Proposal_Sent">Proposal sent</option>
                                                    <option value="Qualified">Qualified</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                            <div class="form-group">
                                                <label for="source">Source</label>
                                                <select class="form-control" name="source" id="source">
                                                    <option value="">Select</option>
                                                    <option value="Facebook">Facebook</option>
                                                    <option value="Twitter">Twitter</option>
                                                    <option value="Google">Google</option>
                                                    <option value="Personal">Personal</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                            <div class="form-group">
                                                <label for="teamLeader">Team Leader</label>
                                                <select class="form-control" name="teamLeader" id="teamLeader">
                                                    <option value="">Select</option>
                                                    @foreach ($teamLeader as $value)
                                                    <option value="{{ $value->id }}">{{ $value->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                            <div class="form-group">
                                                <label for="sales_people_id">Sales Officer</label>
                                                <select class="form-control" name="sales_people_id" id="sales_people_id">
                                                    <option value="">Select</option>
                                                    @foreach ($salesPerson as $value)
                                                    <option value="{{ $value->id }}">{{ $value->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        
                                        
                                        
                                
                                    </div>
                                    
                                        

                                        
                                        
                        </form>
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
@push('js')
    
@endpush
