@extends('layout')

@section('title', 'Admin')

@section('content')

    <a href="/admin/new" class="btn btn-primary">Create Post</a>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Author</th>
            <th scope="col">Created</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($posts as $post)

            <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->author }}</td>
                <td>{{ $post->created_at }}</td>
                <td>
                    <div class="btn-group">
                        <a class="btn btn-info" href="/admin/{{ $post->id }}">Edit</a>
                        <form action="/admin/{{ $post->id }}" method="post">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <!-- pagination -->
    {{ $posts->links() }}

@endsection
