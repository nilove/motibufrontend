@extends('layouts.partial')

@section('content')

<div id="page-content" ng-controller="CandidateSearchController">
	<div class="container">
		<div class="row">
			<div class="col-sm-3 page-sidebar">
				<aside>
					<div class="white-container mb0">
						<div class="widget sidebar-widget jobs-search-widget">
							<h5 class="widget-title">Search</h5>

							<div class="widget-content">
								<span>Years of experience</span>								
								<input ng-model="experiencefrom" type="text" class="form-control mt10" placeholder="From"/> 
								to 
								<input ng-model="experienceto" type="text" class="form-control mt10" placeholder="TO"/>


								<span>Age</span>								
								<input ng-model="agefrom" type="text" class="form-control mt10" placeholder="From"/> 
								to 
								<input ng-model="ageto" type="text" class="form-control mt10" placeholder="TO"/>


								<span>Expected Salary</span>								
								<input ng-model="salaryfrom" type="text" class="form-control mt10" placeholder="From"/> 
								to 
								<input ng-model="salaryto" type="text" class="form-control mt10" placeholder="TO"/>
								
								<!--<span>Gender</span>								
								<input type="text" class="form-control mt10" placeholder="From"> to
								<input type="text" class="form-control mt10" placeholder="TO">

								<span>I'm looking for a ...</span>

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

							<div class="widget-content">
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

			<div class="col-sm-9 mt30">
				<div class="candidate-description client-description applicants-content" ng-repeat="professional in professionals | filter:filterByExperience | filter:filterByAge | filter:filterByExSalary">
				  
				  <div class="language-print client-des clearfix">
				    <div class="aplicants-pic pull-left">
				      <img ng-src="{{professional.profile_pic_url || '../frontend/img/content/agent-img-1.jpg'}}" alt="">

				      
				    </div>
				    <!-- end .aplicants-pic -->
				    <div class="clearfix">
				      <div class="">
				       	<a ng-if="!isLoggedIn()" data-target="#login-popup" data-toggle="modal">{{ professional.name }}</a> 
				        <a ng-if="getLoginStatus() && !(professional.is_external_vcard == 1)" href="#/candidate/{{professional.profile_id}}/profile">{{ professional.name }}</a>

				        <a ng-if="getLoginStatus() && professional.is_external_vcard == 1" target="_blank" href="{{ professional.profile_url }}">{{ professional.name }}</a>

				      </div>
				    </div>

				    <div class="aplicant-details-show clearfix">
				    	
				      <ul class="list-unstyled pull-left">
				          <li><span>Location: <b class="aplicant-detail">{{professional.residency}}</b></span></li>

				          <li><span>Nationality: <b class="aplicant-detail">{{professional.nationality}}</b></span></li>
				          <li><span>Years of Experience: <b class="aplicant-detail">{{professional.years_of_experience}}</b></span></li>

				          
				        </ul>

				        <ul class="list-unstyled pull-left">
				          <li>
				            <span>Employment Status: <b class="aplicant-detail">{{professional.is_employed}}</b></span>
				          </li>

				          <li>
				            <span>Work Permit: <b class="aplicant-detail">{{professional.has_work_permit}}</b></span>
				          </li>
				        </ul>

				    </div>
				    <!-- end .aplicant-details-show -->
				  </div> <!-- end .language-print -->

				</div> <!-- end .candidate-description -->

				
			</div> <!-- end .page-content -->
		</div>
	</div> <!-- end .container -->
</div> <!-- end #page-content -->

<div class="modal fade modals" id="login-popup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h2 class="modal-title">Log in please</h2>
			</div>
			<div class="modal-body">
				<p>You need to <a  onclick='selfreload("#/login?redirect=1");'>log in</a> or <a  onclick='selfreload("/#/register_agency_step_1")'>register</a> to view this profile :)</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->


@stop