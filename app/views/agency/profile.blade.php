@extends('layouts.partial')

@section('content')
<div class="container" ng-controller="AgencyProfileController">
      <div class="row">
        <div class="col-sm-12">
          <ul class="page-action-buttons pull-right">
            <li><a ng-href="#/agency/{{agency.id}}/edit" class="btn btn-default"><i class="fa fa-pencil"></i> Edit</a></li>
          </ul>
        </div>
      </div>
  <div class="page-content mt30">
    <div class="row">
      <div class="col-md-3">
        <div class="candidate-profile-picture">

          <img ng-src="{{agency.logo_url || 'img/content/client-profile-logo.jpg'}}" alt="">

          <h6 class="client-name">{{client.name}}<h6>
        </div> <!-- end .agent-profile-picture -->

        <div class="client-profile-deatils">
          <div class="title clearfix">
            <h6>Agent Details</h6>
            <!-- <a class="pull-right" href="#"><i class="fa fa-edit"></i>Edit</a> -->
          </div> <!-- end .end .title -->

          <div class="client-sidebar-area">
            <h5>Industry</h5>
            <p>{{agency.industry.name}}</p>

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
            <!-- <a class="pull-right" href="#"><i class="fa fa-edit"></i>Edit</a> -->
          </div> <!-- end .end .title -->

          <div class="client-sidebar-area">
            <h5>Telephone</h5>
            <p>{{agancy.contact_telephone}}</p>

            <h5>Contact Person</h5>
            <p>{{agancy.contact_name}}</p>

            <h5>Email</h5>
            <p>{{agancy.contact_email}}</p>
          </div>
          <!-- end .client-sidebar-area -->

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
              <h5>About {{agency.name}}</h5>
              <div ng-bind-html="agency.description"></div>
            </div>
          </div> <!-- end .candidate-details -->

        </div> <!-- end .candidate-description -->

      </div> <!-- end .9col grid layout -->

    </div>

  </div> <!-- end .page-content -->
</div> <!-- end container -->
@stop