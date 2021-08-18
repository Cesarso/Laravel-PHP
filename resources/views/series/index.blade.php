{{-- html inicial foi apagado pq está no layout.blade --}}
@extends('layout')

@section('cabecalho')
Séries
@endsection

@section('conteudo')

@if(!empty($mensagem))
    <div class="alert alert-success">
        {{$mensagem}}
    </div>
@endif

    <a href="/series/criar" class="btn btn-dark mb-2">Adicionar</a>

    <ul class="list-group">
        @foreach ($series as $serie)
            <!--usando php: -->
            <!--<li class="list-group-item">/*$serie; */</li> -->
            <!--usando blade: -->
                <li class="list-group-item">
                    {{ $serie->nome }}
                    <form method="post" action="/series/{{ $serie->id}}" onsubmit="return confirm('Tem certeza que deseja remover {{ addslashes( $serie->nome )}}?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Excluir</button>
                    </form>
                </li>
        @endforeach
    </ul>
</div>

@endsection

