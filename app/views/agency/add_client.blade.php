@extends('layouts.partial')

@section('content')
<div class="container">
<div class="page-content mt60">
  <div class="row">

    <div class="col-md-12">
      <div class="main-content">
        <div class="view-sort">
          <div class="row">

            <div class="col-sm-6">
              <p>View: <button class="active"><i class="fa fa-align-justify"></i></button> <button><i class="fa fa-list"></i></button></p>
            </div>

            <div class="col-sm-4 col-sm-push-2">
              <div class="job-sort-by ml20" id ="clients-sort-by">

                <select>
                  <option value="#">Sort by</option>
                  <option value="#">Name</option>
                  <option value="#">Type</option>
                  <option value="#">Date</option>
                </select>

              </div> <!-- end .job-sort-by -->

              <div class="add-new-client">
                <a class="btn btn-green" href="#"><i class="fa fa-plus"></i>Add New Client</a>
              </div>

            </div> <!-- end .end col-sm-5 grid-layout  -->
          </div> <!-- end .row -->
        </div> <!-- end .view-sort div -->

        <div class="editing-link">
          <ul class="list-inline">
            <li><a href="#"><i class="fa fa-edit"></i>Edit</a></li>
            <li><a href="#"><i class="fa fa-bar-chart"></i>Analytics</a></li>
            <li><a href="#"><i class="fa fa-trash-o"></i>Delete</a></li>
          </ul>

          <div class="search-content">
            <input type="text" placeholder="Search">
            <button><i class="fa fa-search"></i></button>
          </div>
        </div> <!-- end .editing-link -->

        <div class="clients-list">

          <div class="table-heading">
            <div class="css-table">

              <div class="table-details css-table-cell">
                <h5>Clients</h5>
              </div>

              <div class="clients-job css-table-cell">
                <h5>Jobs</h5>
              </div>

            </div> <!-- end .css-table -->
          </div> <!-- end .table-heading -->

          <!-- start add client fields -->
          <div class="clients-job-single" id="add-client" ng-controller="AddClientController">
            <div class="css-table">

              <div class="checkbox-area css-table-cell">

              </div> <!-- end .checkbox-area -->

              <div class="company-logo-area css-table-cell">
                <div class="upload-image">

                  <a href="#" class="btn btn-default">Upload Image</a>
                </div>


              </div> <!-- end .company-logo-area -->

              <div class="table-details css-table-cell">

                <div class="company-name">
                  <input type="text" ng-model="name" placeholder="Insert Company Name">
                </div> <!-- end .company-name -->

                <div class="company-description">
                  <input type="text" ng-model="industry" placeholder="Industry">
                </div> <!-- end .job-description -->

                <div class="job-location-stat">
                  <input class="input-location pull-left" type="text" ng-model="location" placeholder="location">

                  <div class="list-input-fields pull-right">
                    <input type="text" ng-model="contactName" placeholder="Contact Persone">
                    <input type="text" ng-model="contactTelephone" placeholder="Tel">
                    <input type="email" ng-model="contactMail" placeholder="Email">
                  </div>
                </div> <!-- end .job-location-stat -->

                <div class="save-details">
                  <button class="btn btn-default" ng-click="submit()">Save Details</button>
                </div>
              </div> <!-- end .table-details -->

              <div class="clients-job css-table-cell">
                <h4><a href="#">25 <span>See Jobs<i class="fa fa-external-link"></i></span> </a></h4>
              </div> <!-- end .days-left -->

            </div> <!-- end .css-table -->
          </div> <!-- end .clients-job-single -->

          <!-- end add client field -->

          <div class="clients-job-single">
            <div class="css-table">

              <div class="checkbox-area css-table-cell">
                <input type="checkbox">
              </div> <!-- end .checkbox-area -->

              <div class="company-logo-area css-table-cell">
                <img src="frontend/img/content/company-logo-1.png" alt="">
              </div> <!-- end .company-logo-area -->

              <div class="table-details css-table-cell">

                <div class="company-name">
                  <h4><a href="#">Burger King</a></h4>
                </div> <!-- end .company-name -->

                <div class="company-description">
                  <h4><a href="#">Fast Food Restaurant</a></h4>
                </div> <!-- end .job-description -->

                <div class="job-location-stat">
                  <p><a href="#"><i class="fa fa-map-marker"></i>Manila, Philippines</a></p>

                  <ul class="list-inline pull-right">
                    <li>contact person: <strong>Anthony Carmody</strong></li>
                    <li>Tel: <strong>(02) 123 5678</strong></li>
                    <li>Email: <strong>client@motibu.com</strong></li>
                  </ul>
                </div> <!-- end .job-location-stat -->
              </div> <!-- end .table-details -->

              <div class="clients-job css-table-cell">
                <h4><a href="#">25 <span>See Jobs<i class="fa fa-external-link"></i></span> </a></h4>
              </div> <!-- end .days-left -->

            </div> <!-- end .css-table -->
          </div> <!-- end .clients-job-single -->

          <div class="clients-job-single">
            <div class="css-table">

              <div class="checkbox-area css-table-cell">
                <input type="checkbox">
              </div> <!-- end .checkbox-area -->

              <div class="company-logo-area css-table-cell">
                <img src="frontend/img/content/client-logo-1.png" alt="">
              </div> <!-- end .company-logo-area -->

              <div class="table-details css-table-cell">

                <div class="company-name">
                  <h4><a href="#">The Boston Consulting Group</a></h4>
                </div> <!-- end .company-name -->

                <div class="company-description">
                  <h4><a href="#">Professional Services - Consulting Management</a></h4>
                </div> <!-- end .job-description -->

                <div class="job-location-stat">
                  <p><a href="#"><i class="fa fa-map-marker"></i>Manila, Philippines</a></p>

                  <ul class="list-inline pull-right">
                    <li>contact person: <strong>Anthony Carmody</strong></li>
                    <li>Tel: <strong>(02) 123 5678</strong></li>
                    <li>Email: <strong>client@motibu.com</strong></li>
                  </ul>
                </div> <!-- end .job-location-stat -->
              </div> <!-- end .table-details -->

              <div class="clients-job css-table-cell">
                <h4><a href="#">12<span>See Jobs<i class="fa fa-external-link"></i></span> </a></h4>
              </div> <!-- end .days-left -->

            </div> <!-- end .css-table -->
          </div> <!-- end .clients-job-single -->

          <div class="clients-job-single">
            <div class="css-table">

              <div class="checkbox-area css-table-cell">
                <input type="checkbox">
              </div> <!-- end .checkbox-area -->

              <div class="company-logo-area css-table-cell">
                <img src="frontend/img/content/client-logo-2.png" alt="">
              </div> <!-- end .company-logo-area -->

              <div class="table-details css-table-cell">

                <div class="company-name">
                  <h4><a href="#">Genentech</a></h4>
                </div> <!-- end .company-name -->

                <div class="company-description">
                  <h4><a href="#">Biotechnology &amp; Pharmaceuticals -- Biotechnology</a></h4>
                </div> <!-- end .job-description -->

                <div class="job-location-stat">
                  <p><a href="#"><i class="fa fa-map-marker"></i>Manila, Philippines</a></p>

                  <ul class="list-inline pull-right">
                    <li>contact person: <strong>Anthony Carmody</strong></li>
                    <li>Tel: <strong>(02) 123 5678</strong></li>
                    <li>Email: <strong>client@motibu.com</strong></li>
                  </ul>
                </div> <!-- end .job-location-stat -->
              </div> <!-- end .table-details -->

              <div class="clients-job css-table-cell">
                <h4><a href="#">78<span>See Jobs<i class="fa fa-external-link"></i></span> </a></h4>
              </div> <!-- end .days-left -->

            </div> <!-- end .css-table -->
          </div> <!-- end .clients-job-single -->

          <div class="clients-job-single">
            <div class="css-table">

              <div class="checkbox-area css-table-cell">
                <input type="checkbox">
              </div> <!-- end .checkbox-area -->

              <div class="company-logo-area css-table-cell">
                <img src="frontend/img/content/client-logo-3.png" alt="">
              </div> <!-- end .company-logo-area -->

              <div class="table-details css-table-cell">

                <div class="company-name">
                  <h4><a href="#">Bureau Veritas Registre International de Classific</a></h4>
                </div> <!-- end .company-name -->

                <div class="company-description">
                  <h4><a href="#">Testing, Inspection, Certificattion</a></h4>
                </div> <!-- end .job-description -->

                <div class="job-location-stat">
                  <p><a href="#"><i class="fa fa-map-marker"></i>Manila, Philippines</a></p>

                  <ul class="list-inline pull-right">
                    <li>contact person: <strong>Anthony Carmody</strong></li>
                    <li>Tel: <strong>(02) 123 5678</strong></li>
                    <li>Email: <strong>client@motibu.com</strong></li>
                  </ul>
                </div> <!-- end .job-location-stat -->
              </div> <!-- end .table-details -->

              <div class="clients-job css-table-cell">
                <h4><a href="#">252<span>See Jobs<i class="fa fa-external-link"></i></span> </a></h4>
              </div> <!-- end .days-left -->

            </div> <!-- end .css-table -->
          </div> <!-- end .clients-job-single -->

          <div class="clients-job-single">
            <div class="css-table">

              <div class="checkbox-area css-table-cell">
                <input type="checkbox">
              </div> <!-- end .checkbox-area -->

              <div class="company-logo-area css-table-cell">
                <img src="frontend/img/content/client-logo-4.png" alt="">
              </div> <!-- end .company-logo-area -->

              <div class="table-details css-table-cell">

                <div class="company-name">
                  <h4><a href="#">Dairy Farm International Holdings</a></h4>
                </div> <!-- end .company-name -->

                <div class="company-description">
                  <h4><a href="#">Retail</a></h4>
                </div> <!-- end .job-description -->

                <div class="job-location-stat">
                  <p><a href="#"><i class="fa fa-map-marker"></i>Manila, Philippines</a></p>

                  <ul class="list-inline pull-right">
                    <li>contact person: <strong>Anthony Carmody</strong></li>
                    <li>Tel: <strong>(02) 123 5678</strong></li>
                    <li>Email: <strong>client@motibu.com</strong></li>
                  </ul>
                </div> <!-- end .job-location-stat -->
              </div> <!-- end .table-details -->

              <div class="clients-job css-table-cell">
                <h4><a href="#">96<span>See Jobs<i class="fa fa-external-link"></i></span> </a></h4>
              </div> <!-- end .days-left -->

            </div> <!-- end .css-table -->
          </div> <!-- end .clients-job-single -->

          <div class="clients-job-single">
            <div class="css-table">

              <div class="checkbox-area css-table-cell">
                <input type="checkbox">
              </div> <!-- end .checkbox-area -->

              <div class="company-logo-area css-table-cell">
                <img src="frontend/img/content/client-logo-5.png" alt="">
              </div> <!-- end .company-logo-area -->

              <div class="table-details css-table-cell">

                <div class="company-name">
                  <h4><a href="#">Aspen Pharmacare Holdings</a></h4>
                </div> <!-- end .company-name -->

                <div class="company-description">
                  <h4><a href="#">Health care, pharmaceuticals</a></h4>
                </div> <!-- end .job-description -->

                <div class="job-location-stat">
                  <p><a href="#"><i class="fa fa-map-marker"></i>Manila, Philippines</a></p>

                  <ul class="list-inline pull-right">
                    <li>contact person: <strong>Anthony Carmody</strong></li>
                    <li>Tel: <strong>(02) 123 5678</strong></li>
                    <li>Email: <strong>client@motibu.com</strong></li>
                  </ul>
                </div> <!-- end .job-location-stat -->
              </div> <!-- end .table-details -->

              <div class="clients-job css-table-cell">
                <h4><a href="#">27<span>See Jobs<i class="fa fa-external-link"></i></span> </a></h4>
              </div> <!-- end .days-left -->

            </div> <!-- end .css-table -->
          </div> <!-- end .clients-job-single -->

          <div class="clients-job-single">
            <div class="css-table">

              <div class="checkbox-area css-table-cell">
                <input type="checkbox">
              </div> <!-- end .checkbox-area -->

              <div class="company-logo-area css-table-cell">
                <img src="frontend/img/content/client-logo-6.png" alt="">
              </div> <!-- end .company-logo-area -->

              <div class="table-details css-table-cell">

                <div class="company-name">
                  <h4><a href="#">Alexion Pharmaceuticals</a></h4>
                </div> <!-- end .company-name -->

                <div class="company-description">
                  <h4><a href="#">Health care, pharmaceuticals</a></h4>
                </div> <!-- end .job-description -->

                <div class="job-location-stat">
                  <p><a href="#"><i class="fa fa-map-marker"></i>Manila, Philippines</a></p>

                  <ul class="list-inline pull-right">
                    <li>contact person: <strong>Anthony Carmody</strong></li>
                    <li>Tel: <strong>(02) 123 5678</strong></li>
                    <li>Email: <strong>client@motibu.com</strong></li>
                  </ul>
                </div> <!-- end .job-location-stat -->
              </div> <!-- end .table-details -->

              <div class="clients-job css-table-cell">
                <h4><a href="#">78<span>See Jobs<i class="fa fa-external-link"></i></span> </a></h4>
              </div> <!-- end .days-left -->

            </div> <!-- end .css-table -->
          </div> <!-- end .clients-job-single -->

          <div class="clients-job-single">
            <div class="css-table">

              <div class="checkbox-area css-table-cell">
                <input type="checkbox">
              </div> <!-- end .checkbox-area -->

              <div class="company-logo-area css-table-cell">
                <img src="frontend/img/content/client-logo-7.png" alt="">
              </div> <!-- end .company-logo-area -->

              <div class="table-details css-table-cell">

                <div class="company-name">
                  <h4><a href="#">Procter &amp; Gamble</a></h4>
                </div> <!-- end .company-name -->

                <div class="company-description">
                  <h4><a href="#">Consumer goods</a></h4>
                </div> <!-- end .job-description -->

                <div class="job-location-stat">
                  <p><a href="#"><i class="fa fa-map-marker"></i>Manila, Philippines</a></p>

                  <ul class="list-inline pull-right">
                    <li>contact person: <strong>Anthony Carmody</strong></li>
                    <li>Tel: <strong>(02) 123 5678</strong></li>
                    <li>Email: <strong>client@motibu.com</strong></li>
                  </ul>
                </div> <!-- end .job-location-stat -->
              </div> <!-- end .table-details -->

              <div class="clients-job css-table-cell">
                <h4><a href="#">78<span>See Jobs<i class="fa fa-external-link"></i></span> </a></h4>
              </div> <!-- end .days-left -->

            </div> <!-- end .css-table -->
          </div> <!-- end .clients-job-single -->

          <div class="clients-job-single">
            <div class="css-table">

              <div class="checkbox-area css-table-cell">
                <input type="checkbox">
              </div> <!-- end .checkbox-area -->

              <div class="company-logo-area css-table-cell">
                <img src="frontend/img/content/client-logo-8.png" alt="">
              </div> <!-- end .company-logo-area -->

              <div class="table-details css-table-cell">

                <div class="company-name">
                  <h4><a href="#">Sun Pharma Industries</a></h4>
                </div> <!-- end .company-name -->

                <div class="company-description">
                  <h4><a href="#">Consumer goods</a></h4>
                </div> <!-- end .job-description -->

                <div class="job-location-stat">
                  <p><a href="#"><i class="fa fa-map-marker"></i>Manila, Philippines</a></p>

                  <ul class="list-inline pull-right">
                    <li>contact person: <strong>Anthony Carmody</strong></li>
                    <li>Tel: <strong>(02) 123 5678</strong></li>
                    <li>Email: <strong>client@motibu.com</strong></li>
                  </ul>
                </div> <!-- end .job-location-stat -->
              </div> <!-- end .table-details -->

              <div class="clients-job css-table-cell">
                <h4><a href="#">78<span>See Jobs<i class="fa fa-external-link"></i></span> </a></h4>
              </div> <!-- end .days-left -->

            </div> <!-- end .css-table -->
          </div> <!-- end .clients-job-single -->

          <div class="clients-job-single">
            <div class="css-table">

              <div class="checkbox-area css-table-cell">
                <input type="checkbox">
              </div> <!-- end .checkbox-area -->

              <div class="company-logo-area css-table-cell">
                <img src="frontend/img/content/client-logo-9.png" alt="">
              </div> <!-- end .company-logo-area -->

              <div class="table-details css-table-cell">

                <div class="company-name">
                  <h4><a href="#">Falabella</a></h4>
                </div> <!-- end .company-name -->

                <div class="company-description">
                  <h4><a href="#">Retail</a></h4>
                </div> <!-- end .job-description -->

                <div class="job-location-stat">
                  <p><a href="#"><i class="fa fa-map-marker"></i>Manila, Philippines</a></p>

                  <ul class="list-inline pull-right">
                    <li>contact person: <strong>Anthony Carmody</strong></li>
                    <li>Tel: <strong>(02) 123 5678</strong></li>
                    <li>Email: <strong>client@motibu.com</strong></li>
                  </ul>
                </div> <!-- end .job-location-stat -->
              </div> <!-- end .table-details -->

              <div class="clients-job css-table-cell">
                <h4><a href="#">96<span>See Jobs<i class="fa fa-external-link"></i></span> </a></h4>
              </div> <!-- end .days-left -->

            </div> <!-- end .css-table -->
          </div> <!-- end .clients-job-single -->



        </div> <!-- end .assigned-job-list -->

        <div class="pagination-content clearfix">
          <p>Displaying 10 out of 50 items</p>

          <nav>
            <ul class="list-inline">
              <li><a class="btn btn-default first"href="#">first</a></li>
              <li><a class="btn btn-default previous" href="#">Previous</a></li>
              <li class="active"><a class="number" href="#">1</a></li>
              <li><a class="number" href="#">2</a></li>
              <li><a class="number" href="#">3</a></li>
              <li><a class="number" href="#">4</a></li>
              <li><a class="btn btn-default next" href="#">Next</a></li>
              <li><a class="btn btn-default last" href="#">Last</a></li>
            </ul>
          </nav>
        </div> <!-- end .pagination -->

      </div> <!-- end .main-content -->
    </div> <!-- end 9th grid layout -->
  </div> <!-- end .row -->
</div> <!-- end container -->
@stop