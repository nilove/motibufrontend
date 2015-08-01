@extends('layouts.partial')

@section('content')
<div class="container" ng-controller="CandidateRegistrationController">
  <div class="page-content">
    <div class="responsive-tabs dashboard-tabs">

      <div class="tab-content">
        <div class="tab-pane active" id="candidate-profile">
          <div class="row">
            <div class="col-md-3">
              <div class="candidate-profile-picture">

                <div class="upload-img-field">
                  <img ng-src="{{profile_pic_url}}"/>
                </div>

                <button ng-disabled="!editingProfile" class="btn btn-default">Upload a Picture
                  <input name="logo_file" data-file-input="profile_pic_filename" type="file">
                </button>
              </div> <!-- end .agent-profile-picture -->

              <div class="candidate-general-info">
                <div class="title clearfix">
                  <h6>General Information</h6>
                  <button class="pull-right" ng-if="!editingProfile" ng-click="beginEdit()"><i class="fa fa-edit"></i> Edit</button>
                  <button class="pull-right" ng-if="editingProfile" ng-click="submitEdit()"><i class="fa fa-check"></i> Done</button>
                </div> <!-- end .end .title -->

                 
                 
                  <div style="width:240px;height:240px;margin-bottom:20px;" class="map_canvas"></div>
                 
                <ul class="list-unstyled candidate-registration">
                  <li><strong>Residence:</strong><input ng-disabled="!editingProfile" geolocation name="residency"  type="text" ng-model="residency" placeholder="[residence]" ></li>
                  <li><strong>Latitude:</strong><input id="location_latitude" ng-disabled="!editingProfile" name="location_latitude" ng-model="location_latitude" type="text" placeholder="[Location Latitude]"></li>
                  <li><strong>Longitude:</strong><input id="location_longitude" ng-disabled="!editingProfile" name="location_longitude" ng-model="location_longitude" type="text" placeholder="[Location Longitude]"></li>

                
                  <li><strong>Gender:</strong>
                    Male : <input ng-disabled="!editingProfile" name="gender_id" ng-model="gender_id" type="radio" value="male"><br/>
                    Femail: <input ng-disabled="!editingProfile" name="gender_id" ng-model="gender_id" type="radio" value="female">
                  </li>
                  <li><strong>Date of Birth:</strong><input ng-disabled="!editingProfile" name="date_of_birth" ng-model="date_of_birth" type="text" placeholder="[date of birth]"></li>
                  <li><strong>Age:</strong><input ng-disabled="!editingProfile" name="age" ng-model="age" type="text" placeholder="[Age]"></li>
                  <li><strong>Expected <br/>Salary(USD):</strong><input ng-disabled="!editingProfile" name="expected_salary" ng-model="expected_salary" type="number"></li>

                  <li><strong>Tel:</strong><input ng-disabled="!editingProfile" name="telephone" ng-model="telephone" type="telephone" placeholder="[telephone number]"></li>
                  <li><strong>Mob:</strong><input ng-disabled="!editingProfile" name="mobile" ng-model="mobile" type="mobile" placeholder="[mobile number]"></li>
                  <li><strong>Twitter:</strong><input ng-disabled="!editingProfile" name="social_twitter" ng-model="social_twitter" type="text" placeholder="[social network]"></li>
                  <li><strong>Facebook:</strong><input ng-disabled="!editingProfile" name="social_facebook" ng-model="social_facebook" type="text" placeholder="[social network]"></li>
                  <li><strong>LinkedIn:</strong><input ng-disabled="!editingProfile" name="social_linked_in" ng-model="social_linked_in" type="text" placeholder="[social network]"></li>
                  <li><strong>Years of Exp:</strong><input ng-disabled="!editingProfile" name="years_of_experience" ng-model="years_of_experience" type="text" placeholder="[years of exp]"></li>
                  <li><strong>Natioanlity:</strong><input ng-disabled="!editingProfile" name="nationality" ng-model="nationality" type="text" placeholder="[nationality]"></li>
                  <li><strong>Work Permit:</strong><input ng-disabled="!editingProfile" type="checkbox" name="has_work_permit" ng-model="has_work_permit" ng-true-value="'true'" ng-false-value="'false'"></li>
                  <li><strong>Marital Status:</strong><input ng-disabled="!editingProfile" name="is_married" ng-model="is_married" type="checkbox" ng-true-value="'true'" ng-false-value="'false'"></li>
                  <li><strong>Children:</strong><input ng-disabled="!editingProfile" name="num_children" ng-model="num_children" type="text" placeholder="[children]"></li>
                  <li><strong>Driving License:</strong><input ng-disabled="!editingProfile" name="has_drivers_license" ng-model="has_drivers_license" type="checkbox" ng-true-value="'true'" ng-false-value="'false'"></li>
                  <li><strong>Availability:</strong><input ng-disabled="!editingProfile" name="is_available" ng-model="is_available" type="checkbox" ng-true-value="'true'" ng-false-value="'false'"></li>
                  <li><strong>Employed?:</strong><input ng-disabled="!editingProfile" name="is_employed" ng-model="is_employed" type="checkbox" ng-true-value="'true'" ng-false-value="'false'"></li>

                </ul>

                <!-- social link -->
              </div> <!-- end .candidate-general-info -->
            </div> <!-- end .3col grid layout -->

            <div class="col-md-9">
              <div class="candidate-reg-form">
				  <form>
                    <div class="form-banner-button">
                      <div class="preview-import pull-left">
                        <a class="btn btn-green" href="/#/candidate/{{getUser().candidate_profile.id}}/profile">Preview</a>
                        <button class="btn btn-default ml3"><i class="fa fa-linkedin-square"></i>Import Data from LinkedIn
                          <input type="file">
                        </button>
                      </div> <!-- end .preview-import -->

                      <div class="language pull-right">
                        <div class="language-select pull-left">
                          <div class="">
                            <select>
                              <option value="#">EN</option>
                              <option value="#">FR</option>
                              <option value="#">IT</option>
                              <option value="#">DE</option>
                            </select>
                          </div>
                        </div> <!-- end .language-select -->

                        <a class="btn btn-default pull-left ml5" href="#">Add Language</a>

                      </div> <!-- end .language -->

                    </div> <!-- end .form-banner-button -->
                    <div ng-if="is_external_vcard == 1" class="candidate-single-content mt20"> 
                      <div class="row">
                        <div class="col-md-4">
                            <label for="about-candidate">Moticard Token</label>
                        </div>
                        <div class="col-md-8">
                          <div class="candidate-des-editore">
                            <input disabled type="text" value="{{moticardtoken.token}}"/>
                          </div> <!-- end .condidate-description -->
                        </div> <!-- end .8th grid layout -->
                      </div>
                    </div>
                    <div class="candidate-single-content mt20">
                      <div class="row">
                        <div class="col-md-4">
                          <label for="about-candidate"><span>*</span>About the Candidate</label>
                        </div> <!-- end .4th grid-layout -->

                        <div class="col-md-8">
                          <div class="candidate-des-editore">
                          	<textarea ng-model="about"></textarea>
                          </div> <!-- end .condidate-description -->
                        </div> <!-- end .8th grid layout -->

                      </div> <!-- end nasted .row -->
                    </div> <!-- end .candidate-single-content -->

                    <div class="candidate-single-content">
                      <div class="row">
                        <div class="col-md-4">
                          <label for="skills"><span>*</span>Skills</label>
                        </div> <!-- end .4th grid-layout -->

                        <div class="col-md-8">
