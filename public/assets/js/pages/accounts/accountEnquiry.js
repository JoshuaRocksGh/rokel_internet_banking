$(function () {
    // console.log("a")
    let today = new Date();
    let day = today.getDate().toString().padStart(2, "0");
    let month = (today.getMonth() + 1).toString().padStart(2, "0");
    let start_date = today.getFullYear() + "-" + month + "-01";
    let end_date = today.getFullYear() + "-" + month + "-" + day;
    let this_day = end_date;

    $("#startDate").val(start_date);
    $("#endDate").val(end_date);

    // get_accounts();

    $("#from_account").change(function () {
        let from_account = $(this).val();
        from_account_info = from_account.split("~");
        // set summary values for display
        $(".account_product").text(from_account_info[0]);
        $(".account_description").text(from_account_info[1]);
        $(".account_number").text(from_account_info[2]);
        $(".display_from_account_currency").text(from_account_info[3]);
        $(".account_currency").text(from_account_info[3]);
    });

    $("#search_transaction").click(function () {
        start_date = $("#startDate").val();
        end_date = $("#endDate").val();
        if (start_date > this_day) {
            toaster("Start Date can't be greater than today", "warning", 3000);
            return false;
        } else if (end_date > this_day) {
            toaster("End Date can't be greater than today", "warning", 3000);
            return false;
        } else if (start_date > end_date) {
            toaster(
                "Start Date can't be greater than End Date",
                "warning",
                3000
            );
            return false;
        } else {
            var from_account = $("#from_account").val();
            console.log(start_date);
            if (!validateAll(from_account)) {
                toaster("please select an account", "warning", 3000);
                $("#search_transaction").text("Search");
                return false;
            } else {
                $("#search_transaction").text("Loading ...");
                from_account_info = from_account.split("~");
                account_number = from_account_info[2].trim();
                getAccountTransactions(account_number, start_date, end_date);
            }
        }
    });

    $("#date_search").click(function () {
        $(".account_transaction_display").hide();
        $(".account_transaction_display_table").hide();
        $("#account_transaction_retry_btn").hide();
        $("#account_transaction_loader").show();
        getAccountTransactions(account_number, start_date, end_date);
    });

    $("#credit_transaction").click(function () {
        $("#table-body-display").empty();
        let data = transactions;
        var load_data = [];
        $.each(data, function (index) {
            if (parseFloat(data[index].amount) > 0) {
                // {{-- alert(data[index].amount) --}}
                load_data.push(data[index]);
            } else {
            }
        });

        load_data_into_table(load_data, account_number, start_date, end_date);
    });

    $("#filter").change(function () {
        let filter = $(this).val();

        let account = $("#from_account").val();

        if (account == "" || account == undefined) {
            return false;
        }

        if (filter == "debit") {
            $("#table-body-display").empty();
            // {{-- return false --}}

            let data = transactions;
            var load_data = [];
            $.each(data, function (index) {
                if (parseFloat(data[index].amount) < 0) {
                    // {{-- alert(data[index].amount) --}}
                    load_data.push(data[index]);
                } else {
                }
            });
            load_data_into_table(
                load_data,
                account_number,
                start_date,
                end_date
            );
        } else if (filter == "credit") {
            $("#table-body-display").empty();
            // {{-- return false --}}

            let data = transactions;
            var load_data = [];
            $.each(data, function (index) {
                if (parseFloat(data[index].amount) > 0) {
                    // {{-- alert(data[index].amount) --}}
                    load_data.push(data[index]);
                } else {
                }
            });

            load_data_into_table(
                load_data,
                account_number,
                start_date,
                end_date
            );
        } else {
            let load_data = transactions;
            load_data_into_table(
                load_data,
                account_number,
                start_date,
                end_date
            );
        }

        // {{-- $('#table-body-display').empty()

        // let data = transactions

        // load_data_into_table(transactions) --}}
    });

    $("#all_transaction").click(function () {
        $("#table-body-display").empty();

        let data = transactions;

        load_data_into_table(transactions);
    });

    $("#debit_transaction").click(function () {
        $("#table-body-display").empty();
        // {{-- return false --}}

        let data = transactions;
        var load_data = [];
        $.each(data, function (index) {
            if (parseFloat(data[index].amount) < 0) {
                // {{-- alert(data[index].amount) --}}
                load_data.push(data[index]);
            } else {
            }
        });
        load_data_into_table(load_data, account_number, start_date, end_date);
    });

    function load_data_into_table(data, account_number, start_date, end_date) {
        // {{-- $('#table-body-display').empty() --}}

        $("#table-body-display tr").remove();
        $(".account_transaction_display").hide();
        $(".account_transaction_display_table").hide();
        $("#account_transaction_retry_btn").hide();
        $("#account_transaction_loader").show();

        $(".display_account_number").text(account_number);
        $(".display_search_date_range").text(start_date + " to " + end_date);

        $("#table-body-display").html("");

        var table = $(".account_transaction_display_table").DataTable({
            destroy: true,
            // dom: "Bfrtip",
            // buttons: ["copy", "excel", "pdf"],
        });

        table.clear().draw();

        if (data.length > 0) {
            $.each(data, function (index) {
                let amount = ``;
                if (parseFloat(data[index].amount) > 0) {
                    amount = `<b class='text-success'>
                                        <i class="fe-arrow-up text-success mr-1"></i>
                                        ${formatToCurrency(
                                            parseFloat(data[index].amount)
                                        )}
                                    </b>
                                    `;
                } else {
                    amount = `<b class='text-danger'>
                                        <i class="fe-arrow-down text-danger mr-1"></i>
                                        ${formatToCurrency(
                                            parseFloat(data[index].amount)
                                        )}
                                    </b>
                                    `;
                }

                let attachment = ``;

                if (data[index].imageCheck == "0") {
                    attachment = `<i class="fe-file-text text-center text-danger">`;
                } else {
                    attachment = `<i  class="fe-minus text-center text-secondary">`;
                }

                let sysDate = new Date(data[index].postingSysDate);
                let dd = String(sysDate.getDate()).padStart(2, "0");
                let mm = String(sysDate.getMonth() + 1).padStart(2, "0"); //January is 0!
                let yyyy = sysDate.getFullYear();

                table.row
                    .add([
                        data[index].documentReference,
                        dd + "/" + mm + "/" + yyyy,
                        amount,
                        `${formatToCurrency(
                            parseFloat(data[index].runningBalance)
                        )}`,

                        data[index].narration,
                        data[index].contraAccount,
                        // data[index].transactionNumber,
                        data[index].batchNumber,
                        attachment,
                        // attachment,
                    ])
                    .order([0, "desc"])
                    .column(0)
                    .visible(false, false)
                    .draw(false);
            });
        } else {
        }

        $("#account_transaction_loader").hide();
        $("#account_transaction_retry_btn").hide();
        $(".account_transaction_display_table").show();
        $(".account_transaction_display").show();
    }

    function getAccountTransactions(account_number, start_date, end_date) {
        $("#search_transaction").text("Loading ...");
        $.ajax({
            type: "POST",
            url: "account-transaction-history",
            datatype: "application/json",
            data: {
                accountNumber: account_number,
                endDate: end_date,
                entrySource: "A",
                startDate: start_date,
                transLimit: "20",
            },
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
            success: function (response) {
                console.log(response);
                if (response.responseCode == "000") {
                    transactions = response.data;
                    if (response.data.length === 0) {
                        toaster(response.message, "warning", 3000);
                    }
                    $("#search_transaction").text("Search");
                    load_data_into_table(
                        transactions,
                        account_number,
                        start_date,
                        end_date
                    );

                    $("#account_transaction_loader").hide();
                    $("#account_transaction_retry_btn").hide();
                    $(".account_transaction_display_table").show();
                    $(".account_transaction_display").show();
                } else {
                    $("#search_transaction").text("Search");
                    $("#account_transaction_loader").hide();
                    $(".account_transaction_display").hide();
                    $(".account_transaction_display_table").hide();
                    $("#account_transaction_retry_btn").show();
                    toaster(response.message, "warning", 3000);
                }
            },
            error: function (xhr, status, error) {
                $("#search_transaction").text("Search");
                $("#account_transaction_loader").hide();
                $(".account_transaction_display").hide();
                $(".account_transaction_display_table").hide();
                $("#account_transaction_retry_btn").show();
                // toaster(error, "error", 3000);

                setTimeout(function () {
                    getAccountTransactions(
                        account_number,
                        start_date,
                        end_date
                    );
                }, $.ajaxSetup().retryAfter);
            },
        });
    }

    // {{-- function getAccountBalanceInfo($account_number) {
    //     $.ajax({
    //         "type": "POST",
    //         "url": "api/account-balance-info",
    //         datatype: "application/json",
    //         data: {
    //             "accountNumber": account_number,
    //             "authToken": "15D2A303-98FD-43A6-86E4-F24FC7436069",
    //             "endDate": "",
    //             "entrySource": "A",
    //             "startDate": "",
    //             "transLimit": "string"
    //         },
    //         headers: {
    //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //         },
    //         success: function(response) {
    //             console.log(response);
    //             if (response.responseCode == '000') {

    //                 let account_info = response.data;
    //                 console.log(account_info)
    //                 $('.account_number_display').text(account_info.ACCOUNT_NUMBER)
    //                 $('.account_description_display').text(account_info.ACCOUNT_DESCRIPTION)
    //                 $('.account_currency_display').text(account_info.CURRENCY)
    //                 $('.account_product_display').text(account_info.PRODUCT)

    //                 $('.account_ledger_bal_display').text(account_info.LEGDER_BALANCE)
    //                 $('.account_available_bal_display').text(account_info.AVAILABLE_BALANCE)
    //                 $('.account_amount_in_arrears_display').text(account_info
    //                     .AMOUNT_IN_ARREAS)
    //                 $('.account_overdrawn_limit_display').text(account_info.OVERDRAFT_LIMIT)
    //                 $('.account_accrued_credit_interest_display').text(account_info
    //                     .ACCRUED_CREDIT_INTREST)
    //                 $('.account_credit_interest_rate_display').text(account_info
    //                     .CREDIT_INTEREST_RATE)
    //                 $('.account_accrued_debit_interest_display').text(account_info
    //                     .ACCRUED_DEBIT_INTEREST)
    //                 $('.account_debit_interest_rate_display').text(account_info
    //                     .DEBIT_INTERST_RATE)

    //                 $("#account_balance_info_loader").hide();
    //                 $("#account_balance_info_retry_btn").hide();
    //                 $("#account_balance_info_display").show();

    //             } else {
    //                 $("#account_balance_info_loader").hide();
    //                 $("#account_balance_info_display").hide();
    //                 $("#account_balance_info_retry_btn").show();
    //             }
    //         },
    //         error: function(xhr, status, error) {
    //             $("#account_balance_info_loader").hide();
    //             $("#account_balance_info_display").hide();
    //             $("#account_balance_info_retry_btn").show();
    //         }
    //     })
    // } --}}
});
