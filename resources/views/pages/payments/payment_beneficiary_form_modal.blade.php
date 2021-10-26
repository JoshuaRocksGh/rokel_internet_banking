<style>
    .modal-footer button {
        width: 5rem;
    }

    #progressbar {
        position: sticky;
        display: flex;
        place-content: center;
        margin-bottom: 30px;
        overflow: hidden;
        padding: 0px;
        margin: 0 0 1rem 0;

    }


    #progressbar li {
        list-style-type: none;
        font-size: 12px;
        width: 30%;
        /* float: left; */
        position: relative
    }


    #progressbar li:before {
        width: 30px;
        height: 30px;
        line-height: 30px;
        display: block;
        font-size: 16px;
        color: #ffffff;
        background: lightgray;
        border-radius: 50%;
        margin: auto auto auto auto;
        margin-bottom: 5px;
    }

    #progressbar li:after {
        content: '';
        width: 100%;
        height: 2px;
        background: lightgray;
        position: absolute;
        left: 0;
        top: 15px;
        z-index: -1
    }

    #progressbar li.active:before,
    #progressbar li.active:after {
        background: #17a2b8 box-shadow: rgb(0 0 0 / 24%) 2px 2px 1px, rgb(0 0 0 / 24%) -1px -1px 28px;
    }
</style>

<div class="modal fade" id="edit_modal" data-backdrop="static" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header bg-info" id="beneficiary_form_header">
                <h5 class="modal-title text-white text-capitalize font-weight-bold" id="beneficiary_form_title">
                    Beneficiary Form</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="">
                    <!-- progressbar -->
                    <div class="text-center">
                        <img src="assets/images/add.png" style="height: 50px" class="active fas fa-money-check-alt">

                        <div>
                            <h3 class="font-16 font-weight-bold">Beneficiary
                                Info</h3>
                        </div>
                    </div>
                    <div class="current-fs first-fs" data-value="account">
                        <div class="row mb-2">
                            <label class="col-md-12 font-14 text-capitalize " id="subtype_label">
                            </label>
                            <div class="col-md-12">
                                <select class="form-control " id="select_payment_sub_type"
                                    placeholder="--- Not Selected ---">
                                </select>
                            </div>
                        </div>

                        <div class="row mb-2">
                            <label class="col-12 font-14 text-capitalize" id="payment_label"></label>
                            <div class="col-12">
                                <input type="number" class="form-control" id="payment_label_input" placeholder="">
                            </div>

                        </div>
                        <div class="row mb-2" id="account_name_display">
                            <label class="col-12 font-14 text-capitalize">Name:</label>
                            <div class="col-12">
                                <input type="text" class="form-control" id="beneficiary_name"
                                    placeholder="Enter beneficiary name">
                            </div>
                        </div>

                    </div>
                </form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" id="delete_btn">Delete</button>

                <button type="button" class="btn btn-primary next action-button">Save</button>
            </div>
        </div>
    </div>
</div>
<span id="beneficiary_modal_backup" hidden disabled style="display: none"></span>
<script src="assets/js/pages/payments/paymentBeneficiaryForm.js">
</script>
<script src="assets/js/functions/validateEmail.js">
</script>