@extends('Master.Main')

@section('title', 'Inicio')

@section('CSS')

  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css'>
  <link rel='stylesheet prefetch' href='http://codepen.io/ChynoDeluxe/pen/eJPeEL'>
  <link rel="stylesheet" href="{{asset('css/Cards/BlogCard.css')}}" />

@endsection

@section('contenido')

	@include('_part.about')

	@include('_part.portfolio')

	<div class="row">
	  <div class="col-xs-6">

		<div class="thumbnail">
	      <img src="..." alt="...">
	      <div class="caption">
	        <h3>Thumbnail label</h3>
	        <p>...</p>
	        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
	      </div>
	    </div>

	  </div>
	  <div class="col-xs-6">

	  	<div class="thumbnail">
	      <img src="..." alt="...">
	      <div class="caption">
	        <h3>Thumbnail label</h3>
	        <p>...</p>
	        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
	      </div>
	    </div>
	    
	  </div>
	</div>
	
@endsection

@section('script')
@endsection