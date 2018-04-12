XeremCrApp.factory('XeremFactory', function ($http) {
    var factory = {};

    factory.get = function (Url) {
        
        var result = null;
        $.ajax({
            type: "GET",
            url: Url,
            contentType: "application/json; charset=utf-8",
            dataType: "json",
            async: false,
            success: function (data, status) {
                result = data;
            },
            error: function (e) {
                result = e;
            }
        });

        return result;
    }

    factory.show = function (Url, id) {

        var result = null;
        var obj = { id: id };

         $.ajax({
                    type: "POST",
                    url: Url,
                    data: JSON.stringify(obj),
                    contentType: "application/json; charset=utf-8",
                    dataType: "json",
                    async: false,
                    success: function (data, status) {
                        result = data;
                    },
                    error: function (e) {
                        result = e;
                    }
               });

        return result;
    }

    factory.edit = function (Url, id, data) {
        return $http({
            method: 'POST',
            url: Url + id,
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
            data: $.param(data)
        });
    }

    factory.save = function (Url, Datos) {

        var result = null;
/*
        var inf = $http({
            method: 'POST',
            url: Url,
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
            data: $.param(Datos)
        });
        
        $http.post(Url, Datos)
        .then(function success(e) {
            result = e;
 
        }, function error(error) {
            result = error;
        });
*/
         $.ajax({
                    type: "POST",
                    url: Url,
                    data: $.param(Datos),
                    async: false,
                    success: function (data, status) {
                        result = data;
                    },
                    error: function (e) {
                        result = e;
                    }
               });

        return result.message;
    }

    factory.destroy = function (Url, id) {
        return $http.get(Url + id);
    }

    return factory;
});