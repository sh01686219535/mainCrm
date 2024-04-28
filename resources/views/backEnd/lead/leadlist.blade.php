@extends('backEnd.dashboard.home.master')
@section('title', 'Lead')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="main-body">
                                <h1>Lead</h1>
                                <div>
                                    <a href="{{ route('lead.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i>New Lead</a>
                                    <a href="{{ route('lead.excel') }}" class="btn btn-primary"><i class="fa fa-plus"></i>Import Lead</a>
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
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>Status</th>
                                    <th>Source</th>
                                    <th>Sales Person</th>
                                    <th>Team Leader</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $i = 1 @endphp
                                @foreach ($lead as $item)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->phone }}</td>
                                        <td>{{ $item->address }}</td>
                                        <td>{{ $item->status }}</td>
                                        <td>{{ $item->source }}</td>
                                        <td>{{ $item->salesPerson->name ?? '' }}</td>
                                        <td>{{ $item->teamLeader->name ?? '' }}</td>
                                        <td>
                                            <a href="{{route('lead.edit',$item->id)}}" class="btn btn-outline-primary"><i class="fa fa-edit"></i></a>
                                            <form action="{{ route('lead.destroy', $item->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-outline-danger"><i class="fa fa-trash"></i></button>
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
@endsection
