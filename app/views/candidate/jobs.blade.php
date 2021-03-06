@extends('layouts.partial')

@section('content')
<div class="container" ng-controller="CandidateViewJobsController">
  <div class="page-content">
    <div class="row">

      <div class="col-md-9">
      	<h3 class="tab-title">Available Jobs</h3>
        <div class="candidate-description client-description" ng-repeat="job in jobs">

          <div class="language-print client-des clearfix">
            <div class="pull-left">
              <a ng-href="#/job/view/{{job.id}}"><h5>{{job.title}}</h5></a>
              <a href="#">Phoenix, AZ</a>
            </div>
            <ul class="list-inline pull-right">
              <li class="star-rating"><a href="#"><i class="fa fa-star"></i></a></li>
            </ul>
          </div> <!-- end .language-print -->

          <div class="candidate-details">
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
                    <div class="progress-bar-inner"><span ng-style="{width:skill.level+'%'}"></span></div>
                  </div>

                  <div class="toggle-content">
                      <p>{{skill.description}}</p>

                  </div> <!-- end .toggle-content -->
                </div> <!-- end .grid layout -->

              </div> <!-- end .row -->


              <div class="additional-skills" ng-if="0">
                <div class="candidate-title mt40">
                  <h5>Additional Requirements</h5>
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

            <div class="apply-share clearfix">
              <button class="pull-left btn btn-default" ng-click="apply(job)">Apply for this Job</button>
            </div>
            <!-- end .apply-share -->


            <div class="toggle-details text-right active">
              <a class="btn btn-toggle" href="#">Info</a>

            </div>
            <!-- end .toggle-details -->
          </div> <!-- end .candidate-details -->

        </div> <!-- end .candidate-description -->

	    <pagination
	      total-items="paginator.totalItems"
	      ng-model="paginator.currentPage"
	      max-size="paginator.maxSize"
	      class="pagination-sm"
	      boundary-links="true"
	      rotate="false"
	      num-pages="paginator.numPages"
	      ng-change="pageChanged()"
	    ></pagination>

      </div> <!-- end .9col grid layout -->

    </div>

  </div> <!-- end .page-content -->
</div> <!-- end container -->
@stop