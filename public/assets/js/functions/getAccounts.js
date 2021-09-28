function getAccounts(account_data) {
    $.ajax({
        type: "GET",
        url: "get-accounts-api",
        datatype: "application/json",

        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        success: function (response) {},
        error: function (xhr, status, error) {
            setTimeout(function () {
                getAccounts(account_data);
            }, $.ajaxSetup().retryAfter);
        },
    });
}
