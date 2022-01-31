<?php

namespace App\Http\Controllers;

use App\Recepcion;
use Illuminate\Http\Request;

class RecepcionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('recepcion.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('recepcion.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $recepcion = new Recepcion();

        $recepcion->carnet = request('ci');
        $recepcion->nombrePropietario = request('nombrePropietario');
        $recepcion->domicilio = request('domicilio');
        $recepcion->telefono = request('telefono');
        $recepcion->fecha = request('fecha');
        $recepcion->nombrePaciente = request('nombrePaciente');
        $recepcion->especie = request('especie');
        $recepcion->raza = request('raza');
        $recepcion->edad = request('edad');
        $recepcion->peso = request('peso');
        $recepcion->esterilizado = request('flexRadioDefault');
        $recepcion->motivo = request('motivo');
        $recepcion->temperatura = request('flexRadioDefault10');
        $recepcion->heses = request('colorHeses');
        $recepcion->mucosas = request('colorMucosa');
        $recepcion->deshidratacion = request('desidratasion');
        $recepcion->piel = request('piel');
        $recepcion->boca = request('boca');
        $recepcion->palpacion = request('palpacion');
        $recepcion->animo = request('animo');
        $recepcion->medicamentos = request('medicamentos');
        $recepcion->total = request('costo');
        $recepcion->save();
        
        
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Recepcion  $recepcion
     * @return \Illuminate\Http\Response
     */
    public function show(Recepcion $recepcion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Recepcion  $recepcion
     * @return \Illuminate\Http\Response
     */
    public function edit(Recepcion $recepcion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Recepcion  $recepcion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recepcion $recepcion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Recepcion  $recepcion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recepcion $recepcion)
    {
        //
    }
}
