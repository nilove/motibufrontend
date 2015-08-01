'use strict';

angular.module('motibu.agency.show_clients_controller', [
	'motibu.common_services'
])
.controller('ShowClientsController', ['$scope', '$location', '$http', '$routeParams', function ($scope, $location, $http, $routeParams) {

	$scope.showAddForm = false;
	$scope.clients = [];
	$scope.paginator = {
		totalItems: null,
		currentPage: null,
		maxSize: 5,
		numPages: null,
		perPage: null
	};

	if ($location.path().indexOf('add_client') !== -1) {
		$scope.showAddForm = true;
	}

	$scope.fetchClients = function (page) {
		var paging = (page)? '?page='+page:'';
		$http( {
			method: 'GET',
			url: 'agencies/'+$routeParams.id+'/clients'+paging,
			apiRequest: true,
			accessToken: $scope.getAccessToken()
		})
		.success( function (data) {
			$scope.clients = data.data;
			var paginator = data.meta.pagination;
			$scope.paginator.totalItems = paginator.total;
			$scope.paginator.currentPage = paginator.current_page;
			$scope.paginator.numPages = paginator.total_pages;
			$scope.paginator.perPage = paginator.per_page;
		});
	};

	$scope.fetchClients();

	$scope.pageChanged = function () {
		$scope.fetchClients($scope.paginator.currentPage);
	};

}])