angular.module('motibu.candidate.job_registration_controller', [
	'motibu.common_services'
])
.controller('JobRegistrationController', ['$scope', '$http', '$routeParams', 'notify', function ($scope, $http, $routeParams, notify) {
	$scope.newJob = {};
	$scope.clients = [];
	$scope.agents = [];
	$scope.HRs = [];
	$scope.selectedClient = {};
	$scope.selectedAgent = {};
	$scope.selectedHR = {};
	
		$scope.datepickers = {
			mandate_start: false,
			mandate_end: false,
			date_of_entry: false
		};

	// skills subform stuff
	$scope.addingSkill = true;
	$scope.showSkillForm = function () {
		$scope.addingSkill = true;
	};
	$scope.skills = [];
	$scope.skillCategories = [];
	$scope.addedSkills = [];
	$scope.addedSkillsCategorized = [];

	$scope.selectedSkillCategory = {};
	$scope.selectedSkill = {};
	$scope.getSkillCategories = function() {
		return $http( {
					method: 'GET',
					url: 'skillcategories',
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
					url: 'skills',
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

	$scope.pushSkill = function () {
		$scope.addedSkills.push({
			skill_id: $scope.selectedSkill.selected.value,
			skill_name: $scope.selectedSkill.selected.name,
			skill_category: $scope.selectedSkillCategory.selected.name,
			candidate_id: $scope.getUser().id,
			description: $scope.selectedSkillDescription,
			level: $scope.selectedSkillLevel
		});
	};

	$scope.removeAddedSkill = function (index) {
		$scope.addedSkills.splice(index, 1);
	};

	$scope.getSkillCategories();

	// /skills

	$http( {
		method: 'GET',
		url: 'agencies/'+$routeParams.id+'/clients',
		apiRequest: true,
		accessToken: $scope.getAccessToken()
	})
	.success( function (response) {
		$scope.clients = response.data;
	});

	$scope.getHRs = function (client) {
		$http( {
			method: 'POST',
			url: 'clients/'+client.id+'/clientstaff',
			data: {
				type: 'hr'
			},
			apiRequest: true,
			accessToken: $scope.getAccessToken()
		})
		.success( function (response) {
			$scope.HRs = response.data;
		});
	};

	$http( {
		method: 'GET',
		url: 'agencies/'+$routeParams.id+'/agents',
		apiRequest: true,
		accessToken: $scope.getAccessToken()
	})
	.success( function (response) {
		$scope.agents = response.data;
	});

	// submit create req
	$scope.submit = function () {
		console.log($scope.selectedClient, $scope.selectedAgent, $scope.selectedHR);
		$scope.newJob.skills = $scope.addedSkills;
		$scope.newJob.client_id = $scope.selectedClient.selected.id;
		$scope.newJob.agency_id = $routeParams.id;
		$scope.newJob.agent_id = $scope.selectedAgent.selected.id;
		$scope.newJob.hr_id = $scope.selectedHR.selected.id;
		$scope.newJob.mandate_start = $scope.newJob.mandate_start;
		$scope.newJob.mandate_end = $scope.newJob.mandate_end;
		$scope.newJob.date_of_entry = $scope.newJob.date_of_entry;
		$scope.newJob.location_latitude =$scope.location_latitude;
		$scope.newJob.location_longitude =$scope.location_longitude;
		$scope.newJob.location_longitude =$scope.location_longitude;
		//console.log($scope.newJob);
		$http( {
			method: 'POST',
			url: 'jobs',
			data: $scope.newJob,
			apiRequest: true,
			accessToken: $scope.getAccessToken(),
		}).success( function (data) {
			notify('Job successfully created.')
		});
	};

  // Date Picker configurations

  $scope.today = function() {
	var now = moment().format('DD-MMMM-YYYY');
	$scope.newJob.mandate_start = now;
	$scope.newJob.mandate_end = now;
	$scope.newJob.date_of_entry =  now;
	  console.log(now);
  };
  $scope.today();

  $scope.clear = function () {
    $scope.mandate_start = null;
	$scope.mandateEnd = null;
	  $scope.date_of_entry = null;
  };

  // Disable weekend selection
  $scope.disabled = function(date, mode) {
    return ( mode === 'day' && ( date.getDay() === 0 || date.getDay() === 6 ) );
  };

  $scope.toggleMin = function() {
    $scope.minDate = $scope.minDate ? null : new Date();
  };
  $scope.toggleMin();

  $scope.open = function($event, which) {
    $event.preventDefault();
    $event.stopPropagation();

	  $scope.datepickers[which]= true;

  };

  $scope.dateOptions = {
    formatYear: 'yy',
    startingDay: 1
  };

  $scope.formats = ['dd-MMMM-yyyy', 'yyyy/MM/dd', 'dd.MM.yyyy', 'shortDate'];
  $scope.format = $scope.formats[0];

		$scope.getDateTimeStamp = function(pickerDate){
			pickerDate=Date.parse(pickerDate.replace(/-/g,"/"));
			console.log(pickerDate);
			alert(pickerDate);
			var date =  '0' + pickerDate.getDate();
			var month = '0' + (pickerDate.getMonth() + 1); //Months are zero based
			var year =  pickerDate.getFullYear();

			// return YYYY MM DD

			var dateString =  year + " " + month + " " + date;

			return moment(dateString, 'YYYY MM DD').format('X');
		}
}]);