@extends('layouts.app')

@section('content')

@include('snippets.top_navbar', ['page_title' => 'ACCOUNT OPENING'])



<div class="container">

    <br><br><br><br>

    <div class="card">
        <div class="card-body">


    <div class="row">
        <div class="col-md-5">
            <div class="col-12 ">
                <form class="search-bar form-inline">
                    <div class="position-relative">
                        <input type="text" class="form-control" placeholder="Search...">
                        <span class="mdi mdi-magnify"></span>
                    </div>
                </form>
            </div>
            <br>

            <div class="col-12 ">

                <div class="table-responsive" style="height: 420px;">
                    <table class="table table-centered table-nowrap mb-0">
                        <tbody>



                            <tr>
                                <td style="width: 10px;">
                                    <div class="avatar-sm rounded bg-soft-info">
                                        <i class="dripicons-map font-12 avatar-title text-info"></i>
                                    </div>
                                </td>
                                <td>
                                    <a href="ecommerce-product-detail.html"
                                        class="text-body font-weight-semibold">Accra Central</a>
                                    <small class="d-block">0302720885</small>
                                    <small class="d-block">8:00-16:00 Mon-Fri</small>
                                </td>

                            </tr>
                            <tr>
                                <td style="width: 10px;">
                                    <div class="avatar-sm rounded bg-soft-info">
                                        <i class="ddripicons-map font-4 avatar-title text-info"></i>
                                    </div>
                                </td>
                                <td>
                                    <a href="ecommerce-product-detail.html"
                                        class="text-body font-weight-semibold">Savings Account</a>
                                    <small class="d-block">01024499300101</small>
                                </td>

                            </tr>
                            <tr>
                                <td style="width: 10px;">
                                    <div class="avatar-sm rounded bg-soft-info">
                                        <i class="ddripicons-map font-4 avatar-title text-info"></i>
                                    </div>
                                </td>
                                <td>
                                    <a href="ecommerce-product-detail.html"
                                        class="text-body font-weight-semibold">Savings Account</a>
                                    <small class="d-block">01024499300101</small>
                                </td>

                            </tr>
                            <tr>
                                <td style="width: 10px;">
                                    <div class="avatar-sm rounded bg-soft-info">
                                        <i class="ddripicons-map font-4 avatar-title text-info"></i>
                                    </div>
                                </td>
                                <td>
                                    <a href="ecommerce-product-detail.html"
                                        class="text-body font-weight-semibold">Savings Account</a>
                                    <small class="d-block">01024499300101</small>
                                </td>

                            </tr>
                            <tr>
                                <td style="width: 10px;">
                                    <div class="avatar-sm rounded bg-soft-info">
                                        <i class="ddripicons-map font-4 avatar-title text-info"></i>
                                    </div>
                                </td>

                                <td>
                                    <a href="ecommerce-product-detail.html"
                                        class="text-body font-weight-semibold">Red Hoodie for men</a>
                                    <small class="d-block">01024499300101</small>
                                </td>

                            </tr>
                            <tr>
                                <td style="width: 10px;">
                                    <div class="avatar-sm rounded bg-soft-info">
                                        <i class="ddripicons-map font-4 avatar-title text-info"></i>
                                    </div>
                                </td>
                                <td>
                                    <a href="ecommerce-product-detail.html"
                                        class="text-body font-weight-semibold">Designer Awesome T-Shirt</a>
                                    <small class="d-block">01024499300101</small>
                                </td>

                            </tr>

                        </tbody>
                    </table>
                </div>
                <!-- end table-responsive -->
            </div>



        </div> <!-- end col -->

        <div class="col-md-7">
            <img src="{{ asset('assets/images/map.jpg') }}" class="img-fluid" alt="" >
        </div> <!-- end col -->
    </div>
    <!-- end row -->


        </div>
    </div>


    <br>



</div>
<!-- end row -->


@endsection
