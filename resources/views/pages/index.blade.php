@extends('layouts.app')

{{--  use b:section to insert pieces  --}}

@section('content')
    <div class="jumbotron text-center">
        <h1>{{$title}}</h1>
        <p>This is my epic application from Kiril Lukiyan!</p> 
        <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p> 
    </div>
@endsection