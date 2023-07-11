<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>@yield('title') - {{ config('app.name') }}</title>
  <!-- loader-->
  <link href="{{ asset('assets/css/pace.min.css') }}" rel="stylesheet"/>
  <!-- <script src="assets/js/pace.min.js"></script> -->
  <!--favicon-->
  <link rel="icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">
  <!-- Vector CSS -->
  <link href="{{ asset('assets/plugins/vectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet"/>
  <!-- simplebar CSS-->
  <link href="{{ asset('assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" type="text/css"/>
  <!-- Sidebar CSS-->
  <link href="{{ asset('assets/css/sidebar-menu.css') }}" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="{{ asset('assets/css/app-style.css') }}" rel="stylesheet"/>
  <!-- toster style -->
  <link href="{{ asset('css/toastr.min.css') }}" rel="stylesheet"> 
  <!-- Jquary js -->
  <script src="{{ asset('js/jquery.js') }}"></script>
 
</head>

<body class="bg-theme bg-theme1">
 
<!-- Start wrapper-->
 <div id="wrapper">
 
  <!--Start sidebar-wrapper-->
@include('partials.sideber')
   <!--End sidebar-wrapper-->
<!--Start topbar header-->
@include('partials.header')
<!--End topbar header-->

<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">

  <!--Start Dashboard Content-->

	@yield('content')

      <!--End Dashboard Content-->
	  
	<!--start overlay-->
		  <div class="overlay toggle-menu"></div>
		<!--end overlay-->
		
    </div>
    <!-- End container-fluid-->
    
    </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <!-- <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a> -->
    <!--End Back To Top Button-->
	
	<!--Start footer-->
	@include('partials.footer')
	<!--End footer-->
	
  <!--start color switcher-->
  @include('partials.colortheem')
  <!--end color switcher-->
   
  </div><!--End wrapper-->

  <!-- Bootstrap core JavaScript-->
  @yield('script')
  <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/js/popper.min.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
	
 <!-- simplebar js -->
  <script src="{{ asset('assets/plugins/simplebar/js/simplebar.js') }}"></script>
  <!-- sidebar-menu js -->
  <script src="{{ asset('assets/js/sidebar-menu.js') }}"></script>
  <!-- loader scripts -->
  <script src="{{ asset('assets/js/jquery.loading-indicator.js') }}"></script>
  <!-- Custom scripts -->
  <script src="{{ asset('assets/js/app-script.js') }}"></script>
  <!-- Chart js -->
  
  <script src="{{ asset('assets/plugins/Chart.js/Chart.min.js') }}"></script>
 
  <!-- Index js -->
  <script src="{{ asset('assets/js/index.js') }}"></script>
  <!-- toster js -->
  <script src="{{ asset('js/toastr.min.js') }}"></script>
  <!-- sweet Alert js -->
  <script src="{{ asset('js/sweetalert.min.js') }}"></script>

  <script>
    @if(Session::has('success'))

    toastr.success("{{ Session::get('success')}}")

    @endif

  </script>
  
</body>
</html>
