'use strict';

angular.module('motibu.agency.show_jobs_controller', [
	'motibu.common_services'
])
.controller('ShowJobsController', ['$scope', '$routeParams', '$location', '$http', function ($scope, $routeParams, $location, $http) {
	$scope.jobs = [];
	$scope.job = {};
	$scope.candidates = [];

	$http( {
		method: 'GET',
		url: 'agencies/'+$routeParams.id+'/jobs',
		apiRequest: true,
		accessToken: $scope.getAccessToken()
	})
	.success( function (response) { 
		$scope.jobs = response.data;
	});

	$scope.setJob = function (job) {
		$scope.job = job;

		$http( {
			method: 'GET',
			url: 'jobs/'+job.id+'/candidates',
			apiRequest: true,
			accessToken: $scope.getAccessToken()
		})
		.success( function (response) {
			$scope.candidates = response;
		})
	};

}])