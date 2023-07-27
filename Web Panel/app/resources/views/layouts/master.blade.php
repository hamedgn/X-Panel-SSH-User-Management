<!DOCTYPE html>
<html lang="fa-IR" class="no-js">

<meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
@include('layouts.header')
<body>
<!-- [ Pre-loader ] start -->
<div class="loader-bg">
    <div class="loader-track">
        <div class="loader-fill"></div>
    </div>
</div>
<!-- [ Pre-loader ] End -->
@include('layouts.topnav')
@php
    $json = file_get_contents('https://raw.githubusercontent.com/hamedgn/X-Panel-SSH-User-Management/main/version.json');
    $obj = json_decode($json);
    $github='https://github.com/Alirezad07/X-Panel-SSH-User-Management#%D9%86%D8%B5%D8%A8';
@endphp
@if($obj->last_version>37)

    <div class="p-4 mb-2" style="position: fixed;z-index: 9999;left: 0;">
        <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <img src="/assets/images/xlogo.png" class="img-fluid m-r-5" alt="XPanel" style="width: 17px">
                <strong class="me-auto">XPanel</strong>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">New Version XPanel <a href="{!! $github !!}" target="_blank">Github</a> </div>
        </div>
    </div>
@endif
@yield('content')
@include('layouts.footer')
</body>

</html>

