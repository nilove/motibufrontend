angular.module('motibu.auth.login_controller', [
	'motibu.common_services'
])
.controller('LoginController', ['$scope', '$http', '$location', function ($scope, $http, $location) {
	$scope.username = '';
	$scope.password = '';

	$scope.authFailed = false;

	$scope.submit = function () {
		return $http( {
			method: 'POST',
			url: '/login',
			data: {
				email: $scope.username,
				password: $scope.password,
			},
			transformRequest: function(obj) {
				var str = [];
				for(var p in obj)
				str.push(encodeURIComponent(p) + "=" + encodeURIComponent(obj[p]));
				return str.join("&");
			},
			headers: {
				'Content-Type': 'application/x-www-form-urlencoded'
			}
		})
		.success(function (data, status, headers, config) {
			console.log(data);
			$scope.setAccessToken(data.access_token);
			$scope.setLoginStatus(true);
			$scope.setUser(data.user);

			if(parseURL() == 1)
			{
				location.href="/#/search/professionals";
			}

			if (data.user.is_agency_admin) {
				return $location.path('/agency/'+data.user.agencies[0].id+'/profile');
			} else if (data.user.is_professional) {
				return $location.path('/candidate/'+data.user.candidate_profile.id+'/profile');
			}

			$location.path('/');
		})
		.error(function (data, status, headers, config) {
			$scope.setAccessToken(null);
			$scope.setLoginStatus(false);
			$scope.setUser({});
			$scope.authFailed = true;
		});
	}
}])