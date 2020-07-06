<?php

namespace App\Http\Controllers;

use App\Conflito;
use App\Galaxia;
use App\Raca;
use App\Sistema;
use Illuminate\Http\Request;

class SistemaController extends Controller
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
        return view('/sistema/novo', [
            'galaxias' => Galaxia::all(),
            'racas' => Raca::all(),
            'conflitos' => Conflito::all()
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
        $sistema = new Sistema();
        $sistema->nome = $request->input('nome');
        $sistema->sol = $request->input('sol');
        $sistema->num_planetas = $request->input('num_planetas');
        $sistema->estacao = $request->input('estacao');
        $sistema->galaxia()->associate($request->input('galaxia'));
        $sistema->raca()->associate($request->input('raca'));
        $sistema->conflito()->associate($request->input('conflito'));
        $sistema->save();
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
