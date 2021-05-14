<!-- App favicon -->
<link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

<!-- Plugins css -->
<link href="{{ asset('assets/libs/flatpickr/flatpickr.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/libs/selectize/css/selectize.bootstrap3.css') }}" rel="stylesheet" type="text/css" />

<!-- Plugins css -->
<link href="{{ asset('assets/libs/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css') }}" rel="stylesheet"
    type="text/css" />
<link href="{{ asset('assets/libs/clockpicker/bootstrap-clockpicker.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}" rel="stylesheet"
    type="text/css" />
<link href="{{ asset('assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet"
    type="text/css" />


<!-- App css -->
<link href="{{ asset('assets/css/bootstrap-purple.min.css') }}" rel="stylesheet" type="text/css"
    id="bs-default-stylesheet" />
<link href="{{ asset('assets/css/app-purple.min.css') }}" rel="stylesheet" type="text/css"
    id="app-default-stylesheet" />

<link href="{{ asset('assets/css/bootstrap-purple-dark.min.css') }}" rel="stylesheet" type="text/css"
    id="bs-dark-stylesheet" />
<link href="{{ asset('assets/css/app-purple-dark.min.css') }}" rel="stylesheet" type="text/css"
    id="app-dark-stylesheet" />


<!-- Tour css -->
<link href="{{ asset('assets/libs/hopscotch/css/hopscotch.min.css') }}" rel="stylesheet" type="text/css" />


<!-- icons -->
<link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="{{ asset('assets/libs/sweetalert2/sweetalert2.min.css') }}" />


{{-- <link rel="stylesheet" href="{{ asset('assets/css/c_cards.css') }}"/> --}}


<style>
        {{--  .btn-primary {
            box-shadow: 0 0 0 0 rgb(6 55 195 / 70%) !important;
        }  --}}
        .rtgs_card{
            box-shadow:
            0 2.8px 2.2px rgba(0, 0, 0, 0.034),
            0 6.7px 5.3px rgba(0, 0, 0, 0.048),
            0 12.5px 10px rgba(0, 0, 0, 0.06),
            0 22.3px 17.9px rgba(0, 0, 0, 0.072),
            0 41.8px 33.4px rgba(0, 0, 0, 0.086),
            0 100px 80px rgba(0, 0, 0, 0.12);
        }
        .rtgs_card::before{
          position: absolute;
          content: '';
          top: 30px;
          left: -25px;
          border-left: 13px solid transparent;
          border-right: 13px solid #0561ad;
          border-top: 13px solid #0561ad;
          border-bottom: 13px solid transparent;
        }

        .rtgs_card::after{
<<<<<<< HEAD

            position: absolute;
            content: 'Please Select/Enter Details';
            top: -5px;
            {{--  right: -14px;  --}}
            left: -14px;
            padding: 0.5rem;
            width: 20rem;
            background:#0561ad;
            color: #fff;
            text-align: center;
            font-family: 'Roboto', sans-serif;
            box-shadow: 4px 4px 15px rgba(26, 35, 126, 0.2);
=======
          position: absolute;
          content: 'Please fill the form below';
          top: -5px;
          left: -25px;
          padding: 0.5rem;
          width: 20rem;
          background: #0561ad;
          color: #fff;
          text-align: center;
          box-shadow: 4px 4px 15px rgb(26 35 126 / 20%);
>>>>>>> a92357224e8155d421d682c163bac10acebb72de

          }

          .rtgs_card_right{
            box-shadow:
            0 2.8px 2.2px rgba(0, 0, 0, 0.034),
            0 6.7px 5.3px rgba(0, 0, 0, 0.048),
            0 12.5px 10px rgba(0, 0, 0, 0.06),
            0 22.3px 17.9px rgba(0, 0, 0, 0.072),
            0 41.8px 33.4px rgba(0, 0, 0, 0.086),
            0 100px 80px rgba(0, 0, 0, 0.12)
          ;
          }
          #piechart_3d::after {
            position: absolute;
            content: 'SPENDING ANALYSIS';
            top: -5px;
            {{-- right: -14px; --}}
            left: -14px;
            padding: 0.5rem;
            width: 20rem;
            background: #0561AD;
            color: #fff;
            text-align: center;
            font-family: 'Roboto', sans-serif;
            box-shadow: 4px 4px 15px rgba(26, 35, 126, 0.2);

        }

          .rtgs_card_right::before{
            position: absolute;
            display: block;
            content: '';
            top: 30px;
            left: -25px;
            border-left: 13px solid transparent;
            border-right: 13px solid #0561ad;
            border-top: 13px solid #0561ad;
            border-bottom: 13px solid transparent;
            {{--  transform : rotate(45deg);  --}}
          }

          .rtgs_card_right::after {
            position: absolute;
            content: 'Related Information';
            top: -5px;
            {{--  right: -14px;  --}}
            left: -25px;
            padding: 0.5rem;
            width: 10rem;
            background:#0561ad;
            color: #fff;
            text-align: center;
            font-family: 'Roboto', sans-serif;
            box-shadow: 4px 4px 15px rgba(26, 35, 126, 0.2);
          }

          .rtgs_summary_card::after {
            position: absolute;
            content: 'Transfer Summary';
            top: -5px;
            {{--  right: -14px;  --}}
            left: -14px;
            padding: 0.5rem;
            width: 20rem;
            background:#0561ad;
            color: #fff;
            text-align: center;
            font-family: 'Roboto', sans-serif;
            box-shadow: 4px 4px 15px rgba(26, 35, 126, 0.2);
          }

          .rtgs_summary_card {
            box-shadow:
            0 2.8px 2.2px rgba(0, 0, 0, 0.034),
            0 6.7px 5.3px rgba(0, 0, 0, 0.048),
            0 12.5px 10px rgba(0, 0, 0, 0.06),
            0 22.3px 17.9px rgba(0, 0, 0, 0.072),
            0 41.8px 33.4px rgba(0, 0, 0, 0.086),
            0 100px 80px rgba(0, 0, 0, 0.12);

          }

          {{--  CSS FOR QR  --}}
          .qr_card {
            box-shadow:
            0 2.8px 2.2px rgba(0, 0, 0, 0.034),
            0 6.7px 5.3px rgba(0, 0, 0, 0.048),
            0 12.5px 10px rgba(0, 0, 0, 0.06),
            0 22.3px 17.9px rgba(0, 0, 0, 0.072),
            0 41.8px 33.4px rgba(0, 0, 0, 0.086),
            0 100px 80px rgba(0, 0, 0, 0.12);
          }

          .qr_card::before {
            position: absolute;
            content: '';
            top: 30px;
            left: -25px;
            border-left: 13px solid transparent;
            border-right: 13px solid #0561ad;
            border-top: 13px solid #0561ad;
            border-bottom: 13px solid transparent;
          }

          .qr_card::after {
            position: absolute;
            content: 'Generate QR to receive Payments';
            top: -5px;
            left: -25px;
            padding: 0.5rem;
            width: 20rem;
            background: #0561ad;
            color: #fff;
            text-align: center;
            font-family: 'Roboto', sans-serif;
            box-shadow: 4px 4px 15px rgb(26 35 126 / 20%);
          }
</style>
