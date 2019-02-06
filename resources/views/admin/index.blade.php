@extends('layout')

@section('title', 'Admin')

@section('content')

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
                <td><!-- todo --></td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <!-- pagination -->
    {{ $posts->links() }}

@endsection
