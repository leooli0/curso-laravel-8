<h1>Editando o Posts: <strong>{{ $post->title }}</strong></h1>

<form action="{{ route('posts.update', $post->id) }}" method="post">
    @method('put')
    @include('admin.posts._partials.form')
</form>

<hr>

<a href="{{ route('posts.index') }}">Voltar para listagem</a>
