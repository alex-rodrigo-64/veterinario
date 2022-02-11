@extends('admin.layout')

@section('content')

<div class="container">
    <div class="card">
        <div class="card-header text-center">
            <h3><FONT FACE="small fonts">PELUQUERIA</FONT></h3>
        </div>
        <div class="card-body">
            <h5 class="text-center"><FONT FACE="small fonts">REGISTRO NUEVO</FONT></h5>
        </div>



        
        <form action="{{url('/peluqueria')}}" class="form" method="post"
        enctype="multipart/form-data">

        {{ csrf_field()}}


        <div class="col-md-11 mx-auto ">
            <div class=" row justify-content-center">
                <div class="col-5">

                    <label for="carnetBuscar" class="control-label">{{'Introduzca Número de Carnet de Identidad'}}</label>
                    <select name="carnetBuscar" id="carnetBuscar"
                            class="form-control {{$errors->has('recepcion')?'is-invalid':''}}">
                            
                        </select><span id="estadoSucursal"></span>
                        {!! $errors->first('recepcion','<div class="invalid-feedback">:message</div>') !!}
    
                </div>
                <div class="col-5">

                    <label for="nombreMascota" class="control-label">{{'Nombre de Mascota'}}</label>
                    <select name="id_carnet" id="id_carnet" class="form-control {{$errors->has('sucursal')?'is-invalid':''}}" >
                        
                        </select><span id="estadoSucursal"></span>
                        {!! $errors->first('nombre','<div class="invalid-feedback">:message</div>') !!}
                    
                </div>

            </div>
            <br>
            <div class=" row justify-content-center">
                <div class="col-5">

                    <label for="detalleCorte" class="control-label">{{'Detalle de Corte'}}</label>
                    <textarea class="form-control" autocomplete="off" aria-label="With textarea" 
                        name="detalleCorte" id="detalleCorte" style="resize: none;height: 100%;"></textarea>
                    
                </div>
                
                <div class="col-5">

                    <div class="form-group">
                        <label for="email">Costo</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Bs.</span>
                            </div>
                            <input type="number" require onclick="if(this.value=='0.00') this.value=''"
                                class="form-control" id="total" name="total" autocomplete="off">
                        </div>
                    </div>
                    
                </div>

            </div>


        <br>
        <br>
        <div class=" row justify-content-center">
            <div class="col-5">
                <a href="{{url('servicios')}}" class="btn btn-primary" style="position: static">Atras</a>
            </div>
            <div class="col-5">
                <button type="submit" class="btn btn-success float-right">Guardar</button>
            </div>
        </div>   
    </form>
        
    </div>
</div>

@endsection