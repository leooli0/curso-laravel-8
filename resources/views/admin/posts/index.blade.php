<h1>Listanto Posts</h1>

@foreach ($posts as $post)
    <p>{{ $post->title }}</p>
@endforeach

<hr>

<a href="{{ route('posts.create') }}">Cadastrar novo post</a>
