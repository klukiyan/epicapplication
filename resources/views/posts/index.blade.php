@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="well">
                <div class="row">
                    <div class="col-md-2 col-sm-2">
                        <img src="/storage/cover_images/{{$post->cover_image}}" style="height:100px">
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                        <small>written on {{$post->created_at}} by {{$post->user->name}}</small>
                    </div>
                 </div>
            </div>
        @endforeach
        {{ $posts->links() }}
    @else
        <p>No posts found</p>
    @endif
@endsection