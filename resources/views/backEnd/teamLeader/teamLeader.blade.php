@extends('backEnd.dashboard.home.master')
@section('title')
    Teamleader
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
                                    <h1>Teamleader</h1>
                                    <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                            class="fa fa-plus"></i> Teamleader</a>
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
                                            <form action="{{ route('add.teamleader') }}" method="post"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Create
                                                            Teamleader
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
                                                            <label for="designation">Designation</label>
                                                            <input type="text" id="designation" name="designation"
                                                                class="form-control" placeholder="Enter Designation">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="image">Image</label>
                                                            <input type="file" id="image" name="image"
                                                                class="form-control">
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
                                                <th>Designation</th>
                                                <th>Image</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php $i = 1 @endphp
                                            @foreach ($teamLeader as $item)
                                                <tr>
                                                    <td>{{ $i }}</td>
                                                    <td>{{ $item->name }}</td>
                                                    <td>{{ $item->phone }}</td>
                                                    <td>{{ $item->email }}</td>
                                                    <td>{{ $item->designation }}</td>
                                                    <td>
                                                        <img src="{{ asset($item->image) }}" class="teamLeader_img"
                                                            alt="">
                                                    </td>
                                                    <td>
                                                        <a class="btn btn-primary action-btn" data-bs-toggle="modal" data-bs-target="#editExampleModal{{$item->id}}"><i class="fa fa-edit"></i></a>
                                                        <a href="{{route('delete.teamleader',$item->id)}}" class="delete btn btn-danger action-btn"><i
                                                                class="fa fa-trash"></i></a>
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
                                                                <form action="{{ route('update.teamleader') }}" method="post"
                                                                    enctype="multipart/form-data">
                                                                    @csrf
                                                                    <input type="hidden" name="teamleader_id" value="{{$item->id}}">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h1 class="modal-title fs-5"
                                                                                id="exampleModalLabel">Update
                                                                                Teamleader
                                                                            </h1>
                                                                            <button type="button" class="btn-close"
                                                                                data-bs-dismiss="modal"
                                                                                aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <div class="form-group">
                                                                                <label for="name">Full Name</label>
                                                                                <input type="text" id="name" value="{{$item->name}}"
                                                                                    name="name" class="form-control"
                                                                                    placeholder="Enter Full Name">
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="phone">Phone Number</label>
                                                                                <input type="number" id="phone" value="{{$item->phone}}"
                                                                                    name="phone" class="form-control"
                                                                                    placeholder="Enter Phone Number">
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="email">Email Address</label>
                                                                                <input type="email" id="email" value="{{$item->email}}"
                                                                                    name="email" class="form-control"
                                                                                    placeholder="Enter Email Address">
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label
                                                                                    for="designation">Designation</label>
                                                                                <input type="text" id="designation"
                                                                                    name="designation" value="{{$item->designation}}"
                                                                                    class="form-control"
                                                                                    placeholder="Enter Designation">
                                                                            </div>

                                                                            <div class="form-group">
                                                                                <label for="image">Image</label>
                                                                                <input type="file" id="image"
                                                                                    name="image" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button"
                                                                                class="btn btn-secondary"
                                                                                data-bs-dismiss="modal">Close</button>
                                                                            <button type="submit"
                                                                                class="btn btn-primary">Submit</button>
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
