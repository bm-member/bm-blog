@extends('backend.layouts.master')

@section('title', 'View Category')

@section('content')



<div class="container">

    <h1>View Category</h1>
    <a href="{{ url('admin/category/create') }}" class="btn btn-primary btn-sm my-3">
        <i class="fas fa-plus-circle mr-1"></i>
        Create
    </a>

    @include('alerts')

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
                        <a href="{{ url("admin/category/$cat->id/edit") }}" class="btn btn-success btn-sm">
                            <i class="fas fa-edit mr-1"></i> Edit
                        </a>
                        <a href="{{ url("admin/category/$cat->id/delete") }}" class="btn btn-danger btn-sm">
                            <i class="fas fa-trash-alt mr-1"></i>  Del
                        </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
