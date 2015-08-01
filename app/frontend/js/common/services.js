angular.module('motibu.common_services', [
    'ui.bootstrap-slider',
    'cgNotify',
	'angularMoment'
])
.factory('formDataObject', function() {
	return function(data) {
		var fd = new FormData();
		angular.forEach(data, function(value, key) {
			//console.log(key, value);
			fd.append(key, value);
		});
		return fd;
	};
})
.factory('apiRequest',  ['$window', '$q', 'formDataObject', function ($window, $q, formDataObject) {
	return {
		request: function (config) {
			if (config.apiRequest) {
				if (config.requestType == 'form-urlencoded') {
					config.transformRequest = function(obj) {
						var str = [];
						for(var p in obj)
						str.push(encodeURIComponent(p) + "=" + encodeURIComponent(obj[p]));
						return str.join("&");
					};
					
					config.headers['Content-Type']=  'application/x-www-form-urlencoded';
				} else if (config.requestType == 'multipart') {
					config.transformRequest = formDataObject;
					config.headers['Content-Type']=  undefined;
				}

				config.headers['Authorization'] = 'Bearer '+config.accessToken;
				config.url = $window.api_url+config.url;
			}

			return config;
		}
	}
}])
.service('tabService', ['$routeParams', '$location', function ($routeParams, $location) {
	this.getTabs = function (arguments) {

		if (arguments.user.is_agency_admin) {
			if (arguments.tabGroup == 'clientTabs') {
				return [
					{title: "Client Profile", link: "/client/"+$routeParams.id+"/profile"},
					{title: "Client Team", link: "/client/"+$routeParams.id+"/add_staff"},
					{title: "Applicants", link: "/client/"+$routeParams.id+"/candidates"}
				];
			} else if (arguments.tabGroup == 'agencyTabs') {
				return [
					{title: "Profile", link: "/agency/"+$routeParams.id+"/profile"},
					// {title: "Agents", link: "/agency/"+$routeParams.id+"/agents"},
					// {title: "Clients", link: "/agency/"+$routeParams.id+"/clients"},
					// {title: "Job & Applicants", link: "/agency/"+$routeParams.id+"/jobs"},
					// {title: "Create Job", link: "/agency/"+$routeParams.id+"/create_job"}
				];
			} else if (arguments.tabGroup == 'professionalTabs') {
				return [
					{title: "Candidate Profile", link: "/candidate/"+$routeParams.id+"/profile"}
				];
			}
		} else if (arguments.user.is_professional) {
			if (arguments.tabGroup == 'professionalTabs') {
				return [
					{title: "Profile", link: "/candidate/"+$routeParams.id+"/profile"},
					{title: "Edit", link: "/candidate/"+$routeParams.id+"/edit"},
					{title: "Jobs", link: "/candidate/"+$routeParams.id+"/jobs"}
				];
			}
		}
	}

	return this;
}])