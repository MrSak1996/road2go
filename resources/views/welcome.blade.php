<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <title>Road2Go</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />

    <!-- ================== BEGIN BASE CSS STYLE ================== -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="{{ asset('assets/plugins/bootstrap3/css/bootstrap.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('assets/plugins/font-awesome/css/font-awesome.min.css') }} " rel="stylesheet" />
	<link href="{{ asset('assets/plugins/animate/animate.min.css') }} " rel="stylesheet" />
	<link href="{{ asset('assets/css/e-commerce/style.min.css') }} " rel="stylesheet" />
	<link href="{{ asset('assets/css/e-commerce/style-responsive.min.css') }} " rel="stylesheet" />
	<link href="{{ asset('assets/css/e-commerce/theme/default.css') }} " id="theme" rel="stylesheet" />

    <link href="{{ asset('assets/css/one-page-parallax/style.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('assets/css/one-page-parallax/style-responsive.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('assets/css/one-page-parallax/theme/default.css') }}" id="theme" rel="stylesheet" />

	@if(request()->is('our-aim') || request()->is('contact-us') || request()->is('about-owners') )
	<link href="{{ asset('assets/css/blog/style.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('assets/css/blog/style-responsive.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('assets/css/blog/theme/default.css') }}" id="theme" rel="stylesheet" />
    @endif
    <!-- ================== END BASE CSS STYLE ================== -->


    <!-- ================== BEGIN BASE JS ================== -->
    <script src="{{ asset('assets/plugins/pace/pace.min.js') }}"></script>

    <!-- ================== END BASE JS ================== -->



</head>

<body class="antialiased">
    <div id="app">
        <app></app>
    </div>
</body>
@vite('resources/js/app.js')
</html>
<script src="{{ asset('assets/plugins/jquery/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap3/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/plugins/js-cookie/js.cookie.js') }}"></script>
<script src="{{ asset('assets/plugins/scrollMonitor/scrollMonitor.js') }}"></script>
<script src="{{ asset('assets/js/e-commerce/apps.min.js') }}"></script>
<script src="{{ asset('assets/js/blog/apps.min.js') }}"></script>


<!-- <script src="{{ asset('assets/plugins/jquery/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('assets/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap/4.0.0/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset('assets/plugins/js-cookie/js.cookie.js') }}"></script>
<script src="{{ asset('assets/js/theme/default.min.js') }}"></script>
<script src="{{ asset('assets/js/apps.min.js') }}"></script> -->
<!-- ================== END BASE JS ================== -->

<!-- ================== BEGIN PAGE LEVEL JS ================== -->
<!-- <script src="{{ asset('assets/plugins/gritter/js/jquery.gritter.js') }}"></script>
<script src="{{ asset('assets/plugins/flot/jquery.flot.min.js') }}"></script>
<script src="{{ asset('assets/plugins/flot/jquery.flot.time.min.js') }}"></script>
<script src="{{ asset('assets/plugins/flot/jquery.flot.resize.min.js') }}"></script>
<script src="{{ asset('assets/plugins/flot/jquery.flot.pie.min.js') }}"></script>
<script src="{{ asset('assets/plugins/flot/jquery.flot.stack.min.js') }}"></script>
<script src="{{ asset('assets/plugins/flot/jquery.flot.crosshair.min.js') }}"></script>
<script src="{{ asset('assets/plugins/flot/jquery.flot.categories.js') }}"></script>
<script src="{{ asset('assets/plugins/sparkline/jquery.sparkline.js') }}"></script>
<script src="{{ asset('assets/plugins/jquery-jvectormap/jquery-jvectormap.min.js') }}"></script>
<script src="{{ asset('assets/plugins/jquery-jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('assets/js/demo/dashboard.min.js') }}"></script>
<script src="{{ asset('assets/js/demo/chart-flot.demo.min.js')}}"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.2/d3.min.js"></script>
<script src="{{ asset('assets/plugins/nvd3/build/nv.d3.js') }}"></script>
<script src="{{ asset('assets/js/demo/chart-d3.demo.min.js')}}"></script>
<script src="{{ asset('assets/js/demo/page-with-two-sidebar.demo.min.js')}}"></script>
<script src="{{ asset('assets/plugins/jquery-knob/js/jquery.knob.js')}}"></script>
<script src="{{ asset('assets/plugins/jquery-smart-wizard/src/js/jquery.smartWizard.js')}}"></script>
<script src="{{ asset('assets/js/demo/form-wizards.demo.min.js')}}"></script>

 -->


<script>
		$(document).ready(function() {
			App.init();
			// Dashboard.init();
			// ChartNvd3.init();
			// PageWithTwoSidebar.init();
			// FormWizard.init();

		});
	</script>