@extends('admin.layout')

@section('content')


<div class="card">
    <div class="card-body">
        <form action="{{url('/cirugia/programar')}}" class="form" method="post"
                    enctype="multipart/form-data">
                
                    {{ csrf_field()}}
            <div class="card">
                <div class="card-header text-center">
                    <h3><FONT FACE="small fonts">PROGRAMAR CIRUGÍA</FONT></h3>
                </div>
                <div class="card-body">
                    
                            <div class=" row justify-content-center">
                                <div class="col-5">
                    
                                    <label for="carnet" class="control-label">{{'Carnet de Identidad'}}</label><span class="text-red">*</span>
                                    <input class="form-control" autocomplete="off" name="carnet" id="carnet" list="codigoCi">
                                    <datalist id="codigoDatalist">
                                    </datalist>
                                    <span id="estadoCarnet"></span>
                    
                                </div>
                                <div class="col-5">
                    
                                    <label for="nombreMascota" class="control-label">{{'Nombre de Mascota'}}</label><span class="text-red">*</span>
                                    <input class="form-control" autocomplete="off" name="nombreMascota" id="nombreMascota" list="codigoMascota">
                                    <datalist id="nombreDatalist">
                                    </datalist>
                                    <span id="estadoMascota"></span>
                                    
                                </div>
                    
                            </div>
                            <br>
                            <div class=" row justify-content-center">
                                <div class="col-5">
                    
                                    <label for="detalleCirugia" class="control-label">{{'Detalle de la cirugia'}}</label><span class="text-red">*</span>
                                    <textarea class="form-control" autocomplete="off" aria-label="With textarea" 
                                        name="detalleCirugia" id="detalleCirugia" style="resize: none;height: 100%;"></textarea>
                                    
                                </div>
                                
                                <div class="col-5">
                    
                                    <label for="fecha" class="control-label">{{'Fecha'}}</label><span class="text-red">*</span>
                                    <input name="fecha" id="fecha" type="datetime-local" class="form-control" name="" id="">
                                    
                                </div>
                    
                            </div>
                            <br><br>
                            <div class=" row justify-content-center">
                                <div class="col-5">
                                    <label for="costo" class="control-label">{{'Costo'}}</label><span class="text-red">*</span>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" autocomplete="off" name="costo" id="costo"
                                        onkeyup="validarCosto()"
                                        onkeypress="return ((event.charCode >= 48 && event.charCode <= 57) 
                                        ||( event.charCode == 44))">
                                    <span class="input-group-text">Bs</span>
                                </div>
                                    
                                </div>
                                    
                                
                                
                                <div class="col-5">
                                </div>
                                    
                    
                            </div>
                    
                            
                        
                </div>

                <div class="card-footer">
                    <div class=" row justify-content-center">
                        <div class="col-5">
                            <a href="{{url('servicios')}}" class="btn btn-primary" style="position: static">Atras</a>
                        </div>
                        <div class="col-5">
                            <button type="submit" class="btn btn-success float-right">Guardar</button>
                        </div>
                    </div>   
                </div>
            </div>
        </form>
    </div>
</div>


@endsection