angular.module('motibu.agent', [
	'motibu.agent.agent_view_profile_controller',
	// 'motibu.agent.agent_registration_controller',
	'motibu.agent.agent_view_jobs_controller'
])

// SHS solution

.config(['$routeProvider', function ($routeProvider) {
	$routeProvider
	.when('/agent/view/:id/profile', {
		templateUrl: 'page/agent.profile',
		// tabs: 'agentTabs',
		// header: 'agent Profile'
	})
	.when('/agent/view/:id/applications', {
		templateUrl: 'page/agent.jobs',
		requiresLogin: true,
		// tabs: 'candidateTabs',
		// header: 'Jobs'
	})
}]);
