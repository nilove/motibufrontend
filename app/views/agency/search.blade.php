@extends('layouts.partial')

@section('content')

<div id="page-content">
	<div class="container">
		<div class="row">
			<div class="col-sm-3 page-sidebar">
				<aside>
					<div class="white-container mb0">
						<div class="widget sidebar-widget jobs-search-widget">
							<h5 class="widget-title">Search</h5>

							<div class="widget-content">
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

								<input type="submit" class="btn btn-default" value="Search">
							</div>

							<!-- when click this anchor, filter list needs to show/hide -->
							<a href="#" class="toggle"></a>
						</div>

						<div class="widget sidebar-widget jobs-filter-widget">
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

			<div class="col-sm-9 page-content">

				<div class="view-sort clearfix mb30">
				  <div class="row">

				    <div class="col-sm-8">
				      <h4 class="available-jb pull-left">Candidate for: Sr. Quality Engineer <span>(23 results)</span></h4>

				    </div>

				    <div class="col-sm-4">
				      <div class="job-sort-by pull-right ml20" id="clients-sort-by">

				        <div class="">
					        <select>
					          <option value="#">Sort by</option>
					          <option value="#">Name</option>
					          <option value="#">Type</option>
					          <option value="#">Date</option>
					        </select>

				      	</div> <!-- end .job-sort-by -->
				      </div>

				    </div> <!-- end .end col-sm-5 grid-layout  -->
				  </div> <!-- end .row -->
				</div> <!-- end .view-sort div -->

				<div class="candidate-description client-description applicants-content">

				  <div class="language-print client-des clearfix">
				    <div class="aplicants-pic pull-left">
				      <img src="../frontend/img/content/agent-img-1.jpg" alt="">

				      <ul class="list-inline">
				        <li><a href="#"><i class="fa fa-eye"></i></a></li>
				        <li><a href="#"><i class="fa fa-bookmark"></i></a></li>
				        <li><a href="#"><i class="fa fa-trash"></i></a></li>


				      </ul>
				    </div>
				    <!-- end .aplicants-pic -->
				    <div class="clearfix">
				      <div class="">
				        <h5><a href="#">Francisco Da Silva</a></h5>
				        <a href="#">Web Developer at Highest Dreams Inc</a>
				      </div>
				      <ul class="list-inline pull-right">
				        <li class="star-rating">7.9</li>
				      </ul>

				    </div>

				    <div class="aplicant-details-show clearfix">
				      <ul class="list-unstyled pull-left">
				          <li><span>Location: <b class="aplicant-detail">San Francisco, California</b></span></li>

				          <li><span>Nationality: <b class="aplicant-detail">Portuguese</b></span></li>
				          <li><span>Years of Experience: <b class="aplicant-detail">7</b></span></li>

				          <li><span>Degree: <b class="aplicant-detail">MBA</b></span></li>
				        </ul>

				        <ul class="list-unstyled pull-left">
				          <li>
				            <span>Employment Status: <b class="aplicant-detail">Employed</b></span>
				          </li>

				          <li>
				            <span>Gender: <b class="aplicant-detail">Male</b></span>
				          </li>

				          <li>
				            <span>Work Permit: <b class="aplicant-detail">General Work Permit</b></span>
				          </li>
				        </ul>

				    </div>
				    <!-- end .aplicant-details-show -->
				  </div> <!-- end .language-print -->

				  <div class="candidate-details">

				    <div class="toggle-content-client">
				      <div class="candidate-title">
				        <h5>Hello, my name is <span>Francisco Da Silva</span></h5>
				      </div>


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
				      <a class="btn btn-default" href="#">Contact Candidate</a>


				    </div>
				    <!-- end .toggle-details -->
				  </div> <!-- end .candidate-details -->

				</div> <!-- end .candidate-description -->

				
			</div> <!-- end .page-content -->
		</div>
	</div> <!-- end .container -->
</div> <!-- end #page-content -->


@stop