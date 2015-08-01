'use strict';

angular.module('motibu.agency.show_agents_controller', [
	'motibu.common_services'
])
.controller('ShowAgentsController', ['$scope', '$routeParams', '$location', '$http', function ($scope, $routeParams, $location, $http) {

	$scope.showAddForm = false;
	$scope.agents = [];

	$scope.addAgent = function (agent) {
		$scope.agents.push(agent);
	};

	if ($location.path().indexOf('add_agent') !== -1) {
		$scope.showAddForm = true;
	}

	$http( {
		method: 'GET',
		url: 'agencies/'+$routeParams.id+'/agents',
		apiRequest: true,
		accessToken: $scope.getAccessToken()
	})
	.success( function (data) {
		$scope.agents = data.data;
		// angular.forEach (data.data, function (item) {
		// 	$scope.agents.push(item);
		// });
		$scope.pagination = data.meta.pagination;
	});


}])