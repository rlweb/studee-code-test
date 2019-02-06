@extends('layout')

@section('title', 'Admin')

@section('content')

<h1>Post</h1>

<!-- Using a form builder would be nice for the thought of a maintenance such as https://symfony.com/doc/current/forms.html -->

<form method="post" action="/admin/{{ $post->id }}">
    {{ csrf_field() }}
    <div class="form-group row">
        <label for="title" class="col-sm-2 col-form-label">Title</label>
        <div class="col-sm-10">
            <input type="text" class="form-control @if ($errors->has('title'))is-invalid @endif " id="title" name="title" value="{{ old('title', $post->title) }}">
            @if ($errors->has('title'))
                <div class="invalid-feedback">{{ $errors->first('title') }}</div>
            @endif
        </div>
    </div>
    <div class="form-group row">
        <label for="author" class="col-sm-2 col-form-label">Author</label>
        <div class="col-sm-10">
            <input type="text" class="form-control @if ($errors->has('author'))is-invalid @endif " id="author" name="author" value="{{ old('author', $post->author) }}">
            @if ($errors->has('author'))
                <div class="invalid-feedback">{{ $errors->first('author') }}</div>
            @endif
        </div>
    </div>
    <div class="form-group row">
        <label for="body" class="col-sm-2 col-form-label">Body</label>
        <div class="col-sm-10">
            @if ($errors->has('body'))
                <div class="invalid-feedback">{{ $errors->first('body') }}</div>
            @endif
            <textarea class="form-control @if ($errors->has('body'))is-invalid @endif " id="body" name="body">{{ old('body', $post->body) }}</textarea>
        </div>
    </div>
    <div class="form-group row">
        <div class="offset-sm-2 col-sm-10">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </div>
</form>

@endsection
