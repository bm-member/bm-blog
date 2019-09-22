@extends('backend.layouts.master')

@section('title', 'Create Post')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <form action="{{ url('admin/post') }}" method="post">
                @csrf
            <input type="hidden" name='user_id' value="{{ auth()->user()->id }}">
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" name='title'>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Category</label>
                    <select class="form-control" name="category_id">
                        <option value="">-- choose --</option>
                        @foreach($cats as $cat)
                        <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Content</label>
                    <textarea id="summernote" class="form-control" name='content' rows="3"></textarea>
                </div>
                <button class="btn btn-primary" type="sumbit">Create</button>
                <a href="{{ url()->previous() }}" class="btn btn-secondary">Back</a>
            </form>
        </div>
    </div>
</div>




@endsection
