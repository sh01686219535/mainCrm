@extends('backEnd.dashboard.home.master')

@section('title', 'Add Customer')

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
@endpush

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-xl-12">
                    <form action="" method="post" class="form-demo">
                        @csrf
                        <div class="form-section">
                            <div class="card">
                                <div class="card-body">
                                    <h2>Import New Lead</h2>
                                    <hr>
                                    <div class="row">
                                        <div class="col-xl-3">
                                            <div class="form-group">
                                                <label for="name">Import Excel</label>
                                                <input type="file" class="form-control" id="import_excel" name="import_excel">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-xl-3">
                                            <input type="submit" class="btn btn-outline-success" value="Save">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
    {{-- Additional JavaScript if needed --}}
@endpush
