angular.module('motibu.candidate.candidate_profile_controller', [
	'motibu.common_services'
])
.controller('CandidateProfileController', ['$scope', '$http', '$routeParams', function ($scope, $http, $routeParams) {
	var getCategorizedSkills = function (skills) {
		var categories = {};

		for (var i = skills.length - 1; i >= 0; i--) {
			var skill = skills[i];
			if (!categories[skill.category.id]) {
				categories[skill.category.id] = skill.category;
				categories[skill.category.id].skills = [];
			}
			categories[skill.category.id].skills.push(skill);
		};

		return categories;
	}
	//alert($scope.access_token);
	if ($scope.getUser().candidate_profile && $scope.getUser().candidate_profile.id == $routeParams.id) {
		$scope.setHeaderTitle($scope.getUser().first_name+' '+$scope.getUser().last_name);
		
		$scope.first_name = $scope.getUser().first_name;
		$scope.last_name = $scope.getUser().last_name;
		$scope.candidate_id = $scope.getUser().candidate_profile.id;
		$scope.about = $scope.getUser().candidate_profile.about;
		$scope.about_de = $scope.getUser().candidate_profile.about_de;
		$scope.about_fr = $scope.getUser().candidate_profile.about_fr;
		$scope.about_it = $scope.getUser().candidate_profile.about_it;
		$scope.skills = $scope.getUser().candidate_profile.skills;
		$scope.inline_skills = ($scope.getUser().candidate_profile.inline_skills)? $scope.getUser().candidate_profile.inline_skills.split(','):'';

		$scope.skillCategories = getCategorizedSkills($scope.skills);

			$scope.profile_pic_filename=$scope.getUser().candidate_profile.profile_pic_filename;
			$scope.date_of_birth=$scope.getUser().candidate_profile.date_of_birth;
			$scope.residency=$scope.getUser().candidate_profile.residency;
			$scope.mobile=$scope.getUser().candidate_profile.mobile;
			$scope.email=$scope.getUser().email;
			$scope.years_of_experience=$scope.getUser().candidate_profile.years_of_experience;
			$scope.social_facebook=$scope.getUser().candidate_profile.social_facebook;
			$scope.social_twitter=$scope.getUser().candidate_profile.social_twitter;
			$scope.social_linked_in=$scope.getUser().candidate_profile.social_linked_in;

	} else {
		$http( {
			method: 'GET',
			url: 'candidates/'+$routeParams.id+'/show',
			apiRequest: true,
			accessToken: $scope.getAccessToken()
		}).success( function (response) {
			$scope.first_name = response.user.first_name;
			$scope.last_name = response.user.last_name;
			$scope.candidate_id = response.id;
			$scope.about = response.about;
			$scope.about_de = response.about_de;
			$scope.about_fr = response.about_fr;
			$scope.about_it = response.about_it;
			$scope.skills = response.skills;
			$scope.inline_skills = (response.inline_skills)? response.inline_skills.split(','):'';
			
			$scope.skillCategories = getCategorizedSkills($scope.skills);

			$scope.profile_pic_filename=response.profile_pic_filename;
			$scope.date_of_birth=response.date_of_birth;
			$scope.residency=response.residency;
			$scope.mobile=response.mobile;
			$scope.email=response.user.email;
			$scope.years_of_experience=response.years_of_experience;
			$scope.social_facebook=response.social_facebook;
			$scope.social_twitter=response.social_twitter;
			$scope.social_linked_in=response.social_linked_in;
		});
	}
}])