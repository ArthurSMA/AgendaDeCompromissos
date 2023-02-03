<?php

namespace App\Http\Controllers;

use App\Models\Compromisso;
use Illuminate\Http\Request;

class CompromissoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $compromissos = Compromisso::all();

        return view('compromissos.index')->with('compromissos', $compromissos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('compromissos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $compromisso = new Compromisso();

        $compromisso->nome = $request->input('nome');
        $compromisso->data = $request->input('data');
        $compromisso->horaInicio = $request->input('horaInicio');
        $compromisso->horaFim = $request->input('horaFim');
        $compromisso->local = $request->input('local');
        $compromisso->status = $request->input('status');
        $compromisso->observacoes = $request->input('observacoes');

        $compromisso->save();

        $compromissos = Compromisso::all();

        return view('compromissos.index')->with('compromissos', $compromissos)
            ->with('msg', 'Compromisso cadastrado!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $compromisso = Compromisso::find($id);

        if ($compromisso) {
            return view('compromissos.show')->with('compromisso', $compromisso);
        } else {
            return view('compromissos.show')->with('msg', 'Compromisso não encontrado!');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $compromisso = Compromisso::find($id);

        if ($compromisso) {
            return view('compromissos.edit')->with('compromisso', $compromisso);
        } else {
            $compromissos = Compromisso::all();
            return view('compromissos.index')->with('compromissos', $compromissos)
                ->with('msg', 'Compromisso não encontrado!');
        }
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
        $compromisso = Compromisso::find($id);

        $compromisso->nome = $request->input('nome');
        $compromisso->data = $request->input('data');
        $compromisso->horaInicio = $request->input('horaInicio');
        $compromisso->horaFim = $request->input('horaFim');
        $compromisso->local = $request->input('local');
        $compromisso->status = $request->input('status');
        $compromisso->observacoes = $request->input('observacoes');

        $compromisso->save();

        $compromissos = Compromisso::all();
        return view('compromissos.index')->with('compromissos', $compromissos)
            ->with('msg', 'Compromisso atualizado!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $compromisso = Compromisso::find($id);

        $compromisso->delete();

        $compromissos = Compromisso::all();
        return view('compromissos.index')->with('compromissos', $compromissos)->with('msg', 'Compromisso excluido!');
    }
}
