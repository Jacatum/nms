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
        $planeta = Planeta::make($request->all());
        $planeta->save();

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
        $dados = Planeta::search($request->all());
        return view('/planeta/pesquisa', ['resultado' => $dados]);
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
