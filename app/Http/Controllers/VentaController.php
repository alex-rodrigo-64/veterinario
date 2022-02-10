<?php

namespace App\Http\Controllers;

use App\venta;
use App\VentaDetalle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function Psy\bin;

class VentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('venta.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('venta.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $aux = request('fecha');
        
        $venta = new venta();

        $venta->nombre = request('nombre');
        $venta->fecha = request('fecha');
        $venta->total = request('total');
        $venta->observaciones = request('observaciones');

        
        $venta->save();
        
        //dd($aux);
        $id_venta = DB::table('ventas')
        ->select('id')
        ->where('fecha','=',request('fecha'))
        ->first();
        
        

                if($request->input('codigoI') && $request->input('nombre') && $request->input('cantidad') && $request->input('precio') && $request->input('subTotal'))
                {
                    $codigo_barra = request('codigoI');
                    $nombre = request('nombre');
                    $cantidad = request('cantidad');
                    $precio = request('precio');
                    $subTotal = request('subTotal');

                        for ($i=0; $i < sizeOf($nombre); $i++) { 
                                if(!is_null($nombre[$i])){

                                $venta_detalle = new VentaDetalle();
                                
                                $venta_detalle->codigo_barra = $codigo_barra[$i];
                                $venta_detalle->nombre = $nombre[$i];
                                $venta_detalle->cantidad = $cantidad[$i];
                                $venta_detalle->precio = $precio[$i];
                                $venta_detalle->sub_total = $subTotal[$i];
                                $venta_detalle->id_venta = $id_venta->id;
                                $venta_detalle->save();
                            }
                        }  
                 }
         return redirect('/venta');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function show(venta $venta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function edit(venta $venta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, venta $venta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function destroy(venta $venta)
    {
        //
    }

    public function inventario()
    {
        return view('venta.inventario');
    }

}
