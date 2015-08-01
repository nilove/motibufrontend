'use strict';

angular.module('motibu.candidate', [
	'motibu.candidate.candidate_profile_controller',
	'motibu.candidate.candidate_search_controller',
	'motibu.candidate.candidate_registration_controller',
	'motibu.candidate.candidate_view_jobs_controller'
])

// SHS solution

.constant('candidateTabs', {
	filteredByUser: function (user) {
		if (user.agencies.length) {
			return {
				"Candidate Profile": "/candidate/:id/profile",
			}
		} else {
			return {
				"Profile": "/candidate/:id/profile",
				"Edit": "/candidate/:id/edit",
				"Jobs": "/candidate/:id/jobs",
			}
		}
	}
})
.config(['$routeProvider', 'candidateTabs', function ($routeProvider, candidateTabs) {
	$routeProvider
	.when('/candidate/:id/profile', {
		templateUrl: 'page/candidate.profile',
		tabs: 'candidateTabs',
		requiresLogin: true
		// header: 'Candidate Profile'
	})
	.when('/candidate/:id/edit', {
		templateUrl: 'page/candidate.register',
		requiresLogin: true,
		tabs: 'candidateTabs',
		header: 'Edit Profile'
	})
	.when('/candidate/:id/jobs', {
		templateUrl: 'page/candidate.jobs',
		requiresLogin: true,
		tabs: 'candidateTabs',
		header: 'Jobs'
	})
	.when('/candidate/:id/applications', {
		templateUrl: 'page/candidate.applications',
		requiresLogin: true,
		tabs: 'candidateTabs',
		header: 'Applications'
	})
	.when('/job/search', {
		templateUrl: '/page/job.search',
		requiresLogin: true,
		tabs: 'candidateTabs',
		header: 'Search Job'
	})
	.when('/candidate/moticard', {
		templateUrl: '/page/candidate.moticardtoken',
		requiresLogin: true,
		tabs: 'candidateTabs',
		header: 'Moticard'
	})
	.when('/search/professionals', {
		templateUrl: 'page/candidate.search',
		requiresLogin: false,
		tabs: 'candidateTabs',
		header: 'Search Jobs'
	});
}]);
