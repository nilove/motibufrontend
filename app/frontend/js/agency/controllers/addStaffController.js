'use strict';

angular.module('motibu.agency.add_staff_controller', [
	'motibu.common_services'
])
.controller('AddStaffController', ['$scope', '$routeParams', '$http', function ($scope, $routeParams, $http) {

	$scope.name = "";
	$scope.telephone = "";
	$scope.mail = "";
	$scope.profile_pic_filename = "";

	$scope.submit = function submit() {
		return $http( {
			method: 'POST',
			url: 'clientstaff',
			data: {
				name: $scope.name,
				telephone: $scope.telephone,
				email: $scope.mail,
				profile_pic_filename: $scope.profile_pic_filename,
				client_id: $routeParams.id,
				type: $scope.getSelectedType()
			},
			apiRequest: true,
			accessToken: $scope.getAccessToken(),
			requestType: 'multipart'
		}).success( function (data) {
			if (data.success == true)
				$scope.addAgent(data.data);
		});
	};

}])