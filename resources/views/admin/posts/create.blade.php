@extends('admin.layouts.app')

@section('titile', 'Criar Novo Post')

@section('content')
<h1>Cadastrando novo Posts</h1>

<form action="{{ route('posts.store') }}" method="post">
    @csrf
    @include('admin.posts._partials.form')
</form>

<hr>

<a href="{{ route('posts.index') }}">Voltar para listagem</a>
@endsection
