<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SeriesController extends Controller
{
    public function index(Request $request){
/**        $series = DB::select('select * from series'); */
/**$series = Serie::all(); */

        $series = Serie::query()->orderBy('nome')->get();

        return view('series.index')->with('series', $series);

    }

    public function create()
    {
        return view('series.create');
    }




    public function store(Request $request)
    {

        Serie::create($request->all());
        return redirect()->route('series.index');

        //return to_route('series.index');
        //return redirect('/series');
    }

    public function destroy(Request $request)
    {
        dd($request->route());

       Serie::destroy($request->id);
       return redirect()->route('series.index');

    }
}


        /**-
        $serie = new Serie();
        $serie->nome = $nomeSerie;
        $serie->save();
        return redirect('/series');
         */

        /**-
        if(DB::insert('insert into series (nome) values (?)', [$nomeSerie])) {
            return redirect('/series');
            return "OK";
        }else{
            return "Erro";
        }
         */

