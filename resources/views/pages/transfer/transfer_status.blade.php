@extends('layouts.master')

<style>
    .table td {
        text-align: center;
        font-size: 0.8 rem
    }

    .table-sm {
        font-size: 0.8rem !important;
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
                <h3 class="modal-title text-primary" id="transfer_status">Transfer Details</h3>
            </div>
            <div class="modal-body">
                <h4 class="text-primary">Sender Info</h4>
                <table class="table table-bordered table-sm">
                    <tbody>
                        <tr>
                            <th class="col-5"> Account Name</th>
                            <td id="sender_name"></td>
                        </tr>
                        <tr>
                            <th class="col-5"> Account Number:</th>
                            <td id="sender_account"></td>
                        </tr>
                        <tr>
                            <th class="col-5"> Customer Number</th>
                            <td id="sender_customer_number"></td>
                        </tr>
                    </tbody>
                </table>
                <h4 class="text-primary">Beneficiary Info</h4>

                <table class="table table-bordered table-sm">
                    <tbody>
                        <tr>
                            <th class="col-5">Beneficiary Name</th>
                            <td id="beneficiary_name"></td>
                        </tr>
                        <tr>
                            <th class="col-5">Beneficiary Account Number:</th>
                            <td id="beneficiary_account"></td>
                        </tr>
                        <tr>
                            <th class="col-5">Beneficiary Bank</th>
                            <td id="beneficiary_bank"></td>
                        </tr>
                    </tbody>
                </table>
                <h4 class="text-primary">Beneficiary Info</h4>

                <table class="table table-bordered table-sm">
                    <tbody>
                        <tr>
                            <th class="col-5">Amount</th>
                            <td id="transfer_amount"></td>
                        </tr>
                        <tr>
                            <th class="col-5">Batch Number</th>
                            <td id="batch_number"></td>
                        </tr>
                        <tr>
                            <th class="col-5">Channel</th>
                            <td id="transfer_channel"></td>
                        </tr>
                        <tr>
                            <th class="col-5">Transfer Date</th>
                            <td id="transfer_date"></td>
                        </tr>
                        <tr>
                            <th class="col-5">Transfer Stage</th>
                            <td id="transfer_stage"></td>
                        </tr>
                        <tr>
                            <th class="col-5">Transfer Status</th>
                            <td id="transfer_status"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
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