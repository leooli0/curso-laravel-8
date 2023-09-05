<h1>Listanto Posts</h1>

@if (session('message'))
    <div>
        {{ session('message') }}
    </div>
@endif

@foreach ($posts as $post)
    <p>
        {{ $post->title }} [ <a href="{{ route('posts.show', $post->id) }}">Ver</a> ]
    </p>
@endforeach

<hr>

<a href="{{ route('posts.create') }}">Cadastrar novo post</a>
