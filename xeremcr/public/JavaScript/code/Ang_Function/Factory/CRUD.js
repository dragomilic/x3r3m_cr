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
        var obj = JSON.stringify(Datos);

         $.ajax({
                    type: "POST",
                    url: Url,
                    data: obj,
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

        /*return $http({
            method: 'POST',
            url: Url,
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
            async:false,
            data: $.param(data)
        });*/
    }

    factory.destroy = function (Url, id) {
        return $http.get(Url + id);
    }

    return factory;
});