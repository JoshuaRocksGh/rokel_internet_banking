@extends('layouts.master')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card-body">
            <div class="row">

                <div class="col-md-12">


                    <!-- start page title -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="page-title-box">
                                        <div class="page-title-left">
                                            <ol class="breadcrumb m-0">
                                                <li class="breadcrumb-item"><a href="javascript: void(0);">Transfer</a>
                                                </li>
                                                {{-- <li class="breadcrumb-item"><a href="javascript: void(0);">RTGS</a></li> --}}
                                                <li class="breadcrumb-item active text-danger">International Bank</li>
                                            </ol>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <h1 class="header-title text-primary" style="font-size: 24px"><img
                                src="{{ asset('assets/images/logoRKB.png') }}" alt="logo" style="zoom: 0.05">&emsp;
                            INTERNATIONAL TRANSFER</h1>

                        <p class="text-muted font-14 m-b-20">

                            {{-- Real Time Gross Settlement(RTGS) refers to a funds transfer system that allows for the
                                instantaneous transfer of money. --}}
                            <hr style="border: 1px solid">
                        </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
