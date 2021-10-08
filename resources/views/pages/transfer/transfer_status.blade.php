@extends('layouts.master')

<style>
    .table td {
        text-align: center;
        font-size: 0.8 rem
    }
</style>
@section('content')

@php
$pageTitle = " TRANSFER STATUS";
$basePath = "Transfer";
$currentPath = "Tansfer Status";
@endphp
<div class="container-fluid hide_on_print">
    <!-- start page title -->
    @include("snippets.pageHeader")
    {{-- </div> --}}
    <div>
        <br>
        <div class="row">
            <br> <br><br>
            <div class="col-12 p-3">
                <div class="container-fluid">
                    <div class=" row">
                        <div class="col-12 m-2 site-card" id="transaction_summary">

                            <div class="table-responsive">

                                <table class="table table-bordered table-striped table-centered mb-0"
                                    id="transfer_status_table">
                                    <thead>
                                        <tr class="bg-info text-white text-center">
                                            <td> <b> Date</b></td>
                                            <td> <b> Beneficiary Name</b></td>
                                            <td> <b> Amount</b></td>
                                            <td> <b> Account Description</b></td>
                                            <td> <b> Account Number</b></td>
                                            <td> <b> Status</b></td>
                                            <td> <b> Action</b></td>
                                        </tr>
                                    </thead>
                                    <tbody id="transfer_status_body">
                                        <td colspan="100%" class="text-center">

                                            {!! $noDataAvailable !!}
                                        </td>

                                    </tbody>
                                </table>
                            </div> <!-- end card body-->
                        </div>
                    </div> <!-- end card-body -->
                </div>

            </div> <!-- end col -->
        </div> <!-- end row -->
    </div>
</div>


<!-- Standard modal content -->
<div id="transfer_status_modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="transfer_status"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title text-danger" id="transfer_status">Transfer Details</h3>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <div class="col-md-12">
                    <h4 class="text-primary">Bank Details</h4>


                    <div class="form-group row">
                        <label class="col-md-5">Bank Name:</label>
                        <span class="col-md-7" id="beneficiary_details_bank_name"></span>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-5">Swift Code:</label>
                        <span class="col-md-7" id="beneficiary_details_bank_swift_code"></span>
                    </div>
                    <hr>

                    <h4 class="text-primary">Account Details</h4>

                    <div class="form-group row">
                        <label class="col-md-5">Account Name:</label>
                        <span class="col-md-7" id="beneficiary_details_account_name"></span>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-5">Account Number:</label>
                        <span class="col-md-7" id="beneficiary_details_account_number"></span>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-5">Currency:</label>
                        <span class="col-md-7" id="beneficiary_details_account_currency"></span>
                    </div>
                    <hr>

                    <h4 class="text-primary">Beneficiary Details </h4>
                    <div class="form-group row">
                        <label class="col-md-5">Nickname:</label>
                        <span class="col-md-7" id="beneficiary_details_name"></span>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-5">Address:</label>
                        <span class="col-md-7" id="beneficiary_details_address"></span>
                    </div>
                    {{-- <div class="form-group row">
                                            <label class="col-md-5">Telephone:</label>
                                            <span class="col-md-7" id="beneficiary_details_telephone"></span>
                                        </div> --}}
                    <div class="form-group row">
                        <label class="col-md-5">Email:</label>
                        <span class="col-md-7" id="beneficiary_details_email"></span>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


@endsection

@section('scripts')
<script>
    const customerNumber = @json(session()->get('customerNumber'));
</script>
<script src="{{ asset("assets/js/pages/transfer/transferStatus.js") }}">

</script>

@endsection