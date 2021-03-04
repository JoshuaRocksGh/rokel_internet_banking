@extends('layouts.master')

@section('content')

<!-- Start Content-->
<div class="container-fluid">
    <br><br>


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <i class="fe-arrow-left"></i> &nbsp; <br>
                    <h4 class="header-title">Same Bank</h4>
                    <p class="sub-header font-13">
                        A jQuery Plugin to make masks on form fields and HTML elements.
                    </p>

                    <div class="row">
                        <div class="col-md-6">
                            <form action="#">
                                <div class="form-group">
                                    <label>Acount Number</label>
                                    <input type="text" class="form-control" data-toggle="input-mask" data-mask-format="00/00/0000">
                                    {{--  <span class="font-13 text-muted">e.g "DD/MM/YYYY"</span>  --}}
                                </div>
                                <div class="form-group">
                                    <label>Account Name</label>
                                    <input type="text" class="form-control" data-toggle="input-mask" data-mask-format="00:00:00">
                                    {{--  <span class="font-13 text-muted">e.g "HH:MM:SS"</span>  --}}
                                </div>
                                <div class="form-group">
                                    <label>Beneficiary Name</label>
                                    <input type="text" class="form-control" data-toggle="input-mask" data-mask-format="00/00/0000 00:00:00">
                                    {{--  <span class="font-13 text-muted">e.g "DD/MM/YYYY HH:MM:SS"</span>  --}}
                                </div>
                                <div class="form-group">
                                    <label>Beneficiary Email</label>
                                    <input type="text" class="form-control" data-toggle="input-mask" data-mask-format="00000-000">
                                    {{--  <span class="font-13 text-muted">e.g "xxxxx-xxx"</span>  --}}
                                    <label class="custom-control-label" for="checkmeout0">Check me out !</label>

                                </div>
                                <div class="form-group">
                                <label class="custom-control-label" for="checkmeout">Check me out !</label>

                                </div>

                                <div class="form-group">
                                    <label>Crazy Zip Code</label>
                                    <input type="text" class="form-control" data-toggle="input-mask" data-mask-format="0-00-00-00">
                                    {{--  <span class="font-13 text-muted">e.g "x-xx-xx-xx"</span>  --}}
                                </div>
                                <div class="form-group">
                                    {{--  <label>Money</label>  --}}
                                    <label class="custom-control-label" for="checkmeout0">Check me out !</label>

                                    <input type="text" class="form-control" data-toggle="input-mask" data-mask-format="000.000.000.000.000,00" data-reverse="true">
                                    {{--  <span class="font-13 text-muted">e.g "Your money"</span>  --}}
                                </div>
                                <div class="form-group">
                                    <label>Money 2</label>
                                    <input type="text" class="form-control" data-toggle="input-mask" data-mask-format="#.##0,00" data-reverse="true">
                                    {{--  <span class="font-13 text-muted">e.g "#.##0,00"</span>  --}}
                                </div>
                                <button class="btn btn-primary" type="submit">Submit form</button>
                            </form>
                        </div> <!-- end col -->


                        <div class="col-md-6">
                            <img src="{{ asset('assets/images/send.png') }}" class="img-fluid" alt="" >
                       </div> <!-- end col -->



                    </div>
                    <!-- end row -->
                </div> <!-- end card-body -->
            </div> <!-- end card -->
        </div> <!-- end col -->
    </div> <!-- end row -->




@endsection
