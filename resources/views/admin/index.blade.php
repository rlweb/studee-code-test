@extends('layout')

@section('title', 'Admin')

@section('content')

    @foreach ($posts as $post)
        <h1>{{ $post->title }}
            <small class="text-muted">By {{ $post->author }} on {{ $post->created_at }}</small>
        </h1>

        {{ $post->body }}

    @endforeach

    <!-- pagination -->
    {{ $posts->links() }}

@endsection
