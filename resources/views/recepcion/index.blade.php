@extends('admin.layout')

@section('content')
    
    <script>
        function validarFecha(){
            const date = new Date(),
          ten = (i)=> ((i < 10 ? '0' : '') + i ),
                YYYY = date.getFullYear(),
                MTH = ten(date.getMonth() + 1),
                DAY = ten(date.getDate()),
                HH = ten(date.getHours()),
                MM = ten(date.getMinutes()),
                SS = ten(date.getSeconds())
                // MS = ten(date.getMilliseconds())

            document.getElementById("fecha").value=`${YYYY}-${MTH}-${DAY}T${HH}:${MM}`;
        }
        setInterval(validarFecha,1500);
    </script>

<div class="container" >
    <div class="card">
        <div class="card-header text-center">
            <h3><FONT FACE="small fonts">RECEPCION</FONT></h3>
        </div>
        <div class="card-body">
            <h5 class="text-center"><FONT FACE="small fonts">REGISTRO DE PROPIETARIO</FONT></h5>
        </div>

        
        <form action="{{url('/recepcion')}}" id="idform" class="form" method="post"
        enctype="multipart/form-data">

        {{ csrf_field()}}


        <div class="col-md-11 mx-auto ">

            <div class=" row justify-content-center">
                <div class="col-5">

                    <label for="nombrePropietario" class="control-label">{{'Nombre'}}</label>
                    <input type="text" class="form-control" autocomplete="off" name="nombrePropietario" id="nombrePropietario">
                    <span id="estadoNombre"></span>
                    
                </div>
                <div class="col-5">

                    <label for="nanombre_contactome">Fecha</label>
                            <input class="form-control text-dark" type="datetime-local" name="fecha" readonly
                                id="fecha" onblur="validarFecha()">
                    
                </div>

            </div>
            <div class=" row justify-content-center">
                <div class="col-5">

                    <label for="domicilio" class="control-label">{{'Domicilio'}}</label>
                    <input type="text" class="form-control" autocomplete="off" name="domicilio" id="domicilio">
                    <span id="estadoDomicilio"></span>
                    
                </div>
                <div class="col-5">

                    <label for="telefono" class="control-label">{{'Telefono'}}</label>
                    <input type="text" class="form-control" autocomplete="off" name="telefono" id="telefono">
                    <span id="estadoTelefono"></span>

                </div>

            </div>
            <br>


            <div class="card-header">
                <h5 class="text-center"><FONT FACE="small fonts">REGISTRO DE PACIENTE</FONT></h5>
            </div>
            <br>
            <div class=" row justify-content-center">
                <div class="col-5">

                    <label for="nombrePaciente" class="control-label">{{'Nombre'}}</label>
                    <input type="text" class="form-control" autocomplete="off" name="nombrePaciente" id="nombrePaciente">
                    <span id="estadoNombrePaciente"></span>
                    
                </div>
                <div class="col-5">

                    <label for="especie" class="control-label">{{'Especie'}}</label>
                    <input type="text" class="form-control" autocomplete="off" name="especie" id="especie">
                    <span id="estadoEspecie"></span>
                    
                </div>

            </div>
            <div class=" row justify-content-center">
                <div class="col-5">

                    <label for="raza" class="control-label">{{'Raza'}}</label>
                    <input type="text" class="form-control" autocomplete="off" name="raza" id="raza">
                    <span id="estadoRaza"></span>
                    
                </div>
                <div class="col-5">

                    <label for="peso" class="control-label">{{'Peso'}}</label>
                    <input type="text" class="form-control" autocomplete="off" name="peso" id="peso">
                    <span id="estadoPeso"></span>
                    
                </div>

            </div>
            <div class=" row justify-content-center">
                <div class="col-5">

                    <label for="esterilizado" class="control-label">{{'Esterilizado'}}</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                          SI
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                          NO
                        </label>
                      </div>
                    
                </div>
                <div class="col-5">

                    
                </div>

            </div>

            <div class="card-header">
                <h5 class="text-center"><FONT FACE="small fonts">MOTIVO DE CONSULTA</FONT></h5>
            </div>
            <br>

            <div class=" row justify-content-center">
                
                <div class="col-10">
                    <textarea class="form-control" aria-label="With textarea" style="resize: none;height: 200%;"></textarea>
                </div>

            </div>
            
            
         
        <br>  
        <br>
        <br>
        <br>

        
        <div class="card-header">
            <h5 class="text-center"><FONT FACE="small fonts">EXAMEN FISICO</FONT></h5>
        </div>
        <br>

        <div class=" row justify-content-center">
            <div class="col-5">

                <label for="temperatura" class="control-label">{{'Temperatura'}}</label>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                      Alta
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                    <label class="form-check-label" for="flexCheckChecked">
                      Normal
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                    <label class="form-check-label" for="flexCheckChecked">
                      Baja
                    </label>
                  </div>
                

            </div>
            <div class="col-5">

                <label for="colorHeses" class="control-label">{{'Color de Heces'}}</label>
                    <input type="text" class="form-control" autocomplete="off" name="colorHeses" id="colorHeses">
                    <span id="estadoColorHeses"></span>
                
            </div>
            

        </div>
        
        <div class=" row justify-content-center">
            <div class="col-5">

                <label for="colorMucosa" class="control-label">{{'Color de Mucosa'}}</label>
                    <input type="text" class="form-control" autocomplete="off" name="colorMucosa" id="colorMucosa">
                    <span id="estadoColorMucosa"></span>
                
            </div>
            <div class="col-5">

                <label for="desidratasion" class="control-label">{{'Desidratacion'}}</label>
                    <input type="text" class="form-control" autocomplete="off" name="desidratasion" id="desidratasion">
                    <span id="estadoColorMucosa"></span>
                

            </div>

        </div>
        <div class=" row justify-content-center">
            <div class="col-5">

                <label for="piel" class="control-label">{{'Piel Pelo'}}</label>
                    <input type="text" class="form-control" autocomplete="off" name="piel" id="piel">
                    <span id="estadoPiel"></span>
                
            </div>
            <div class="col-5">

                <label for="boca" class="control-label">{{'Boca Dientes'}}</label>
                    <input type="text" class="form-control" autocomplete="off" name="boca" id="boca">
                    <span id="estadoBoca"></span>
                

            </div>

        </div>
        <div class=" row justify-content-center">
            <div class="col-5">

                <label for="palpacion" class="control-label">{{'Palpacion Abdominal'}}</label>
                    <input type="text" class="form-control" autocomplete="off" name="palpacion" id="palpacion">
                    <span id="estadoPalpacion"></span>
                
            </div>
            <div class="col-5">

                <label for="animo" class="control-label">{{'Estado de Animo'}}</label>
                    <input type="text" class="form-control" autocomplete="off" name="animo" id="animo">
                    <span id="estadoAnimo"></span>
                

            </div>

            
        </div>

        <br>
        <div class="card-header">
                <h5 class="text-center"><FONT FACE="small fonts">MEDICAMENTOS APLICADOS</FONT></h5>
            </div>
            <br>

            <div class=" row justify-content-center">
                
                <div class="col-10">
                    <textarea class="form-control" aria-label="With textarea" style="resize: none;height: 200%;"></textarea>
                </div>

            </div>
            
            
         
        <br>  
        <br>
        <br>
        <br>

        <div class=" row justify-content-center">
            <div class="col-5">

                <label for="costo" class="control-label">{{'Costo Total'}}</label>
                    <input type="text" class="form-control" autocomplete="off" name="costo" id="costo">
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

                <button type="submit" class="btn btn-primary float-right">
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