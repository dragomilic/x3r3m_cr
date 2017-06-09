<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>@yield('title','Default')</title>
	<!--  Style -->
	<link rel="stylesheet" href="{{asset('Bootstrap/css/bootstrap.min.css')}}" />
	<!--<link rel="stylesheet" href="{{asset('Bootstrap_MD/css/bootstrap-material-design.min.css')}}" />-->
	<link rel="stylesheet" href="{{asset('BootstrapToggle/css/bootstrap-toggle.min.css')}}" />
	<!--Propio-->
	<link rel="stylesheet" href="{{asset('css/code/menu.css')}}" />
	<link rel="stylesheet" href="{{asset('css/code/body.css')}}" />
	@yield('CSS')
	<!--  -->

</head>
<body>
	<header></header>

	<!---->
	<section>
		<div  class="row">
		
			<div class="col-xs-0 col-sm-1 col-md-1">
				<aside>
					@include('_part.SubMenu')
				</aside>
			</div>

		    <div class="col-xs-12 col-sm-10 col-md-10">
		    		@include('_part.menu')
				<section class="MainContent">
					@yield('contenido')
				</section>
			</div>
			  
			<div class="col-xs-0 col-sm-1 col-md-1">
				<aside>
					@include('_part.banner')
				</aside>
			</div>
			 
		</div>
	</section>

	<footer>
		@include('_part.footer')
	</footer>
	
	<!--  JavaScript -->
	<script src="{{asset('js/jquery.min.js')}}"></script>
	<script src="{{asset('AngularJS/angular.min.js')}}"></script>
	<script src="{{asset('BootstrapToggle/js/bootstrap-toggle.min.js')}}"></script>
    <script src="{{asset('Bootstrap/js/bootstrap.min.js')}}"></script>
	<!--Propio-->
	<script src="{{asset('js/code/jq_menu.js')}}"></script>
	@yield('script')
	<!--  -->

</body>
</html>