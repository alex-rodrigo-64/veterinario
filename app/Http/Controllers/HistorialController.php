<?php

namespace App\Http\Controllers;

use App\Historial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HistorialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pacientes = DB::table('recepcions')
                    ->select('carnet','nombrePropietario','nombrePaciente')
                    ->distinct()
                    ->get();

        return view('historial.index',compact('pacientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Historial  $historial
     * @return \Illuminate\Http\Response
     */
    public function show(Historial $historial, $ci , $nombre)
    {
        $informacion = DB::table('recepcions')
                        ->select('*')
                        ->where('carnet','=',$ci)
                        ->where('nombrePaciente','=',$nombre)
                        ->get();
            
        $basica = DB::table('recepcions')
                        ->select('carnet','nombrePropietario','nombrePaciente','telefono')
                        ->where('carnet','=',$ci)
                        ->where('nombrePaciente','=',$nombre)
                        ->first();

        return view('historial.view',compact('informacion','basica'));
    }

    public function informe(Historial $historial, $ci , $nombre, $fecha)
    {
        $informacion = DB::table('recepcions')
                        ->select('*')
                        ->where('carnet','=',$ci)
                        ->where('nombrePaciente','=',$nombre)
                        ->where('fecha','=',$fecha)
                        ->first();

            

        return view('historial.informe',compact('informacion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Historial  $historial
     * @return \Illuminate\Http\Response
     */
    public function edit(Historial $historial)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Historial  $historial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Historial $historial)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Historial  $historial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Historial $historial)
    {
        //
    }
}
