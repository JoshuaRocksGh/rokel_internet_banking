@extends('layouts.master')

@section('styles')


@endsection

@section('content')

    <div class="container-fluid hide_on_print">
        <br>
        <!-- start page title -->
        <div class="row">
            <div class="col-md-4">
                <a href="{{ url()->previous() }}" type="button" class="btn btn-soft-blue waves-effect waves-light"><i
                        class="mdi mdi-reply-all-outline"></i>&nbsp;Back</a>
                {{-- <button type="button" class="btn btn-soft-blue waves-effect waves-light">Blue</button> --}}

            </div>
            <div class="col-md-4">
                <h4 class="text-primary">
                    <img src="{{ asset('assets/images/logoRKB.png') }}" alt="logo" style="zoom: 0.05">&emsp;
                    ACCOUNTS
                </h4>
            </div>

            <div class="col-md-4 text-right">
                <h6>

                    <span class="float-right">
                        <b class="text-primary"> My Account </b> &nbsp; > &nbsp; <b class="text-danger">Accounts</b>


                    </span>

                </h6>

            </div>

            <div class="col-md-12 ">
                <hr class="text-primary" style="margin: 0px;">
            </div>

        </div>
    </div>

@endsection
