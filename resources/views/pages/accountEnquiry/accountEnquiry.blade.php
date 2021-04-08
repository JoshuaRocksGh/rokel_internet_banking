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



                                        <div class="row" >
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <div class=" p-3 mt-4 mt-lg-0 rounded">
                                                    <h3 class=" mb-3 ">ACCOUNT BALANCE DETAIL FOR KWABENA AMPAH </h2>

                                                       

                                                    <div class="table-responsive table-bordered">
                                                        <table class="table mb-0">
                                                            <tbody>
                                                                <tr class="bg-secondary text-white ">
                                                                    <td>Account No: 00120002020303 </td>
                                                                    <td>Account Description</td>
                                                                    <td>$Currency GHS</td>
                                                                    <td>Producr: Current Account</td>

                                                                </tr>
                                                                <tr>
                                                                    <td> <b>Legder balance : </b></td>
                                                                    <td> 00.0 </td>
                                                                    <td>Available Balance</td>
                                                                    <td> $157.11</td>
                                                                </tr>
                                                                <tr>
                                                                    <td> <b>Amount In Arrears :</b> </td>
                                                                    <td> 00.0 </td>
                                                                    <td> <b>Overdrawn Limit:</b>
                                                                    </td>
                                                                    <td> 00.0 </td>
                                                                </tr>
                                                                <tr>
                                                                    <td> <b>Accrued Credit Interest:</b> </td>
                                                                    <td>00.0</td>
                                                                    <td> <b> Credit Interest Rate:</b> </td>
                                                                    <td>00.0</td>
                                                                </tr>
                                                                <tr>
                                                                    <td> <b>Accrued Debit Interest:</b> </td>
                                                                    <td> 00.0 </td>
                                                                    <td> <b> Debit Interest Rate:</b> </td>
                                                                    <td> 00.0 </td>
                                                                </tr>

                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <!-- end table-responsive -->
                                                </div>

                                            </div>
                                        </div>
                                            <div class="row" >
                                            <div class="col-md-12">
                                                

                                                <span class="text-sm-right float-left">

                                                    <form class="form-inline">
                                                    
                                                        {{-- <div class="form-group">
                                                            <strong  class=" header-title ">ACCOUNT BALANCE DETAIL FOR KWABENA AMPAH </strong>
                                                           
                                                        </div> --}}

          
                                                        <div class="form-group mx-sm-3">
                                                            <label for="inputPassword2" class="sr-only">Password</label>
                                                            <input type="password" class="form-control input-lg" id="inputPassword2" placeholder="Password">
                                                        </div>

                                                        <div class="form-group mx-sm-3">
                                                            <label for="inputPassword2" class="sr-only">Password</label>
                                                            <input type="password" class="form-control input-lg" id="inputPassword2" placeholder="Password">
                                                        </div>
                                                        <button type="submit" class="btn btn-primary btn-sm waves-effect waves-light">Confirm identity</button>

                                                      

                                                    </form> 

                                                    
                                                </span> 

                                                <span class="text-sm-right float-right">
                                                    <button type="button" class="btn btn-sm btn-light mb-2 mr-1">Print Statement</button>
                                                    <button type="button" class="btn btn-sm btn-light mb-2">Export</button>
                                                </span> 
                                          

                                            </div>
                                            </div>
                                            <div class="row" >
                                            <div class="col-md-12" >
                                               
                                                {{-- <table id="datatable-buttons" class="table table-bordered table-striped dt-responsive nowrap w-100"> --}}
                                            <table id="datatable-buttons" class="table table-bordered table-striped dt-responsive nowrap w-100">
                                                <thead>
                                                    <tr>
                                                        <th>Posting Date</th>
                                                        <th>Value Date</th>
                                                        <th style="width: 190px;">Transaction Details</th>
                                                        <th>Document Ref</th>
                                                        <th>Batch No</th>
                                                        <th>Debit</th>
                                                        <th>Credit</th>
                                                        <th>Balance</th>
                                                    </tr>
                                                </thead>


                                                <tbody>

                                                    <tr>
                                                        <td>01-Mar-2018</td>
                                                        <td>02-OCT-2018</td>
                                                        <td>Balance Brought Forword</td>
                                                        <td>00000000</td>
                                                        <td>
                                                            <!-- Info Alert modal -->
                                                            <a type="button" data-toggle="modal"
                                                                data-target="#bs-example-modal-xl"
                                                                class="text-primary">000000</a>
                                                        </td>
                                                        <td>.00</td>
                                                        <td>.00</td>
                                                        <td>.00</td>

                                                    </tr>

                                                    <tr>
                                                        <td>01-Mar-2018</td>
                                                        <td>02-OCT-2018</td>
                                                        <td>CASH DEPOSIT GABRIL KARGBO</td>
                                                        <td>004004085750200162</td>
                                                        <td>
                                                            <!-- Info Alert modal -->
                                                            <a type="button" data-toggle="modal"
                                                                data-target="#bs-example-modal-xl"
                                                                class="text-primary">201810031437</a>
                                                        </td>
                                                        <td></td>
                                                        <td>600,000.00</td>
                                                        <td>600,000.00</td>

                                                    </tr>
                                                    <tr>
                                                        <td>01-Mar-2018</td>
                                                        <td>02-OCT-2018</td>
                                                        <td>Balance Brought Forward</td>
                                                        <td>00000000</td>
                                                        <td>
                                                            <!-- Info Alert modal -->
                                                            <a type="button" data-toggle="modal"
                                                                data-target="#bs-example-modal-xl"
                                                                class="text-primary">000000</a>
                                                        </td>
                                                        <td>.00</td>
                                                        <td>.00</td>
                                                        <td>.00</td>

                                                    </tr>
                                                    <tr>
                                                        <td>01-Mar-2018</td>
                                                        <td>02-OCT-2018</td>
                                                        <td>Balance Brought Forward</td>
                                                        <td>00000000</td>
                                                        <td>
                                                            <!-- Info Alert modal -->
                                                            <a type="button" data-toggle="modal"
                                                                data-target="#bs-example-modal-xl"
                                                                class="text-primary">000000</a>
                                                        </td>
                                                        <td>.00</td>
                                                        <td>.00</td>
                                                        <td>.00</td>

                                                    </tr>
                                                    <tr>
                                                        <td>01-Mar-2018</td>
                                                        <td>02-OCT-2018</td>
                                                        <td>Balance Brought Forward</td>
                                                        <td>00000000</td>
                                                        <td>
                                                            <!-- Info Alert modal -->
                                                            <a type="button" data-toggle="modal"
                                                                data-target="#bs-example-modal-lg"
                                                                class="text-primary">000000</a>
                                                        </td>
                                                        <td>.00</td>
                                                        <td>.00</td>
                                                        <td>.00</td>

                                                    </tr>
                                                    <tr>
                                                        <td>01-Mar-2018</td>
                                                        <td>02-OCT-2018</td>
                                                        <td>Balance Brought Forward</td>
                                                        <td>00000000</td>
                                                        <td>
                                                            <!-- Info Alert modal -->
                                                            <a type="button" data-toggle="modal"
                                                                data-target="#bs-example-modal-lg"
                                                                class="text-primary">000000</a>
                                                        </td>
                                                        <td>.00</td>
                                                        <td>.00</td>
                                                        <td>.00</td>

                                                    </tr>
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

    @endsection
