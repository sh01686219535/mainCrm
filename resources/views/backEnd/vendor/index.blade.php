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
                                    <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                            class="fa fa-plus"></i> Vendor</a>
                                    <!-- Teamleader modal-->
                                    <div class="modal fade" id="exampleModal" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            {{-- error show --}}
                                            @if ($errors->any())
                                                <div class="alert alert-danger">
                                                    <ul>
                                                        @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif
                                            <form action="{{ route('vendor.store') }}" method="post"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Create
                                                            Vendor
                                                        </h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label for="name">Full Name</label>
                                                            <input type="text" id="name" name="name"
                                                                class="form-control" placeholder="Enter Full Name">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="phone">Phone Number</label>
                                                            <input type="number" id="phone" name="phone"
                                                                class="form-control" placeholder="Enter Phone Number">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="email">Email Address</label>
                                                            <input type="email" id="email" name="email"
                                                                class="form-control" placeholder="Enter Email Address">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="position ">Position</label>
                                                            <input type="text" id="position" name="position"
                                                                class="form-control" placeholder="Enter Position">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="street ">Street</label>
                                                            <input type="text" id="street" name="street"
                                                                class="form-control" placeholder="Enter Street">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="city ">City</label>
                                                            <input type="text" id="city" name="city"
                                                                class="form-control" placeholder="Enter City">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="state">State</label>
                                                            <input type="text" id="state" name="state"
                                                                class="form-control" placeholder="Enter State">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="zipCode ">Zip Code</label>
                                                            <input type="number" id="zipCode" name="zipCode"
                                                                class="form-control" placeholder="Enter Zip Code">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="country">Country</label>
                                                            <input type="text" id="country" name="country"
                                                                class="form-control" placeholder="Enter Country">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="notes">Notes</label>
                                                            <textarea name="notes" id="notes" class="form-control" placeholder="Enter Notes"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
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
                                                        <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editExampleModal{{$item->id}}"><i class="fa fa-edit"></i></a>
                                                        <form action="{{ route('vendor.destroy', $item->id) }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-outline-danger" id="delete"><i
                                                                    class="fa fa-trash"></i></button>
                                                        </form>
                                                        <!-- Edit Teamleader modal-->
                                                        <div class="modal fade" id="editExampleModal{{$item->id}}" tabindex="-1"
                                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                {{-- error show --}}
                                                                @if ($errors->any())
                                                                    <div class="alert alert-danger">
                                                                        <ul>
                                                                            @foreach ($errors->all() as $error)
                                                                                <li>{{ $error }}</li>
                                                                            @endforeach
                                                                        </ul>
                                                                    </div>
                                                                @endif
                                                                <form action="{{ route('vendor.update',$item->id) }}" method="post"
                                                                enctype="multipart/form-data">
                                                                @csrf
                                                                @method('PUT')
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Update
                                                                            Vendor
                                                                        </h1>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                            aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="form-group">
                                                                            <label for="name">Full Name</label>
                                                                            <input type="text" id="name" name="name" value="{{$item->name}}"
                                                                                class="form-control" placeholder="Enter Full Name">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="phone">Phone Number</label>
                                                                            <input type="number" id="phone" name="phone" value="{{$item->phone}}"
                                                                                class="form-control" placeholder="Enter Phone Number">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="email">Email Address</label>
                                                                            <input type="email" id="email" name="email" value="{{$item->email}}"
                                                                                class="form-control" placeholder="Enter Email Address">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="position ">Position</label>
                                                                            <input type="text" id="position" name="position" value="{{$item->position}}"
                                                                                class="form-control" placeholder="Enter Position">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="street ">Street</label>
                                                                            <input type="text" id="street" name="street" value="{{$item->street}}"
                                                                                class="form-control" placeholder="Enter Street">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="city ">City</label>
                                                                            <input type="text" id="city" name="city" value="{{$item->city}}"
                                                                                class="form-control" placeholder="Enter City">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="stata ">Stata</label>
                                                                            <input type="text" id="stata" name="stata" value="{{$item->stata}}"
                                                                                class="form-control" placeholder="Enter Stata">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="zipCode ">Zip Code</label>
                                                                            <input type="number" id="zipCode" name="zipCode" value="{{$item->zipCode}}"
                                                                                class="form-control" placeholder="Enter Zip Code">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="country">Country</label>
                                                                            <input type="text" id="country" name="country" value="{{$item->country}}"
                                                                                class="form-control" placeholder="Enter Country">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="notes">Notes</label>
                                                                            <textarea name="notes" id="notes" class="form-control" placeholder="Enter Notes">{{$item->notes}}</textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary"
                                                                            data-bs-dismiss="modal">Close</button>
                                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                            </div>
                                                        </div>
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
