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

@endsection

@section('content')

    <div>

        <div class="row">
            <br> <br>
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <div class="row">

                            <div class="col-md-12">

                                <p class="sub-header font-18 purple-color" style="cursor: pointer">
                                <h2 class="header-title m-t-0 text-primary">PENDING</h2>

                                </p>
                                <hr>
                            </div>

                            <div class="col-md-12">


                                <ul class="nav nav-pills navtab-bg nav-justified">
                                    <li class="nav-item">
                                        <a href="#transfer_tab" data-toggle="tab" aria-expanded="false"
                                            class="nav-link active transfer_tab_btn">
                                            Transfers
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#payment_tab" data-toggle="tab" aria-expanded="true" class="nav-link ">
                                            Payments
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#request_tab" data-toggle="tab" aria-expanded="false" class="nav-link">
                                            Requests
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#cards_tab" data-toggle="tab" aria-expanded="false" class="nav-link">
                                            Cards
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane show active" id="transfer_tab">

                                        <div class="card-body">

                                            {{-- <h4 class="header-title">Buttons example</h4>
                                            <p class="sub-header font-13">
                                                The Buttons extension for DataTables provides a common set of options, API
                                                methods and styling to display buttons on a page
                                                that will interact with a DataTable. The core library provides the based
                                                framework upon which plug-ins can built.
                                            </p> --}}

                                            <table id="datatable-buttons"
                                                class="table table-striped table-bordered dt-responsive nowrap w-100 pending_transaction_request"
                                                style="zoom: 0.8;">
                                                <thead>
                                                    <tr>
                                                        <th>Req-Type</th>
                                                        <th>Status</th>
                                                        <th>Initiated By</th>
                                                        <th>Posted Date</th>
                                                        <th>Account No</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>



                                            </table>


                                        </div> <!-- end card body-->


                                    </div>

                                    <div class="tab-pane  " id="payment_tab">



                                        <div class="border mt-0 rounded">
                                            <h4 class="header-title p-2 mb-0 text-danger">My LOANS</h4>

                                            <div class="table-responsive" style="height: 275px;">
                                                <table class="table table-centered table-nowrap mb-0">
                                                    <tbody>
                                                        <tr>
                                                            <td style="width: 10px;">
                                                                <div class="avatar-sm rounded bg-soft-danger">
                                                                    <i
                                                                        class="dripicons-wallet font-4 avatar-title text-danger"></i>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <a href="ecommerce-product-detail.html"
                                                                    class="text-body font-weight-semibold">Savings
                                                                    Account</a>
                                                                <small class="d-block">01024499300101</small>
                                                            </td>

                                                            <td class="text-right">
                                                                GHS 90,039.00
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width: 10px;">
                                                                <div class="avatar-sm rounded bg-soft-danger">
                                                                    <i
                                                                        class="dripicons-wallet font-4 avatar-title text-danger"></i>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <a href="ecommerce-product-detail.html"
                                                                    class="text-body font-weight-semibold">Red Hoodie for
                                                                    men</a>
                                                                <small class="d-block">01024499300101</small>
                                                            </td>
                                                            <td class="text-right">
                                                                USD 5,700.00
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width: 10px;">
                                                                <div class="avatar-sm rounded bg-soft-danger">
                                                                    <i
                                                                        class="dripicons-wallet font-4 avatar-title text-danger"></i>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <a href="ecommerce-product-detail.html"
                                                                    class="text-body font-weight-semibold">Designer Awesome
                                                                    T-Shirt</a>
                                                                <small class="d-block">01024499300101</small>
                                                            </td>
                                                            <td class="text-right">
                                                                SLL 888.00
                                                            </td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                            <!-- end table-responsive -->
                                        </div> <!-- end .border-->


                                    </div>


                                    <div class="tab-pane  " id="request_tab">



                                        <div class="border mt-0 rounded">
                                            <h4 class="header-title p-2 mb-0 text-danger">My LOANS</h4>

                                            <div class="table-responsive" style="height: 275px;">
                                                <table class="table table-centered table-nowrap mb-0">
                                                    <tbody>
                                                        <tr>
                                                            <td style="width: 10px;">
                                                                <div class="avatar-sm rounded bg-soft-danger">
                                                                    <i
                                                                        class="dripicons-wallet font-4 avatar-title text-danger"></i>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <a href="ecommerce-product-detail.html"
                                                                    class="text-body font-weight-semibold">Savings
                                                                    Account</a>
                                                                <small class="d-block">01024499300101</small>
                                                            </td>

                                                            <td class="text-right">
                                                                GHS 90,039.00
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width: 10px;">
                                                                <div class="avatar-sm rounded bg-soft-danger">
                                                                    <i
                                                                        class="dripicons-wallet font-4 avatar-title text-danger"></i>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <a href="ecommerce-product-detail.html"
                                                                    class="text-body font-weight-semibold">Red Hoodie for
                                                                    men</a>
                                                                <small class="d-block">01024499300101</small>
                                                            </td>
                                                            <td class="text-right">
                                                                USD 5,700.00
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width: 10px;">
                                                                <div class="avatar-sm rounded bg-soft-danger">
                                                                    <i
                                                                        class="dripicons-wallet font-4 avatar-title text-danger"></i>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <a href="ecommerce-product-detail.html"
                                                                    class="text-body font-weight-semibold">Designer Awesome
                                                                    T-Shirt</a>
                                                                <small class="d-block">01024499300101</small>
                                                            </td>
                                                            <td class="text-right">
                                                                SLL 888.00
                                                            </td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                            <!-- end table-responsive -->
                                        </div> <!-- end .border-->


                                    </div>


                                    <div class="tab-pane  " id="cards_tab">



                                        <div class="border mt-0 rounded">
                                            <h4 class="header-title p-2 mb-0 text-danger">My LOANS</h4>

                                            <div class="table-responsive" style="height: 275px;">
                                                <table class="table table-centered table-nowrap mb-0">
                                                    <tbody>
                                                        <tr>
                                                            <td style="width: 10px;">
                                                                <div class="avatar-sm rounded bg-soft-danger">
                                                                    <i
                                                                        class="dripicons-wallet font-4 avatar-title text-danger"></i>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <a href="ecommerce-product-detail.html"
                                                                    class="text-body font-weight-semibold">Savings
                                                                    Account</a>
                                                                <small class="d-block">01024499300101</small>
                                                            </td>

                                                            <td class="text-right">
                                                                GHS 90,039.00
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width: 10px;">
                                                                <div class="avatar-sm rounded bg-soft-danger">
                                                                    <i
                                                                        class="dripicons-wallet font-4 avatar-title text-danger"></i>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <a href="ecommerce-product-detail.html"
                                                                    class="text-body font-weight-semibold">Red Hoodie for
                                                                    men</a>
                                                                <small class="d-block">01024499300101</small>
                                                            </td>
                                                            <td class="text-right">
                                                                USD 5,700.00
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width: 10px;">
                                                                <div class="avatar-sm rounded bg-soft-danger">
                                                                    <i
                                                                        class="dripicons-wallet font-4 avatar-title text-danger"></i>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <a href="ecommerce-product-detail.html"
                                                                    class="text-body font-weight-semibold">Designer Awesome
                                                                    T-Shirt</a>
                                                                <small class="d-block">01024499300101</small>
                                                            </td>
                                                            <td class="text-right">
                                                                SLL 888.00
                                                            </td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                            <!-- end table-responsive -->
                                        </div> <!-- end .border-->


                                    </div>


                                </div>
                            </div>



                        </div> <!-- end card-body -->




                        <!-- Info Alert Modal -->
                        <div id="info-alert-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-sm">
                                <div class="modal-content">
                                    <div class="modal-body p-4">
                                        <div class="text-center">
                                            <i class="dripicons-information h1 text-info"></i>
                                            <h4 class="mt-2">Heads up!</h4>
                                            <p class="mt-3">Cras mattis consectetur purus sit amet fermentum. Cras justo
                                                odio, dapibus ac facilisis in, egestas eget quam.</p>
                                            <button type="button" class="btn btn-info my-2"
                                                data-dismiss="modal">Continue</button>
                                        </div>
                                    </div>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->




                        <!-- Modal -->
                        <div id="multiple-one" class="modal fade" tabindex="-1" role="dialog"
                            aria-labelledby="multiple-oneModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <form action="POST" id="confirm_details" autocomplete="off" aria-autocomplete="off">
                                        <div class="modal-header">
                                            <h4 class="modal-title font-16 purple-color" id="multiple-oneModalLabel">Confirm
                                                Details</h4>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-hidden="true">??</button>
                                        </div>

                                        <div class="modal-body">


                                            <div class="row" id="transaction_summary">


                                                <div class="col-md-12">
                                                    <div class="border p-3 mt-4 mt-lg-0 rounded">
                                                        <h4 class="header-title mb-3">Transfer Detail Summary</h4>

                                                        <div class="table-responsive">
                                                            <table class="table mb-0">

                                                                <tbody>
                                                                    <tr>
                                                                        <td>From Account:</td>
                                                                        <td>
                                                                            <span
                                                                                class="font-13 text-primary text-bold display_from_account_type"
                                                                                id="display_from_account_type"></span>
                                                                            <span
                                                                                class="d-block font-13 text-primary text-bold display_from_account_name"
                                                                                id="display_from_account_name"> </span>
                                                                            <span
                                                                                class="d-block font-13 text-primary text-bold display_from_account_no"
                                                                                id="display_from_account_no"></span>
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td>To Account:</td>
                                                                        <td>

                                                                            <span
                                                                                class="font-13 text-primary text-bold display_to_account_type"
                                                                                id="display_to_account_type"> </span>
                                                                            <span
                                                                                class="d-block font-13 text-primary text-bold display_to_account_name"
                                                                                id="display_to_account_name"> </span>
                                                                            <span
                                                                                class="d-block font-13 text-primary text-bold display_to_account_no"
                                                                                id="display_to_account_no"> </span>
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td>Amount:</td>
                                                                        <td>
                                                                            <span
                                                                                class="font-15 text-primary h3 display_currency"
                                                                                id="display_currency"> </span>
                                                                            &nbsp;
                                                                            <span
                                                                                class="font-15 text-primary h3 display_transfer_amount"
                                                                                id="display_transfer_amount"></span>

                                                                        </td>
                                                                    </tr>


                                                                    <tr>
                                                                        <td>Category:</td>
                                                                        <td>
                                                                            <span
                                                                                class="font-13 text-primary h3 display_category"
                                                                                id="display_category"></span>

                                                                        </td>
                                                                    </tr>


                                                                    <tr>
                                                                        <td>Purpose:</td>
                                                                        <td>
                                                                            <span
                                                                                class="font-13 text-primary h3 display_purpose"
                                                                                id="display_purpose"></span>
                                                                        </td>
                                                                    </tr>


                                                                    <tr>
                                                                        <td>Schedule Payment:</td>
                                                                        <td>
                                                                            <span
                                                                                class="font-13 text-primary h3 display_schedule_payment"
                                                                                id="display_schedule_payment">NO </span>
                                                                            &nbsp; | &nbsp;
                                                                            <span
                                                                                class="font-13 text-primary h3 display_schedule_payment_date"
                                                                                id="display_schedule_payment_date"> N/A
                                                                            </span>
                                                                        </td>
                                                                    </tr>


                                                                    <tr>
                                                                        <td>Transfer Date: </td>
                                                                        <td>
                                                                            <span class="font-13 text-primary h3"
                                                                                id="display_transfer_date">{{ date('d F, Y') }}</span>
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td>Posted BY: </td>
                                                                        <td>
                                                                            <span class="font-13 text-primary h3"
                                                                                id="display_posted_by">Kwabena Ampah</span>
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td>Enter Pin: </td>
                                                                        <td>
                                                                            <div class="form-group">
                                                                                <input type="text" name="user_pin"
                                                                                    class="form-control" id="user_pin"
                                                                                    oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                                                                            </div>
                                                                        </td>
                                                                    </tr>


                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <!-- end table-responsive -->
                                                        <br>
                                                        <div class="form-group text-center">
                                                            <span> <button class="btn btn-secondary btn-rounded"
                                                                    type="button" id="back_button">Back</button> &nbsp;
                                                            </span>
                                                            <span>&nbsp; <button class="btn btn-primary btn-rounded"
                                                                    type="button" id="confirm_button">Confirm Transfer
                                                                </button></span>
                                                            <span>&nbsp; <button class="btn btn-light btn-rounded"
                                                                    type="button" id="receipt_button">Print Receipt
                                                                </button></span>
                                                        </div>
                                                    </div>

                                                </div> <!-- end col -->





                                            </div>


                                        </div>



                                        <div class="modal-footer">
                                            <button type="send" id="send" class="btn btn-primary"
                                                data-target="#multiple-two" data-toggle="modal"
                                                data-dismiss="modal">Send</button>
                                        </div>
                                    </form>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->




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
            <script src="{{ asset('assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
            <script src="{{ asset('assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}"></script>
            <script src="{{ asset('assets/libs/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
            <script src="{{ asset('assets/libs/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
            <script src="{{ asset('assets/libs/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
            <script src="{{ asset('assets/libs/datatables.net-keytable/js/dataTables.keyTable.min.js') }}"></script>
            <script src="{{ asset('assets/libs/datatables.net-select/js/dataTables.select.min.js') }}"></script>
            <script src="{{ asset('assets/libs/pdfmake/build/pdfmake.min.js') }}"></script>
            <script src="{{ asset('assets/libs/pdfmake/build/vfs_fonts.js') }}"></script>
            <!-- third party js ends -->

            <!-- Datatables init -->
            <script src="{{ asset('assets/js/pages/datatables.init.js') }}"></script>

            <script>
                function get_corporate_requests(customerNumber, requestStatus) {
                    var table = $('.pending_transaction_request').DataTable();
                    var nodes = table.rows().nodes();

                    $(".loans_display_area").hide()
                    $(".loans_error_area").hide()
                    $(".loans_loading_area").show()

                    $.ajax({
                        "type": "GET",
                        "url": "get-pending-requests?customerNumber=" + customerNumber + '&requestStatus=' +
                            requestStatus,
                        "datatype": "application/json",

                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(response) {
                            console.log(response);
                            if (response.responseCode == '000') {

                                let data = response.data;

                                table.clear().draw()


                                $.each(data, function(index) {
                                    let request_type = ''
                                    if (data[index].REQUEST_TYPE == 'OWN') {
                                        request_type = 'Own Account Transfer'
                                    } else if (data[index].REQUEST_TYPE == 'SAM') {
                                        request_type = 'Same Bank Transfer'
                                    } else if (data[index].REQUEST_TYPE == 'OBT') {
                                        request_type = 'ACH Transfer'
                                    } else if (data[index].REQUEST_TYPE == 'RTGS') {
                                        request_type = 'RTGS Transfer'
                                    } else if (data[index].REQUEST_TYPE == 'INT') {
                                        request_type = 'International Bank Transfer'
                                    } else {
                                        request_type = 'Others'
                                    }


                                    table.row.add([

                                        request_type,
                                        'o',
                                        data[index].POST_DATE,
                                        data[index].POSTEDBY,
                                        data[index].ACCOUNT_NO,
                                        `
                                                                             <a href="{{ url('approvals-pending-transfer-details') }}"
                                                                                target="_blank">
                                                                                <button type="button"
                                                                                    class="btn btn-sm btn-primary">View</button>
                                                                            </a>
                                                                            `

                                    ]).draw(false)


                                })

                                $(".loans_error_area").hide()
                                $(".loans_loading_area").hide()
                                $(".loans_display_area").show()

                            } else {

                                $(".loans_error_area").hide()
                                $(".loans_loading_area").hide()
                                $(".loans_display_area").show()

                            }

                        },
                        error: function(xhr, status, error) {
                            $(".loans_display_area").hide()
                            $(".loans_loading_area").hide()
                            $(".loans_error_area").show()

                        }

                    })


                }

                $(document).ready(function() {

                    var customer_no = '057725'
                    var request_status = 'P'

                    $('.transfer_tab_btn').click(function() {
                        get_corporate_requests(customer_no, 'P')
                    })
                    get_corporate_requests(customer_no, request_status)
                })

            </script>

        @endsection
