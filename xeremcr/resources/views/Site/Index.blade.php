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

@endsection

@section('script')
@endsection