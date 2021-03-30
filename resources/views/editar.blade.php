@extends('layouts.app')

@section('title', 'Editar Usuário')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2>Editar Usuário</h2></div>
                <div class="card-body">

<div id="formularios">

        <form action="../update/{{$user->id}}" method="post" id="cadastro">
            @csrf

            @method('put')

            <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">Nome do usuário</label>
                <div class="col-md-6">
                    <input class="form-control" autofocus type="text" name="name"  value="{{ $user->name }}">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-4 col-form-label text-md-right" for="email">Email do usuário</label>
                <div class="col-md-6">
                    <input class="form-control"  type="email" name="email" value="{{ $user->email }}">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-4 col-form-label text-md-right" for="password">Senha do usuário</label>
                <div class="col-md-6">
                    <input  class="form-control" type="password" name="password">
                </div>
            </div>
            <div class="form-group row mb-0">
                <div class="col-md-8 offset-md-4">
                    <input class="btn btn-primary" type="submit" value="Salvar">
                </div>
            </div>
        </form>
    </div>


                </div>
            </div>
        </div>
    </div>
</div>

@endsection
