@extends('layouts.partial')

@section('content')
<div class="container" ng-controller="ShowAgentsController">
  <div class="page-content">

    <div class="agent-title">
      <h1 class="pull-left">Agents</h1>

      <button class="btn btn-green pull-right" ng-click="showAddForm=!showAddForm"><i class="fa fa-plus"></i>Add Agent</button>
    </div> <!-- end .agent-title  -->


    <div class="agents-details">
      <div class="row">

        <div class="col-md-3 col-sm-4 col-xs-6" ng-if="showAddForm">
          <div class="agent-single" id="add-agent-field" ng-controller="AddAgentController">

            <form>
              <div class="add-image-field">
                <button class="btn btn-default">Upload Image
                  <input type="file" data-file-input="profile_pic_filename" class="btn btn-default">
                </button>
              </div>
              <input type="text" ng-model="name" placeholder="Insert Name">
              <input type="text" ng-model="telephone" placeholder="Insert Tel">
              <input type="text" ng-model="mail" placeholder="Insert Email">
              <!-- <input type="text" placeholder="Insert Role"> -->
              <div class="save-details text-center">
                <button class="btn btn-default" ng-click="submit()">Save Details</button>
              </div>

            </form>

          </div> <!-- end .agent-single  -->
        </div> <!-- end grid layout  -->

        <div class="col-md-3 col-sm-4 col-xs-6" ng-repeat="agent in agents">
        

          <div class="agent-single">
            <img ng-src="{{ agent.profile_pic_filename || 'frontend/img/content/agent-img-2.jpg' }}" alt="">

            <ul>
              <li><span class="title">Name:</span><span class="title-des text-capitalize">{{agent.name}}</span></li>
              <li><span class="title">Tel:</span><span class="title-des">{{agent.telephone}}</span></li>
              <li><span class="title">Email:</span><span class="title-des">{{agent.email}}</span></li>
              <!-- <li><span class="title">Role:</span><span class="title-des">Agent</span></li> -->
            </ul>

            <div class="view-profile">
              <a ng-href="#/agent/{{agent.id}}/profile" class="btn btn-default">View Agent Profile</a>
            </div>
          </div> <!-- end .agent-single  -->
        </div> <!-- end grid-layout  -->
      </div> <!-- end .row -->

      <div class="pagination-content clearfix">
        <p>Displaying 10 out of 50 items</p>

        <nav>
          <ul class="list-inline">
            <li><a class="btn btn-default first"href="#">first</a></li>
            <li><a class="btn btn-default previous" href="#">Previous</a></li>
            <li><a class="number" href="#">3</a></li>
            <li><a class="btn btn-default next" href="#">Next</a></li>
            <li><a class="btn btn-default last" href="#">Last</a></li>
          </ul>
        </nav>
      </div>
    </div> <!-- end .agents-details -->
  </div> <!-- end .page-content -->
</div> <!-- end container -->
@stop