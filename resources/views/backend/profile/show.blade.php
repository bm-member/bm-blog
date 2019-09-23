@extends('backend.layouts.master')

@section('title', 'Profile')

@section('content')

<div class="container">
    <div class="col">
        <a href="{{ url('admin/profile/edit') }}" class="btn btn-success btn-sm mb-3">
            <i class="fas fa-edit"></i>
            Edit
        </a>
    </div>
    <div class="row">
        <div class="col-md-8">
            @include('alerts')
            <div class="card">
                <div class="card-body">
                    <div class="text-center mb-3">

                        @if (Auth::user()->image)
                        <img src="{{ url("upload/" . Auth::user()->image ) }}"
                        class="img-fluid rounded-circle" style="width: 100px">
                        @else
                        <img src="{{ url('backend/dist/img/user2-160x160.jpg') }}"
                        class="img-fluid rounded-circle" style="width: 100px">
                        @endif


                    </div>
                    <table class="table">
                        <tr>
                            <td>Name</td>
                            <td>{{ Auth::user()->name }}</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>{{ Auth::user()->email }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
