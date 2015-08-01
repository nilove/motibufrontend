	<div class="header-search-bar" ng-controller="landingPageController">
		<div class="container">
			<form>
				<div class="basic-form clearfix">
					<!-- <a href="#" class="toggle"><span></span></a> -->

					

					

					

					

					<div class="col-sm-4">
						<input type="text" placeholder="Type a Category" ng-model="categorysearch"  class="form-control">
						<ul class="fixed-height">
							<li ng-repeat="cat in skillCategories | filter:categorysearch" ng-click="showSkills=true; getSkills(cat)">{{cat.name}}</li>
						</ul>
					</div>

					<div class="col-sm-4">
						<input type="text" placeholder="Type a Skill"  class="form-control"  ng-model="skillsearch">
						<ul class="fixed-height">
							<li ng-repeat="skill in skills | filter:skillsearch" ng-click="addSkill(skill)"><i class="fa fa-check" ng-show="skill.added"></i> {{skill.name}}</li>
						</ul>
					</div>

					<div class="col-sm-4">
						<div class="col-sm-8">
						<div class="hsb-input-2">
							<!-- <input type="text" class="form-control" placeholder="Location"> -->

							<div class="input-icon right">
								<!--<i ng-show="loadingLocations" class="fa fa-refresh fa-spin"></i>
								<input type="text" ng-model="location"
								placeholder="Type in a location" typeahead="address as address.formatted_address for address in getLocation($viewValue)"
								typeahead-loading="loadingLocations" class="form-control">-->

								<input class="form-control"  geolocationinline name="locationname"  type="text" ng-model="locationname" placeholder="Type in a location"/>
                  				<input style="display:none;" id="location_latitude" ng-disabled="!editingProfile" name="location_latitude" ng-model="location_latitude" type="text" placeholder="[Location Latitude]">
                  				<input style="display:none;" id="location_longitude" ng-disabled="!editingProfile" name="location_longitude" ng-model="location_longitude" type="text" placeholder="[Location Longitude]">

							</div>

						</div>
						</div>
						<div class="col-sm-4">
							<input type="submit" class="btn btn-default btn-block" value="Search" ng-click="submitSearch()">
							
							
						</div>
						<ul class="fixed-height">
								<li ng-repeat="cat in selectedSkills">{{cat.name}}</li>
							
						</ul>
					</div>

					
				</div>
			</form>
		</div>
	</div> <!-- end .header-search-bar -->

