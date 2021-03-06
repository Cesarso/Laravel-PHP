{{-- html inicial foi apagado pq está no layout.blade --}}
@extends('layout')

@section('cabecalho')
    Adicionar Série
@endsection

@section('conteudo')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <form method="post">
    <div class="container">
        <form method="post">
            @csrf
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" name="nome" id="nome">
            </div>
            <button class="btn btn-primary mb-2">Adicionar</button>

        </form>
    </div>
    <div>

    </div>
@endsection
