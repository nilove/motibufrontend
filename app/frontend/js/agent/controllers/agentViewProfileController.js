angular.module('motibu.agent.agent_view_jobs_controller', [
	'motibu.common_services'
])
.controller('AgentViewProfileController', ['$scope', '$routeParams', '$http', function ($scope, $routeParams, $http) {

	$scope.agent = {};

	$http( {
		method: 'GET',
		url: 'agents/'+$routeParams.id+'/show',
		apiRequest: true,
		accessToken: $scope.getAccessToken(),
	}).success( function (response) {
		$scope.agent = response.data.data;
		$scope.setHeaderTitle($scope.getUser().first_name+' '+$scope.getUser().last_name);
	});


	$scope.jobs = []
	$scope.paginator = {
		totalItems: null,
		currentPage: null,
		maxSize: 5,
		numPages: null,
		perPage: null
	};

	$scope.fetchJobs = function (page) {
		var paging = (page)? '?page='+page:'';
		$http( {
			method: 'GET',
			url: 'agents/'+$routeParams.id+'/jobs'+paging,
			apiRequest: true,
			accessToken: $scope.getAccessToken()
		})
		.success( function (data) {
			$scope.jobs = data.data;
			var paginator = data.meta.pagination;
			$scope.paginator.totalItems = paginator.total;
			$scope.paginator.currentPage = paginator.current_page;
			$scope.paginator.numPages = paginator.total_pages;
			$scope.paginator.perPage = paginator.per_page;
		});
	};

	$scope.fetchJobs();

}])