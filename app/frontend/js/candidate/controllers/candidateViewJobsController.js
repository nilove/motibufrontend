angular.module('motibu.candidate.candidate_view_jobs_controller', [
	'motibu.common_services'
])
.controller('CandidateViewJobsController', ['$scope', '$http', 'notify', function ($scope, $http, notify) {

	var getCategorizedSkills = function (skills) {
		var categories = {};

		for (var i = skills.length - 1; i >= 0; i--) {
			var skill = skills[i];
			if (!categories[skill.skill_category_id]) {
				categories[skill.skill_category_id] = {name: skill.category_name, id: skill.skill_category_id};
				categories[skill.skill_category_id].skills = [];
			}
			categories[skill.skill_category_id].skills.push(skill);
		};

		return categories;
	}

	$scope.selectedJob = {};
	$scope.selectJob = function (job) {
		$scope.selectedJob = job;
		$scope.selectedJob.inline_skills_array = (job.inline_skills)? job.inline_skills.split(','):[];
		$scope.skillCategories = getCategorizedSkills(job.skills.data);
		$scope.getMessages();
	};
	$scope.jobs = [];

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
			url: 'candidates/'+$scope.getUser().candidate_profile.id+'/jobs',
			apiRequest: true,
			accessToken: $scope.getAccessToken()
		}).success( function (response) {
			$scope.jobs = response.data;
			var paginator = response.meta.pagination;
			$scope.paginator.totalItems = paginator.total;
			$scope.paginator.currentPage = paginator.current_page;
			$scope.paginator.numPages = paginator.total_pages;
			$scope.paginator.perPage = paginator.per_page;
		});
	};

	$scope.fetchJobs();

	$scope.pageChanged = function () {
		$scope.fetchJobs($scope.paginator.currentPage);
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


	// messages stuff
	$scope.messages = [];
	$scope.messageBody = '';
	$scope.sendMessage = function () {
		var scope = this;
		$http( {
			method: 'POST',
			url: 'jobs/'+$scope.selectedJob.id+'/messages',
			data: {
				payload: this.messageBody
			},
			apiRequest: true,
			accessToken: this.getAccessToken()
		}).success( function (response) { 
			$scope.messages.push({
				sender: $scope.getUser(),
				payload: scope.messageBody
			});
			scope.messageBody = '';
		}).error( function () {
			notify('Failed to send message :(');
		});
	};

	$scope.getMessages = function () {
		var scope = this;
		$http( {
			method: 'GET',
			url: 'jobs/'+scope.selectedJob.id+'/messages',
			apiRequest: true,
			accessToken: $scope.getAccessToken()
		}).success( function (response) {
			$scope.messages = response || [];
		}).error( function () {
			notify('Failed to retrieve messages :(');
		});
	};
}]);