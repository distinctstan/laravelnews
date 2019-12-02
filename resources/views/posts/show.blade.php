@extends('layout.app')

@section('content')
    <a href="/posts" class="btn btn-secondary">Go Back</a>
    <a class="btn btn-info" href="/posts/api/{{$post->id}}">Get This Single News API</a>
    @if (!Auth::guest())
        @if (Auth::user()->id == $post->user_id)
            <a class="btn btn-dark" href="/posts/{{$post->id}}/edit">Edit</a>
            <form action="/posts/{{$post->id}}" method="post" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        @endif
    @endif
    <br><br>
    <div class="card mb-4">
        <h2 class="card-title m-3">{{$post->title}}</h2>
        <img class="card-img-top" src="/storage/cover_images/{{$post->cover_image}}" alt="Card image cap">
        <div class="card-body">
        <p class="card-text">{!!$post->body!!}</p>
    </div>
    <div class="card-footer text-muted">
        Posted on {{$post->created_at}} by
        <a href="#">{{$post->user->name}}</a>
    </div>
    </div>
    <br><br>
@endsection