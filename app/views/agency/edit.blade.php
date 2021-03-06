@extends('layouts.partial')

@section('content')
  <div id="page-content" ng-controller="AgencyEditController">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 page-content">
          <div class="responsive-tabs dashboard-tabs">

            <div class="tab-content">
              <div class="tab-pane active" id="agency-profile-tab">

                <h3 class="tab-title">Agency Profile
                  <span>Information</span>

                </h3>

                <div class="information-form">
                  <form class="default-form">

                    <div class="single-content">
                      <label for="company-name"><span>*</span>Company Name</label>

                      <div class="company-name">

                        <input type="text" placeholder="" ng-model="agency.name">

                      </div>
                    </div> <!-- end .single-content -->


                    <div class="single-content">

                      <label for="industry"><span>*</span>Industry</label>

                      <div class="industry">
                        <select>
                          <option value="#">Apparel &amp; Accessories</option>
                          <option value="#">Basic</option>
                          <option value="#">Free</option>
                          <option value="#">Premium</option>
                        </select>

                      </div>
                    </div> <!-- end .single-content -->

                    <div class="single-content textarea-content mt60">

                      <label for="sectors"><span>*</span>Company Description</label>

                      <div class="textarea-editor">
                        <textarea name="area" id="editor" cols="40" ng-model="agency.description"></textarea>

                        <p>You can add HTML content or input your HTML file <a href="#" class="btn btn-default">Import</a></p>
                      </div>

                    </div> <!-- end .single-content -->


                    <div class="single-content location-content">

                      <label for="sectors"><span>*</span>Location</label>

                      <div class="location-details">
                        <div class="location-one clearfix">

                          <div class="location-select">
                            <select>
                              <option value="#">Country</option>
                              <option value="#">None</option>
                              <option value="#">Free</option>
                              <option value="#">Premium</option>
                            </select>
                          </div>

                          <div class="city">
                            <input type="text" placeholder="City">
                          </div>

                          <div class="zip-code">
                            <input type="text" placeholder="Zip Code">
                          </div>

                          <div class="street-name">
                            <input type="text" placeholder="Street name &amp; Number (optional)">
                          </div>

                          <div class="unit-name">
                            <input type="text" placeholder="Unit # (optional)">
                          </div>

                          <div class="floor">
                            <input type="text" placeholder="Floor (optional)">
                          </div>

                        </div> <!-- end .location-one -->

                        <button class="btn btn-primary"><i class="fa fa-map-marker"></i>Add Office</button>

                      </div> <!-- end .location-details -->
                    </div> <!-- end .single-content -->


                    <div class="single-content">

                      <label for="employees"><span>*</span>Number of employees</label>

                      <div class="employees">
                        <select ng-model="agency.num_employees">
                          <option value="50">0 - 50</option>
                          <option value="100">51 - 100</option>
                          <option value="150">101 - 150</option>
                          <option value="9001">150+</option>
                        </select>

                      </div>
                    </div> <!-- end .single-content -->


                    <div class="single-content">
                      <label for="legal-entity"><span>*</span>Legal Entity</label>

                      <div class="legal-entity">

                        <input type="text" placeholder="" ng-model="agency.legal_entity">

                      </div>
                    </div> <!-- end .single-content -->

                    <div class="single-content">
                      <label for="registration-number"><span>*</span>Company Registration Number</label>

                      <div class="registration-number">

                        <input type="text" placeholder="" ng-model="agency.reg_no">

                      </div>
                    </div> <!-- end .single-content -->
