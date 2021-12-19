@extends('layouts.print')
@section("styles")
<style>
    .details-label {
        width: 8rem;
        display: inline-block;
    }

    table tr td {
        padding: 5px;
    }
</style>
@endsection
@section('content')


<div class="card-body">
    <div class="row">
        <table class="table table-centered table-striped" id="test">
            <thead>
                <tr>
                    <th colspan="3" style="height: 150px"> <img src="{{ asset('assets/images/rokel_logo.png') }}">
                    </th>
                    <th><span class="h3">ROKEL COMMERCIAL BANK</span><br>
                        <span class="h5"> 25-27 Siaka Stevens Street</span><br>
                        <span class="h5"> Freetown, Sierra Leone</span><br>
                        <span class="h5"> rokelsl@rokelbank.sl</span><br>
                        <span class="h5"> (+232)-76-22-25-01</span>
                    </th>
                </tr>
                <tr bgcolor='#87AFC6' style="background-color: #dce0e1!important;">
                    <th class="py-2" colspan="2" style="height: 150px">
                        <span class="h3"> <b>Account Details</b> </span><br>
                        <span class="h5 "><span class="details-label">Account Name: </span><b
                                id="account_description"></b>
                        </span><br>
                        <span class="h5"><span class="details-label">Account Number: </span><b id="account_number"></b>
                        </span><br>
                        <span class="h5"><span class="details-label">Account Product: </span><b
                                id="account_product"></b>
                        </span><br>

                    </th>
                    <th colspan="2" style="height: 150px" class="py-2">
                        <span class="h3"> <b>Balance Details</b> </span><br>
                        <span class="h5"><span class="details-label">Account Currency: </span><b
                                class="account_currency"></b>
                        </span><br>
                        <span class="h5"><span class="details-label">Book Balance : </span><b
                                id="account_legder_balance"></b> </span><br>
                        <span class="h5"><span class="details-label">Cleared Balance : </span><b
                                id="account_available_balance"></b>
                        </span><br>
                    </th>
                    <th colspan="2" style="height: 150px" class="py-2">
                        <span class="h3"> <b>Statement Details</b> </span><br>
                        <span class="h5"><span class="details-label">From: </span><b id="start_date"></b></span><br>
                        <span class="h5"><span class="details-label">To: </span><b id="end_date"></b> </span><br>
                        <span class="h5"><span class="details-label">Requested On: </span><b id="request_date">{{ $date
                                =
                                date('Y-m-d') }}</b> </span><br>

                    </th>
                </tr>
                {{-- <tr class="___class_+?3___">
                    <th colspan="7">
                        <div class="row">
                            <img src="{{ asset('assets/images/rokel_logo.png') }}" alt=""
                                class="img-fluid ml-1 mr-3 mb-3">
                            <div class="mb-3 ml-2">
                                <span class="h3">ROKEL COMMERCIAL BANK</span><br>
                                <span class="h5"> 25-27 Siaka Stevens Street</span><br>
                                <span class="h5"> Freetown, Sierra Leone</span><br>
                                <span class="h5"> rokelsl@rokelbank.sl</span><br>
                                <span class="h5"> (+232)-76-22-25-01</span>
                            </div>
                        </div>
                    </th>
                </tr> --}}
                {{--
                <tr style="background-color: #dce0e1!important;">
                    <th colspan="7">

                        <div class="d-md-flex justify-content-around mx-auto " style="max-width: 1524px">
                            <div class="py-2">
                                <h3> <b>Account Details</b> </h3>
                                <h5><span class="details-label">Account Name: </span><b id="account_description"></b>
                                </h5>
                                <h5><span class="details-label">Account Number: </span><b id="account_number"></b>
                                </h5>
                                <h5><span class="details-label">Account Product: </span><b id="account_product"></b>
                                </h5>

                            </div>

                            <div class="py-2">
                                <h3> <b>Balance Details</b> </h3>
                                <h5><span class="details-label">Account Currency: </span><b
                                        class="account_currency"></b>
                                </h5>
                                <h5><span class="details-label">Book Balance : </span><b
                                        id="account_legder_balance"></b> </h5>
                                <h5><span class="details-label">Cleared Balance : </span><b
                                        id="account_available_balance"></b></h5>
                            </div>

                            <div class="py-2">
                                <h3> <b>Statement Details</b> </h3>
                                <h5><span class="details-label">From: </span><b id="start_date"></b></h5>
                                <h5><span class="details-label">To: </span><b id="end_date"></b> </h5>
                                <h5><span class="details-label">Requested On: </span><b id="request_date">{{ $date =
                                        date('Y-m-d') }}</b> </h5>

                            </div>
                        </div>



                    </th>

                </tr> --}}


                <tr bgColor="#4fc6e1" style="height: 20px" class="bg-info text-center text-dark ">
                    <th style="width: 140px">Value Date</th>
                    <th style="width: 180px">Amount (<span class="account_currency">SLL</span>)<span
                            class="account_number_display_"></span>
                    </th>
                    <th style="width: 180px">Balance (<span class="account_currency">SLL</span>)<span
                            class="account_description_display_"></span></th>
                    {{-- <td>Explanation <span class="account_currency_display_"></span> </td> --}}
                    <th>Transaction Details <span class="account_product_display_"></span> </th>
                    <th style="width: 200px">Document Ref <span class="___class_+?41___"></span> </th>
                    <th style="width: 150px">Batch No</th>
                </tr>

            </thead>
            <tbody id="transaction_history" style="min-height: 250px">
                <td colspan="100%" class="text-center">
                    {!! $noDataAvailable !!}
                </td>
            </tbody>
        </table>
    </div>
