@extends('layouts.partial')

@section('content')
    <div class="container">
      <div class="page-content">

        <div class="agent-title">
          <h1 class="pull-left">Agents</h1>

          <a href="#" class="btn btn-green pull-right"><i class="fa fa-plus"></i>Add Agent</a>
        </div> <!-- end .agent-title  -->


        <div class="agents-details" ng-controller="AddAgentController">
          <div class="row">

            <div class="col-md-3 col-sm-4 col-xs-6">
              <div class="agent-single" id="add-agent-field" ng-controller="AddAgentController">

                <form action="">
                  <div class="add-image-field">
                    <button class="btn btn-default">Upload Image
                      <input type="file">
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

            <div class="col-md-3 col-sm-4 col-xs-6">
              <div class="agent-single">
                <img src="frontend/img/content/agent-img-1.jpg" alt="">

                <ul>
                  <li><span class="title">Name:</span><span class="title-des text-capitalize">Francisco De silva</span></li>
                  <li><span class="title">Tel:</span><span class="title-des">(01) 234 567</span></li>
                  <li><span class="title">Email:</span><span class="title-des">agent@agency.com</span></li>
                  <li><span class="title">Role:</span><span class="title-des">administrator</span></li>
                </ul>

                <div class="view-profile">
                  <a href="#" class="btn btn-default">View Agent Profile</a>
                </div>
              </div> <!-- end .agent-single  -->
            </div> <!-- end grid layout  -->

            <div class="col-md-3 col-sm-4 col-xs-6">
              <div class="agent-single">
                <img src="frontend/img/content/agent-img-2.jpg" alt="">

                <ul>
                  <li><span class="title">Name:</span><span class="title-des text-capitalize">Amanda bryce</span></li>
                  <li><span class="title">Tel:</span><span class="title-des">(01) 234 567</span></li>
                  <li><span class="title">Email:</span><span class="title-des">agent@agency.com</span></li>
                  <li><span class="title">Role:</span><span class="title-des">Agent</span></li>
                </ul>

                <div class="view-profile">
                  <a href="#" class="btn btn-default">View Agent Profile</a>
                </div>
              </div> <!-- end .agent-single  -->
            </div> <!-- end grid-layout  -->

            <div class="col-md-3 col-sm-4 col-xs-6">
              <div class="agent-single">
                <img src="frontend/img/content/agent-img-3.jpg" alt="">

                <ul>
                  <li><span class="title">Name:</span><span class="title-des text-capitalize">Angelika Debson</span></li>
                  <li><span class="title">Tel:</span><span class="title-des">(01) 234 567</span></li>
                  <li><span class="title">Email:</span><span class="title-des">agent@agency.com</span></li>
                  <li><span class="title">Role:</span><span class="title-des">Agent</span></li>
                </ul>

                <div class="view-profile">
                  <a href="#" class="btn btn-default">View Agent Profile</a>
                </div>
              </div> <!-- end .agent-single  -->
            </div> <!-- end grid-layout  -->

            <div class="col-md-3 col-sm-4 col-xs-6">
              <div class="agent-single">
                <img src="frontend/img/content/agent-img-4.jpg" alt="">

                <ul>
                  <li><span class="title">Name:</span><span class="title-des text-capitalize">Angus Cameron</span></li>
                  <li><span class="title">Tel:</span><span class="title-des">(01) 234 567</span></li>
                  <li><span class="title">Email:</span><span class="title-des">agent@agency.com</span></li>
                  <li><span class="title">Role:</span><span class="title-des">Agent</span></li>
                </ul>

                <div class="view-profile">
                  <a href="#" class="btn btn-default">View Agent Profile</a>
                </div>
              </div> <!-- end .agent-single  -->
            </div> <!-- end grid-layout  -->

            <div class="col-md-3 col-sm-4 col-xs-6">
              <div class="agent-single">
                <img src="frontend/img/content/agent-img-5.jpg" alt="">

                <ul>
                  <li><span class="title">Name:</span><span class="title-des text-capitalize">Christopher Carmody</span></li>
                  <li><span class="title">Tel:</span><span class="title-des">(01) 234 567</span></li>
                  <li><span class="title">Email:</span><span class="title-des">agent@agency.com</span></li>
                  <li><span class="title">Role:</span><span class="title-des">Agent</span></li>
                </ul>

                <div class="view-profile">
                  <a href="#" class="btn btn-default">View Agent Profile</a>
                </div>
              </div> <!-- end .agent-single  -->
            </div> <!-- end grid-layout  -->

            <div class="col-md-3 col-sm-4 col-xs-6">
              <div class="agent-single">
                <img src="frontend/img/content/agent-img-6.jpg" alt="">

                <ul>
                  <li><span class="title">Name:</span><span class="title-des text-capitalize">Jean Carlos Aguero</span></li>
                  <li><span class="title">Tel:</span><span class="title-des">(01) 234 567</span></li>
                  <li><span class="title">Email:</span><span class="title-des">agent@agency.com</span></li>
                  <li><span class="title">Role:</span><span class="title-des">Agent</span></li>
                </ul>

                <div class="view-profile">
                  <a href="#" class="btn btn-default">View Agent Profile</a>
                </div>
              </div> <!-- end .agent-single  -->
            </div> <!-- end grid-layout  -->

            <div class="col-md-3 col-sm-4 col-xs-6">
              <div class="agent-single">
                <img src="frontend/img/content/agent-img-7.jpg" alt="">

                <ul>
                  <li><span class="title">Name:</span><span class="title-des text-capitalize">Margaux Le Pierrès</span></li>
                  <li><span class="title">Tel:</span><span class="title-des">(01) 234 567</span></li>
                  <li><span class="title">Email:</span><span class="title-des">agent@agency.com</span></li>
                  <li><span class="title">Role:</span><span class="title-des">Agent</span></li>
                </ul>

                <div class="view-profile">
                  <a href="#" class="btn btn-default">View Agent Profile</a>
                </div>
              </div> <!-- end .agent-single  -->
            </div> <!-- end grid-layout  -->

            <div class="col-md-3 col-sm-4 col-xs-6">
              <div class="agent-single">
                <img src="frontend/img/content/agent-img-8.jpg" alt="">

                <ul>
                  <li><span class="title">Name:</span><span class="title-des text-capitalize">Joanne Ailwood</span></li>
                  <li><span class="title">Tel:</span><span class="title-des">(01) 234 567</span></li>
                  <li><span class="title">Email:</span><span class="title-des">agent@agency.com</span></li>
                  <li><span class="title">Role:</span><span class="title-des">Agent</span></li>
                </ul>

                <div class="view-profile">
                  <a href="#" class="btn btn-default">View Agent Profile</a>
                </div>
              </div> <!-- end .agent-single  -->
            </div> <!-- end grid-layout  -->

            <div class="col-md-3 col-sm-4 col-xs-6">
              <div class="agent-single">
                <img src="frontend/img/content/agent-img-9.jpg" alt="">

                <ul>
                  <li><span class="title">Name:</span><span class="title-des text-capitalize">Anthony Buenaventura</span></li>
                  <li><span class="title">Tel:</span><span class="title-des">(01) 234 567</span></li>
                  <li><span class="title">Email:</span><span class="title-des">agent@agency.com</span></li>
                  <li><span class="title">Role:</span><span class="title-des">Agent</span></li>
                </ul>

                <div class="view-profile">
                  <a href="#" class="btn btn-default">View Agent Profile</a>
                </div>
              </div> <!-- end .agent-single  -->
            </div> <!-- end grid-layout  -->

            <div class="col-md-3 col-sm-4 col-xs-6">
              <div class="agent-single">
                <img src="frontend/img/content/agent-img-10.jpg" alt="">

                <ul>
                  <li><span class="title">Name:</span><span class="title-des text-capitalize">Radhika Unnikrishnan</span></li>
                  <li><span class="title">Tel:</span><span class="title-des">(01) 234 567</span></li>
                  <li><span class="title">Email:</span><span class="title-des">agent@agency.com</span></li>
                  <li><span class="title">Role:</span><span class="title-des">Agent</span></li>
                </ul>

                <div class="view-profile">
                  <a href="#" class="btn btn-default">View Agent Profile</a>
                </div>
              </div> <!-- end .agent-single  -->
            </div> <!-- end grid-layout  -->

            <div class="col-md-3 col-sm-4 col-xs-6">
              <div class="agent-single">
                <img src="frontend/img/content/agent-img-11.jpg" alt="">

                <ul>
                  <li><span class="title">Name:</span><span class="title-des text-capitalize">Margaux Le Pierrès</span></li>
                  <li><span class="title">Tel:</span><span class="title-des">(01) 234 567</span></li>
                  <li><span class="title">Email:</span><span class="title-des">agent@agency.com</span></li>
                  <li><span class="title">Role:</span><span class="title-des">Agent</span></li>
                </ul>

                <div class="view-profile">
                  <a href="#" class="btn btn-default">View Agent Profile</a>
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
      </div> <!-- end container -->
@stop