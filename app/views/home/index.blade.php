@extends('layouts.partial')

@section('content')
<div class="container">
	<div class="page-content mt60">
		<div class="row">

	    	<div class="col-md-12">
	    		<div class="main-content">
	    			<div ng-if="!getLoginStatus()">
	    				<a href="#/login">Log in first</a> Or
                        <a href="#/register">Register</a>
	    			</div>
	    			<div ng-if="getLoginStatus() && getUser().is_agency_admin">
	    				<ul>
	    					<li ng-repeat="agency in getUser().agencies">
	    						<a ng-href="#/agency/{{agency.id}}/clients">{{agency.name}}</a>
	    						<br>
	    						<a ng-href="#/agency/{{agency.id}}/profile"> - profile</a>
	    						<br>
	    						<a ng-href="#/agency/{{agency.id}}/add_agent"> - add agent</a>
	    						<br>
	    						<a ng-href="#/agency/{{agency.id}}/add_client"> - add client</a>
	    						<br>
	    						<a ng-href="#/agency/{{agency.id}}/clients"> - clients</a>
	    						<br>
	    						<a ng-href="#/agency/{{agency.id}}/agents"> - agents</a>
	    					</li>	    					
	    				</ul>
	    			</div>
	    			<div ng-if="getLoginStatus() && getUser().is_professional">
	    				<ul>
	    					<li>
	    						<a ng-href="#/candidate/{{getUser().candidate_profile.id}}/profile">View Profile</a>
	    					</li>
	    					<li>
	    						<a ng-href="#/candidate/{{getUser().candidate_profile.id}}/edit">Edit Profile</a>
	    					</li>
	    				</ul>
	    			</div>
	    		</div>
			</div>
		</div>
	</div>
</div>
@stop




