'use strict';

var getQS = function (name) {
	var match = RegExp('[?&]' + name + '=([^&]*)').exec(window.location.search);
	return match && decodeURIComponent(match[1].replace(/\+/g, ' '));
};

function selfreload(redirect)
{
	//alert(redirect);
	$('#login-popup').modal('hide');
	location.href=redirect;
}
 
function parseURL()
{
	var flag =0 ;
	var url="'"+self.location+"'";
	//alert(url);
	var parts= url.split("redirect=1");
	if(parts.length > 0)
	{
		flag = 1;
	}
	return flag;
}



var app = angular.module('motibu', [
    'ngCookies',
    'ngResource',
    'ngSanitize',
    'ngRoute',
    'ngAnimate',
    'ui.bootstrap',
    'motibu.common_services',
    'motibu.common_directives',
    'motibu.auth',
    'motibu.job',
    'motibu.candidate',
    'motibu.agent',
    'motibu.agency'
]);

app.controller('MainController', ['$scope', '$rootScope', '$location', '$routeParams', '$http', 'tabService',
	function ($scope, $rootScope, $location, $routeParams, $http, tabService) {

	$scope.access_token = localStorage.getItem('session.access_token');
	
	$scope.isLoggedIn = !($scope.access_token == "null" || $scope.access_token == null);
	$scope.setLoginStatus = function (status) {
		$scope.isLoggedIn = status;
	};
	$scope.getLoginStatus = function () {
		return $scope.isLoggedIn;
	};

	$scope.language = '';
	$scope.setLanguage = function (language) {
		if (language == 'en') return $scope.language = '';
		$scope.language = '_'+language;
	};

	$scope.getLanguage = function () {
		return $scope.language;
	};

	$scope.getLocalized = function (path) {
		var obj = this;
	    for (var i=0, path=path.split('.'), len=path.length; i<len; i++) {
	    	if (i == (len-1))
	    		path[i] = path[i]+$scope.getLanguage();
	        obj = obj[path[i]];
	    };
	    return obj;
	};

	$scope.setAccessToken = function (token) {
		$scope.access_token = token;
		localStorage.setItem('session.access_token', token);
	};

	$scope.getAccessToken = function () {
		return $scope.access_token;
	};

	$scope.user = {};
	$scope.setUser = function (user) {
		$scope.user = user;
		localStorage.setItem('session.user', JSON.stringify(user));
	};

	$scope.getUser = function () {
		return $scope.user;
	};

	if ($scope.getLoginStatus()) {
		$scope.setUser(JSON.parse(localStorage.getItem('session.user')));
		var conn = new WebSocket('ws://localhost:8081');
		conn.onopen = function(e) {
		    console.log("Connection established!");

			conn.send( JSON.stringify( {
				access_token: $scope.getAccessToken(),
				type: 'authenticate'
			}));

		};

		conn.onmessage = function(e) {
		    console.log(e.data);
		};

	} else {
		localStorage.removeItem('session.access_token');
		localStorage.removeItem('session.user');
	}

	$scope.headerTitle = '';
	$scope.setHeaderTitle = function (title) {
		$scope.headerTitle = title;
	};

	// handle tabs
	$scope.tabDefs = [];
	$scope.currentPath = '';

	$scope.logOut = function () {
		$http( {
			method: 'POST',
			url: 'users/logout',
			apiRequest: true,
			accessToken: $scope.getAccessToken()
		}).success( function (data) {
			localStorage.removeItem('session.access_token');
			localStorage.removeItem('session.user');
			$scope.setAccessToken(null);
			$scope.setLoginStatus(false);
			$scope.setUser({});
			$location.path('/');
		}).error( function () {
			localStorage.removeItem('session.access_token');
			localStorage.removeItem('session.user');
			$scope.setAccessToken(null);
			$scope.setLoginStatus(false);
			$scope.setUser({});
			$location.path('/');
		});
	};

    $rootScope.$on('$routeChangeStart', function(event, nextLoc, currentLoc) {
    	$scope.tabDefs = [];
    	if (nextLoc.$$route) {
	    	var guarded = nextLoc.$$route.requiresLogin;
	        if(guarded && !$scope.getLoginStatus()) {
	            $location.path('/login');
	        }
    	}
    });

    $rootScope.$on('$routeChangeSuccess', function(event, nextLoc, currentLoc) {
    	$scope.tabDefs = [];
    	$scope.currentPath = $location.path();
    	if (nextLoc.$$route) {
	        if (nextLoc.$$route.tabs) {
	   //      	var tabs = (nextLoc.$$route.tabs.filteredByUser !== undefined)?
	   //      					nextLoc.$$route.tabs.filteredByUser($scope.getUser())
	   //      					: nextLoc.$$route.tabs;
				// for (var title in tabs) {
				// 	var tabDef = {};
				// 	tabDef['title'] = title;
				// 	var link = tabs[title];
				// 	for (var param in $routeParams) {
				// 		link = link.replace(new RegExp(':'+param, 'g'), $routeParams[param]);
				// 	}
				// 	tabDef['link'] = link;
				// 	$scope.tabDefs.push(tabDef);
				// }

				$scope.tabDefs = tabService.getTabs({user: $scope.getUser(), tabGroup: nextLoc.$$route.tabs});
	        }
	        if (nextLoc.$$route.header) {
	        	$scope.setHeaderTitle(nextLoc.$$route.header);
	        }
    	}
    });

    $rootScope.$on('$routeChangeSuccess', function(event) {
    	$scope.setHeaderTitle('');
    });
}]);