<?php
/*

	<div class="header-search-bar">
		<div class="container">
			<form>
				<div class="basic-form clearfix">
					<!-- <a href="#" class="toggle"><span></span></a> -->

					<div class="hsb-input-1">
						<input type="text" class="form-control" placeholder="I'm looking for a ...">
					</div>

					<div class="hsb-text-1">in</div>

					<div class="hsb-container">
						<div class="hsb-input-2">
							<input type="text" class="form-control" placeholder="Location">
						</div>

						<div class="hsb-select">
							<select class="form-control">
								<option value="0">Select Category</option>
								<option value="">Category</option>
								<option value="">Category</option>
								<option value="">Category</option>
								<option value="">Category</option>
							</select>
						</div>
					</div>

					<div class="hsb-submit">
						<input type="submit" class="btn btn-default btn-block" value="Search">
					</div>
				</div>

				<div class="advanced-form">
					<div class="container">
						<div class="row">
							<label class="col-md-3">Distance</label>

							<div class="col-md-9">
								<div class="range-slider">
									<div class="slider" data-min="1" data-max="200" data-current="100"></div>
									<div class="last-value"><span>100</span> km</div>
								</div>
							</div>
						</div>

						<div class="row">
							<label class="col-md-3">Rating</label>

							<div class="col-md-9">
								<div class="range-slider">
									<div class="slider" data-min="1" data-max="100" data-current="20"></div>
									<div class="last-value">&gt; <span>20</span> %</div>
								</div>
							</div>
						</div>

						<div class="row">
							<label class="col-md-3">Days Published</label>

							<div class="col-md-9">
								<div class="range-slider">
									<div class="slider" data-min="1" data-max="60" data-current="30"></div>
									<div class="last-value">&lt; <span>30</span></div>
								</div>
							</div>
						</div>

						<div class="row">
							<label class="col-md-3">Location</label>

							<div class="col-md-9">
								<input type="text" class="form-control" placeholder="Switzerland">
							</div>
						</div>

						<div class="row">
							<label class="col-md-3">Industry</label>

							<div class="col-md-9">
								<select class="form-control">
									<option value="">Select Industry</option>
									<option value="">Option 1</option>
									<option value="">Option 2</option>
									<option value="">Option 3</option>
									<option value="">Option 4</option>
									<option value="">Option 5</option>
								</select>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div> <!-- end .header-search-bar -->

	<div class="header-banner">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<div class="header-banner-box register">
						<div class="counter-container">
							<ul class="counter clearfix">
								<li class="zero">0</li>
								<li>3</li>
								<li>5</li>
								<li>1</li>
								<li>0</li>
								<li>9</li>
							</ul>

							<div><span>Jobs</span></div>
						</div>

						<a href="#" class="btn btn-default">Register Now</a>
					</div>
				</div>

				<div class="col-sm-6">
					<div class="header-banner-box post-job">
						<img src="../frontend/img/verified.png" alt="">

						<a href="#" class="btn btn-red">Post a Job</a>
					</div>
				</div>
			</div>
		</div>
	</div> <!-- end .header-banner -->


		<div id="page-content">
			<div class="container">
				<div class="row">
					<div class="col-sm-8">
						<div class="title-lines">
							<h3 class="mt0">Find a Job Per</h3>
						</div>

						<div class="find-job-tabs responsive-tabs homepage-tab">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#find-job-tabs-map" role="tab" data-toggle="tab">Map</a></li>
								<li><a href="#find-job-tabs-industry" role="tab" data-toggle="tab">Industry</a></li>
								<li><a href="#find-job-tabs-role" role="tab" data-toggle="tab">Type</a></li>
								<li><a href="#find-job-tabs-country" role="tab" data-toggle="tab">Country</a></li>
							</ul>

							<div class="tab-content home-tab">
								<div class="tab-pane active" id="find-job-tabs-map">
									<div id="find-job-map-tab" class="p5"></div>

									<hr class="m0 primary">

									<div class="row p30">
										<div class="col-sm-6">
											<ul class="filter-list">
												<li><a href="#">Asia <span>(1234)</span></a></li>
												<li><a href="#">Africa <span>(5678)</span></a></li>
												<li><a href="#">Europe <span>(910)</span></a></li>
												<li><a href="#">North America <span>(347)</span></a></li>
											</ul>
										</div>

										<div class="col-sm-6">
											<ul class="filter-list">
												<li><a href="#">Central America <span>(52)</span></a></li>
												<li><a href="#">South America <span>(117)</span></a></li>
												<li><a href="#">Oceania <span>(736)</span></a></li>
											</ul>
										</div>
									</div>
								</div>

								<div class="tab-pane" id="find-job-tabs-industry">
									<div class="row p30">
										<div class="col-sm-6">
											<h6 class="mt0">Administrative and Support Services</h6>

											<ul class="filter-list">
												<li><a href="#">Support Services <span>(34)</span></a></li>
												<li><a href="#">Consulting Services <span>(142)</span></a></li>
												<li><a href="#">Customer Service <span>(67)</span></a></li>
												<li><a href="#">Employment Placement <span>(24)</span></a></li>
												<li><a href="#">Agencies/Recruiting <span>(113)</span></a></li>
												<li><a href="#">Human Resources <span>(27)</span></a></li>
												<li><a href="#">Administration <span>(57)</span></a></li>
												<li><a href="#">Contracts/Purchasing <span>(29)</span></a></li>
												<li><a href="#">Secretarial <span>(22)</span></a></li>
												<li><a href="#">Security <span>(26)</span></a></li>
												<li><a href="#">Telemarketing <span>(4)</span></a></li>
												<li><a href="#">Translation <span>(12)</span></a></li>
												<li><a href="#">Management <span>(70)</span></a></li>
												<li><a href="#">Business Support <span>(29)</span></a></li>
											</ul>

											<h6>Healthcare and Science</h6>

											<ul class="filter-list">
												<li><a href="#">Pharmaceutical <span>(42)</span></a></li>
												<li><a href="#">Manufacturing <span>(149)</span></a></li>
												<li><a href="#">Mechanical <span>(28)</span></a></li>
												<li><a href="#">Technical/Maintenance <span>(40)</span></a></li>
												<li><a href="#">Lubricants/Greases Blending <span>(10)</span></a></li>
												<li><a href="#">Textiles <span>(10)</span></a></li>
												<li><a href="#">Aerospace and Defense <span>(14)</span></a></li>
											</ul>
										</div>

										<div class="col-sm-6">
											<h6 class="mt0">Manufacturing and Industrial</h6>

											<ul class="filter-list">
												<li><a href="#">Agriculture/Forestry/Fishing <span>(42)</span></a></li>
												<li><a href="#">Installation/Maintenance <span>(37)</span></a></li>
												<li><a href="#">Manufacturing and Production <span>(96)</span></a></li>
												<li><a href="#">Mining <span>(9)</span></a></li>
												<li><a href="#">Safety/Environment <span>(21)</span></a></li>
												<li><a href="#">Industrial <span>(184)</span></a></li>
												<li><a href="#">Manufacturing <span>(149)</span></a></li>
												<li><a href="#">Mechanical <span>(28)</span></a></li>
												<li><a href="#">Technical/Maintenance <span>(40)</span></a></li>
												<li><a href="#">Lubricants/Greases Blending <span>(10)</span></a></li>
												<li><a href="#">Textiles <span>(10)</span></a></li>
												<li><a href="#">Aerospace and Defense <span>(14)</span></a></li>
											</ul>

											<h6>Healthcare and Science</h6>

											<ul class="filter-list">
												<li><a href="#">Pharmaceutical <span>(42)</span></a></li>
												<li><a href="#">Manufacturing <span>(149)</span></a></li>
												<li><a href="#">Mechanical <span>(28)</span></a></li>
												<li><a href="#">Technical/Maintenance <span>(40)</span></a></li>
												<li><a href="#">Lubricants/Greases Blending <span>(10)</span></a></li>
												<li><a href="#">Textiles <span>(10)</span></a></li>
												<li><a href="#">Aerospace and Defense <span>(14)</span></a></li>
											</ul>
										</div>
									</div>
								</div>

								<div class="tab-pane" id="find-job-tabs-role">
									<div class="p30">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum, harum, optio, repudiandae voluptatum illum et ipsam quisquam at dolore illo eaque odio inventore quos esse reiciendis laudantium nobis aperiam iure!</p>

										<div class="row">
											<div class="col-sm-6">
												<ul class="filter-list">
													<li><a href="#">Accounting/Banking/Finance Jobs <span>(581)</span></a></li>
													<li><a href="#">Administration Jobs <span>(406)</span></a></li>
													<li><a href="#">Art/Design/Creative Jobs <span>(176)</span></a></li>
													<li><a href="#">Customer Service Jobs <span>(334)</span></a></li>
													<li><a href="#">Education/Training Jobs <span>(180)</span></a></li>
													<li><a href="#">Engineering Jobs <span>(978)</span></a></li>
													<li><a href="#">Healthcare/Medical Jobs <span>(131)</span></a></li>
													<li><a href="#">Human Resources/Personnel Jobs <span>(318)</span></a></li>
													<li><a href="#">Law/Legal Jobs <span>(61)</span></a></li>
													<li><a href="#">Logistics Jobs <span>(144)</span></a></li>
													<li><a href="#">Management Jobs <span>(743)</span></a></li>
													<li><a href="#">Law/Legal Jobs <span>(61)</span></a></li>
													<li><a href="#">Logistics Jobs <span>(144)</span></a></li>
													<li><a href="#">Management Jobs <span>(743)</span></a></li>
												</ul>
											</div>

											<div class="col-sm-6">
												<ul class="filter-list">
													<li><a href="#">Marketing/PR Jobs <span>(329)</span></a></li>
													<li><a href="#">Other Jobs <span>(326)</span></a></li>
													<li><a href="#">Purchasing/Procurement Jobs <span>(130)</span></a></li>
													<li><a href="#">Quality Control Jobs <span>(93)</span></a></li>
													<li><a href="#">Research Jobs <span>(33)</span></a></li>
													<li><a href="#">Safety Jobs <span>(72)</span></a></li>
													<li><a href="#">Sales Jobs <span>(1061)</span></a></li>
													<li><a href="#">Secretarial Jobs <span>(155)</span></a></li>
													<li><a href="#">Support Services Jobs <span>(744)</span></a></li>
													<li><a href="#">Technology/IT Jobs <span>(546)</span></a></li>
													<li><a href="#">Writing/Editing Jobs <span>(19)</span></a></li>
													<li><a href="#">Support Services Jobs <span>(744)</span></a></li>
													<li><a href="#">Technology/IT Jobs <span>(546)</span></a></li>
													<li><a href="#">Writing/Editing Jobs <span>(19)</span></a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>

								<div class="tab-pane" id="find-job-tabs-country">
									<div class="row p30">
										<div class="col-sm-6">
											<ul class="country-list">
												<li><a href="#"><img src="../frontend/img/flag-icons/Afghanistan.png" alt=""> Afghanistan <span>(7)</span></a></li>
												<li><a href="#"><img src="../frontend/img/flag-icons/African%20Union.png" alt=""> African Union <span>(6)</span></a></li>
												<li><a href="#"><img src="../frontend/img/flag-icons/Aland.png" alt=""> Aland <span>(2)</span></a></li>
												<li><a href="#"><img src="../frontend/img/flag-icons/Albania.png" alt=""> Albania <span>(7)</span></a></li>
												<li><a href="#"><img src="../frontend/img/flag-icons/Alderney.png" alt=""> Alderney <span>(3)</span></a></li>
												<li><a href="#"><img src="../frontend/img/flag-icons/Algeria.png" alt=""> Algeria <span>(4)</span></a></li>
												<li><a href="#"><img src="../frontend/img/flag-icons/American%20Samoa.png" alt=""> American Samoa <span>(3)</span></a></li>
												<li><a href="#"><img src="../frontend/img/flag-icons/Andorra.png" alt=""> Andorra <span>(5)</span></a></li>
												<li><a href="#"><img src="../frontend/img/flag-icons/Angola.png" alt=""> Angola <span>(3)</span></a></li>
												<li><a href="#"><img src="../frontend/img/flag-icons/Anguilla.png" alt=""> Anguilla <span>(8)</span></a></li>
												<li><a href="#"><img src="../frontend/img/flag-icons/Antarctica.png" alt=""> Antarctica <span>(3)</span></a></li>
												<li><a href="#"><img src="../frontend/img/flag-icons/Antigua%20Barbuda.png" alt=""> Antigua &amp; Barbuda <span>(6)</span></a></li>
												<li><a href="#"><img src="../frontend/img/flag-icons/Arab%20League.png" alt=""> Arab League <span>(3)</span></a></li>
												<li><a href="#"><img src="../frontend/img/flag-icons/Argentina.png" alt=""> Argentina <span>(2)</span></a></li>
												<li><a href="#"><img src="../frontend/img/flag-icons/Armenia.png" alt=""> Armenia <span>(3)</span></a></li>
												<li><a href="#"><img src="../frontend/img/flag-icons/Aruba.png" alt=""> Aruba <span>(8)</span></a></li>
												<li><a href="#"><img src="../frontend/img/flag-icons/ASEAN.png" alt=""> ASEAN <span>(3)</span></a></li>
											</ul>
										</div>

										<div class="col-sm-6">
											<ul class="country-list">
												<li><a href="#"><img src="../frontend/img/flag-icons/Kenya.png" alt=""> Kenya <span>(3)</span></a></li>
												<li><a href="#"><img src="../frontend/img/flag-icons/Kiribati.png" alt=""> Kiribati <span>(4)</span></a></li>
												<li><a href="#"><img src="../frontend/img/flag-icons/Kosovo.png" alt=""> Kosovo <span>(2)</span></a></li>
												<li><a href="#"><img src="../frontend/img/flag-icons/Kuwait.png" alt=""> Kuwait <span>(6)</span></a></li>
												<li><a href="#"><img src="../frontend/img/flag-icons/Kyrgyzstan.png" alt=""> Kyrgyzstan <span>(1)</span></a></li>
												<li><a href="#"><img src="../frontend/img/flag-icons/Laos.png" alt=""> Laos <span>(3)</span></a></li>
												<li><a href="#"><img src="../frontend/img/flag-icons/Latvia.png" alt=""> Latvia <span>(4)</span></a></li>
												<li><a href="#"><img src="../frontend/img/flag-icons/Lebanon.png" alt=""> Lebanon <span>(2)</span></a></li>
												<li><a href="#"><img src="../frontend/img/flag-icons/Lesotho.png" alt=""> Lesotho <span>(5)</span></a></li>
												<li><a href="#"><img src="../frontend/img/flag-icons/Liberia.png" alt=""> Liberia <span>(7)</span></a></li>
												<li><a href="#"><img src="../frontend/img/flag-icons/Libya.png" alt=""> Libya <span>(1)</span></a></li>
												<li><a href="#"><img src="../frontend/img/flag-icons/Liechtenstein.png" alt=""> Liechtenstein <span>(6)</span></a></li>
												<li><a href="#"><img src="../frontend/img/flag-icons/Lithuania.png" alt=""> Lithuania <span>(2)</span></a></li>
												<li><a href="#"><img src="../frontend/img/flag-icons/Luxembourg.png" alt=""> Luxembourg <span>(8)</span></a></li>
												<li><a href="#"><img src="../frontend/img/flag-icons/Macao.png" alt=""> Macao <span>(5)</span></a></li>
												<li><a href="#"><img src="../frontend/img/flag-icons/Macedonia.png" alt=""> Macedonia <span>(2)</span></a></li>
												<li><a href="#"><img src="../frontend/img/flag-icons/Madagascar.png" alt=""> Madagascar <span>(1)</span></a></li>
											</ul>
										</div>
									</div>
	                  			</div>
							</div>
						</div> <!-- end .find-job-tabs -->


						<div class="title-lines">
							<h3 class="mt0">Latest job</h3>
						</div>


						<div class="latest-job-content">

							<div class="candidate-description client-description applicants-content">

							  <div class="language-print job-des clearfix">
							    <div class="aplicants-pic pull-left">
							      <img src="../frontend/img/content/company-logo-9.png" alt="">

							    </div>

							    <ul class="list-inline pull-right">
							      <li class="print"><a href="#"><i class="fa fa-share"></i></a></li>
							      <li class="star-rating"><a href="#"><i class="fa fa-star"></i></a></li>
							    </ul>
							    <!-- end .aplicants-pic -->
							    <div class="clearfix">
							      <div class="">
							      
							        <h5><a href="#">Coordinator, Record Manager</a></h5>
							        <a href="#">Wells Frago</a>
							        
							      </div>
							    </div>
							    <p>My passion for programming is in my ability to make tools that make people's lives easier.
							      I love creating value for people, and thrive when I can see the benefit derived from my work
							      as quickly as possible.</p>

							  </div> <!-- end .language-print -->

							  <div class="candidate-details">

							    <div class="toggle-content-client">

							      <p>My passion for programming is in my ability to make tools that make people's lives easier.
							        I love creating value for people, and thrive when I can see the benefit derived from my work
							        as quickly as possible. I believe good work encourages specific behavior, but doesn't necessarily
							        enforce it. My programming style is to make the smallest change necessary to achieve my goal,
							         keep only the most successful work flows and refactor/delete code as part of each change.
							         I always design the interface first and I model client facing solutions as closely as possible
							         to the experience of doing it without a computer, which is typically characterized by loose
							         couplings and graph based models over trees. I keep the clever stuff behind the curtain.
							      </p>

							      <p>
							        Cras vehicula urna non justo adipiscing convallis quis et augue. Proin vestibulum,
							        nisl ut lobortis tempus, est nulla lacinia felis, ut gravida enim nibh vel turpis.
							        Vivamus a purus id ipsum tincidunt faucibus non at elit. Duis imperdiet ullamcorper purus,
							        id tempus dui fringilla porta. Sed lacinia risus eu nulla scelerisque tincidunt. Nam ut velit
							        quis felis pretium pulvinar ac in sem. Nullam nec porttitor velit, sed posuere massa. In gravida
							        mattis dolor sit amet lacinia.
							      </p>


							      <div class="candidate-title mt40">
							        <h5>Design</h5>
							      </div>

							      <div class="candidate-skills">
							        <div class="row mb20">
							          <div class="col-md-4 toggle">
							            <a href="#">Logo Design</a>
							          </div> <!-- end .grid layout -->

							          <div class="col-md-8">
							            <div class="progress-bar clearfix">
							              <div class="progress-bar-inner progress70"><span></span></div>
							            </div>

							            <div class="toggle-content">
							                <p>Preferred languages are Arabic, French & Italian. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi.</p>

							            </div> <!-- end .toggle-content -->
							          </div> <!-- end .grid layout -->

							        </div> <!-- end .row -->

							        <div class="row mb20">
							          <div class="col-md-4 toggle">
							            <a href="#">Web Design</a>
							          </div> <!-- end .grid layout -->

							          <div class="col-md-8">
							            <div class="progress-bar clearfix">
							              <div class="progress-bar-inner progress90"><span></span></div>
							            </div>

							            <div class="toggle-content">
							                <p>Preferred languages are Arabic, French & Italian. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi.</p>

							            </div> <!-- end .toggle-content -->
							          </div> <!-- end .grid layout -->

							        </div> <!-- end .row -->

							        <div class="row mb20">
							          <div class="col-md-4 toggle">
							            <a href="#">UX / UI</a>
							          </div> <!-- end .grid layout -->

							          <div class="col-md-8">
							            <div class="progress-bar clearfix">
							              <div class="progress-bar-inner progress60"><span></span></div>
							            </div>

							            <div class="toggle-content">
							                <p>Preferred languages are Arabic, French & Italian. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi.</p>

							            </div> <!-- end .toggle-content -->
							          </div> <!-- end .grid layout -->
							        </div> <!-- end .row -->


							        <div class="additional-skills">
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
							
						</div> <!-- end .latest-job-content -->

						
					</div> <!-- end .page-content -->

					<div class="col-sm-4 page-sidebar">
						<aside>
							<div class="widget sidebar-widget white-container social-widget">
								<h5 class="widget-title">Share Us</h5>

								<div class="widget-content">
									<div class="row row-p5">
										<div class="col-xs-6 col-md-3 share-box facebook">
											<div class="count">86</div>
											<a href="#">Facebook</a>
										</div>

										<div class="col-xs-6 col-md-3 share-box twitter">
											<div class="count">2.2k</div>
											<a href="#">Twitter</a>
										</div>

										<div class="col-xs-6 col-md-3 share-box google">
											<div class="count">324</div>
											<a href="#">Google +</a>
										</div>

										<div class="col-xs-6 col-md-3 share-box linkedin">
											<div class="count">1.5k</div>
											<a href="#">LinkedIn</a>
										</div>
									</div>
								</div>
							</div>

							<div class="widget sidebar-widget text-center">
								<a href="#"><img src="../frontend/img/content/sidebar-ad.png" alt=""></a>
							</div>

							<div class="white-container">
								<div class="widget sidebar-widget">
									<h5 class="widget-title">5 Tips To Pass Your Interview!</h5>

									<div class="widget-content">
										<div class="fitvidsjs">
											<iframe src="//www.youtube.com/embed/A6XUVjK9W4o?rel=0&controls=2&showinfo=0" frameborder="0" allowfullscreen></iframe>
										</div>
									</div>
								</div>

								<div class="widget sidebar-widget">
									<h5 class="widget-title">The Poll</h5>

									<div class="widget-content">
										<p>Are you satisfied with your current employer?</p>
										<div class="radio">
											<label>
												<input type="radio" name="sidebarpoll" value="" checked>
												Definitely Yes
											</label>
										</div>

										<div class="radio">
											<label>
												<input type="radio" name="sidebarpoll" value="">
												Rather Yes
											</label>
										</div>

										<div class="radio">
											<label>
												<input type="radio" name="sidebarpoll" value="">
												I'm not sure
											</label>
										</div>

										<div class="radio">
											<label>
												<input type="radio" name="sidebarpoll" value="">
												Rather Not
											</label>
										</div>

										<div class="radio">
											<label>
												<input type="radio" name="sidebarpoll" value="">
												Not at all
											</label>
										</div>
									</div>
								</div>
							</div>
						</aside>
					</div> <!-- end .page-sidebar -->
				</div>
			</div> <!-- end .container -->

			
		</div> <!-- end #page-content -->

*/
