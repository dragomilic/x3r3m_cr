@extends('Master.Main')

@section('title', 'Usuarios')

@section('contenido')


	<div ng-app="">
	  <p>Name: <input type="text" ng-model="name"></p>
	  <p>@{{name}}</p>
	</div>

	<div class="jumbotron">
	  <h1>Hello, world!</h1>
	  <p>...</p>
	</div>

@endsection