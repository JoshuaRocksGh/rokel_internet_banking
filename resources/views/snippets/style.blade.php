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

{{-- <link href="{{ asset('assets/css/bootstrap-purple-dark.min.css') }}" rel="stylesheet" type="text/css"
id="bs-dark-stylesheet" /> --}}
{{-- <link href="{{ asset('assets/css/app-purple-dark.min.css') }}" rel="stylesheet" type="text/css" --}}
{{-- id="app-dark-stylesheet" /> --}}
<link href="{{ asset('assets/libs/bootstrap-select/css/bootstrap-select.min.css') }}" rel="stylesheet"
    type="text/css" />

<!-- Tour css -->
<link href="{{ asset('assets/libs/hopscotch/css/hopscotch.min.css') }}" rel="stylesheet" type="text/css" />


<!-- icons -->
<link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="{{ asset('assets/libs/sweetalert2/sweetalert2.min.css') }}" />


<style>
    /* {
            {
            -- .btn-primary {
                box-shadow: 0 0 0 0 rgb(6 55 195 / 70%) !important;
            }

            --
        }
    } */

    .form-group {
        margin-bottom: 0.4rem !Important;
    }

    .readOnly {
        background-color: #eceff1 !Important;
    }

    .rtgs_card {
        box-shadow:
            0 2.8px 2.2px rgba(0, 0, 0, 0.034),
            0 6.7px 5.3px rgba(0, 0, 0, 0.048),
            0 12.5px 10px rgba(0, 0, 0, 0.06),
            0 22.3px 17.9px rgba(0, 0, 0, 0.072),
            0 41.8px 33.4px rgba(0, 0, 0, 0.086),
            0 100px 80px rgba(0, 0, 0, 0.12);
        height: 100%;
    }

    .rtgs_card::before {
        position: absolute;
        content: '';
        top: 30px;
        left: -25px;
        border-left: 13px solid transparent;
        border-right: 13px solid #0561ad;
        border-top: 13px solid #0561ad;
        border-bottom: 13px solid transparent;
    }


    .rtgs_card::after {
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

    }

    .success_message::before {
        position: absolute;
        content: '';
        top: 30px;
        left: -25px;
        border-left: 13px solid transparent;
        border-right: 13px solid #0561ad;
        border-top: 13px solid #0561ad;
        border-bottom: 13px solid transparent;
    }

    .success_message::after {
        position: absolute;
        content: 'Request Successful';
        top: -5px;
        left: -25px;
        padding: 0.5rem;
        width: 20rem;
        background: #0561ad;
        color: #fff;
        text-align: center;
        box-shadow: 4px 4px 15px rgb(26 35 126 / 20%);

    }

    .card_box_shadow {
        box-shadow:
            0 2.8px 2.2px rgba(0, 0, 0, 0.034),
            0 6.7px 5.3px rgba(0, 0, 0, 0.048),
            0 12.5px 10px rgba(0, 0, 0, 0.06),
            0 22.3px 17.9px rgba(0, 0, 0, 0.072),
            0 41.8px 33.4px rgba(0, 0, 0, 0.086),
            0 100px 80px rgba(0, 0, 0, 0.12);
        height: 100%;
    }


    .rtgs_card_right::before {
        position: absolute;
        display: block;
        content: '';
        top: 30px;
        left: -25px;
        border-left: 13px solid transparent;
        border-right: 13px solid #0561ad;
        border-top: 13px solid #0561ad;
        border-bottom: 13px solid transparent;

            {
                {
                --transform%20%3A%20rotate(45deg)%3B--
            }
        }
    }

    .success_card_right::after {
        position: absolute;
        content: 'Request Successful';
        top: -5px;

            {
                {
                --right%3A%20-14px%3B--
            }
        }

        left: -25px;
        padding: 0.5rem;
        width: 10rem;
        background:#0561ad;
        color: #fff;
        text-align: center;
        font-family: 'Roboto',
        sans-serif;
        box-shadow: 4px 4px 15px rgba(26, 35, 126, 0.2);
    }


    .rtgs_card_right::after {
        position: absolute;
        content: 'Related Information';
        top: -5px;

            {
                {
                --right%3A%20-14px%3B--
            }
        }

        left: -25px;
        padding: 0.5rem;
        width: 10rem;
        background:#0561ad;
        color: #fff;
        text-align: center;
        font-family: 'Roboto',
        sans-serif;
        box-shadow: 4px 4px 15px rgba(26, 35, 126, 0.2);
    }

    .rtgs_summary_card::before {
        position: absolute;
        content: '';
        top: 30px;
        left: -25px;
        border-left: 13px solid transparent;
        border-right: 13px solid #0561ad;
        border-top: 13px solid #0561ad;
        border-bottom: 13px solid transparent;
    }

    .rtgs_summary_card::after {
        position: absolute;
        content: 'Transfer Summary';
        top: -5px;

            {
                {
                --right%3A%20-14px%3B--
            }
        }

        left: -25px;
        padding: 0.5rem;
        width: 20rem;
        background:#0561ad;
        color: #fff;
        text-align: center;
        font-family: 'Roboto',
        sans-serif;
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

        {
            {
            --CSS%20FOR%20QR--
        }
    }

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

    .rtgs_card_statement {
        box-shadow:
            0 2.8px 2.2px rgba(0, 0, 0, 0.034),
            0 6.7px 5.3px rgba(0, 0, 0, 0.048),
            0 12.5px 10px rgba(0, 0, 0, 0.06),
            0 22.3px 17.9px rgba(0, 0, 0, 0.072),
            0 41.8px 33.4px rgba(0, 0, 0, 0.086),
            0 100px 80px rgba(0, 0, 0, 0.12);
        height: 100%;
    }

    .rtgs_card_statement::before {
        position: absolute;
        content: '';
        top: 30px;
        left: -25px;
        border-left: 13px solid transparent;
        border-right: 13px solid #0561ad;
        border-top: 13px solid #0561ad;
        border-bottom: 13px solid transparent;
    }

    .rtgs_card_statement::after {
        position: absolute;
        content: 'Account Statement';
        top: -5px;
        left: -25px;
        padding: 0.5rem;
        width: 20rem;
        background: #0561ad;
        color: #fff;
        text-align: center;
        box-shadow: 4px 4px 15px rgb(26 35 126 / 20%);

    }

    .customize_card {
        /* box-shadow:
            0 2.8px 2.2px rgba(0, 0, 0, 0.034),
            0 6.7px 5.3px rgba(0, 0, 0, 0.048),
            0 12.5px 10px rgba(0, 0, 0, 0.06),
            0 22.3px 17.9px rgba(0, 0, 0, 0.072),
            0 41.8px 33.4px rgba(0, 0, 0, 0.086),
            0 100px 80px rgba(0, 0, 0, 0.12);
        height: 100%; */
        box-shadow: 4px 4px 15px rgb(26 35 126 / 20%);
    }

    /* styles for activate and block card */
    .box {
        border: 1px solid black;
        height: 240px;
        width: 400px;
        margin: 50px auto;
        margin-top: 90px;
        background-color: #0561ad;
        background-size: cover;
        border-radius: 8px;
        box-shadow: 2px 4px 18px 5px;
        color: currentColor;
        opacity: 0.8;
    }

    .box:hover {
        box-shadow: 3px 6px 28px 7px;
    }

    .visa_logo {
        position: absolute;
        left: 65%;
        top: 23%;
    }

    .chip {
        position: absolute;
        left: 24.4%;
        top: 46%;
    }


    .card_digits {
        font-family: kelly slab, cursive;
        color: wheat;
        font-size: 23px;
        position: absolute;
        left: 24.4%;
        top: 60%;
        letter-spacing: 6px;
    }

    .coded {
        font-family: kelly slab, cursive;
        color: wheat;
        font-size: 12px;
        position: absolute;
        left: 10%;
        top: 65%;
        font-weight: normal;
        opacity: 0.2;
    }

    .good_thru {
        width: 10px;
        display: none;
        font-family: kelly slab, cursive;
        color: wheat;
        font-size: 15px;
        position: absolute;
        left: 70%;
        top: 50%;
        font-weight: normal;
        line-height: -10px;
        opacity: 0.3;
    }

    .expiry {
        font-family: kelly slab, cursive;
        color: wheat;
        position: absolute;
        left: 55%;
        top: 73.4%;
        letter-spacing: 2px;

    }

    .card_holder {
        font-family: kelly slab, cursive;
        color: wheat;
        font-weight: normal;
        position: absolute;
        left: 24.4%;
        top: 73%;
        letter-spacing: 3px;
    }

    .mastercard {
        position: absolute;
        left: 67%;
        top: 68%;
    }

    // RECEIPT CSS

    .body-main {
        background: #ffffff;
        border-bottom: 15px solid #1E1F23;
        border-top: 15px solid #1E1F23;
        margin-top: 30px;
        margin-bottom: 30px;
        padding: 40px 30px !important;
        position: relative;
        box-shadow: 0 1px 21px #808080;
        font-size: 10px
    }

    .main thead {
        background: #1E1F23;
        color: #fff
    }

    .img {
        height: 100px;

    }

    .logo {
        align: center
    }

    h2 {
        text-align: center
    }

    .form-center {
        max-width: 500px;
        margin-left: auto;
        margin-right: auto;

    }

    input[type=number]::-webkit-inner-spin-button,
    input[type=number]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    input[type='number'] {
        -moz-appearance: textfield;
    }

    option[value=""][disabled] {
        background-color: #dddddd;
        color: #1E1F23
    }

    select:required:invalid {
        background-color: #fffbfb79;
        color: #1E1F23
    }

    .btn-primary:active {
        background-color: #0561ad;
        border-color: #0561ad;
    }

    .div-card {
        background-image: linear-gradient(to bottom right, white, rgb(223, 225, 226));
        box-shadow: 4px 4px 15px rgb(26 35 126 / 20%);
    }

    body {
        font-size: .9rem;
    }

    select {
        font: 400 0.9rem Lato;
    }

    /*
    @media only screen and (max-width: 760px),
    (min-device-width: 768px) and (max-device-width: 1024px) {

        // Force table to not be like tables anymore
        table,
        thead,
        tbody,
        th,
        td,
        tr {
            display: block;
        }

        // Hide table headers (but not display: none;, for accessibility)
        thead tr {
            position: absolute;
            top: -9999px;
            left: -9999px;
        }

        tr {
            margin: 0 0 1rem 0;
        }

        tr:nth-child(odd) {
            background: #ccc;
        }

        td {
            // Behave  like a "row"
            border: none;
            border-bottom: 1px solid #eee;
            position: relative;
            padding-left: 50%;

        }

        td:before {
            // Now like a table header
            position: absolute;
            // Top/left values mimic padding /
            top: 0;
            left: 6px;
            width: 45%;
            padding-right: 10px;
            white-space: nowrap;
        }

       //
	//	Label the data
  //  You could also use a data-* attribute and content for this. That way "bloats" the HTML, this way means you need to keep HTML and CSS in sync. Lea Verou has a clever way to handle with text-shadow.

        td:nth-of-type(1):before {
            content: " Date";
            font-size: 1rem;
            color: #0561ad;
            font-weight: bold;
        }

        td:nth-of-type(2):before {
            content: " Amount";
            font-size: 1rem;
            color: #0561ad;
            font-weight: bold;
        }

        td:nth-of-type(3):before {
            content: " Balance";
            font-size: 1rem;
            color: #0561ad;
            font-weight: bold;
        }

        td:nth-of-type(4):before {
            content: " Purpose Of Transfer";
            font-size: 1rem;
            color: #0561ad;
            font-weight: bold;
        }

        td:nth-of-type(5):before {
            content: " Credit Account";
            font-size: 1rem;
            color: #0561ad;
            font-weight: bold;
        }

        td:nth-of-type(6):before {
            content: " Transaction Id";
            font-size: 1rem;
            color: #0561ad;
            font-weight: bold;
        }

        td:nth-of-type(7):before {
            content: " Batch No";
            font-size: 1rem;
            color: #0561ad;
            font-weight: bold;
        }
    } */
</style>
