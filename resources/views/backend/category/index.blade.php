@extends('backend.layouts.master')

@section('title', 'View Category')

@section('content')



<div class="container">

    <h1>View Category</h1>
    <a href="{{ url('admin/category/create') }}" class="btn btn-primary btn-sm my-3">Create</a>
    @if(session('status'))

    <div class="alert alert-success"> {{ session('status') }} </div>

    @endif

    <div class="row">

        <div class="col-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($category as $cat)
                    <tr>
                        <td>{{ $cat->id }}</td>
                        <td>{{ $cat->name  }}</td>
                        <td>
                            <a href="#" class="btn btn-success btn-sm">Edit</a>
                            <a href="#" class="btn btn-danger btn-sm">Del</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
