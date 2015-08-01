@extends('layouts.partial')

@section('content')

<div id="page-content">
	<div class="container" ng-controller="JobSearchController">
		<div class="row">
			<div class="col-sm-3 page-sidebar">
				<aside>
					<div class="white-container mb0">
						<div class="widget sidebar-widget jobs-search-widget">
							<h5 class="widget-title">Search</h5>

							<div class="widget-content">
								
								<div class="col-sm-12">
						<input type="text" placeholder="Type a Category" ng-model="categorysearch"  class="form-control">
						<ul class="fixed-height">
							<li ng-repeat="cat in skillCategories | filter:categorysearch" ng-click="showSkills=true; getSkills(cat)">{{cat.name}}</li>
						</ul>
					</div>

					<div class="col-sm-12">
						<input type="text" placeholder="Type a Skill"  class="form-control"  ng-model="skillsearch">
						<ul class="fixed-height">
							<li ng-repeat="skill in skills | filter:skillsearch" ng-click="addSkill(skill)"><i class="fa fa-check" ng-show="skill.added"></i> {{skill.name}}</li>
						</ul>
					</div>

					<div class="col-sm-12">
						<div class="col-sm-8">
						<div class="hsb-input-2">
							<!-- <input type="text" class="form-control" placeholder="Location"> -->

							<div class="input-icon right">
								<i ng-show="loadingLocations" class="fa fa-refresh fa-spin"></i>
								<input type="text" ng-model="location"
								placeholder="Type in a location" typeahead="address as address.formatted_address for address in getLocation($viewValue)"
								typeahead-loading="loadingLocations" class="form-control">
							</div>

						</div>
						</div>
						<div class="col-sm-4">
							<input type="submit" class="btn btn-default btn-block" value="Search" ng-click="getSearchResult()">
							
							
						</div>
						<ul class="fixed-height">
								<li ng-repeat="cat in selectedSkills">{{cat.name}}</li>
							
						</ul>
					</div>



								<!--<span>I'm looking for a ...</span>

								

								<select class="form-control mt10 mb10">
									<option value="0">Job</option>
									<option value="">Category</option>
									<option value="">Category</option>
									<option value="">Category</option>
									<option value="">Category</option>
								</select>

								<span>in</span>

								<input type="text" class="form-control mt10" placeholder="Location">

								<input type="text" class="form-control mt15 mb15" placeholder="Industry / Role">

								<input type="submit" class="btn btn-default" value="Search">-->
							</div>

							<!-- when click this anchor, filter list needs to show/hide -->
							<a href="#" class="toggle"></a>
						</div>

						<div style="display:none;" class="widget sidebar-widget jobs-filter-widget">
							<h5 class="widget-title">Filter Results</h5>

							<div  class="widget-content">
								<h6>By Region</h6>

								<div>
									<ul class="filter-list">
										<li>
											<a href="#">Asia <span>(1234)</span></a>
											<ul>
												<li>
													<a href="#">Asia <span>(1234)</span></a>
<!-- 
	TOGGLE CONTENT BEGIN
-->
													<ul>
														<li><a href="#">Asia <span>(1234)</span></a></li>
														<li><a href="#">Africa <span>(5678)</span></a></li>
														<li><a href="#">Europe <span>(910)</span></a></li>
														<li><a href="#">North America <span>(347)</span></a></li>
														<li><a href="#">Central America <span>(52)</span></a></li>
														<li><a href="#">South America <span>(117)</span></a></li>
														<li><a href="#">Oceania <span>(736)</span></a></li>
													</ul>
<!-- 
	TOGGLE CONTENT END 
