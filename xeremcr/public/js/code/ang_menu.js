var app = angular.module('menu', [])
	.constant('API_URL', 'http://127.0.0.1:8080/x3r3m_cr/xeremcr/public/');
app.controller('redirect', function($scope, $http, API_URL) {

	$scope.home = function(){
		 $http.get('/index', function (response) {
            console.log('redirect');
            $window.location.href('/index');
        });
	}
});

