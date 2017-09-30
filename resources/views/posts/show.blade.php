@extends('layouts.app')

@section('content')
    {{--  <a href="/posts" class="btn btn-default">Go Back</a>  commented this one to experiment with buttons--}}

    <a href="/posts" class="btn btn-success">Go Back</a>
    <h1>{{$post->title}}</h1>
    <div>{!!$post->body!!}</div>
    <hr>
    <small>Written on {{$post->created_at}}</small>

@endsection

{{--  btn btn-success btn-lg  --}}