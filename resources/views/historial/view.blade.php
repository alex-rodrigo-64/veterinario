@extends('admin.layout')

@section('content')


<div class="card">
    <div class="card-header">
        <h4 class="text-center"><FONT FACE="small fonts"><b>INFORMACION</b></FONT></h4>
    </div>
    <div class="card-body">
        <div class="row justify-content-center">
            <div class="col-6">
                <h5 class="text-left"><FONT FACE="small fonts">Nombre de propietario:&nbsp;&nbsp;<b>{{$basica->nombrePropietario}}</b></FONT></h5> 
                <h5 class="text-left"><FONT FACE="small fonts">Nombre de Paciente:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>{{$basica->nombrePaciente}}</FONT></h5>
            </div>
            <div class="col-20">
                <h5 class="text-left"><FONT FACE="small fonts">Carnet:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>{{$basica->carnet}}</b></FONT></h5> 
                <h5 class="text-left"><FONT FACE="small fonts">Telefono:&nbsp;&nbsp;<b>{{$basica->telefono}}</FONT></h5>
            </div>
        </div>
        
        <br><br>
        <div class="card">
            <div class="card-header">
                <h6 class="text-center"><FONT FACE="small fonts"><b>FECHA DE CONSULTA</b></FONT></h6>
            </div>
            
            <div class="card-body text-center">
                @foreach ($informacion as $informacion)
                    <a href="{{ url('/historial/'.$informacion->carnet.'/'.$informacion->nombrePaciente.'/'.$informacion->fecha)}}">
                        <button class="btn btn-primary btn-lg " style='margin:10px;width:200px; height:50px; background: linear-gradient(100deg, #f7f9fd, rgb(255, 155, 62));'>
                            <b class="text-dark">
                                <FONT SIZE=4>{{$informacion->fecha}}</font>
                            </b>    
                        </button>
                    </a>
                @endforeach
                
            </div>
            <div class="card-footer">
            </div>
        </div>
        
    </div>



    <div class="card-footer">
        <div class="row justify-content-center">
            <a href="{{ url('historial/') }}" ><button class="btn btn-primary" type="button">Volver</button></a>
        </div>
    </div>
</div>

@endsection