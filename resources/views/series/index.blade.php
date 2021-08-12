{{-- html inicial foi apagado pq está no layout.blade --}}
@extends('layout')

@section('cabecalho')
Séries
@endsection

@section('conteudo')
    </div>

    <a href="/series/criar" class="btn btn-dark mb-2">Adicionar</a>

    <ul class="list-group">
        @foreach ($series as $serie)
            <li class="list-group-item"><?= $serie; ?></li>
        @endforeach
    </ul>
</div>

@endsection

