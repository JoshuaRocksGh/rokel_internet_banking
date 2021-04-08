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


                        <div class="row" style="zoom:0.9;">



                            <div class="col-md-12">


                                <div class="row">
                                    <div class="col-md-12">


                                        <span class="text-sm-right float-left">


                                        </span>

                                        <span class="text-sm-right float-right">

                                            <div class="btn-group drop-left">
                                                <button type="button" class="btn btn-primary dropdown-toggle btn-rounded"
                                                    data-toggle="dropdown" aria-expanded="false"> Add Beneficiary <i
                                                        class="mdi mdi-chevron-down"></i> </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="{{ url('add-same-bank-beneficiary') }}">Same Bank</a>
                                                    <a class="dropdown-item" href="{{ url('add-local-bank-beneficiary') }}">Other Local Bank </a>
                                                    <a class="dropdown-item" href="{{ url('add-beneficiary/international-bank-beneficiary') }}">International Bank </a>
                                                </div>
                                            </div>
                                        </span>


                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">

                                        {{-- <table id="datatable-buttons" class="table table-bordered table-striped dt-responsive nowrap w-100"> --}}
                                        <table id="datatable-buttons"
                                            class="table table-bordered table-striped dt-responsive nowrap w-100">
                                            <thead>
                                                <tr class="bg-secondary text-white">
                                                    <th> <b> Alias </b> </th>
                                                    <th> <b> Account Number </b> </th>
                                                    <th> <b> Beneficiary Name </b> </th>
                                                    <th> <b> Beneficiary Email </b> </th>
                                                    <th> <b> Beneficiary Bank </b> </th>
                                                    <th class="text-center"> <b>Actions </b> </th>

                                                </tr>
                                            </thead>


                                            <tbody>

                                                <tr>
                                                    <td> Josh</td>
                                                    <td> 2009003011</td>
                                                    <td> Joshua Tetteh</td>
                                                    <td>josh@gmail.com</td>
                                                    <td>Fidelity Bank Ghana</td>
                                                    <td class="text-center">
                                                        <span class="fe-edit noti-icon text-primary"></span>
                                                        &emsp;&emsp;
                                                        <span class="fe-trash noti-icon text-danger"></span>
                                                    </td>


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
