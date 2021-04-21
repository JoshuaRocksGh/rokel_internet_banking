$(document).ready(function () {

    var exch_rate_from = $('#exch_rate_from').val();
    var exch_rate_to = $('#exch_rate_to').val();

    $('#exch_rate_from').change(function () {
        let exch_rate_from = $(this).val()
        alert(exch_rate_from)
    })

    $('#exch_rate_to').change(function () {
        let exch_rate_to = $(this).val()
        alert(exch_rate_to)
    })

    $('#amount').keyup(function () {
        let amount = $(this).val()
        alert(amount)
    })

});
