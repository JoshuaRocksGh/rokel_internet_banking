<div class="container-fluid pt-2 ">
    <div class="row align-items-center">
        <div class="col-sm-3 align-items-center">
            <a href="{{ url()->previous() }}" type="button" class="btn btn-soft-blue waves-effect waves-light"
                id="page_back_button"><i class="mdi mdi-reply-all-outline"></i>&nbsp;Back</a>
        </div>
        <div class="col-md-6">
            <div class="row align-items-center justify-content-center">
                <img src="{{ asset('assets/images/logoRKB.png') }}" alt="logo"
                    style="height:1.5rem; width: 1.5rem">&emsp;
                <h4 class="text-primary text-center text-uppercase"> {{ $pageTitle }}
                </h4>
            </div>
        </div>

        <div class="col-md-3 align-items-center d-sm-none d-md-block text-right">
            <h6 class="align-items-center float-right">
                <b class="text-primary"> {{ $basePath }} </b> &nbsp; > &nbsp; <b
                    class="text-danger">{{$currentPath}}</b>
            </h6>
        </div>

    </div>
    <div class="col-md-12 ">
        <hr class="text-primary my-2">
    </div>

</div>