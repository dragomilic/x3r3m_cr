angular.module('mainCtrl', [])

	.controller('mainController', function($scope, $http, Comment) {
		// object to hold all the data for the new comment form
		$scope.commentData = {};

		// function to handle submitting the form
		$scope.btnhome = function() {
			try{
			Comment.get().then(function (success){
							alert(success.data[0].Contenido);
						},function (error){
							console.log(error.data);
						});
			}catch(err){
				console.log(err.data);
			}
		};

		// function to handle deleting a comment
		$scope.find = function(id) {
			try{
			Comment.show(id).then(function(data) {
					// if successful, we'll need to refresh the comment list
					Comment.get().then(function(getData) {
								$scope.comments = getData;
							},function (error){
								console.log(error.data);
							});
				});
			}catch(err){
				console.log(err.data);
			}
		};

		// function to handle deleting a comment
		$scope.delete = function(id) {
			try{
			Comment.destroy(id).then(function(data) {
					// if successful, we'll need to refresh the comment list
					Comment.get().then(function(getData) {
								$scope.comments = getData;
							},function (error){
								console.log(error.data);
							});
				});
			}catch(err){
				console.log(err.data);
			}
		};

		// function to handle deleting a comment
		$scope.save = function(id) {
			try{
			//incluir los datos para guardar
			var _articulo = new Object();
			_articulo.autor = $scope.autor;
			_articulo.titulo = $scope.titulo;
			_articulo.info = $scope.info;
			_articulo.fuente = $scope.fuente;

			Comment.save(id, _articulo).then(function(data) {
					// if successful, we'll need to refresh the comment list
					Comment.get().then(function(getData) {
								$scope.comments = getData;
							},function (error){
								console.log(error.data);
							});
				});
			}catch(err){
				console.log(err.data);
			}
		};

		// function to handle deleting a comment
		$scope.edit = function(id) {
			try{
			//incluir los datos para guardar
			var _articulo = new Object();
			_articulo.autor = $scope.autor;
			_articulo.titulo = $scope.titulo;
			_articulo.info = $scope.info;
			_articulo.fuente = $scope.fuente;

			Comment.edit(id, _articulo).then(function(data) {
					// if successful, we'll need to refresh the comment list
					Comment.get().then(function(getData) {
								$scope.comments = getData;
							},function (error){
								console.log(error.data);
							});
				});
			}catch(err){
				console.log(err.data);
			}
		};
	});