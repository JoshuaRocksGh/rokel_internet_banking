<!-- ========== Left Sidebar Start ========== -->
<div class="left-side-menu" style="background-image: linear-gradient( #0561ad, #00CCFF);">

    <div class="h-100" data-simplebar>

        <!-- User box -->

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <ul id=" side-menu">

                {{-- <li class="menu-title">Navigation</li> --}}

                <li>
                    <a href="{{ url('home') }}">
                        {{-- <i class="mdi mdi-cellphone-message mdi-36px card-icon"></i></i> --}}
                        <i class="mdi mdi-home-outline"></i>
                        <span> Home</span>
                    </a>
                </li>



                {{-- <li class="menu-title mt-2">Apps</li> --}}

                @if (Session::has('menus'))
                    @foreach (Session::get('menus') as $menu)


                        @if ($menu->grouping === 'AL')
                            <li>
                                <a href="#sidebarMyAccount" data-toggle="collapse">
                                    <i class="mdi mdi-book-account-outline"></i>
                                    <span>{{ $menu->label }}</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarMyAccount">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="{{ url('account-enquiry') }}">Account Statement</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('request-statement') }}">Statement Request</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('close-account') }}">Account Closure</a>
                                        </li>
                                        <li>
                                            <a href="#budgeting" data-toggle="collapse">
                                                <span> Budgeting </span>
                                                <span class="menu-arrow"></span>
                                            </a>
                                            <div class="collapse" id="budgeting">
                                                <ul class="nav-second-level">
                                                    <li>
                                                        <a href="{{ url('budgeting-spending-statics') }}">Spending
                                                            Statistics</a>
                                                    </li>

                                                </ul>
                                            </div>
                                        </li>
                                        {{-- <li>
                                <a href="#sidebarBudgeting" data-toggle="collapse">
                                    <span>Budgeting</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarBudgeting">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="{{ url('cheque-approvals-pending') }}">Pending</a>
                </li>
                <li>
                    <a href="{{ url('cheque-approvals-approved') }}">Approved</a>
                </li>
                <li>
                    <a href="{{ url('cheque-approvals-rejected') }}">Rejected</a>
                </li>
            </ul>
        </div>
        </li> --}}
                                    </ul>
                                </div>
                            </li>


                            <li>
                                <a href="#sidebarTransfer" data-toggle="collapse">
                                    <i class="mdi mdi-rotate-3d-variant"></i>
                                    <span> Transfer </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarTransfer">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="{{ url('own-account') }}">Own Account</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('same-bank') }}">Same Bank</a>
                                        </li>


                                        {{-- <li>
                                <a href="{{ url('qr-transfer') }}">QR </a>
    </li> --}}

                                        <li>
                                            <a href="{{ url('bulk-transfer') }}">Bulk Transfer </a>
                                        </li>

                                        <li>
                                            <a href="{{ url('local-bank') }}">Local Bank</a>
                                        </li>

                                        {{-- <li>
                                <a href="{{ url('ach') }}">ACH</a>
    </li> --}}

                                        <li>
                                            <a href="{{ url('international-bank') }}">International Bank</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('standing-order') }}">Standing Order</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('standing-order-new') }}">Standing Order New</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('add-beneficiary') }}">Add Beneficiary</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('beneficiary-list') }}">Beneficiary List</a>
                                        </li>

                                        {{-- <li>
                                <a href="ecommerce-customers.html">Customers</a>
                            </li>
                            <li>
                                <a href="ecommerce-orders.html">Orders</a>
                            </li>
                            <li>
                                <a href="ecommerce-order-detail.html">Order Detail</a>
                            </li>
                            <li>
                                <a href="ecommerce-sellers.html">Sellers</a>
                            </li>
                            <li>
                                <a href="ecommerce-cart.html">Shopping Cart</a>
                            </li>
                            <li>
                                <a href="ecommerce-checkout.html">Checkout</a>
                            </li> --}}
                                    </ul>
                                </div>
                            </li>

                            <li>
                                <a href="#sidebarBeneficiary" data-toggle="collapse">
                                    <i class="mdi mdi-account-multiple-outline"></i>
                                    <span>Payments </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarBeneficiary">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="{{ url('payment-type') }}">Payment Types</a>
                                        </li>
                                        {{-- <li>
                                <a href="{{ url('mobile-money') }}">Mobile Money</a>
</li> --}}
                                        <li>
                                            <a href="{{ url('qr-transfer') }}">
                                                <span> QR</span>
                                            </a>
                                        </li>
                                        {{-- <li>
                                <a href="{{ url('airtime-payment') }}">Airtime</a>
</li> --}}
                                        <li>

                                        </li>

                                        <li>
                                            <a href="{{ url('cardless-payment') }}">Cardless</a>
                                        </li>

                                        <li>
                                            {{-- <a href="{{ url('e-korpor') }}">E-Korpor</a> --}}
                                        <li>
                                            <a href="#korpor" data-toggle="collapse">
                                                {{-- <i class="mdi mdi-book-account-outline"></i> --}}
                                                <span> E-Korpor </span>
                                                <span class="menu-arrow"></span>
                                            </a>
                                            <div class="collapse" id="korpor">
                                                <ul class="nav-second-level">
                                                    <li>
                                                        <a href="{{ url('e-korpor') }}">E-Korpor</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('bulk-korpor') }}">Bulk E-Korpor</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                            </li>
                            {{-- <li>
                    <a href="{{ url('utility-payment') }}">Utilities</a>
</li> --}}
                            <li>
                                <a href="{{ url('schedule-payment') }}">Schedule Payment</a>
                            </li>
                            <li>
                                <a href="{{ url('bulk-upload-payment') }}">Bulk Upload (Mobile Money)</a>
                            </li>
                            <li>
                                <a href="{{ url('request-blink') }}">Request Blink Pay </a>
                            </li>
                            <li>
                                <a href="{{ url('order-blink-payment') }}">Order Blink Pay </a>
                            </li>
                            <li>
                                <a href="{{ url('payment-beneficiary') }}">Add Beneficiary</a>
                            </li>
                            <li>
                                <a href="{{ url('payment-beneficiary-list') }}">Beneficiary List</a>
                            </li>
                            {{-- <li>
                                <a href="{{ url('saved-beneficiary') }}">Saved Beneficiary</a>
</li>
<li>
    <a href="{{ url('one-time-payment') }}">One Time</a>
</li>
<li>
    <a href="{{ url('payment-add-beneficiary') }}">Add Beneficiary</a>
</li> --}}

            </ul>
        </div>

        </li>

        <li>
            <a href="#sidebarLoans" data-toggle="collapse">
                <i class="mdi mdi-briefcase-check-outline"></i>
                <span> Loans </span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="sidebarLoans">
                <ul class="nav-second-level">
                    {{-- <li>
                        <a href="{{ url('loan-quotation') }}">Loan Quotation</a>
</li> --}}
                    <li>
                        <a href="{{ url('loan-request') }}">Loan Request</a>
                    </li>
                    <li>
                        <a href="#">Loan Payment</a>
                    </li>
                    {{-- <li>
                                <a href="project-create.html">Create Project</a>
                            </li> --}}
            </div>
        </li>

        <li>
            <a href="#sidebarMyInvestments" data-toggle="collapse">
                <i class="mdi mdi-domain"></i>
                <span> Investments </span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="sidebarMyInvestments">
                <ul class="nav-second-level">
                    <li>
                        <a href="{{ url('fd-creation') }}">FD Creation</a>
                    </li>
                    <li>
                        <a href="{{ url('stop-fd') }}">Stop FD</a>
                    </li>
                </ul>
            </div>
        </li>
        <li>
            <a href="#sidebarTradeFinance" data-toggle="collapse">
                <i class="mdi mdi-briefcase-check-outline"></i>
                <span> Trade Finance </span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="sidebarTradeFinance">
                <ul class="nav-second-level">
                    <li>
                        <a href="{{ url('lc-origination') }}">LC Origination</a>
                    </li>
                </ul>
            </div>
        </li>

        {{-- <li>
                    <a href="#"> --}}
        {{-- <i class="mdi mdi-cellphone-message mdi-36px card-icon"></i></i> --}}
        {{-- <i class="mdi mdi-printer-pos"></i>
                        <span> POS</span>
                    </a>
                </li> --}}



        <li>
            <a href="#sidebarAccountServices" data-toggle="collapse">
                <i class="mdi mdi-email-multiple-outline"></i>
                <span> Account Services </span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="sidebarAccountServices">
                <ul class="nav-second-level">
                    <li>
                        <a href="{{ url('cheque-book-request') }}">Cheque Book Request </a>
                    </li>
                    <li>
                        <a href="{{ url('confirm-cheque') }}">Cheque Status</a>
                    </li>
                    <li>
                        <a href="{{ url('activate-cheque-book') }}">Activate Cheque Book</a>
                    </li>
                    <li>
                        <a href="#sidebarChequeApprovals" data-toggle="collapse">
                            <span>Cheque Approvals</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarChequeApprovals">
                            <ul class="nav-second-level">
                                <li>
                                    <a href="{{ url('cheque-approvals-pending') }}">Pending</a>
                                </li>
                                <li>
                                    <a href="{{ url('cheque-approvals-approved') }}">Approved</a>
                                </li>
                                <li>
                                    <a href="{{ url('cheque-approvals-rejected') }}">Rejected</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="{{ url('stop-cheque') }}">Stop Cheque</a>
                    </li>
                    <li>
                        <a href="#sidebarTasks" data-toggle="collapse">
                            {{-- <i class="mdi mdi-credit-card-multiple-outline"></i> --}}
                            <span> Card Services </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarTasks">
                            <ul class="nav-second-level">
                                <li>
                                    <a href="{{ url('block-debit-card') }}">Block Debit Card</a>
                                </li>
                                <li>
                                    <a href="{{ url('request-atm') }}">Request Card</a>
                                </li>
                                <li>
                                    <a href="{{ url('activate-card') }}">Activate Card</a>
                                </li>

                            </ul>
                        </div>
                    </li>

                    <li>
                        <a href="{{ url('request-for-letter') }}">Request For Letter</a>
                    </li>
                    <li>
                        <a href="{{ url('open-additional-account') }}">Open additional account</a>
                    </li>
                    <li>
                        <a href="{{ url('request-draft') }}">Request bank draft</a>
                    </li>

                    <li>
                        <a href="{{ url('add-signature') }}">Add Signatory</a>
                    </li>
                    <li>
                        <a href="{{ url('remove-signature') }}">Remove Signatory</a>
                    </li>
                    <li>
                        <a href="{{ url('kyc-update') }}">
                            {{-- <span class="badge badge-primary float-right">Hot</span> --}}
                            {{-- <i class="mdi mdi-contacts-outline"></i> --}}
                            <span> Update Company Info </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('complaint') }}">
                            <span>Make Complaint</span>
                        </a>
                    </li>



                    {{-- <li>
                                <a href="{{ url('kyc-update') }}">KYC Update</a>
</li> --}}

                </ul>
            </div>
        </li>
        <li>
            <a href="#approvals" data-toggle="collapse">
                {{-- <i class="mdi mdi-account-circle-outline"></i> --}}
                <i class="mdi mdi-checkbox-multiple-marked-outline"></i>
                <span> Approvals </span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="approvals">
                <ul class="nav-second-level">
                    <li>
                        <a href="{{ url('approvals-pending') }}">Pending</a>
                    </li>
                    <li>
                        <a href="{{ url('approvals-approved') }}">Approved</a>
                    </li>
                    <li>
                        <a href="{{ url('approvals-rejected') }}">Rejected</a>
                    </li>
                    <li>
                        <a href="{{ url('transfer-status') }}">Transfer Status</a>
                    </li>
                </ul>
            </div>
        </li>

        {{-- <li>
                    <a href="#sidebarChatbot" data-toggle="collapse">

                        <i class="mdi mdi-chat-processing-outline"></i>
                        <span> Chatbot </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarChatbot">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ url('WhatsApp-Chatbot') }}">WhatsApp</a>
</li>
<li>
    <a href="{{ url('Facebook-Chatbot') }}">Facebook</a>
</li>
<li>
    <a href="{{ url('Instagram-Chatbot') }}">Instagram</a>
</li>
</ul>
</div>
</li> --}}


        <li>
            <a href="#sidebarSetting" data-toggle="collapse">
                {{-- <i class="mdi mdi-account-circle-outline"></i> --}}
                <i class="mdi mdi-cog-outline"></i>
                <span> Settings </span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="sidebarSetting">
                <ul class="nav-second-level">
                    <li>
                        <a href="{{ url('create-originator') }}">Create Originator</a>
                    </li>
                    <li>
                        <a href="{{ url('set-transaction-limit') }}">Set Transaction Limits</a>
                    </li>
                    <li>
                        <a href="{{ url('update-company-info') }}">Update Company Information</a>
                    </li>
                    <li>
                        <a href="{{ url('forgot-transaction-pin') }}">Forgot Transaction PIN</a>
                    </li>
                    {{-- <li>
                                <a href="{{ url('biometric-setup') }}">Biometric Setup</a>
</li> --}}
                    <li>
                        <a href="{{ url('change-pin') }}">Pin Setup</a>
                    </li>

                    <li>
                        <a href="tables-jsgrid.html">JsGrid Tables</a>
                    </li>
                </ul>
            </div>
        </li>

        <li>
            <a href="#sidebarCharts" data-toggle="collapse">
                <i class="mdi mdi-poll"></i>
                <span> Charts </span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="sidebarCharts">
                <ul class="nav-second-level">
                    <li>
                        <a href="charts-apex.html">Apex Charts</a>
                    </li>
                    <li>
                        <a href="charts-flot.html">Flot Charts</a>
                    </li>
                    <li>
                        <a href="charts-morris.html">Morris Charts</a>
                    </li>
                    <li>
                        <a href="charts-chartjs.html">Chartjs Charts</a>
                    </li>
                    <li>
                        <a href="charts-peity.html">Peity Charts</a>
                    </li>
                    <li>
                        <a href="charts-chartist.html">Chartist Charts</a>
                    </li>
                    <li>
                        <a href="charts-c3.html">C3 Charts</a>
                    </li>
                    <li>
                        <a href="charts-sparklines.html">Sparklines Charts</a>
                    </li>
                    <li>
                        <a href="charts-knob.html">Jquery Knob Charts</a>
                    </li>
                </ul>
            </div>
        </li>

        <li>
            <a href="#sidebarMaps" data-toggle="collapse">
                <i class="mdi mdi-map-outline"></i>
                <span> Maps </span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="sidebarMaps">
                <ul class="nav-second-level">
                    <li>
                        <a href="maps-google.html">Google Maps</a>
                    </li>
                    <li>
                        <a href="maps-vector.html">Vector Maps</a>
                    </li>
                    <li>
                        <a href="maps-mapael.html">Mapael Maps</a>
                    </li>
                </ul>
            </div>
        </li>

        <li>
            <a href="#sidebarMultilevel" data-toggle="collapse">
                <i class="mdi mdi-share-variant"></i>
                <span> Multi Level </span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="sidebarMultilevel">
                <ul class="nav-second-level">
                    <li>
                        <a href="#sidebarMultilevel2" data-toggle="collapse">
                            Second Level <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarMultilevel2">
                            <ul class="nav-second-level">
                                <li>
                                    <a href="javascript: void(0);">Item 1</a>
                                </li>
                                <li>
                                    <a href="javascript: void(0);">Item 2</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li>
                        <a href="#sidebarMultilevel3" data-toggle="collapse">
                            Third Level <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarMultilevel3">
                            <ul class="nav-second-level">
                                <li>
                                    <a href="javascript: void(0);">Item 1</a>
                                </li>
                                <li>
                                    <a href="#sidebarMultilevel4" data-toggle="collapse">
                                        Item 2 <span class="menu-arrow"></span>
                                    </a>
                                    <div class="collapse" id="sidebarMultilevel4">
                                        <ul class="nav-second-level">
                                            <li>
                                                <a href="javascript: void(0);">Item 1</a>
                                            </li>
                                            <li>
                                                <a href="javascript: void(0);">Item 2</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </li>


        </ul>

    </div>
    <!-- End Sidebar -->

    <div class="clearfix"></div>

</div>
<!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->
