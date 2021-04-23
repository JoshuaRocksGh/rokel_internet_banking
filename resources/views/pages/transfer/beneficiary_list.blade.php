@extends('layouts.master')

@section('styles')

    <!-- third party css -->
    <link href="{{ asset('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}"
        rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('assets/libs/datatables.net-select-bs4/css/select.bootstrap4.min.css') }}" rel="stylesheet"
        type="text/css" />
    <!-- third party css end -->

    <style>

    </style>

@endsection

@section('content')

    <div>


        <div class="row">
            <br>
            <div class="col-12">
                <div class="card">

                    <div class="card-body">


                        <div class="row">



                            <div class="col-md-1"></div>
                            <div class="col-md-10">

                                <h2 class="header-title m-t-0 text-primary">TRANSFER BENEFICIARY LIST</h2>
                                <p class="text-muted font-14 m-b-20">
                                    Parsley is a javascript form validation library. It helps you provide your
                                    users with feedback on their form submission before sending it to your
                                    server.
                                </p>
                                <hr>




                                <div class="row">
                                    <div class="col-md-12">


                                        <span class="text-sm-right float-left">


                                        </span>

                                        <span class="text-sm-right float-right">

                                            <div class="btn-group drop-left">
                                                <button type="button" class="btn btn-primary dropdown-toggle btn-rounded"
                                                    data-toggle="dropdown" aria-expanded="false"> Add Beneficiary <i
                                                        class="mdi mdi-chevron-down"></i> </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item"
                                                        href="{{ url('add-same-bank-beneficiary') }}">Same Bank</a>
                                                    <a class="dropdown-item"
                                                        href="{{ url('add-local-bank-beneficiary') }}">Other Local Bank
                                                    </a>
                                                    <a class="dropdown-item"
                                                        href="{{ url('add-international-bank-beneficiary') }}">International
                                                        Bank </a>
                                                </div>
                                            </div>
                                        </span>


                                    </div>
                                </div>
                                <div class="row" id="beneficiary_table" style="zoom: 0.8;">
                                    <div class="col-md-12">

                                        <table id="datatable-buttons"
                                            class="table table-bordered table-striped dt-responsive nowrap w-100 beneficiary_list_display">
                                            {{-- <table id="datatable-buttons" class="table table-bordered table-striped dt-responsive nowrap w-100"> --}}
                                            <thead>
                                                <tr class="bg-secondary text-white">
                                                    <th> <b> Alias </b> </th>
                                                    <th> <b> Account Number </b> </th>
                                                    <th> <b> Beneficiary Name </b> </th>
                                                    <th> <b> Beneficiary Email </b> </th>
                                                    <th> <b> Beneficiary Bank </b> </th>
                                                    <th class="text-center"> <b>Actions </b> </th>

                                                </tr>
                                            </thead>


                                        </table>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="text-center" id="beneficiary_list_loader">
                                            <div class="spinner-border text-primary avatar-lg" role="status"></div>
                                        </div>
                                        <br><br><br><br>
                                        <div class="text-center" id="beneficiary_list_retry_btn">
                                            <button class="btn btn-lg btn-secondary">Retry</button>
                                        </div>
                                    </div>
                                </div>



                                <!-- Modal content for the Large example -->
                                <div class="modal fade" id="bs-example-modal-lg" tabindex="-1" role="dialog"
                                    aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="myLargeModalLabel">Beneficiary Details</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-hidden="true">×</button>
                                            </div>
                                            <div class="modal-body p-4">
                                                <p>
                                                <form action="" id="modal_SAB_form">
                                                    <h2>SAME BANK</h2>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label class="col-6" for="">Account Number:</label>
                                                                <span class="col-6" id="account_number"></span>
                                                                {{-- <div class="col-6" >
                                                                        <input class="form-control" type="number" class="form-control"
                                                                        id="account_number" placeholder="Account Number" required>
                                                                    </div> --}}
                                                            </div>

                                                            <div class="form-group row">
                                                                <label class="col-6">Account Name:</label>
                                                                <span class="col-6" id="account_name"></span>
                                                                {{-- <input type="text" class="form-control" id="account_name"
                                                                        parsley-trigger="change" placeholder="Account Name" readonly required> --}}
                                                                {{-- <span class="text-danger" id="account_name_error"><i class="fas fa-times-circle"></i>This field is reqiured</span> --}}

                                                            </div>

                                                            <div class="form-group row">
                                                                <label class="col-6">Account Currency:</label>
                                                                <span class="col-6" id="select_currency"></span>
                                                                {{-- <input type="hidden" class="form-control" readonly value="" id="select_currency">
                                                                    <input type="text" class="form-control" readonly value="" id="select_currency_i"> --}}

                                                            </div>

                                                            <div class="form-group row">
                                                                {{-- <label class="purple-color">Beneficiary Personal Details</label><br> --}}
                                                                <label class="col-6">Beneficiary Name:</label>
                                                                <span class="col-6" id="beneficiary_name"></span>
                                                                {{-- <input type="text" class="form-control" id="beneficiary_name"
                                                                        parsley-trigger="change" placeholder="Beneficiary Name" required> --}}
                                                                {{-- <span class="text-danger" id="beneficiary_name_error"><i class="fas fa-times-circle"></i>This field is reqiured</span> --}}

                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">

                                                            <div class="form-group row">
                                                                <label class="col-6">Beneficiary Mobile Number:</label>
                                                                <span class="col-6" id="beneficiary_mobile_number"></span>
                                                                {{-- <input type="number" class="form-control" id="beneficiary_mobile_number"
                                                                        parsley-trigger="change" placeholder="Beneficiary Mobile Number" required> --}}
                                                                {{-- <span class="text-danger" id="beneficiary_email_error"><i class="fas fa-times-circle"></i>This field is reqiured</span> --}}

                                                            </div>

                                                            <div class="form-group row">
                                                                <label class="col-6">Beneficiary Address:</label>
                                                                <span class="col-6" id="beneficiary_address"></span>
                                                                {{-- <input type="text" class="form-control" id="beneficiary_address"
                                                                        parsley-trigger="change" placeholder="Beneficiary Address" required> --}}
                                                                {{-- <span class="text-danger" id="beneficiary_email_error"><i class="fas fa-times-circle"></i>This field is reqiured</span> --}}

                                                            </div>

                                                            <div class="form-group row">
                                                                <label class="col-6">Beneficiary Email:</label>
                                                                <span class="col-6" id="beneficiary_email"></span>
                                                                {{-- <input type="email" class="form-control" id="beneficiary_email"
                                                                        parsley-trigger="change" placeholder="Beneficiary Email" required> --}}
                                                                {{-- <span class="text-danger" id="beneficiary_email_error"><i class="fas fa-times-circle"></i>This field is reqiured</span> --}}

                                                            </div>

                                                            <div class="form-group row">
                                                                <label class="col-6" for="">Email beneficiary when a
                                                                    transfer is made</label>
                                                                <div class="col-6"> <span id="transfer_email"></span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                                <form action="" id="modal_OTB_form">
                                                    <h2>OTHER BANK BANK</h2>

                                                </form>

                                                <form action="" id="modal_INTB_form">
                                                    <h2>INTERNATIONAL BANK</h2>
                                                </form>
                                                </p>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-info waves-effect"
                                                    data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-danger waves-effect waves-light"
                                                    data-dismiss="modal">Delete</button>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->





                            </div> <!-- end card body-->


                        </div>

                        <div class="col-md-1"></div>



                    </div> <!-- end card-body -->



                </div> <!-- end col -->

            </div> <!-- end row -->



        </div>


    @endsection

    @section('scripts')

        <!-- third party js -->
        <script src="{{ asset('assets/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}">
        </script>
        {{-- <script src="{{ asset('assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables.net-keytable/js/dataTables.keyTable.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables.net-select/js/dataTables.select.min.js') }}"></script>
<script src="{{ asset('assets/libs/pdfmake/build/pdfmake.min.js') }}"></script>
<script src="{{ asset('assets/libs/pdfmake/build/vfs_fonts.js') }}"></script> --}}
        <!-- third party js ends -->

        <!-- Datatables init -->
        <script src="{{ asset('assets/js/pages/datatables.init.js') }}"></script>
        <script>
            function beneficiary_list() {
                var table = $('.beneficiary_list_display').DataTable();
                var nodes = table.rows().nodes();
                $.ajax({
                    'tpye': 'GET',
                    'url': 'all-beneficiary-list',
                    "datatype": "application/json",
                    success: function(response) {
                        {{-- console.log(response.responseCode); --}}

                        let data = response.data;
                        if (response.responseCode == '000') {

                            $('#beneficiary_table').show();
                            $('#beneficiary_list_loader').hide();
                            $('#beneficiary_list_retry_btn').hide();
                            $.each(data, function(index) {
                                console.log(data[index])

                                model_data = data[index]

                                table.row.add([
                                    data[index].FIRST_NAME,
                                    data[index].BEN_ACCOUNT,
                                    data[index].NICKNAME,
                                    data[index].EMAIL,
                                    data[index].BANK_NAME,


                                    `&emsp;&emsp; <a class='beneficiary_data' data-value='${data[index]}' href='edit-beneficiary?bene_type=${ data[index].BENEF_TYPE}&bene_id=${ data[index].BENE_ID}'> <span class="fe-edit noti-icon text-primary"></span></a>
                                                <button class="hell" > sup</button>
                                                &emsp;&emsp; <span class="fe-trash noti-icon text-danger delete_beneficiary_data" data-toggle="modal" data-target="#bs-example-modal-lg" data-value="${ data[index]}"></span>`,




                                ]).draw(false)

                            })

                        } else {
                            $('#beneficiary_table').hide();
                            $('#beneficiary_list_loader').hide();
                            $('#beneficiary_list_retry_btn').show();
                        }

                    }
                })
            }

            $('#beneficiary_list_retry_btn').hide();
            $('#beneficiary_table').hide();


            $(document).ready(function() {

                $('#beneficiary_list_loader').show();
                setTimeout(function() {
                    beneficiary_list();
                }, 2000);

                $('#beneficiary_list_retry_btn').click(function(e) {
                    e.preventDefault();
                    $('#beneficiary_list_retry_btn').hide();
                    $('#beneficiary_list_loader').show();

                    {{-- $('#beneficiary_list_loader').show(); --}}
                    setTimeout(function() {
                        beneficiary_list();
                    }, 2000);
                })

                $(".hell").click(function() {
                    alert('hhh')
                })

                $(".delete_beneficiary_data").click(function() {

                    alert("DELETE!!!");
                    var beneficiary_data = $(this).data().value;
                    console.log(beneficiary_data);
                    if (beneficiary_data.BENEF_TYPE == 'SAB') {

                        $('#modal_OTB_form').hide()
                        $('#modal_INTB_form').hide()
                        $('#modal_SAB_form').show()
                    } else if (beneficiary_data.BENEF_TYPE == 'OTB') {

                        $('#modal_INTB_form').hide()
                        $('#modal_SAB_form').hide()
                        $('#modal_OTB_form').show()
                    } else if (beneficiary_data.BENEF_TYPE == 'INT') {

                        $('#modal_SAB_form').hide()
                        $('#modal_OTB_form').hide()
                        $('#modal_INTB_form').show()

                    } else {

                    }
                })
            })

        </script>
    @endsection
