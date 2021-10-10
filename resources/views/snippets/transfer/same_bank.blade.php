<style>
    .tab-pane.active {
        animation: slide-right 300ms ease-out;
    }

    @keyframes slide-right {
        0% {
            opacity: 0;
            transform: translateX(100%);
        }

        100% {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes fadein {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    .switch-text {
        position: absolute;
        left: 70%;
        transform: translate(-50%, -50%);
    }

    .switch {
        border-radius: 33px !important;
        height: 2rem;
        border: 1px solid #dbdee0 !important;
        font-size: 0.75rem;
        line-height: normal;
        /* left: 2px; */
        background-color: white;
        color: #6c757d;
        animation: fadein 1000ms;
        font-weight: bold
    }

    .switch:hover {
        border-color: #00bdf3 !important
    }

    .switch .leftbtn {
        border-radius: 0 50% 50% 0
    }

    .switch.active {
        background-color: #00bdf3 !important;
        color: white;
    }


    .next-button {
        height: 2rem !important;
        font-size: 0.9rem !important;
        margin-top: 2rem !important;
        line-height: normal !important;
    }
</style>

<div class=" col-md-7 site-card m-2" id="transaction_form"> <br>
    <div class="container">
        <form action="#" id="payment_details_form" autocomplete="off" aria-autocomplete="none">
            @csrf
            <div class="row px-2 justify-content-center">
                <div class="col">
                    <div class=" mb-1 row ">
                        <b class="col-md-12 text-primary">Account to transfer from</b>

                        <select class="form-control col-md-12" id="from_account" required>
                            <option disabled selected value=""> -- Select Account --
                            </option>
                            @include("snippets.accounts")
                        </select>

                    </div>
                    <hr class="my-2">
                    <div class="mb-2">
                        <ul class="nav w-100 active nav-fill nav-pills" id="onetime_bene_tab" role="tablist">
                            <li class="nav-item w-50" role="presentation" style="position: absolute">
                                <button class="switch w-100  nav-link" id="beneficiary_tab" data-toggle="pill"
                                    href="#beneficiary_view" type="button" role="tab" aria-controls="beneficiary_view"
                                    aria-selected="false">
                                    Beneficiary</button>
                            </li>
                            <li class="nav-item w-50" role="presentation">
                                <button class=" switch leftbtn w-100 nav-link active" id="onetime_tab"
                                    data-toggle="pill" href="#onetime_view" type="button" role="tab"
                                    aria-controls="onetime_view" aria-selected="true">
                                    <div class="switch-text">Onetime</div>
                                </button>
                            </li>

                        </ul>
                    </div>
                    <div class="tab-content" id="onetime_bene_tabContent">
                        {{-- onetime view --}}
                        <div class="tab-pane fade " id="onetime_view" role="tabpanel" aria-labelledby="onetime_tab">
                            <div class="col-12">
                                <div class="form-group row">
                                    <b class="col-md-4 text-primary"> Beneficiary A/C
                                        Number</b>
                                    <input type="text" class="form-control col-md-8 " id="onetime_account_number"
                                        placeholder="Enter Account Number"
                                        oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                                </div>

                                <div class="form-group row">
                                    <b class="col-md-4 text-primary"> Beneficiary A/C Name</b>
                                    <input type="text" class="form-control col-md-8 readOnly"
                                        id="onetime_beneficiary_name" readonly>
                                </div>
                                <div class="form-group row">
                                    <b class="col-md-4 text-primary"> Beneficiary Email</b>
                                    <input type="text" class="form-control col-md-8 " id="onetime_beneficiary_email"
                                        placeholder="Enter Beneficiary Email">
                                </div>
                            </div>
                        </div>
                        {{-- bene view --}}
                        <div class="tab-pane fade show active" id="beneficiary_view" role="tabpanel"
                            aria-labelledby="beneficiary_tab">
                            <div class="col-12">
                                <div class="form-group row">
                                    <b class="col-md-4 text-primary"> Select Beneficiary</b>
                                    <select class="form-control col-md-8 select_beneficiary" id="to_account" required>
                                        <option disabled selected value=""> -- Select
                                            Beneficiary --</option>
                                    </select>
                                </div>
                                <div class="form-group row">
                                    <b class="col-md-4 text-primary"> Beneficiary A/C
                                        Number</b>
                                    <input type="text" class="form-control col-md-8 readOnly"
                                        id="saved_beneficiary_account_number" readonly>
                                </div>

                                <div class="form-group row">
                                    <b class="col-md-4 text-primary"> Beneficiary Name</b>
                                    <input type="text" class="form-control col-md-8 readOnly "
                                        id="saved_beneficiary_name" readonly>
                                </div>
                                <div class="form-group row">
                                    <b class="col-md-4 text-primary"> Beneficiary Email</b>
                                    <input type="text" class="form-control col-md-8 readOnly"
                                        id="saved_beneficiary_email" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">

                        <div class="form-group row">

                            <b class="col-md-4 text-primary">Actual Amount</b>

                            <div class="input-group mb-1 col-md-8" style="padding: 0px;">
                                <div class="input-group-prepend">
                                    <input type="text" class="input-group-text account_currency " style="width: 80px;"
                                        readonly>
                                </div>

                                &nbsp;&nbsp;
                                <input type="text" class="form-control " id="amount"
                                    oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1')"
                                    required>
                            </div>
                        </div>
                        {{-- <div class="form-group row">
                            <b class="col-md-4 text-primary"> Cur / Rate / Amount</b>
                            <div class="input-group mb-1 col-md-8" style="padding: 0px;">
                                <div class="input-group-prepend">
                                    <select name="" class="input-group-text select_conversion_currency"
                                        id="conversion_currency">
                                    </select>
                                </div>
                                &nbsp;&nbsp;
                                <div class="input-group-prepend">
                                    <input type="text" class="form-control readOnly " id="convertor_rate" value="1.00"
                                        style="width: 80px;" readonly>
                                </div>
                                &nbsp;&nbsp;
                                <input type="text" class="form-control" id="converted_amount"
                                    placeholder="Converted Amount" aria-label="converted_amount"
                                    aria-describedby="basic-addon1" readonly>
                            </div>
                        </div> --}}
                        <div class="form-group row">
                            <b class="col-md-4 text-primary">Purpose of Transfer

                            </b>
                            <input type="text" class="form-control col-md-8" id="purpose"
                                placeholder="Enter purpose of transaction" class="form-group row mb-3">
                        </div>
                        <div class="form-group row">
                            <b class="col-md-4 text-primary">Expense Category &nbsp;
                            </b>
                            <input type="hidden" value="Others" id="category_">


                            <select class="form-control col-md-8" id="category" required>
                                <option disabled selected value="">-- Select expense
                                    category --
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group text-right yes_beneficiary">
                        <button class="btn btn-primary next-button btn-rounded" type="button" id="next_button">
                            &nbsp; Next &nbsp;<i class="fe-arrow-right"></i></button>
                    </div>

                </div>
            </div>
        </form>

    </div>
</div>