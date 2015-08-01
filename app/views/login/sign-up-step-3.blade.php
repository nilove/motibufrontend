<div class="sign-up-section text-center" ng-controller="RegisterAgencyControllerStep3">
	<div class="container">
		<div class="login-content for-step-three">
			<h3>Your emil haas been validated! Please choose your plan</h3>

			<div class="step-list">
				<ul class="list-inline">
					<li class="done"><span><i class="fa fa-check"></i></span> Account Info</li>
					<li class="done"><span><i class="fa fa-check"></i></span> Confirm your email</li>
					<li class="active"><span>3</span> Choose your plan</li>
					<li><span>4</span> Account complete</li>

				</ul>
			</div>

			<form class="login-sign-form">





				<div class="step-three">
					<div class="pricing-plan">

						<ul class="list-inline">
							<li ng-click="selectedPlan=0" ng-class="{selected: selectedPlan == 0}">
								<h4><i class="fa fa-check"></i> Free</h4>
								<ul>
									<li>$0</li>

									<li>Loren Ipsum Dolor</li>
									<li>Site amet consecture</li>
									<li>Loren Ipsum</li>


								</ul>

							<button class="btn btn-default" type="submit">Select Plan</button>

								
							</li>

							<li ng-click="selectedPlan=1" ng-class="{selected: selectedPlan == 1}">
								<h4><i class="fa fa-check"></i> Premium</h4>

								<ul>
									<li>$20<small>/mo</small></li>

									<li>Loren Ipsum Dolor</li>
									<li>Site amet consecture</li>
									<li>Loren Ipsum</li>
								</ul>


								<button class="btn btn-default" type="submit">Select Plan</button>

							</li>
						</ul>
						
					</div> <!-- end pricing-plan -->
				</div> <!-- end step-three -->



			</form>


			

		</div> <!-- end .login-content -->


		<div class="payment-option-toggle" ng-if="selectedPlan==1">
			<div class="login-content payment">
				<div class="payment-option">
					<div class="mail-confirm">
						<div class="top-section">
							<div class="row">
								<div class="col-sm-6">
									<h4>Premium <a href="#" class="btn">Edit</a></h4>
									<span class="price">
										$20 <small>/mo</small>
									</span>
								</div>

								<div class="col-sm-6">
									<ul class="detailed-list list-unstyled">
										<li>
											<span class="pull-left">Monthly</span>
											<span class="pull-right">$20</span>
										</li>
										<li>
											<span class="pull-left">Subtotal</span>
											<span class="pull-right">$20</span>
										</li>

										<li>
											<span class="pull-left">Estimated tax (0.00%)</span>
											<span class="pull-right">$0.00</span>
										</li>

										<li class="total">
											<span class="pull-left">Total</span>
											<span class="pull-right">$20</span>
										</li>
									</ul>
								</div>
							</div>
							
							
						</div> 

						<div class="bottom-section">
							<p>Your monthly plan begins on March 30, 2015 and renews automatically on April 30, 2015.
							 To avoid charges for the nes year , you can cancel anythime before April 30, 2015</p>
						</div>
					</div> <!-- end mail-confirm -->
				</div>
				
			</div>



			<div class="login-content payment" ng-if="selectedPlan==1">
				<div class="payment-method">
					<div class="mail-confirm">
						
						<div class="bottom-section">
							<div class="row">
								<div class="col-sm-6">
									<div class="radio-input pt10">
										<input type="radio" id="card"name="paymentMethod" checked>
										<label for="card"><img src="../frontend/img/logo-visa-mastercard.png" alt=""></label>
									</div>
								</div>

								<div class="col-sm-6">
									<div class="radio-input paypal">
										<input type="radio" id="paypal"name="paymentMethod">
										<label for="paypal"><img src="../frontend/img/paypal_logo.gif" alt=""></label>
									</div>
								</div>
							</div>
						</div>

						<div class="payment-form-field">
							<form>
								<div class="row">
									<div class="col-sm-6">
										<div class="field-single">
											<label for="name">Your Name <b>*</b></label>
											<input type="text">
											
										</div>
									</div>
									<div class="col-sm-6">
											<div class="field-single">
												<label for="name">Your Name <b>*</b></label>
												<input type="text">
												
											</div>
											
									</div>
								</div>

								<div class="row">

									<div class="col-sm-6">
											<div class="field-single">
												<label for="name">Credit or debit card number <b>*</b></label>
												<input type="text">
												
											</div>
									</div>

									<div class="col-sm-6">
										<div class="field-single expiration-date-content">
											<div class="row">
												<div class="col-sm-7">
													<label for="name">Expiration date <b>*</b></label>
													<select name="" id="month">
														<option value="">MM</option>
														<option value="">feb</option>

													</select>

													<select name="" id="year">
														<option value="">YEAR</option>
														<option value="">feb</option>

													</select>
												</div>

												<div class="col-sm-5">
													<label for="name">Security date <b>*</b></label>
													<input type="text">
													
												</div>
											</div>	
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-sm-6">
											<div class="field-single">
												<label for="name">Country <b>*</b></label>
												<select name="" id="country-name">
													<option value="">Philippines</option>
													<option value="">Philippines</option>

												</select>
												
											</div>
									</div>

									<div class="col-sm-6">
											<div class="field-single">
												<label for="name">Postal code <b>*</b></label>
												<input type="text">
												
											</div>
									</div>
								</div>


								<div class="review-order">
									<button class="btn btn-default" ng-click="placeOrder()">Place Order</button>
								</div>

							</form>
						
							
						</div>
					</div> <!-- end mail-confirm -->
				</div>
				
			</div>


		</div> <!-- end .payment-option-toggle -->





		
	</div>  <!-- end .container -->
	
</div> <!-- end login-section  -->