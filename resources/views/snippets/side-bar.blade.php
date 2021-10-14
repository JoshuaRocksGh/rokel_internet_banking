<!-- ========== Left Sidebar Start ========== -->
<div class="left-side-menu" style="background-image: linear-gradient( #0561ad, #00CCFF);">

    <div class="h-100" data-simplebar>

        <!-- User box -->

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <ul id=" side-menu">

                {{-- <li class="menu-title">Navigation</li> --}}
                <br />

                <li>
                    <a href="{{ url('home') }}">
                        {{-- <i class="mdi mdi-cellphone-message mdi-36px card-icon"></i></i> --}}
                        <i class="mdi mdi-home-outline"></i>
                        <span> Home</span>
                    </a>
                </li>



                {{-- <li class="menu-title mt-2">Apps</li> --}}

                {{-- @if (Session::has('menus')) --}}
                {{-- @foreach (Session::get('menus') as $menu) --}}


                {{-- @if ($menu->grouping === 'AL') --}}
                <li>
                    <a href="#sidebarMyAccount" data-toggle="collapse">
                        <i class="mdi mdi-book-account-outline"></i>
                        <span> My Account</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarMyAccount">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ url('my-accounts') }}">Accounts</a>
                            </li>
                            <li>
                                <a href="{{ url('account-enquiry') }}">Account Enquiry</a>
                            </li>
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
                                <a href="{{ url('bulk-transfer') }}">Bulk Transfer </a>
                </li> --}}

                <li>
                    <a href="{{ url('local-bank') }}">Other Bank</a>
                </li>

                <li>
                    <a href="{{ url('international-bank') }}">International Bank</a>
                </li>
                <li>
                    <a href="{{ url('standing-order') }}">Standing Order</a>
                </li>
                <li>
                    <a href="{{ url('transfer-status') }}">Transfer Status</a>
                </li>
                {{-- <li>
                                <a href="{{ url('standing-order-new') }}">Standing Order New</a>
                </li> --}}
                <li>
                    <a href="{{ url('add-beneficiary') }}">Add Beneficiary</a>
                </li>
                <li>
                    <a href="{{ url('beneficiary-list') }}">Beneficiary List</a>
                </li>
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
                        <a href="{{ url('payment-type') }}">Make Payment</a>
                    </li>


                    <li>
                        <a href="{{ url('cardless-payment') }}">Cardless</a>
                    </li>
                    <li>
                        <a href="{{ url('e-korpor') }}">E-Korpor</a>
                    </li>
                    <li>
                        <a href="{{ url('qr-transfer') }}">
                            <span> QR Payment</span>
                        </a>
                    </li>
                    {{-- <li>
                        <a href="{{ url('schedule-payment') }}">Schedule Payment</a>
        </li> --}}
        {{-- <li>
                        <a href="{{ url('bulk-upload-payment') }}">Bulk Upload (Mobile Money)</a>
        </li> --}}
        {{-- <li>
                        <a href="{{ url('request-blink') }}">Request Blink Pay </a>
        </li> --}}
        {{-- <li>
                        <a href="{{ url('order-blink-payment') }}">Order Blink Pay </a>
        </li> --}}
        <li>
            <a href="{{ url('payment-beneficiary') }}">Add Beneficiary</a>
        </li>
        <li>
            <a href="{{ url('payment-beneficiary-list') }}">Beneficiary List</a>
        </li>
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
                <li>
                    <a href="{{ url('loan-request') }}">Loan Request</a>
                </li>
                <li>
                    <a href="#">Loan Payment</a>
                </li>
            </ul>
        </div>
    </li>

    {{-- <li>
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
            {{-- <li>
                        <a href="{{ url('activate-cheque-book') }}">Activate Cheque Book</a>
</li> --}}
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
{{-- <li>
                                <a href="{{ url('stop-cheque') }}">Stop Cheque</a>
</li> --}}
<li>
    <a href="#sidebarTasks" data-toggle="collapse">
        {{-- <i class="mdi mdi-credit-card-multiple-outline"></i> --}}
        <span> Card Services </span>
        <span class="menu-arrow"></span>
    </a>
    <div class="collapse" id="sidebarTasks">
        <ul class="nav-second-level">
            <li>
                <a href="{{ url('request-atm') }}">Request Card</a>
            </li>
            <li>
                <a href="{{ url('activate-card') }}">Activate Card</a>
            </li>
            <li>
                <a href="{{ url('block-debit-card') }}">Block Debit Card</a>
            </li>

        </ul>
    </div>
</li>
<li>
    <a href="#sidebarRequests" data-toggle="collapse">
        {{-- <i class="mdi mdi-credit-card-multiple-outline"></i> --}}
        <span> Requests </span>
        <span class="menu-arrow"></span>
    </a>
    <div class="collapse" id="sidebarRequests">
        <ul class="nav-second-level">
            <li>
                <a href="{{ url('request-for-letter') }}">Request For Letter</a>
            </li>
            <li>
                <a href="{{ url('request-statement') }}">Statement Request</a>
            </li>
            <li>
                <a href="{{ url('request-draft') }}">Request bank draft</a>
            </li>
        </ul>
    </div>
</li>
<li>
    <a href="{{ url('open-additional-account') }}">Open additional account</a>
</li>


<li>
    <a href="{{ url('add-signature') }}">Add Signatory</a>
</li>
<li>
    <a href="{{ url('remove-signature') }}">Remove Signatory</a>
</li>
<li>
    <a href="{{ url('kyc-update') }}">
        <span> Update Company Info </span>
    </a>
</li>
<li>
    <a href="{{ url('complaint') }}">
        <span>Make Complaint</span>
    </a>
</li>

</ul>
</div>
</li>
{{-- <li>
                    <a href="#approvals" data-toggle="collapse">
                        <i class="mdi mdi-account-circle-outline"></i>
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

</ul>
</div>
</li> --}}

{{-- <li>
                    <a href="#transfer_status" data-toggle="collapse">
                        <i class="mdi mdi-account-circle-outline"></i>
                        <i class="mdi mdi-checkbox-multiple-marked-outline"></i>
                        <span> Transfer Status</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="transfer_status">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ url('ach-transfer-pending') }}">ACH Transfer</a>
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
</li> --}}

<li><a href="#sidebarSetting" data-toggle="collapse">
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

            <li>
                <a href="{{ url('change-pin') }}">Pin Setup</a>
            </li>


        </ul>
    </div>
</li>

<li>
    <a href="{{ url('branch-locator') }}">
        <i class="mdi mdi-map-marker-outline"></i>
        <span> Branch Locator </span>
    </a>
</li>

<li>
    <a href="#" id="sidebar_logout">
        <i data-feather="power" class="icon-dual-activity"></i>
        <span> Logout </span>
    </a>
</li>

</ul>

</div>
<!-- End Sidebar -->

<div class="clearfix"></div>

</div>
<!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->
<script>
    $('#sidebar_logout').on("click", (e) => {
e.preventDefault()
Swal.fire({
     title: "Logout successful!",
     html: 'Redirecting ...',
     icon: 'success',
     showConfirmButton: false,
    //  timer: "3000"
    })
    setTimeout(() => {
        window.location.replace('logout')
    }, 1000);
  })
    // } )

</script>