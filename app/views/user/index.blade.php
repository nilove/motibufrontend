@extends('layouts.master')

@section('content')
<div class="jumbotron" >
    <h1>User Data</h1>
    <pre>
        {{ print_r(Session::get('USER')) }}
    </pre>
</div>

@stop