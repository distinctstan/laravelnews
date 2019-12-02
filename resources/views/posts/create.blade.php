@extends('layout.app')

@section('content')

    <h1>Create post</h1> 
<form action="/posts" method="POST" enctype="multipart/form-data">
    @csrf
            {{-- <div class="form-group">
                <label>Text Input</label>
                <input class="form-control">
                <p class="help-block">Example block-level help text here.</p>
            </div> --}}
            <div class="form-group">
                <label>Title</label>
                <input type="text" name="title" class="form-control" placeholder="Enter title">
            </div>
            {{-- <div class="form-group">
                <label>Static Control</label>
                <p class="form-control-static">email@example.com</p>
            </div> --}}
            <div class="form-group">
                <label>Body</label>
                <textarea id="article-ckeditor" name="body" class="form-control" rows="10" placeholder="Enter body text"></textarea>
            </div>
            <div class="form-group">
                <label>Cover Image</label>
                <input type="file" name="cover_image">
            </div>
            <button type="submit" class="btn btn-primary">Submit Post</button>
    </form>
@endsection