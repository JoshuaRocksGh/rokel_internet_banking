@extends('layouts.master')

@section('styles')
<style>
    @media print {
        .hide_on_print {
            display: none
        }
    }

    @font-face {
        font-family: 'password';
        font-style: normal;
        font-weight: 400;
        font-size: 40px;
        src: url(https://jsbin-user-assets.s3.amazonaws.com/rafaelcastrocouto/password.ttf);
    }

    input.key {
        font-family: 'password';
        width: 300px;
        height: 80px;
        font-size: 100px;
    }

    .table_over_flow {
        overflow-y: hidden;

    }
</style>

@endsection

@section('content')

<div>
    @php
    $pageTitle = "TRANSFER BENEFICIARY LIST";
    $basePath = "Transfer";
    $currentPath = "Transfer Beneficiary";
    @endphp
    @include("snippets.pageHeader")

    <div class="p-3">
        <div class="site-card ">
            <div class="row">
                <div class="col-md-12">
                    <div class="row justify-content-end">
                        <div class="dropdown drop-left text-sm-right">
                            <button type="button" class="btn btn-primary dropdown-toggle btn-rounded"
                                data-toggle="dropdown" id="dropdownMenuButton"> Add
                                Beneficiary </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="{{ url('add-same-bank-beneficiary') }}">Same
                                    Bank</a>
                                <a class="dropdown-item" href="{{ url('add-local-bank-beneficiary') }}">Other
                                    Local Bank
                                </a>
                                <a class="dropdown-item"
                                    href="{{ url('add-international-bank-beneficiary') }}">International
                                    Bank </a>
                            </div>
                        </div>
                    </div>
                    <div class="p-3 mt-3 rounded-lg m-2 customize_card table-responsive" id="transaction_summary">
                        {{-- style="background-image: linear-gradient(to bottom right, rgba(255, 255, 255, 0.5), rgb(223, 225, 226));"> --}}
                        <table id="datatable-buttons"
                            class="table table-bordered table-striped table-centered dt-responsive w-100 mb-0 beneficiary_list_display">
                            <thead>
                                <tr class="bg-info text-white">
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
                </div> <!-- end card body-->
            </div>
            {{-- <div class="col-md-1"></div> --}}
        </div> <!-- end card-body -->
    </div> <!-- end col -->



    <div class="modal fade" id="edit_modal" data-backdrop="static" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Beneficiary</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row" id="transaction_form">
                            <ul class="nav nav-fill nav-pills mb-3" id="details_tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="bank_details_tab" data-toggle="pill"
                                        href="#bank_details" role="tab" aria-controls="bank_details"
                                        aria-selected="true">Bank
                                        Details</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="account_details_tab" data-toggle="pill"
                                        href="#account_details" role="tab" aria-controls="account_details"
                                        aria-selected="false">Account
                                        Details</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="personal_details_tab" data-toggle="pill"
                                        href="#personal_details" role="tab" aria-controls="personal_details"
                                        aria-selected="false">Personal
                                        Details</a>
                                </li>
                            </ul>
                            <div class="tab-content w-100" id="pills-tabContent">
                                <div class="tab-pane fade w-100 show active" id="bank_details" role="tabpanel"
                                    aria-labelledby="bank_details_tab">
                                    <div class="form-group row">
                                        <label class="col-4"> Select Bank:<span class="text-danger">*</span></label>
                                        <div class="col-8">
                                            <input type="hidden" value="" id="bank_i">
                                            <select class="custom-select " id="select_bank" required>
                                                <option value="">Select Bank</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-4">Bank Swift Code:<span class="text-danger">*</span></label>
                                        <div class="col-8">
                                            <input type="text" class="form-control" id="swift_code"
                                                placeholder="Bank Swift Code" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade w-100 show active" id="account_details" role="tabpanel"
                                    aria-labelledby="account_details_tab">
                                    <div class="form-group row">
                                        <label class="col-4">Account Number:<span class="text-danger">*</span></label>
                                        <div class="col-8">
                                            <input type="number" class="form-control" id="account_number"
                                                placeholder="Account Number" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-4">Account Name:<span class="text-danger">*</span></label>
                                        <div class="col-8">
                                            <input type="text" class="form-control" id="account_name"
                                                placeholder="Account Name" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-4">Account Currency:<span class="text-danger">*</span></label>
                                        <div class="col-8">
                                            <input type="hidden" value="" id="currency_i">
                                            <select class="custom-select" id="select_currency" required>
                                                <option value="">Select Currency</option>

                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="personal_details" role="tabpanel"
                                    aria-labelledby="personal_details_tab">
                                    <div class="form-group row ">
                                        <label class="col-4">Beneficiary Name:<span class="text-danger">*</span></label>
                                        <div class="col-8">
                                            <input type="text" class="form-control" id="beneficiary_name"
                                                placeholder="Beneficiary Name" required>
                                        </div>

                                    </div>
                                    <br>
                                    <div class="form-group row">
                                        <label class="col-4">Beneficiary Address:<span
                                                class="text-danger">*</span></label>
                                        <div class="col-8">
                                            <input type="text" class="form-control" id="beneficiary_address"
                                                placeholder="Beneficiary Address" required>
                                        </div>

                                    </div>
                                    <div class="form-group row">
                                        <label class="col-4">Beneficiary Phone Number:<span
                                                class="text-danger">*</span></label>
                                        <div class="col-8">
                                            <input type="number" class="form-control" id="beneficiary_number"
                                                placeholder="Beneficiary Phone Number" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-4">Beneficiary Email:<span
                                                class="text-danger">*</span></label>
                                        <div class="col-8">
                                            <input type="email" class="form-control" id="beneficiary_email"
                                                placeholder="Beneficiary Email" required>
                                        </div>
                                    </div>

                                    <div class="form-group">

                                        <div class="checkbox checkbox-primary mb-2" id="transfer_email">
                                            <input id="checkbox2" type="checkbox">
                                            <label class="custom-control-label" for="checkbox2">
                                                Email beneficiary when a transfer is made
                                            </label>
                                        </div>

                                    </div>
                                    {{-- 
                                    <p class="sub-header font-13">
                                        Providing beneficiary email and checking
                                        the box, enables us to send an alert mail to
                                        the beneficiary each time a transfer is made
                                    </p> --}}
                                </div>

                            </div>

                        </div>
                    </div>
                    {{-- <div class="col-md-6">
                                    <label class="purple-color"> Personal Details</label>
                                    
                                    <button class="btn btn-primary btn-rounded waves-effect waves-light"
                                        type="submit" id="save_beneficiary_next">Next</button>
                                    </form>


                                    <form action="#" method="POST" id="local_bank_beneficiary_summary"
                                        autocomplete="off" aria-autocomplete="off">
                                        <div class="card-box">
                                            @csrf
                                            <div class="form-group">
                                                <label class="purple-color"> Bank Details
                                                    Summary</label>
                                            </div>
                                            <div class="form-group">
                                                <label> Select Bank:&emsp;</label>
                                                <span class="font-weight-light mr-2"
                                                    id="display_selected_bank"> &nbsp</span>
                                            </div>
                                            <div class="form-group">
                                                <label>Account Number:&emsp;</label><span
                                                    class="font-weight-light mr-2"
                                                    id="display_account_number"> &nbsp</span>


                                            </div>
                                            <div class="form-group">
                                                <label>Account Name:&emsp;</label><span
                                                    class="font-weight-light mr-2"
                                                    id="display_account_name"> &nbsp</span>


                                            </div>
                                            <div class="form-group">
                                                <label>Account Currency:&emsp;</label><span
                                                    class="font-weight-light mr-2"
                                                    id="display_account_currency"> &nbsp</span>


                                            </div>
                                            <div class="form-group">
                                                <label>Bank Swift Code:&emsp;</label><span
                                                    class="font-weight-light mr-2"
                                                    id="display_swift_code"> &nbsp</span>


                                            </div>

                                            <br>


                                            <div class="form-group">
                                                <label>Beneficiary Name:&emsp;</label><span
                                                    class="font-weight-light mr-2"
                                                    id="display_beneficiary_name"> &nbsp</span>


                                            </div>

                                            <div class="form-group">
                                                <label>Beneficiary Address:&emsp;</label><span
                                                    class="font-weight-light mr-2"
                                                    id="display_beneficiary_address"> &nbsp</span>


                                            </div>
                                            <div class="form-group">
                                                <label>Beneficiary Phone Number:&emsp;</label><span
                                                    class="font-weight-light mr-2"
                                                    id="display_beneficiary_phone"> &nbsp</span>


                                            </div>
                                            <div class="form-group">
                                                <label>Beneficiary Email:&emsp;</label><span
                                                    class="font-weight-light mr-2"
                                                    id="display_beneficiary_email"> &nbsp</span>


                                            </div>

                                            <div class="form-group">

                                            </div>

                                            <div class="form-group">

                                                <div class="">
                                                    <label>Email beneficiary when a transfer is
                                                        made:&emsp;</label><span
                                                        class="font-weight-light mr-2"
                                                        id="display_transfer_email"> &nbsp</span>

                                                </div>

                                            </div>
                                            <button type="submit"
                                                class="btn btn-secondary btn-rounded waves-effect waves-light"
                                                id="save_beneficiary_back">Back</button>&emsp;&emsp;
                                            <button
                                                class="btn btn-primary btn-rounded waves-effect waves-light"
                                                type="submit" id="save_beneficiary">Save
                                                Beneficiary</button>
                                        </div>
                                    </form>

                                </div> <!-- end col --> --}}
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Delete</button>
                    <div> <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection

    @section('scripts')
    <script src="{{ asset("assets/js/pages/transfer/beneficiaryList.js") }}">

    </script>
    @endsection