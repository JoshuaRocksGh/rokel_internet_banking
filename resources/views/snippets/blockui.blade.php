<style>
    .blockMsg {
        top: 50% !important;
        left: 50% !important;
    }
</style>
<script>
    function blockUi (block = "#preloader", message="Please Wait", size="50px") {
    $(block).block({

        message: `<div><img class="pulse" style="width: ${size};" src="assets/images/logoRKB.png" /><span class="text-semibold d-block ml-2 font-weight-bold">${message}</span></div>`,
        // timeout: 2000, //unblock after 2 seconds
        overlayCSS: {
            backgroundColor: '#fff',
            opacity: 0.8,
            cursor: 'wait'
        },
        css: {
            width: 'auto',
            padding: '10px 15px',
            '-webkit-border-radius': 2,
            '-moz-border-radius': 2,
            border: 0,
            'font-size': '1rem',

            transform: 'translate(-50%, -50%)',
            // color: '#fff',
            backgroundColor: 'none'
        }
    });

}
function unBlockUi (block = "#preloader"){
    $(block).unblock()

}
</script>
<script src="assets/plugins/blockui/jquery.blockUI.min.js" defer></script>