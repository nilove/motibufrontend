'use strict';

angular.module('motibu.agency', [
	'motibu.agency.show_clients_controller',
	'motibu.agency.add_client_controller',
	'motibu.agency.client_profile_controller',
	'motibu.agency.client_candidates_controller',
	'motibu.agency.agent_profile_controller',
	'motibu.agency.show_staff_controller',
	'motibu.agency.show_jobs_controller',
	'motibu.agency.show_agents_controller',
	'motibu.agency.add_staff_controller',
	'motibu.agency.add_agent_controller',
	'motibu.agency.agency_edit_controller',
	'motibu.agency.agency_profile_controller',
])
// too pressed for time to write a proper solution
// till then we use this like a shit hurling simian
.constant('clientTabs', {
	"Client Profile": "/client/:id/profile",
	"Client Team": "/client/:id/add_staff",
	"Applicants": "/client/:id/candidates"
})
.constant('agencyTabs', {
	"Profile": "/agency/:id/profile",
	"Agents": "/agency/:id/agents",
	"Clients": "/agency/:id/clients",
	"Job & Applicants": "/agency/:id/jobs",
	"Create Job": "/agency/:id/create_job"
})
.config(['$routeProvider', 'clientTabs', 'agencyTabs', function ($routeProvider, clientTabs, agencyTabs) {
	$routeProvider
	.when('/agency/:id/profile', {
		templateUrl: '/page/agency.profile',
		requiresLogin: true,
		tabs: 'agencyTabs',
		// header: 'Agency Profile'
	})
	.when('/agency/:id/edit', {
		templateUrl: '/page/agency.edit',
		requiresLogin: true,
		tabs: 'agencyTabs',
		// header: 'Agency Profile'
	})
	.when('/agency/:id/jobs', {
		templateUrl: '/page/agency.jobs',
		requiresLogin: true,
		// tabs: 'agencyTabs',
		header: 'Jobs'
	})
	.when('/agency/:id/add_agent', {
		templateUrl: '/page/agency.agents',
		requiresLogin: true,
		// tabs: 'agencyTabs',
		header: 'Agents'
	})
	.when('/agency/:id/add_client', {
		templateUrl: '/page/agency.clients',
		requiresLogin: true,
		tabs: 'agencyTabs',
		header: 'Clients'
	})
	.when('/agency/:id/clients', {
		templateUrl: '/page/agency.clients',
		requiresLogin: true,
		// tabs: 'agencyTabs',
		header: 'Clients'
	})
	.when('/agency/:id/agents', {
		templateUrl: '/page/agency.agents',
		requiresLogin: true,
		// tabs: 'agencyTabs',
		header: 'Agents'
	})
	.when('/agency/agent/:id', {
		templateUrl: '/page/agency.agent_profile',
		requiresLogin: true,
		header: 'Agent Profile'
	})
	.when('/client/:id/add_staff', {
		templateUrl: '/page/agency.staff',
		requiresLogin: true,
		tabs: 'clientTabs',
		header: 'Client Staff'
	})
	.when('/client/:id/profile', {
		templateUrl: '/page/agency.client_profile',
		requiresLogin: true,
		tabs: 'clientTabs',
		header: 'Client Profile'
	})
	.when('/client/:id/candidates', {
		templateUrl: '/page/agency.candidates',
		requiresLogin: true,
		tabs: 'clientTabs',
		header: 'Candidates'
	})
	.when('/agent/:id/profile', {
		templateUrl: '/page/agency.agent_profile',
		requiresLogin: true,
		header: 'Agent Profile'
	})
}]);