@extends('admin.layout')

@section('content')
    <script>

        function submitDeleteSale(){
            $("#idFormDeleteSale").submit();
            document.getElementById('idButtDelete').disabled=true;
        }
    </script>

<div class="card">
    <div class="row">
        <div class="col-5">

        </div>
        <div class="col-7">
            <button class="btn btn-sm btn-danger float-right" type="submit" data-toggle="modal"
                data-target="#exampleModal">Eliminar</button>
            <!-- modaal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Mensaje de Alerta</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <h3 class="text-center">
                                ¿Esta seguro de eliminar este registro de consulta?
                            </h3>
                        </div>
                        <div class="modal-footer">
                            <form method="POST" id="idFormDeleteSale" action="{{url('/historial/'.$informacion->carnet.'/'.$informacion->nombrePaciente.'/'.$informacion->fecha) }}">
                                @csrf
                                @method('DELETE')
                                <button type="button" id="idButtDelete" onclick="submitDeleteSale()" class="btn btn-danger float-right">Borrar</button>
                            </form>
                            <button type="button" class="btn btn-secondary"
                                data-dismiss="modal">Cancelar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card-header" style="background: linear-gradient(100deg, #f7f9fd, rgb(62, 130, 255));">
        
        <h4 class="text-center"><FONT FACE="small fonts"><b>INFORME <h6><FONT FACE="small fonts"><b>FECHA:&nbsp;{{$informacion->fecha}}</b></FONT></h6> </b></FONT></h4>
    </div>
     
    <div class="card-body">
        
        <div class="card">
            <div class="card-header" style="background: linear-gradient(100deg, #f7f9fd, rgb(62, 130, 255));">
                <h6 class="text-center"><FONT FACE="small fonts"><b>DATOS DEL PROPIETARIO</b></FONT></h6>
            </div>
            
            <div class="card-body " >
                <div class="row justify-content-center">
                    <div class="col-6">
                        <h5 class="text-left"><FONT FACE="small fonts">Nombre:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>{{$informacion->nombrePropietario}}</b></FONT></h5> 
                        <h5 class="text-left"><FONT FACE="small fonts">Domicilio:&nbsp;&nbsp;<b>{{$informacion->domicilio}}</FONT></h5>
                    </div>
                    <div class="col-20">
                        <h5 class="text-left"><FONT FACE="small fonts">Carnet:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>{{$informacion->carnet}}</b></FONT></h5> 
                        <h5 class="text-left"><FONT FACE="small fonts">Telefono:&nbsp;&nbsp;<b>{{$informacion->telefono}}</FONT></h5>
                    </div>
                </div>
            </div>
            <div class="card-footer">
            </div>
        </div>

        <div class="card">
            <div class="card-header" style="background: linear-gradient(100deg, #f7f9fd, rgb(62, 130, 255));">
                <h6 class="text-center"><FONT FACE="small fonts"><b>DATOS DEL PACIENTE</b></FONT></h6>
            </div>
            <div class="card-body ">
                <div class="row justify-content-center">
                    <div class="col-6">
                        <h5 class="text-left"><FONT FACE="small fonts">Nombre:&nbsp;&nbsp;&nbsp;<b>{{$informacion->nombrePaciente}}</b></FONT></h5> 
                        <h5 class="text-left"><FONT FACE="small fonts">Especie:&nbsp;&nbsp;&nbsp;&nbsp;<b>{{$informacion->especie}}</FONT></h5>
                        <h5 class="text-left"><FONT FACE="small fonts">Raza:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>{{$informacion->raza}}</FONT></h5>
                    </div>
                    <div class="col-20">
                        <h5 class="text-left"><FONT FACE="small fonts">Peso:&nbsp;&nbsp;<b>{{$informacion->peso}}</b></FONT></h5> 
                        <h5 class="text-left"><FONT FACE="small fonts">Edad:&nbsp;&nbsp;<b>{{$informacion->edad}}</FONT></h5>
                            <h5 class="text-left"><FONT FACE="small fonts">Esterilizado:&nbsp;&nbsp;<b>{{$informacion->esterilizado}}</FONT></h5>
                    </div>
                </div>
            </div>
            <div class="card-footer">
            </div>
        </div>
        <div class="card">
            <div class="card-header" style="background: linear-gradient(100deg, #f7f9fd, rgb(62, 130, 255));">
                <h6 class="text-center"><FONT FACE="small fonts"><b>MOTIVO DE CONSULTA</b></FONT></h6>
            </div>
            <div class="card-body ">     
                <div class=" row justify-content-center">
                    <div class="col-8">
                        <textarea class="form-control" autocomplete="off" readonly aria-label="With textarea" name="motivo" id="motivo" style="resize: none;height: 200%;">{{$informacion->motivo}}</textarea>
                    </div>
                </div>
                    <br><br><br>
            </div>
            <div class="card-footer">
            </div>
        </div>

        <div class="card">
            <div class="card-header" style="background: linear-gradient(100deg, #f7f9fd, rgb(62, 130, 255));">
                <h6 class="text-center"><FONT FACE="small fonts"><b>EXAMEN FISICO</b></FONT></h6>
            </div>
            <div class="card-body ">
                <div class="row justify-content-center">
                    <div class="col-5">
                        <h5 class="text-left"><FONT FACE="small fonts">Temperatura:&nbsp;&nbsp;&nbsp;&nbsp;<b>{{$informacion->temperatura}}</b></FONT></h5> 
                        <h5 class="text-left"><FONT FACE="small fonts">Desidratacion:&nbsp;&nbsp;<b>{{$informacion->desidratacion}}</FONT></h5>
                        <h5 class="text-left"><FONT FACE="small fonts">Piel y Pelo:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>{{$informacion->piel}}</FONT></h5>
                        <h5 class="text-left"><FONT FACE="small fonts">Boca Dientes:&nbsp;&nbsp;&nbsp;<b>{{$informacion->boca}}</FONT></h5>
                    </div>
                    <div class="col-20">
                        <h5 class="text-left"><FONT FACE="small fonts">Color de las Heses:&nbsp;&nbsp;<b>{{$informacion->heses}}</b></FONT></h5> 
                        <h5 class="text-left"><FONT FACE="small fonts">Color de Mucosas:&nbsp;&nbsp;&nbsp;<b>{{$informacion->mucosas}}</FONT></h5>
                        <h5 class="text-left"><FONT FACE="small fonts">Estado de Animo:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>{{$informacion->animo}}</FONT></h5>
                        <h5 class="text-left"><FONT FACE="small fonts">Palpitacion Abdominal:&nbsp;&nbsp;<b>{{$informacion->palpacion}}</FONT></h5>
                    </div>
                </div>
            </div>
            <div class="card-footer">
            </div>
        </div>
        <div class="card">
            <div class="card-header" style="background: linear-gradient(100deg, #f7f9fd, rgb(62, 130, 255));">
                <h6 class="text-center"><FONT FACE="small fonts"><b>MEDICAMENTOS APLICADOS</b></FONT></h6>
            </div>
            <div class="card-body ">     
                <div class=" row justify-content-center">
                    <div class="col-8">
                        <textarea class="form-control" autocomplete="off" readonly aria-label="With textarea" name="motivo" id="motivo" style="resize: none;height: 200%;">{{$informacion->medicamentos}}</textarea>
                    </div>
                </div>
                    <br><br><br>
            </div>
            <div class="card-footer">
            </div>
        </div>
    </div>



    <div class="card-footer">
        <div class="row justify-content-center">
            <a href="{{ url('historial/'.$informacion->carnet.'/'.$informacion->nombrePaciente) }}" ><button class="btn btn-primary" type="button">Volver</button></a>
        </div>
        
    </div>
</div>

@endsection