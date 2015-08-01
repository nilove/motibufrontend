<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>User CP</title>

    <!-- build:css assets/css/vendor.css -->
    <!-- bower:css -->
    <link rel="stylesheet" href="frontend/bower_components/components-font-awesome/css/font-awesome.css" />
    <link rel="stylesheet" href="frontend/bower_components/bootstrap/dist/css/bootstrap.css" />
    <link rel="stylesheet" href="frontend/bower_components/angular-ui-select/dist/select.css" />
    <link rel="stylesheet" href="frontend/bower_components/seiyria-bootstrap-slider/dist/css/bootstrap-slider.css" />
    <link rel="stylesheet" href="frontend/bower_components/angular-notify/dist/angular-notify.css" />
    <!-- endbower -->
    <!-- endbuild -->


    <!-- Stylesheets -->
    <link href='http://fonts.googleapis.com/css?family=Lato:400,700,900,400italic' rel='stylesheet' type='text/css'>
    <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
    <!-- <link rel="stylesheet" href="css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="frontend/css/bootstrap.css">
    <link rel="stylesheet" href="frontend/css/style.css">
    <link rel="stylesheet" href="frontend/css/responsive.css">
    <link rel="stylesheet" href="frontend/assets/demo/select2.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="frontend/css/jquery.tagsinput.css" /> -->
    <!-- <link rel="stylesheet" type="text/css" href="frontend/css/owl.carousel.css" /> -->
    <link rel="stylesheet" href="frontend/css/custom-motibu.css">

    <!--[if IE 9]>
    <script src="js/media.match.min.js"></script>
    <![endif]-->
    <script type="text/javascript">
        window.api_url = '[[getenv('API_URL')]]';
    </script>

    <style>
        ul.page-action-buttons {
            list-style-type: none;
            margin-top: -40px;
        }
        ul.page-action-buttons li {
            float: left;
            margin-left: 10px;
        }
        .modal-dialog {
            z-index: 1100;
        }
    </style>
</head>

<body ng-app="motibu"
      ng-controller="MainController">
<div id="main-wrapper" class="our-agents-content">

  <header id="header">

