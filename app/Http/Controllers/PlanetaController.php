<?php

namespace App\Http\Controllers;

use App\Biologico;
use App\Clima;
use App\Galaxia;
use App\Planeta;
use App\Mineral;
use App\Sistema;
use App\Tipo;
use App\Raca;
use App\Conflito;
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
            'clima' => Clima::all(),
            'galaxias' => Galaxia::all(),
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
        $planeta = Planeta::make($this->validator($request));

        if($request->sistema_id && $request->sistema_id != null) {
            if($sistema = Sistema::find($request->sistema_id)){
                $sistema->planetas()->save($planeta);
            } else {
                return redirect()->back()->withErrors(['sistema_invalid' => 'Sistema inválido']);
            }
        } else {
            return redirect()->back()->withErrors(['sistema_missing' => 'Sistema Obrigatório']);
        }

        if(isset($request['minerais'])) {
            foreach($request['minerais'] as $mineral) {
                $planeta->minerais()->attach($mineral);
            }
        }

        if(isset($request['biologicos'])) {
            foreach($request['biologicos'] as $biologico) {
                $planeta->biologicos()->attach($biologico);
            }
        }

        /*
        if($planeta->id) {
            $planeta->minerais()->sync($request->mineral??[]); // null coalescing
            $planeta->biologicos()->sync($request->biologico??[]); // null coalescing
        }
        */
        return redirect()->action('PlanetaController@search_get')->with('success','Planeta Cadastrado!');
    }

    public function validator(Request $request)
    {
        return $request->validate([
            'agua' => 'boolean|nullable',
            'farm' => 'required|string',
            'nome' => 'required',
            'portal' => 'boolean|nullable',
            'sentinela' => 'string|nullable',
            'tempestade' => 'boolean|nullable',
            'tipo_id' => 'int|nullable',
            'clima_id' => 'int|nullable',
            'sistema_id' => 'int|required'
        ]);
    }

    public function search_get()
    {
        #return redirect()->action('PlanetaController@create') ->with('success', ['Planeta Cadastrado!']);

        return view('/planeta/pesquisa', [
            'mineral' => Mineral::all(),
            'biologico' => Biologico::all(),
            'sistema' => Sistema::all(),
            'tipo' => Tipo::all(),
            'clima' => Clima::all(),
            'galaxia' => Galaxia::all(),
            'racas' => Raca::all(),
            'conflitos' => Conflito::all()
        ]);
    }
    
   
    public function search_post(Request $request)
    {
        #$campos = $this->validator($request);
        #$planetas = Planeta::with(['sistema', 'sistema.galaxia'])->search($campos)->get();
        /*
        $campos = $request->validate([
            'agua' => 'boolean|nullable',
            'farm' => 'string|nullable',
            'nome' => 'string|nullable',
            'portal' => 'boolean|nullable',
            'sentinela' => 'string|nullable',
            'tempestade' => 'boolean|nullable',
            'tipo_id' => 'int|nullable',
            'clima_id' => 'int|nullable',
            'sistema_id' => 'int|nullable',
            'galaxia_id' => 'int|nullable',
            #'mineral' => 'nullable',
            #'biologico' => 'nullable'
        ]);
        */
        $campos = $request->all();
        #$planetas = Planeta::with(['sistema', 'sistema.galaxia', 'minerais', 'biologicos'])->search($campos)->get();
        $planetas = Planeta::search($campos)->get();
        return view('/planeta/pesquisa', ['planetas' => $planetas]);
    }       

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $planeta = Planeta::find($id);
        #dd($planeta);
        return view('/planeta/visualizar', ['planeta' => $planeta]);
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
