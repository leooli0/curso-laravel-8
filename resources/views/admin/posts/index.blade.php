@extends('admin.layouts.app')

@section('title', 'Listagem dos Posts')

@section('content')
<h1>Listanto Posts</h1>

<form action="{{ route('posts.search') }}" method="post">
    @csrf
    <input type="text" name="search" placeholder="Filtrar">
    <button type="submit">Filtrar</button>
</form>

@if (session('message'))
    <div>
        {{ session('message') }}
    </div>
@endif

@foreach ($posts as $post)
    <img src="{{ url("storage/{$post->image}") }}" alt="{{ $post->title }}" style="max-width=100;">
    <p>
        {{ $post->title }} [
            <a href="{{ route('posts.show', $post->id) }}">Ver</a> |
            <a href="{{ route('posts.edit', $post->id) }}">Editar</a>
        ]
    </p>
@endforeach

<hr>

<a href="{{ route('posts.create') }}">Cadastrar novo post</a>

<hr>

@if (isset($filters))
    {{ $posts->appends($filters)->links() }}
@else
    {{ $posts->links() }}
@endif
@endsection
