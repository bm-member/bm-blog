@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10">
            <h1>{{ $post->title }}</h1>
            <p>{!! $post->content !!}</p>
        </div>
    </div>
    <div class="row">
        <a href="{{ url('/') }}" class="btn btn-secondary">Go Home</a>
    </div>
</div>

@endsection