<!-- 
                    <div class="single-content">
                      <label for="service"><span>*</span>Service</label>

                      <div class="service">

                        <input type="text" name="tags" id="tags" ng-model="agency.legal_entity">

                      </div>
                    </div> <!-- end .single-content -->
 

                    <div class="single-content operating-hours" style="display:none;">
                      <label for="operation-hours"><span>*</span>Operating Hours</label>

                      <div class="operating-table">

                        <div class="table-title">
                          <p>Day</p>
                          <p class="title-form">From</p>
                          <p class="title-to">To</p>
                          <p>Delete</p>
                        </div>

                        <div class="table-content">
                          <div class="table-content-single">

                            <div class="dayname">
                              <p>Monday</p>
                            </div>

                            <div class="time-from">
                              <div class="start-time">
                                <select>
                                  <option value="#">09</option>
                                  <option value="#">10</option>
                                  <option value="#">11</option>
                                  <option value="#">12</option>
                                </select>
                              </div>
                              <div class="separator">
                                :
                              </div>

                              <div class="end-time">
                                <select>
                                  <option value="#">15</option>
                                  <option value="#">16</option>
                                  <option value="#">17</option>
                                  <option value="#">18</option>
                                </select>
                              </div>
                            </div> <!-- end .time-from -->


                            <div class="time-to">
                              <div class="start-time">
                                <select>
                                  <option value="#">09</option>
                                  <option value="#">10</option>
                                  <option value="#">11</option>
                                  <option value="#">12</option>
                                </select>
                              </div>
                              <div class="separator">
                                :
                              </div>

                              <div class="end-time">
                                <select>
                                  <option value="#">15</option>
                                  <option value="#">16</option>
                                  <option value="#">17</option>
                                  <option value="#">18</option>
                                </select>
                              </div>
                            </div> <!-- end .time-to -->


                            <div class="delete">
                              <a href="#"><i class="fa fa-times"></i></a>
                            </div>

                          </div> <!-- end .table-content-single -->


                          <div class="table-content-single">

                            <div class="dayname">
                              <p>Tuesday</p>
                            </div>

                            <div class="time-from">
                              <div class="start-time">
                                <select>
                                  <option value="#">09</option>
                                  <option value="#">10</option>
                                  <option value="#">11</option>
                                  <option value="#">12</option>
                                </select>
                              </div>
                              <div class="separator">
                                :
                              </div>

                              <div class="end-time">
                                <select>
                                  <option value="#">15</option>
                                  <option value="#">16</option>
                                  <option value="#">17</option>
                                  <option value="#">18</option>
                                </select>
                              </div>
                            </div> <!-- end .time-from -->


                            <div class="time-to">
                              <div class="start-time">
                                <select>
                                  <option value="#">09</option>
                                  <option value="#">10</option>
                                  <option value="#">11</option>
                                  <option value="#">12</option>
                                </select>
                              </div>
                              <div class="separator">
                                :
                              </div>

                              <div class="end-time">
                                <select>
                                  <option value="#">15</option>
                                  <option value="#">16</option>
                                  <option value="#">17</option>
                                  <option value="#">18</option>
                                </select>
                              </div>
                            </div> <!-- end .time-to -->


                            <div class="delete">
                              <a href="#"><i class="fa fa-times"></i></a>
                            </div>

                          </div> <!-- end .table-content-single -->


                          <div class="table-content-single">

                            <div class="dayname">
                              <p>Wednesday</p>
                            </div>

                            <div class="time-from">
                              <div class="start-time">
                                <select>
                                  <option value="#">09</option>
                                  <option value="#">10</option>
                                  <option value="#">11</option>
                                  <option value="#">12</option>
                                </select>
                              </div>
                              <div class="separator">
                                :
                              </div>

                              <div class="end-time">
                                <select>
                                  <option value="#">15</option>
                                  <option value="#">16</option>
                                  <option value="#">17</option>
                                  <option value="#">18</option>
                                </select>
                              </div>
                            </div> <!-- end .time-from -->


                            <div class="time-to">
                              <div class="start-time">
                                <select>
                                  <option value="#">09</option>
                                  <option value="#">10</option>
                                  <option value="#">11</option>
                                  <option value="#">12</option>
                                </select>
                              </div>
                              <div class="separator">
                                :
                              </div>

                              <div class="end-time">
                                <select>
                                  <option value="#">15</option>
                                  <option value="#">16</option>
                                  <option value="#">17</option>
                                  <option value="#">18</option>
                                </select>
                              </div>
                            </div> <!-- end .time-to -->


                            <div class="delete">
                              <a href="#"><i class="fa fa-times"></i></a>
                            </div>

                          </div> <!-- end .table-content-single -->


                          <div class="table-content-single">

                            <div class="dayname">
                              <p>Thursday</p>
                            </div>

                            <div class="time-from">
                              <div class="start-time">
                                <select>
                                  <option value="#">09</option>
                                  <option value="#">10</option>
                                  <option value="#">11</option>
                                  <option value="#">12</option>
                                </select>
                              </div>
                              <div class="separator">
                                :
                              </div>

                              <div class="end-time">
                                <select>
                                  <option value="#">15</option>
                                  <option value="#">16</option>
                                  <option value="#">17</option>
                                  <option value="#">18</option>
                                </select>
                              </div>
                            </div> <!-- end .time-from -->


                            <div class="time-to">
                              <div class="start-time">
                                <select>
                                  <option value="#">09</option>
                                  <option value="#">10</option>
                                  <option value="#">11</option>
                                  <option value="#">12</option>
                                </select>
                              </div>
                              <div class="separator">
                                :
                              </div>

                              <div class="end-time">
                                <select>
                                  <option value="#">15</option>
                                  <option value="#">16</option>
                                  <option value="#">17</option>
                                  <option value="#">18</option>
                                </select>
                              </div>
                            </div> <!-- end .time-to -->


                            <div class="delete">
                              <a href="#"><i class="fa fa-times"></i></a>
                            </div>

                          </div> <!-- end .table-content-single -->


                          <div class="table-content-single">

                            <div class="dayname">
                              <p>Friday</p>
                            </div>

                            <div class="time-from">
                              <div class="start-time">
                                <select>
                                  <option value="#">09</option>
                                  <option value="#">10</option>
                                  <option value="#">11</option>
                                  <option value="#">12</option>
                                </select>
                              </div>
                              <div class="separator">
                                :
                              </div>

                              <div class="end-time">
                                <select>
                                  <option value="#">15</option>
                                  <option value="#">16</option>
                                  <option value="#">17</option>
                                  <option value="#">18</option>
                                </select>
                              </div>
                            </div> <!-- end .time-from -->


                            <div class="time-to">
                              <div class="start-time">
                                <select>
                                  <option value="#">09</option>
                                  <option value="#">10</option>
                                  <option value="#">11</option>
                                  <option value="#">12</option>
                                </select>
                              </div>
                              <div class="separator">
                                :
                              </div>

                              <div class="end-time">
                                <select>
                                  <option value="#">15</option>
                                  <option value="#">16</option>
                                  <option value="#">17</option>
                                  <option value="#">18</option>
                                </select>
                              </div>
                            </div> <!-- end .time-to -->


                            <div class="delete">
                              <a href="#"><i class="fa fa-times"></i></a>
                            </div>

                          </div> <!-- end .table-content-single -->


                          <div class="table-content-single">

                            <div class="dayname">
                              <p>Saturday</p>
                            </div>

                            <div class="time-from">
                              <div class="start-time">
                                <select>
                                  <option value="#">09</option>
                                  <option value="#">10</option>
                                  <option value="#">11</option>
                                  <option value="#">12</option>
                                </select>
                              </div>
                              <div class="separator">
                                :
                              </div>

                              <div class="end-time">
                                <select>
                                  <option value="#">15</option>
                                  <option value="#">16</option>
                                  <option value="#">17</option>
                                  <option value="#">18</option>
                                </select>
                              </div>
                            </div> <!-- end .time-from -->


                            <div class="time-to">
                              <div class="start-time">
                                <select>
                                  <option value="#">09</option>
                                  <option value="#">10</option>
                                  <option value="#">11</option>
                                  <option value="#">12</option>
                                </select>
                              </div>
                              <div class="separator">
                                :
                              </div>

                              <div class="end-time">
                                <select>
                                  <option value="#">15</option>
                                  <option value="#">16</option>
                                  <option value="#">17</option>
                                  <option value="#">18</option>
                                </select>
                              </div>
                            </div> <!-- end .time-to -->


                            <div class="delete">
                              <a href="#"><i class="fa fa-times"></i></a>
                            </div>

                          </div> <!-- end .table-content-single -->


                          <div class="table-content-single">

                            <div class="dayname">
                              <p>Sunday</p>
                            </div>

                            <div class="time-from">
                              <div class="start-time">
                                <select>
                                  <option value="#">09</option>
                                  <option value="#">10</option>
                                  <option value="#">11</option>
                                  <option value="#">12</option>
                                </select>
                              </div>
                              <div class="separator">
                                :
                              </div>

                              <div class="end-time">
                                <select>
                                  <option value="#">15</option>
                                  <option value="#">16</option>
                                  <option value="#">17</option>
                                  <option value="#">18</option>
                                </select>
                              </div>
                            </div> <!-- end .time-from -->


                            <div class="time-to">
                              <div class="start-time">
                                <select>
                                  <option value="#">09</option>
                                  <option value="#">10</option>
                                  <option value="#">11</option>
                                  <option value="#">12</option>
                                </select>
                              </div>
                              <div class="separator">
                                :
                              </div>

                              <div class="end-time">
                                <select>
                                  <option value="#">15</option>
                                  <option value="#">16</option>
                                  <option value="#">17</option>
                                  <option value="#">18</option>
                                </select>
                              </div>
                            </div> <!-- end .time-to -->


                            <div class="delete">
                              <a href="#"><i class="fa fa-times"></i></a>
                            </div>

                          </div> <!-- end .table-content-single -->
                        </div> <!-- end .table-content -->

                      </div> <!-- end .operating-table -->
                    </div> <!-- end .single-content -->

                    <div class="single-content contact-content">
                      <label for="contacts"><span>*</span>Contacts</label>

                      <div class="contacts">
                        <div class="radio-inputs">
                          <span class="radio-input active">
                            <input id="contact-form" type="radio" name="type" value="contact form" checked="checked">
                            <label for="contact-form">Contact Form</label>
                          </span>
                          <span class="radio-input">
                            <input id="email" type="radio" name="type" value="Email">
                            <label for="email">Email</label>
                          </span>
                          <span class="radio-input">
                            <input id="telephone" type="radio" name="type" value="Telephone">
                            <label for="telephone">Telephone</label>
                          </span>
                        </div>

                        <div class="department-address">

                          <div class="department-single clearfix" id="department-1">
                            <div class="department-title">
                              <p>Department 1:</p>
                            </div>

                            <div class="department-name">
                              <input type="text" placeholder="Department Name">
                            </div>

                            <div class="email">
                              <input type="email" placeholder="Email">
                            </div>

                            <div class="telephone">
                              <input type="text" placeholder="Tel">
                            </div>

                            <div class="fax">
                              <input type="text" placeholder="Fax">
                            </div>
                          </div> <!-- end .department-single -->

                          <div class="department-single clearfix" id="department-2">
                            <div class="department-title">
                              <p>Department 2:</p>
                            </div>

                            <div class="department-name">
                              <input type="text" placeholder="Department Name">
                            </div>

                            <div class="email">
                              <input type="email" placeholder="Email">
                            </div>

                            <div class="telephone">
                              <input type="text" placeholder="Tel">
                            </div>

                            <div class="fax">
                              <input type="text" placeholder="Fax">
                            </div>
                          </div> <!-- end .department-single -->

                          <div class="department-single hide clearfix" id="department-3">
                            <div class="department-title">
                              <p>Department 3:</p>
                            </div>

                            <div class="department-name">
                              <input type="text" placeholder="Department Name">
                            </div>

                            <div class="email">
                              <input type="email" placeholder="Email">
                            </div>

                            <div class="telephone">
                              <input type="text" placeholder="Tel">
                            </div>

                            <div class="fax">
                              <input type="text" placeholder="Fax">
                            </div>
                          </div> <!-- end .department-single -->

                          <div class="department-single hide clearfix" id="department-4">
                            <div class="department-title">
                              <p>Department 4:</p>
                            </div>

                            <div class="department-name">
                              <input type="text" placeholder="Department Name">
                            </div>

                            <div class="email">
                              <input type="email" placeholder="Email">
                            </div>

                            <div class="telephone">
                              <input type="text" placeholder="Tel">
                            </div>

                            <div class="fax">
                              <input type="text" placeholder="Fax">
                            </div>
                          </div> <!-- end .department-single -->

                        </div> <!-- end .department-address -->

                        <div class="add-dept">
                          <a href="#"><i class="fa fa-sitemap"></i>Add Department</a>
                          <p>The Emails will be inserted a contact form therefor won't be visible to the public</p>
                        </div>
                      </div> <!-- end .contacts -->

                    </div> <!-- end .single-content -->


                    <div class="single-content social-networks-content">
                      <label for="contacts">Social networks</label>

                      <div class="social-networks">

                        <div class="social-facebook single-network">
                          <i class="fa fa-facebook"></i>

                          <div>
                            <input type="text" placeholder="Facebook" ng-model="agency.social_facebook">
                          </div>
                        </div>

                        <div class="social-twitter single-network">
                          <i class="fa fa-twitter"></i>

                          <div>
                            <input type="text" placeholder="Twitter" ng-model="agency.social_twitter">
                          </div>
                        </div>

                        <div class="social-google-plus single-network">
                          <i class="fa fa-google-plus"></i>

                          <div>
                            <input type="text" placeholder="Google+" ng-model="agency.social_google_plus">
                          </div>
                        </div>

                        <div class="social-linkedin single-network">
                          <i class="fa fa-linkedin"></i>

                          <div>
                            <input type="text" placeholder="Linkedin" ng-model="agency.social_linked_in">
                          </div>
                        </div>

                        <div class="social-youtube single-network">
                          <i class="fa fa-youtube"></i>

                          <div>
                            <input type="text" placeholder="Youtube" ng-model="agency.social_youtube">
                          </div>
                        </div>


                        <div class="social-instagram single-network">
                          <i class="fa fa-instagram"></i>

                          <div>
                            <input type="text" placeholder="Instagram" ng-model="agency.social_instagram">
                          </div>
                        </div>

                      </div> <!-- end .social-networks -->
                    </div> <!-- end .single-content -->


                    <div class="single-content company-logo-content mt60">
                      <label for="company-logo">Company Logo</label>

                      <div class="company-logo">
                        <div class="logo-preview-area">
                          <img ng-src="{{agency.logo_url}}" alt=""/>
                        </div>

                        <!-- <a href="#" class="btn btn-default">Choose Image</a> -->

                        <button class="btn btn-default">Choose Image
                          <input name="logo_file" data-file-input="agency.logo_filename" type="file">
                        </button>

                      </div> <!-- end company-logo -->
                    </div> <!-- end .single-content -->
                    

                    <div class="single-content company-banner-content">
                      <label for="company-logo">Company Banner</label>

                      <div class="company-banner">
                        <div class="banner-preview-area">
                          <img src="{{agency.banner_url}}" alt=""/>
                        </div>

                        <button class="btn btn-default">Choose Image
                          <input name="banner_file" data-file-input="agency.banner_filename" type="file">
                        </button>

                      </div> <!-- end .company-banner -->
                    </div> <!-- end .single-content -->


                    <div class="submit-preview-buttons">
                      <button class="btn btn-default" ng-click="submit()">Save Changes</button>

                      <!-- <a href="#" class="btn btn-black">Preview</a> -->
                    </div> <!-- end .submit-preview-buttons -->

                  </form> <!-- end form -->
                </div> <!-- end information-form -->
              </div> <!-- end .tabe pane -->

            </div>
          </div>

        </div> <!-- end .page-content -->
      </div>
    </div> <!-- end .container -->
  </div> <!-- end #page-content -->
@stop