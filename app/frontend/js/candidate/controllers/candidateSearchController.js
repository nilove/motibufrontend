angular.module('motibu.candidate.candidate_search_controller', [
	'motibu.common_services'
])
.controller('CandidateSearchController', ['$scope', '$http', '$routeParams', 'professionalSearchCriteria',
	function ($scope, $http, $routeParams, searchCriteria) {
		
		$scope.experiencefrom="";
		$scope.experienceto="";

		$scope.agefrom="";
		$scope.ageto="";

		$scope.salaryfrom="";
		$scope.salaryto="";


		$scope.professionals = [];
		$scope.searchCriteria = searchCriteria.getCriteria();

		$http( {
			method: 'GET',
			url: 'public/search',
			params: searchCriteria.getCriteria(),
			apiRequest: true,
			accessToken: ''
		})
		.then(function(response) {
			$scope.professionals = response.data.professionals.data;
		});

		$scope.filterByExperience=function(candidate)
		{
			var flag=0;
			if ( $scope.experiencefrom == "" || $scope.experienceto== "" )
			{
				flag=1;
			}
			else if( (parseInt(candidate.years_of_experience) >= parseInt($scope.experiencefrom))  && (parseInt(candidate.years_of_experience) <= parseInt($scope.experienceto)))
			{
				flag=1;
			}	
			if(flag == 1)
			{
				return true;
			}		
		};

		$scope.filterByAge=function(candidate)
		{
			var flag=0;
			if ( $scope.agefrom == "" || $scope.ageto == "" )
			{
				flag=1;
			}	
			else if( (parseInt(candidate.age) >= parseInt($scope.agefrom))  && (parseInt(candidate.age) <= parseInt($scope.ageto)))
			{
				flag=1;
			}
			if( flag == 1)
			{
				return true;
			}		
		};

		$scope.filterByExSalary=function(candidate)
		{
			var flag=0;
			if ( $scope.salaryfrom == "" || $scope.salaryto == "" )
			{
				flag=1;
			}	
			else if( (parseInt(candidate.expected_salary) >= parseInt($scope.salaryfrom))  && (parseInt(candidate.expected_salary) <= parseInt($scope.salaryto)))
			{
				flag=1;
			}
			if( flag == 1)
			{
				return true;
			}		
		};




	}
])