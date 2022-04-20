<?php

namespace App\Http\Controllers;

use App\Cirugia;
use Illuminate\Http\Request;

class CirugiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('servicios.cirugia.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('servicios.cirugia.programar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $cirugia = new Cirugia();

        $cirugia->carnetIdentidad = request('carnet');
        $cirugia->nombreMascota = request('nombreMascota');
        $cirugia->detalle = request('detalleCirugia');
        $cirugia->fecha = request('fecha');
        $cirugia->total = request('costo');
        
        //$cirugia->paciente = request('detalle');

        $cirugia->save();
        

        return redirect('/cirugia');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cirugia  $cirugia
     * @return \Illuminate\Http\Response
     */
    public function show(Cirugia $cirugia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cirugia  $cirugia
     * @return \Illuminate\Http\Response
     */
    public function edit(Cirugia $cirugia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cirugia  $cirugia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cirugia $cirugia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cirugia  $cirugia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cirugia $cirugia)
    {
        //
    }
}
