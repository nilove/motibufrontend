angular.module('motibu.auth', [
	'motibu.auth.login_controller',
    'motibu.auth.register_controller',
    'motibu.auth.register_agency_controllers'
])
.config(['$routeProvider', function ($routeProvider) {
    $routeProvider
	.when('/login', {
		templateUrl: 'page/session.login',
        requiresLogin: false
	})
    .when('/register', {
        templateUrl: 'page/session.register',
        requiresLogin: false
    })
    .when('/register_agency_step_1', {
        templateUrl: 'page/login.sign-up-step-1',
        requiresLogin: false
    })
    .when('/register_agency_step_2', {
        templateUrl: 'page/login.sign-up-step-2',
        requiresLogin: false
    })
    .when('/register_agency_step_3', {
        templateUrl: 'page/login.sign-up-step-3',
        requiresLogin: false
    })
    .when('/register_agency_step_4', {
        templateUrl: 'page/login.sign-up-step-4',
        requiresLogin: false
    })
}]);