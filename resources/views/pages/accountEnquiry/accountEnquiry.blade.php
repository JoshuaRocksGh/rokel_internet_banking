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


                        <div class="row" style="zoom:0.8;">



                            <div class="col-md-12">

                                <dl class="row">
                                    <dt class="col-sm-3">Description lists</dt>
                                    <dd class="col-sm-9">A description list is perfect for defining terms.</dd>

                                    <dt class="col-sm-3">Euismod</dt>
                                    <dd class="col-sm-9">
                                        <p>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.
                                        </p>
                                        <p>Donec id elit non mi porta gravida at eget metus.</p>
                                    </dd>

                                    <dt class="col-sm-3">Malesuada porta</dt>
                                    <dd class="col-sm-9">Etiam porta sem malesuada magna mollis euismod.</dd>

                                    <dt class="col-sm-3 text-truncate">Truncated term is truncated</dt>
                                    <dd class="col-sm-9">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum
                                        nibh, ut fermentum massa justo sit amet risus.</dd>

                                    <dt class="col-sm-3">Nesting</dt>
                                    <dd class="col-sm-9">
                                        <dl class="row">
                                            <dt class="col-sm-4">Nested definition list</dt>
                                            <dd class="col-sm-8">Aenean posuere, tortor sed cursus feugiat, nunc augue
                                                blandit nunc.</dd>
                                        </dl>
                                    </dd>
                                </dl>

                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class=" p-3 mt-4 mt-lg-0 rounded">
                                            {{-- <h2 class=" m-t-0 text-primary">ACCOUNT BALANCE DETAIL FOR KWABENA AMPAH </h2> --}}

                                            <div class="text-center" id="account_balance_info_loader">
                                                <div class="spinner-border text-primary avatar-sm" role="status"></div>
                                            </div>

                                            <div class="text-center" id="account_balance_info_retry_btn">
                                                <button class="btn btn-sm btn-secondary">retry</button>
                                            </div>

                                            <div class="table-responsive table-bordered" id="account_balance_info_display">



                                                <table class="table mb-0">
                                                    <tbody>
                                                        <tr class="bg-secondary text-white ">
                                                            <td>Account No: <span class="account_number_display"></span>
                                                            </td>
                                                            <td>Account Description: <span
                                                                    class="account_description_display"></span></td>
                                                            <td>Currency <span class="account_currency_display"></span>
                                                            </td>
                                                            <td>Producr: <span class="account_product_display"></span> </td>

                                                        </tr>
                                                        <tr>
                                                            <td> <b>Legder balance : </b></td>
                                                            <td> <span class="account_ledger_bal_display"></span> </td>
                                                            <td>Available Balance</td>
                                                            <td> <span class="account_available_bal_display"></span> </td>
                                                        </tr>
                                                        <tr>
                                                            <td> <b>Amount In Arrears :</b> </td>
                                                            <td> <span class="account_amount_in_arrears_display"></span>
                                                            </td>
                                                            <td> <b>Overdrawn Limit:</b>
                                                            </td>
                                                            <td> <span class="account_overdrawn_limit_display"></span> </td>
                                                        </tr>
                                                        <tr>
                                                            <td> <b>Accrued Credit Interest:</b> </td>
                                                            <td> <span
                                                                    class="account_accrued_credit_interest_display"></span>
                                                            </td>
                                                            <td> <b> Credit Interest Rate:</b> </td>
                                                            <td> <span class="account_credit_interest_rate_display"></span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td> <b>Accrued Debit Interest:</b> </td>
                                                            <td> <span
                                                                    class="account_accrued_debit_interest_display"></span>
                                                            </td>
                                                            <td> <b> Debit Interest Rate:</b> </td>
                                                            <td> <span class="account_debit_interest_rate_display"></span>
                                                            </td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                            <!-- end table-responsive -->
                                        </div>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">


                                        <span class="text-sm-right float-left">

                                            <form class="form-inline">

                                            </form>


                                        </span>

                                        <span class="text-sm-right float-right">
                                            <button type="button" class="btn btn-sm btn-light mb-2 mr-1">Print
                                                Statement</button>
                                            <button type="button" class="btn btn-sm btn-light mb-2">Export</button>
                                        </span>


                                    </div>
                                </div>

                                <div class="row ">

                                    <div class="col-md-12">




                                        <div class=" d-none d-md-inline-block">
                                            <div class="btn-group mb-2">
                                                <button type="button" id="credit_transaction"
                                                    class="btn btn-xs btn-soft-success  waves-effect waves-light">&nbsp;
                                                    Credit &nbsp;</button>
                                                <button type="button" id="debit_transaction"
                                                    class="btn btn-xs btn-soft-danger  waves-effect waves-light">&nbsp;
                                                    Debit &nbsp;</button>
                                                <button type="button" id="all_transaction"
                                                    class="btn btn-xs btn-soft-secondary  waves-effect waves-light">All
                                                    transaction</button>
                                            </div>

                                            &nbsp;
                                            &nbsp;
                                            &nbsp;

                                            <div class="btn-group mb-2">
                                                <input type="text" id="startDate"
                                                    class="form-control date-picker-startDate flatpickr-input input-sm"
                                                    readonly="readonly">
                                                <input type="text" id="endDate"
                                                    class="form-control date-picker-endDate flatpickr-input input-sm"
                                                    readonly="readonly">

                                            </div>

                                            &nbsp;





                                            <div class="btn-group mb-2">
                                                <button type="button" class="btn btn-sm btn-secondary" id="date_search">
                                                    &nbsp; Search &nbsp;</button>
                                                &nbsp;
                                                &nbsp;
                                                &nbsp;
                                                &nbsp;
                                                &nbsp;
                                                &nbsp;
                                                &nbsp;
                                                &nbsp;
                                                &nbsp;
                                                &nbsp;
                                                &nbsp;
                                                <button type="button"
                                                    class="btn btn-xs btn-soft-danger waves-effect waves-light"> &nbsp;
                                                    Print PDF &nbsp;</button>
                                                <button type="button"
                                                    class="btn btn-xs btn-soft-success waves-effect waves-light">&nbsp;
                                                    Export Sheet &nbsp;</button>
                                                <button type="button" class="btn btn-xs btn-secondary">Monthly</button>
                                            </div>

                                        </div>
                                        <br>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="text-center" id="account_transaction_loader">
                                            <div class="spinner-border text-primary avatar-sm" role="status"></div>
                                        </div>


                                        <div class="text-center currency_converter_error_area"
                                            id="account_transaction_retry_btn">
                                            <img src="{{ asset('assets/images/api-error.gif') }}" class="img-fluid" alt=""
                                                style="width: 180px; height:130px;">
                                            <legend></legend>
                                            <button class="btn btn-secondary"> <i class="fe-rotate-ccw"></i> &nbsp; Please
                                                retry</button>
                                        </div>

                                        {{-- <div class="text-center" id="account_transaction_retry_btn">
                                            <button class="btn btn-sm btn-secondary" >retry</button>
                                        </div> --}}
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">

                                        {{-- <table id="datatable-buttons" class="table table-bordered table-striped dt-responsive nowrap w-100"> --}}
                                        <table id="datatable-buttons"
                                            class="table table-bordered table-striped dt-responsive nowrap w-100 account_transaction_display_table">
                                            <thead>
                                                <tr>
                                                    <th>Posting Date</th>
                                                    <th>Value Date</th>
                                                    <th style="width: 190px;">Transaction Details</th>
                                                    <th>Document Ref</th>
                                                    <th>Batch No</th>
                                                    <th>Amount</th>
                                                    <th>Balance</th>
                                                    <th>Attachment</th>
                                                </tr>
                                            </thead>


                                            <tbody id="table-body-display">

                                            </tbody>
                                        </table>
                                    </div>

                                </div>



                                {{-- <h4 class="header-title">Buttons example</h4>
                                            <p class="sub-header font-13">
                                                The Buttons extension for DataTables provides a common set of options, API
                                                methods and styling to display buttons on a page
                                                that will interact with a DataTable. The core library provides the based
                                                framework upon which plug-ins can built.
                                            </p> --}}


                            </div> <!-- end card body-->


                        </div>



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
            // creates multiple instances

        </script>

        <script>
            $("#account_balance_info_display").hide();
            $("#account_balance_info_retry_btn").hide();

            $(".account_transaction_display").hide();
            $(".account_transaction_display_table").hide();
            $("#account_transaction_retry_btn").hide();



            $(document).ready(function() {


                let today = new Date();
                let dd = today.getDate();

                let mm = today.getMonth() + 1;
                const yyyy = today.getFullYear()
                console.log(mm)
                console.log(String(mm).length)
                if (String(mm).length == 1) {
                    mm = '0' + mm
                }

                defaultStartDate = '01-' + mm + '-' + today.getFullYear()
                defaultEndDate = '30-' + mm + '-' + today.getFullYear()

                console.log(defaultStartDate)
                console.log(defaultEndDate)


                $(".date-picker-startDate").flatpickr({
                    altInput: true,
                    altFormat: "j F, Y",
                    dateFormat: "d-m-Y",
                    defaultDate: [defaultStartDate],
                    position: "above"
                })

                $(".date-picker-endDate").flatpickr({
                    altInput: true,
                    altFormat: "j F, Y",
                    dateFormat: "d-m-Y",
                    defaultDate: [defaultEndDate],
                    position: "above"
                })



                var account_number = @json($account_number);
                var start_date = defaultStartDate;
                var end_date = defaultEndDate;
                var transLimit = "10";

                var tranactions = []

                setTimeout(function() {
                    getAccountTransactions(account_number, start_date, end_date, transLimit)
                    getAccountBalanceInfo(account_number);
                }, 2000);


                $('#date_search').click(function() {

                    $(".account_transaction_display").hide();
                    $(".account_transaction_display_table").hide();
                    $("#account_transaction_retry_btn").hide();
                    $("#account_transaction_loader").show();

                    let start_date = $('#startDate').val()
                    let end_date = $('#endDate').val()

                    getAccountTransactions(account_number, start_date, end_date, transLimit)

                    console.log(start_date);
                    console.log(end_date)
                })

                $("#credit_transaction").click(function() {
                    $('#table-body-display').empty()
                    {{-- return false --}}

                    let data = tranactions
                    var load_data = []
                    $.each(data, function(index) {
                        if (parseFloat(data[index].amount) > 0) {
                            {{-- alert(data[index].amount) --}}
                            load_data.push(data[index])
                        } else {

                        }
                    })


                    load_data_into_table(load_data)
                })


                $("#all_transaction").click(function() {
                    $('#table-body-display').empty()

                    let data = tranactions

                    load_data_into_table(tranactions)
                })


                $("#debit_transaction").click(function() {
                    $('#table-body-display').empty()
                    {{-- return false --}}

                    let data = tranactions
                    var load_data = []
                    $.each(data, function(index) {
                        if (parseFloat(data[index].amount) < 0) {
                            {{-- alert(data[index].amount) --}}
                            load_data.push(data[index])
                        } else {

                        }
                    })
                    load_data_into_table(load_data)
                })



                $("#account_balance_info_retry_btn").click(function() {
                    $("#account_balance_info_display").hide();
                    $("#account_balance_info_retry_btn").hide();
                    $("#account_balance_info_loader").show();
                    getAccountBalanceInfo(account_number);
                })


                $("#account_transaction_retry_btn").click(function() {
                    $(".account_transaction_display").hide();
                    $(".account_transaction_display_table").hide();
                    $("#account_transaction_retry_btn").hide();
                    $("#account_transaction_loader").show();
                    let account_number = @json($account_number);
                    let start_date = $('.date-picker-startDate').val();
                    let end_date = $('.date-picker-endDate').val();
                    let transLimit = "10";
                    console.log(start_date)
                    console.log(end_date)
                    console.log(account_number)
                    getAccountTransactions(account_number, start_date, end_date);
                })


                function load_data_into_table(data) {
                    {{-- $('#table-body-display').empty() --}}

                    $("#table-body-display tr").remove();
                    $(".account_transaction_display").hide();
                    $(".account_transaction_display_table").hide();
                    $("#account_transaction_retry_btn").hide();
                    $("#account_transaction_loader").show();

                    $('#table-body-display').html('')
                    var table = $('.account_transaction_display_table').DataTable();
                    var nodes = table.rows().nodes();
                    {{-- table.rows.remove() --}}
                    table.clear().draw()


                    if (data.length > 0) {
                        $.each(data, function(index) {
                            let amount = ``;
                            if (parseFloat(data[index].amount) > 0) {
                                amount = `<b class='text-success'>
                                                                                                    <i class="fe-arrow-up text-success mr-1"></i>
                                                                                                    ${data[index].amount}
                                                                                                </b>
                                                                                                `
                            } else {
                                amount = `<b class='text-danger'>
                                                                                                    <i class="fe-arrow-down text-danger mr-1"></i>
                                                                                                    ${data[index].amount}
                                                                                                </b>
                                                                                                `
                            }

                            let attachment = ``

                            if (data[index].imageCheck == "0") {
                                attachment =
                                    `<i  class="fe-minus text-secondary">`
                            } else {
                                attachment =
                                    `<i class="fe-file-text text-danger">`
                            }


                            table.row.add([
                                data[index].postingSysDate,
                                data[index].valueDate,
                                data[index].narration,
                                data[index].documentReference,
                                `<a type="button" data-toggle="modal"
                                                                                    data-target="#bs-example-modal-xl"
                                                                                    class="text-primary">${data[index].batchNumber}</a>`,
                                amount,
                                `${data[index].runningBalance}`,
                                `${attachment}`


                            ]).draw(false)


                        })
                    } else {

                    }


                    $("#account_transaction_loader").hide();
                    $("#account_transaction_retry_btn").hide();
                    $(".account_transaction_display_table").show();
                    $(".account_transaction_display").show();

                }


                function getAccountTransactions(account_number, start_date, end_date, transLimit) {
                    var table = $('.account_transaction_display_table').DataTable();
                    var nodes = table.rows().nodes();


                    $.ajax({
                        "type": "POST",
                        "url": "account-transaction-history",
                        "datatype": "application/json",
                        "data": {
                            "accountNumber": account_number,
                            "endDate": end_date,
                            "entrySource": "A",
                            "startDate": start_date,
                            "transLimit": transLimit
                        },
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(response) {
                            console.log(response);
                            if (response.responseCode == '000') {

                                tranactions = response.data

                                load_data_into_table(tranactions)

                                $("#account_transaction_loader").hide();
                                $("#account_transaction_retry_btn").hide();
                                $(".account_transaction_display_table").show();
                                $(".account_transaction_display").show();

                            } else {
                                $("#account_transaction_loader").hide();
                                $(".account_transaction_display").hide();
                                $(".account_transaction_display_table").hide();
                                $("#account_transaction_retry_btn").show();
                            }

                        },
                        error: function(xhr, status, error) {
                            $("#account_transaction_loader").hide();
                            $(".account_transaction_display").hide();
                            $(".account_transaction_display_table").hide();
                            $("#account_transaction_retry_btn").show();
                        }
                    })
                }


                function getAccountBalanceInfo($account_number) {
                    $.ajax({
                        "type": "POST",
                        "url": "api/account-balance-info",
                        "datatype": "application/json",
                        "data": {
                            "accountNumber": account_number,
                            "authToken": "15D2A303-98FD-43A6-86E4-F24FC7436069",
                            "endDate": "",
                            "entrySource": "A",
                            "startDate": "",
                            "transLimit": "string"
                        },
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(response) {
                            console.log(response);
                            if (response.responseCode == '000') {



                                let account_info = response.data;
                                console.log(account_info)
                                $('.account_number_display').text(account_info.ACCOUNT_NUMBER)
                                $('.account_description_display').text(account_info.ACCOUNT_DESCRIPTION)
                                $('.account_currency_display').text(account_info.CURRENCY)
                                $('.account_product_display').text(account_info.PRODUCT)

                                $('.account_ledger_bal_display').text(account_info.LEGDER_BALANCE)
                                $('.account_available_bal_display').text(account_info.AVAILABLE_BALANCE)
                                $('.account_amount_in_arrears_display').text(account_info
                                    .AMOUNT_IN_ARREAS)
                                $('.account_overdrawn_limit_display').text(account_info.OVERDRAFT_LIMIT)
                                $('.account_accrued_credit_interest_display').text(account_info
                                    .ACCRUED_CREDIT_INTREST)
                                $('.account_credit_interest_rate_display').text(account_info
                                    .CREDIT_INTEREST_RATE)
                                $('.account_accrued_debit_interest_display').text(account_info
                                    .ACCRUED_DEBIT_INTEREST)
                                $('.account_debit_interest_rate_display').text(account_info
                                    .DEBIT_INTERST_RATE)

                                $("#account_balance_info_loader").hide();
                                $("#account_balance_info_retry_btn").hide();
                                $("#account_balance_info_display").show();

                            } else {
                                $("#account_balance_info_loader").hide();
                                $("#account_balance_info_display").hide();
                                $("#account_balance_info_retry_btn").show();
                            }
                        },
                        error: function(xhr, status, error) {
                            $("#account_balance_info_loader").hide();
                            $("#account_balance_info_display").hide();
                            $("#account_balance_info_retry_btn").show();
                        }
                    })
                }





            })

        </script>

    @endsection
