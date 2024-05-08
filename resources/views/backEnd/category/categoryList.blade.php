@extends('backEnd.dashboard.home.master')
@section('title', 'Category')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="main-body">
                                    <h1>Categories</h1>
                                    <div>
                                        <a href="{{ route('category.create') }}"  class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                class="fa fa-plus"></i>New Category</a>
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
                                        <th>Title</th>
                                        <th>Details</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $i = 1 @endphp
                                    @foreach ($category as $item)
                                        <tr>
                                            <td>{{ $i++ }}</td>
                                            <td>{{ $item->title }}</td>
                                            <td>{{ Str::limit($item->details,10)  }}</td>
                                            <td>
                                                {{-- <a href="{{ route('category.edit', $item->id) }}"
                                                    class="btn btn-outline-primary"><i class="fa fa-edit"></i></a> --}}
                                                <form action="{{ route('category.destroy', $item->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-outline-danger" id="delete"><i class="fas fa-trash"></i></button>
                                                </form>
                                                
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Button trigger modal -->


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add  Category</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('category.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <input type="text" name="title" id="title" class="form-control" placeholder="Title">
                    </div>
                    <div class="modal-body">
                        <textarea name="details" id="details" class="form-control" placeholder="details" cols="30" rows="10"></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
