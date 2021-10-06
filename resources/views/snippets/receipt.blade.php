<div class="receipt" style="display: none">
    <div class="container card card-body">

        <div class="container">
            <div class="">
                <div class="col-md-12 col-md-offset-3 body-main">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-4 "> <img class="img " alt="InvoIce Template"
                                    src="{{ asset('assets/images/' . env('APPLICATION_INFO_LOGO_LIGHT')) }} "
                                    style="zoom: 0.6" /> </div>
                            <div class="col-md-4"></div>
                            <div class="col-md-4 text-right">
                                <h4 class="text-primary"><strong>ROKEL COMMERCIAL BANK</strong>
                                </h4>
                                <p>25-27 Siaka Stevens St</p>
                                <p> Freetown, Sierra Leone</p>
                                <p>rokelsl@rokelbank.sl</p>
                                <p>(+232)-76-22-25-01</p>
                            </div>
                        </div>
                        <br>
                        <div class="page-header">
                            <h2><span id="personal_transfer_receipt">Transfer Receipt</span>
                            </h2>
                        </div>
                        <br>

                        <br />

                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead class="thead-light">
                                    <tr>
                                        {{-- <th>#</th> --}}
                                        <th>Description</th>
                                        <th class="text-right">Further Details</th>
                                        {{-- <th>Amount (<span id="receipt_currency"></span>)</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        {{-- <th scope="row">1</th> --}}
                                        <td>Transfer From Account Number</td>
                                        <td class="text-right"><span id="from_account_receipt"></span></td>
                                        {{-- <td></td> --}}
                                    </tr>
                                    <tr>
                                        {{-- <th scope="row">2</th> --}}
                                        <td>Transfer To Account Number</td>
                                        <td class="text-right"><span id="to_account_receipt"></span></td>
                                        {{-- <td></td> --}}
                                    </tr>
                                    <tr>
                                        {{-- <th scope="row">3</th> --}}
                                        <td>Transfer Category</td>
                                        <td class="text-right"><span id="category_receipt"></span></td>
                                        {{-- <td></td> --}}
                                    </tr>
                                    <tr>
                                        {{-- <th scope="row">3</th> --}}
                                        <td>Transfer Purpose</td>
                                        <td class="text-right"><span id="purpose_receipt"></span></td>
                                        {{-- <td></td> --}}
                                    </tr>
                                    <tr>
                                        {{-- <th scope="row">3</th> --}}
                                        <td>Amount</td>
                                        {{-- <td></td> --}}
                                        <td class="text-right"><strong><span class="receipt_currency"></span>
                                                &nbsp;<span id="amount_receipt"></span></strong>
                                        </td>
                                    </tr>
                                    {{-- <tr>
                                            <th scope="row">3</th>
                                            <td>Transaction Fee </td>
                                            <td></td>
                                            <td class="text-right"><strong>(<span
                                                        class="receipt_currency"></span>)15.00</strong>
                                            </td>
                                        </tr> --}}
                                    {{-- <tr>
                                            <th scope="row">3</th>
                                            <td><strong>Total Amount</strong> </td>
                                            <td></td>
                                            <td><strong><span
                                                        id="total_amount_receipt"></span></strong>
                                            </td>
                                        </tr> --}}
                                    <tr>
                                        {{-- <th scope="row">3</th> --}}
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div> <!-- end table-responsive-->
                        <br>
                        <div>
                            <div class="col-md-12">
                                <p><b>Date Posted :</b> {{ date('d F, Y') }}</p> <br /> <br />
                                <p><b>Posted By : {{ session('userId') }}</b></p>
                            </div>
                        </div>
                        <br><br>
                        <div class="row">
                            <div class="col-md-5"></div>
                            <div class="col-md-2">
                                <button class="btn btn-light btn-rounded hide_on_print text-center" type="button"
                                    onclick="window.print()">Print
                                    Receipt
                                </button>


                            </div>
                            <div class="col-md-5"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>