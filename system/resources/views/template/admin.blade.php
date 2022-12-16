<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="{{url('public')}}/assets/images/logo-FIX.png" type="image/png" />
	<!--plugins-->
	<link href="{{url('public')}}/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
	<link href="{{url('public')}}/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
	<link href="{{url('public')}}/assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
	<link href="{{url('public')}}/assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
	<!-- loader-->
	<link href="{{url('public')}}/assets/css/pace.min.css" rel="stylesheet" />
	<script src="{{url('public')}}/assets/js/pace.min.js"></script>
	<!-- Bootstrap CSS -->
	<link href="{{url('public')}}/assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="{{url('public')}}/assets/css/app.css" rel="stylesheet">
	<link href="{{url('public')}}/assets/css/icons.css" rel="stylesheet">
	<!-- Theme Style CSS -->
	<link rel="stylesheet" href="{{url('public')}}/assets/css/dark-theme.css" />
	<link rel="stylesheet" href="{{url('public')}}/assets/css/semi-dark.css" />
	<link rel="stylesheet" href="{{url('public')}}/assets/css/header-colors.css" />
	<title>BeaCukai - Operasional</title>
</head>

<body class="bg-theme bg-theme2">
	<!--wrapper-->
	<div class="wrapper">
		<!--sidebar wrapper -->
		@include('section.admin.sidebar')
		<!--end sidebar wrapper -->
		<!--start header -->
		@include('section.admin.header')
		<!--end header -->
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
                @include('utils.notif')
                <div style="height: 1000px;">

				    @yield('content')

                </div>

			</div>
		</div>
		<!--end page wrapper -->
		<!--start overlay-->
		<div class="overlay toggle-icon"></div>
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
        {{-- @include('section.admin.footer') --}}
	</div>
	<!--end wrapper-->
	<!--start switcher-->
	@include('utils.theme')
	<!--end switcher-->
	<!-- Bootstrap JS -->
	<script src="{{url('public')}}/assets/js/bootstrap.bundle.min.js"></script>
	<!--plugins-->
	<script src="{{url('public')}}/assets/js/jquery.min.js"></script>
	<script src="{{url('public')}}/assets/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="{{url('public')}}/assets/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="{{url('public')}}/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<script src="{{url('public')}}/assets/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>
	<script src="{{url('public')}}/assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
	<script src="{{url('public')}}/assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
    <script src='https://cdn.tiny.cloud/1/vdqx2klew412up5bcbpwivg1th6nrh3murc6maz8bukgos4v/tinymce/5/tinymce.min.js' referrerpolicy="origin">
	</script>
	<script>
		tinymce.init({
		  selector: '#mytextarea'
		});
	</script>
    <script>
		$(document).ready(function() {
			$('.datatable').DataTable();
		  } );
	</script>
	<script>
		$(document).ready(function() {
			$('#Transaction-History').DataTable({
				lengthMenu: [[6, 10, 20, -1], [6, 10, 20, 'Todos']]
			});
		  } );
	</script>
	<script src="{{url('public')}}/assets/js/index.js"></script>
	<!--app JS-->
	<script src="{{url('public')}}/assets/js/app.js"></script>
	<script>
		new PerfectScrollbar('.product-list');
		new PerfectScrollbar('.customers-list');
	</script>
</body>

</html>
