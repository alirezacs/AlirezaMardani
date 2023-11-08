<!DOCTYPE html>a
<html lang="en">

<!-- Mirrored from demo.imanpa.ir/cork/go/rtl/demo1/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Jan 2022 05:44:16 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Admin Panel</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/admin/assets/img/favicon.ico') }}" />
    <link href="{{ asset('assets/admin/assets/css/loader.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('assets/admin/assets/js/loader.js') }}"></script>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="../../../../../fonts.googleapis.com/css33d1.css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="{{ asset('assets/admin/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/admin/assets/css/plugins.css') }}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    @yield('head')

</head>

<body>

<!--  BEGIN NAVBAR  -->
@include('Admin.Layout.sup-header')
<!--  BEGIN NAVBAR  -->

<!--  END NAVBAR  -->
@include('Admin.Layout.sub-header')
<!--  END NAVBAR  -->

<!--  BEGIN MAIN CONTAINER  -->
<div class="main-container" id="container">

    <div class="overlay"></div>
    <div class="search-overlay"></div>

    <!--  END SIDEBAR  -->
    @include('Admin.Layout.sidebar')
    <!--  END SIDEBAR  -->

    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="row layout-top-spacing">
                @yield('content')
            </div>

        </div>
    </div>
    <!--  END CONTENT AREA  -->

</div>
<!-- END MAIN CONTAINER -->



<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
<script src="{{ asset('assets/admin/assets/js/libs/jquery-3.1.1.min.js') }}"></script>
<script src="{{ asset('assets/admin/bootstrap/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/admin/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/admin/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('assets/admin/assets/js/app.js') }}"></script>
<script>
    $(document).ready(function() {
        App.init();
    });
</script>
<script src="{{ asset('assets/admin/assets/js/custom.js') }}"></script>
<!-- END GLOBAL MANDATORY SCRIPTS -->
@yield('script')

</body>


</html>
