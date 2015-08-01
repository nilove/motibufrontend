'use strict';

angular.module('motibu.agency.agent_profile_controller', [
	'motibu.common_services'
])
.controller('AgentProfileController', ['$scope', '$http', '$routeParams', function ($scope, $http, $routeParams) {

	$scope.agent = {};

	$http( {
		method: 'GET',
		url: 'agents/'+$routeParams.id+'/show',
		apiRequest: true,
		accessToken: $scope.getAccessToken(),
	}).success( function (response) {
		$scope.agent = response.data.data;
	});

	$scope.jobs = []
	$scope.paginator = {
		totalItems: null,
		currentPage: null,
		maxSize: 5,
		numPages: null,
		perPage: null
	};

	$scope.fetchJobs = function (page) {
		var paging = (page)? '?page='+page:'';
		$http( {
			method: 'GET',
			url: 'agents/'+$routeParams.id+'/jobs'+paging,
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

}])