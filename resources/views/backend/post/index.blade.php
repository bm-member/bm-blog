@extends('backend.layouts.master')

@section('title', 'View Post')

@section('content')

<div class="container">

    <a href="{{ url('admin/post/create') }}" class="btn btn-primary btn-sm mb-3">
        <i class="fas fa-plus-circle mr-1"></i>
        Create
    </a>

    <div class="row justify-content-center">
        <div class="col-12">

            @include('alerts')

            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->title }}</td>
                        <td>
                            <a href="{{ url("admin/post/$post->id/edit") }}" class="btn btn-success btn-sm">
                                <i class="fas fa-edit"></i>
                                Edit
                            </a>
                            <a href="{{ url("admin/post/$post->id/delete") }}" class="btn btn-danger btn-sm">
                                <i class="fas fa-trash-alt"></i>
                                Delete
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="row justify-content-center">
        {{ $posts->links() }}
    </div>
</div>


@endsection