<div class="skills-required">



<div ng-repeat="skill in addedSkills track by $index">
              <!-- <h6 class="text-uppercase" ng-if="$index==0">{{skill.skill_category}}</h6> -->

              <div class="accordion-content">
                <div class="clearfix">
                  <div class="toggle pull-left">
                    <a href="#" toggle-skill>{{skill.skill_name}}</a>
                  </div> <!-- end .toggle -->

<div>
                  <div class="progress-bar pull-left">
                    <div class="progress-bar-inner"><span ng-style="{width:skill.level+'%'}"></span></div>
                  </div>

                <div class="toggle-content">
                  <p>{{skill.description}}</p>

                </div> <!-- end .toggle-content -->
</div>

                  <div class="skills-edit-button skill-delete-btn pull-right clearfix">
                    <!-- <a href="#" class="pull-left"><i class="fa fa-edit"></i></a> -->
                    <button class="pull-left" ng-click="removeAddedSkill($index)"><i class="fa fa-trash"></i></button>
                  </div> <!-- end .skills-edit-button -->
                </div> <!-- end .clearfix -->

              </div> <!-- end .accordion-content -->
</div>


 <div class="search-skill clearfix" ng-show="addingSkill">
  

                <div class="search-skill-select">
  <ui-select ng-model="selectedSkillCategory.selected"
             search-enabled="true"
             on-select="getSkills($item)"
             reset-search-input="false"
             style="width: 100%;">
    <ui-select-match placeholder="Enter category name...">{{$select.selected.name}}</ui-select-match>
    <ui-select-choices repeat="cat in skillCategories | filter: $select.search">
      <div ng-bind-html="cat.name | highlight: $select.search"></div>
    </ui-select-choices>
  </ui-select>


                  <div class="accordion-content">

                    <div class="accordion">
                    </div> <!-- end .accordion -->

                  </div> <!-- end .accordion-content -->
                </div> <!-- end .search-skill-select -->

                <ui-select ng-model="selectedSkill.selected"
             search-enabled="true"
             reset-search-input="false"
             style="width: 50%; margin-top: 10px; float: left;">
    <ui-select-match placeholder="Enter skill name...">{{$select.selected.name}}</ui-select-match>
    <ui-select-choices repeat="skill in skills | filter: $select.search">
      <div ng-bind-html="skill.name | highlight: $select.search"></div>
    </ui-select-choices>
  </ui-select>
                
              </div> <!-- end .search-skill -->

              <div class="skill-name clearfix"  ng-show="addingSkill">
                <p class="pull-left">{{selectedSkillCategory.selected.name}} : {{selectedSkill.selected.name}}</p>

                <div class="skills-edit-button pull-right">
                  <button class="pull-left"><i class="fa fa-edit"></i></button>
                  <button class="pull-left"><i class="fa fa-trash"></i></button>
                </div>
              </div> <!-- end .skill-name -->

              <div class="description-content"  ng-show="addingSkill">
                <textarea name="description" id="" placeholder="Description" ng-model="selectedSkillDescription"></textarea>

                <div class="skill-edit-content">
                  <div class="skill-progressbar">

                  <p>
                    <span class="mini-amount">0%</span>
                    <slider ng-model="selectedSkillLevel" min="0" step="1" max="100" value="0"></slider>
                    <input type="text" id="amount-first" ng-model="selectedSkillLevel">

                  </p>

                  <div id="slider-skill-job"></div>
                  </div> <!-- end .skill-progressbar -->
                </div> <!-- end .skill-edit-content -->

                <div class="save-button text-right">
                  <button ng-click="pushSkill()" class="btn btn-default">Save</button>
                </div>
              </div> <!-- end .description-content -->

                          <div class="add-skill-button">
                            <button class="btn btn-default" ng-click="showSkillForm()">Add a Skill</button>
                          </div>
