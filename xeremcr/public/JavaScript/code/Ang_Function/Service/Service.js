XeremCrApp.service('XeremService', function ($http, XeremFactory) {

    var UrlConstant = "../public/";

    this.Mostrar = function (crt) {
        var Accion = UrlConstant + crt + "/show";
        return XeremFactory.get(Accion);
    }
    this.Buscar = function (crt, id) {
        var Accion = UrlConstant + crt + "/Details";
        var result = XeremFactory.show(Accion, id);
        return result;
    }
    this.Editar = function (crt, id, data) {
        var Accion = UrlConstant + crt + "/Edit";
        return XeremFactory.edit(Accion, id, data);
    }
    this.Guardar = function (crt, data) {
        var Accion = UrlConstant + crt + "/store";
        return XeremFactory.save(Accion, data);
    }
    this.Eliminar = function (crt, id) {
        var Accion = UrlConstant + crt + "/Delete";
        return XeremFactory.destroy(Accion, id);
    }
    this.Accion = function (crt, Metodo, Data) {
        var Url = UrlConstant + crt + Metodo;
        return XeremFactory.destroy(Url, Data);
    }

});