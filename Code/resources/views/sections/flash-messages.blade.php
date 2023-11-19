@if (\Session::has('error_message'))
    <div class="alert alert-danger fade in alert-dismissible show white mt-3">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true" style="font-size:20px">×</span>
        </button> {{ \Session::get('error_message') }}
    </div>
@endif

@if (\Session::has('success_message'))
    <div class="alert alert-success fade in alert-dismissible show white mt-3">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true" style="font-size:20px">×</span>
        </button> {{ \Session::get('success_message') }}
    </div>
@endif

@if (\Session::has('error'))
    <div class="alert alert-danger fade in alert-dismissible show white mt-3">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true" style="font-size:20px">×</span>
        </button> {{ \Session::get('error') }}
    </div>
@endif

@if (\Session::has('success'))
    <div class="alert alert-success fade in alert-dismissible show white mt-3">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true" style="font-size:20px">×</span>
        </button> {{ \Session::get('success') }}
    </div>
@endif
