@extends('layouts.partial')

@section('content')
<div class="container" ng-controller="CandidateProfileController">
          <div class="row">
            <div class="col-sm-12">
              <ul class="page-action-buttons pull-right">
                <li><a ng-href="#/candidate/{{candidate_id}}/edit" class="btn btn-default"><i class="fa fa-pencil"></i> Edit</a></li>
              </ul>
            </div>
          </div>
  <div class="page-content mt30">
    <div class="responsive-tabs dashboard-tabs">
          <div class="row">
            <div class="col-md-3">
              <div class="candidate-profile-picture">
                <img ng-src="{{profile_pic_filename || 'frontend/img/content/candidate-profile-upload.jpg'}}" alt="">
                

                <a href="#">{{first_name + ' ' + last_name}}</a>
              </div> <!-- end .agent-profile-picture -->

              <div class="candidate-general-info">
                <div class="title">
                  <h6>General Information</h6>
                </div> <!-- end .end .title -->

                <ul class="list-unstyled">
                  <li><strong>Birthday:</strong>{{date_of_birth}}</li>
                  <li><strong>Address:</strong>{{residency}}</li>
                  <li><strong>Phone:</strong>{{mobile}}</li>
                  <li><strong>Email:</strong>{{email}}</li>
                  <li class="mt20"><strong>Experience:</strong>{{years_of_experience}}</li>
                </ul>

                <!-- social link -->

                <div class="title mt10">
                  <h6>Socialize</h6>
                </div> <!-- end .title -->

                <ul class="list-inline social-link mt10">
                  <li class="envelop-color"><a href="#"><i class="fa fa-envelope"></i></a></li>
                  <li class="facebook-color"><a href="{{social_facebook}}"><i class="fa fa-facebook"></i></a></li>
                  <li class="google-color"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  <li class="twitt-color"><a href="{{social_twitter}}"><i class="fa fa-twitter"></i></a></li>
                  <li class="linked-color"><a href="{{social_linked_in}}"><i class="fa fa-linkedin"></i></a></li>
                  <li class="pinterest-color"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                </ul>


              </div> <!-- end .candidate-general-info -->
            </div> <!-- end .3col grid layout -->

            <div class="col-md-9">
              <div class="candidate-description">

                <div class="language-print text-right">
                  <ul class="list-inline">
                    <li ng-class="{active: getLanguage() == ''}"><a href="#" ng-click="$event.preventDefault(); setLanguage('en')">En</a></li>
                    <li ng-class="{active: getLanguage() == 'de'}"><a href="#" ng-click="$event.preventDefault(); setLanguage('de')">De</a></li>
                    <li ng-class="{active: getLanguage() == 'fr'}"><a href="#" ng-click="$event.preventDefault(); setLanguage('fr')">Fr</a></li>
                    <li ng-class="{active: getLanguage() == 'it'}" class="border-right"><a href="#" ng-click="$event.preventDefault(); setLanguage('it')">It</a></li>
                    <li class="print"><a href="#"><i class="fa fa-print"></i></a></li>
                    <li class="star-rating"><a href="#"><i class="fa fa-star"></i></a></li>
                  </ul>
                </div> <!-- end .language-print -->

                <div class="candidate-details">
                  <div class="candidate-title">
                    <h5>Hello, my name is {{first_name + ' ' + last_name}}</h5>
                  </div>
                  <div ng-bind-html="getLocalized('about')"></div>

                  <div class="candidate-skills">

                    <div class="candidate-title mt40" ng-repeat="cat in skillCategories">
                      <h5>{{getLocalized('cat.name')}}</h5>
                      <div class="row mb20" ng-repeat="skill in cat.skills">
                        <div class="col-md-4 toggle">
                          <a href="#" toggle-skill>{{getLocalized('skill.name')}}</a>
                        </div> <!-- end .grid layout -->

                        <div class="col-md-8">
                          <div class="progress-bar clearfix">
                            <div class="progress-bar-inner"><span ng-style="{width:skill.pivot.level+'%'}"></span></div>
                          </div>

                          <div class="toggle-content">
                              <p>{{skill.pivot.description}}</p>

                          </div> <!-- end .toggle-content -->
                        </div> <!-- end .grid layout -->

                      </div> <!-- end .row -->
                    </div>

                    <div class="additional-skills" ng-if="inline_skills.length">
                      <div class="candidate-title mt40">
                        <h5>Additional Skills</h5>
                      </div>

                      <ul class="list-inline">
                        <li ng-repeat="skill in inline_skills track by $index"><a>{{skill}}</a></li>
                      </ul>
                    </div> <!-- end .addintional-skills -->

                  </div> <!-- end .candidate-skills -->

                </div> <!-- end .candidate-details -->

              </div> <!-- end .candidate-description -->
            </div> <!-- end .9col grid layout -->

          </div> <!-- end .row -->
        </div> <!-- end .tabe pane -->

    </div> <!-- end .responsive-tabs.dashboard-tabs -->

  </div> <!-- end .page-content -->
</div> <!-- end .container -->
@stop