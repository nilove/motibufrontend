'use strict';

angular.module('motibu.agency.show_staff_controller', [
	'motibu.common_services'
])
.controller('ShowStaffController', ['$scope', '$routeParams', '$location', '$http', function ($scope, $routeParams, $location, $http) {

	$scope.selectedType = 'hr';
	$scope.getSelectedType = function () {
		return $scope.selectedType;
	};

	$scope.showAddForm = false;
	$scope.staffArray = [];

	$scope.addAgent = function (agent) {
		$scope.staffArray.push(agent);
	};

	if ($location.path().indexOf('add_staff') !== -1) {
		$scope.showAddForm = true;
	}

	$http( {
		method: 'POST',
		url: 'clients/'+$routeParams.id+'/clientstaff',
		apiRequest: true,
		accessToken: $scope.getAccessToken()
	})
	.success( function (data) {
		$scope.staffArray = data.data;
		// angular.forEach (data.data, function (item) {
		// 	$scope.agents.push(item);
		// });
		$scope.pagination = data.meta.pagination;
	});
}])