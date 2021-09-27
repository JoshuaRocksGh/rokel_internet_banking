<!-- Third Party js-->
{{-- <script src="{{ asset('land_asset/js/jquery.min.js') }}"></script> --}}


<script type="text/javascript">
    if(typeof jQuery == 'undefined'){
        var oScriptElem = document.createElement("script");
        oScriptElem.type = "text/javascript";
        oScriptElem.src = "http://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.6.0.min.js";
        document.head.insertBefore(oScriptElem, document.head.getElementsByTagName("script")[0])
    }
</script>

<!-- Vendor js -->
<script src="{{ asset('assets/js/vendor.min.js') }}" defer></script>

<!-- Plugins js-->
{{-- <script src="{{ asset('assets/libs/flatpickr/flatpickr.min.js') }}" defer></script> --}}
{{-- <script src="{{ asset('assets/libs/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js') }}"> --}}
{{-- </script> --}}
{{-- <script src="{{ asset('assets/libs/clockpicker/bootstrap-clockpicker.min.js') }}"></script> --}}
{{-- <script src="{{ asset('assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}" defer>
</script>
<script src="{{ asset('assets/libs/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js') }}" defer>
</script> --}}
{{-- <script src="{{ asset('assets/libs/bootstrap-select/js/bootstrap-select.min.js') }} ">
</script> --}}

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous" defer>
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
</script>

{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js" defer></script> --}}
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11" defer></script>

<!-- App js-->
<script src="{{ asset('assets/js/app.min.js') }}" defer></script>
<script src="{{ asset('assets/js/functions/getAccounts.js') }}" defer></script>



<script defer>
    function formatToCurrency(amount) {
        return amount.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, "$&,");
    };

</script>

{{--
<script type='text/javascript' defer>
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            pageLanguage: 'en',
            layout: google.translate.TranslateElement.InlineLayout.SIMPLE
        }, 'google_translate_element');
    }

</script>

<script type='text/javascript' src='//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit' defer>
</script> --}}
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10" defer></script>

<script defer>
    $("input[type=number]").on("focus", function () {
        $(this).on("keydown", function (event) {
            if (event.keyCode === 38 || event.keyCode === 40) {
                event.preventDefault();
            }
        });
    });

    function toaster(message, icon, timer = 3000) {
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
            if (arg === "" || arg === undefined || arg === null || arg == NaN) {
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