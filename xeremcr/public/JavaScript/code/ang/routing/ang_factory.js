angular.module('commentService', [])

	.factory('Comment', function($http) {

		return {
			get : function() {
				return $http.get('noticias/articulos');
			},
			show : function(id) {
				return $http.get('noticias/show_articulos/' + id);
			},
			edit : function(id, commentData) {
				return $http({
					method: 'POST',
					url: 'noticias/articulos'+ id + '/edit',
					headers: { 'Content-Type' : 'application/x-www-form-urlencoded' },
					data: $.param(commentData)
				});
			},
			save : function(commentData) {
				return $http({
					method: 'POST',
					url: 'noticias/save_articulos',
					headers: { 'Content-Type' : 'application/x-www-form-urlencoded' },
					data: $.param(commentData)
				});
			},
			destroy : function(id) {
				return $http.get('noticias/delete_articulos/' + id);
			}
		}

	});