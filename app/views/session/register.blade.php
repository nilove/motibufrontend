@extends('layouts.partial')

@section('content')

<div class="row" ng-controller="RegisterController">
    <div class="col-sm-6 col-md-4 col-md-offset-4">
        <h1 class="text-center login-title">Register for an Account in Motibu</h1>
        <br/>
        <div class="account-wall">
            <form class="form-register">
                <fieldset>
                    <div id="legend">
<!--                        <legend class="">Register</legend>-->
                    </div>
<!--                    <div class="control-group">-->
<!--                        <!-- Username -->
<!--                        <label class="control-label"  for="username">Username</label>-->
<!--                        <div class="controls">-->
<!--                            <input type="text" id="username" name="username" placeholder="" class="input-xlarge">-->
<!--                            <p class="help-block">Username can contain any letters or numbers, without spaces</p>-->
<!--                        </div>-->
<!--                    </div>-->

                    <div class="control-group">
                        <!-- E-mail -->
                        <label class="control-label" for="email">E-mail</label>
                        <div class="controls">
                            <input type="text" id="email" name="email" placeholder="" ng-model="email" class="input-xlarge">
                            <p class="help-block">Please provide your E-mail</p>
                        </div>
                    </div>

                    <div class="control-group">
                        <!-- E-mail -->
                        <label class="control-label" for="fname">First Name</label>
                        <div class="controls">
                            <input type="text" id="email" name="fname" placeholder="" ng-model="fname" class="input-xlarge">
                            <p class="help-block">Please provide your First Name</p>
                        </div>
                    </div>

                    <div class="control-group">
                        <!-- E-mail -->
                        <label class="control-label" for="lname">Last Name</label>
                        <div class="controls">
                            <input type="text" id="email" name="lname" ng-model="lname" placeholder="" class="input-xlarge">
                            <p class="help-block">Please provide your Last Name</p>
                        </div>
                    </div>


                    <div class="control-group">
                        <!-- Password-->
                        <label class="control-label" for="password">Password</label>
                        <div class="controls">
                            <input type="password" class="form-control" ng-model="password" id="password" name="password" placeholder="" class="input-xlarge">
                            <p class="help-block">Password should be at least 4 characters</p>
                        </div>
                    </div>

                    <div class="control-group">
                        <!-- Password -->
                        <label class="control-label"  for="password_confirm">Password (Confirm)</label>
                        <div class="controls">
                            <input type="password" class="form-control" id="password_confirm" ng-model="confirm_password" name="password_confirm" placeholder="" class="input-xlarge">
                            <p class="help-block">Please confirm password</p>
                        </div>
                    </div>
                    <div class="control-group">
                        <!-- Password -->
                        <div class="controls">
                            <input type="checkbox" ng-model="is_external_vcard" name="is_external_vcard">
                            <label>External vCard</label>
                        </div>
                    </div>

                    <h2 class="text-center login-title" ng-if="registrationFailed">Invalid data. Please try again.</h2>
                    <h2 class="text-center login-title" ng-if="confirmationemail">Please Confirm your email address</h2>

                    <div class="control-group">
                        <!-- Button -->
                        <div class="controls">
                            <button class="btn btn-success" data-ng-click="submit()">Register</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>

@stop