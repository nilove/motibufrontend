<div class="sign-up-section text-center" ng-controller="RegisterAgencyControllerStep1">
	<div class="container">
		<div class="login-content">
			<h3>Sign up for Motibu</h3>

			<div class="step-list">
				<ul class="list-inline">
					<li class="active"><span>1</span> Account Info</li>
					<li><span>2</span> Confirm your email</li>
					<li><span>3</span> Choose your plan</li>
					<li><span>4</span> Account complete</li>
				</ul>
			</div>

			<form class="login-sign-form">

				<div class="step-one">
					<input type="text" placeholder="Company name" ng-model="agency_name">
					<div class="row">
						<div class="col-md-6">
							<input type="text" placeholder="First Name" ng-model="fname">
						</div>
						<div class="col-md-6">
							<input type="text" placeholder="Last Name" ng-model="lname">
						</div>
					</div>
					<input type="email" placeholder="Email" ng-model="email">

					<div class="row">
						<div class="col-md-6">
							<input type="password" placeholder="Password" ng-model="password">
						</div>
						<div class="col-md-6">
							<input type="password" placeholder="Confirm Password" ng-model="password_confirmation">
						</div>
					</div>

					<input type="text" placeholder="Telephone" ng-model="telephone">
					

					<!-- <p class="vcard-content">
						<input id="use-vcard" type="checkbox">
						<label for="use-vcard">Use External vCard</label>

					</p> -->

					<div class="submit-content">
						<p class="pull-left">
							
							Already a Member?<a href="#/login" class="sign-in-link">Sign In</a>
						</p>

						<p class="pull-right">
							
							<button class="btn btn-default" type="submit" ng-click="submit()">Continue</button>
						</p>

					</div> <!-- end submit content -->
				</div> <!-- end step-one -->

			</form>


			

		</div> <!-- end .login-content -->

		
	</div>  <!-- end .container -->
	
</div> <!-- end login-section  -->