<!-- 
    HEADER TOP BAR WITH NOTIFICATION FOR REGISTER USER
 -->

    <div class="header-notification-bar for-resigter" ng-if="getLoginStatus()">
        <div class="register-user">

           <div class="container">
               <div class="row">

                   <div class="col-md-3 col-sm-3">
                     <div class="logo-section">
                         <a href="/#/"><img src="../frontend/img/motibu-logo.png" alt=""></a>
                     </div>  
                   </div>

                   <div class="col-md-6 col-sm-5">
                       <div class="search-form">

                           <form action="">
                               <button class="dropdown-search"><i class="fa fa-angle-down"></i> <i class="fa fa-bars"></i></button>
                               <input type="search" placeholder="Search...">
                               <button class="search-button"><i class="fa fa-search"></i></button>
                           </form>

                       </div>
                   </div>

                   <div class="col-md-3 col-sm-4">
                       <div class="notification-section text-right">

                           <ul class="list-inline">
                                <li class="dropdown mail-section">
                                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true" aria-expanded="true">
                                    <i class="fa fa-envelope-o"></i><span class="new-notification">3</span>
                                  </a>

                                  <ul class="dropdown-menu pull-right  motibu-top-dropdown mail-notification" role="menu" aria-labelledby="dLabel">
                                     
                                     <li>
                                       <div class="dropdown-title clearfix">
                                         <h6 class="pull-left">Inbox</h6>
                                         <button class="btn btn-default pull-right">View All</button>
                                       </div>
                                     </li>

                                     <li>
                                       <div class="mail-single">
                                         <img src="../frontend/img/content/candidate-profile.jpg" alt="">

                                         <div class="mail-details">
                                           <h6 class="mail-subject mail-unread">Brad Fost</h6>
                                           <h6 class="mail-subject mail-with-reply">Motibu Inmail</h6>

                                         </div> <!-- end .details -->

                                         <div class="mail-checkbox">
                                           <p class="date">Nov 19</p>
                                         </div>

                                       </div> <!-- end .mail-single -->

                                     </li> 

                                     <li>
                                       <div class="mail-single">
                                         <img src="../frontend/img/content/candidate-profile.jpg" alt="">

                                         <div class="mail-details">
                                           <h6 class="mail-subject mail-unread">Brad Fost</h6>

                                           <p class="mail-dec">Business oppurtunity in Switzerland</p>
                                         </div> <!-- end .details -->

                                         <div class="mail-checkbox">
                                           <p class="date">Nov 19</p>
                                         </div>

                                       </div> <!-- end .mail-single -->

                                     </li> 
                                  </ul>
                                </li>
                                


                                <li class="dropdown visitor-section">
                                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true" aria-expanded="true"><i class="fa fa-bell-o"></i><span class="new-notification">3</span>
                                </a>

                                  <ul class="dropdown-menu pull-right  motibu-top-dropdown visitors-notification" role="menu" aria-labelledby="dLabel">
                                      <li>
                                        <div class="dropdown-title text-center clearfix">
                                          <h6 class="">visitors</h6>
                                         
                                        </div>
                                      </li>

                                      <li>
                                        <div class="mail-single">
                                          <img src="../frontend/img/content/candidate-profile.jpg" alt="">

                                          <div class="mail-details">

                                            <p class="mail-dec viewed-profile"><a href="#">Jhon Doe</a> viewed your profile</p>
                                            <p class="mail-dec time-to-visit">5m ago</p>
                                          </div> <!-- end .details -->

                                        </div> <!-- end .mail-single -->

                                      </li>

                                      <li>
                                        <div class="mail-single">
                                          <img src="../frontend/img/content/candidate-profile.jpg" alt="">

                                          <div class="mail-details">

                                            <p class="mail-dec viewed-profile"><a href="#">Jhon Doe</a> viewed your profile</p>
                                            <p class="mail-dec time-to-visit">1hour ago</p>

                                          </div> <!-- end .details -->

                                        </div> <!-- end .mail-single -->

                                      </li>
                                      
                                  </ul>
                                </li>
                                



                                <li class="user-profile-pic dropdown" dropdown>
                                    <a href="" class="dropdown-toggle" dropdown-toggle><img src="../frontend/img/content/agent-img-1.jpg" alt=""></a>
            <ul class="dropdown-menu pull-right motibu-top-dropdown" ng-if="getLoginStatus() && getUser().is_agency_admin">
              <li><a ng-href="#/agency/{{getUser().agencies[0].id}}/profile">Profile</a></li>
              <li><a ng-href="#/agency/{{getUser().agencies[0].id}}/agents">Agents</a></li>
              <li><a ng-href="#/agency/{{getUser().agencies[0].id}}/clients">Clients</a></li>
              <li><a ng-href="#/agency/{{getUser().agencies[0].id}}/jobs">Jobs &amp; Applicants</a></li>
              <!-- <li><a ng-href="#/agency/{{getUser().agencies[0].id}}/jobs">Applicants</a></li> -->
              <li><a ng-href="#/agency/{{getUser().agencies[0].id}}/agents">Bookmarks</a></li>
              <li><a ng-href="#/">Search</a></li>
              <li ng-if="getLoginStatus()"><button class="btn btn-default" ng-click="logOut()">Logout</button></li>
            </ul>
            
            <ul class="dropdown-menu pull-right motibu-top-dropdown" ng-if="getLoginStatus() && getUser().is_professional">
              <li><a ng-href="#/candidate/{{getUser().candidate_profile.id}}/profile">Profile</a></li>
              <li><a ng-href="#/candidate/{{getUser().candidate_profile.id}}/applications">Applications</a></li>
              <li><a ng-href="#/candidate/{{getUser().candidate_profile.id}}/bookmarks">Bookmarks</a></li>
              <li><a ng-href="#/job/search">Job Search</a></li>
              <li ng-if="getLoginStatus()"><button class="btn btn-default" ng-click="logOut()">Logout</button></li>
            </ul>
            
            <ul class="dropdown-menu pull-right motibu-top-dropdown" ng-if="getLoginStatus() && getUser().is_agent">
              <li><a ng-href="#/agent/view/{{getUser().agent_profile.id}}/profile">Profile</a></li>
              <li><a ng-href="#/agent/view/{{getUser().agent_profile.id}}/applications">Applications</a></li>
              <li><a ng-href="#/agent/view/{{getUser().agent_profile.id}}/bookmarks">Bookmarks</a></li>
              <li><a ng-href="#">Search</a></li>
              <li ng-if="getLoginStatus()"><button class="btn btn-default" ng-click="logOut()">Logout</button></li>
            </ul>
                                </li>
                           </ul>
                       </div>
                   </div>
                   
               </div> <!-- end .row -->
           </div> <!-- end .container --> 
        </div> <!-- end .register-user -->   
    </div> <!-- end. header-notification-bar  -->
    
