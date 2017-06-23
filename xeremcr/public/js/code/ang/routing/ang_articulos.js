angular.module('ctrlMenu', [])
	.controller('menu', function($scope, $http, ctrl){

		$scope.data = [];
		$scope.totalItems = 0;

		$scope.btnhome = function(){
			var parameters = _param('noticias/articulos', 'GET');
			/**/
			try 
			{
				ctrl.get().success(function(data) {
					$scope.data = data.data;
					//$scope.totalItems = data.total;
				})
				.error(function(data) {
					console.log(data);
				});
			}
			catch(err) {
			    console.log(err);
			}

		};

	});