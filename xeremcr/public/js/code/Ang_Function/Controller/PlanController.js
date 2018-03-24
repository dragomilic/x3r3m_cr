XeremCrApp.controller('planController', function ($scope, $http, XeremService) {

        //$scope.planData = {};

        var Controlador = "noticias";
        
        $scope.planData = function(){
        	$(#tbldata).hide();
        	var das = XeremService.Mostrar(Controlador);
        	$(#tbldata).show();
        	return das;
        };
        
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
	            //incluir los datos para guardar
	            var _plan = new Object();
	            _plan.Aseguradora = $scope.Add_Aseguradora;
	            _plan.Nombre = $scope.Add_Nombre;
	            _plan.Descripcion = $scope.Add_Descripcion;
	            _plan.Cobertura = $scope.Add_Cobertura;

	            XeremService.Guardar(Controlador, _plan).then(function (data) {
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