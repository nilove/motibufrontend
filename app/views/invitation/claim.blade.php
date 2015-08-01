@extends('layouts.roundtrip')

@section('content')
    <div class="row" >
        <div class="col-sm-6 col-md-4 col-md-offset-4">

            <br/>
            <div class="account-wall">
                @if ($verified == true)
                    <h1>Please set your password and you will be good to go.</h1>
                    <form action="" method="post">
                    <fieldset>
                        <div id="legend">
                            <!--                        <legend class="">Register</legend>-->
                        </div>
                        <input type="hidden" name="code" value="[[ $code ]]"/>
                        <input type="hidden" name="user_type" value="[[ $user_type ]]"/>

                        <div class="control-group">
                            <!-- Password-->
                            <label class="control-label" for="password">Password</label>
                            <div class="controls">
                                <input type="password" class="form-control"  id="password" name="password" placeholder="" class="input-xlarge">
                                <p class="help-block">Password should be at least 4 characters</p>
                            </div>
                        </div>

                        <div class="control-group">
                            <!-- Password -->
                            <label class="control-label"  for="password_confirm">Password (Confirm)</label>
                            <div class="controls">
                                <input type="password" class="form-control" id="password_confirm"  name="password_confirm" placeholder="" class="input-xlarge">
                                <p class="help-block">Please confirm password</p>
                            </div>
                        </div>
                        <div class="control-group">
                            <!-- Button -->
                            <div class="controls">
                                <button class="btn btn-success" type="submit">Register</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
                @else
                    <h1>Please check the link you clicked on.</h1>
                @endif
            </div>
        </div>
@stop