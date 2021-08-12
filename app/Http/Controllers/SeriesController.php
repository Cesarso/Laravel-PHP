<?php


namespace App\Http\Controllers;


use Illuminate\Support\Facades\Request;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        $series = [
            'Grey\'s Anatomi',
            'Lost',
            'Agents of SHIELD',
        ];
        return view('series.index',[
            'series'=>$series
        ]);


    }

    public function create()
    {
        return view('series.create');

    }

}
