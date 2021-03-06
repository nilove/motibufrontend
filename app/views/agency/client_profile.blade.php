@extends('layouts.partial')

@section('content')
<div class="container" ng-controller="ClientProfileController">
  <div class="page-content mt30">
    <div class="row">
      <div class="col-md-3">
        <div class="candidate-profile-picture">
          <img src="img/content/client-profile-logo.jpg" alt="">

          <h6 class="client-name">{{client.name}}<h6>
        </div> <!-- end .agent-profile-picture -->

        <div class="client-profile-deatils">
          <div class="title clearfix">
            <h6>Client Details</h6>
            <a class="pull-right" href="#"><i class="fa fa-edit"></i>Edit</a>
          </div> <!-- end .end .title -->

          <div class="client-sidebar-area">
            <h5>Industry</h5>
            <p>Food &amp; Beverages</p>

            <h5>Type</h5>
            <p>Public Company</p>

            <h5>Headquarters</h5>
            <p>700 Anderson Hill Rod Purchase,
              New York 10577 United States</p>

            <h5>Company Size</h5>
            <p>10,001+ employees</p>
          </div>
          <!-- end .client-sidebar-area -->

          <div class="title clearfix">
            <h6>Contact Details</h6>
            <a class="pull-right" href="#"><i class="fa fa-edit"></i>Edit</a>
          </div> <!-- end .end .title -->

          <div class="client-sidebar-area">
            <h5>Telephone</h5>
            <p>{{client.contact_telephone}}</p>

            <h5>Contact Person</h5>
            <p>{{client.contact_name}}</p>

            <h5>Email</h5>
            <p>{{client.contact_email}}</p>
          </div>
          <!-- end .client-sidebar-area -->

          <div class="title clearfix">
            <h6>Jobs</h6>
          </div> <!-- end .end .title -->

          <div class="client-sidebar-area mb5">
            <p>This client has a total of<strong>{{client.num_jobs}}</strong>available jobs</p>
          </div>

        </div> <!-- end .cient-sidebar-info -->
      </div> <!-- end .3col grid layout -->

      <div class="col-md-9">
        <div class="candidate-description client-description mb30">

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
              <h5>About {{client.name}}</h5>
              {{client.about}}
            </div>
          </div> <!-- end .candidate-details -->

        </div> <!-- end .candidate-description -->

        <div class="view-sort clearfix mb20">
          <div class="row">

            <div class="col-sm-5">
              <h4 class="available-jb">available job</h4>
            </div>

            <div class="col-sm-7 ">
              <div class="job-sort-by pull-right ml20" id="clients-sort-by">

                <div class="">
                  <select>
                    <option value="#">Sort by</option>
                    <option value="#">Name</option>
                    <option value="#">Type</option>
                    <option value="#">Date</option>
                  </select>

                </div> <!-- end .job-sort-by -->

                <!-- <div class="add-new-client">
                  <p>View: <button><i class="fa fa-align-justify"></i></button> <button class="active"><i class="fa fa-list"></i></button></p>
                </div> -->

              </div> <!-- end .end col-sm-5 grid-layout  -->
            </div>
          </div> <!-- end .row -->
        </div> <!-- end .view-sort div -->


        <div class="candidate-description client-description" ng-repeat="job in jobs">

          <div class="language-print client-des clearfix">
            <div class="pull-left">
              <h5>{{job.title}}</h5>
              <a href="#">Phoenix, AZ</a>
            </div>
            <ul class="list-inline pull-right">
              <li class="star-rating"><a href="#"><i class="fa fa-star"></i></a></li>
            </ul>
          </div> <!-- end .language-print -->

          <div class="candidate-details">
            {{job.about}}

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

            <div class="apply-share clearfix" ng-if="false">
              <a class="pull-left btn btn-default" href="#">Apply for this Job</a>
            </div>
            <!-- end .apply-share -->


            <div class="toggle-details text-right active">
              <a class="btn btn-toggle" href="#">Info</a>

            </div>
            <!-- end .toggle-details -->
          </div> <!-- end .candidate-details -->

        </div> <!-- end .candidate-description -->

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

      </div> <!-- end .9col grid layout -->

    </div>

  </div> <!-- end .page-content -->
</div> <!-- end container -->
@stop