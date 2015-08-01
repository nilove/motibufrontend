'use strict';

angular.module('motibu.agency.client_profile_controller', [
	'motibu.common_services'
])
.controller('ClientProfileController', ['$scope', '$routeParams', '$location', '$http', function ($scope, $routeParams, $location, $http) {
	$scope.client = {};
	$scope.jobs = [];
	$scope.paginator = {
		totalItems: null,
		currentPage: null,
		maxSize: 5,
		numPages: null,
		perPage: null
	};

	$http( {
		method: 'GET',
		url: 'clients/'+$routeParams.id,
		apiRequest: true,
		accessToken: $scope.getAccessToken()
	})
	.success( function (response) { 
		$scope.client = response.data.data;
	});

	$scope.fetchJobs = function (page) {
		var paging = (page)? '?page='+page:'';
		$http( {
			method: 'GET',
			url: 'clients/'+$routeParams.id+'/jobs'+paging,
			apiRequest: true,
			accessToken: $scope.getAccessToken()
		})
		.success( function (data) {
			$scope.jobs = data.data;
			var paginator = data.meta.pagination;
			$scope.paginator.totalItems = paginator.total;
			$scope.paginator.currentPage = paginator.current_page;
			$scope.paginator.numPages = paginator.total_pages;
			$scope.paginator.perPage = paginator.per_page;
		});
	};

	$scope.fetchJobs();

	$scope.pageChanged = function () {
		$scope.fetchJobs($scope.paginator.currentPage);
	};

}])