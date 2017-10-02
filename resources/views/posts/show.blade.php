@extends('layouts.app')

@section('content')
    {{--  <a href="/posts" class="btn btn-default">Go Back</a>  commented this one to experiment with buttons--}}

    <a href="/posts" class="btn btn-info">Go Back</a>
    <h1>{{$post->title}}</h1>
    <div>{!!$post->body!!}</div>
    <hr>
    <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
    <hr>
    {{--  this one will be for disabling buttons for guests  --}}
    @if(!Auth::guest()) 
        @if(Auth::user()->id == $post->user_id)  
            <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>    
            {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['Class'=>'btn btn-danger'])}}
            {!!Form::close()!!}
        @endif    
    @endif

@endsection

{{--  btn btn-success btn-lg  --}}