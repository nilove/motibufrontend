@extends('layouts.partial')

@section('content')
<div class="container" ng-controller="AgentViewProfileController">
  <div class="page-content mt60">
    <div class="row">
      <div class="col-md-3 page-sidebar">
        <div class="agent-profile-picture">
          <img src="frontend/img/content/agent-profile.jpg" alt="">

          <a href="#">{{agent.user.data.username}}</a>
        </div> <!-- end .agent-profile-picture -->

        <div class="agent-details">
          <div class="title clearfix">
            <h6>Agent Detail</h6>
            <a href="#"><i class="fa fa-edit"></i>Edit</a>
          </div> <!-- end .title -->

          <div class="agent-address">
            <p><i class="fa fa-map-marker"></i>Str. Polytechnique, 29, Saint Petersburg Russia 1952591</p>
            <p><i class="fa fa-phone"></i>(02) 123 4567</p>
            <p><i class="fa fa-envelope"></i>{{agent.user.data.email}}</p>
            <p><i class="fa fa-user"></i>Agent</p>
          </div> <!-- end agent-address -->

        </div> <!-- end agent-details -->

        <div class="agent-assigned-jobs">
          <div class="title">
            <h6>Assigned Jobs</h6>

            <p>This agent has a total of <strong>{{agent.jobs.data.length}}</strong> assigned jobs</p>
          </div>
        </div>

        <div class="delete-agent">
          <button><i class="fa fa-trash-o"></i>Delete Agnet</button>
        </div>

      </div> <!-- end 3rd grid .page-sidebar layout -->

      <div class="col-md-9">
        <div class="main-content" id="agent-profile">
          <div class="view-sort">
            <div class="row">

              <div class="col-sm-6">
                <p>View: <button class="active"><i class="fa fa-align-justify"></i></button> <button><i class="fa fa-list"></i></button></p>
              </div>

              <div class="col-sm-5 col-sm-push-1">
                <div class="job-sort-by" id = "assigned-job-sort-by">

                  <select>
                    <option value="#">Sort by</option>
                    <option value="#">Name</option>
                    <option value="#">Type</option>
                    <option value="#">Date</option>
                  </select>

                </div> <!-- end .job-sort-by -->

                <div class="assign-new-job">
                  <a class="btn btn-green" href="#"><i class="fa fa-plus"></i>Assign New Job</a>
                </div>

              </div> <!-- end .end col-sm-5 grid-layout  -->
            </div> <!-- end .row -->
          </div> <!-- end .view-sort div -->

          <div class="editing-link">
            <ul class="list-inline">
              <li><a href="#"><i class="fa fa-edit"></i>Edit</a></li>
              <li><a href="#"><i class="fa fa-bar-chart"></i>Analytics</a></li>
              <li><a href="#"><i class="fa fa-calendar"></i>Add More Days</a></li>
              <li><a href="#"><i class="fa fa-trash-o"></i>Delete</a></li>
            </ul>

            <div class="search-content">
              <input type="text" placeholder="Search">
              <button><i class="fa fa-search"></i></button>
            </div>
          </div> <!-- end .editing-link -->

          <div class="assigned-job-list">

            <div class="table-heading">
              <div class="css-table">

                <div class="table-details css-table-cell">
                  <h5>Assigned Jobs</h5>
                </div>

                <div class="days-left css-table-cell">
                  <h5>Days Left</h5>
                </div>

              </div> <!-- end .css-table -->
            </div> <!-- end .table-heading -->

            <div class="assigned-job-single" ng-repeat="job in jobs">
              <div class="css-table">

                <div class="checkbox-area css-table-cell">
                  <input type="checkbox">
                </div> <!-- end .checkbox-area -->

                <div class="company-logo-area css-table-cell">
                  <img src="frontend/img/content/company-logo-1.png" alt="">
                </div> <!-- end .company-logo-area -->

                <div class="table-details css-table-cell">
                  <div class="job-description">
                    <h4><a ng-href="#/job/view/{{job.id}}">{{job.title}}</a></h4>
                  </div> <!-- end .job-description -->

                  <div class="company-name">
                    <h4><a ng-href="#/client/{{job.client.data.id}}/profile">{{job.client.data.name}}</a></h4>
                  </div> <!-- end .company-name -->

                  <div class="job-location-stat">
                    <p><a href="#"><i class="fa fa-map-marker"></i>Manila, Philippines</a></p>

                    <ul class="list-inline pull-right">
                      <li>View: <strong>2132</strong></li>
                      <li>Applicants: <strong>4800</strong></li>
                      <li>Pre-selected: <strong>324</strong></li>
                    </ul>
                  </div> <!-- end .job-location-stat -->
                </div> <!-- end .table-details -->

                <div class="days-left css-table-cell">
                  <h4>25</h4>
                </div> <!-- end .days-left -->

              </div> <!-- end .css-table -->
            </div> <!-- end .assigned-job-single -->

          </div> <!-- end .assigned-job-list -->

          <div class="pagination-content clearfix">
            <p>Displaying 10 out of 50 items</p>

            <nav>
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
            </nav>
          </div> <!-- end .pagination -->

        </div> <!-- end .main-content -->
      </div> <!-- end 9th grid layout -->
    </div> <!-- end .row -->
  </div> <!-- end .page-content -->
</div> <!-- end container -->
@stop