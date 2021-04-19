@extends('layouts.master')

@section('content')

    <div>
        <legend></legend>

        <div class="row">
            <div class="col-12">

                <div class="row">
                    <div class="col-md-1"></div>

                    <div class=" card card-body col-md-10">
                        <h2 class="header-title m-t-0 text-primary">REQUEST A STATEMENT</h2>

                            <p class="text-muted font-14 m-b-20">
                                You can request for your statement now.
                            </p>

                            <hr>


                            <div class="row" >


                                <div class="col-md-7" id="request_statement_div">

                                    <div class="">

                                        <table class="table mb-0 table-striped table-bordered">

                                            <tbody>
                                                <tr class="bg-secondary text-white">
                                                    <td>Request Details</td>
                                                </tr>

                                                <tr>
                                                </tr>

                                            </tbody>


                                        </table>

                                        <p>


                                            <form role="form" class="parsley-examples">
                                                    <div class="form-group row">
                                                        <label for="inputEmail3" class="col-5 col-form-label">Account Number<span
                                                                class="text-danger">*</span></label>
                                                        <div class="col-7">
                                                            <select class="custom-select " id="account_number" required>
                                                                <option value="">Select Account</option>
                                                                    <option value="001023468976001">001023468976001</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="statementType" class="col-5 col-form-label">
                                                            Type of Statement
                                                            <span class="text-danger">*</span></label>
                                                        <div class="col-7">
                                                            <select class="custom-select " id="statementType" required>
                                                                <option value="">Select Type of Statement</option>
                                                                <option value="VISA">VISA</option>
                                                                <option value="ELECTRONIC">ELECTRONIC</option>
                                                                <option value="ORDINARY">ORDINARY</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label for="pUBranch" class="col-5 col-form-label">
                                                            <label>Pick Up Branch</label>
                                                            <span class="text-danger">*</span></label>
                                                        <div class="col-7">
                                                            <select ect class="custom-select " id="pUBranch" required>
                                                                <option value="">-----Not Selected-----</option>
                                                                <option value="Accra">Accra</option>
                                                                <option value="ADONKIA BRANCH">ADONKIA BRANCH</option>
                                                                <option value="WILBERFORCE BRANCH">WILBERFORCE BRANCH</option>
                                                                <option value="PORT LOKKO BRANCH">PORT LOKKO BRANCH</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div for="duration" class="col-4 form-label">
                                                            <label>Transaction Period</label>
                                                            <span class="text-danger">*</span>
                                                        </div>
                                                        <div class="btn-group col-7">
                                                            <input type="date" id="startDate" />
                                                            <input type="date" id="endDate" />

                                                        </div>
                                                    </div>



                                            </form>

                                        </p>
                                    </div>

                                </div> <!-- end card-box -->

                                <div class="col-md-5 disappear-after-success" id="request_detail_div">

                                    <table class="table mb-0 table-striped table-bordered">

                                        <tbody>
                                            <tr class="bg-secondary text-white">
                                                <td>Request Details</td>
                                            </tr>
                                            <tr class="">

                                                <td>
                                                    <a
                                                        class="text-body font-weight-semibold   display_my_account_name"></a>
                                                    <small class="d-block   display_my_account_no"></small>
                                                    <span class="text-right   font-weight-semibold">
                                                    </span>
                                                </td>



                                            </tr>
                                            <tr class="">
                                                <td>
                                                    <span class="text-right font-weight-semibold">
                                                        <span class="display_type_of_statement"></span>
                                                    </span>
                                                </td>

                                            </tr>
                                            <tr class="">
                                                <td>
                                                    <span class="text-right font-weight-semibold">
                                                        <span class="display_pick_up_branch"></span>
                                                    </span>
                                                </td>

                                            </tr>
                                            <tr class="">
                                                <td>
                                                    <span class="text-right font-weight-semibold">
                                                        <span class="display_trans_startDate"></span>
                                                    </span>
                                                </td>

                                            </tr>
                                            <tr class="">
                                                <td>
                                                    <span class="text-right font-weight-semibold">
                                                        <span class="display_trans_endDate"></span>
                                                    </span>
                                                </td>

                                            </tr>

                                        </tbody>

                                    </table>

                                    <br>

                                    <div class="form-group row">
                                        <div class="col-8 offset-4 text-right">
                                            <button type="button" class="btn btn-primary btn-rounded waves-effect waves-light disappear-after-success" id="submit_cheque_request">
                                                Submit
                                            </button>

                                        </div>
                                    </div>


                                </div> <!-- end col -->

                            </div>


                    </div>





                    <div class="col-md-1"></div>

                </div> <!-- end card-body -->

            </div>
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        function toaster(message, icon, timer)
                {
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: timer,
                        timerProgressBar: false,
                        didOpen: (toast) => {
                          toast.addEventListener('mouseenter', Swal.stopTimer)
                          toast.addEventListener('mouseleave', Swal.resumeTimer)
                        }
                      })

                      Toast.fire({
                        icon: icon,
                        title: message
                      })
                }
        $(document).ready(function(){

            $("#account_number").change(function(){
                var account_number = $("#account_number").val();
                $(".display_my_account_no").text(account_number);
                console.log(account_number);
            });

            $("#statementType").change(function(){
                var statementType = $("#statementType").val();
                $(".display_type_of_statement").text(statementType);
                console.log(statementType);
            });

            $("#pUBranch").change(function(){
                var pickUpBranch = $("#pUBranch").val();
                $(".display_pick_up_branch").text(pickUpBranch);
                console.log(pickUpBranch);
            });

            $("#startDate").change(function(){
                var startDate = $("#startDate").val();
                $(".display_trans_startDate").text(startDate);
                console.log(startDate);
            });

            $("#endDate").change(function(){
                var endDate = $("#endDate").val();
                $(".display_trans_endDate").text(endDate);
                console.log(endDate);
            });

        });
    </script>

@endsection