<!-- 
     END HEADER NOTIFICATION TOP BAR
 -->

 <!-- 
    HEADER TOP BAR FOR NON REGISTER USER 
  -->

    <div class="header-notification-bar" ng-if="!getLoginStatus()">
        <div class="non-register-user">

           <div class="container">
               <div class="row">

                   <div class="col-md-3 col-sm-3">
                     <div class="logo-section">
                         <a href="#"><img src="../frontend/img/motibu-logo.png" alt=""></a>
                     </div>  
                   </div>

                   <div class="col-md-6 col-sm-5">
                       <div class="search-form">

                           <form action="">
                               <button class="dropdown-search"><i class="fa fa-angle-down"></i> <i class="fa fa-bars"></i></button>
                               <input type="search" placeholder="Search...">
                               <button class="search-button"><i class="fa fa-search"></i></button>
                           </form>

                       </div>
                   </div>

                   <div class="col-md-3 col-sm-4">
                       <div class="notification-section text-right">

                           <ul class="list-inline">
                               <li><a href="#">EN<i class="fa fa-angle-down"></i></a>
                                    <ul>
                                        <li><a href="#">DE</a></li>
                                        <li><a href="#">ES</a></li>
                                        <li><a href="#">IT</a></li>
                                    </ul>

                               </li>
                               <li><a href="#/login">Login</a></li>
                               <li><a href="#/register">Register</a></li>
                           </ul>
                       </div>
                   </div>
                   
               </div> <!-- end .row -->
           </div> <!-- end .container --> 
        </div> <!-- end .visitors-top-bar -->   
    </div> <!-- end. header-notification-bar  -->


<!-- 
    END HEADER TOP BAR FOR WITHOUT LOGIN USER
 -->


 <!-- 
    HEADER NAVBAR 
  -->
  <div class="main-navbar">

      <nav class="navbar navbar-default">
        <div class="container">

          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" ng-if="false">
            <ul highlight-menu-item class="nav navbar-nav" ng-if="!getLoginStatus()">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#">Job Search</a></li>
              <li><a href="#">Candidate Search</a></li>
              <li><a href="#">Companies</a></li>
              <li><a href="#">About Us</a></li>
              <li><a href="#">Blog</a></li>
              <li><a href="#">Contact</a></li>
            </ul>
            
            <ul highlight-menu-item class="nav navbar-nav" ng-if="getLoginStatus() && getUser().is_agency_admin">
              <li><a ng-href="#/agency/{{getUser().agencies[0].id}}/profile">Profile</a></li>
              <li><a ng-href="#/agency/{{getUser().agencies[0].id}}/agents">Agents</a></li>
              <li><a ng-href="#/agency/{{getUser().agencies[0].id}}/clients">Clients</a></li>
              <li><a ng-href="#/agency/{{getUser().agencies[0].id}}/jobs">Jobs &amp; Applicants</a></li>
              <!-- <li><a ng-href="#/agency/{{getUser().agencies[0].id}}/jobs">Applicants</a></li> -->
              <li><a ng-href="#/agency/{{getUser().agencies[0].id}}/agents">Bookmarks</a></li>
              <li><a ng-href="#">Search</a></li>
            </ul>
            
            <ul highlight-menu-item class="nav navbar-nav" ng-if="getLoginStatus() && getUser().is_professional">
              <li><a ng-href="#/candidate/{{getUser().candidate_profile.id}}/profile">Profile</a></li>
              <li><a ng-href="#/candidate/{{getUser().candidate_profile.id}}/applications">Applications</a></li>
              <li><a ng-href="#/candidate/{{getUser().candidate_profile.id}}/bookmarks">Bookmarks</a></li>
              <li><a ng-href="#/job/search">Job Search</a></li>
            </ul>
            
            <ul highlight-menu-item class="nav navbar-nav" ng-if="getLoginStatus() && getUser().is_agent">
              <li><a ng-href="#/agent/view/{{getUser().agent_profile.id}}/profile">Profile</a></li>
              <li><a ng-href="#/agent/view/{{getUser().agent_profile.id}}/applications">Applications</a></li>
              <li><a ng-href="#/agent/view/{{getUser().agent_profile.id}}/bookmarks">Bookmarks</a></li>
              <li><a ng-href="#">Search</a></li>
            </ul>
            
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
      </nav>
  </div> <!-- main-navbar -->
    



