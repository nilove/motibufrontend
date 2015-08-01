@extends('layouts.partial')

@section('content')

    <div class="row" ng-controller="LoginController">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title">Sign in to continue to Motibu</h1>
            <div class="account-wall">
                <form class="form-signin">
                    <input type="text" name="email" class="form-control" placeholder="Email" ng-model="username" required autofocus>
                    <br>
                    <input type="password" name="password" class="form-control" placeholder="Password" ng-model="password" required>
                    <br>
                    <h2 class="text-center login-title" ng-if="authFailed">Invalid credentials. Please try again.</h2>
                    <button class="btn btn-lg btn-primary btn-block" ng-click="submit()">
                        Sign in</button>
                    <label class="checkbox pull-left">
                        <input type="checkbox" value="remember-me">
                        Remember me
                    </label>
                    <a href="#" class="pull-right need-help">Need help? </a><span class="clearfix"></span>
                </form>
            </div>
            <a href="#/register" class="text-center new-account">Create an account </a>
        </div>
    </div>
@stop