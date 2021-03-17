@extends('layouts.principal')

@section('title', 'Editar Usuário')

@section('content')

<link rel="stylesheet" href="../css/estilos.css">
<div id="formularios">
        <h2>Editar Usuário</h2>
        <form action='../update/{{$user->id}}' method="post" id="cadastro">
            @csrf

            @method('put')

            <p>
                <label for="name">Nome do usuário</label>
                <input type="text" name="name" value="{{ $user->name }}">
            </p>
            <p>
                <label for="email">Email do usuário</label>
                <input type="email" name="email" value="{{ $user->email }}">
            </p>
            <p>
                <label for="password">Senha do usuário</label>
                <input type="password" name="password">
            </p>
            <input type="submit" value="Editar usuário">
        </form>
</div>
@endsection
