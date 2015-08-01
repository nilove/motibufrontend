'use strict';

angular.module('motibu.job', [
	'motibu.candidate.job_preview_controller',
	'motibu.candidate.job_registration_controller',
	'motibu.candidate.job_search_controller'
])
.constant('agencyTabs', {
	"Profile": "/agency/:id/profile",
	"Agents": "/agency/:id/agents",
	"Clients": "/agency/:id/clients",
	"Job & Applicants": "/agency/:id/jobs",
	"Create Job": "/agency/:id/create_job"
})
.config(['$routeProvider', 'agencyTabs', function ($routeProvider, agencyTabs) {
	$routeProvider
	.when('/agency/:id/create_job', {
		templateUrl: '/page/job.register',
		requiresLogin: true,
		tabs: agencyTabs,
		header: 'Create New Job'
	})
	.when('/job/view/:id', {
		templateUrl: '/page/job.preview',
		header: 'Job Details'
	})
}]);