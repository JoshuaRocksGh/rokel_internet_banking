<div class="container-fluid">
    <br>
    <div class="row">
        <div class="col">
            <a href="{{ url()->previous() }}" type="button" class="btn btn-soft-blue waves-effect waves-light"><i
                    class="mdi mdi-reply-all-outline"></i>&nbsp;Back</a>
        </div>
        <div class="col">
            <h4 class="text-primary text-uppercase">
                <img src="{{ asset('assets/images/logoRKB.png') }}" alt="logo" style="width: 1.5rem">&emsp;
                {{ $pageTitle }}
            </h4>
        </div>

        <div class="col text-right">
            <h6>
                <span class="float-right">
                    <b class="text-primary"> {{ $basePath }} </b> &nbsp; > &nbsp; <b
                        class="text-danger">{{$currentPath}}</b>
                </span>
            </h6>
        </div>
        <div class="col-md-12 ">
            <hr class="text-primary" style="margin: 0px;">
        </div>

    </div>
</div>