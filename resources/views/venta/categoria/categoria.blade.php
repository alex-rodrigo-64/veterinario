@extends('admin.layout')

@section('content')

<div class="container">
    <div class="card">
        <div class="card-header text-center">
            <h3><FONT FACE="small fonts">CATEGORIA</FONT></h3>
        </div>
        <div class="card-body">
            <h5 class="text-center"><FONT FACE="small fonts">REGISTRO DE NUEVA CATEGORIA</FONT></h5>
        </div>



        
        <form action="{{url('/categoria')}}" class="form" method="post"
        enctype="multipart/form-data">

        {{ csrf_field()}}


        <div class=" row justify-content-center">
            <div class="col-6">
                <label for="nombre" class="control-label required">{{'Nombre'}}</label>
                <input type="text" class="form-control  " name="nombre"
                    id="nombre" value="" >
                
            </div>
        </div>
        <div class=" row justify-content-center">
            <div class="col-6">

                <label for="descripcion" class="control-label required">{{'Descripcion'}}</label>
                <input type="text" class="form-control  "
                    name="descripcion" id="descripcion"
                    value="">
                


            </div>
        </div>

        <br>
        <br>
        <div class=" row justify-content-center">
            <div class="col-5">
                <a href="{{url('inventario')}}" class="btn btn-primary" style="position: static">Regresar</a>
            </div>
            <div class="col-5">
                <button type="submit" class="btn btn-success float-right">Guardar</button>
            </div>
        </div>   
    </form>
        
    </div>
</div>

@endsection