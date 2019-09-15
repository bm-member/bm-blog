@extends('backend.layouts.master')

@section('title', 'View Category')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            @if($errors->any())

            @foreach($errors->all() as $error)
            <div class="alert alert-danger"> {{ $error }} </div>

            @endforeach

            @endif

            <div class="card">
                <div class="card-header">
                    Create Category
                </div>
                <div class="card-body">
                    <form action="{{ url('admin/category') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" name="name">
                        </div>
                        <button type="submit" class="btn btn-primary">Create</button>
                        <a href="{{ url('admin/category') }}" class="btn btn-secondary">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
