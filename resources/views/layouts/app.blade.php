<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Cuba admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Cuba admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="/assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="/assets/images/favicon.png" type="image/x-icon">
    <title>Waps</title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap"
        rel="stylesheet">
    {{-- <link rel="stylesheet" type="text/css" href="/assets/css/fontawesome.css"> --}}
    
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="/assets/css/vendors/icofont.css">
    <!-- Themify icon-->
    {{-- <link rel="stylesheet" type="text/css" href="/assets/css/vendors/themify.css"> --}}
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="/assets/css/vendors/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="/assets/css/vendors/feather-icon.css">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="/assets/css/vendors/scrollbar.css">

    <link rel="stylesheet" type="text/css" href="/assets/css/vendors/photoswipe.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/vendors/animate.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/vendors/chartist.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/vendors/date-picker.css">

    {{-- <link rel="stylesheet" type="text/css" href="/assets/css/vendors/photoswipe.css"> --}}
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="/assets/css/vendors/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/custom.css">
    <link id="color" rel="stylesheet" href="/assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="/assets/css/responsive.css">

    <link rel="stylesheet" type="text/css" href="/assets/css/vendors/datatables.css">

    <link rel="stylesheet" type="text/css" href="/assets/css/vendors/prism.css">

    <script src="/assets/js/jquery-3.5.1.min.js"></script>

    <script src="/assets/js/map-js/mapsjs-core.js"></script>
    <script src="/assets/js/map-js/mapsjs-service.js"></script>
    <script src="/assets/js/map-js/mapsjs-ui.js"></script>
    <script src="/assets/js/map-js/mapsjs-mapevents.js"></script>
    <script src="/assets/js/map-js/custom.js"></script>
    <script src="https://kit.fontawesome.com/9967e25fdf.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <!-- Page Header Start-->
        @include('layouts.navbar')
        <!-- Page Header Ends -->
        <!-- Page Body Start -->
        <div class="page-body-wrapper">
            <!-- Page Sidebar Start-->
            @include('layouts.sidebar')
            <!-- Page Sidebar Ends-->
            @yield('content')
            <!-- footer start-->
            @include('layouts.footer')
        </div>
    </div>

    </div>


    <!-- latest jquery-->
    <script async
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCG1y_d7Vj9P4gXQXs6QskeLBzHJVWX5zo&libraries=visualization&callback=initMap">
</script>
    {{-- <script async
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCG1y_d7Vj9P4gXQXs6QskeLBzHJVWX5zo&callback=initMap">
    </script> --}}
    <!-- Bootstrap js-->
    <script src="/assets/js/bootstrap/bootstrap.bundle.min.js"></script>
    <!-- feather icon js-->
    <script src="/assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="/assets/js/icons/feather-icon/feather-icon.js"></script>
    <!-- scrollbar js-->
    <script src="/assets/js/scrollbar/simplebar.js"></script>
    <script src="/assets/js/scrollbar/custom.js"></script>
    <!-- Sidebar jquery-->
    <script src="/assets/js/config.js"></script>
    <!-- Plugins JS start-->
    <script src="/assets/js/sidebar-menu.js"></script>

    <script src="/assets/js/chart/chartjs/chart.min.js"></script>
    <script src="/assets/js/chart/chartjs/chart.custom.js"></script>
    <script src="/assets/js/chart/google/google-chart-loader.js"></script>
    <script src="/assets/js/chart/google/google-chart.js"></script>
    <script src="/assets/js/chart/chartist/chartist.js"></script>
    <script src="/assets/js/chart/chartist/chartist-plugin-tooltip.js"></script>
    <script src="/assets/js/chart/knob/knob.min.js"></script>
    <script src="/assets/js/chart/knob/knob-chart.js"></script>
    <script src="/assets/js/chart/apex-chart/apex-chart.js"></script>
    <script src="/assets/js/chart/apex-chart/stock-prices.js"></script>
    <script src="/assets/js/notify/bootstrap-notify.min.js"></script>
    <script src="/assets/js/dashboard/default.js"></script>
    <script src="/assets/js/notify/index.js"></script>
    <script src="/assets/js/datepicker/date-picker/datepicker.js"></script>
    <script src="/assets/js/datepicker/date-picker/datepicker.en.js"></script>
    <script src="/assets/js/datepicker/date-picker/datepicker.custom.js"></script>
    <script src="/assets/js/typeahead/handlebars.js"></script>
    <script src="/assets/js/typeahead/typeahead.bundle.js"></script>
    <script src="/assets/js/typeahead/typeahead.custom.js"></script>
    <script src="/assets/js/typeahead-search/handlebars.js"></script>
    <script src="/assets/js/typeahead-search/typeahead-custom.js"></script>
    <script src="/assets/js/tooltip-init.js"></script>

    <script src="/assets/js/photoswipe/photoswipe.min.js"></script>
    <script src="/assets/js/photoswipe/photoswipe-ui-default.min.js"></script>
    <script src="/assets/js/photoswipe/photoswipe.js"></script>

    <script src="/assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
    <script src="/assets/js/datatable/datatables/datatable.custom.js"></script>
    <!-- Plugins JS Ends-->

    <!-- Theme js-->
    {{-- <script src="/assets/js/script.js"></script>
    <script src="/assets/js/theme-customizer/customizer.js"></script> --}}

    <script src="/assets/js/prism/prism.min.js"></script>

    <script src="/assets/js/dashboard/dashboard_2.js"></script>

    <script src="/assets/js/clipboard/clipboard.min.js"></script>
    <script src="/assets/js/counter/jquery.waypoints.min.js"></script>
    <script src="/assets/js/counter/jquery.counterup.min.js"></script>
    <script src="/assets/js/counter/counter-custom.js"></script>
    <script src="/assets/js/custom-card/custom-card.js"></script>

    <!-- login js-->
    <!-- Plugin used-->
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"> --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>

</body>

</html>
