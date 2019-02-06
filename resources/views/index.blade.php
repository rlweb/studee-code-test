@extends('layout')

@section('title', 'Home')

@section('content')

    @foreach ($posts as $post)
        <h1>{{ $post->title }}
            <small class="text-muted">
                By {{ $post->author }} on
                <span title="{{ $post->created_at }}">{{ $post->created_at->diffForHumans() }}</span>
            </small>
        </h1>

        {{ $post->body }}

    @endforeach

    <!-- pagination -->
    {{ $posts->links() }}

@endsection