<!-- 
    END HEADER NAVBAR
 -->




    <div class="header-top-bar" ng-if="false">
      <div class="container">
        <!-- Logo -->
        <a ng-href="#/agency/{{getUser().agencies[0].id}}/profile" class="logo" ng-if="getLoginStatus() && getUser().is_agency_admin"><i class="fa fa-list"></i> User <strong>CP</strong></a>
        <a ng-href="#/candidate/{{getUser().candidate_profile.id}}/profile" class="logo" ng-if="getLoginStatus() && getUser().is_professional"><i class="fa fa-list"></i> User <strong>CP</strong></a>

        <div class="plan">
          <p>Your Plan:</p>

          <select>
            <option value="#">None</option>
            <option value="#">Basic</option>
            <option value="#">Free</option>
            <option value="#">Premium</option>
          </select>
        </div>

        <!-- Dashboard Navigation -->
        <nav class="dashboard-nav">
          <ul>

            <li ng-if="getLoginStatus() && getUser().agencies.length"><a ng-href="#/agency/{{getUser().agencies[0].id}}/jobs">My Listings</a></li>

            <li ng-if="getLoginStatus() && getUser().is_professional"><a ng-href="#/candidate/{{getUser().candidate_profile.id}}/profile">My Profile</a></li>
            <li ng-if="getLoginStatus() && getUser().is_agency_admin"><a ng-href="#/agency/{{getUser().agencies[0].id}}/profile">My Profile</a></li>

            <!-- <li class="active"><a href="#">My Settings</a></li> -->

            <li ng-if="getLoginStatus()"><button class="btn btn-default" ng-click="logOut()">Logout</button></li>
          </ul>
        </nav>
      </div>
    </div> <!-- end .header-top-bar -->

    <div class="header-page-title our-agents-header">
      <div class="container">
        <div class="title-breadcrumb clearfix">
          <h1>{{headerTitle}}</h1>

          <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li class="active">Agency Name</li>
          </ol>
        </div> <!-- end .title-breadcrumb -->

      </div> <!-- end .container -->
    </div> <!-- end .header-nav-bar -->
  </header> <!-- end #header -->

  <div class="container" ng-if="tabDefs.length>0">
    <ul class="nav nav-tabs">
      <li ng-class="{active: tab.link == currentPath}" ng-repeat="tab in tabDefs"><a ng-href="{{'#'+tab.link}}">{{tab.title}}</a></li>
    </ul>
  </div>

  <div id="page-content" class="agent-profile" ng-view="">
@yield('content')
  </div> <!-- end #page-content -->

  <footer id="footer">
    <div class="copyright">
      <div class="container">
        <p>2014 &copy; All rights reserved. Powered by <a href="#">UOUapps</a></p>
      </div>
    </div>
  </footer> <!-- end #footer -->

</div> <!-- end #main-wrapper -->

