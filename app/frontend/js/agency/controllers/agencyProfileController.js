'use strict';

angular.module('motibu.agency.agency_profile_controller', [
	'motibu.common_services'
])
.controller('AgencyProfileController', ['$scope', '$http', '$routeParams', 'notify', function ($scope, $http, $routeParams, notify) {

	$scope.agency = {};

	$http( {
		method: 'GET',
		url: 'agencies/'+$routeParams.id+'/show',
		apiRequest: true,
		accessToken: $scope.getAccessToken(),
	}).success( function (response) {
		$scope.agency = response.data.data;
		$scope.setHeaderTitle($scope.agency.name);
	});

}])