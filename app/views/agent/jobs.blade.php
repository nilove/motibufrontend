@extends('layouts.partial')

@section('content')
<div class="container" ng-controller="AgentViewJobsController">
  <div class="page-content mt30">

    <div class="row">
      <div class="col-md-3">
        <ul class="client-applicants-tab">
          <li class="" ng-repeat="job in jobs">
            <div ng-click="setJob(job)">
              {{job.title}}
              <span class="publish-dae-id">
                Published: 10 nov 2014 <b>|</b> job ID: 29930
              </span>
              <span class="location">
                <i class="fa fa-map-marker"></i>
                San Francisco, California
              </span>
            </div>
          </li>
        </ul>

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


      </div> <!-- end .3rd grid layout -->
      <div class="col-md-9">
        <div class="tab-content client-team">
          <div class="tab-pane active" id="quality-engineer">

            <div class="view-sort clearfix mb30">
              <div class="row">

                <div class="col-sm-6">
                  <h4 class="available-jb pull-left">{{job.title}}</span></h4>

                </div>

                <div class="col-sm-6">
                  <div class="job-sort-by pull-right ml20" id="clients-sort-by">

                    <div class=""><select>
                      <option value="#">Sort by</option>
                      <option value="#">Name</option>
                      <option value="#">Type</option>
                      <option value="#">Date</option>
                    </select>

                  </div> <!-- end .job-sort-by -->

                  

                </div> <!-- end .end col-sm-5 grid-layout  -->
              </div> <!-- end .row -->
            </div> <!-- end .view-sort div -->

            <div class="candidate-description client-description applicants-content mt20" ng-repeat="candidate in candidates">

              <div class="language-print client-des clearfix">
                <div class="aplicants-pic pull-left">
                  <img src="img/content/aplicant-img-1.jpg" alt="">

                  <ul class="list-inline">
                    <li><a href="#"><i class="fa fa-eye"></i></a></li>
                    <li><a href="#"><i class="fa fa-bookmark"></i></a></li>
                    <li><a href="#"><i class="fa fa-trash"></i></a></li>


                  </ul>
                </div>
                <!-- end .aplicants-pic -->
                <div class="clearfix">
                  <div class="pull-left">
                    <h5>{{candidate.name}} <a href="#/candidate/{{candidate.id}}/profile">[profile]</a></h5>
                    <a href="#">Web Developer at Highest Dreams Inc</a>
                  </div>
                  <ul class="list-inline pull-right">
                    <li class="star-rating">7.9</li>
                  </ul>

                </div>

                <div class="aplicant-details-show clearfix">
                  <ul class="list-unstyled pull-left">
                      <li><span>Location: <b class="aplicant-detail">San Francisco, California</b></span></li>

                      <li><span>Nationality: <b class="aplicant-detail">Portuguese</b></span></li>
                      <li><span>Years of Experience: <b class="aplicant-detail">7</b></span></li>

                      <li><span>Degree: <b class="aplicant-detail">MBA</b></span></li>
                    </ul>

                    <ul class="list-unstyled pull-left">
                      <li>
                        <span>Employment Status: <b class="aplicant-detail">Employed</b></span>
                      </li>

                      <li>
                        <span>Gender: <b class="aplicant-detail">Male</b></span>
                      </li>

                      <li>
                        <span>Work Permit: <b class="aplicant-detail">General Work Permit</b></span>
                      </li>
                    </ul>

                </div>
                <!-- end .aplicant-details-show -->
              </div> <!-- end .language-print -->

            </div> <!-- end .candidate-description -->

            <div ng-if="job.id && !candidates.length"><h1>No candidates found.</h1></div>
            <div ng-if="!job.id"><h3>Please select a job from the left bar.</h3></div>

          </div> 
           

        </div> <!-- end client-team tab-content -->

      </div> <!-- end .9th grid layout -->

    </div>
  </div> <!-- end .page-content -->
</div> <!-- end container -->
@stop