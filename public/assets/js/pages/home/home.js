function account_transaction() {
    $.ajax({
                        type: 'GET',
                        url: 'get-my-account',
                        datatype: "application/json",
                        success: function(response) {
                            let data = response.data
                            $.each(data, function(index) {
                                $('#account_transaction').append($('<option>', {
                                    value: data[index].accountType + '~' + data[index]
                                        .accountDesc + '~' + data[index].accountNumber +
                                        '~' + data[index].currency + '~' + data[index]
                                        .availableBalance
                                }).text(data[index].accountNumber + ' ' + '-' + ' ' + data[index]
                                    .currency + ' ' + '-' + ' ' +
                                    formatToCurrency(parseFloat(data[index].availableBalance.trim()))));

                            });
                 

                        },

                    })
                }

                function fixed_deposit(account_data) {

                    $('.my_investment_loading_area').show()
                    $('.my_investment_error_area').hide()
                    $('.my_investment_no_data_found').hide()
                    $('.my_investment_display_area').hide()

                    $.ajax({

                        type: "GET",
                        url: "fixed-deposit-account-api",
                        datatype: "application/json",
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(response) {


                            if (response.responseCode == '000') {

                                let data = response.data;
                                if (response.data == null) {
                                    $('.my_investment_loading_area').hide()
                                    $('.my_investment_error_area').hide()
                                    $('.my_investment_no_data_found').show()
                                    $('.my_investment_display_area').hide()
                                    return false;
                                }

                                let loan_count = 0
                                if (response.data.length > 0) {

                                    account_data.i_invest_total = 0
                                    $.each(data, function(index) {

                                        let invest_amount = data[index].dealAmount
                                        invest_amount = invest_amount.replace(/,/g, "");
                                        account_data.i_invest_total += Math.abs(parseFloat(invest_amount))
                                        $('.fixed_deposit_account').append(
                                            `<tr>
                                            <td><b> ${data[index].sourceAccount} </b></td>
                                            <td><b> ${data[index].dealAmount} </b></td>
                                            <td><b> ${data[index].tenure} </b></td>
                                            <td><b> ${data[index].fixedInterestRate} </b></td>
                                            <td><b> ${rollover_ } </b></td>
                                        </tr>`
                                        )

                                        loan_count = loan_count + 1;
                                    })
                                    $(".loan_count").text(loan_count);

                                    $('.my_investment_loading_area').hide()
                                    $('.my_investment_error_area').hide()
                                    $('.my_investment_no_data_found').hide()
                                    $('.my_investment_display_area').show()
                                } else {

                                    $('#p_fixed_deposit_account').html(
                                        `<h2 class="text-center text-warning">No Investment</h2>`)

                                    $('.my_investment_loading_area').hide()
                                    $('.my_investment_error_area').hide()
                                    $('.my_investment_no_data_found').show()
                                    $('.my_investment_display_area').hide()

                                }


                            } else {
                                $('.my_investment_loading_area').hide()
                                $('.my_investment_error_area').show()
                                $('.my_investment_no_data_found').hide()
                                $('.my_investment_display_area').hide()
                            }



                        },
                        error: function(xhr, status, error) {

                            $('.my_investment_loading_area').hide()
                            $('.my_investment_error_area').show()
                            $('.my_investment_no_data_found').hide()
                            $('.my_investment_display_area').hide()

                            setTimeout(function() {
                                fixed_deposit(account_data)
                            }, $.ajaxSetup().retryAfter)

                        }
                    })
                }

                // function getAccounts(account_data) {
                //     // $(".accounts_display_area").hide()
                //     // $(".accounts_error_area").hide()
                //     $(".accounts_loading_area").show()

                //     $.ajax({
                //         "type": "GET",
                //         "url": "get-accounts-api",
                //         datatype: "application/json",

                //         headers: {
                //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                //         },
                //         success: function(response) {
                //             if (response.responseCode == '000') {
                //                 let data = response.data;
                //                 console.log(data)

                //                 $('.currency_and_savings_account_no').text(data.length)
                            
                //                 account_data.i_have_total = 0
                //                 $.each(data, function(index) {
                //                     let localEquivalentAvailableBalance = data[index]
                //                         .localEquivalentAvailableBalance
                //                     localEquivalentAvailableBalance = localEquivalentAvailableBalance.replace(
                //                         /,/g, "");

                //                     account_data.i_have_total += Math.abs(parseFloat(
                //                         localEquivalentAvailableBalance))
                //                     $('.casa_list_display').append(
                //                         `<tr>
