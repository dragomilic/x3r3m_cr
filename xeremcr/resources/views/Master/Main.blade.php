<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>@yield('title','Default')</title>
	<link rel="shortcut icon" href="{{asset('favicon.ico')}}">
	<!--  Style -->
	<link rel="stylesheet" href="{{asset('Bootstrap/css/bootstrap.min.css')}}" />
	<!-- Custom Fonts -->
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=VT323" rel="stylesheet"> 
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700,400italic,700italic" rel="stylesheet">
	<link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
	<!--Propio-->
	<link rel="stylesheet" href="{{asset('css/theme.css')}}" />
	<link rel="stylesheet" href="{{asset('css/code/custom.css')}}" />
	
	@yield('CSS')
	<!--  ng-app="XeremCrApp" ng-controller="planController" -->

</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

	
	@include('_part.menu')

	@include('_part.header')
	
	<section>
		<div  class="row">
		
			<div class="col-xs-0 col-sm-1 col-md-1">
				<aside></aside>
			</div>

		    <div class="col-xs-12 col-sm-10 col-md-10">
		    		
				<section class="MainContent">

					@yield('contenido')

					@include('_part.Contact')
				</section>
			</div>
			  
			<div class="col-xs-0 col-sm-1 col-md-1">
				<aside></aside>
			</div>
			 
		</div>
	</section>

	<footer>
		@include('_part.footer') 
	</footer>

	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
	      </div>
	      <div class="modal-body">
	        ...
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        <button type="button" class="btn btn-primary">Save changes</button>
	      </div>
	    </div>
	  </div>
	</div>
	
	<!--  JavaScript -->
	<script src="{{asset('AngularJS/angular.min.js')}}"></script>
	<script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('Bootstrap/js/bootstrap.min.js')}}"></script>
	<!--Propio-->
	<script src="{{asset('js/theme.js')}}"></script>
	<script src="{{asset('js/code/jq/jq_card.js')}}"></script>
	<!--  
	<script src="{{asset('js/code/ang/routing/parametro.js')}}"></script>
	<script src="{{asset('js/code/ang/routing/ang_articulos.js')}}"></script>
	<script src="{{asset('js/code/ang/routing/ang_factory.js')}}"></script>
	<script src="{{asset('js/code/ang/routing/ang_app.js')}}"></script>
	-->
	<script src="{{asset('js/code/Ang_Function/AppJS.js')}}"></script>
	<script src="{{asset('js/code/Ang_Function/Factory/CRUD.js')}}"></script>
	<script src="{{asset('js/code/Ang_Function/Service/Service.js')}}"></script>
	<script src="{{asset('js/code/Ang_Function/Controller/PlanController.js')}}"></script>
	@yield('script')
	<!--  -->

</body>
</html>