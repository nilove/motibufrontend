'use strict';

angular.module('motibu.agency.add_agent_controller', [
	'motibu.common_services'
])
.controller('AddAgentController', ['$scope', '$routeParams', '$http', function ($scope, $routeParams, $http) {

	$scope.name = "";
	$scope.telephone = "";
	$scope.mail = "";
	$scope.profile_pic_filename = "";

	$scope.submit = function submit() {
		return $http( {
			method: 'POST',
			url: 'agents',
			data: {
				name: $scope.name,
				telephone: $scope.telephone,
				email: $scope.mail,
				profile_pic_filename: $scope.profile_pic_filename,
				agency_id: $routeParams.id
			},
			apiRequest: true,
			accessToken: $scope.getAccessToken(),
			requestType: 'multipart'
		}).success( function (data) {
			console.log(data.data.data);
			if (data.success == true)
				$scope.addAgent(data.data.data);
		});
	};

}])