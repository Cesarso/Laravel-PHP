{{-- html inicial foi apagado pq está no layout.blade --}}
@extends('layout')

@section('cabecalho')
    Adicionar Série
@endsection

@section('conteudo')
    <div class="container">        <form method="post">
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
