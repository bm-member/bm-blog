@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 mb-5">
            <h1>{{ $post->title }}</h1>
            <p>{!! $post->content !!}</p>
            <b>Category: </b> {{ $post->category->name }},
            <b>Post By</b> {{ $post->user->name }}
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a href="{{ url('/') }}" class="btn btn-secondary">
                Go Home
            </a>
        </div>
    </div>
</div>

@endsection
