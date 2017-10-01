@extends('layouts.app')

@section('content')
    {{--  <a href="/posts" class="btn btn-default">Go Back</a>  commented this one to experiment with buttons--}}

    <a href="/posts" class="btn btn-success">Go Back</a>
    <h1>{{$post->title}}</h1>
    <div>{!!$post->body!!}</div>
    <hr>
    <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
    <hr>
    <a href="/posts/{{$post->id}}/edit" class="btn btn-warning">Edit</a>
    
    {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['Class'=>'btn btn-danger'])}}
    {!!Form::close()!!}
@endsection

{{--  btn btn-success btn-lg  --}}