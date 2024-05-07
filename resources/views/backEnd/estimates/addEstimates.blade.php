@extends('backEnd.dashboard.home.master')
@section('title')
    Create Estimate
@endsection
@push('css')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endpush

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12 col-md-12 col-lg-12 col-sm-12">
                        <div class="card">
                            <div class="card-head">
                                <h2>Create New Estimate</h2>
                            </div>
                            <div class="card-body ">
                                <div class="main-body">
                                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                        <form action="{{ route('estimates.store') }}" method="post"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="row my-3 d-flex">

                                                    <div class="col-lg-6">
                                                        <label for="">Customer</label>
                                                        <select class="form-control" name="customer_id">

                                                            <option value="">Select Customer</option>
                                                            @foreach ($customer as $value)
                                                                <option value="{{ $value->id }}">{{ $value->name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label for="project_id">Project</label>
                                                        <select class="form-control" name="project_id">

                                                            <option value="">Select</option>
                                                            @foreach ($project as $value)
                                                                <option value="{{ $value->id }}">{{ $value->title }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <label for="estimate_date">Estimate Date</label>
                                                        <input type="date" name="estimate_date" id="estimate_date"
                                                            class="form-control">
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <label for="expiry_date">Expiry Date</label>
                                                        <input type="date" name="expiry_date" id="expiry_date"
                                                            class="form-control">
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label for="billing_address">Billing Address</label>
                                                        <textarea class="form-control" name="billing_address" id="billing_address"></textarea>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <label for="status">Status</label>
                                                        <select name="status" id="status" class="form-control">
                                                            <option value="">Select Status</option>
                                                            <option value="draft">Draft</option>
                                                            <option value="sent">Sent</option>
                                                            <option value="expired">Expired</option>
                                                            <option value="declined">Declined</option>
                                                            <option value="accepted">Accepted</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <label for="currency">Currency</label>
                                                        <select name="currency" id="currency" class="form-control">
                                                            <option value="">Select</option>
                                                            <option value="AUD: $">AUD: $</option>
                                                            <option value="GBP: £">GBP: £</option>
                                                            <option value="AUD: $">USD: $</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <label for="city">City</label>
                                                        <input type="text" name="city" id="city"
                                                            class="form-control">
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <label for="state">State</label>
                                                        <input type="text" name="state" id="state"
                                                            class="form-control">
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <label for="discount_type">Discount Type</label>
                                                        <select name="discount_type" id="currency" class="form-control">
                                                            <option value="">Select DiscountType</option>
                                                            <option value="beforeTax">Before Tax</option>
                                                            <option value="afterTax">After Tax</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <label for="due_date">Tag</label>
                                                        <select name="discount_type" class="form-control" id="currency">
                                                            <option value="">Select Tag</option>
                                                            <option value="beforeTax">Before Tax</option>
                                                            <option value="afterTax">After Tax</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <label for="zip">Zip Code</label>
                                                        <input type="text" name="zip" id="zip"
                                                            class="form-control">
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <label for="zip">Country</label>
                                                        <select name="country" id="country" class="form-control">
                                                            <option value="">Select</option>
                                                            <option value="Afghanistan">Afghanistan</option>
                                                            <option value="Åland Islands">Åland Islands</option>
                                                            <option value="Albania">Albania</option>
                                                            <option value="Algeria">Algeria</option>
                                                            <option value="American Samoa">American Samoa</option>
                                                            <option value="Andorra">Andorra</option>
                                                            <option value="Angola">Angola</option>
                                                            <option value="Anguilla">Anguilla</option>
                                                            <option value="Antarctica">Antarctica</option>
                                                            <option value="Antigua and Barbuda">Antigua and Barbuda
                                                            </option>
                                                            <option value="Argentina">Argentina</option>
                                                            <option value="Armenia">Armenia</option>
                                                            <option value="Aruba">Aruba</option>
                                                            <option value="Australia">Australia</option>
                                                            <option value="Austria">Austria</option>
                                                            <option value="Azerbaijan">Azerbaijan</option>
                                                            <option value="Bahamas">Bahamas</option>
                                                            <option value="Bahrain">Bahrain</option>
                                                            <option value="Bangladesh">Bangladesh</option>
                                                            <option value="Barbados">Barbados</option>
                                                            <option value="Belarus">Belarus</option>
                                                            <option value="Belgium">Belgium</option>
                                                            <option value="Belize">Belize</option>
                                                            <option value="Benin">Benin</option>
                                                            <option value="Bermuda">Bermuda</option>
                                                            <option value="Bhutan">Bhutan</option>
                                                            <option value="Bolivia">Bolivia</option>
                                                            <option value="Bosnia and Herzegovina">Bosnia and Herzegovina
                                                            </option>
                                                            <option value="Botswana">Botswana</option>
                                                            <option value="Bouvet Island">Bouvet Island</option>
                                                            <option value="Brazil">Brazil</option>
                                                            <option value="British Indian Ocean Territory">British Indian
                                                                Ocean Territory</option>
                                                            <option value="Brunei Darussalam">Brunei Darussalam</option>
                                                            <option value="Bulgaria">Bulgaria</option>
                                                            <option value="Burkina Faso">Burkina Faso</option>
                                                            <option value="Burundi">Burundi</option>
                                                            <option value="Cambodia">Cambodia</option>
                                                            <option value="Cameroon">Cameroon</option>
                                                            <option value="Canada">Canada</option>
                                                            <option value="Cape Verde">Cape Verde</option>
                                                            <option value="Cayman Islands">Cayman Islands</option>
                                                            <option value="Central African Republic">Central African
                                                                Republic</option>
                                                            <option value="Chad">Chad</option>
                                                            <option value="Chile">Chile</option>
                                                            <option value="China">China</option>
                                                            <option value="Christmas Island">Christmas Island</option>
                                                            <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands
                                                            </option>
                                                            <option value="Colombia">Colombia</option>
                                                            <option value="Comoros">Comoros</option>
                                                            <option value="Congo">Congo</option>
                                                            <option value="Congo, The Democratic Republic of The">Congo,
                                                                The Democratic Republic of The</option>
                                                            <option value="Cook Islands">Cook Islands</option>
                                                            <option value="Costa Rica">Costa Rica</option>
                                                            <option value="Cote D'ivoire">Cote D'ivoire</option>
                                                            <option value="Croatia">Croatia</option>
                                                            <option value="Cuba">Cuba</option>
                                                            <option value="Cyprus">Cyprus</option>
                                                            <option value="Czech Republic">Czech Republic</option>
                                                            <option value="Denmark">Denmark</option>
                                                            <option value="Djibouti">Djibouti</option>
                                                            <option value="Dominica">Dominica</option>
                                                            <option value="Dominican Republic">Dominican Republic</option>
                                                            <option value="Ecuador">Ecuador</option>
                                                            <option value="Egypt">Egypt</option>
                                                            <option value="El Salvador">El Salvador</option>
                                                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                            <option value="Eritrea">Eritrea</option>
                                                            <option value="Estonia">Estonia</option>
                                                            <option value="Ethiopia">Ethiopia</option>
                                                            <option value="Falkland Islands (Malvinas)">Falkland Islands
                                                                (Malvinas)</option>
                                                            <option value="Faroe Islands">Faroe Islands</option>
                                                            <option value="Fiji">Fiji</option>
                                                            <option value="Finland">Finland</option>
                                                            <option value="France">France</option>
                                                            <option value="French Guiana">French Guiana</option>
                                                            <option value="French Polynesia">French Polynesia</option>
                                                            <option value="French Southern Territories">French Southern
                                                                Territories</option>
                                                            <option value="Gabon">Gabon</option>
                                                            <option value="Gambia">Gambia</option>
                                                            <option value="Georgia">Georgia</option>
                                                            <option value="Germany">Germany</option>
                                                            <option value="Ghana">Ghana</option>
                                                            <option value="Gibraltar">Gibraltar</option>
                                                            <option value="Greece">Greece</option>
                                                            <option value="Greenland">Greenland</option>
                                                            <option value="Grenada">Grenada</option>
                                                            <option value="Guadeloupe">Guadeloupe</option>
                                                            <option value="Guam">Guam</option>
                                                            <option value="Guatemala">Guatemala</option>
                                                            <option value="Guernsey">Guernsey</option>
                                                            <option value="Guinea">Guinea</option>
                                                            <option value="Guinea-bissau">Guinea-bissau</option>
                                                            <option value="Guyana">Guyana</option>
                                                            <option value="Haiti">Haiti</option>
                                                            <option value="Heard Island and Mcdonald Islands">Heard Island
                                                                and Mcdonald Islands</option>
                                                            <option value="Holy See (Vatican City State)">Holy See (Vatican
                                                                City State)</option>
                                                            <option value="Honduras">Honduras</option>
                                                            <option value="Hong Kong">Hong Kong</option>
                                                            <option value="Hungary">Hungary</option>
                                                            <option value="Iceland">Iceland</option>
                                                            <option value="India">India</option>
                                                            <option value="Indonesia">Indonesia</option>
                                                            <option value="Iran, Islamic Republic of">Iran, Islamic
                                                                Republic of</option>
                                                            <option value="Iraq">Iraq</option>
                                                            <option value="Ireland">Ireland</option>
                                                            <option value="Isle of Man">Isle of Man</option>
                                                            <option value="Israel">Israel</option>
                                                            <option value="Italy">Italy</option>
                                                            <option value="Jamaica">Jamaica</option>
                                                            <option value="Japan">Japan</option>
                                                            <option value="Jersey">Jersey</option>
                                                            <option value="Jordan">Jordan</option>
                                                            <option value="Kazakhstan">Kazakhstan</option>
                                                            <option value="Kenya">Kenya</option>
                                                            <option value="Kiribati">Kiribati</option>
                                                            <option value="Korea, Democratic People's Republic of">Korea,
                                                                Democratic People's Republic of</option>
                                                            <option value="Korea, Republic of">Korea, Republic of</option>
                                                            <option value="Kuwait">Kuwait</option>
                                                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                            <option value="Lao People's Democratic Republic">Lao People's
                                                                Democratic Republic</option>
                                                            <option value="Latvia">Latvia</option>
                                                            <option value="Lebanon">Lebanon</option>
                                                            <option value="Lesotho">Lesotho</option>
                                                            <option value="Liberia">Liberia</option>
                                                            <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya
                                                            </option>
                                                            <option value="Liechtenstein">Liechtenstein</option>
                                                            <option value="Lithuania">Lithuania</option>
                                                            <option value="Luxembourg">Luxembourg</option>
                                                            <option value="Macao">Macao</option>
                                                            <option value="Macedonia, The Former Yugoslav Republic of">
                                                                Macedonia, The Former Yugoslav Republic of</option>
                                                            <option value="Madagascar">Madagascar</option>
                                                            <option value="Malawi">Malawi</option>
                                                            <option value="Malaysia">Malaysia</option>
                                                            <option value="Maldives">Maldives</option>
                                                            <option value="Mali">Mali</option>
                                                            <option value="Malta">Malta</option>
                                                            <option value="Marshall Islands">Marshall Islands</option>
                                                            <option value="Martinique">Martinique</option>
                                                            <option value="Mauritania">Mauritania</option>
                                                            <option value="Mauritius">Mauritius</option>
                                                            <option value="Mayotte">Mayotte</option>
                                                            <option value="Mexico">Mexico</option>
                                                            <option value="Micronesia, Federated States of">Micronesia,
                                                                Federated States of</option>
                                                            <option value="Moldova, Republic of">Moldova, Republic of
                                                            </option>
                                                            <option value="Monaco">Monaco</option>
                                                            <option value="Mongolia">Mongolia</option>
                                                            <option value="Montenegro">Montenegro</option>
                                                            <option value="Montserrat">Montserrat</option>
                                                            <option value="Morocco">Morocco</option>
                                                            <option value="Mozambique">Mozambique</option>
                                                            <option value="Myanmar">Myanmar</option>
                                                            <option value="Namibia">Namibia</option>
                                                            <option value="Nauru">Nauru</option>
                                                            <option value="Nepal">Nepal</option>
                                                            <option value="Netherlands">Netherlands</option>
                                                            <option value="Netherlands Antilles">Netherlands Antilles
                                                            </option>
                                                            <option value="New Caledonia">New Caledonia</option>
                                                            <option value="New Zealand">New Zealand</option>
                                                            <option value="Nicaragua">Nicaragua</option>
                                                            <option value="Niger">Niger</option>
                                                            <option value="Nigeria">Nigeria</option>
                                                            <option value="Niue">Niue</option>
                                                            <option value="Norfolk Island">Norfolk Island</option>
                                                            <option value="Northern Mariana Islands">Northern Mariana
                                                                Islands</option>
                                                            <option value="Norway">Norway</option>
                                                            <option value="Oman">Oman</option>
                                                            <option value="Pakistan">Pakistan</option>
                                                            <option value="Palau">Palau</option>
                                                            <option value="Palestinian Territory, Occupied">Palestinian
                                                                Territory, Occupied</option>
                                                            <option value="Panama">Panama</option>
                                                            <option value="Papua New Guinea">Papua New Guinea</option>
                                                            <option value="Paraguay">Paraguay</option>
                                                            <option value="Peru">Peru</option>
                                                            <option value="Philippines">Philippines</option>
                                                            <option value="Pitcairn">Pitcairn</option>
                                                            <option value="Poland">Poland</option>
                                                            <option value="Portugal">Portugal</option>
                                                            <option value="Puerto Rico">Puerto Rico</option>
                                                            <option value="Qatar">Qatar</option>
                                                            <option value="Reunion">Reunion</option>
                                                            <option value="Romania">Romania</option>
                                                            <option value="Russian Federation">Russian Federation</option>
                                                            <option value="Rwanda">Rwanda</option>
                                                            <option value="Saint Helena">Saint Helena</option>
                                                            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis
                                                            </option>
                                                            <option value="Saint Lucia">Saint Lucia</option>
                                                            <option value="Saint Pierre and Miquelon">Saint Pierre and
                                                                Miquelon</option>
                                                            <option value="Saint Vincent and The Grenadines">Saint Vincent
                                                                and The Grenadines</option>
                                                            <option value="Samoa">Samoa</option>
                                                            <option value="San Marino">San Marino</option>
                                                            <option value="Sao Tome and Principe">Sao Tome and Principe
                                                            </option>
                                                            <option value="Saudi Arabia">Saudi Arabia</option>
                                                            <option value="Senegal">Senegal</option>
                                                            <option value="Serbia">Serbia</option>
                                                            <option value="Seychelles">Seychelles</option>
                                                            <option value="Sierra Leone">Sierra Leone</option>
                                                            <option value="Singapore">Singapore</option>
                                                            <option value="Slovakia">Slovakia</option>
                                                            <option value="Slovenia">Slovenia</option>
                                                            <option value="Solomon Islands">Solomon Islands</option>
                                                            <option value="Somalia">Somalia</option>
                                                            <option value="South Africa">South Africa</option>
                                                            <option value="South Georgia and The South Sandwich Islands">
                                                                South Georgia and The South Sandwich Islands</option>
                                                            <option value="Spain">Spain</option>
                                                            <option value="Sri Lanka">Sri Lanka</option>
                                                            <option value="Sudan">Sudan</option>
                                                            <option value="Suriname">Suriname</option>
                                                            <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen
                                                            </option>
                                                            <option value="Swaziland">Swaziland</option>
                                                            <option value="Sweden">Sweden</option>
                                                            <option value="Switzerland">Switzerland</option>
                                                            <option value="Syrian Arab Republic">Syrian Arab Republic
                                                            </option>
                                                            <option value="Taiwan">Taiwan</option>
                                                            <option value="Tajikistan">Tajikistan</option>
                                                            <option value="Tanzania, United Republic of">Tanzania, United
                                                                Republic of</option>
                                                            <option value="Thailand">Thailand</option>
                                                            <option value="Timor-leste">Timor-leste</option>
                                                            <option value="Togo">Togo</option>
                                                            <option value="Tokelau">Tokelau</option>
                                                            <option value="Tonga">Tonga</option>
                                                            <option value="Trinidad and Tobago">Trinidad and Tobago
                                                            </option>
                                                            <option value="Tunisia">Tunisia</option>
                                                            <option value="Turkey">Turkey</option>
                                                            <option value="Turkmenistan">Turkmenistan</option>
                                                            <option value="Turks and Caicos Islands">Turks and Caicos
                                                                Islands</option>
                                                            <option value="Tuvalu">Tuvalu</option>
                                                            <option value="Uganda">Uganda</option>
                                                            <option value="Ukraine">Ukraine</option>
                                                            <option value="United Arab Emirates">United Arab Emirates
                                                            </option>
                                                            <option value="United Kingdom">United Kingdom</option>
                                                            <option value="United States">United States</option>
                                                            <option value="United States Minor Outlying Islands">United
                                                                States Minor Outlying Islands</option>
                                                            <option value="Uruguay">Uruguay</option>
                                                            <option value="Uzbekistan">Uzbekistan</option>
                                                            <option value="Vanuatu">Vanuatu</option>
                                                            <option value="Venezuela">Venezuela</option>
                                                            <option value="Viet Nam">Viet Nam</option>
                                                            <option value="Virgin Islands, British">Virgin Islands, British
                                                            </option>
                                                            <option value="Virgin Islands, U.S.">Virgin Islands, U.S.
                                                            </option>
                                                            <option value="Wallis and Futuna">Wallis and Futuna</option>
                                                            <option value="Western Sahara">Western Sahara</option>
                                                            <option value="Yemen">Yemen</option>
                                                            <option value="Zambia">Zambia</option>
                                                            <option value="Zimbabwe">Zimbabwe</option>
                                                        </select>
                                                    </div>


                                                    <hr>

                                                    <hr>

                                                    <div class="show_transaction mb-3">
                                                        <div class="row">
                                                            <div class="col-md-3 mb-3">
                                                                <label for="example-text-input"
                                                                    class="form-label">Item</label>
                                                                <select class="form-control service_id" name="item_id[]">
                                                                    <option value="">Select</option>
                                                                    @foreach ($item as $value)
                                                                        <option value="{{ $value->id }}">
                                                                            {{ $value->name }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <div class="col-md-3 mb-3">
                                                                <label for="quantity" class="form-label">Quantity</label>
                                                                <input class="form-control quantity" type="number"
                                                                    name="quantity[]" value="1"
                                                                    placeholder="Enter Quantity">
                                                            </div>
                                                            <div class="col-md-3 mb-3">
                                                                <label for="amount" class="form-label">Amount</label>
                                                                <input class="form-control amount" type="text"
                                                                    name="amount[]">
                                                            </div>
                                                            <div class="col-md-2 mt-4">
                                                                <button class="btn btn-success add_item_btn">Add
                                                                    More</button>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <label for="total">Total Amount</label>
                                                                <input type="text" name="total" id="total_amount"
                                                                    class="form-control" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="row mb-3">
                                                        <div class="col-lg-6">
                                                            <label for="total_amount">Admin Note</label>
                                                            <textarea name="admin_note" id="admin_note" class="form-control"></textarea>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <label for="client_note">Client Note</label>
                                                            <textarea name="client_note" id="client_note" class="form-control"></textarea>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <label for="term_condition">terms & condition</label>
                                                            <textarea name="term_condition" id="term_condition" class="form-control"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="">
                                                        <input type="submit" value="Add" class="btn btn-primary w-25"
                                                            id="add_btn">
                                                    </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div><!-- /.col -->

                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
    </div>
@endsection

@push('js')
    {{-- Additional JavaScript if needed --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {

            $(".add_item_btn").click(function(e) {
                e.preventDefault();
                $(".show_transaction").prepend(` <div class="row">
                                                             <div class="col-md-3 mb-3">
                                                                <label for="example-text-input" class="form-label">Item</label>
                                                                <select class="form-control service_id" name="item_id[]">
                                                                    <option value="">Select</option>
                                                                    @foreach ($item as $value)
                                                                    <option value="{{ $value->id }}">{{ $value->name }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        <div class="col-md-3 mb-3">
                                                            <label for="quantity" class="form-label">Quantity</label>
                                                            <input class="form-control quantity" type="number" name="quantity[]" value="1" placeholder="Enter Quantity">
                                                        </div>
                                                        <div class="col-md-3 mb-3">
                                                            <label for="amount" class="form-label">Amount</label>
                                                            <input class="form-control amount" type="text" name="amount[]">
                                                        </div>
                                                        <div class="col-md-2 mt-4">
                                                            <button class="btn btn-danger remove_item_btn">Remove</button>
                                                        </div>
                                                    </div>`);
            });
            $(document).on('click', '.remove_item_btn', function(e) {
                let row_item = $(this).parent().parent();
                $(row_item).remove();
            });
        });
    </script>
    <script>
        $(document).ready(function() {

            // Function to calculate total amount
            function calculateTotalAmount() {
                var totalAmount = 0;
                $('.amount').each(function() {
                    totalAmount += parseFloat($(this).val()) || 0;
                });
                $('#total_amount').val(totalAmount.toFixed(2));
                $('#due_amount').val(totalAmount.toFixed(2));
            }

            // Calculate total amount on page load
            calculateTotalAmount();

            //new
            $('body').on('keyup', '.amount', function() {
                calculateTotalAmount();
            });
            $('body').on('change', '.quantity', function() {
                var closestRow = $(this).closest('.row');
                var quantity = $(this).val();
                var amount = closestRow.find('.amount').val();
                closestRow.find('.amount').val(quantity * amount);
                calculateTotalAmount();
            });
            $('body').on('change', '.service_id', function() {
                var service_id = $(this).val();
                var closestRow = $(this).closest('.row');
                console.log(service_id, closestRow);
                // Perform AJAX call to fetch price based on service_id (if needed)
            });
            //end
            // $('body').on('change', '.service_id', function() {
            //     var service_id = $(this).val();
            //     var closestRow = $(this).closest('.row');
            //     $.ajax({
            //         url: '/getPrice'
            //         , type: 'post'
            //         , dataType: 'json'
            //         , data: 'service_id=' + service_id
            //         , headers: {
            //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            //         }
            //         , success: function(data) {
            //             closestRow.find('.singleamount').val(data[0].price);
            //             closestRow.find('.amount').val(data[0].price);

            //             calculateTotalAmount();
            //         }
            //         , error: function(xhr, status, error) {
            //             console.error(xhr.responseText);
            //         }
            //     });
            // });

            // $('body').on('keyup', '.quantity', function() {
            //     var closestRow = $(this).closest('.row');
            //     0
            //     var quantity = $(this).val();
            //     var amount = closestRow.find('.singleamount').val();
            //     closestRow.find('.amount').val(quantity * amount);
            //     // Recalculate total amount when quantity changes
            //     calculateTotalAmount();
            // });



            // $('body').on('change', '.service_id', function() {
            //     var service_id = $(this).val();
            //     var closestRow = $(this).closest('.row');
            //     console.log(service_id, closestRow);
            //     $.ajax({
            //         url: '/getPrice'
            //         , type: 'post'
            //         , dataType: 'json'
            //         , data: 'service_id=' + service_id
            //         , headers: {
            //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            //         }
            //         , success: function(data) {
            //             // Assuming $service contains the price
            //             // $('.amount').val(data[0].price);
            //             closestRow.find('.singleamount').val(data[0].price);

            //             closestRow.find('.amount').val(data[0].price);
            //         }
            //         , error: function(xhr, status, error) {
            //             console.error(xhr.responseText);
            //         }
            //     });
            // });


            // $('body').on('change', '.quantity', function() {
            //     var closestRow = $(this).closest('.row');

            //     var quantity = $(this).val();
            //     var amount = closestRow.find('.singleamount').val();
            //     closestRow.find('.amount').val(quantity * amount);
            // });


        });
        $(document).ready(function() {
            $('#advance, #due_amount').on('keyup', function() {
                var advance = parseFloat($('#advance').val()) || 0;
                var main_amount = parseFloat($('#total_amount').val()) || 0;
                var dueAmount = main_amount - advance;
                $('#due_amount').val(dueAmount.toFixed(2));
            });
        });
    </script>
@endpush
