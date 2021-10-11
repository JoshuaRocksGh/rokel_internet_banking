@include("snippets.pageHeader")
<div class="row">
    <div class="col-12 py-3 px-5">
        @include("snippets.pinCodeModal")
        <div class="form_process row">
            @include('snippets.transfer.bank_transfer_form')
            @include('snippets.transactionSummary')
            @include('snippets.transfer.transfers_detail_view')
        </div>
        <div class="col-md-10">
            <hr>
        </div>
    </div>
</div>
<script>
    var transferType = @json($currentPath) 
</script>
<script src="{{ asset('assets/js/pages/transfer/transfersMaster.js') }}" defer></script>
<script src="{{ asset('assets/js/functions/validateEmail.js') }}" defer></script>
<script src="{{ asset('assets/js/functions/currencyConverter.js') }}" defer></script>