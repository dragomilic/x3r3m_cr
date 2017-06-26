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
							alert(error.data);
						});
			}catch(err){
				alert(err.data);
			}
		};
	});