</div>




@endsection


@section('scripts')


@include("extras.datatables")
<script src="{{ asset('assets/js/functions/exportToExcel.js') }}"></script>
<script>
    const pageData = new Object ()
    $(document).ready(function() {
            var account_number = @json($account_number);
            var start_date = @json($start_date);
            var end_date = @json($end_date);
            var transLimit = '10';

                
                getAccounts().then((res) => { const accountInfo = res.data.find( account => account.accountNumber ===account_number);
                 // account Details   
                    $("#account_number").text(accountInfo.accountNumber)
                    $("#account_description").text(accountInfo.accountDesc)
                    $("#account_product").text(accountInfo.accountType)
                    $("#start_date").text(start_date)
                    $("#end_date").text(end_date)
                    console.log(accountInfo)
                //balance Details
                    $(".account_currency").text(accountInfo.currency)
                    $("#account_legder_balance").text(formatToCurrency(accountInfo.ledgerBalance))
                    $("#account_available_balance").text(formatToCurrency(accountInfo.availableBalance))
})

blockUi({block:"#transaction_history", message: "getting transactions ... please wait", size: "50px"})
getAccountTransactions(account_number, start_date, end_date, transLimit)
            function getAccountTransactions(account_number, start_date, end_date, transLimit) {
               return $.ajax({
                    "type": "POST",
                    "url": "account-transaction-history",
                    datatype: "application/json",
                    data: {
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
                        unblockUi("#transaction_history")
                        if (response.responseCode == '000') {
                            transactions = response.data
                            $("#transaction_history").empty();
                            load_data_into_table(transactions, account_number, start_date, end_date)
                        }else{
                            toaster(response.message, "error")
                        }
                    },
                    error: function(xhr, status, error) {
                        setTimeout(function() {
                            getAccountTransactions(account_number, start_date, end_date,
                                transLimit)
                        }, $.ajaxSetup().retryAfter)
                    }
                })
            }



            function load_data_into_table(data, account_number, start_date, end_date) {

                if (data.length > 0) {
                    
                    $.each(data, function(index) {

                        let today = new Date(data[index].postingSysDate);
                        let dd = String(today.getDate()).padStart(2, '0');
                        let mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
                        let yyyy = today.getFullYear();
                        let debit = `
                        
                        <tr>
                            <td>${dd + '/' + mm + '/' + yyyy}</td>
                            <td class="text-right">${formatToCurrency(parseFloat(data[index].amount))}</td>
                            <td class="text-right">${formatToCurrency(parseFloat(data[index].runningBalance))}</td>
                            <td>${data[index].narration}</td>
                            <td>${data[index].documentReference}</td>
                            <td>${data[index].batchNumber}</td>
                        </tr>
                        `;
                        $('#transaction_history').append(debit)
                    })
                        // window.print();
                        // window.close();
                }
            }
        })
</script>

@endsection