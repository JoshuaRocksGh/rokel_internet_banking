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
                        <div class="row">

                            <div class="col-md-12">


                                <ul class="nav nav-pills navtab-bg nav-justified">
                                    <li class="nav-item">
                                        <a href="#transfer_tab" data-toggle="tab" aria-expanded="false"
                                            class="nav-link active">
                                            Transfers
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#payment_tab" data-toggle="tab" aria-expanded="true" class="nav-link ">
                                            Payments
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#request_tab" data-toggle="tab" aria-expanded="false" class="nav-link">
                                            Requests
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#cards_tab" data-toggle="tab" aria-expanded="false" class="nav-link">
                                            Cards
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane show active" id="transfer_tab">

                                        <div class="card-body">

                                            {{-- <h4 class="header-title">Buttons example</h4>
                                            <p class="sub-header font-13">
                                                The Buttons extension for DataTables provides a common set of options, API
                                                methods and styling to display buttons on a page
                                                that will interact with a DataTable. The core library provides the based
                                                framework upon which plug-ins can built.
                                            </p> --}}

                                            <table id="datatable-buttons"
                                                class="table table-striped dt-responsive nowrap w-100">
                                                <thead>
                                                    <tr>
                                                        <th>Req-Type</th>
                                                        <th>Status</th>
                                                        <th>Initiated By</th>
                                                        <th>Posted Date</th>
                                                        <th>Account No</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>


                                                <tbody>

                                                    <tr>
                                                        <td>914</td>
                                                        <td>approved</td>
                                                        <td>AL HAMD ENTERPRISES</td>
                                                        <td>15-04-2020 12:15:52</td>
                                                        <td>004008210057725128</td>
                                                        <td>
                                                            <!-- Info Alert modal -->
                                                            <a href="{{ url('approvals-pending-transfer-details') }}"
                                                                target="_blank">
                                                                <button type="button"
                                                                    class="btn btn-sm btn-primary">View</button>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>1001</td>
                                                        <td>approved</td>
                                                        <td>AL HAMD ENTERPRISES</td>
                                                        <td>12-04-2020 12:15:52</td>
                                                        <td>004008210057725123</td>
                                                        <td>
                                                            <!-- Info Alert modal -->
                                                            <a href="{{ url('approvals-pending-transfer-details') }}"
                                                                target="_blank">
                                                                <button type="button"
                                                                    class="btn btn-sm btn-primary">View</button>
                                                            </a>
                                                        </td>
                                                        <tr>
                                                            <td>914</td>
                                                            <td>approved</td>
                                                            <td>AL HAMD ENTERPRISES</td>
                                                            <td>15-04-2020 12:15:52</td>
                                                            <td>004008210057725128</td>
                                                            <td>
                                                                <!-- Info Alert modal -->
                                                                <a href="{{ url('approvals-pending-transfer-details') }}"
                                                                    target="_blank">
                                                                    <button type="button"
                                                                        class="btn btn-sm btn-primary">View</button>
                                                                </a>
                                                            </td>
                                                        </tr>

                                                    <tr>
                                                        <td>1001</td>
                                                        <td>approved</td>
                                                        <td>AL HAMD ENTERPRISES</td>
                                                        <td>12-04-2020 12:15:52</td>
                                                        <td>004008210057725123</td>
                                                        <td>
                                                            <!-- Info Alert modal -->
                                                            <a href="{{ url('approvals-pending-transfer-details') }}"
                                                                target="_blank">
                                                                <button type="button"
                                                                    class="btn btn-sm btn-primary">View</button>
                                                            </a>
                                                        </td>
                                                        <tr>
                                                            <td>914</td>
                                                            <td>approved</td>
                                                            <td>AL HAMD ENTERPRISES</td>
                                                            <td>15-04-2020 12:15:52</td>
                                                            <td>004008210057725128</td>
                                                            <td>
                                                                <!-- Info Alert modal -->
                                                                <a href="{{ url('approvals-pending-transfer-details') }}"
                                                                    target="_blank">
                                                                    <button type="button"
                                                                        class="btn btn-sm btn-primary">View</button>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    <tr>
                                                        <td>1001</td>
                                                        <td>approved</td>
                                                        <td>AL HAMD ENTERPRISES</td>
                                                        <td>12-04-2020 12:15:52</td>
                                                        <td>004008210057725123</td>
                                                        <td>
                                                            <!-- Info Alert modal -->
                                                            <a href="{{ url('approvals-pending-transfer-details') }}"
                                                                target="_blank">
                                                                <button type="button"
                                                                    class="btn btn-sm btn-primary">View</button>
                                                            </a>
                                                        </td>
                                                        <tr>
                                                            <td>914</td>
                                                            <td>approved</td>
                                                            <td>AL HAMD ENTERPRISES</td>
                                                            <td>15-04-2020 12:15:52</td>
                                                            <td>004008210057725128</td>
                                                            <td>
                                                                <!-- Info Alert modal -->
                                                                <a href="{{ url('approvals-pending-transfer-details') }}"
                                                                    target="_blank">
                                                                    <button type="button"
                                                                        class="btn btn-sm btn-primary">View</button>
                                                                </a>
                                                            </td>
                                                        </tr>

                                                </tbody>
                                            </table>

                                        </div> <!-- end card body-->


                                    </div>

                                </div>
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
            <script src="{{ asset('assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
            <script src="{{ asset('assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}"></script>
            <script src="{{ asset('assets/libs/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
            <script src="{{ asset('assets/libs/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
            <script src="{{ asset('assets/libs/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
            <script src="{{ asset('assets/libs/datatables.net-keytable/js/dataTables.keyTable.min.js') }}"></script>
            <script src="{{ asset('assets/libs/datatables.net-select/js/dataTables.select.min.js') }}"></script>
            <script src="{{ asset('assets/libs/pdfmake/build/pdfmake.min.js') }}"></script>
            <script src="{{ asset('assets/libs/pdfmake/build/vfs_fonts.js') }}"></script>
            <!-- third party js ends -->

            <!-- Datatables init -->
            <script src="{{ asset('assets/js/pages/datatables.init.js') }}"></script>

        @endsection
