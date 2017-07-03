@extends('Master.Main')

@section('title', 'Inicio')

@section('CSS')

  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css'>
  <link rel='stylesheet prefetch' href='http://codepen.io/ChynoDeluxe/pen/eJPeEL'>
  <link rel="stylesheet" href="{{asset('css/Cards/BlogCard.css')}}" />

@endsection

@section('contenido')
	@include('_part.portfolio')

	<div class="row">
	  <div class="col-xs-6">

		<div class="thumbnail">
	      <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a7/Flag_of_Afghanistan_%281880%E2%80%931901%29.svg/1200px-Flag_of_Afghanistan_%281880%E2%80%931901%29.svg.png" alt="..." width="500px" height="50px">
	      <div class="caption">
	        <h3>Cliente</h3>
	        <p>
		        <a href="#" class="btn btn-default" role="button">Terminar llamada</a> 
		        <a href="#" class="btn btn-default" role="button">Silenciar</a>
	        </p>
	      </div>
	    </div>

	  </div>
	  <div class="col-xs-6">

	  	<div class="thumbnail">
	      <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a7/Flag_of_Afghanistan_%281880%E2%80%931901%29.svg/1200px-Flag_of_Afghanistan_%281880%E2%80%931901%29.svg.png" alt="..." width="500px" height="50px">
	      <div class="caption">
	        <h3>Doctor</h3>
	        <p>
		        <a href="#" class="btn btn-default" role="button">Terminar llamada</a> 
		        <a href="#" class="btn btn-default" role="button">Silenciar</a>
		        <a href="#" class="btn btn-default" role="button">Grabar</a> 
		        <a href="#" class="btn btn-default" role="button">Tomar foto</a> 
	        </p>
	      </div>
	    </div>
	    
	  </div>
	</div>
	
@endsection

@section('script')
@endsection