<!-- Scripts -->
<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> -->
<!-- <script>window.jQuery || document.write('<script src="js/jquery-1.11.1.min.js"><\/script>')</script> -->
<!-- <script src="js/jquery.ba-outside-events.min.js"></script> -->
<!-- <script src="js/jquery.inview.min.js"></script> -->
<!-- <script src="js/jquery.responsive-tabs.js"></script> -->
<!-- <script src="js/jquery.tagsinput.min.js"></script> -->
<!-- <script src="js/owl.carousel.js"></script> -->
<!-- <script src="js/script.js"></script> -->

    <!-- build:js scripts/vendor.js -->
    <!-- bower:js -->
    <script src="http://maps.googleapis.com/maps/api/js?sensor=false&amp;libraries=places"></script>
    <script src="frontend/bower_components/modernizr/modernizr.js"></script>
    <script src="frontend/bower_components/jquery/dist/jquery.js"></script>
    <script src="frontend/bower_components/angular/angular.js"></script>
    <script src="frontend/bower_components/angular-animate/angular-animate.js"></script>
    <script src="frontend/bower_components/angular-cookies/angular-cookies.js"></script>
    <script src="frontend/bower_components/angular-resource/angular-resource.js"></script>
    <script src="frontend/bower_components/angular-route/angular-route.js"></script>
    <script src="frontend/bower_components/angular-sanitize/angular-sanitize.js"></script>
    <script src="frontend/bower_components/angular-bootstrap/ui-bootstrap-tpls.js"></script>
    <script src="frontend/bower_components/bootstrap/dist/js/bootstrap.js"></script>
    <script src="frontend/bower_components/angular-ui-select/dist/select.js"></script>
    <script src="frontend/bower_components/seiyria-bootstrap-slider/js/bootstrap-slider.js"></script>
    <script src="frontend/bower_components/angular-bootstrap-slider/slider.js"></script>
    <script src="frontend/bower_components/angular-notify/dist/angular-notify.js"></script>
    <script src="frontend/bower_components/moment/moment.js"></script>
    <script src="frontend/bower_components/angular-moment/angular-moment.js"></script>
    <script src="frontend/assets/demo/jquery.geocomplete.min.js"></script>
    <!-- endbower -->
    <!-- endbuild -->

    <script src="frontend/js/common/directives.js"></script>
    <script src="frontend/js/common/services.js"></script>
    <script src="frontend/js/auth/controllers/loginController.js"></script>
    <script src="frontend/js/auth/controllers/registerController.js"></script>
    <script src="frontend/js/auth/controllers/registerAgencyControllers.js"></script>
    <script src="frontend/js/auth/auth.js"></script>
    <script src="frontend/js/agency/controllers/showClientsController.js"></script>
    <script src="frontend/js/agency/controllers/addClientController.js"></script>
    <script src="frontend/js/agency/controllers/clientProfileController.js"></script>
    <script src="frontend/js/agency/controllers/clientCandidatesController.js"></script>
    <script src="frontend/js/agency/controllers/agentProfileController.js"></script>
    <script src="frontend/js/agency/controllers/showStaffController.js"></script>
    <script src="frontend/js/agency/controllers/showJobsController.js"></script>
    <script src="frontend/js/agency/controllers/showAgentsController.js"></script>
    <script src="frontend/js/agency/controllers/addStaffController.js"></script>
    <script src="frontend/js/agency/controllers/addAgentController.js"></script>
    <script src="frontend/js/agency/controllers/agencyEditController.js"></script>
    <script src="frontend/js/agency/controllers/agencyProfileController.js"></script>
    <script src="frontend/js/agency/agency.js"></script>
    <script src="frontend/js/candidate/controllers/candidateProfileController.js"></script>
    <script src="frontend/js/candidate/controllers/candidateRegistrationController.js"></script>
    <script src="frontend/js/candidate/controllers/candidateSearchController.js"></script>
    <script src="frontend/js/candidate/controllers/candidateViewJobsController.js"></script>
    <script src="frontend/js/candidate/candidate.js"></script>
    <script src="frontend/js/agent/controllers/agentViewProfileController.js"></script>
    <script src="frontend/js/agent/controllers/agentViewJobsController.js"></script>
    <script src="frontend/js/agent/agent.js"></script>
    <script src="frontend/js/job/job.js"></script>
    <script src="frontend/js/job/controllers/jobRegistrationController.js"></script>
    <script src="frontend/js/job/controllers/jobPreviewController.js"></script>
    <script src="frontend/js/job/controllers/jobSearchController.js"></script>
    <script src="frontend/js/app.js"></script>

<script type="text/javascript">
  // $('#tags').tagsInput();
</script>

  <script src="frontend/assets/demo/select2.min.js"></script>


  <script type="text/javascript">
      if (getQS('next_step')==3) {
        window.location = '/?user_id='+getQS('user_id')+'#/register_agency_step_3';
      }
  </script>

</body>
</html>
