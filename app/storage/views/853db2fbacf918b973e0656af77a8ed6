<div id="page-content" class="candidate-profile client-bg-color" ng-controller="CandidateViewJobsController">
  <div class="container">
    <div class="page-content">
      <div class="responsive-tabs dashboard-tabs">

        <ul class="nav nav-tabs application-tab">
          <li class="active"><a href="#approved"  role="tab" data-toggle="tab">Approved</a></li>
          <li><a href="#pending"  role="tab" data-toggle="tab">pending <span>3</span></a></li>
          <li><a href="#rejected"  role="tab" data-toggle="tab">Recejcted <span>1</span></a></li>
        </ul>

        <div class="tab-content">
          

          <div class="tab-pane active" id="approved">
            <div class="row">
              <div class="col-md-3">
                <ul class="client-applicants-tab">
                  <li ng-repeat="job in jobs" ng-class="{'active': selectedJob.id === job.id}">
                    <a href="#" ng-click="$event.preventDefault(); selectJob(job);">
                      {{job.title}}
                      <span class="publish-dae-id">
                        Published: {{job.date_of_entry | date: format: timezone}} <b>|</b> job ID: 29930
                      </span>
                      <span class="location">
                        <i class="fa fa-map-marker"></i>
                        {{job.location}}
                      </span>
                    </a>
                  </li>
                </ul>

              </div> <!-- end .3rd grid layout -->
              <div class="col-md-9">

                <div class="tab-content client-team" ng-if="selectedJob.id">
                  <div class="tab-pane active" id="quality-engineer">

                    
                    <div class="candidate-description client-description applicants-content">

                      <div class="language-print applictions-content clearfix">
                      
                          <div class="pull-left">
                            <h5>{{selectedJob.title}}</h5>
                            <a href="#">San Francisco</a>
                          </div>

                          <ul class="list-inline pull-right">
                          
                            <li class="print"><a href="#"><i class="fa fa-share"></i></a></li>
                            <li class="star-rating"><a href="#"><i class="fa fa-star"></i></a></li>
                          </ul>
                          

                    

                        
                      </div> <!-- end .language-print -->

                      <div class="candidate-details">

                        <div class="toggle-content-client">

                          <p ng-bind-html="selectedJob.about"></p>

                          <div class="candidate-skills">
                            <div class="candidate-title mt40" ng-repeat="cat in skillCategories">
                              <h5>{{getLocalized('cat.name')}}</h5>
                              <div class="row mb20" ng-repeat="skill in cat.skills">
                                <div class="col-md-4 toggle">
                                  <a href="#" toggle-skill>{{getLocalized('skill.name')}}</a>
                                </div> <!-- end .grid layout -->

                                <div class="col-md-8">
                                  <div class="progress-bar clearfix">
                                    <div class="progress-bar-inner"><span ng-style="{width:skill.level+'%'}"></span></div>
                                  </div>

                                  <div class="toggle-content">
                                      <p>{{skill.description}}</p>

                                  </div> <!-- end .toggle-content -->
                                </div> <!-- end .grid layout -->

                              </div> <!-- end .row -->
                            </div>

                          <div class="additional-skills" ng-if="selectedJob.inline_skills_array.length>0">
                              <div class="candidate-title mt40">
                                <h5>Additional Requirements</h5>
                              </div>

                            <ul class="list-inline">
                              <li ng-repeat="skill in selectedJob.inline_skills_array track by $index"><a href="#">{{skill}}</a></li>
                            </ul>
                           <!-- end .addintional-skills -->

                          </div> <!-- end .candidate-skills -->

                          <div class="apply-share clearfix">

                            <ul class="list-inline pull-left job-preview-social-link">
                              <li class="share">Share:</li>
                              <li class="facebook-color"><a href="#"><i class="fa fa-facebook"></i></a></li>
                              <li class="twitt-color"><a href="#"><i class="fa fa-twitter"></i></a></li>
                              <li class="pinterest-color"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                          </div>
                          <!-- end .apply-share -->
                        </div>
                        <!-- end .toggle-content-client -->


                        <div class="toggle-details text-right">
                          <a class="btn btn-toggle" href="#">Info</a>

                        </div>
                        <!-- end .toggle-details -->
                      </div> <!-- end .candidate-details -->

                    </div> <!-- end .candidate-description -->

                      <div class="conversation-content">

                         <div class="mail-banner conversation-banner">
                           <div class="editing-link">
                             <h6>Conversation</h6>
                           </div> <!-- end .editing-link -->
                         </div> <!-- end .mail-banner  -->

                         <div class="message-block">
                           <textarea name="" id="" cols="20" rows="10" placeholder="Your message here..." ng-model="messageBody"></textarea>

                           <div class="editing-link">
                             <button class="btn file-type pull-left"><i class="fa fa-paperclip"></i>
                                <input type="file">
                             </button>

                             <ul class="list-inline pull-left message-sender">
                                <li><a href="#">
                                        <img src="../frontend/img/content/candidate-profile.jpg" alt="">
                                  </a>
                                </li>

                                <li>
                                    <a href="#">
                                         <img src="../frontend/img/content/candidate-profile.jpg" alt="">
                                    </a>
                                </li>

                                <li>
                                    <a href="#"><i class="fa fa-plus"></i></a>
                                </li>
                              </ul>


                              <button class="btn btn-default pull-right" ng-click="sendMessage()">Send Message</button>


                           </div> <!-- end .editing-link -->
                           
                         </div> <!-- end .message-block  --> 

                         <div class="older-reply">

                           <div class="mail-single" ng-repeat="message in messages">
                             <img src="../frontend/img/content/candidate-profile.jpg" alt="">

                             <div class="mail-details">
                               <h6 class="author-name"><a href="#">{{message.sender.first_name+' '+message.sender.last_name}}</a></h6>

                               <p class="mail-dec">{{message.payload}}</p>
                             </div> <!-- end .details -->

                             <div class="mail-checkbox">
                               <p class="date">Nov 19, 2015 - 19.05</p>
                             </div>

                           </div> <!-- end .mail-single -->

                           <div class="mail-single" ng-if="0">
                             <img src="../frontend/img/content/candidate-profile.jpg" alt="">

                             <div class="mail-details">
                               <h6 class="author-name"><a href="#">Brad Frost</a> <span>Attached 3 image</span></h6>

                               <div class="mail-dec">
                                  <figure>
                                    <img src="../frontend/img/content/candidate-profile.jpg" alt="">
                                    
                                    <figcaption>
                                      <a href="#"><i class="fa fa-download"></i></a>
                                    </figcaption>
                                    
                                  </figure>

                                  <figure>
                                    <img src="../frontend/img/content/candidate-profile.jpg" alt="">
                                    
                                    <figcaption>
                                      <a href="#"><i class="fa fa-download"></i></a>
                                    </figcaption>
                                    
                                  </figure>
                                 
                               </div>
                             </div> <!-- end .details -->

                             <div class="mail-checkbox">
                               <p class="date">Nov 19, 2015 - 19.05</p>
                             </div>

                           </div> <!-- end .mail-single -->

                         </div> <!-- end .older-reply  --> 


                         
                      </div> <!-- end .conversation-content  --> 

                             

                    
                  </div> <!-- end #hr-managers -->
                  <div class="tab-pane" id="it-auditor">

                    



                  </div> <!-- end #recruiters tab-pane -->

                  <div class="tab-pane" id="financial-analyst">

                    


                  </div> <!-- end #administration tab-pane -->

                  <div class="tab-pane" id="compuer-scientist">

                    





                  </div> <!-- end #administration tab-pane -->


                </div> <!-- end client-team tab-content -->

              </div> <!-- end .9th grid layout -->

            </div> <!-- end .row -->
          </div> <!-- end .tab-pane -->

          <div class="tab-pane" id="pending"></div>
          <div class="tab-pane" id="rejectged"></div>


          
        </div> <!-- end .tab-content -->
      </div> <!-- end .responsive-tabs.dashboard-tabs -->

    </div> <!-- end .page-content -->
  </div> <!-- end .container -->
</div> <!-- end #page-content -->
