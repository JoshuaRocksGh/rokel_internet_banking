function getAccounts(account_data) {
    return $.ajax({
        type: "GET",
        url: "get-accounts-api",
        datatype: "application/json",

        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        success: function (response) {
            if (response.responseCode !== "000") {
                toater(response.message, "error");
                setTimeout(() => {
                    if (response.data == null) {
                        window.location = "logout";
                    }
                }, 1500);
            }
        },
        error: function (xhr, status, error) {
            setTimeout(function () {
                getAccounts(account_data);
            }, $.ajaxSetup().retryAfter);
        },
    });
}

// copilot ajax get method
