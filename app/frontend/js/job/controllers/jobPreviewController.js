angular.module('motibu.candidate.job_preview_controller', [
	'motibu.common_services'
])
.controller('JobPreviewController', ['$scope', '$http', '$routeParams', function ($scope, $http, $routeParams) {
	$scope.job = {};

	$http( {
		method: 'GET',
		url: 'jobs/'+$routeParams.id+'/show',
		apiRequest: true,
		accessToken: $scope.getAccessToken(),
	}).success( function (response) {
		$scope.job = response.data.data;
	});
}])