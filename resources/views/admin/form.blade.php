@extends('layout')

@section('title', 'Admin')

@section('content')

    <h1>Post</h1>

    <!-- Using a form builder would be nice for the thought of a maintenance such as https://symfony.com/doc/current/forms.html -->

    <form method="post" action="/admin/{{ $post->id }}" novalidate class="needs-validation">
        {{ csrf_field() }}
        <div class="form-group row">
            <label for="title" class="col-sm-2 col-form-label">Title</label>
            <div class="col-sm-10">
                <input type="text"
                       class="form-control @if ($errors->has('title'))is-invalid @endif "
                       id="title"
                       name="title"
                       value="{{ old('title', $post->title) }}"
                       required
                       maxlength="255">
                @if ($errors->has('title'))
                    <div class="invalid-feedback">{{ $errors->first('title') }}</div>
                @else
                    <div class="invalid-feedback">
                        Please provide a valid title. Max 255.
                    </div>
                @endif
            </div>
        </div>
        <div class="form-group row">
            <label for="author" class="col-sm-2 col-form-label">Author</label>
            <div class="col-sm-10">
                <input type="text"
                       class="form-control @if ($errors->has('author'))is-invalid @endif "
                       id="author"
                       name="author"
                       value="{{ old('author', $post->author) }}"
                       required
                       minlength="3">
                @if ($errors->has('author'))
                    <div class="invalid-feedback">{{ $errors->first('author') }}</div>
                @else
                    <div class="invalid-feedback">
                        Please provide a valid body. Min 3 chars.
                    </div>
                @endif
            </div>
        </div>
        <div class="form-group row">
            <label for="body" class="col-sm-2 col-form-label">Body</label>
            <div class="col-sm-10">
                @if ($errors->has('body'))
                    <div class="invalid-feedback">{{ $errors->first('body') }}</div>
                @else
                    <div class="invalid-feedback">
                        Please provide a valid body. Min length: 50
                    </div>
                @endif
                <textarea class="form-control @if ($errors->has('body'))is-invalid @endif " id="body"
                          required
                          minlength="50"
                          name="body">{{ old('body', $post->body) }}</textarea>
            </div>
        </div>
        <div class="form-group row">
            <div class="offset-sm-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </div>
    </form>

    <script>
        // Below taken from https://getbootstrap.com/docs/4.1/components/forms/#validation
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>

@endsection
