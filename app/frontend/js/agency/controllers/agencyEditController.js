'use strict';

angular.module('motibu.agency.agency_edit_controller', [
	'motibu.common_services'
])
.controller('AgencyEditController', ['$scope', '$http', '$routeParams', 'notify', function ($scope, $http, $routeParams, notify) {

	$scope.agency = [];

	$http( {
		method: 'GET',
		url: 'agencies/'+$routeParams.id+'/show',
		apiRequest: true,
		accessToken: $scope.getAccessToken(),
	}).success( function (response) {
		$scope.agency = response.data.data;
		$scope.setHeaderTitle($scope.agency.name);
	});

	$scope.submit = function () {
		$http( {
			method: 'POST',
			url: 'agencies/'+$routeParams.id+'/update',
			apiRequest: true,
			accessToken: $scope.getAccessToken(),
			requestType: 'multipart',
			data: {
	            id: $scope.agency.id,
	            name: $scope.agency.name,
	            description: $scope.agency.description,
	            num_employees_to: $scope.agency.num_employees_to,
	            num_employees_from: $scope.agency.num_employees_from,
	            legal_entity: $scope.agency.legal_entity,
	            reg_no: $scope.agency.reg_no,
	            operational_hours_monday_from: $scope.agency.operational_hours_monday_from,
	            operational_hours_monday_to: $scope.agency.operational_hours_monday_to,
	            operational_hours_tuesday_from: $scope.agency.operational_hours_tuesday_from,
	            operational_hours_tuesday_to: $scope.agency.operational_hours_tuesday_to,
	            operational_hours_wednesday_from: $scope.agency.operational_hours_wednesday_from,
	            operational_hours_wednesday_to: $scope.agency.operational_hours_wednesday_to,
	            operational_hours_thursday_from: $scope.agency.operational_hours_thursday_from,
	            operational_hours_thursday_to: $scope.agency.operational_hours_thursday_to,
	            operational_hours_friday_from: $scope.agency.operational_hours_friday_from,
	            operational_hours_friday_to: $scope.agency.operational_hours_friday_to,
	            operational_hours_saturday_from: $scope.agency.operational_hours_saturday_from,
	            operational_hours_saturday_to: $scope.agency.operational_hours_saturday_to,
	            operational_hours_sunday_from: $scope.agency.operational_hours_sunday_from,
	            operational_hours_sunday_to: $scope.agency.operational_hours_sunday_to,
	            social_facebook: $scope.agency.social_facebook,
	            social_linked_in: $scope.agency.social_linked_in,
	            social_twitter: $scope.agency.social_twitter,
	            social_google_plus: $scope.agency.social_google_plus,
	            social_instagram: $scope.agency.social_instagram,
	            social_youtube: $scope.agency.social_youtube,
	            is_client: $scope.agency.is_client,
	            banner_filename: $scope.agency.banner_filename,
	            logo_filename: $scope.agency.logo_filename
			}
		}).success( function (response) {
				notify(response.message);
                if($scope.agency.banner_url !== response.agency.data.banner_url){
                    $scope.agency.banner_url = response.agency.data.banner_url;
                }
                if($scope.agency.logo_url !== response.agency.data.logo_url){
                    $scope.agency.logo_url = response.agency.data.logo_url;
                }
		});
	};

}])