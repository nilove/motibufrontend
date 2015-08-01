angular.module('motibu.candidate.job_search_controller', [
	'motibu.common_services'
])
.controller('JobSearchController', ['$scope', '$http', '$routeParams','notify', function ($scope, $http, $routeParams,notify) {
	
    $scope.showCategories = false;
	$scope.showSkills = true;
	$scope.skillCategories = [];
	$scope.skills = [];
	$scope.selectedSkills = [];
	$scope.jobs =[];
	$scope.paginator = {
		totalItems: null,
		currentPage: null,
		maxSize: 5,
		numPages: null,
		perPage: null
	};

	$scope.getSkillCategories = function() {
		return $http( {
					method: 'GET',
					url: 'public/skillcategories',
					params: {
						list: true
					},
					apiRequest: true,
					accessToken: $scope.getAccessToken()
				})
				.then(function(response) {
					var cats = [];
					angular.forEach(response.data.data, function (value, key) {
						cats.push({value: key, name: value});
					})
					$scope.skillCategories = cats;
				});
	};

	$scope.getSkills = function(category) {
		return $http( {
					method: 'GET',
					url: 'public/skills',
					params: {
						list: true,
						skill_category_id: category.value
					},
					apiRequest: true,
					accessToken: $scope.getAccessToken()
				})
				.then(function(response) {
					var skills = [];
					angular.forEach(response.data.data, function (value, key) {
						skills.push({value: key, name: value});
					})
					$scope.skills = skills;
				});
	};
	
	$scope.addSkill = function (skill) {
		if (!skill.added) {
			skill.added = true;
			$scope.selectedSkills.push(skill);
			skill.indexOnList = $scope.selectedSkills.length-1;
		} else {
			skill.added = false;
			console.log(skill.indexOnList);
			$scope.selectedSkills.splice(skill.indexOnList, 1);
			skill.indexOnList = -1;
		}
	};

	$scope.getSearchResult=function()
	{
		var params={skills: JSON.stringify($scope.selectedSkills),
			location_name: $scope.location.formatted_address,
			location_latitude: $scope.location.geometry.location.lat,
			location_longitude: $scope.location.geometry.location.lng
		};

		$scope.professionals = [];
		//$scope.searchCriteria = searchCriteria.getCriteria();


		$http( {
			method: 'GET',
			url: 'public/searchjob',
			params: params,
			apiRequest: true,
			accessToken: ''
		})
		.then(function(response) {
			console.log(response);
			$scope.jobs = response.data.data;
			var paginator = response.meta.pagination;
			$scope.paginator.totalItems = paginator.total;
			$scope.paginator.currentPage = paginator.current_page;
			$scope.paginator.numPages = paginator.total_pages;
			$scope.paginator.perPage = paginator.per_page;
		});

		
	};

    $scope.getLocation = function(val) {
      return $http.get('http://maps.googleapis.com/maps/api/geocode/json', {
        params: {
          address: val,
          sensor: false
        }
      }).then(function(res) {
        var addresses = [];
        angular.forEach(res.data.results, function(item) {
        	console.log(item);
          addresses.push(item);
        });
        return addresses;
      });
    };


    $scope.apply = function (job) {
		$http( {
			method: 'POST',
			url: 'jobs/'+job.id+'/candidates',
			data: {
				user_id: $scope.getUser().id
			},
			apiRequest: true,
			accessToken: $scope.getAccessToken()
		}).success( function (response) { 
			notify('Applied to job successfuly :)');
		}).error( function () {
			notify('Failed to apply for job');
		});
	};

	$scope.getSkillCategories();




}])