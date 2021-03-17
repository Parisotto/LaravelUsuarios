@extends('layouts.principal')

@section('title', 'Cadastrar Usuário')

@section('content')
<div id="formularios">
        <h2>Cadastar Usuário</h2>
        <form action="{{ route('storage') }}" method="post" id="cadastro">
            @csrf

            <p>
                <label for="name">Nome do usuário</label>
                <input type="text" name="name" placeholder="exemplo: Fulano de Tal">
            </p>
            <p>
                <label for="email">Email do usuário</label>
                <input type="email" name="email" placeholder="exemplo: email@email.com">
            </p>
            <p>
                <label for="password">Senha do usuário</label>
                <input type="password" name="password" placeholder="exemplo: 1234">
            </p>
            <input type="submit" value="Cadastrar usuário">
        </form>
    </div>
@endsection
