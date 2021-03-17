@extends('layouts.principal')

@section('title', 'Lista de Usuários')

@section('content')

     <table cellspacing="0">
        <h2>Lista de Usuários</h2>
        <tr>
           <th>ID</th>
           <th>Nome</th>
           <th>E-mail</th>
           <th>Desde</th>
           <th colspan=2>Operação</th>
        </tr>
@foreach($users as $user)
        <tr>
            <td><p>{{ $user->id }}</p></td>
            <td><p>{{ $user->name }}<p></td>
            <td><p>{{ $user->email }}</p></td>
            <td><p>{{ date('d/m/Y', strtotime($user->created_at)) }}</p></td>
            <td><a href='editar/{{ $user->id }}' id='editar' title='Editar'></a></td>
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

@endsection