-->
												</li>
												<li><a href="#">Africa <span>(5678)</span></a></li>
												<li><a href="#">Europe <span>(910)</span></a></li>
												<li><a href="#">North America <span>(347)</span></a></li>
												<li><a href="#">Central America <span>(52)</span></a></li>
												<li><a href="#">South America <span>(117)</span></a></li>
												<li><a href="#">Oceania <span>(736)</span></a></li>
											</ul>
										</li>
										<li><a href="#">Africa <span>(5678)</span></a></li>
										<li><a href="#">Europe <span>(910)</span></a></li>
										<li><a href="#">North America <span>(347)</span></a></li>
										<li><a href="#">Central America <span>(52)</span></a></li>
										<li><a href="#">South America <span>(117)</span></a></li>
										<li><a href="#">Oceania <span>(736)</span></a></li>
									</ul>

									<!-- when click this anchor, filter list needs to show/hide -->
									<a href="#" class="toggle"></a>
								</div>

								<h6>By Industry</h6>

								<div>
									<ul class="filter-list">
										<li><a href="#">Administration <span>(75)</span></a></li>
										<li><a href="#">Manufactoring <span>(3741)</span></a></li>
										<li><a href="#">Healthcare &amp; Science <span>(115)</span></a></li>
										<li><a href="#">Media &amp; Creative <span>(347)</span></a></li>
										<li><a href="#">Transportation <span>(52)</span></a></li>
									</ul>

									<a href="#" class="toggle"></a>
								</div>

								<h6>By Type</h6>

								<div>
									<ul class="filter-list">
										<li><a href="#">Banking/Finance <span>(300)</span></a></li>
										<li><a href="#">Administration <span>(758)</span></a></li>
										<li><a href="#">Art/Design/Creative <span>(20)</span></a></li>
										<li><a href="#">Customer Service <span>(165)</span></a></li>
										<li><a href="#">Education/Training <span>(11)</span></a></li>
										<li><a href="#">Banking/Finance <span>(9)</span></a></li>
									</ul>

									<a href="#" class="toggle"></a>
								</div>


								<h6>Type of Contract</h6>

								<div class="checkbox"><label><input type="checkbox"> Full-Time</label></div>
								<div class="checkbox"><label><input type="checkbox"> Part-Time</label></div>
								<div class="checkbox"><label><input type="checkbox"> Freelance</label></div>
								<div class="checkbox"><label><input type="checkbox"> Internship</label></div>

								<h6>Work Experience</h6>

								<div class="checkbox"><label><input type="checkbox"> Not Applicable</label></div>
								<div class="checkbox"><label><input type="checkbox"> Mid-Senior Level</label></div>
								<div class="checkbox"><label><input type="checkbox"> Entry Level</label></div>
								<div class="checkbox"><label><input type="checkbox"> Associate</label></div>
								<div class="checkbox"><label><input type="checkbox"> Director</label></div>
								<div class="checkbox"><label><input type="checkbox"> Internship</label></div>
								<div class="checkbox"><label><input type="checkbox"> Executive</label></div>

								<h6>Work Permit</h6>

								<div class="checkbox"><label><input type="checkbox"> Not Applicable</label></div>
								<div class="checkbox"><label><input type="checkbox"> Mid-Senior Level</label></div>
								<div class="checkbox"><label><input type="checkbox"> Entry Level</label></div>
								<div class="checkbox"><label><input type="checkbox"> Associate</label></div>

								

								
								<h6>Date Posted</h6>

								<!-- need angular slider here -->

								<div class="range-slider clearfix">
									<div class="slider" data-min="1" data-max="60"></div>
									<div class="first-value"><span>1</span> days</div>
									<div class="last-value"><span>60</span> days</div>
								</div>

								<h6>Salary Range</h6>

								<!-- need angular slider here -->

								<div class="range-slider clearfix">
									<div class="slider" data-min="1" data-max="100000"></div>
									<div class="first-value">$ <span>1</span></div>
									<div class="last-value">$ <span>100000</span></div>
								</div>

								<input type="submit" class="btn btn-default mt30" value="Filter">
							</div>
						</div>
					</div>
				</aside>
			</div> <!-- end .page-sidebar -->

			<div class="col-md-9">
      	<h3 class="tab-title">Available Jobs</h3>
      	
        <div class="candidate-description client-description" ng-repeat="job in jobs">

          <div class="language-print client-des clearfix">
            <div class="pull-left">
              <a ng-href="#/job/view/{{job.id}}"><h5>{{job.title}}</h5></a>
              <a href="#">Phoenix, AZ</a>
            </div>
            <ul class="list-inline pull-right">
              <li class="star-rating"><a href="#"><i class="fa fa-star"></i></a></li>
            </ul>
          </div> <!-- end .language-print -->

          <div class="candidate-details">
            <div ng-bind-html="job.about"></div>

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
                    <div class="progress-bar-inner"><span ng-style="{width:skill.level+'%'}"></span></div>
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

            <div class="apply-share clearfix">
              <button class="pull-left btn btn-default" ng-click="apply(job)">Apply for this Job</button>
            </div>
            <!-- end .apply-share -->


            <div class="toggle-details text-right active">
              <a class="btn btn-toggle" href="#">Info</a>

            </div>
            <!-- end .toggle-details -->
          </div> <!-- end .candidate-details -->

        </div> <!-- end .candidate-description -->

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

      </div> <!-- end .9col grid layout -->
		</div>
	</div> <!-- end .container -->
</div> <!-- end #page-content -->


@stop