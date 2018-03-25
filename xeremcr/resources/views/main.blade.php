<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	

	<div ng-app="XeremCrApp" ng-controller="planController">

		<div>
			<input type="text" ng-model="Add_Titulo">
			<input type="text" ng-model="Add_Contenido">
			<button ng-click="Save()">save</button>
		</div>

		<button ng-click="Show()">Click me!</button>
		<table id="tbldata">
		  <tr ng-repeat="x in planData()">
		    <td>@{{ x.Titulo }}</td>
		    <td>@{{ x.Contenido }}</td>
		  </tr>
		</table>
	</div>



	<script src="{{asset('JavaScript/jquery.min.js')}}"></script>
	<script src="{{asset('Library/AngularJS/angular.min.js')}}"></script>
	<script src="{{asset('JavaScript/code/Ang_Function/AppJS.js')}}"></script>
	<script src="{{asset('JavaScript/code/Ang_Function/Factory/CRUD.js')}}"></script>
	<script src="{{asset('JavaScript/code/Ang_Function/Service/Service.js')}}"></script>
	<script src="{{asset('JavaScript/code/Ang_Function/Controller/PlanController.js')}}"></script>

</body>
</html>