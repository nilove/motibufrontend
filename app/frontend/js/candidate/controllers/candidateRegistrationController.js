angular.module('motibu.candidate.candidate_registration_controller', [
	'motibu.common_services'
])
.controller('CandidateRegistrationController', ['$scope', '$http','notify', function ($scope, $http,notify) {
	$scope.editingProfile = false;
	$scope.addingSkill = false;
	$scope.beginEdit = function () {
		$scope.editingProfile = true;
	};

	$scope.showSkillForm = function () {
		$scope.addingSkill = true;
	};

	console.log($scope.getUser().candidate_profile);
	$scope.about = $scope.getUser().candidate_profile.about;
	$scope.about_de = $scope.getUser().candidate_profile.about_de;
	$scope.about_fr = $scope.getUser().candidate_profile.about_fr;
	$scope.about_it = $scope.getUser().candidate_profile.about_it;
	$scope.gender_id = $scope.getUser().candidate_profile.gender_id;
	$scope.date_of_birth = $scope.getUser().candidate_profile.date_of_birth;
	$scope.residency = $scope.getUser().candidate_profile.residency;
	$scope.telephone = $scope.getUser().candidate_profile.telephone;
	$scope.mobile = $scope.getUser().candidate_profile.mobile;
	$scope.social_twitter = $scope.getUser().candidate_profile.social_twitter;
	$scope.social_facebook = $scope.getUser().candidate_profile.social_facebook;
	$scope.social_linked_in = $scope.getUser().candidate_profile.social_linked_in;
	$scope.years_of_experience = $scope.getUser().candidate_profile.years_of_experience;
	$scope.nationality = $scope.getUser().candidate_profile.nationality;
	$scope.has_work_permit = $scope.getUser().candidate_profile.has_work_permit;
	$scope.is_married = $scope.getUser().candidate_profile.is_married;
	$scope.num_children = $scope.getUser().candidate_profile.num_children;
	$scope.has_drivers_license = $scope.getUser().candidate_profile.has_drivers_license;
	$scope.is_available = $scope.getUser().candidate_profile.is_available;
	$scope.is_employed = $scope.getUser().candidate_profile.is_employed;
	$scope.profile_pic_url=$scope.getUser().candidate_profile.profile_pic_filename;
	$scope.location_latitude=$scope.getUser().candidate_profile.location_latitude;
	$scope.location_longitude=$scope.getUser().candidate_profile.location_longitude;
	$scope.inline_skills=$scope.getUser().candidate_profile.inline_skills;
	$scope.age=$scope.getUser().candidate_profile.age;
	$scope.expected_salary=parseInt($scope.getUser().candidate_profile.expected_salary);
	$scope.moticardtoken=$scope.getUser().moticard;
	$scope.is_external_vcard = $scope.getUser().candidate_profile.is_external_vcard;

	$scope.skills = [];
	$scope.skillCategories = [];
	$scope.addedSkills = [];
	angular.forEach($scope.getUser().candidate_profile.skills, function (skill)  {
		$scope.addedSkills.push({
			skill_id: skill.id,
			skill_name: skill.name,
			candidate_id: $scope.getUser().id,
			description: skill.pivot.description,
			level: skill.pivot.level
		});
	});

	$scope.selectedSkillCategory = {};
	$scope.selectedSkill = {};

	$scope.skillEditorModel = {};

	$scope.submitEdit = function () {
		$http( {
			method: 'POST',
			url: 'candidates/'+$scope.getUser().candidate_profile.id+'/update',
			data: {
				about: $scope.about,
				about_de: $scope.about_de,
				about_fr: $scope.about_fr,
				about_it: $scope.about_it,
				gender_id: $scope.gender_id,
				date_of_birth: $scope.date_of_birth,
				residency: $scope.residency,
				telephone: $scope.telephone,
				mobile: $scope.mobile,
				social_twitter: $scope.social_twitter,
				social_facebook: $scope.social_facebook,
				social_linked_in: $scope.social_linked_in,
				years_of_experience: $scope.years_of_experience,
				nationality: $scope.nationality,
				has_work_permit: $scope.has_work_permit,
				is_married: $scope.is_married,
				num_children: $scope.num_children,
				has_drivers_license: $scope.has_drivers_license,
				is_available: $scope.is_available,
				is_employed: $scope.is_employed,
				profile_pic_filename:$scope.profile_pic_filename,
				location_latitude:$scope.location_latitude,
				location_longitude:$scope.location_longitude,
			    age:$scope.age,
			    expected_salary:$scope.expected_salary
			},
			apiRequest: true,
			requestType: 'multipart',
			accessToken: $scope.getAccessToken()
		}).success( function (response) {
			console.log(response);
			notify(response.message);
			$scope.editingProfile = false;
			var user =  $scope.getUser();
			user.candidate_profile = response.candidate_profile;

			$scope.setUser(user);
			$scope.profile_pic_url=$scope.getUser().candidate_profile.profile_pic_filename;
		});
	};

	$scope.submitSkills = function () {
		$http( {
			method: 'POST',
			url: 'candidates/'+$scope.getUser().candidate_profile.id+'/update',
			data: {
				about: $scope.about,
				about_de: $scope.about_de,
				about_fr: $scope.about_fr,
				about_it: $scope.about_it,
				skills: $scope.addedSkills,
				inline_skills: $scope.inline_skills
			},
			apiRequest: true,
			accessToken: $scope.getAccessToken()
		}).success( function (response) {
			notify(response.message);
			var user =  $scope.getUser();
			user.candidate_profile = response.candidate_profile;
			$scope.setUser(user);
			console.log(response);
		});
		console.log($scope.addedSkills, $scope.skills);
	};

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
		$scope.selectedSkill.selected.name="";
		$scope.selectedSkillCategory.selected.name="";
		$scope.selectedSkillDescription="";
		$scope.selectedSkillLevel=0;
		$scope.addingSkill=false;
	};

	$scope.removeAddedSkill = function (index) {
		$scope.addedSkills.splice(index, 1);
	};

	$scope.getSkillCategories();

}])