//                         <td>  <a href="{{ url('account-enquiry?accountNumber=${data[index].accountNumber}') }}">
                // <b class="text-primary">${data[index].accountNumber} </b> </a ></td >
                //                         <td> <b> ${data[index].accountDesc} </b>  </td>
                //                         <td> <b> ${data[index].accountType}  </b>  </td>
                //                         <td> <b> ${data[index].currency}  </b>  </td>
                //                         <td>  <b> 0.00  </b> </td>
                //                         {{-- <td> <b> ${formatToCurrency(parseFloat(data[index].ledgerBalance))}   </b>  </td> --}}
                //                         <td> <b> ${formatToCurrency(parseFloat(data[index].availableBalance))}   </b></td>
                //                     </tr>`
                //                     )
                //                 })


                //                 // {{-- SETTING TABLE VALUES --}}
                //                 $('.i_have_amount').text(formatToCurrency(parseFloat(account_data.i_have_total)));

                //                 // {{-- SETTING GRAPH VALUE --}}
                //                 // {{-- i_have = i_have_total --}}



                //                 $(".accounts_error_area").hide()
                //                 $(".accounts_loading_area").hide()
                //                 $(".accounts_display_area").show()

                //                 // {{-- show_chart(i_have, i_owe, i_invest_total) --}}

                //             } else {

                //                 $(".accounts_error_area").hide()
                //                 $(".accounts_loading_area").hide()
                //                 $(".accounts_display_area").show()

                //             }

                //         },
                //         error: function(xhr, status, error) {

                //             $(".accounts_loading_area").hide()
                //             $(".accounts_display_area").hide()
                //             $(".accounts_error_area").show()
                //             setTimeout(function() {
                //                 getAccounts(account_data)
                //             }, $.ajaxSetup().retryAfter)

                //         }
                //     })
                // }

                function get_loans(account_data) {

                    $(".loan_no_data_found").hide()
                    $(".loans_display_area").hide()
                    $(".loans_error_area").hide()
                    $(".loans_loading_area").show()

                    $.ajax({
                        "type": "GET",
                        "url": "get-loan-accounts-api",
                        datatype: "application/json",

                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(response) {
                            if (response.responseCode == '000') {

                                var data = response.data;
                                if (!response.data) {

                                    return false
                                    $('.loan_no_data_found').show()
                                    $(".loans_display_area").hide()
                                } else {
                                    if (response.data == null) {
                                        $('#p_loans_display').html(`<h2 class="text-center text-danger">No Loan</h2>`)
                                    } else {

                                        if (response.data.length > 0) {
                                            $('#p_loans_display').show()
                                            $(".loans_display_area").show()

                                            let i_owe_total = 0
                                            let count = 0

                                            account_data.i_owe_total = 0
                                            $.each(data, function(index) {
                                                let loanBalance = data[index].loanBalance
                                                loanBalance = loanBalance.replace(/,/g, "");
                                                account_data.i_owe_total += Math.abs(parseFloat(loanBalance))
                                                $('.loans_display').append(
                                                    `
                                            <tr>
                                                <td>  <a href="{{ url('account-enquiry?accountNumber=${data[index].facilityNo}') }}">
                                                 <b class="text-danger">${data[index].facilityNo} </b> </a></td>
                                                <td> <b> ${data[index].description} </b>  </td>
                                                <td> <b> ${data[index].isoCode}  </b>  </td>
                                                <td> <b> ${ formatToCurrency(parseFloat(data[index].amountGranted))}   </b> </b></td>
                                                <td> <b> ${formatToCurrency(parseFloat(data[index].loanBalance))}  </b>  </td>
                                            </tr>`
                                                )

                                            })
                                            // {{-- show_chart(i_have, i_owe, i_invest_total) --}}
                                        } else {
                                            $('#p_loans_display').html(`<h2 class="text-center">No Loan</h2>`)
                                        }
                                    }


                                }



                            } else if (response.responseCode == '00') {
                                $(".loan_no_data_found").show()
                                $(".loans_error_area").hide()
                                $(".loans_loading_area").hide()
                                $(".loans_display_area").hide()
                            } else {
                                $(".loan_no_data_found").hide()
                                {{-- $(".loans_error_area").hide()
                            $(".loans_loading_area").hide()
                            $(".loans_display_area").show() --}}

                            }

                        },
                        error: function(xhr, status, error) {
                            $(".loans_display_area").hide()
                            $(".loans_loading_area").hide()
                            $(".loans_error_area").show()
                            setTimeout(function() {
                                get_loans(account_data)
                            }, $.ajaxSetup().retryAfter)
                        }

                    })
                }

                // function get_currency() {
                //     $.ajax({
                //         type: 'GET',
                //         url: 'get-currency-list-api',
                //         datatype: "application/json",
                //         success: function(response) {
                //             let data = response.data
                //             $.each(data, function(index) {
                //                 $('.select_currency').append($('<option>', {
                //                     value: data[index].isoCode
                //                 }).text('(' + data[index].isoCode + ') ~ ' + data[index]
                //                     .description));
                //             });

                //         },

                //     })
                // };


                function get_correct_fx_rate() {

                    $(".currency_converter_display_area").hide()
                    $(".currency_converter_error_area").hide()
                    $(".currency_converter_loading_area").show()

                    $.ajax({
                        type: 'GET',
                        url: 'get-correct-fx-rate-api',
                        datatype: "application/json",
                        success: function(response) {
                            let data = response.data
                            if (response.responseCode == '000') {

                                $(".currency_converter_loading_area").hide()
                                $(".currency_converter_error_area").hide()
                                $(".currency_converter_display_area").show()

                                $('#hide_fx_rate').val(JSON.stringify(data))

                            } else {
                                $(".currency_converter_display_area").hide()
                                $(".currency_converter_loading_area").hide()
                                $(".currency_converter_error_area").show()
                            }



                        },
                        error: function(xhr, status, error) {
                            $(".currency_converter_display_area").hide()
                            $(".currency_converter_loading_area").hide()
                            $(".currency_converter_error_area").show()

                            setTimeout(function() {
                                get_correct_fx_rate()
                            }, $.ajaxSetup().retryAfter)
                        }

                    })
                };

                function get_fx_rate(rate_type) {

                    $(".cross_rate_display_area").hide()
                    $(".cross_rates_error_area").hide()
                    $(".cross_rates_loading_area").show()

                    $.ajax({
                        "type": "GET",
                        "url": "get-fx-rate-api?rateType=" + rate_type,
                        datatype: "application/json",

                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(response) {
                            if (response.responseCode == '000') {



                                let data = response.data;


                                if (response.data.length > 0) {
                                    if (rate_type == "Note rate") {
                                        $.each(data, function(index) {
                                            let flag_1 = ``
                                            let flag_2 = ``
                                            let pair = data[index].pair.split('/')
                                            flag_1 = `assets/images/flags/${pair[0].trim()}.png`
                                            flag_2 = `assets/images/flags/${pair[1].trim()}.png`
                                            $('.display_cross_rates').append(
                                                `<tr>
                                            <td style="zoom: 0.8;">
                                             <img src='${flag_1}' width='40px' height='20px' style='border-radius:5px;'>
                                             /
                                             <img src='${flag_2}' width='40px' height='20px' style='border-radius:5px;'>
                                            </td>
                                             <td> <b> ${parseFloat(data[index].buy)} </b> </td>
                                             <td> <b> ${parseFloat(data[index].sell)} </b> </td>
                                            </tr>`); });
                                    } else if (rate_type == "Cross rate") {
                                        $.each(data, function(index) {
                                            let flag_1 = ``
                                            let flag_2 = ``
                                            let pair = data[index].pair.split('/')
                                            flag_1 = `assets/images/flags/${pair[0].trim()}.png`
                                            flag_2 = `assets/images/flags/${pair[1].trim()}.png`
                                            $('.display_cross_rates').append(
                                                `
                                        <tr>
                                            <td style="zoom: 0.8;">
                                                <img src='${flag_1}' width='40px' height='20px' style='border-radius:5px;'>
                                                /
                                                <img src='${flag_2}' width='40px' height='20px' style='border-radius:5px;'>

                                            </td>
                                            <td> <b> ${parseFloat(data[index].buy)} </b> </td>
                                            <td> <b> ${parseFloat(data[index].sell)} </b> </td>
                                        </tr>
                                    `
                                            );
                                        });
                                    }

                                }


                                $(".cross_rates_error_area").hide()
                                $(".cross_rates_loading_area").hide()
                                $(".cross_rate_display_area").show()

                            } else {

                                $(".cross_rates_error_area").hide()
                                $(".cross_rates_loading_area").hide()
                                $(".cross_rate_display_area").show()
                            }

                        },
                        error: function(xhr, status, error) {
                            $(".cross_rate_display_area").hide()
                            $(".cross_rates_loading_area").hide()
                            $(".cross_rates_error_area").show()
                            setTimeout(function() {
                                get_fx_rate()
                            }, $.ajaxSetup().retryAfter)

                        }
                    })
                }

                function getAccountTransactions(accountNumber, transLimit) {
                                        $.ajax({
                        "type": "POST",
                        "url": "account-transaction-history",
                        datatype: "application/json",
                        data: {
                            "accountNumber": accountNumber,
                            "endDate": "NULL",
                            "entrySource": "A",
                            "startDate": "NULL",
                            "transLimit": transLimit
                        },
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(response) {
                            if (response.responseCode == '000') {
                                let data = response.data
                                console.log(data)
                                $("#transaction_history tr").remove();
                                $.each(data, function(index) {
                                    let transfer_amount = parseFloat(data[index].amount);
                                    if (transfer_amount > 0) {
                                        icon = "fe-arrow-down-left ";
                                        color = "table-success";
                                    } else {
                                        icon = "fe-arrow-down-right ";
                                        color = "table-danger";


                                    }
                                    $("#transaction_history").append(
                                        `
                                            <tr class="${color}">
                                                <td class="${color}">
                                                        ${data[index].postingSysDate}
                                                        ${data[index].narration}
                                                        ${global_selected_currency}
                                                        ${formatToCurrency(parseFloat(data[index].amount))}</span></span>
                                                </td>
                                            </tr>
                                            `
                                    )
                                })



                            } else {


                            }

                        },
                        error: function(xhr, status, error) {
                            // {{-- $("#account_transaction_loader").hide();
                            //     $(".account_transaction_display").hide();
                            //     $(".account_transaction_display_table").hide();
                            //     $("#account_transaction_retry_btn").show(); --}}
                        }
                    })
                }

                var global_selected_currency = "";



                $(document).ready(function() {

                    // {{-- dynamic_display("cross_rate_display_area", "cross_rates_error_area", "cross_rates_loading_area") --}}

                    $('.loan_no_data_found').hide()
                    $(".i_owe_display_no_data").hide()

                    $(".i_have_display_no_data").hide()
                    $(".fd_display_no_data").hide()
                    $(".fd_display").hide()

                    $(".cross_rate_display_area").hide()
                    $(".cross_rates_error_area").hide()
                    $(".cross_rates_loading_area").show()

                    $(".loans_display_area").hide()
                    $(".loans_error_area").hide()
                    $(".loans_loading_area").show()

                    // $(".accounts_display_area").hide()
                    // $(".accounts_error_area").hide()
                    $(".accounts_loading_area").show()

                    $(".currency_converter_display_area").hide()
                    $(".currency_converter_error_area").hide()
                    $(".currency_converter_loading_area").show()

                    let account_data = new Object()
                    getAccounts();
                    get_loans(account_data);
                    fixed_deposit(account_data);
                    $("#account_transaction").trigger("change")
            
                    $("#account_transaction").on("change",function() {
                        let accountNumber = $(this).val()
                        if (!accountNumber) {
                            return false
                        }
                        getAccountTransactions(accountNumber, 20)
                    })

                })



