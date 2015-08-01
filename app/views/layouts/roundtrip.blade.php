<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>User CP</title>

    <!-- build:css assets/css/vendor.css -->
    <!-- bower:css -->
    <link rel="stylesheet" href="/frontend/bower_components/components-font-awesome/css/font-awesome.css" />
    <link rel="stylesheet" href="/frontend/bower_components/bootstrap/dist/css/bootstrap.css" />
    <link rel="stylesheet" href="/frontend/bower_components/angular-ui-select/dist/select.css" />
    <!-- endbower -->
    <!-- endbuild -->


    <!-- Stylesheets -->
    <link href='http://fonts.googleapis.com/css?family=Lato:400,700,900,400italic' rel='stylesheet' type='text/css'>
    <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
    <!-- <link rel="stylesheet" href="css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="/frontend/css/bootstrap.css">
    <link rel="stylesheet" href="/frontend/css/style.css">
    <link rel="stylesheet" href="/frontend/css/responsive.css">
    <!-- <link rel="stylesheet" type="text/css" href="frontend/css/jquery.tagsinput.css" /> -->
    <!-- <link rel="stylesheet" type="text/css" href="frontend/css/owl.carousel.css" /> -->
    <link rel="stylesheet" href="/frontend/css/custom-motibu.css">

    <!--[if IE 9]>
    <script src="js/media.match.min.js"></script>
    <![endif]-->
</head>

<body >
<div id="main-wrapper" class="our-agents-content">

    <header id="header">
        <div class="header-top-bar">
            <div class="container">
                <!-- Logo -->
                <a href="#/" class="logo"><i class="fa fa-list"></i> User <strong>CP</strong></a>

                <!-- Dashboard Navigation -->
                <nav class="dashboard-nav">
                    <ul>
                    </ul>
                </nav>
            </div>
        </div> <!-- end .header-top-bar -->

        <div class="header-page-title our-agents-header">
            <div class="container">
                <div class="title-breadcrumb clearfix">
                    <h1>Clients</h1>

                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Agency Name</li>
                    </ol>
                </div> <!-- end .title-breadcrumb -->

            </div> <!-- end .container -->
        </div> <!-- end .header-nav-bar -->
    </header> <!-- end #header -->

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
<script src="/frontend/bower_components/jquery/dist/jquery.js"></script>

<!-- endbower -->
<!-- endbuild -->

<script type="text/javascript">
    // $('#tags').tagsInput();
</script>

</body>
</html>