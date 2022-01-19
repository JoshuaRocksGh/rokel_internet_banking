@extends('layouts.master')

@section('content')
@php
$currentPath = 'Schedule Payment';
$basePath = 'Payments';
$pageTitle = 'Schedule Payment'; @endphp
@include("snippets.pageHeader")

<div class="row">
    <div class="col-12">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-1"></div>


                        <div class="col-md-9">
                            <h3 class="text-primary"> <span class="">Schedule Payment</span>

                                <button type="button" class="btn btn-primary btn-sm float-right  mod-open"
                                    id="display_view_list"> View List</button>
                                &emsp;&emsp;&emsp;
                                <button type="button" class="btn btn-info btn-sm float-right  mod-open"
                                    id="centermodal"> Schedule Payment</button>


                            </h3>

                            <hr>
                        </div>


                        <div class="col-md-2"></div>
                    </div>

                    <div class="row">
                        <div class="container">
                            <div class="col-md-1"></div>
                            <div class="col-md-10">

                                <form action="#" id="schedule_payment_form" autocomplete="off" aria-autocomplete="off">
                                    <h5 class=""> Schedule Payment Form</h5>
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label class="h6">Transfer From<span
                                                        class="text-danger">*</span></label>


                                                <select class="custom-select" id="from_account" required>
                                                    <option value="">Select Account</option>

                                                    {{-- <option
                                                        value="Saving Account~kwabeane Ampah~001023468976001~GHS~2000">
                                                        Saving Account~001023468976001~GHS~2000
                                                    </option> --}}

                                                </select>
                                                <table
                                                    class="table-responsive table table-centered table-nowrap mb-0 from_account_display_info card">
                                                    <tbody class="text-primary">
                                                        <tr class="text-primary">

                                                            <td class="text-primary">
                                                                <a
                                                                    class="text-body font-weight-semibold display_from_account_name text-primary"></a>
                                                                <small
                                                                    class="d-block display_from_account_no text-primary"></small>
                                                            </td>

                                                            <td class="text-right font-weight-semibold text-primary">
                                                                <span
                                                                    class="display_from_account_currency text-primary"></span>
                                                                <span
                                                                    class="display_from_account_amount text-primary"></span>

                                                            </td>
                                                        </tr>


                                                    </tbody>
                                                </table>
                                            </div>

                                            <div class="form-group">
                                                <label class="">Effective Date From<span
                                                        class="text-danger">*</span></label>

                                                {{-- <label class="h6">Category</label> --}}

                                                <input type="date" class="form-control" id="effective_date_from"
                                                    placeholder="Date From" autocomplete="off" required>

                                            </div>

                                            <div class="form-group">
                                                <label class="h6">Select Frequency<span
                                                        class="text-danger">*</span></label>


                                                <select class="custom-select" id="select_frequency" required>
                                                    <option value="">Select Frequency</option>
                                                    <option value="01~DAILY">DAILY</option>
                                                    <option value="02~WEEKLY">WEEKLY</option>
                                                    <option value="03~FORTNIGHTLY">FORTNIGHTLY</option>
                                                    <option value="04~MONTHLY">MONTHLY</option>
                                                    <option value="05~QUARTERLY">QUARTERLY</option>
                                                    <option value="06~HALF YEARLY">HALF YEARLY</option>
                                                    <option value="07~THIRTY DAYS">THIRTY DAYS</option>
                                                    <option value="08~NINETY ONE DAYS">NINETY ONE DAYS</option>
                                                    <option value="09~ONE HUNDRED AND EIGHTY TWO DAYS">ONE HUNDRED AND
                                                        EIGHTY TWO DAYS</option>
                                                    <option value="10~TWO HUNDERED AND SEVENTY DAYS">TWO HUNDERED AND
                                                        SEVENTY DAYS</option>
                                                    <option value="11~THREE HUNDERD AND SIXTY FIVE DAYS">THREE HUNDERD
                                                        AND SIXTY FIVE DAYS</option>
                                                    <option value="12~FOUR HUNDERD AND FIFTY DAYS">FOUR HUNDERD AND
                                                        FIFTY DAYS</option>
                                                    <option value="13~SEVEN HUNDERD AND TWENTY DAYS">SEVEN HUNDERD AND
                                                        TWENTY DAYS</option>
                                                    <option value="14~FIVE HUNDRED AND FORTY SEVEN DAYS">FIVE HUNDRED
                                                        AND FORTY SEVEN DAYS</option>


                                                    {{-- <option
                                                        value="Saving Account~kwabeane Ampah~001023468976001~GHS~2000">
                                                        Saving Account~001023468976001~GHS~2000
                                                    </option> --}}

                                                </select>
                                                {{-- <div class="form-group row">
                                                    <label for="" class="col-md-12"> From Account: <span
                                                            class="text-danger">*</span> </label>
                                                    <input class="col-md-12" type="text"
                                                        placeholder="Enter Account Number">
                                                </div> --}}
                                            </div>

                                            {{-- <div class="form-group">
                                                <label class="h6">Select Currency<span
                                                        class="text-danger">*</span></label>


                                                <select class="custom-select" id="select_currency" required>
                                                    <option value="">Select Currency</option>



                                                </select>

                                            </div> --}}

                                            <div class="form-group">
                                                <label class="">Transaction Details<span
                                                        class="text-danger">*</span></label>

                                                {{-- <label class="h6">Category</label> --}}

                                                <input type="text" class="form-control" id="tansaction_details"
                                                    placeholder="Enter Transaction Details" autocomplete="off" required>

                                            </div>
                                        </div>

                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label class="h6">Select Beneficiary<span
                                                        class="text-danger">*</span></label>

                                                <input type="hidden" value="" id="bank_i">
                                                <select class="custom-select" id="select_beneficiary" required>
                                                    <option value="">Select Beneficiary</option>

                                                    {{-- <option
                                                        value="Saving Account~kwabeane Ampah~001023468976001~GHS~2000">
                                                        Saving Account~001023468976001~GHS~2000
                                                    </option> --}}

                                                </select>
                                                <table
                                                    class="table-responsive table table-centered table-nowrap mb-0 to_account_display_info card">
                                                    <tbody>
                                                        <tr>

                                                            <td>
                                                                <a
                                                                    class="text-body font-weight-semibold display_to_account_name"></a>
                                                                <small class="d-block display_to_account_no"></small>
                                                            </td>

                                                            <td class="text-right font-weight-semibold">

                                                                <span class="display_to_account_currency"></span>
                                                                <span class="display_to_account_amount"></span>

                                                            </td>
                                                        </tr>


                                                    </tbody>
                                                </table>
                                            </div>

                                            <div class="form-group">
                                                <label class="">Effective Date To<span
                                                        class="text-danger">*</span></label>

                                                {{-- <label class="h6">Category</label> --}}

                                                <input type="date" class="form-control" id="effective_date_to"
                                                    placeholder="Date To" autocomplete="off" required>

                                            </div>


                                            <div class="form-group maximum_attempts">
                                                <label class="h6">Maximum Default Attempts<span
                                                        class="text-danger">*</span></label>


                                                <select class="custom-select" id="select_default_attempts" required>
                                                    <option value="">Select Attempts</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>

                                                    {{-- <option
                                                        value="Saving Account~kwabeane Ampah~001023468976001~GHS~2000">
                                                        Saving Account~001023468976001~GHS~2000
                                                    </option> --}}

                                                </select>
                                                {{-- <div class="form-group row">
                                                    <label for="" class="col-md-12"> From Account: <span
                                                            class="text-danger">*</span> </label>
                                                    <input class="col-md-12" type="text"
                                                        placeholder="Enter Account Number">
                                                </div> --}}
                                            </div>

                                            <div class="form-group">
                                                <label class="">Enter Amount<span class="text-danger">*</span></label>

                                                {{-- <label class="h6">Category</label> --}}

                                                <input type="text" class="form-control" id="amount"
                                                    oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1')"
                                                    placeholder="Enter Amount" autocomplete="off" required>

                                            </div>


                                        </div>

                                    </div>

                                    <div class="form-group text-right">
                                        <button class="btn btn-primary btn-rounded" type="button" id="next_button">
                                            &nbsp; Next <i class="fe-arrow-right"></i> &nbsp;</button>
                                    </div>
                                </form>


                            </div>
                            <div class="col-md-1"></div>
                        </div>


                        {{-- SUMMARY FORM --}}

                        <div class="container">
                            <div class="col-md-1"></div>
                            <div class="col-md-10">

                                <form action="#" id="schedule_payment_form_summary" autocomplete="off"
                                    aria-autocomplete="off">
                                    <h5 class=""> Schedule Payment Summary</h5>
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">

                                            <div class="form-group row">
                                                <label class="h5 col-12">Transfer From:</label>

                                                <span class="col-12" id="display_from_account"></span>

                                                {{-- <div class="form-group row">
                                                    <label for="" class="col-md-12"> From Account: <span
                                                            class="text-danger">*</span> </label>
                                                    <input class="col-md-12" type="text"
                                                        placeholder="Enter Account Number">
                                                </div> --}}
                                            </div>

                                            <div class="form-group row">
                                                <label class="h5 col-12">Effective Date From:</label>

                                                {{-- <label class="h6">Category</label> --}}
                                                <span class="col-12" id="display_effective_date_from"></span>

                                            </div>

                                            <div class="form-group row">
                                                <label class="h5 col-12">Select Frequency:</label>
                                                <span class="col-12" id="display_select_frequency"></span>

                                                {{-- <div class="form-group row">
                                                    <label for="" class="col-md-12"> From Account: <span
                                                            class="text-danger">*</span> </label>
                                                    <input class="col-md-12" type="text"
                                                        placeholder="Enter Account Number">
                                                </div> --}}
                                            </div>

                                            {{-- <div class="form-group">
                                                <label class="h6">Select Currency:</label>

                                                <input type="hidden" value="" id="currency_i">
                                                <span id="display_select_currency"></span>


                                            </div> --}}

                                            <div class="form-group row">
                                                <label class="h5 col-12">Transaction Details:</label>

                                                {{-- <label class="h6">Category</label> --}}
                                                <span class="col-12" id="display_tansaction_details"></span>

                                            </div>
                                        </div>

                                        <div class="col-md-6">

                                            <div class="form-group row">
                                                <label class="h5 col-12">Select Beneficiary:</label>
                                                <span class="col-12" id="display_select_beneficiary"></span>


                                                {{-- <div class="form-group row">
                                                    <label for="" class="col-md-12"> From Account: <span
                                                            class="text-danger">*</span> </label>
                                                    <input class="col-md-12" type="text"
                                                        placeholder="Enter Account Number">
                                                </div> --}}
                                            </div>

                                            <div class="form-group row">
                                                <label class="h5 col-12">Effective Date To:</label>
                                                <span class="col-12" id="display_effective_date_to"></span>
                                                {{-- <label class="h6">Category</label> --}}



                                            </div>


                                            <div class="form-group row maximum_attempts">
                                                <label class="h5 col-12">Maximum Default Attempts:</label>

                                                <span class="col-12" id="diaply_select_default_attempts"></span>


                                            </div>

                                            <div class="form-group row">
                                                <label class="h5 col-12">Enter Amount:</label>
                                                <span class="col-12" id="display_amount"></span>
                                                {{-- <label class="h6">Category</label> --}}

                                            </div>


                                        </div>

                                    </div>
                                    <div class="form-group row">
                                        <div class="col-6">
                                            <button class="btn btn-secondary btn-rounded text-left" type="button"
                                                id="back_button">
                                                &nbsp;<i class="fe-arrow-left"></i> Back &nbsp;</button>
                                        </div>
                                        <div class="col-6">
                                            <button class="btn btn-primary btn-rounded float-right" type="submit"
                                                id="submit_button">
                                                &nbsp; Submit <i class="fe-arrow-right"></i> &nbsp;</button>
                                        </div>

                                    </div>


                                </form>
                            </div>
                            <div class="col-md-1"></div>
                        </div>

                        <div class="container-fluid">
                            {{-- <div class="col-md-1"></div> --}}
                            <div class="col-md-12">
                                <div class="" id="schedule_payment_table" style="zoom: 0.8;">
                                    <div class="">

                                        <table id="datatable-buttons"
                                            class="table table-bordered table-striped dt-responsive nowrap w-100 beneficiary_list_display">
                                            {{-- <table id="datatable-buttons"
                                                class="table table-bordered table-striped dt-responsive nowrap w-100">
                                                --}}
                                                <thead>
                                                    <tr class="bg-secondary text-white">
                                                        <th> <b> Oder Number </b> </th>
                                                        <th> <b> Order Date </b> </th>
                                                        <th> <b> Value Date </b> </th>
                                                        <th> <b> Beneficiary Account </b> </th>
                                                        <th> <b> Due Amount </b> </th>
                                                        <th> <b> Transaction Details </b> </th>
                                                        <th> <b> Termination Date </b> </th>
                                                        <th class="text-center"> <b>Actions </b> </th>

                                                    </tr>
                                                </thead>


                                            </table>
                                    </div>

                                </div>
                            </div>
                            {{-- <div class="col-md-1"></div> --}}
                        </div>


                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection