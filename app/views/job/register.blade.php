@extends('layouts.partial')

@section('content')
<div class="container" ng-controller="JobRegistrationController">
  <div class="page-content">

    <form class="default-form">
      <div class="form-banner-button  mt30 mb20">

        <div class="css-table">
            <div class="registration-detail css-table-cell">
              <div class="pull-left">
                <p>Job Information</p>
              </div>

              <div class="language pl30 pull-right">
                <div class="language-select pull-left">
                  <select>
                    <option value="#">EN</option>
                    <option value="#">FR</option>
                    <option value="#">IT</option>
                    <option value="#">DE</option>
                  </select>
                </div> <!-- end .language-select -->

                <a class="btn btn-default pull-left ml5" href="#">Add Language</a>
              </div> <!-- end .language -->

              <div class="preview-import pull-right">
                <a class="btn btn-green" href="#">Preview</a>
                <button class="btn btn-default ml3" href="#">
                  <i class="fa fa-linkedin-square"></i>Import Data from LinkedIn
                  <input type="file">
                </button>
              </div> <!-- end .preview-import -->

            </div> <!-- job-details -->

            <div class="checkbox-content css-table-cell">
              <p>Private</p>
            </div>
        </div> <!-- end .css-table -->


      </div> <!-- end .form-banner-button -->

      <!-- start main form content -->

      <div class="job-regi-single">
        <div class="css-table">

          <div class="css-table-cell">
            <label for="company-name"><span>*</span>Client</label>
          </div>

          <div class="registration-detail css-table-cell">
  <ui-select ng-model="selectedClient.selected"
             search-enabled="true"
             reset-search-input="false"
             on-select="getHRs($item)"
             style="width: 100%;">
    <ui-select-match placeholder="Enter client name...">{{$select.selected.name}}</ui-select-match>
    <ui-select-choices repeat="client in clients | filter: $select.search">
      <div ng-bind-html="client.name | highlight: $select.search"></div>
    </ui-select-choices>
  </ui-select>
          </div> <!-- end .registration-detail -->

          <div class="checkbox-content css-table-cell">
          </div> <!-- end .checkbox-content -->

        </div> <!-- end .css-table -->
      </div> <!-- end .job-regi-single -->

      <div class="job-regi-single">
        <div class="css-table">

          <div class="css-table-cell">
            <label for="company-name"><span>*</span>HR Manager</label>
          </div>

          <div class="registration-detail css-table-cell">
  <ui-select ng-model="selectedHR.selected"
             search-enabled="true"
             reset-search-input="false"
             style="width: 100%;">
    <ui-select-match placeholder="Enter HR name...">{{$select.selected.name}}</ui-select-match>
    <ui-select-choices repeat="HR in HRs | filter: $select.search">
      <div ng-bind-html="HR.name | highlight: $select.search"></div>
    </ui-select-choices>
  </ui-select>
          </div> <!-- end .registration-detail -->

          <div class="checkbox-content css-table-cell">
            <input type="checkbox" checked>
          </div> <!-- end .checkbox-content -->

        </div> <!-- end .css-table -->
      </div> <!-- end .job-regi-single -->

      <div class="job-regi-single">
        <div class="css-table">

          <div class="css-table-cell">
            <label for="company-name"><span>*</span>Assigned Agent</label>
          </div>

          <div class="registration-detail css-table-cell">
  <ui-select ng-model="selectedAgent.selected"
             search-enabled="true"
             reset-search-input="false"
             style="width: 100%;">
    <ui-select-match placeholder="Enter agent name...">{{$select.selected.name}}</ui-select-match>
    <ui-select-choices repeat="agent in agents | filter: $select.search">
      <div ng-bind-html="agent.name | highlight: $select.search"></div>
    </ui-select-choices>
  </ui-select>
          </div> <!-- end .registration-detail -->

          <div class="checkbox-content css-table-cell">
            <input type="checkbox" checked>
          </div> <!-- end .checkbox-content -->

        </div> <!-- end .css-table -->
      </div> <!-- end .job-regi-single -->


      <div class="job-regi-single">
        <div class="css-table">

          <div class="css-table-cell">
            <label for="company-name"><span>*</span>Mandate Start-End</label>
          </div>

          <div class="registration-detail css-table-cell">

            <div class="pull-left calender-field">
<!--               <input type="text" id="datepicker-start" ng-model="newJob.mandate_start">
              <i class="fa fa-calendar"></i>
 -->
               <p class="input-group">
                <input type="text"
                  class="form-control"
                  datepicker-popup="{{format}}"
                  ng-model="newJob.mandate_start"
                  is-open="datepickers.mandate_start"
                  min-date="minDate"
                  max-date="'2015-06-22'"
                  datepicker-options="dateOptions"
                  date-disabled="disabled(date, mode)"
                  ng-required="true"
                  close-text="Close"
                />
                <span class="input-group-btn">
                  <button type="button" class="btn btn-default" ng-click="open($event,'mandate_start')"><i class="glyphicon glyphicon-calendar"></i></button>
                </span>
              </p>
            </div>

            <div class="pull-left arrow">
              -
            </div>

            <div class="pull-left calender-field">
              <!--<input type="text" id="datepicker-end" ng-model="newJob.mandate_end">
              <i class="fa fa-calendar"></i> -->
                <p class="input-group">
                    <input type="text"
                           class="form-control"
                           datepicker-popup="{{format}}"
                           ng-model="newJob.mandate_end"
                           is-open="datepickers.mandate_end"
                           min-date="minDate"
                           max-date="'2015-06-22'"
                           datepicker-options="dateOptions"
                           date-disabled="disabled(date, mode)"
                           ng-required="true"
                           close-text="Close"
                            />
                <span class="input-group-btn">
                  <button type="button" class="btn btn-default" ng-click="open($event,'mandate_end')"><i class="glyphicon glyphicon-calendar"></i></button>
                </span>
                </p>
            </div>

          </div> <!-- end .registration-detail -->

          <div class="checkbox-content css-table-cell">
            <input type="checkbox" checked>
          </div> <!-- end .checkbox-content -->

        </div> <!-- end .css-table -->
      </div> <!-- end .job-regi-single -->

      <div class="job-regi-single">
        <div class="css-table">

          <div class="css-table-cell">
            <label for="company-name"><span>*</span>Published</label>
          </div>

          <div class="registration-detail css-table-cell">
            <input type="checkbox" ng-model="newJob.is_published" />
          </div> <!-- end .registration-detail -->

          <div class="checkbox-content css-table-cell">
            <input type="checkbox">
          </div> <!-- end .checkbox-content -->

        </div> <!-- end .css-table -->
      </div> <!-- end .job-regi-single -->

      <div class="job-regi-single">
        <div class="css-table">

          <div class="css-table-cell">
            <label for="company-name"><span>*</span>Client Job ID</label>
          </div>

          <div class="registration-detail css-table-cell">
            <input type="text" ng-model="newJob.client_job_id">
          </div> <!-- end .registration-detail -->

          <div class="checkbox-content css-table-cell">
            <input type="checkbox">
          </div> <!-- end .checkbox-content -->

        </div> <!-- end .css-table -->
      </div> <!-- end .job-regi-single -->

      <div class="job-regi-single">
        <div class="css-table">

          <div class="css-table-cell">
            <label for="company-name"><span>*</span>Agent Job ID</label>
          </div>

          <div class="registration-detail css-table-cell">
            <input type="text" ng-model="newJob.agent_job_id">
          </div> <!-- end .registration-detail -->

          <div class="checkbox-content css-table-cell">
            <input type="checkbox">
          </div> <!-- end .checkbox-content -->

        </div> <!-- end .css-table -->
      </div> <!-- end .job-regi-single -->

      <div class="job-regi-single">
        <div class="css-table">

          <div class="css-table-cell">
            <label for="company-name"><span>*</span>Job Title</label>
          </div>

          <div class="registration-detail css-table-cell">
            <input type="text" ng-model="newJob.title">
          </div> <!-- end .registration-detail -->

          <div class="checkbox-content css-table-cell">
            <input type="checkbox">
          </div> <!-- end .checkbox-content -->

        </div> <!-- end .css-table -->
      </div> <!-- end .job-regi-single -->

      <div class="job-regi-single">
        <div class="css-table">

          <div class="css-table-cell">
            <label for="company-name"><span>*</span>Sector of Activity</label>
          </div>

          <div class="registration-detail css-table-cell">
            <div class="sector-of-activity">
              <select ng-model="newJob.sector_id">
                <option value="1">test sector</option>
                <option value="2">test sector</option>
                <option value="3">test sector</option>
                <option value="4">test sector</option>
              </select>
            </div>
          </div> <!-- end .registration-detail -->

          <div class="checkbox-content css-table-cell">
            <input type="checkbox">
          </div> <!-- end .checkbox-content -->

        </div> <!-- end .css-table -->
      </div> <!-- end .job-regi-single -->

      <div class="job-regi-single">
        <div class="css-table">

          <div class="css-table-cell">
            <label for="company-name"><span>*</span>Age Range</label>
          </div>

          <div class="registration-detail css-table-cell">
            <div class="age-range">
              <select ng-model="newJob.age_range">
                <option value="18-20">18-20</option>
                <option value="20-25">20-25</option>
                <option value="25-30">25-30</option>
                <option value="30-35">30-35</option>
              </select>
            </div>
          </div> <!-- end .registration-detail -->

          <div class="checkbox-content css-table-cell">
            <input type="checkbox">
          </div> <!-- end .checkbox-content -->

        </div> <!-- end .css-table -->
      </div> <!-- end .job-regi-single -->

      <div class="job-regi-single">
        <div class="css-table">

          <div class="css-table-cell">
            <label for="company-name"><span>*</span>Gender</label>
          </div>

          <div class="registration-detail css-table-cell">
            <input id="male" type="radio" name="gender" value="contact form" checked="checked" ng-model="newJob.gender_id">
          </div> <!-- end .registration-detail -->

          <div class="checkbox-content css-table-cell">
            <input type="checkbox">
          </div> <!-- end .checkbox-content -->

        </div> <!-- end .css-table -->
      </div> <!-- end .job-regi-single -->

      <div class="job-regi-single">
        <div class="css-table">

          <div class="css-table-cell">
            <label for="company-name"><span>*</span>Nationality</label>
          </div>

          <div class="registration-detail css-table-cell">
            <div class="nationality">
              <select ng-model="newJob.nationality_id">
                <option value="1">Aemrican</option>
                <option value="2">None</option>
                <option value="3">Free</option>
                <option value="4">Premium</option>
              </select>
            </div>
          </div> <!-- end .registration-detail -->

          <div class="checkbox-content css-table-cell">
            <input type="checkbox">
          </div> <!-- end .checkbox-content -->

        </div> <!-- end .css-table -->
      </div> <!-- end .job-regi-single -->

      <div class="job-regi-single">
        <div class="css-table">

          <div class="css-table-cell">
            <label for="company-name"><span>*</span>Work Permit</label>
          </div>

          <div class="registration-detail css-table-cell">
            <div class="work-permit">
              <select ng-model="newJob.work_permit_id">
                <option value=""></option>
                <option value="1">None</option>
                <option value="2">Free</option>
                <option value="3">Premium</option>
              </select>
            </div>
          </div> <!-- end .registration-detail -->

          <div class="checkbox-content css-table-cell">
            <input type="checkbox">
          </div> <!-- end .checkbox-content -->

        </div> <!-- end .css-table -->
      </div> <!-- end .job-regi-single -->

      <div class="job-regi-single">
        <div class="css-table">

          <div class="css-table-cell">
            <label for="company-name"><span>*</span>Years of Experience</label>
          </div>

          <div class="registration-detail css-table-cell">
            <input type="text" ng-model="newJob.years_of_experience">
          </div> <!-- end .registration-detail -->

          <div class="checkbox-content css-table-cell">
            <input type="checkbox">
          </div> <!-- end .checkbox-content -->

        </div> <!-- end .css-table -->
      </div> <!-- end .job-regi-single -->

      <div class="job-regi-single">
        <div class="css-table">

          <div class="css-table-cell">
            <label for="company-name"><span>*</span>Min Degree</label>
          </div>

          <div class="registration-detail css-table-cell">
            <input type="text" ng-model="newJob.min_degree">
          </div> <!-- end .registration-detail -->

          <div class="checkbox-content css-table-cell">
            <input type="checkbox">
          </div> <!-- end .checkbox-content -->

        </div> <!-- end .css-table -->
      </div> <!-- end .job-regi-single -->

      <div class="job-regi-single">
        <div class="css-table">

          <div class="css-table-cell">
            <label for="company-name"><span>*</span>Residence</label>
          </div>

          <div class="registration-detail css-table-cell">
            <!--<input type="text" ng-model="newJob.residence" geolocation>-->
            <div style="width:240px;height:240px;margin-bottom:20px;" class="map_canvas"></div>
            <ul>
            <li><strong>Residence:</strong><input  geolocation name="location_name"  type="text" ng-model="newJob.location_name" placeholder="[residence]" ></li>
            <li><strong>Latitude:</strong><input id="location_latitude" ng-disabled="!editingProfile" name="location_latitude" ng-model="location_latitude" type="text" placeholder="[Location Latitude]"></li>
            <li><strong>Longitude:</strong><input id="location_longitude" ng-disabled="!editingProfile" name="location_longitude" ng-model="location_longitude" type="text" placeholder="[Location Longitude]"></li>
            </ul>
          </div> <!-- end .registration-detail -->

          <div class="checkbox-content css-table-cell">
            <input type="checkbox">
          </div> <!-- end .checkbox-content -->

        </div> <!-- end .css-table -->
      </div> <!-- end .job-regi-single -->



      <div class="job-regi-single">
        <div class="css-table">

          <div class="css-table-cell">
            <label for="company-name"><span>*</span>Date of Entry</label>
          </div>

          <div class="registration-detail css-table-cell">

            <div class="date-entry">
              <!-- <input type="text" id="datepicker-entry" ng-model="newJob.date_of_entry">
              <i class="fa fa-calendar"></i> -->
                <p class="input-group">
                    <input type="text"
                           class="form-control"
                           datepicker-popup="{{format}}"
                           ng-model="newJob.date_of_entry"
                           is-open="datepickers.date_of_entry"
                           datepicker-options="dateOptions"
                           date-disabled="disabled(date, mode)"
                           ng-required="true"
                           close-text="Close"
                            />
                <span class="input-group-btn">
                  <button type="button" class="btn btn-default" ng-click="open($event,'date_of_entry')"><i class="glyphicon glyphicon-calendar"></i></button>
                </span>
                </p>
            </div>

          </div> <!-- end .registration-detail -->

          <div class="checkbox-content css-table-cell">
            <input type="checkbox">
          </div> <!-- end .checkbox-content -->

        </div> <!-- end .css-table -->
      </div> <!-- end .job-regi-single -->


      <div class="job-regi-single">
        <div class="css-table">

          <div class="css-table-cell">
            <label for="company-name"><span>*</span>Contract Type</label>
          </div>

          <div class="registration-detail css-table-cell">
            <div class="contract-type">
              <select ng-model="newJob.contract_type_id">
                <option value="1">Part Time</option>
                <option value="2">Full Time</option>
                <option value="3">Freelancer</option>
              </select>
            </div>
          </div> <!-- end .registration-detail -->

          <div class="checkbox-content css-table-cell">
            <input type="checkbox">
          </div> <!-- end .checkbox-content -->

        </div> <!-- end .css-table -->
      </div> <!-- end .job-regi-single -->

      <div class="job-regi-single">
        <div class="css-table">

          <div class="css-table-cell">
            <label for="company-name"><span>*</span>Working Hours</label>
          </div>

          <div class="registration-detail css-table-cell">
            <div class="time-from">
              <div class="start-time">
                <select ng-model="newJob.working_hours_from_hour">
                  <option value="9">09</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                </select>
              </div>
              <div class="separator">
                :
              </div>

              <div class="end-time">
                <select ng-model="newJob.working_hours_from_min">
                  <option value="15">15</option>
                  <option value="16">16</option>
                  <option value="17">17</option>
                  <option value="18">18</option>
                </select>
              </div>
            </div> <!-- end .time-from -->

            <div class="pull-left arrow-hour">
              -
            </div>


            <div class="time-to">
              <div class="start-time">
                <select ng-model="newJob.working_hours_to_hour">
                  <option value="9">09</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                </select>
              </div>
              <div class="separator">
                :
              </div>

              <div class="end-time">
                <select ng-model="newJob.working_hours_to_min">
                  <option value="15">15</option>
                  <option value="16">16</option>
                  <option value="17">17</option>
                  <option value="18">18</option>
                </select>
              </div>
            </div> <!-- end .time-to -->

          </div> <!-- end .registration-detail -->

          <div class="checkbox-content css-table-cell">
            <input type="checkbox">
          </div> <!-- end .checkbox-content -->

        </div> <!-- end .css-table -->
      </div> <!-- end .job-regi-single -->

      <div class="job-regi-single">
        <div class="css-table">

          <div class="css-table-cell">
            <label for="company-name"><span>*</span>Salary Range</label>
          </div>

          <div class="registration-detail css-table-cell">
              <input type="text" ng-model="newJob.salary_range_from" placeholder="Amount in USD" style="width:20%;display:inline">

              <span class="separator">
                -
              </span>

              <input type="text" ng-model="newJob.salary_range_to" placeholder="Amount in USD" style="width:20%;display:inline">
          </div> <!-- end .registration-detail -->

          <div class="checkbox-content css-table-cell">
            <input type="checkbox">
          </div> <!-- end .checkbox-content -->

        </div> <!-- end .css-table -->
      </div> <!-- end .job-regi-single -->

      <div class="job-regi-single">
        <div class="css-table">

          <div class="">
            <label for="company-name"><span>*</span>Company benefits</label>
          </div>

          <div class="registration-detail css-table-cell">
            <input type="text" ng-model="newJob.company_benefits">
          </div> <!-- end .registration-detail -->

          <div class="checkbox-content css-table-cell">
            <input type="checkbox">
          </div> <!-- end .checkbox-content -->

        </div> <!-- end .css-table -->
      </div> <!-- end .job-regi-single -->

      <div class="job-regi-single">
        <div class="css-table">

          <div class="">
            <label for="company-name"><span>*</span>About the Job</label>
          </div>

          <div class="registration-detail css-table-cell">
            <div class="textarea-editor">
              <textarea name="area" id="editor" cols="40" ng-model="newJob.about"></textarea>
            </div>
          </div> <!-- end .registration-detail -->

          <div class="checkbox-content css-table-cell">
            <input type="checkbox">
          </div> <!-- end .checkbox-content -->

        </div> <!-- end .css-table -->
      </div> <!-- end .job-regi-single -->

      <div class="job-regi-single">
        <div class="css-table">

          <div class="">
            <label for="company-name"><span>*</span>Skills Required</label>
          </div>

          <div class="registration-detail css-table-cell">
<div class="skills-required">

              <div class="search-skill clearfix" ng-show="addingSkill">
  <ui-select ng-model="selectedSkill.selected"
             search-enabled="true"
             reset-search-input="false"
             style="width: 50%; margin-top: 10px; float: left;">
    <ui-select-match placeholder="Enter skill name...">{{$select.selected.name}}</ui-select-match>
    <ui-select-choices repeat="skill in skills | filter: $select.search">
      <div ng-bind-html="skill.name | highlight: $select.search"></div>
    </ui-select-choices>
  </ui-select>

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
                    <!-- <div ui-slider min="0" max="20" ng-model="selectedSkillLevel"></div> -->
                    <slider ng-model="selectedSkillLevel" min="0" step="1" max="100" value="0"></slider>
                    <input type="text" id="amount-job" ng-model="selectedSkillLevel">

                  </p>

                  <div id="slider-skill-job"></div>
                  </div> <!-- end .skill-progressbar -->
                </div> <!-- end .skill-edit-content -->

                <div class="save-button text-right">
                  <button ng-click="pushSkill()" class="btn btn-default">Save</button>
                </div>
              </div> <!-- end .description-content -->

<div ng-repeat="skill in addedSkills track by $index">
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
                  <div class="skills-edit-button pull-right">
                    <!-- <a href="#" class="pull-left"><i class="fa fa-edit"></i></a> -->
                    <!-- <a href="#" class="pull-left"><i class="fa fa-trash"></i></a> -->
                    <button class="pull-left" ng-click="removeAddedSkill($index)"><i class="fa fa-trash"></i></button>
                  </div> <!-- end .skills-edit-button -->
                </div> <!-- end .clearfix -->

              </div> <!-- end .accordion-content -->
