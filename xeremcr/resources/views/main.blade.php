<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
	<div ng-app="XeremCrApp" ng-controller="planController">
		<button ng-click="Show()">Click me!</button>
		<table id="tbldata">
		  <tr ng-repeat="x in planData">
		    <td>@{{ x.Titulo }}</td>
		    <td>@{{ x.Contenido }}</td>
		  </tr>
		</table>
	</div>

	<script src="{{asset('js/jquery.min.js')}}"></script>
	<script src="{{asset('AngularJS/angular.min.js')}}"></script>
	<script src="{{asset('js/code/Ang_Function/AppJS.js')}}"></script>
	<script src="{{asset('js/code/Ang_Function/Factory/CRUD.js')}}"></script>
	<script src="{{asset('js/code/Ang_Function/Service/Service.js')}}"></script>
	<script src="{{asset('js/code/Ang_Function/Controller/PlanController.js')}}"></script>

</body>
</html>