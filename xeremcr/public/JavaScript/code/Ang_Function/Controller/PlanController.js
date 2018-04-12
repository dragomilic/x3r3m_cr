XeremCrApp.controller('PlanController', function ($scope, $http, XeremService) {

		var Controlador = "noticias";
		
		$scope.init = function () {
			$scope.planData = XeremService.Mostrar(Controlador);
		 };

        /*$scope.planData = function(){
        	var das = XeremService.Mostrar(Controlador);
        	return das;
        };*/
        
        $scope.Open = function (IdModal) {
            $(IdModal).modal('show')
        };

	    $scope.Show = function () {
	        try
            {
                $scope.planData = XeremService.Mostrar(Controlador);
                alert(getData.statusText);
            }
            catch (err) {
                console.log(err);
	        }
	    };

	    $scope.Find = function (id) {
	        try
            {
                var getData = XeremService.Buscar(Controlador, id);
                alert(getData.statusText);
            }
            catch (err) {
                console.log(err);
	        }
	    };

	    $scope.Delete = function (id) {
	        try {
	            XeremService.Eliminar(Controlador, id).then(function (data) {
	                // if successful, we'll need to refresh the comment list
	                XeremService.Mostrar(Controlador).then(function (getData) {
	                    $scope.comments = getData;
                        comments.Nombre
	                }, function (error) {
	                    console.log(error.data);
	                });
	            });
	        } catch (err) {
	            console.log(err.data);
	        }
	    };

	    $scope.Save = function () {
	        try {
				var token = $('meta[name="csrf-token"]').attr('content');
	            //incluir los datos para guardar
	            var _articulo = new Object();
	            _articulo.Titulo = $scope.Add_Titulo;
				_articulo.Contenido = $scope.Add_Contenido;
				_articulo._token = token;

				$scope.Add_Titulo = "";
				$scope.Add_Contenido = "";
				XeremService.Guardar(Controlador, _articulo);
				$scope.planData = XeremService.Mostrar(Controlador);

	        } catch (err) {
	            console.log(err.data);
	        }
	    };

	    $scope.Edit = function (id) {
	        try {
	            //incluir los datos para guardar
	            var _articulo = new Object();
	            _articulo.autor = $scope.autor;
	            _articulo.titulo = $scope.titulo;
	            _articulo.info = $scope.info;
	            _articulo.fuente = $scope.fuente;

	            XeremService.Editar(Controlador, id, _articulo).then(function (data) {
	                // if successful, we'll need to refresh the comment list
	                XeremService.Mostrar(Controlador).then(function (getData) {
	                    $scope.comments = getData;
	                }, function (error) {
	                    console.log(error.data);
	                });
	            });
	        } catch (err) {
	            console.log(err.data);
	        }
	    };

});