</div>
                        </div> <!-- end .8th grid layout -->
                      </div> <!-- end nasted .row -->
                    </div> <!-- end .candidate-single-content -->

                    <div class="candidate-single-content">
                      <div class="row">
                        <div class="col-md-4">
                          <label for="skills"><span>*</span>Additional Skills</label>
                        </div> <!-- end .4th grid-layout -->

                        <div class="col-md-8">
                          <div class="add-skills-field">
                            <input type="text" placeholder="Add your skills separated by comma" ng-model="inline_skills">
                          </div>
                        </div> <!-- end .8th grid layout -->
                      </div> <!-- end .nasted .row -->
                    </div> <!-- end .candidate-single-content -->

                    <div class="save-cancel-button">
                      <button class="btn btn-default" ng-click="submitSkills()">Save</button>
                      <button class="btn btn-black">Cancel</button>
                    </div> <!-- end .save-cancel-button -->
                </form>
              </div> <!-- end .candidate-reg-form -->
            </div> <!-- end .9col grid layout -->

          </div> <!-- end .row -->
        </div> <!-- end .tabe pane -->

      </div> <!-- end .tab-content -->
    </div> <!-- end .responsive-tabs.dashboard-tabs -->

  </div> <!-- end .page-content -->
</div> <!-- end .container -->
@stop