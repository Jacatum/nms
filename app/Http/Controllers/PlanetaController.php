<?php

namespace App\Http\Controllers;

use App\Biologico;
use App\Clima;
use App\Galaxia;
use App\Planeta;
use App\Mineral;
use App\Sistema;
use App\Tipo;
use Illuminate\Http\Request;

class PlanetaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/planeta/novo', [
            'mineral' => Mineral::all(),
            'biologico' => Biologico::all(),
            'sistema' => Sistema::all(),
            'tipo' => Tipo::all(),
            'clima' => Clima::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $planeta = new Planeta();
        $planeta->nome = $request->input('nome');
        $planeta->farm = $request->input('farm');
        $planeta->sentinela = $request->input('sentinela');
        $planeta->tempestade = $request->input('tempestade');
        $planeta->agua = $request->input('agua');
        $planeta->portal = $request->input('portal');
        $planeta->sistema()->associate($request->input('sistema'));
        $planeta->tipo()->associate($request->input('tipo'));
        $planeta->clima()->associate($request->input('clima'));
        $planeta->save();

        $mineral = $request->input('mineral');
        if (isset($mineral))
        {
            foreach ($mineral as $mi)
            {
                $planeta->minerais()->attach($mi);
            }
        }

        $biologico = $request->input('biologico');
        if (isset($biologico))
        {
            foreach ($biologico as $bi)
            {
                $planeta->biologicos()->attach($bi);
            }
        }
    }

    public function search_get()
    {   
        return view('/planeta/pesquisa', [
            'mineral' => Mineral::all(),
            'biologico' => Biologico::all(),
            'sistema' => Sistema::all(),
            'tipo' => Tipo::all(),
            'clima' => Clima::all(),
            'galaxia' => Galaxia::all()
        ]);
    }
   
    public function search_post(Request $request)
    {   
        $dados = $request->all();
        $resultado = Planeta::where(function($query) use($dados) {

            if(isset($dados['nome'])) {
                $query->where('nome', 'LIKE', '%' . $dados['nome'] . '%');
            }

            if(isset($dados['galaxia'])) {
                $query->where('galaxia_id', $dados['galaxia']);
            }

            if(isset($dados['sistema'])) {
                $query->where('sistema_id', $dados['sistema']);
            }

            if(isset($dados['farm'])) {
                $query->where('farm', $dados['farm']);
            }

            if(isset($dados['sentinela'])) {
                $query->where('sentinela', $dados['sentinela']);
            }

            if(isset($dados['tempestade'])) {
                $query->where('tempestade', $dados['tempestade']);
            }

            if(isset($dados['agua'])) {
                $query->where('agua', $dados['agua']);
            }

            if(isset($dados['tipo'])) {
                $query->where('tipo', $dados['tipo']);
            }

            if(isset($dados['clima'])) {
                $query->where('clima', $dados['clima']);
            }

            if(isset($dados['portal'])) {
                $query->where('portal', $dados['portal']);
            }
            /*
            if(isset($dados['mineral'])) {
                foreach($dados['mineral'] as $mi) {
                    $query->where('mineral', $mi);
                }
            }

            if(isset($dados['biologico'])) {
                foreach($dados['biologico'] as $bi) {
                    $query->where('biologico', $bi);
                }
            }
            */
        })->get();
        return view('/planeta/pesquisa', ['resultado' => $resultado]);
    }       

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
