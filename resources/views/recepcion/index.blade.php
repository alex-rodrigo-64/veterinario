@extends('admin.layout')

@section('content')

<div class="container">
    <div class="card">
        <div class="card-header text-center">
            <h3><FONT FACE="small fonts">RECEPCION</FONT></h3>
        </div>
        <div class="card-body">
            <h5 class="text-center"><FONT FACE="small fonts">REGISTRO DE PROPIETARIO</FONT></h5>
        </div>
        
        <form action="{{url('/producto/registrarProducto')}}" id="idform" class="form" method="post"
        enctype="multipart/form-data">

        {{ csrf_field()}}


        <div class="col-md-11 mx-auto ">

            <div class=" row justify-content-center">
                <div class="col-5">

                    <label for="nombre" class="control-label">{{'Nombre'}}</label>
                    <input type="text" class="form-control" autocomplete="off" name="nombrePropietario" id="nombrePropietario">
                    <span id="estadoNombre"></span>
                    
                </div>
                <div class="col-5">

                    <label for="telefono" class="control-label">{{'Telefono'}}</label>
                    <input type="text" class="form-control" autocomplete="off" name="telefono" id="telefono">
                    <span id="estadoTelefono"></span>
                    
                </div>

            </div>
            <div class=" row justify-content-center">
                <div class="col-5">

                    <label for="domicilio" class="control-label">{{'Domicilio'}}</label>
                    <input type="text" class="form-control" autocomplete="off" name="domicilio" id="domicilio">
                    <span id="estadoDomicilio"></span>
                    
                </div>
                <div class="col-5">

                    
                </div>

            </div>
            <br>
        </div>    
    </form>
        
    </div>
</div>
<a  href="{{ url('/recepcion/create') }}">ss</a>

@endsection