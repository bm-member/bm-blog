@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        @foreach($posts as $post)
        <div class="col-md-4 mb-4">
            <h1>{{ $post->title }}</h1>
            <p>{!! substr($post->content, 0, 200) !!}</p>
        <a href="{{ url("post/$post->id") }}" class="btn btn-primary">Read more..</a>
        </div>
        @endforeach
    </div>

    <div class="row justify-content-center">
        {{ $posts->links() }}
    </div>
</div>

@endsection