</div>
                          <div class="add-skill-button">
                            <button class="btn btn-default" ng-click="showSkillForm()">Add a Skill</button>
                          </div>
</div>
          </div> <!-- end .registration-detail -->

          <div class="checkbox-content css-table-cell">
            <input type="checkbox">
          </div> <!-- end .checkbox-content -->

        </div> <!-- end .css-table -->
      </div> <!-- end .job-regi-single -->

      <div class="job-regi-single" ng-if="0">
        <div class="css-table">

          <div class="css-table-cell">
            <label for="company-name"><span>*</span>Additional Skills</label>
          </div>

          <div class="registration-detail css-table-cell">
            <input type="text" placeholder="Inpur your skills seperated by comma" ng-model="newJob.inline_skills">
          </div> <!-- end .registration-detail -->

          <div class="checkbox-content css-table-cell">
            <input type="checkbox">
          </div> <!-- end .checkbox-content -->

        </div> <!-- end .css-table -->
      </div> <!-- end .job-regi-single -->

      <div class="save-cancel-button">
        <button ng-click="submit()" class="btn btn-default">Save</button>
        <button class="btn btn-black">Cancel</button>
      </div> <!-- end .save-cancel-button -->

    </form>
  </div> <!-- end .page-content -->
</div> <!-- end .container -->
@stop