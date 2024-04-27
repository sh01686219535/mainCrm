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
                    <form action="{{ route('lead.store') }}" method="post" class="form-demo">
                        @csrf
                        <div class="form-section">
                            <div class="card">
                                <div class="card-body">
                                    <h2>Add New Lead</h2>
                                    <hr>
                                    <div class="row">
                                        <div class="col-xl-3">
                                            <div class="form-group">
                                                <label for="name">Full Name</label>
                                                <input type="text" class="form-control" id="name" name="name">
                                            </div>
                                        </div>
                                        <div class="col-xl-3">
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input type="email" class="form-control" id="email" name="email">
                                            </div>
                                        </div>
                                        <div class="col-xl-3">
                                            <div class="form-group">
                                                <label for="phone">Phone Number</label>
                                                <input type="number" class="form-control" id="phone" name="phone">
                                            </div>
                                        </div>
                                        <div class="col-xl-3">
                                            <div class="form-group">
                                                <label for="address">Address</label>
                                                <textarea class="form-control" name="address" id="address" cols="" rows=""></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Additional form rows can be added here -->

                                    <div class="row">
                                        <div class="col-xl-3">
                                            <div class="form-group">
                                                <label for="status">Status</label>
                                                <select class="form-control" name="status" id="status">
                                                    <option value="">Select</option>
                                                    <option value="Contacted">Contacted</option>
                                                    <option value="Customer">Customer</option>
                                                    <option value="New">New</option>
                                                    <option value="Proposal_Sent">Proposal sent</option>
                                                    <option value="Qualified">Qualified</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xl-3">
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
                                        <div class="col-xl-3">
                                            <div class="form-group">
                                                <label for="team_leader_id">Team Leader</label>
                                                <select class="form-control" name="team_leader_id" id="team_leader_id">
                                                    <option value="">Select</option>
                                                    @foreach ($teamLeader as $leader)
                                                        <option value="{{ $leader->id }}">{{ $leader->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xl-3">
                                            <div class="form-group">
                                                <label for="sales_people_id">Sales Officer</label>
                                                <select class="form-control" name="sales_people_id" id="sales_people_id">
                                                    <option value="">Select</option>
                                                    @foreach ($salesPerson as $person)
                                                        <option value="{{ $person->id }}">{{ $person->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-xl-3">
                                            <div class="form-group">
                                                <label for="website">Website</label>
                                                <input type="text" class="form-control" id="website" name="website">
                                            </div>
                                        </div>
                                        <div class="col-xl-3">
                                            <div class="form-group">
                                                <label for="description">Description</label>
                                                <textarea class="form-control" name="description" id="description" cols="" rows=""></textarea>
                                            </div>
                                        </div>
                                        <div class="col-xl-3">
                                            <div class="form-group">
                                                <label for="city">City</label>
                                                <input type="text" class="form-control" id="city" name="city">
                                            </div>
                                        </div>
                                        <div class="col-xl-3">
                                            <div class="form-group">
                                                <label for="state">State</label>
                                                <input type="text" class="form-control" id="state" name="state">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-xl-3">
                                            <div class="form-group">
                                                <label for="company">Company Name</label>
                                                <input type="text" class="form-control" id="company" name="company">
                                            </div>
                                        </div>
                                        <div class="col-xl-3">
                                            <div class="form-group">
                                                <label for="position">Position</label>
                                                <input type="text" class="form-control" name="position" id="position">
                                            </div>
                                        </div>
                                        <div class="col-xl-3">
                                            <div class="form-group">
                                                <label for="zip_code">Zip Code</label>
                                                <input type="text" class="form-control" id="zip_code" name="zip_code">
                                            </div>
                                        </div>
                                        <div class="col-xl-3">
                                            <div class="form-group">
                                                <label for="country">Country</label>
                                                <input type="text" class="form-control" id="country" name="country">
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
