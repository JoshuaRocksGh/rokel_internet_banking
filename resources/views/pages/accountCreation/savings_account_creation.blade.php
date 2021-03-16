@extends('layouts.app')


@section('content')

<legend></legend>
<br>

<div class="container">
    <p class="sub-header font-18 purple-color">
        SAVINGS ACCOUNT CREATION
    </p>

    <div class="row">

        <!-- Right Sidebar -->
        <div class="col-12">
            <div class="card-box">
                <!-- Left sidebar -->
                <div class="inbox-leftbar">
                    <div class="btn-group d-block mb-2">
                        {{-- <button type="button" class="btn btn-success btn-block waves-effect waves-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="mdi mdi-plus"></i> Create New</button> --}}
                        <p class="card-text" >To successfully create an account
                            You need to follow the KYC collected process</p>
                            <br>
                        <h4 class="card-title" style="color: #7e57c2">Savings Account Process</h4>
{{--
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#"><i class="mdi mdi-adjust"></i> Folder</a>
                            <a class="dropdown-item" href="#"><i class="mdi mdi-file-plus-outline mr-1"></i> File</a>
                            <a class="dropdown-item" href="#"><i class="mdi mdi-file-document mr-1"></i> Document</a>
                            <a class="dropdown-item" href="#"><i class="mdi mdi-upload mr-1"></i> Choose File</a>
                        </div> --}}
                    </div>
                    <div class="mail-list mt-3">
                        <a href="#" class="list-group-item border-0 font-14"><i class="mdi mdi-adjust font-18 align-middle mr-2" style="color: #7e57c2"></i>PERSONAL DETAILS</a>
                        <a href="#" class="list-group-item border-0 font-14"><i class="mdi mdi-adjust font-18 align-middle mr-2" style="color: #7e57c2"></i>ID  DETAILS</a>
                        <a href="#" class="list-group-item border-0 font-14"><i class="mdi mdi-adjust font-18 align-middle mr-2" style="color: #7e57c2"></i>CONTACT DETAILS</a>
                        <a href="#" class="list-group-item border-0 font-14"><i class="mdi mdi-adjust font-18 align-middle mr-2" style="color: #7e57c2"></i>BIO DETAILS</a>
                    </div>

                    <br>
                    <h4 class="card-title" style="color: #7e57c2">Requirements</h4>
                    <div class="mail-list mt-3">
                        <a href="#" class="list-group-item border-0 font-14"><i class="mdi mdi-account-check-outline font-18 align-middle mr-2" style="color: #7e57c2"></i>Selfie</a>
                        <a href="#" class="list-group-item border-0 font-14"><i class="mdi mdi-card-account-details-outline font-18 align-middle mr-2" style="color: #7e57c2"></i>ID (Driver Licence SSNIT/Passport/Voter card +
                            Birth Certificate)</a>
                        <a href="#" class="list-group-item border-0 font-14"><i class="mdi mdi-map-marker-outline font-18 align-middle mr-2" style="color: #7e57c2"></i>Residential Address</a>
                        {{-- <a href="#" class="list-group-item border-0 font-14"><i class="mdi mdi-adjust font-18 align-middle mr-2" style="color: #7e57c2"></i>BIO DETAILS</a> --}}
                    </div>

                    <br>

                    <h5 class="card-title" ><i class="mdi mdi-alert-circle mdi-18px" style="color: #7e57c2"></i>&nbsp; Must be 18 years and above</h5>


                </div>
                <!-- End Left sidebar -->


                <div class="inbox-rightbar">
                    {{-- <div class="d-flex justify-content-between align-items-center">
                        <form class="search-bar">
                            <div class="position-relative">
                                <input type="text" class="form-control form-control-light" placeholder="Search files...">
                                <span class="mdi mdi-magnify"></span>
                            </div>
                        </form>
                        <div>
                            <button type="submit" class="btn btn-sm btn-white"><i class="mdi mdi-format-list-bulleted"></i></button>
                            <button type="submit" class="btn btn-sm btn-white"><i class="mdi mdi-view-grid"></i></button>
                            <button type="submit" class="btn btn-sm btn-white"><i class="mdi mdi-information-outline"></i></button>
                        </div>
                    </div> --}}
{{--
                    <div class="mt-3">
                        <h5 class="mb-2">Quick Access</h5>

                        <div class="row mx-n1 no-gutters">
                            <div class="col-xl-3 col-lg-6">
                                <div class="card m-1 shadow-none border">
                                    <div class="p-2">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <div class="avatar-sm">
                                                    <span class="avatar-title bg-light text-secondary rounded">
                                                        <i class="mdi mdi-folder-zip font-18"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col pl-0">
                                                <a href="javascript:void(0);" class="text-muted font-weight-medium">Ubold-sketch-design.zip</a>
                                                <p class="mb-0 font-13">2.3 MB</p>
                                            </div>
                                        </div> <!-- end row -->
                                    </div> <!-- end .p-2-->
                                </div> <!-- end col -->
                            </div> <!-- end col-->

                            <div class="col-xl-3 col-lg-6">
                                <div class="card m-1 shadow-none border">
                                    <div class="p-2">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <div class="avatar-sm">
                                                    <span class="avatar-title bg-light text-secondary rounded">
                                                        <i class="mdi mdi-folder font-18"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col pl-0">
                                                <a href="javascript:void(0);" class="text-muted font-weight-medium">Compile Version</a>
                                                <p class="mb-0 font-13">87.2 MB</p>
                                            </div>
                                        </div> <!-- end row -->
                                    </div> <!-- end .p-2-->
                                </div> <!-- end col -->
                            </div> <!-- end col-->

                            <div class="col-xl-3 col-lg-6">
                                <div class="card m-1 shadow-none border">
                                    <div class="p-2">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <div class="avatar-sm">
                                                    <span class="avatar-title bg-soft-primary text-primary rounded">
                                                        <i class="mdi mdi-folder-zip font-18"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col pl-0">
                                                <a href="javascript:void(0);" class="text-muted font-weight-medium">admin-dashboard.zip</a>
                                                <p class="mb-0 font-13">45.1 MB</p>
                                            </div>
                                        </div> <!-- end row -->
                                    </div> <!-- end .p-2-->
                                </div> <!-- end col -->
                            </div> <!-- end col-->

                            <div class="col-xl-3 col-lg-6">
                                <div class="card m-1 shadow-none border">
                                    <div class="p-2">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <div class="avatar-sm">
                                                    <span class="avatar-title bg-light text-secondary rounded">
                                                        <i class="mdi mdi-file-pdf-outline font-18"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col pl-0">
                                                <a href="javascript:void(0);" class="text-muted font-weight-medium">Documentation.pdf</a>
                                                <p class="mb-0 font-13">7.5 MB</p>
                                            </div>
                                        </div> <!-- end row -->
                                    </div> <!-- end .p-2-->
                                </div> <!-- end col -->
                            </div> <!-- end col-->

                            <div class="col-xl-3 col-lg-6">
                                <div class="card m-1 shadow-none border">
                                    <div class="p-2">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <div class="avatar-sm">
                                                    <span class="avatar-title bg-light text-secondary rounded">
                                                        <i class="mdi mdi-file-pdf-outline font-18"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col pl-0">
                                                <a href="javascript:void(0);" class="text-muted font-weight-medium">License-details.pdf</a>
                                                <p class="mb-0 font-13">784 KB</p>
                                            </div>
                                        </div> <!-- end row -->
                                    </div> <!-- end .p-2-->
                                </div> <!-- end col -->
                            </div> <!-- end col-->

                            <div class="col-xl-3 col-lg-6">
                                <div class="card m-1 shadow-none border">
                                    <div class="p-2">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <div class="avatar-sm">
                                                    <span class="avatar-title bg-light text-secondary rounded">
                                                        <i class="mdi mdi-folder-account font-18"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col pl-0">
                                                <a href="javascript:void(0);" class="text-muted font-weight-medium">Purchase Verification</a>
                                                <p class="mb-0 font-13">2.2 MB</p>
                                            </div>
                                        </div> <!-- end row -->
                                    </div> <!-- end .p-2-->
                                </div> <!-- end col -->
                            </div> <!-- end col-->

                            <div class="col-xl-3 col-lg-6">
                                <div class="card m-1 shadow-none border">
                                    <div class="p-2">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <div class="avatar-sm">
                                                    <span class="avatar-title bg-light text-secondary rounded">
                                                        <i class="mdi mdi-folder-account font-18"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col pl-0">
                                                <a href="javascript:void(0);" class="text-muted font-weight-medium">Ubold Integrations</a>
                                                <p class="mb-0 font-13">874 MB</p>
                                            </div>
                                        </div> <!-- end row -->
                                    </div> <!-- end .p-2-->
                                </div> <!-- end col -->
                            </div> <!-- end col-->
                        </div> <!-- end row-->
                    </div> <!-- end .mt-3--> --}}

{{--
                    <div class="mt-3">
                        <h5 class="mb-3">Recent</h5>

                        <div class="table-responsive">
                            <table class="table table-centered table-nowrap mb-0">
                                <thead class="thead-light">
                                    <tr>
                                        <th class="border-0">Name</th>
                                        <th class="border-0">Last Modified</th>
                                        <th class="border-0">Size</th>
                                        <th class="border-0">Owner</th>
                                        <th class="border-0">Members</th>
                                        <th class="border-0" style="width: 80px;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="border-0">
                                            <i data-feather="folder" class="icon-dual"></i>
                                            <span class="ml-2 font-weight-medium"><a href="javascript: void(0);" class="text-reset">App Design & Development</a></span>
                                        </td>
                                        <td class="border-0">
                                            <p class="mb-0">Jan 03, 2020</p>
                                            <span class="font-12">by Andrew</span>
                                        </td>
                                        <td class="border-0">128 MB</td>
                                        <td class="border-0">
                                            Danielle Thompson
                                        </td>
                                        <td class="border-0">
                                            <div class="avatar-group">
                                                <a href="javascript: void(0);" class="avatar-group-item mb-0" data-toggle="tooltip" data-placement="top" title="" data-original-title="Mat Helme">
                                                    <img src="../assets/images/users/user-1.jpg" class="rounded-circle avatar-xs" alt="friend">
                                                </a>

                                                <a href="javascript: void(0);" class="avatar-group-item mb-0" data-toggle="tooltip" data-placement="top" title="" data-original-title="Michael Zenaty">
                                                    <img src="../assets/images/users/user-2.jpg" class="rounded-circle avatar-xs" alt="friend">
                                                </a>

                                                <a href="javascript: void(0);" class="avatar-group-item mb-0" data-toggle="tooltip" data-placement="top" title="" data-original-title="James Anderson">
                                                    <img src="../assets/images/users/user-3.jpg" class="rounded-circle avatar-xs" alt="friend">
                                                </a>

                                                <a href="javascript: void(0);" class="avatar-group-item mb-0" data-toggle="tooltip" data-placement="top" title="" data-original-title="Username">
                                                    <img src="../assets/images/users/user-5.jpg" class="rounded-circle avatar-xs" alt="friend">
                                                </a>
                                            </div>
                                        </td>
                                        <td class="border-0">
                                            <div class="btn-group dropdown">
                                                <a href="javascript: void(0);" class="table-action-btn dropdown-toggle arrow-none btn btn-light btn-xs" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#"><i class="mdi mdi-share-variant mr-2 text-muted vertical-middle"></i>Share</a>
                                                    <a class="dropdown-item" href="#"><i class="mdi mdi-link mr-2 text-muted vertical-middle"></i>Get Sharable Link</a>
                                                    <a class="dropdown-item" href="#"><i class="mdi mdi-pencil mr-2 text-muted vertical-middle"></i>Rename</a>
                                                    <a class="dropdown-item" href="#"><i class="mdi mdi-download mr-2 text-muted vertical-middle"></i>Download</a>
                                                    <a class="dropdown-item" href="#"><i class="mdi mdi-delete mr-2 text-muted vertical-middle"></i>Remove</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <i data-feather="file" class="icon-dual"></i>
                                            <span class="ml-2 font-weight-medium"><a href="javascript: void(0);" class="text-reset">Ubold-sketch-design.zip</a></span>
                                        </td>
                                        <td>
                                            <p class="mb-0">Feb 13, 2020</p>
                                            <span class="font-12">by Coderthemes</span>
                                        </td>
                                        <td>521 MB</td>
                                        <td>
                                            Coder Themes
                                        </td>
                                        <td>
                                            <div class="avatar-group">
                                                <a href="javascript: void(0);" class="avatar-group-item mb-0" data-toggle="tooltip" data-placement="top" title="" data-original-title="Mat Helme">
                                                    <img src="../assets/images/users/user-4.jpg" class="rounded-circle avatar-xs" alt="friend">
                                                </a>

                                                <a href="javascript: void(0);" class="avatar-group-item mb-0" data-toggle="tooltip" data-placement="top" title="" data-original-title="Michael Zenaty">
                                                    <img src="../assets/images/users/user-1.jpg" class="rounded-circle avatar-xs" alt="friend">
                                                </a>

                                                <a href="javascript: void(0);" class="avatar-group-item mb-0" data-toggle="tooltip" data-placement="top" title="" data-original-title="James Anderson">
                                                    <img src="../assets/images/users/user-6.jpg" class="rounded-circle avatar-xs" alt="friend">
                                                </a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="btn-group dropdown">
                                                <a href="javascript: void(0);" class="table-action-btn dropdown-toggle arrow-none btn btn-light btn-xs" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#"><i class="mdi mdi-share-variant mr-2 text-muted vertical-middle"></i>Share</a>
                                                    <a class="dropdown-item" href="#"><i class="mdi mdi-link mr-2 text-muted vertical-middle"></i>Get Sharable Link</a>
                                                    <a class="dropdown-item" href="#"><i class="mdi mdi-pencil mr-2 text-muted vertical-middle"></i>Rename</a>
                                                    <a class="dropdown-item" href="#"><i class="mdi mdi-download mr-2 text-muted vertical-middle"></i>Download</a>
                                                    <a class="dropdown-item" href="#"><i class="mdi mdi-delete mr-2 text-muted vertical-middle"></i>Remove</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <i data-feather="file-text" class="icon-dual"></i>
                                            <span class="ml-2 font-weight-medium"><a href="javascript: void(0);" class="text-reset">Annualreport.pdf</a></span>
                                        </td>
                                        <td>
                                            <p class="mb-0">Dec 18, 2019</p>
                                            <span class="font-12">by Alejandro</span>
                                        </td>
                                        <td>7.2 MB</td>
                                        <td>
                                            Gary Coley
                                        </td>
                                        <td>
                                            <div class="avatar-group">
                                                <a href="javascript: void(0);" class="avatar-group-item mb-0" data-toggle="tooltip" data-placement="top" title="" data-original-title="Mat Helme">
                                                    <img src="../assets/images/users/user-9.jpg" class="rounded-circle avatar-xs" alt="friend">
                                                </a>

                                                <a href="javascript: void(0);" class="avatar-group-item mb-0" data-toggle="tooltip" data-placement="top" title="" data-original-title="Michael Zenaty">
                                                    <img src="../assets/images/users/user-7.jpg" class="rounded-circle avatar-xs" alt="friend">
                                                </a>

                                                <a href="javascript: void(0);" class="avatar-group-item mb-0" data-toggle="tooltip" data-placement="top" title="" data-original-title="James Anderson">
                                                    <img src="../assets/images/users/user-3.jpg" class="rounded-circle avatar-xs" alt="friend">
                                                </a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="btn-group dropdown">
                                                <a href="javascript: void(0);" class="table-action-btn dropdown-toggle arrow-none btn btn-light btn-xs" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#"><i class="mdi mdi-share-variant mr-2 text-muted vertical-middle"></i>Share</a>
                                                    <a class="dropdown-item" href="#"><i class="mdi mdi-link mr-2 text-muted vertical-middle"></i>Get Sharable Link</a>
                                                    <a class="dropdown-item" href="#"><i class="mdi mdi-pencil mr-2 text-muted vertical-middle"></i>Rename</a>
                                                    <a class="dropdown-item" href="#"><i class="mdi mdi-download mr-2 text-muted vertical-middle"></i>Download</a>
                                                    <a class="dropdown-item" href="#"><i class="mdi mdi-delete mr-2 text-muted vertical-middle"></i>Remove</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <i data-feather="folder" class="icon-dual"></i>
                                            <span class="ml-2 font-weight-medium"><a href="javascript: void(0);" class="text-reset">Wireframes</a></span>
                                        </td>
                                        <td>
                                            <p class="mb-0">Nov 25, 2019</p>
                                            <span class="font-12">by Dunkle</span>
                                        </td>
                                        <td>54.2 MB</td>
                                        <td>
                                            Jasper Rigg
                                        </td>
                                        <td>
                                            <div class="avatar-group">
                                                <a href="javascript: void(0);" class="avatar-group-item mb-0" data-toggle="tooltip" data-placement="top" title="" data-original-title="Mat Helme">
                                                    <img src="../assets/images/users/user-1.jpg" class="rounded-circle avatar-xs" alt="friend">
                                                </a>

                                                <a href="javascript: void(0);" class="avatar-group-item mb-0" data-toggle="tooltip" data-placement="top" title="" data-original-title="Michael Zenaty">
                                                    <img src="../assets/images/users/user-8.jpg" class="rounded-circle avatar-xs" alt="friend">
                                                </a>

                                                <a href="javascript: void(0);" class="avatar-group-item mb-0" data-toggle="tooltip" data-placement="top" title="" data-original-title="James Anderson">
                                                    <img src="../assets/images/users/user-2.jpg" class="rounded-circle avatar-xs" alt="friend">
                                                </a>

                                                <a href="javascript: void(0);" class="avatar-group-item mb-0" data-toggle="tooltip" data-placement="top" title="" data-original-title="Username">
                                                    <img src="../assets/images/users/user-5.jpg" class="rounded-circle avatar-xs" alt="friend">
                                                </a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="btn-group dropdown">
                                                <a href="javascript: void(0);" class="table-action-btn dropdown-toggle arrow-none btn btn-light btn-xs" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#"><i class="mdi mdi-share-variant mr-2 text-muted vertical-middle"></i>Share</a>
                                                    <a class="dropdown-item" href="#"><i class="mdi mdi-link mr-2 text-muted vertical-middle"></i>Get Sharable Link</a>
                                                    <a class="dropdown-item" href="#"><i class="mdi mdi-pencil mr-2 text-muted vertical-middle"></i>Rename</a>
                                                    <a class="dropdown-item" href="#"><i class="mdi mdi-download mr-2 text-muted vertical-middle"></i>Download</a>
                                                    <a class="dropdown-item" href="#"><i class="mdi mdi-delete mr-2 text-muted vertical-middle"></i>Remove</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <i data-feather="file-text" class="icon-dual"></i>
                                            <span class="ml-2 font-weight-medium"><a href="javascript: void(0);" class="text-reset">Documentation.docs</a></span>
                                        </td>
                                        <td>
                                            <p class="mb-0">Feb 9, 2020</p>
                                            <span class="font-12">by Justin</span>
                                        </td>
                                        <td>8.3 MB</td>
                                        <td>
                                            Cooper Sharwood
                                        </td>
                                        <td>
                                            <div class="avatar-group">
                                                <a href="javascript: void(0);" class="avatar-group-item mb-0" data-toggle="tooltip" data-placement="top" title="" data-original-title="Mat Helme">
                                                    <img src="../assets/images/users/user-3.jpg" class="rounded-circle avatar-xs" alt="friend">
                                                </a>

                                                <a href="javascript: void(0);" class="avatar-group-item mb-0" data-toggle="tooltip" data-placement="top" title="" data-original-title="Michael Zenaty">
                                                    <img src="../assets/images/users/user-10.jpg" class="rounded-circle avatar-xs" alt="friend">
                                                </a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="btn-group dropdown">
                                                <a href="javascript: void(0);" class="table-action-btn dropdown-toggle arrow-none btn btn-light btn-xs" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#"><i class="mdi mdi-share-variant mr-2 text-muted vertical-middle"></i>Share</a>
                                                    <a class="dropdown-item" href="#"><i class="mdi mdi-link mr-2 text-muted vertical-middle"></i>Get Sharable Link</a>
                                                    <a class="dropdown-item" href="#"><i class="mdi mdi-pencil mr-2 text-muted vertical-middle"></i>Rename</a>
                                                    <a class="dropdown-item" href="#"><i class="mdi mdi-download mr-2 text-muted vertical-middle"></i>Download</a>
                                                    <a class="dropdown-item" href="#"><i class="mdi mdi-delete mr-2 text-muted vertical-middle"></i>Remove</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>

                    </div> <!-- end .mt-3--> --}}


                    <!-- Start Content-->
                    <div class="">
{{--
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">UBold</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                                            <li class="breadcrumb-item active">Checkout</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Checkout</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title --> --}}

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="nav nav-pills flex-column navtab-bg nav-pills-tab text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                                    <a class="nav-link active show py-2" id="custom-v-pills-billing-tab" data-toggle="pill" href="#custom-v-pills-billing" role="tab" aria-controls="custom-v-pills-billing"
                                                        aria-selected="true">
                                                        {{-- <i class="mdi mdi-account-circle d-block font-24"></i> --}}
                                                        Personal Details
                                                    </a>
                                                    <a class="nav-link mt-2 py-2" id="custom-v-pills-shipping-tab" data-toggle="pill" href="#custom-v-pills-shipping" role="tab" aria-controls="custom-v-pills-shipping"
                                                        aria-selected="false">
                                                        {{-- <i class="mdi mdi-truck-fast d-block font-24"></i> --}}
                                                        Contact & ID Details</a>
                                                    <a class="nav-link mt-2 py-2" id="custom-v-pills-payment-tab" data-toggle="pill" href="#custom-v-pills-payment" role="tab" aria-controls="custom-v-pills-payment"
                                                        aria-selected="false">
                                                        {{-- <i class="mdi mdi-cash-multiple d-block font-24"></i> --}}
                                                        Bio Details</a>
                                                </div>
{{--
                                                <div class="border mt-4 rounded">
                                                    <h4 class="header-title p-2 mb-0">Order Summary</h4>

                                                    <div class="table-responsive">
                                                        <table class="table table-centered table-nowrap mb-0">
                                                            <tbody>
                                                                <tr>
                                                                    <td style="width: 90px;">
                                                                        <img src="../assets/images/products/product-1.png" alt="product-img"
                                                                            title="product-img" class="rounded" height="48" />
                                                                    </td>
                                                                    <td>
                                                                        <a href="ecommerce-product-detail.html" class="text-body font-weight-semibold">Polo Navy blue T-shirt</a>
                                                                        <small class="d-block">1 x $39</small>
                                                                    </td>

                                                                    <td class="text-right">
                                                                        $39
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <img src="../assets/images/products/product-2.png" alt="product-img"
                                                                            title="product-img" class="rounded" height="48" />
                                                                    </td>

                                                                    <td>
                                                                        <a href="ecommerce-product-detail.html" class="text-body font-weight-semibold">Red Hoodie for men</a>
                                                                        <small class="d-block">2 x $46</small>
                                                                    </td>
                                                                    <td class="text-right">
                                                                        $92
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <img src="../assets/images/products/product-3.png" alt="product-img"
                                                                            title="product-img" class="rounded mr-2" height="48" />
                                                                    </td>
                                                                    <td>
                                                                        <a href="ecommerce-product-detail.html" class="text-body font-weight-semibold">Designer Awesome T-Shirt</a>
                                                                        <small class="d-block">1 x $26</small>
                                                                    </td>
                                                                    <td class="text-right">
                                                                        $26
                                                                    </td>
                                                                </tr>
                                                                <tr class="text-right">
                                                                    <td colspan="2">
                                                                        <h6 class="m-0">Sub Total:</h6>
                                                                    </td>
                                                                    <td class="text-right">
                                                                        $157
                                                                    </td>
                                                                </tr>
                                                                <tr class="text-right">
                                                                    <td colspan="2">
                                                                        <h6 class="m-0">Shipping:</h6>
                                                                    </td>
                                                                    <td class="text-right">
                                                                        FREE
                                                                    </td>
                                                                </tr>
                                                                <tr class="text-right">
                                                                    <td colspan="2">
                                                                        <h5 class="m-0">Total:</h5>
                                                                    </td>
                                                                    <td class="text-right font-weight-semibold">
                                                                        $157
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <!-- end table-responsive -->
                                                </div> <!-- end .border-->
                                                 --}}
                                            </div> <!-- end col-->
                                            <div class="col-lg-8">
                                                <div class="tab-content p-3">
                                                    <div class="tab-pane fade active show" id="custom-v-pills-billing" role="tabpanel" aria-labelledby="custom-v-pills-billing-tab">
                                                        <div>
                                                            <h4 class="header-title">Personal Details</h4>

                                                            <form>
                                                                <div class="">
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            {{-- <label for="billing-first-name">First Name</label> --}}
                                                                            {{-- <input class="form-control" type="text" placeholder="Enter your first name" id="billing-first-name" /> --}}

                                                                                <select class="custom-select ">
                                                                                    <option selected>Title</option>
                                                                                    <option value="1">Mr</option>
                                                                                    <option value="2">Mrs</option>
                                                                                    <option value="3">Dr</option>
                                                                                    <option value="4">Miss</option>
                                                                                </select>

                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            {{-- <label for="billing-last-name">Last Name</label> --}}
                                                                            <input class="form-control" type="text" placeholder="Surname" id="billing-last-name" />
                                                                        </div>
                                                                    </div>
                                                                </div> <!-- end row -->

                                                                <div class="">
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            {{-- <label for="billing-email-address">Email Address <span class="text-danger">*</span></label> --}}
                                                                            <input class="form-control" type="email" placeholder="Firstname" id="billing-email-address" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label for="billing-phone">Gender</label>
                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group">

                                                                                        <div class="radio form-check-inline radio-primary">
                                                                                            <input type="radio" id="inlineRadio1" value="option1" name="radioInline" >
                                                                                            <label for="inlineRadio1">Male </label>
                                                                                        </div>

                                                                                    </div>
                                                                                </div>

                                                                                <div class="col-md-6">
                                                                                    <div class="form-group">

                                                                                            <div class="radio form-check-inline radio-primary">
                                                                                                <input type="radio" id="inlineRadio2" value="option2" name="radioInline">
                                                                                                <label for="inlineRadio2">Female </label>
                                                                                            </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            {{-- <input class="form-control" type="text" placeholder="(xx) xxx xxxx xxx" id="billing-phone" /> --}}
                                                                        </div>
                                                                    </div>
                                                                </div> <!-- end row -->

                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <div class="form-group">
                                                                            <label for="billing-address">Date of Birth</label>
                                                                            {{-- <input class="form-control" type="text" placeholder="Enter full address" id="billing-address"> --}}

                                                                            <div class="form-group mb-3">
                                                                                {{-- <label for="example-date">Date</label> --}}
                                                                                <input class="form-control" id="example-date" type="date" name="date">
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div> <!-- end row -->

                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label for="billing-town-city">Place of Birth</label>
                                                                            <input class="form-control" type="text" placeholder="Enter your place of birth" id="billing-town-city" />
                                                                        </div>
                                                                    </div>

                                                                </div> <!-- end row -->
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <div class="form-group">
                                                                            <label>Country</label>
                                                                            <select data-toggle="select2" title="Country" class="form-control">
                                                                                <option value="0">Select Country</option>
                                                                                <option value="AF">Afghanistan</option>
                                                                                <option value="AL">Albania</option>
                                                                                <option value="DZ">Algeria</option>
                                                                                <option value="AS">American Samoa</option>
                                                                                <option value="AD">Andorra</option>
                                                                                <option value="AO">Angola</option>
                                                                                <option value="AI">Anguilla</option>
                                                                                <option value="AQ">Antarctica</option>
                                                                                <option value="AR">Argentina</option>
                                                                                <option value="AM">Armenia</option>
                                                                                <option value="AW">Aruba</option>
                                                                                <option value="AU">Australia</option>
                                                                                <option value="AT">Austria</option>
                                                                                <option value="AZ">Azerbaijan</option>
                                                                                <option value="BS">Bahamas</option>
                                                                                <option value="BH">Bahrain</option>
                                                                                <option value="BD">Bangladesh</option>
                                                                                <option value="BB">Barbados</option>
                                                                                <option value="BY">Belarus</option>
                                                                                <option value="BE">Belgium</option>
                                                                                <option value="BZ">Belize</option>
                                                                                <option value="BJ">Benin</option>
                                                                                <option value="BM">Bermuda</option>
                                                                                <option value="BT">Bhutan</option>
                                                                                <option value="BO">Bolivia</option>
                                                                                <option value="BW">Botswana</option>
                                                                                <option value="BV">Bouvet Island</option>
                                                                                <option value="BR">Brazil</option>
                                                                                <option value="BN">Brunei Darussalam</option>
                                                                                <option value="BG">Bulgaria</option>
                                                                                <option value="BF">Burkina Faso</option>
                                                                                <option value="BI">Burundi</option>
                                                                                <option value="KH">Cambodia</option>
                                                                                <option value="CM">Cameroon</option>
                                                                                <option value="CA">Canada</option>
                                                                                <option value="CV">Cape Verde</option>
                                                                                <option value="KY">Cayman Islands</option>
                                                                                <option value="CF">Central African Republic</option>
                                                                                <option value="TD">Chad</option>
                                                                                <option value="CL">Chile</option>
                                                                                <option value="CN">China</option>
                                                                                <option value="CX">Christmas Island</option>
                                                                                <option value="CC">Cocos (Keeling) Islands</option>
                                                                                <option value="CO">Colombia</option>
                                                                                <option value="KM">Comoros</option>
                                                                                <option value="CG">Congo</option>
                                                                                <option value="CK">Cook Islands</option>
                                                                                <option value="CR">Costa Rica</option>
                                                                                <option value="CI">Cote dIvoire</option>
                                                                                <option value="HR">Croatia (Hrvatska)</option>
                                                                                <option value="CU">Cuba</option>
                                                                                <option value="CY">Cyprus</option>
                                                                                <option value="CZ">Czech Republic</option>
                                                                                <option value="DK">Denmark</option>
                                                                                <option value="DJ">Djibouti</option>
                                                                                <option value="DM">Dominica</option>
                                                                                <option value="DO">Dominican Republic</option>
                                                                                <option value="EC">Ecuador</option>
                                                                                <option value="EG">Egypt</option>
                                                                                <option value="SV">El Salvador</option>
                                                                                <option value="GQ">Equatorial Guinea</option>
                                                                                <option value="ER">Eritrea</option>
                                                                                <option value="EE">Estonia</option>
                                                                                <option value="ET">Ethiopia</option>
                                                                                <option value="FK">Falkland Islands (Malvinas)</option>
                                                                                <option value="FO">Faroe Islands</option>
                                                                                <option value="FJ">Fiji</option>
                                                                                <option value="FI">Finland</option>
                                                                                <option value="FR">France</option>
                                                                                <option value="GF">French Guiana</option>
                                                                                <option value="PF">French Polynesia</option>
                                                                                <option value="GA">Gabon</option>
                                                                                <option value="GM">Gambia</option>
                                                                                <option value="GE">Georgia</option>
                                                                                <option value="DE">Germany</option>
                                                                                <option value="GH">Ghana</option>
                                                                                <option value="GI">Gibraltar</option>
                                                                                <option value="GR">Greece</option>
                                                                                <option value="GL">Greenland</option>
                                                                                <option value="GD">Grenada</option>
                                                                                <option value="GP">Guadeloupe</option>
                                                                                <option value="GU">Guam</option>
                                                                                <option value="GT">Guatemala</option>
                                                                                <option value="GN">Guinea</option>
                                                                                <option value="GW">Guinea-Bissau</option>
                                                                                <option value="GY">Guyana</option>
                                                                                <option value="HT">Haiti</option>
                                                                                <option value="HN">Honduras</option>
                                                                                <option value="HK">Hong Kong</option>
                                                                                <option value="HU">Hungary</option>
                                                                                <option value="IS">Iceland</option>
                                                                                <option value="IN">India</option>
                                                                                <option value="ID">Indonesia</option>
                                                                                <option value="IQ">Iraq</option>
                                                                                <option value="IE">Ireland</option>
                                                                                <option value="IL">Israel</option>
                                                                                <option value="IT">Italy</option>
                                                                                <option value="JM">Jamaica</option>
                                                                                <option value="JP">Japan</option>
                                                                                <option value="JO">Jordan</option>
                                                                                <option value="KZ">Kazakhstan</option>
                                                                                <option value="KE">Kenya</option>
                                                                                <option value="KI">Kiribati</option>
                                                                                <option value="KR">Korea, Republic of</option>
                                                                                <option value="KW">Kuwait</option>
                                                                                <option value="KG">Kyrgyzstan</option>
                                                                                <option value="LV">Latvia</option>
                                                                                <option value="LB">Lebanon</option>
                                                                                <option value="LS">Lesotho</option>
                                                                                <option value="LR">Liberia</option>
                                                                                <option value="LY">Libyan Arab Jamahiriya</option>
                                                                                <option value="LI">Liechtenstein</option>
                                                                                <option value="LT">Lithuania</option>
                                                                                <option value="LU">Luxembourg</option>
                                                                                <option value="MO">Macau</option>
                                                                                <option value="MG">Madagascar</option>
                                                                                <option value="MW">Malawi</option>
                                                                                <option value="MY">Malaysia</option>
                                                                                <option value="MV">Maldives</option>
                                                                                <option value="ML">Mali</option>
                                                                                <option value="MT">Malta</option>
                                                                                <option value="MH">Marshall Islands</option>
                                                                                <option value="MQ">Martinique</option>
                                                                                <option value="MR">Mauritania</option>
                                                                                <option value="MU">Mauritius</option>
                                                                                <option value="YT">Mayotte</option>
                                                                                <option value="MX">Mexico</option>
                                                                                <option value="MD">Moldova, Republic of</option>
                                                                                <option value="MC">Monaco</option>
                                                                                <option value="MN">Mongolia</option>
                                                                                <option value="MS">Montserrat</option>
                                                                                <option value="MA">Morocco</option>
                                                                                <option value="MZ">Mozambique</option>
                                                                                <option value="MM">Myanmar</option>
                                                                                <option value="NA">Namibia</option>
                                                                                <option value="NR">Nauru</option>
                                                                                <option value="NP">Nepal</option>
                                                                                <option value="NL">Netherlands</option>
                                                                                <option value="AN">Netherlands Antilles</option>
                                                                                <option value="NC">New Caledonia</option>
                                                                                <option value="NZ">New Zealand</option>
                                                                                <option value="NI">Nicaragua</option>
                                                                                <option value="NE">Niger</option>
                                                                                <option value="NG">Nigeria</option>
                                                                                <option value="NU">Niue</option>
                                                                                <option value="NF">Norfolk Island</option>
                                                                                <option value="MP">Northern Mariana Islands</option>
                                                                                <option value="NO">Norway</option>
                                                                                <option value="OM">Oman</option>
                                                                                <option value="PW">Palau</option>
                                                                                <option value="PA">Panama</option>
                                                                                <option value="PG">Papua New Guinea</option>
                                                                                <option value="PY">Paraguay</option>
                                                                                <option value="PE">Peru</option>
                                                                                <option value="PH">Philippines</option>
                                                                                <option value="PN">Pitcairn</option>
                                                                                <option value="PL">Poland</option>
                                                                                <option value="PT">Portugal</option>
                                                                                <option value="PR">Puerto Rico</option>
                                                                                <option value="QA">Qatar</option>
                                                                                <option value="RE">Reunion</option>
                                                                                <option value="RO">Romania</option>
                                                                                <option value="RU">Russian Federation</option>
                                                                                <option value="RW">Rwanda</option>
                                                                                <option value="KN">Saint Kitts and Nevis</option>
                                                                                <option value="LC">Saint LUCIA</option>
                                                                                <option value="WS">Samoa</option>
                                                                                <option value="SM">San Marino</option>
                                                                                <option value="ST">Sao Tome and Principe</option>
                                                                                <option value="SA">Saudi Arabia</option>
                                                                                <option value="SN">Senegal</option>
                                                                                <option value="SC">Seychelles</option>
                                                                                <option value="SL">Sierra Leone</option>
                                                                                <option value="SG">Singapore</option>
                                                                                <option value="SK">Slovakia (Slovak Republic)</option>
                                                                                <option value="SI">Slovenia</option>
                                                                                <option value="SB">Solomon Islands</option>
                                                                                <option value="SO">Somalia</option>
                                                                                <option value="ZA">South Africa</option>
                                                                                <option value="ES">Spain</option>
                                                                                <option value="LK">Sri Lanka</option>
                                                                                <option value="SH">St. Helena</option>
                                                                                <option value="PM">St. Pierre and Miquelon</option>
                                                                                <option value="SD">Sudan</option>
                                                                                <option value="SR">Suriname</option>
                                                                                <option value="SZ">Swaziland</option>
                                                                                <option value="SE">Sweden</option>
                                                                                <option value="CH">Switzerland</option>
                                                                                <option value="SY">Syrian Arab Republic</option>
                                                                                <option value="TW">Taiwan, Province of China</option>
                                                                                <option value="TJ">Tajikistan</option>
                                                                                <option value="TZ">Tanzania, United Republic of</option>
                                                                                <option value="TH">Thailand</option>
                                                                                <option value="TG">Togo</option>
                                                                                <option value="TK">Tokelau</option>
                                                                                <option value="TO">Tonga</option>
                                                                                <option value="TT">Trinidad and Tobago</option>
                                                                                <option value="TN">Tunisia</option>
                                                                                <option value="TR">Turkey</option>
                                                                                <option value="TM">Turkmenistan</option>
                                                                                <option value="TC">Turks and Caicos Islands</option>
                                                                                <option value="TV">Tuvalu</option>
                                                                                <option value="UG">Uganda</option>
                                                                                <option value="UA">Ukraine</option>
                                                                                <option value="AE">United Arab Emirates</option>
                                                                                <option value="GB">United Kingdom</option>
                                                                                <option value="US">United States</option>
                                                                                <option value="UY">Uruguay</option>
                                                                                <option value="UZ">Uzbekistan</option>
                                                                                <option value="VU">Vanuatu</option>
                                                                                <option value="VE">Venezuela</option>
                                                                                <option value="VN">Viet Nam</option>
                                                                                <option value="VG">Virgin Islands (British)</option>
                                                                                <option value="VI">Virgin Islands (U.S.)</option>
                                                                                <option value="WF">Wallis and Futuna Islands</option>
                                                                                <option value="EH">Western Sahara</option>
                                                                                <option value="YE">Yemen</option>
                                                                                <option value="ZM">Zambia</option>
                                                                                <option value="ZW">Zimbabwe</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div> <!-- end row -->

                                                                <div class="row mt-4">
                                                                    <div class="col-sm-6">
                                                                        <a href="ecommerce-cart.html" class="btn btn-secondary">
                                                                            <i class="mdi mdi-arrow-left"></i> Back to Shopping Cart </a>
                                                                    </div> <!-- end col -->
                                                                    <div class="col-sm-6">
                                                                        <div class="text-sm-right mt-2 mt-sm-0">
                                                                            <a href="ecommerce-checkout.html" class="btn btn-success">
                                                                                <i class="mdi mdi-truck-fast mr-1"></i> Proceed to Shipping </a>
                                                                        </div>
                                                                    </div> <!-- end col -->
                                                                </div> <!-- end row -->
                                                            </form>
                                                        </div>
                                                    </div>

                                                    <div class="tab-pane fade" id="custom-v-pills-shipping" role="tabpanel" aria-labelledby="custom-v-pills-shipping-tab">
                                                        <div>
                                                            <h4 class="header-title">Contact Details</h4>

                                                            <div class="">
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        {{-- <label for="billing-last-name">Last Name</label> --}}
                                                                        <input class="form-control" type="number" placeholder="Mobile number" id="billing-last-name" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        {{-- <label for="billing-last-name">Last Name</label> --}}
                                                                        <input class="form-control" type="email" placeholder="Email" id="billing-last-name" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        {{-- <label for="billing-last-name">Last Name</label> --}}
                                                                        <input class="form-control" type="text" placeholder="City" id="billing-last-name" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        {{-- <label for="billing-last-name">Last Name</label> --}}
                                                                        <input class="form-control" type="text" placeholder="Town" id="billing-last-name" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        {{-- <label for="billing-last-name">Last Name</label> --}}
                                                                        <input class="form-control" type="text" placeholder="Home Address" id="billing-last-name" />
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <!-- end row-->

                                                            <h4 class="header-title mt-4">ID Details</h4>

                                                            <div class="">
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        {{-- <label for="billing-first-name">First Name</label> --}}
                                                                        {{-- <input class="form-control" type="text" placeholder="Enter your first name" id="billing-first-name" /> --}}

                                                                            <select class="custom-select ">
                                                                                <option selected>ID Type</option>
                                                                                <option value="1">Passport</option>
                                                                                <option value="2">Driver license</option>
                                                                                <option value="3">Voter ID</option>
                                                                                <option value="4">Ghana Card</option>
                                                                            </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        {{-- <label for="billing-last-name">Last Name</label> --}}
                                                                        <input class="form-control" type="number" placeholder="ID Number" id="billing-last-name" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label for="billing-last-name">Date of Issue</label>
                                                                        <input class="form-control" type="date" placeholder="Date of Issue" id="billing-last-name" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label for="billing-last-name">Date of Expiry</label>
                                                                        <input class="form-control" type="date" placeholder=" " id="billing-last-name" />
                                                                    </div>
                                                                </div>


                                                                <div class="form-group mb-3">
                                                                    <label for="example-fileinput">Upload Image of Selected ID</label>
                                                                    <input type="file" id="example-fileinput" class="form-control-file">
                                                                </div>

                                                            </div>
                                                            <!-- end row-->

                                                            <div class="row mt-4">
                                                                <div class="col-sm-6">
                                                                    <a href="ecommerce-cart.html" class="btn btn-secondary">
                                                                        <i class="mdi mdi-arrow-left"></i> Back to Shopping Cart </a>
                                                                </div> <!-- end col -->
                                                                <div class="col-sm-6">
                                                                    <div class="text-sm-right mt-2 mt-sm-0">
                                                                        <a href="ecommerce-checkout.html" class="btn btn-success">
                                                                            <i class="mdi mdi-cash-multiple mr-1"></i> Continue to Payment </a>
                                                                    </div>
                                                                </div> <!-- end col -->
                                                            </div> <!-- end row -->
                                                        </div>
                                                    </div>

                                                    <div class="tab-pane fade" id="custom-v-pills-payment" role="tabpanel" aria-labelledby="custom-v-pills-payment-tab">
                                                        <div>
                                                            <h4 class="header-title">Bio Details</h4>

                                                            <!-- Passport Picture Upload-->

                                                            <!-- Credit/Debit Card box-->

                                                            <!-- Cash on Delivery box-->

                                                            <!-- end Cash on Delivery box-->

                                                            <div class="row mt-4">
                                                                <div class="col-sm-6">
                                                                    <a href="ecommerce-cart.html" class="btn btn-secondary">
                                                                        <i class="mdi mdi-arrow-left"></i> Back to Shopping Cart </a>
                                                                </div> <!-- end col -->
                                                                <div class="col-sm-6">
                                                                    <div class="text-sm-right mt-2 mt-sm-0">
                                                                        <a href="ecommerce-checkout.html" class="btn btn-success">
                                                                            <i class="mdi mdi-cash-multiple mr-1"></i> Complete Order </a>
                                                                    </div>
                                                                </div> <!-- end col -->
                                                            </div> <!-- end row-->

                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- end col-->
                                        </div> <!-- end row-->

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                    </div> <!-- container -->

                </div>
                <!-- end inbox-rightbar-->

                <div class="clearfix"></div>
            </div> <!-- end card-box -->

        </div> <!-- end Col -->
    </div><!-- End row -->



{{--
    <div class="col-md-12">
        <div class="card">
            <div class="card-body text-secondary">
                <p class="card-text" >To successfully create an account
                    You need to follow the KYC collected process</p>
                <h5 class="card-title" style="color: #7e57c2">Savings Account Process</h5>

                <div class="row">
                    <div class="col-md-3">

                        <p class="card-text"><i class="mdi mdi-adjust " style="color: #7e57c2"></i>&nbsp; PERSONAL DETAILS</p>
                    </div>
                    <div class="col-md-3">
                        <p class="card-text"><i class="mdi mdi-adjust " style="color: #7e57c2"></i>&nbsp; ID  DETAILS</p>
                    </div>
                    <div class="col-md-3">
                        <p class="card-text"><i class="mdi mdi-adjust " style="color: #7e57c2"></i>&nbsp; CONTACT DETAILS</p>
                    </div>
                    <div class="col-md-3">
                        <p class="card-text"><i class="mdi mdi-adjust " style="color: #7e57c2"></i>&nbsp; BIO DETAILS</p>
                    </div>
                </div>
                    <br>
                    <h5 class="card-title" style="color: #7e57c2">Requirements</h5>
                    <div class="row">
                        <div class="col-md-3">

                            <p class="card-text"><i class="mdi mdi-account-check-outline" style="color: #7e57c2"></i>&nbsp;Selfie</p>
                        </div>
                        <div class="col-md-3">
                            <p class="card-text"><i class="mdi mdi-card-account-details-outline " style="color: #7e57c2"></i>&nbsp; ID (Driver Licence SSNIT/Passport/Voter card +
                                Birth Certificate)</p>
                        </div>
                        <div class="col-md-3">
                            <p class="card-text"><i class="mdi mdi-map-marker-outline" style="color: #7e57c2"></i>&nbsp; Residential Address</p>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-4">
                            <h5 class="card-title" ><i class="mdi mdi-alert-circle mdi-18px" style="color: #7e57c2"></i>&nbsp; Must be 18 years and above</h5>
                        </div>
                    </div>

                </div>


            </div>


        </div> <!-- end card-box-->
    </div> <!-- end col -->
 --}}

</div>

@endsection
