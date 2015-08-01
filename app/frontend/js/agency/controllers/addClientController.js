'use strict';

angular.module('motibu.agency.add_client_controller', [
	'motibu.common_services'
])
.controller('AddClientController', ['$scope', '$http', '$routeParams', 'formDataObject', function ($scope, $http, $routeParams, formDataObject) {

	$scope.name = "";
	$scope.industry_id = null;
	$scope.contactName = "";
	$scope.contactTelephone = "";
	$scope.contactMail = "";
	$scope.file = "";

	$scope.selectedIndustry = {};
	$scope.industries = [];

	$scope.submit = function submit() {
		return $http( {
			method: 'POST',
			url: 'clients',
			data: {
				name: $scope.name,
				contact_name: $scope.contactName,
				contact_telephone: $scope.contactTelephone,
				contact_email: $scope.contactMail,
				agency_id: $routeParams.id,
				industry_id: $scope.selectedIndustry.selected.id,
				logo_filename: $scope.logo_filename
			},
			apiRequest: true,
			accessToken: $scope.getAccessToken(),
			requestType: 'multipart'
		})
		.success( function () {
			$scope.clients.push( {
				name: $scope.name,
				contact_name: $scope.contactName,
				contact_telephone: $scope.contactTelephone,
				contact_email: $scope.contactMail,
			});
		});
	};

	$scope.getIndustries = function() {
		return $http( {
					method: 'GET',
					url: 'industries',
					apiRequest: true,
					accessToken: $scope.getAccessToken()
				})
				.then(function(response) {
					$scope.industries = response.data.data.slice(0, 50);
				});
	};

	$scope.getIndustries();

}])