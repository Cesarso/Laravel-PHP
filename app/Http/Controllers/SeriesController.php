<?php


namespace App\Http\Controllers;


use App\Http\Requests\SeriesFormRequest;
use App\Serie;
use Illuminate\Http\Request;


class SeriesController extends Controller
{
    public function index(Request $request)
    {
        /*$series = Serie::all();*/
        /*realiza a consulta, ordena pelo nome, pega a consulta e retorna para Series*/
        $series = Serie::query()
            ->orderBy('nome')
            ->get();
        $mensagem = $request->session()->get('mensagem');
        return view("Series.index", compact("series", "mensagem"));

    }

    public function create()
    {
        return view('series.create');

    }

    public function store(SeriesFormRequest $request)
    {
        /*
            Foi colocado pra validar lá em Http->Requests->SerieFormRequest
            $request->validate([
            'nome'=> 'required|min:3' /*minimo de caracter
        ]);

        */

        /*nos poupa tempo*/
        $serie= Serie::create($request->all());
        $request->session()
            ->flash(
        'mensagem',
        "Série {$serie->id} criada com sucesso {$serie->nome}"
        );

        /*NÃO PRECISAMOS INSTANCIAR:
        $serie = new Serie();
        $serie->nome = $nome;
        var_dump($serie->save());*/


        /*redireciona de POST apar GET*/
        return redirect()->route('listar_series');


    }

    public function destroy (Request $request)

    {

        Serie::destroy($request->id);
        $request->session()
            ->flash(
                'mensagem',
                "Série removida com sucesso"
            );

        return redirect()->route('listar_series');

    }

}
