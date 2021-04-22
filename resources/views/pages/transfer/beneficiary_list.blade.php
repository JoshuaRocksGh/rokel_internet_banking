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
                    <div class="card-body" >


                        <div class="row" style="zoom:0.9;" >



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
                                                    <a class="dropdown-item" href="{{ url('add-international-bank-beneficiary') }}">International Bank </a>
                                                </div>
                                            </div>
                                        </span>


                                    </div>
                                </div>
                                <div class="row" id="beneficiary_table">
                                    <div class="col-md-12">

                                        <table id="datatable-buttons" class="table table-bordered table-striped dt-responsive nowrap w-100 beneficiary_list_display">
                                        {{--  <table id="datatable-buttons" class="table table-bordered table-striped dt-responsive nowrap w-100">  --}}
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


                                            {{-- <tbody class="beneficiary">

                                                <tr>
                                                    <td> </td>
                                                    <td> </td>
                                                    <td> </td>
                                                    <td> </td>
                                                    <td> </td>
                                                    <td class="text-center">
                                                        <span class="fe-edit noti-icon text-primary"></span>
                                                        &emsp;&emsp;
                                                        <span class="fe-trash noti-icon text-danger"></span>
                                                    </td>


                                                </tr>

                                            </tbody> --}}
                                        </table>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="text-center" id="beneficiary_list_loader">
                                            <div class="spinner-border text-primary avatar-lg" role="status"></div>
                                        </div>
                                        <br><br><br><br>
                                        <div class="text-center" id="beneficiary_list_retry_btn">
                                            <button class="btn btn-lg btn-secondary" >Retry</button>
                                        </div>
                                    </div>
                                </div>



                                <!--  Modal content for the Large example -->
                                        <div class="modal fade" id="bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="myLargeModalLabel">Beneficiary Details</h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    </div>
                                                    <div class="modal-body p-4">
                                                        <p>
                                                            <form action="" id="modal_SAB_form">
                                                                <h2>SAME BANK</h2>
                                                            </form>

                                                            <form action="" id="modal_OTB_form">
                                                                <h2>OTHER BANK BANK</h2>
                                                            </form>

                                                            <form action="" id="modal_INTB_form">
                                                                <h2>INTERNATIONAL BANK</h2>
                                                            </form>
                                                        </p>

{{--
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="field-1" class="control-label">Firstname</label>
                                                                    <input type="text" class="form-control" id="firstname_" placeholder="John">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="field-2" class="control-label">Lastname</label>
                                                                    <input type="text" class="form-control" id="lastname_" placeholder="Doe">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="field-2" class="control-label">Othername</label>
                                                                    <input type="text" class="form-control" id="Othername_" placeholder="Doe">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="field-3" class="control-label">Beneficiary Type</label>
                                                                    <input type="text" class="form-control" id="beneficiary_type_" placeholder="Address">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="field-3" class="control-label">Account Number</label>
                                                                    <input type="text" class="form-control" id="account_number_" placeholder="Address">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="field-3" class="control-label">Account Currency</label>
                                                                    <input type="text" class="form-control" id="account_currency_" placeholder="Address">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="field-4" class="control-label">Bank Country</label>
                                                                    <input type="text" class="form-control" id="bank_country_" placeholder="Boston">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="field-5" class="control-label">Bank Name</label>
                                                                    <input type="text" class="form-control" id="bank_name_" placeholder="United States">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="field-6" class="control-label">Swift Code</label>
                                                                    <input type="text" class="form-control" id="swift_code_" placeholder="123456">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="form-group no-margin">
                                                                    <label for="field-7" class="control-label">Bank Address</label>

                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group no-margin">
                                                                    <label for="field-7" class="control-label">Beneficiary Address</label>
                                                                 </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group no-margin">
                                                                    <label for="field-7" class="control-label">Beneficiary Email</label>
                                                                 </div>
                                                            </div>
                                                        </div> --}}
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-info waves-effect" data-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-danger waves-effect waves-light" data-dismiss="modal">Delete</button>
                                                    </div>
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->

                                {{--  <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#centermodal">Center modal</button>  --}}
                                {{--  <button type="button" class="btn btn-success waves-effect waves-light" data-toggle="modal" data-target="#con-close-modal">Responsive Modal</button>  --}}
                                {{--  <button type="button" class="btn btn-info" data-toggle="modal" data-target="#bs-example-modal-lg">Large Modal</button>  --}}





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
        <script>

            function beneficiary_list(){
                var table = $('.beneficiary_list_display').DataTable();
                var nodes = table.rows().nodes();
                $.ajax({
                    'tpye' : 'GET' ,
                    'url' : 'all-beneficiary-list' ,
                    "datatype" : "application/json",
                    success:function(response){
                         {{-- console.log(response.responseCode); --}}

                        let data = response.data;
                        if(response.responseCode == '000') {

                            $('#beneficiary_table').show();
                            $('#beneficiary_list_loader').hide();
                            $('#beneficiary_list_retry_btn').hide();
                            $.each(data, function(index) {
                                console.log(data[index])

                                model_data = data[index]

                                table.row.add([
                                    data[index].FIRST_NAME,
                                    data[index].BEN_ACCOUNT,
                                    data[index].NICKNAME,
                                    data[index].EMAIL,
                                    data[index].BANK_NAME,


                                    `&emsp;&emsp; <a class='beneficiary_data' data-value='${data[index]}' href='edit-beneficiary?bene_type=${ data[index].BENEF_TYPE}&bene_id=${ data[index].BENE_ID}'> <span class="fe-edit noti-icon text-primary"></span></a>
                                    <button class="hell" > sup</button>
                                    &emsp;&emsp;  <span class="fe-trash noti-icon text-danger delete_beneficiary_data" data-toggle="modal" data-target="#bs-example-modal-lg"  data-value="${ data[index]}"></span>`,




                                ]).draw(false)

                            })

                        }else{
                            $('#beneficiary_table').hide();
                            $('#beneficiary_list_loader').hide();
                            $('#beneficiary_list_retry_btn').show();
                        }

                    }
                })
            }

            $('#beneficiary_list_retry_btn').hide();
            $('#beneficiary_table').hide();


            $(document).ready(function(){

            $('#beneficiary_list_loader').show();
                setTimeout(function(){
                    beneficiary_list();
                },2000);

                $('#beneficiary_list_retry_btn').click(function(e){
                    e.preventDefault();
                    $('#beneficiary_list_retry_btn').hide();
                    $('#beneficiary_list_loader').show();

                    {{-- $('#beneficiary_list_loader').show(); --}}
                        setTimeout(function(){
                            beneficiary_list();
                        },2000);
                })

                $(".hell").click(function(){
                    alert('hhh')
                })

                $(".delete_beneficiary_data").click(function(){

                    alert("DELETE!!!");
                   var beneficiary_data =  $(this).data().value;
                  console.log(beneficiary_data);
                  if(beneficiary_data.BENEF_TYPE == 'SAB'){

                      $('#modal_OTB_form').hide()
                      $('#modal_INTB_form').hide()
                      $('#modal_SAB_form').show()
                  }else if(beneficiary_data.BENEF_TYPE == 'OTB'){

                    $('#modal_INTB_form').hide()
                    $('#modal_SAB_form').hide()
                    $('#modal_OTB_form').show()
                  }else if(beneficiary_data.BENEF_TYPE == 'INT'){

                    $('#modal_SAB_form').hide()
                    $('#modal_OTB_form').hide()
                    $('#modal_INTB_form').show()

                  }else{

                  }
                })
            })
        </script>
    @endsection
