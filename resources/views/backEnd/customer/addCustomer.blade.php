@extends('backEnd.dashboard.home.master')
@section('title')
    Add Customer
@endsection
@push('css')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    {{-- --}}
@endpush
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    {{-- error mess --}}
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <form action="{{ route('save.customer') }}" class="form-demo" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-section ">
                                <div class="card">
                                    <div class="card-body">
                                        <h2>Personal Info</h2>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                                <div class="form-group">
                                                    <label for="name">Full Name</label>
                                                    <input type="text" class="form-control" id="name" name="name"
                                                        placeholder="Enter Full Name" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                                <div class="form-group">
                                                    <label for="fatherName">Father Name</label>
                                                    <input type="text" class="form-control" id="fatherName"
                                                        name="fatherName" placeholder="Enter Father Name">
                                                </div>
                                            </div>
                                            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                                <div class="form-group">
                                                    <label for="motherName">Mother Name</label>
                                                    <input type="text" class="form-control" id="motherName"
                                                        name="motherName" placeholder="Enter Mother Name">
                                                </div>
                                            </div>
                                            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                                <div class="form-group">
                                                    <label for="spouseName">Spouse Name(If Any)</label>
                                                    <input type="text" class="form-control" id="spouseName"
                                                        name="spouseName" placeholder="Enter Spouse Name">
                                                </div>
                                            </div>
                                            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                                <div class="form-group">
                                                    <label for="dateOfBirth">Date of Birth</label>
                                                    <input type="date" class="form-control" id="dateOfBirth"
                                                        name="dateOfBirth">
                                                </div>
                                            </div>
                                            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                                <div class="form-group">
                                                    <label for="dateOfBirthSpouse">Date of Birth(Spouse)</label>
                                                    <input type="date" class="form-control" id="dateOfBirthSpouse"
                                                        name="dateOfBirthSpouse">
                                                </div>
                                            </div>
                                            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                                <div class="form-group">
                                                    <label for="marriageDay">Marriage Day</label>
                                                    <input type="date" class="form-control" id="marriageDay"
                                                        name="marriageDay">
                                                </div>
                                            </div>
                                            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                                <div class="form-group">
                                                    <label for="phone">Phone Number</label>
                                                    <input type="text" class="form-control" id="phone" name="phone"
                                                        placeholder="Enter Phone Number" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                                <div class="form-group">
                                                    <label for="email">Email Address</label>
                                                    <input type="email" class="form-control" id="email" name="email"
                                                        placeholder="Enter Email Address">
                                                </div>
                                            </div>
                                            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                                <div class="form-group">
                                                    <label for="nidNumber">Nid Number</label>
                                                    <input type="number" class="form-control" id="nidNumber"
                                                        name="nidNumber" placeholder="Enter Nid Number">
                                                </div>
                                            </div>
                                            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                                <div class="form-group">
                                                    <label for="PassportNumber">Passport Number</label>
                                                    <input type="number" class="form-control" id="PassportNumber"
                                                        name="PassportNumber" placeholder="Enter Passport Number">
                                                </div>
                                            </div>
                                            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                                <div class="form-group">
                                                    <label for="Nationality">Nationality</label>
                                                    <input type="text" class="form-control" id="Nationality"
                                                        name="nationality" value="Bangladeshi">
                                                </div>
                                            </div>
                                            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                                <div class="form-group">
                                                    <label for="Religion">Religion</label>
                                                    <input type="text" class="form-control" id="Religion"
                                                        name="religion" placeholder="Enter Religion">
                                                </div>
                                            </div>
                                            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                                <div class="form-group">
                                                    <label for="profession">Profession</label>
                                                    <input type="text" class="form-control" id="profession"
                                                        name="profession" placeholder="Enter profession">
                                                </div>
                                            </div>
                                            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                                <div class="form-group">
                                                    <label for="facebookId">Facebook Id</label>
                                                    <input type="text" class="form-control" id="facebookId"
                                                        name="facebookId" placeholder="Enter Facebook Id">
                                                </div>
                                            </div>
                                            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                                <div class="form-group">
                                                    <label for="presentAddress">Present Address</label>
                                                    <input type="text" class="form-control" id="presentAddress"
                                                        name="presentAddress" placeholder="Enter Present Address">
                                                </div>
                                            </div>
                                            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                                <div class="form-group">
                                                    <label for="permanentAddress">Permanent Address</label>
                                                    <input type="text" class="form-control" id="permanentAddress"
                                                        name="permanentAddress" placeholder="Enter Permanent Address">
                                                </div>
                                            </div>
                                            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                                <div class="form-group">
                                                    <label for="officeAddress">Office Address</label>
                                                    <input type="text" class="form-control" id="officeAddress"
                                                        name="officeAddress" placeholder="Enter Office Address">
                                                </div>
                                            </div>
                                            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                                <div class="form-group">
                                                    <label for="password">Password</label>
                                                    <input type="password" class="form-control" id="password"
                                                        name="password" placeholder="Enter Password">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="form-section ">

                                <div class="card">
                                    <div class="card-body">
                                        <h2>Project Info</h2>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                                <div class="form-group">
                                                    <label for="projectName">Project Name</label>
                                                    <input type="text" class="form-control" id="projectName"
                                                        name="projectName" value="Your Project Name">
                                                </div>
                                            </div>
                                            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                                <div class="form-group">
                                                    <label for="projectAddress">Project Address</label>
                                                    <input type="text" class="form-control" id="projectAddress"
                                                        name="projectAddress" value="Enter Project Address">
                                                </div>
                                            </div>
                                            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                                <div class="form-group">
                                                    <label for="categoryOfOwnership">Category Of Ownership</label>
                                                    <select name="categoryOfOwnership" id="categoryOfOwnership"
                                                        class="form-control">
                                                        <option value=""> Select Category Of Ownership</option>
                                                        <option value="executive">Executive</option>
                                                        <option value="premiun">Premiun</option>
                                                        <option value="royal">Royal</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                                <div class="form-group">
                                                    <label for="ownershipSize">Suite Ownership Size(SFT)</label>
                                                    <input type="number" class="form-control" id="ownershipSize"
                                                        name="ownershipSize" placeholder="Enter Suite Ownership Size"
                                                        onchange="calculateOwnership()">
                                                </div>
                                            </div>
                                            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                                <div class="form-group">
                                                    <label for="noOffOwnership">No. Off Ownership</label>
                                                    <input type="number" class="form-control" id="noOffOwnership"
                                                        name="noOffOwnership" placeholder="Enter No. Off Ownership"
                                                        onkeyup="calculateOwnership()">
                                                </div>
                                            </div>
                                            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                                <div class="form-group">
                                                    <label for="pricePerOwnership">Price Per Ownership</label>
                                                    <input type="number" class="form-control" id="pricePerOwnership"
                                                        name="pricePerOwnership" placeholder="Enter Price Per Ownership"
                                                        onkeyup="calculatetotal()">
                                                </div>
                                            </div>
                                            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                                <div class="form-group">
                                                    <label for="pricePerOwnershipInWord">Price Per Ownership(In
                                                        Word)</label>
                                                    <input type="text" class="form-control"
                                                        id="pricePerOwnershipInWord" name="pricePerOwnershipInWord"
                                                        placeholder="Enter Price Per Ownership(In Word)">
                                                </div>
                                            </div>
                                            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                                <div class="form-group">
                                                    <label for="totalPrice">Total Price</label>
                                                    <input type="number" class="form-control" id="totalPrice"
                                                        name="totalPrice" placeholder="Enter Total Price"
                                                        onchange="calculatetotal()">
                                                </div>
                                            </div>
                                            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                                <div class="form-group">
                                                    <label for="totalPriceInWord">Total Price(In Word)</label>
                                                    <input type="number" class="form-control" id="totalPriceInWord"
                                                        name="totalPriceInWord" placeholder="Enter Total Price(In Word)">
                                                </div>
                                            </div>
                                            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                                <div class="form-group">
                                                    <label for="specialDiscount">Special Discount</label>
                                                    <input type="number" class="form-control" id="specialDiscount"
                                                        name="specialDiscount" placeholder="Enter Special Discount"
                                                        onkeyup="calculatetotal()">
                                                </div>
                                            </div>
                                            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                                <div class="form-group">
                                                    <label for="specialDiscountInWord">Special Discount(In Word)</label>
                                                    <input type="number" class="form-control" id="specialDiscountInWord"
                                                        name="specialDiscountInWord"
                                                        placeholder="Enter Special Discount(In Word)">
                                                </div>
                                            </div>
                                            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                                <label for="modeOfPayment" class="form-label dummy">Mode Of
                                                    Payment</label>
                                                <select name="modeOfPayment" id="modeOfPayment" class="form-control">
                                                    <option value="">Select Mode Of Payment</option>
                                                    <option value="perMonth">Per Month</option>
                                                    <option value="quarterly">Quarterly</option>
                                                    <option value="halfYearly">Half Yearly</option>
                                                    <option value="yearly">Yearly</option>
                                                    <option value="atATime">At a Time</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-section">

                                <div class="card">
                                    <div class="card-body">
                                        <h2>Booking & Payment Info</h2>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                                <div class="form-group">
                                                    <label for="bookingMoney">Booking Money</label>
                                                    <input type="number" class="form-control" id="bookingMoney"
                                                        name="bookingMoney" placeholder="Enter Booking Money"
                                                        onkeyup="calculatetotal()">
                                                </div>
                                            </div>
                                            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                                <div class="form-group">
                                                    <label for="bookingMoneyInWord">Booking Money(In Word)</label>
                                                    <input type="number" class="form-control" id="bookingMoneyInWord"
                                                        name="bookingMoneyInWord"
                                                        placeholder="Enter Booking Money(In Word)">
                                                </div>
                                            </div>
                                            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                                <div class="form-group">
                                                    <label for="bookingMoneyDate">Booking Money(Date)</label>
                                                    <input type="date" class="form-control" id="bookingMoneyDate"
                                                        name="bookingMoneyDate"
                                                        placeholder="Enter Booking Money(In Word)">
                                                </div>
                                            </div>
                                            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                                <div class="form-group">
                                                    <label for="paymentType">Payment Type</label>
                                                    <select name="paymentType" id="paymentType" class="form-control">
                                                        <option value=""> Select Payment Type</option>
                                                        <option value="cash">CASH</option>
                                                        <option value="chq">CHQ</option>
                                                        <option value="online">Online</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                                <div class="form-group">
                                                    <label for="noOfInstallment">No. Of Installment</label>
                                                    <input type="number" class="form-control" id="noOfInstallment"
                                                        name="noOfInstallment" placeholder="Enter No. Of Installment"
                                                        onkeyup="calculatetotal()">
                                                </div>
                                            </div>
                                            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                                <div class="form-group">
                                                    <label for="instPerMonth">Inst. Per Month</label>
                                                    <input type="number" class="form-control" id="instPerMonth"
                                                        name="instPerMonth" placeholder="Enter Inst. Per Month"
                                                        onkeyup="calculatetotal()">
                                                </div>
                                            </div>
                                            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                                <div class="form-group">
                                                    <label for="mainAmount">Main Amount</label>
                                                    <input type="number" class="form-control" id="mainAmount"
                                                        name="mainAmount" placeholder="Enter Main Amount"
                                                        onchange="calculatetotal()">
                                                </div>
                                            </div>
                                            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                                <div class="form-group">
                                                    <label for="agreedAmount">Agreed Amount</label>
                                                    <input type="number" class="form-control" id="agreedAmount"
                                                        name="agreedAmount" placeholder="Enter Agreed Amount"
                                                        onchange="calculateOwnership()">
                                                </div>
                                            </div>
                                            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                                <div class="form-group">
                                                    <label for="inStallmentStart">InStallment Start</label>
                                                    <input type="date" class="form-control" id="inStallmentStart"
                                                        name="inStallmentStart">
                                                </div>
                                            </div>
                                            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                                <div class="form-group">
                                                    <label for="inStallmentTo">InStallment To</label>
                                                    <input type="date" class="form-control" id="inStallmentTo"
                                                        name="inStallmentTo">
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                <div class="form-group">
                                                    <label for="description">Other Description</label>
                                                    <textarea name="description" id="description" class="form-control" placeholder="Enter Other Description"></textarea>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-section">


                                <div class="card">
                                    <div class="card-body">
                                        <h2>Nominee Info</h2>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                                <div class="form-group">
                                                    <label for="nomineeName">Nominee Name</label>
                                                    <input type="text" class="form-control" id="nomineeName"
                                                        name="nomineeName" placeholder="Enter Nominee Name">
                                                </div>
                                            </div>
                                            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                                <div class="form-group">
                                                    <label for="nomineeNumber">Nominee Cell Number</label>
                                                    <input type="number" class="form-control" id="nomineeNumber"
                                                        name="nomineeNumber" placeholder="Enter Nominee Phone Number">
                                                </div>
                                            </div>
                                            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                                <div class="form-group">
                                                    <label for="relationToNominee">Relation To Nominee</label>
                                                    <input type="text" class="form-control" id="relationToNominee"
                                                        name="relationToNominee" placeholder="Enter Relation To Nominee">
                                                </div>
                                            </div>
                                            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                                <div class="form-group">
                                                    <label for="referenceNameA">Reference Name(A)</label>
                                                    <input type="text" class="form-control" id="referenceNameA"
                                                        name="referenceNameA" placeholder="Enter Reference Name(A)">
                                                </div>
                                            </div>
                                            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                                <div class="form-group">
                                                    <label for="referenceCellNumerA">Reference Cell Number(A)</label>
                                                    <input type="number" class="form-control" id="referenceCellNumerA"
                                                        name="referenceCellNumerA"
                                                        placeholder="Enter Reference Cell Number(A)">
                                                </div>
                                            </div>
                                            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                                <div class="form-group">
                                                    <label for="referenceNameb">Reference Name(B)</label>
                                                    <input type="text" class="form-control" id="referenceNameb"
                                                        name="referenceNameb" placeholder="Enter Reference Name(A)">
                                                </div>
                                            </div>
                                            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                                <div class="form-group">
                                                    <label for="referenceCellNumerB">Reference Cell Number(B)</label>
                                                    <input type="number" class="form-control" id="referenceCellNumerB"
                                                        name="referenceCellNumerB"
                                                        placeholder="Enter Reference Cell Number(B)">
                                                </div>
                                            </div>
                                            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                                <div class="form-group">
                                                    <label for="salesPerson_id">Sales Person</label>
                                                    <select name="salesPerson_id" id="salesPerson_id"
                                                        class="form-control">
                                                        <option value=""> Select Sales Person</option>
                                                        @foreach ($salesPerson as $item)
                                                            <option value="{{ $item->id }}">{{ $item->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                                <div class="form-group">
                                                    <label for="teamLeader_id">Team Leader</label>
                                                    <select name="teamLeader_id" id="teamLeader_id" class="form-control">
                                                        <option value=""> Select Team Leader</option>
                                                        @foreach ($teamLeader as $item)
                                                            <option value="{{ $item->id }}">{{ $item->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                                <div class="form-group">
                                                    <label for="userImage">User Image</label>
                                                    <input type="file" class="form-control" id="userImage"
                                                        name="userImage">
                                                </div>
                                            </div>
                                            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                                <div class="form-group">
                                                    <label for="nomineeImage">Nominee Image</label>
                                                    <input type="file" class="form-control" id="nomineeImage"
                                                        name="nomineeImage">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-navigation">
                                <button type="button" class="previous btn btn-info pull-left">&lt; Previous</button>
                                <button type="button" class="next btn btn-info pull-right">Next &gt;</button>
                                <button type="submit" class="btn btn-success pull-right">Submit</button>

                                <span class="clearfix"></span>
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
    {{-- preview next button --}}
    <script>
        $(function() {
            var $sections = $('.form-section');

            function navigateTo(index) {
                $sections.removeClass('current').eq(index).addClass('current');
                $('.form-navigation .previous').toggle(index > 0);
                var atTheEnd = index >= $sections.length - 1;
                $('.form-navigation .next').toggle(!atTheEnd);
                $('.form-navigation [type=submit]').toggle(atTheEnd);
            }

            function curIndex() {
                return $sections.index($sections.filter('.current'));
            }

            $('.form-navigation .previous').click(function() {
                navigateTo(curIndex() - 1);
            });
            $('.form-navigation .next').click(function() {
                $('.form-demo').parsley().whenValidate({
                    group: 'block-' + curIndex()
                }).done(function() {
                    navigateTo(curIndex() + 1);
                });
            });
            $sections.each(function(index, section) {
                $(section).find(':input').attr('data-parsley-group', 'block' + index);
            });
            navigateTo(0);
        });
    </script>
    {{-- end preview next button --}}
    {{-- select 2  --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script>
        $("#salesPerson_id").select2();
        $("#teamLeader_id").select2();
    </script>
    {{-- end select 2  --}}
    <script>
        // calculateOwnership 
        function calculateOwnership() {
            // calculateOwnership 
            var ownershipSize = parseFloat(document.getElementById("ownershipSize").value) || 1;
            var noOffOwnership = parseFloat(document.getElementById("noOffOwnership").value) || 1;
            var result = ownershipSize * noOffOwnership;
            document.getElementById("ownershipSize").value = result;

        }
        // calculatetotal price
        function calculatetotal() {
            var noOffOwnership = parseFloat(document.getElementById("noOffOwnership").value) || 0;
            var pricePerOwnership = parseFloat(document.getElementById("pricePerOwnership").value) || 0;
            var specialDiscount = parseFloat(document.getElementById("specialDiscount").value) || 0;
            var totalPrice = parseFloat(document.getElementById("totalPrice").value) || 0;
            var bookingMoney = parseFloat(document.getElementById("bookingMoney").value) || 0;
            var mainAmount = parseFloat(document.getElementById("mainAmount").value) || 0;
            var agreedAmount = parseFloat(document.getElementById("agreedAmount").value) || 0;
            var noOfInstallment = parseFloat(document.getElementById("noOfInstallment").value) || 0;
            var instPerMonth = parseFloat(document.getElementById("instPerMonth").value) || 0;
            var totalCost = noOffOwnership * pricePerOwnership;
            var total = totalCost - specialDiscount;
            document.getElementById("totalPrice").value = total;
            document.getElementById("agreedAmount").value = total;
            var totalMin = total - bookingMoney;
            document.getElementById("mainAmount").value = totalMin;
            //    per Installment
            var perInstallment = totalMin / noOfInstallment;
            document.getElementById("instPerMonth").value = perInstallment;
        }
    </script>
@endpush
