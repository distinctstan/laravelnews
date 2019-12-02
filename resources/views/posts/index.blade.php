@extends('layout.app')

@section('content')
    <h1>All News: <a class="btn btn-info" href="/posts/api">api to get a List of all news in the system</a></h1>
    @if (count($posts) > 0)
        @foreach ($posts as $post)
            <div class="card mb-4" style="width:350px;float:left;margin:10px;">
            <img style="width:350px" class="card-img-top" src="/storage/cover_images/{{$post->cover_image}}" alt="Card image cap">
                <div class="card-body">
                <h2 class="card-title"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h2>
                    <p class="card-text"></p>
                    <a href="/posts/{{$post->id}}" class="btn btn-sm btn-primary">Read More &rarr;</a>
            </div>
            <div class="card-footer text-muted">
                Posted on {{$post->created_at}} by
            <a href="#">{{$post->user->name}}</a>
            </div>
            </div>
        @endforeach
        {{$posts->links()}}
    @else
        <p>No post found.</p>
    @endif

@endsection