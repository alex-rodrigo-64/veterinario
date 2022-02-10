@extends('admin.layout')

@section('content')

    <link href="{{ asset('recepcions/index.css') }}" rel="stylesheet">
    <script src="{{ asset('recepcions/index.js') }}"  ></script>
    

<div class="container" >
    <div class="card">
        <div class="card-header text-center">
            <h3><FONT FACE="small fonts">RECEPCION</FONT></h3>
        </div>
        <div class="card-body">
            <h6 class="text-center"><FONT FACE="small fonts">REGISTRO DE PROPIETARIO</FONT></h6>
        </div>

        
        <form action="{{url('/recepcion')}}" id="idform" class="form" method="post"
        enctype="multipart/form-data">

        {{ csrf_field()}}


        <div class="col-md-11 mx-auto ">
            <div class=" row justify-content-center">
                <div class="col-5">

                    <label for="ci" class="control-label">{{'Carnet'}}</label><span class="text-red">*</span>
                    <input type="text" class="form-control" autocomplete="off" name="ci" onkeyup="validarCarnet()" onkeypress="return (event.charCode >= 48 && event.charCode <= 57)" id="ci">
                    <span id="estadoCi"></span>
                </div>
                <div class="col-5">

                    <label for="nombrePropietario" class="control-label">{{'Nombre'}}</label><span class="text-red">*</span>
                    <input type="text" class="form-control" onkeyup="validarNombre()" autocomplete="off" name="nombrePropietario" id="nombrePropietario"
                    onkeypress="return ((event.charCode >= 65 && event.charCode <= 90)||(event.charCode == 32)||(event.charCode == 241 || event.charCode == 209)||(event.charCode >= 97 && event.charCode <= 122))">
                    <span id="estadoNombre"></span>
                    
                </div>

            </div>

            <div class=" row justify-content-center">
                <div class="col-5">

                    <label for="domicilio" class="control-label">{{'Domicilio'}}</label>
                    <input type="text" class="form-control" autocomplete="off" name="domicilio" id="domicilio"
                    onkeypress="return ((event.charCode >= 48 && event.charCode <= 57)||(event.charCode == 32)||
                    (event.charCode >= 65 && event.charCode <= 90)||(event.charCode >= 97 && event.charCode <= 122)
                    ||(event.charCode == 241 || event.charCode == 209)
                    ||(event.charCode == 44)||(event.charCode == 46))" onkeyup="validarDomicilio()">
                    <span id="estadoDomicilio"></span>
                    
                </div>
                <div class="col-5">

                    <label for="nanombre_contactome">Fecha</label>
                            <input class="form-control text-dark" type="datetime-local" name="fecha" readonly
                                id="fecha" onblur="validarFecha()">
                    
                </div>

            </div>
            <div class=" row justify-content-center">
                <div class="col-5">

                    <label for="telefono" class="control-label">{{'Telefono'}}</label><span class="text-red">*</span>
                    <input type="text" class="form-control" autocomplete="off"  name="telefono" id="telefono" onkeyup="validarTelefono()"
                    onkeypress="return ((event.charCode >= 48 && event.charCode <= 57))">
                    <span id="estadoTelefono"></span>
                    
                </div>
                <div class="col-5">

                </div>

            </div>
            <br>


            <div class="card-header">
                <h6 class="text-center"><FONT FACE="small fonts">REGISTRO DE PACIENTE</FONT></h6>
            </div>
            <br>
            <div class=" row justify-content-center">
                <div class="col-5">

                    <label for="nombrePaciente" class="control-label">{{'Nombre'}}</label><span class="text-red">*</span>
                    <input type="text" class="form-control" autocomplete="off" name="nombrePaciente" id="nombrePaciente"
                    onkeyup="validarNombrePaciente()"
                    onkeypress="return ((event.charCode >= 65 && event.charCode <= 90)||(event.charCode == 32)||(event.charCode == 241 || event.charCode == 209)||(event.charCode >= 97 && event.charCode <= 122))">
                    <span id="estadoPaciente"></span>
                    
                </div>
                <div class="col-5">

                    <label for="especie" class="control-label">{{'Especie'}}</label><span class="text-red">*</span>
                    <input type="text" class="form-control" autocomplete="off" name="especie" id="especie"
                    onkeyup="validarEspecie()"
                    onkeypress="return ((event.charCode >= 65 && event.charCode <= 90)||(event.charCode == 32)||(event.charCode == 241 || event.charCode == 209)||(event.charCode >= 97 && event.charCode <= 122))">
                    <span id="estadoEspecie"></span>
                    
                </div>

            </div>
            <div class=" row justify-content-center">
                <div class="col-5">

                    <label for="raza" class="control-label">{{'Raza'}}</label><span class="text-red">*</span>
                    <input type="text" class="form-control" autocomplete="off" name="raza" id="raza"
                    onkeyup="validarRaza()"
                    onkeypress="return ((event.charCode >= 65 && event.charCode <= 90)||(event.charCode == 32)||(event.charCode == 241 || event.charCode == 209)||(event.charCode >= 97 && event.charCode <= 122))">
                    <span id="estadoRaza"></span>
                    
                </div>
                <div class="col-5">

                    <label for="edad" class="control-label">{{'Edad'}}</label><span class="text-red">*</span>
                    <input type="text" class="form-control" autocomplete="off" name="edad" id="edad"
                    onkeyup="validarEdad()"
                    onkeypress="return ((event.charCode >= 48 && event.charCode <= 57) || (event.charCode >= 65 && event.charCode <= 90)||(event.charCode == 32)||(event.charCode == 241 || event.charCode == 209)||(event.charCode >= 97 && event.charCode <= 122))">
                    <span id="estadoEdad"></span>
                    
                </div>

            </div>
           
            <div class=" row justify-content-center">
                <div class="col-5">

                    <label for="esterilizado" class="control-label">{{'Esterilizado'}}</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="SI">
                        <label class="form-check-label" for="flexRadioDefault">
                          SI
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked value="NO">
                        <label class="form-check-label" for="flexRadioDefault">
                          NO
                        </label>
                      </div>
                    
                </div>
                <div class="col-5">

                    <label for="peso" class="control-label">{{'Peso'}}</label><span class="text-red">*</span>
                    <input type="text" class="form-control" autocomplete="off" name="peso" id="peso"
                    onkeyup="validarPeso()"
                    onkeypress="return ((event.charCode >= 48 && event.charCode <= 57) || (event.charCode >= 65 && event.charCode <= 90)||(event.charCode == 32 || event.charCode == 44)||(event.charCode >= 97 && event.charCode <= 122))">
                    <span id="estadoPeso"></span>
                    
                </div>

            </div>

            <div class="card-header">
                <h6 class="text-center"><FONT FACE="small fonts">MOTIVO DE CONSULTA</FONT></h6>
            </div>
            <br>

            <div class=" row justify-content-center">
                
                <div class="col-10">
                    <textarea class="form-control" autocomplete="off" aria-label="With textarea" name="motivo" id="motivo" style="resize: none;height: 200%;"></textarea>
                </div>

            </div>
            
            
         
        <br>  
        <br>
        <br>
        <br>

        
        <div class="card-header">
            <h6 class="text-center"><FONT FACE="small fonts">EXAMEN FISICO</FONT></h6>
        </div>
        <br>

        <div class=" row justify-content-center">
            <div class="col-5">

                <label for="temperatura" class="control-label">{{'Temperatura'}}</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault10" id="flexRadioDefault10" value="Alta">
                    <label class="form-check-label" for="flexRadioDefault10">
                      Alta
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault10" id="flexRadioDefault20" checked value="Normal">
                    <label class="form-check-label" for="flexRadioDefault10">
                      Normal
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault10" id="flexRadioDefault30"  value="Baja">
                    <label class="form-check-label" for="flexRadioDefault10">
                      Baja
                    </label>
                  </div>
                  
                

            </div>
            <div class="col-5">

                <label for="colorHeses" class="control-label">{{'Color de Heces'}}</label>
                    <input type="text" class="form-control" autocomplete="off" name="colorHeses" id="colorHeses"
                    onkeyup="validarColorHeses()"
                    onkeypress="return ((event.charCode == 241 || event.charCode == 209) || (event.charCode >= 65 && event.charCode <= 90)||
                    (event.charCode == 32 )||(event.charCode >= 97 && event.charCode <= 122))">
                    <span id="estadoColorHeses"></span>
                
            </div>
            

        </div>
        
        <div class=" row justify-content-center">
            <div class="col-5">

                <label for="colorMucosa" class="control-label">{{'Color de Mucosa'}}</label>
                    <input type="text" class="form-control" autocomplete="off" name="colorMucosa" id="colorMucosa"
                    onkeyup="validarColorMucosa()"
                    onkeypress="return ((event.charCode == 241 || event.charCode == 209) || (event.charCode >= 65 && event.charCode <= 90)||
                    (event.charCode == 32 )||(event.charCode >= 97 && event.charCode <= 122))">
                    <span id="estadoColorMucosa"></span>
                
            </div>
            <div class="col-5">

                <label for="deshidratasion" class="control-label">{{'Deshidratacion'}}</label>
                    <input type="text" class="form-control" autocomplete="off" name="deshidratasion" id="deshidratasion"
                    onkeyup="validarDeshidratacion()"
                    onkeypress="return ((event.charCode == 241 || event.charCode == 209) || (event.charCode >= 65 && event.charCode <= 90)||
                    (event.charCode == 32 )||(event.charCode >= 97 && event.charCode <= 122))">
                    <span id="estadoDeshidratasion"></span>
                

            </div>

        </div>
        <div class=" row justify-content-center">
            <div class="col-5">

                <label for="piel" class="control-label">{{'Piel Pelo'}}</label>
                    <input type="text" class="form-control" autocomplete="off" name="piel" id="piel"
                    onkeyup="validarPiel()"
                    onkeypress="return ((event.charCode == 241 || event.charCode == 209) || (event.charCode >= 65 && event.charCode <= 90)||
                    (event.charCode == 32 )||(event.charCode >= 97 && event.charCode <= 122))">
                    <span id="estadoPiel"></span>
                
            </div>
            <div class="col-5">

                <label for="boca" class="control-label">{{'Boca Dientes'}}</label>
                    <input type="text" class="form-control" autocomplete="off" name="boca" id="boca"
                    onkeyup="validarBoca()"
                    onkeypress="return ((event.charCode == 241 || event.charCode == 209) || (event.charCode >= 65 && event.charCode <= 90)||
                    (event.charCode == 32 )||(event.charCode >= 97 && event.charCode <= 122))">
                    <span id="estadoBoca"></span>
                

            </div>

        </div>
        <div class=" row justify-content-center">
            <div class="col-5">

                <label for="palpacion" class="control-label">{{'Palpacion Abdominal'}}</label>
                    <input type="text" class="form-control" autocomplete="off" name="palpacion" id="palpacion"
                    onkeyup="validarPalpacion()"
                    onkeypress="return ((event.charCode == 241 || event.charCode == 209) || (event.charCode >= 65 && event.charCode <= 90)||
                    (event.charCode == 32 )||(event.charCode >= 97 && event.charCode <= 122))">
                    <span id="estadoPalpacion"></span>
                
            </div>
            <div class="col-5">

                <label for="animo" class="control-label">{{'Estado de Animo'}}</label>
                    <input type="text" class="form-control" autocomplete="off" name="animo" id="animo"
                    onkeyup="validarAnimo()"
                    onkeypress="return ((event.charCode == 241 || event.charCode == 209) || (event.charCode >= 65 && event.charCode <= 90)||
                    (event.charCode == 32 )||(event.charCode >= 97 && event.charCode <= 122))">
                    <span id="estadoAnimo"></span>
                

            </div>

            
        </div>

        <br>
        <div class="card-header">
                <h6 class="text-center"><FONT FACE="small fonts">MEDICAMENTOS APLICADOS</FONT></h6>
            </div>
            <br>

            <div class=" row justify-content-center">
                
                <div class="col-10">
                    <textarea class="form-control" aria-label="With textarea" name="medicamentos" id="medicamentos" style="resize: none;height: 200%;"></textarea>
                </div>

            </div>
            
            
         
        <br>  
        <br>
        <br>
        <br>

        <div class=" row justify-content-center">
            <div class="col-5">

                <label for="costo" class="control-label">{{'Costo Total'}}</label><span class="text-red">*</span>
                    <div class="input-group mb-3">
                            <input type="text" class="form-control" autocomplete="off" name="costo" id="costo"
                            onkeyup="validarCosto()"
                            onkeypress="return ((event.charCode >= 48 && event.charCode <= 57) 
                            ||( event.charCode == 44))">
                        <span class="input-group-text">Bs</span>
                    </div>
                <span id="estadoCosto"></span>
            </div>
            
            <div class="col-5">
            </div>

        </div>
        <br>

        <div class=" row justify-content-center">
            <div class="col-5">

                <a href="{{url('/')}}" class="btn btn-secondary">Cancelar</a>
                
            </div>
            <div class="col-5">

                <button type="button" onclick="submitDeleteSale()" id="enviar" disabled class="btn btn-primary float-right">
                    Guardar
                </button>

            </div>

        </div>

        <br>
        </div> 
    </form>
        
    </div>
</div>

    
@endsection