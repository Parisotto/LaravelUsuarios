@extends('layouts.app')

@section('title', 'Lista de Usuários')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2>Lista de Usuários</h2></div>
                <div class="card-body">

                    <table class='table table-striped' cellspacing="0">
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>E-mail</th>
                            <th>Desde</th>
                            <th>Excluir</th>
                        </tr>
                @foreach($users as $user)
                        <tr>
                            <td><p>{{ $user->id }}</p></td>
                            <td><p><a href='editar/{{ $user->id }}' id='editar' title='Editar'>{{ $user->name }}</a><p></td>
                            <td><p>{{ $user->email }}</p></td>
                            <td><p>{{ date('d/m/Y', strtotime($user->created_at)) }}</p></td>
                            <td>
                                <form action="delete/{{ $user->id }}" method="post">
                                    @csrf

                                    @method("delete")

                                    <input id="deletar" type="submit" value="" title='Deletar'>
                                </form>
                            </td>
                        </tr>
                @endforeach
                        <tr><td colspan='6'></td></tr>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
