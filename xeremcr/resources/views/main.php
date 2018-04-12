<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="csrf-token" content="<?php echo csrf_token() ?>" />  
	<title>Document</title>
	<link rel="stylesheet" href="<?= asset('CSS/code/xcontent.css') ?>">
</head>
<body>

	<div id="" ng-app="XeremCrApp">
	
		<div ng-controller="PlanController" ng-init="init()">
			<input type="text" ng-model="Add_Titulo">
			<input type="text" ng-model="Add_Contenido">
			<button ng-click="Save()">save</button>
			
			<div id="content">
			</div>
				<table id="tbldata">
					<tr ng-repeat="x in planData">
						<td>{{ x.Titulo }}</td>
						<td>{{ x.Contenido }}</td>
					</tr>
				</table>
		</div>

	</div>


	
	<script src="<?= asset('JavaScript/jquery.min.js') ?>"></script>
	<script src="<?= asset('Library/AngularJS/angular.min.js') ?>"></script>
	<!---->
	<script src="<?= asset('JavaScript/code/Ang_Function/AppJS.js') ?>"></script>
	<script src="<?= asset('JavaScript/code/Ang_Function/Factory/CRUD.js') ?>"></script>
	<script src="<?= asset('JavaScript/code/Ang_Function/Service/Service.js') ?>"></script>
	<script src="<?= asset('JavaScript/code/Ang_Function/Controller/PlanController.js') ?>"></script>
	

	<script>
	$(document).ready(function () {
		$("#content").show();
	});
	</script>

</body>
</html>