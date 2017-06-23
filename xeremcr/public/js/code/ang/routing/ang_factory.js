angular.module('ControllerService', [])
	.factory('ctrl', function($http){
		
		return {
			get : function() {
				return $http.get('noticias/articulos');
			}
		}

		/*var _service = {
			httpRequest : function(passParameters){

				var _data = 
				$http(passParameters).then(function (response) 
				{
					return response.data;
				}
				,function()
				{
					$.gritter.add({
						title: 'Application',
						text: 'An error occured while processing your request.'
					});
				});

				return _data;
			}
		};

		return _service;*/
	});