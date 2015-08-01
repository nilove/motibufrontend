@extends('layouts.partial')

@section('content')
<div class="container" ng-controller="JobPreviewController">
  <div class="page-content mt30">

    <div class="row">
      <div class="col-md-3">
        <div class="candidate-profile-picture">
          <img ng-src="{{job.client.data.logo_url}}" alt="">

          <a href="#" class="job-name">{{job.client.data.name}}</a>
        </div> <!-- end .agent-profile-picture -->

        <div class="job-general-info">
          <div class="title">
            <h6>Job Details</h6>
          </div> <!-- end .end .title -->

          <ul class="list-unstyled job-regi-preview">
            <li><strong>Job Title:</strong>{{job.title}}</li>
            <li><strong>Client Name:</strong>{{job.client.data.name}}</li>
            <li><strong>Contact Person:</strong>{{job.client.data.contact_name}}</li>
            <li><strong>HR Manager:</strong>{{job.hr.data.name}}</li>
            <!-- <li><strong>Assigned Agent:</strong>Franisco Da Silva</li> -->
            
            <li><strong>Mandate Start:</strong>{{job.mandate_start | date:'yyyy-MM-dd'}} <span class="bold">to</span>{{job.mandate_end | date:'yyyy-MM-dd'}}</li>
            <li><strong>Published:</strong>{{job.date_of_entry | date:'yyyy-MM-dd HH:mm:ss Z'}}</li>
            
            
            <!--<li><strong>Age Range:</strong>25 - 35</li>
            <li><strong>Gender:</strong>Male</li>
            <li><strong>Natioanity:</strong>Swiss</li>
            <li><strong>Work Premit:</strong>-</li>-->
            <li><strong>Years fo Exp:</strong>{{job.years_of_experience}}</li>
            <!--<li><strong>Min Degree:</strong>MBA</li>-->
            <li><strong>Location:</strong>{{job.location}}</li>
            <!--<li><strong>Date of Entry:</strong>-</li>
            <li><strong>Contract Type:</strong>Unilateral</li>
            <li><strong>Contract Rhythm:</strong>-</li>
            <li><strong>Wroking Hours:</strong>10.00 AM <span class="bold">to 5.00 AM</span></li>-->
            <li><strong>Salary Range:</strong>{{job.salary_range_from}}-{{job.salary_range_to}}</li>
            <li><strong>Salary Composition:</strong>-</li>
            <li><strong>Company Benefits:</strong><a href="#" class="ml5"><i class="fa mr5 fa-file-word-o"></i>Download</a></li>
          </ul>

          <!-- social link -->



        </div> <!-- end .candidate-general-info -->
      </div> <!-- end .3col grid layout -->

      <div class="col-md-9">
        <div class="candidate-description">

          <div class="language-print text-right">
            <ul class="list-inline">
              <li class="active"><a href="#">En</a></li>
              <li><a href="#">Fr</a></li>
              <li><a href="#">It</a></li>
              <li class="border-right"><a href="#">De</a></li>
              <li class="print"><a href="#"><i class="fa fa-print"></i></a></li>
              <li class="star-rating"><a href="#"><i class="fa fa-star"></i></a></li>
            </ul>
          </div> <!-- end .language-print -->

          <div class="candidate-details">
            <div class="candidate-title">
              <h5>Job Description</h5>
            </div>
            
            <!--<div class="videoWrapper">
                <iframe width="560" height="349" src="http://www.youtube.com/embed/kjXmDRjnJPo?rel=0&hd=1" frameborder="0" allowfullscreen></iframe>
            </div>-->

            <div ng-bind-html="job.about"></div>


            <div class="candidate-title mt40">
              <h5>Required Skills</h5>
            </div>

            <div class="candidate-skills">
              <div class="row mb20" ng-repeat="skill in job.skills.data">
                <div class="col-md-4 toggle">
                  <a href="#" toggle-skill>{{skill.name}}</a>
                </div> <!-- end .grid layout -->

                <div class="col-md-8">
                  <div class="progress-bar clearfix">
                    <div class="progress-bar-inner"><span ng-style="{width: skill.level+'%'}"></span></div>
                  </div>

                  <div class="toggle-content">
                      <p>{{skill.description}}</p>

                  </div> <!-- end .toggle-content -->
                </div> <!-- end .grid layout -->

              </div> <!-- end .row -->

              <div class="additional-skills">
                <div class="candidate-title mt40">
                  <h5>Additional Skills</h5>
                </div>

                <ul class="list-inline">
                  <li><a href="#">Work Permit</a></li>
                  <li><a href="#">5 Years Experience</a></li>
                  <li><a href="#">MBA</a></li>
                  <li><a href="#">Magento Certifies</a></li>
                  <li><a href="#">Parfect Written &amp; Spoken English</a></li>
                </ul>
              </div> <!-- end .addintional-skills -->

            </div> <!-- end .candidate-skills -->

          </div> <!-- end .candidate-details -->



        </div> <!-- end .candidate-description -->

        <ul class="list-inline job-preview-social-link mt20">
          <li class="share">Share:</li>
          <li class="facebook-color"><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li class="twitt-color"><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li class="pinterest-color"><a href="#"><i class="fa fa-google-plus"></i></a></li>
        </ul>

      </div> <!-- end .9col grid layout -->

    </div> <!-- end .row -->

  </div> <!-- end .page-content -->
</div> <!-- end .container -->
@stop