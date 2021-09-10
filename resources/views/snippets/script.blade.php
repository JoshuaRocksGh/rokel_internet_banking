{{-- <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script> --}}

<!-- Third Party js-->
<script src="{{ asset('land_asset/js/jquery.min.js') }}"></script>
<!-- Vendor js -->
<script src="{{ asset('assets/js/vendor.min.js') }}"></script>

<!-- Plugins js-->
<script src="{{ asset('assets/libs/flatpickr/flatpickr.min.js') }}"></script>
{{-- <script src="{{ asset('assets/libs/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js') }}"> --}}
{{-- </script> --}}
{{-- <script src="{{ asset('assets/libs/clockpicker/bootstrap-clockpicker.min.js') }}"></script> --}}
<script src="{{ asset('assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}">
</script>
<script src="{{ asset('assets/libs/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js') }}">
</script>
<script src="{{ asset('assets/libs/bootstrap-select/js/bootstrap-select.min.js') }} ">
</script>

<!-- App js-->
<script src="{{ asset('assets/js/app.min.js') }}"></script>



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

<script type='text/javascript' src='//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit'>
</script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<script>
    $.ajaxSetup({
        timeout: 3000,
        retryAfter: 5000
    });

    $("input[type=number]").on("focus", function () {
        $(this).on("keydown", function (event) {
            if (event.keyCode === 38 || event.keyCode === 40) {
                event.preventDefault();
            }
        });
    });

    function toaster(message, icon, timer) {
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,

            timerProgressBar: false,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })

        Toast.fire({
            icon: icon,
            title: message,
            timer: timer
        })
    };

    function formatToCurrency(amount) {
        return amount.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, "$&,");
    }

    function validateAll(...args) {
        for (arg of args) {
            if (arg === "" || arg === undefined || arg === null) {
                return false
            }
        }
        return true
    }

    function somethingWentWrongHandler(){
        toaster("Something went wrong ... please hold on", "error", 3000)
        setTimeout(() => {
            location.reload();
            }, 3000);
    }

</script>
