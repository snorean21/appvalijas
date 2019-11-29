<!DOCTYPE html>
	<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
		<head>
			<meta charset="utf-8">
			<title>{{ config('app.name') }} - @yield('title')</title>
			<!-- Styles -->
    			<link href="{{ asset('sb-admin-2/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    			<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    		<!-- Custom styles for DataTable-->
    			<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
    			<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    		<!-- Custom styles for Fontawesome-->
    			<link href="{{ asset('sb-admin-2/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    		<!-- Custom styles for this template-->
    			<link href="{{ asset('sb-admin-2/css/sb-admin-2.min.css') }}" rel="stylesheet">
		</head>
		<body id="page-top">
			<!-- Page Wrapper -->
				<div id="wrapper">
					@include('elements.sidebar')
				    <!-- Content Wrapper -->
					    <div id="content-wrapper" class="d-flex flex-column">
					    	<!-- Main Content -->
					    		<div id="content">
									@include('elements.navbar')
					        		<!-- Begin Page Content -->
					        			<div class="container-fluid">
									        <!-- Page Heading -->
										        <div class="d-sm-flex align-items-center justify-content-between mb-4">
										            @yield('page-heading')
										            @yield('breadcrumbs')
										        </div>
						          			<!-- Content Row -->
							          			<div class="row">
												    @yield('content')
							          			</div>
							          		<!-- End of Content Row -->
								        </div>
								    <!-- /.container-fluid -->
						      	</div>
						    <!-- End of Main Content -->
					      	<!-- Footer -->
						     	<footer class="sticky-footer bg-white">
						        <div class="container my-auto">
						          	<div class="copyright text-center my-auto">
						            	<span>Copyright &copy; Steven Noreña 2019</span>
						          	</div>
						        </div>
						      	</footer>
						    <!-- End of Footer -->
						</div>
					<!-- End of Content Wrapper -->
			  	</div>
			<!-- End of Page Wrapper -->
			<!-- Scroll to Top Button-->
			  	<a class="scroll-to-top rounded" href="#page-top">
			    	<i class="fas fa-angle-up"></i>
			  	</a>
		</body>

			<!-- Scripts -->
		    	<script src="{{ asset('sb-admin-2/vendor/jquery/jquery.min.js') }}"></script>
		    	<script src="{{ asset('sb-admin-2/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
		    	<script src="{{ asset('sb-admin-2/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
		    	<script src="{{ asset('sb-admin-2/js/sb-admin-2.min.js') }}"></script>
		    	<script src="{{ asset('sb-admin-2/vendor/chart.js/Chart.min.js') }}"></script>
		    	<script src="{{ asset('sb-admin-2/js/demo/chart-area-demo.js') }}"></script>
		    	<script src="{{ asset('sb-admin-2/js/demo/chart-pie-demo.js') }}"></script>
		    	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
		    	<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
		    	<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>

				<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>

				<script>
		    		$(document).ready( function () {
					    $('#table_id').DataTable({
					    	"language": {
					            "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
					        }
					    });
					} );
		    	</script>

	</html>