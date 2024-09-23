@extends('backEnd.dashboard.home.master')
@section('title', 'Expense')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <!-- /.row -->
                <div class="row mb-2">
                    <!-- /.col -->
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="main-body">
                                    <h1>Expenses</h1>
                                    <div>
                                        <a href="{{ route('expense.create') }}" class="btn btn-outline-primary"><i
                                                class="fa fa-plus"></i>New Expense</a>
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
                    <!-- /.row -->
                </div>
                <!-- /.row -->

                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-bodered" id="example">
                                <thead>
                                    <tr>
                                        <th>Sl</th>
                                        <th>Customer</th>
                                        <th>Category</th>
                                        <th>Name</th>
                                        <th>Date</th>
                                        <th>Amount</th>
                                        <th>Currency</th>
                                        <th>Payment mode</th>
                                        <th>Note</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $i = 1 @endphp
                                    @foreach ($expense as $item)
                                        <tr>
                                            <td>{{ $i++ }}</td>
                                            <td>{{ $item->customer->name }}</td>
                                            <td>{{ $item->category->title }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->date }}</td>
                                            <td>{{ $item->amount }}</td>
                                            <td>{{ $item->currency }}</td>
                                            <td>{{ $item->payment_mode }}</td>
                                            <td>{{ Str::limit($item->note,8) }}</td>
                                            <td>
                                                <a href="{{ route('expense.edit', $item->id) }}"
                                                    class="btn btn-outline-primary action-btn"><i class="fa fa-edit"></i></a>
                                                <form action="{{ route('expense.destroy', $item->id) }}" class="action-btn" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-outline-danger action-btn" id="delete"><i class="fas fa-trash"></i></button>
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
