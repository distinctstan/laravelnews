@extends('layout.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h3>Your blog post!</h3><br>
                    <a href="/posts/create" class="btn btn-primary">Create Post</a><br><br>
                    @if (count($posts) > 0)
                    <table class="table table-striped">
                        <tr>
                            <th>Title</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($posts as $post)
                        <tr>
                            <td>{{$post->title}}</td>
                        <td>
                            <a href="/posts/{{$post->id}}/edit" class="btn btn-dark">Edit</a>
                            <form action="/posts/{{$post->id}}" method="post" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                        </tr>
                        @endforeach
                    </table>
                @else
                    <p>You have no posts yet.</p>
                @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
