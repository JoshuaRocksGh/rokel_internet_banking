{{-- <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script> --}}

<!-- Vendor js -->
<script src="{{ asset('assets/js/vendor.min.js') }}"></script>

<!-- Third Party js-->
<script src="{{ asset('land_asset/js/jquery.min.js') }}"></script>
{{-- Jequery cdn --}}



<!-- Plugins js-->
<script src="{{ asset('assets/libs/flatpickr/flatpickr.min.js') }}"></script>
<script src="{{ asset('assets/libs/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js') }}"></script>
<script src="{{ asset('assets/libs/clockpicker/bootstrap-clockpicker.min.js') }}"></script>
<script src="{{ asset('assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('assets/libs/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js') }}"></script>

{{-- <script src="{{ asset('assets/libs/bootstrap-tour/js/bootstrap-tour.min.js') }}"></script> --}}
{{-- <script src="{{ asset('assets/js/jquery.userTimeout.js') }}"></script> --}}
{{-- <script src="{{ asset('assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js') }}"></script> --}}
{{-- <script src="{{ asset('assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js') }}"></script> --}}
{{-- <script src="{{ asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script> --}}

{{-- <!-- Tour page js -->
        <script src="{{ asset('assets/libs/hopscotch/js/hopscotch.min.js') }}"></script>

        <!-- Tour init js-->
        <script src="{{ asset('assets/js/pages/tour.init.js') }}"></script> --}}

<!-- Dashboar 1 init js-->
{{-- <script src="{{ asset('assets/libs/sweetalert2/sweetalert2.min.js') }}"></script> --}}

{{--  <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>  --}}


<!-- Init js-->
{{-- <script src="{{ asset('assets/libs/pages/form-pickers.init.js') }}"></script>
<script src="{{ asset('assets/js/pages/form-wizard.init.js') }}"></script> --}}



<!-- App js-->
<script src="{{ asset('assets/js/app.min.js') }}"></script>



<!-- Plugin js-->
<script src="{{ asset('assets/libs/parsleyjs/parsley.min.js') }}"></script>

<!-- Validation init js-->
{{-- <script src="{{ asset('assets/js/pages/form-validation.init.js') }}"></script> --}}

<script>
    function formatToCurrency(amount) {
        return amount.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, "$&,");
    };
</script>


<script type='text/javascript'>
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            pageLanguage: 'en',
            layout: google.translate.TranslateElement.InlineLayout.SIMPLE
        }, 'google_translate_element');
    }

</script>

<script type='text/javascript' src='//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit'></script>

<script>
$.ajaxSetup({
    timeout: 3000,
    retryAfter:7000
});
</script>