// TODO: should be in a different module
app.service('professionalSearchCriteria', function () {
	this.criteria = {};

	this.setCriteria = function (criteria) {
		this.criteria = criteria;
		localStorage.setItem('searchcriteria',JSON.stringify(criteria));
	};

	this.getCriteria = function () {
		this.criteria=JSON.parse(localStorage.getItem('searchcriteria'));
		return this.criteria;
	}
});

app.controller('landingPageController', ['$scope', '$http', 'professionalSearchCriteria', '$location', function ($scope, $http, searchCriteria, $location) {
	$scope.showCategories = false;
	$scope.showSkills = true;
	$scope.skillCategories = [];
	$scope.skills = [];
	$scope.selectedSkills = [];

	$scope.submitSearch = function() {
		//alert("Data");
				
		searchCriteria.setCriteria({
			skills: JSON.stringify($scope.selectedSkills),
			location_name: $scope.locationname,
			location_latitude: $scope.location_latitude,
			location_longitude: $scope.location_longitude
		});

		$location.path('/search/professionals');
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

    $scope.getLocation = function(val) {
      return $http.get('http://maps.googleapis.com/maps/api/geocode/json', {
        params: {
          address: val,
          sensor: false
        }
      }).then(function(res) {
        var addresses = [];
        angular.forEach(res.data.results, function(item) {
        	//console.log(item);
          addresses.push(item);
        });
        return addresses;
      });
    };

	$scope.getSkillCategories();
}])

app.config(['$provide', '$routeProvider', '$httpProvider', function ($provide, $routeProvider, $httpProvider) {
	$httpProvider.interceptors.push('apiRequest');
    $httpProvider.defaults.useXDomain = true;
    delete $httpProvider.defaults.headers.common['X-Requested-With'];

    $routeProvider
	.when('/', {
		templateUrl: 'page/home.home',
        requiresLogin: false
	})
	.when('', {
		templateUrl: 'page/home.index',
        requiresLogin: false
	})
	.when('/login', {
		templateUrl: 'page/session.login',
        requiresLogin: false
	})
    .when('/register', {
        templateUrl: 'page/session.register',
        requiresLogin: false
        })
	.when('/:templateFile*', {
		templateUrl: function (param) {
			return param.templateFile
		}
	})
	.otherwise( {
		redirectTo: '/'
	})
}]);
