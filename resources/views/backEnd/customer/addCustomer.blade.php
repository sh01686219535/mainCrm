@extends('backEnd.dashboard.home.master')
@section('title')
    Add Customer
@endsection
@push('css')
<style>
    .form-section {
        display: none;
    }

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
                        <form action="" class="form-demo">
                            @csrf
                            <div class="form-section ">
                            <div class="card">
                                <div class="card-body">
                                    <h2>Personal Info</h2>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                            <div class="form-group">
                                                <label for="name">Full Name</label>
                                                <input type="text" class="form-control" id="name" name="name"
                                                    placeholder="Enter Full Name">
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                            <div class="form-group">
                                                <label for="fatherName">Father Name</label>
                                                <input type="text" class="form-control" id="fatherName" name="fatherName"
                                                    placeholder="Enter Father Name">
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                            <div class="form-group">
                                                <label for="motherName">Mother Name</label>
                                                <input type="text" class="form-control" id="motherName" name="motherName"
                                                    placeholder="Enter Mother Name">
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                            <div class="form-group">
                                                <label for="spouseName">Spouse Name(If Any)</label>
                                                <input type="text" class="form-control" id="spouseName" name="spouseName"
                                                    placeholder="Enter Spouse Name">
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                            <div class="form-group">
                                                <label for="dateOfBirth">Date of Birth</label>
                                                <input type="date" class="form-control" id="dateOfBirth"
                                                    name="dateOfBirth">
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                            <div class="form-group">
                                                <label for="dateOfBirthSpouse">Date of Birth(Spouse)</label>
                                                <input type="date" class="form-control" id="dateOfBirthSpouse"
                                                    name="dateOfBirthSpouse">
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                            <div class="form-group">
                                                <label for="marriageDay">Marriage Day</label>
                                                <input type="date" class="form-control" id="marriageDay"
                                                    name="marriageDay">
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                            <div class="form-group">
                                                <label for="phone">Phone Number</label>
                                                <input type="text" class="form-control" id="phone" name="phone"
                                                    placeholder="Enter Phone Number">
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                            <div class="form-group">
                                                <label for="email">Email Address</label>
                                                <input type="email" class="form-control" id="email" name="email"
                                                    placeholder="Enter Email Address">
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                            <div class="form-group">
                                                <label for="nidNumber">Nid Number</label>
                                                <input type="number" class="form-control" id="nidNumber" name="nidNumber"
                                                    placeholder="Enter Nid Number">
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                            <div class="form-group">
                                                <label for="PassportNumber">Passport Number</label>
                                                <input type="number" class="form-control" id="PassportNumber"
                                                    name="PassportNumber" placeholder="Enter Passport Number">
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                            <div class="form-group">
                                                <label for="Nationality">Nationality</label>
                                                <input type="text" class="form-control" id="Nationality"
                                                    name="nationality" value="Bangladeshi">
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                            <div class="form-group">
                                                <label for="Religion">Religion</label>
                                                <input type="text" class="form-control" id="Religion"
                                                    name="religion" placeholder="Enter Religion">
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                            <div class="form-group">
                                                <label for="profession">Profession</label>
                                                <input type="text" class="form-control" id="profession"
                                                    name="profession" placeholder="Enter profession">
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                            <div class="form-group">
                                                <label for="facebookId">Facebook Id</label>
                                                <input type="text" class="form-control" id="facebookId"
                                                    name="facebookId" placeholder="Enter Facebook Id">
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                            <div class="form-group">
                                                <label for="presentAddress">Present Address</label>
                                                <input type="text" class="form-control" id="presentAddress"
                                                    name="presentAddress" placeholder="Enter Present Address">
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                            <div class="form-group">
                                                <label for="permanentAddress">Permanent Address</label>
                                                <input type="text" class="form-control" id="permanentAddress"
                                                    name="permanentAddress" placeholder="Enter Permanent Address">
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                            <div class="form-group">
                                                <label for="officeAddress">Office Address</label>
                                                <input type="text" class="form-control" id="officeAddress"
                                                    name="officeAddress" placeholder="Enter Office Address">
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
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
                                        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                            <div class="form-group">
                                                <label for="projectName">Project Name</label>
                                                <input type="text" class="form-control" id="projectName"
                                                    name="projectName" value="Your Project Name">
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                            <div class="form-group">
                                                <label for="projectAddress">Project Address</label>
                                                <input type="text" class="form-control" id="projectAddress"
                                                    name="projectAddress" value="Enter Project Address">
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
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
                                        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                            <div class="form-group">
                                                <label for="ownershipSize">Suite Ownership Size(SFT)</label>
                                                <input type="number" class="form-control" id="ownershipSize"
                                                    name="ownershipSize" placeholder="Enter Suite Ownership Size">
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                            <div class="form-group">
                                                <label for="noOffOwnership">No. Off Ownership</label>
                                                <input type="number" class="form-control" id="noOffOwnership"
                                                    name="noOffOwnership" placeholder="Enter No. Off Ownership">
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                            <div class="form-group">
                                                <label for="pricePerOwnership">Price Per Ownership</label>
                                                <input type="number" class="form-control" id="pricePerOwnership"
                                                    name="pricePerOwnership" placeholder="Enter Price Per Ownership">
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                            <div class="form-group">
                                                <label for="pricePerOwnershipInWord">Price Per Ownership(In Word)</label>
                                                <input type="text" class="form-control" id="pricePerOwnershipInWord"
                                                    name="pricePerOwnershipInWord"
                                                    placeholder="Enter Price Per Ownership(In Word)">
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                            <div class="form-group">
                                                <label for="totalPrice">Total Price</label>
                                                <input type="number" class="form-control" id="totalPrice"
                                                    name="totalPrice" placeholder="Enter Total Price">
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                            <div class="form-group">
                                                <label for="totalPriceInWord">Total Price(In Word)</label>
                                                <input type="number" class="form-control" id="totalPriceInWord"
                                                    name="totalPriceInWord" placeholder="Enter Total Price(In Word)">
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                            <div class="form-group">
                                                <label for="specialDiscount">Special Discount</label>
                                                <input type="number" class="form-control" id="specialDiscount"
                                                    name="specialDiscount" placeholder="Enter Special Discount">
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
                                        <div class="col-md-12 d-flex mt-4">
                                            <label for="" class="form-label dummy">Mode Of Payment</label>
                                            <div class="col-md-2">
                                                <input class="mx-1" type="checkbox" id="Installment"
                                                    name="installment" value="Installment">
                                                <label class="form-label " for="Installment">Per Month</label>
                                            </div>

                                            <div class="col-md-2">
                                                <input class="mx-1" type="checkbox" id="quarterly" name="quarterly"
                                                    value="Quarterly">
                                                <label class="form-label dummy" for="quarterly">Quarterly</label>
                                            </div>
                                            <div class="col-md-2">
                                                <input class="mx-1" type="checkbox" id="half_yearly"
                                                    name="half_yearly" value="Half_yearly">
                                                <label class="form-label dummy" for="half_yearly">Half Yearly</label>
                                            </div>
                                            <div class="col-md-2">
                                                <input class="mx-1" type="checkbox" id="yearly" name="yearly"
                                                    value="Yearly">
                                                <label class="form-label dummy" for="yearly">Yearly</label>
                                            </div>
                                            <div class="col-md-2">
                                                <input class="mx-1" type="checkbox" id="at_a_time" name="at_a_time"
                                                    value="At_a_time">
                                                <label class="form-label dummy" for="at_a_time">At a Time</label>
                                            </div>
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
                                        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                            <div class="form-group">
                                                <label for="bookingMoney">Booking Money</label>
                                                <input type="number" class="form-control" id="bookingMoney"
                                                    name="bookingMoney" placeholder="Enter Booking Money">
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                            <div class="form-group">
                                                <label for="bookingMoneyInWord">Booking Money(In Word)</label>
                                                <input type="number" class="form-control" id="bookingMoneyInWord"
                                                    name="bookingMoneyInWord" placeholder="Enter Booking Money(In Word)">
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                            <div class="form-group">
                                                <label for="bookingMoneyDate">Booking Money(Date)</label>
                                                <input type="date" class="form-control" id="bookingMoneyDate"
                                                    name="bookingMoneyDate" placeholder="Enter Booking Money(In Word)">
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
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
                                        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                            <div class="form-group">
                                                <label for="noOfInstallment">No. Of Installment</label>
                                                <input type="number" class="form-control" id="noOfInstallment"
                                                    name="noOfInstallment" placeholder="Enter No. Of Installment">
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                            <div class="form-group">
                                                <label for="instPerMonth">Inst. Per Month</label>
                                                <input type="number" class="form-control" id="instPerMonth"
                                                    name="instPerMonth" placeholder="Enter Inst. Per Month">
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                            <div class="form-group">
                                                <label for="mainAmount">Main Amount</label>
                                                <input type="number" class="form-control" id="mainAmount"
                                                    name="mainAmount" placeholder="Enter Main Amount">
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                            <div class="form-group">
                                                <label for="agreedAmount">Agreed Amount</label>
                                                <input type="number" class="form-control" id="agreedAmount"
                                                    name="agreedAmount" placeholder="Enter Agreed Amount">
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                            <div class="form-group">
                                                <label for="inStallmentStart">InStallment Start</label>
                                                <input type="date" class="form-control" id="inStallmentStart"
                                                    name="inStallmentStart">
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
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
                                        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                            <div class="form-group">
                                                <label for="nomineeName">Nominee Name</label>
                                                <input type="text" class="form-control" id="nomineeName"
                                                    name="nomineeName" placeholder="Enter Nominee Name">
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                            <div class="form-group">
                                                <label for="nomineeNumber">Nominee Cell Number</label>
                                                <input type="number" class="form-control" id="nomineeNumber"
                                                    name="nomineeNumber" placeholder="Enter Nominee Phone Number">
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                            <div class="form-group">
                                                <label for="relationToNominee">Relation To Nominee</label>
                                                <input type="text" class="form-control" id="relationToNominee"
                                                    name="relationToNominee" placeholder="Enter Relation To Nominee">
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
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
                                        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
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
                                        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                            <div class="form-group">
                                                <label for="salesPerson_id">Sales Person</label>
                                                <select name="salesPerson_id" id="salesPerson_id" class="form-control">
                                                    <option value=""> Select Sales Person</option>
                                                    <option value="cash">Sales Person 1 </option>
                                                    <option value="chq">Sales Person 2</option>
                                                    <option value="online">Sales Person 3</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                            <div class="form-group">
                                                <label for="teamLeader_id">Team Leader</label>
                                                <select name="teamLeader_id" id="teamLeader_id" class="form-control">
                                                    <option value=""> Select Team Leader</option>
                                                    <option value="cash">Team Leader 1 </option>
                                                    <option value="chq">Team Leader 2</option>
                                                    <option value="online">Team Leader 3</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                            <div class="form-group">
                                                <label for="userImage">User Image</label>
                                                <input type="file" class="form-control" id="userImage"
                                                    name="userImage">
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
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
@endpush
