@extends('admin.layout')

@section('content')


<div class="card">
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
                        <h5 class="text-left"><FONT FACE="small fonts">Nombre:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>{{$informacion->nombrePaciente}}</b></FONT></h5> 
                        <h5 class="text-left"><FONT FACE="small fonts">Especie:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>{{$informacion->especie}}</FONT></h5>
                        <h5 class="text-left"><FONT FACE="small fonts">Raza:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>{{$informacion->raza}}</FONT></h5>
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
        
    </div>
</div>

@endsection