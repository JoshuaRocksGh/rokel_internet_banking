@extends('layouts.master')


@section('styles')

    <style>
        @media print {
            .hide_on_print {
                display: none;
            }

            ;
        }

        @page {
            size: A4;

                {
                    {
                    -- margin: 10px;
                    --
                }
            }
        }

        @media print {

            html,
            body {
                width: 210mm;
                height: 297mm;
            }

            /* ... the rest of the rules ... */
        }


        @font-face {
            font-family: 'password';
            font-style: normal;
            font-weight: 400;
            src: url(https://jsbin-user-assets.s3.amazonaws.com/rafaelcastrocouto/password.ttf);
        }

    </style>


@endsection


@section('content')
    <div class="container-fluid pt-2 ">
        <div class="row align-items-center">
            <div class="col-md-4 align-items-center">
                <a href="{{ url()->previous() }}" type="button" class="btn btn-sm btn-soft-blue waves-effect waves-light"
                    id="page_back_button"><i class="mdi mdi-reply-all-outline"></i>&nbsp;Back</a>
            </div>
            <div class="col-md-4">
                <div class="row align-items-center justify-content-center">
                    <img class="header-icon" src="{{ asset('assets/images/logoRKB.png') }}" alt="logo">&emsp;
                    <h4 class="text-primary my-0 page-header text-center text-uppercase"> STANDING ORDER STATUS
                    </h4>
                </div>
            </div>

            <div class="col-md-4 align-items-center d-none d-md-block text-right">
                <span class="align-items-center d-none d-lg-block">
                    <span class="text-primary "> Transfers </span> &nbsp; > &nbsp; <span class="text-primary">Standing
                        Order</span>&nbsp; > &nbsp; <span class="text-danger">Standing Order Status</span>
                </span>
            </div>

        </div>
        <div class="col-md-12 ">
            <hr class="text-primary my-2">
        </div>

    </div>

    <br>
    <div class="container">
        <div class="table-responsive table-bordered my_investment_display_area">
            <table id="" class="table table-striped mb-0 ">
                <thead>
                    <tr class="bg-info text-white ">
                        <td> <b> Account No </b> </td>
                        <td> <b> Deal Amount </b> </td>
                        <td> <b> Tunure </b> </td>
                        <td> <b> FixedInterestRate </b> </td>
                        <td> <b> Rollover </b> </td>

                    </tr>
                </thead>
                <tbody class="standing_order_details">
                    <td colspan="100%" class="text-center">
                        {{-- global noDataAvailable image variable shared with all views --}}
                        {!! $noDataAvailable !!}
                    </td>

                </tbody>
            </table>
        </div>
    </div>

@endsection

@section('scripts')

    <script>
        let noDataAvailable = {!! json_encode($noDataAvailable) !!}
        let account_data = new Object()
    </script>

@endsection
