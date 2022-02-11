<?php

namespace App\Http\Controllers;

use App\Peluqueria;
use App\Recepcion;
use Illuminate\Http\Request;

class PeluqueriaController extends Controller
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
        $recepcion = Recepcion::all();
        return view('peluqueria.create',['carnet'=>$recepcion]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $peluqueria = new Peluqueria();

        $peluqueria->carnet = $request->get('carnetBuscar');
        $peluqueria->nombrePaciente = request('nombreMascota');
        $peluqueria->detalleCorte = request('detalleCorte');
        $peluqueria->total = request('total');

        $peluqueria->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Peluqueria  $peluqueria
     * @return \Illuminate\Http\Response
     */
    public function show(Peluqueria $peluqueria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Peluqueria  $peluqueria
     * @return \Illuminate\Http\Response
     */
    public function edit(Peluqueria $peluqueria)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Peluqueria  $peluqueria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Peluqueria $peluqueria)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Peluqueria  $peluqueria
     * @return \Illuminate\Http\Response
     */
    public function destroy(Peluqueria $peluqueria)
    {
        //
    }
}
