function validarNombre() {
    if($("#nombrePropietario").val().length == 0){
        
        $("#estadoNombre").html("<span  class='menor'><h6 class='menor'> </h6></span>");
        deshabilitar();
    }else{
        if ($("#nombrePropietario").val().length < 3) {
            $("#estadoNombre").html("<span  class='menor'><h6 class='menor'>Ingrese al menos 3 caracteres</h6></span>");
                deshabilitar();
        } else {
            if ($("#nombrePropietario").val().length > 50) {
                $("#estadoNombre").html(
                    
                    "<span  class='menor'><h6 class='menor'>Ingrese de 3 a 50 caracteres</h6></span>");
                    deshabilitar();
            } else {
                var re = new RegExp("^[a-zA-ZÑñ ]+$");
                if (!re.test($("#nombrePropietario").val())) {
                    $("#estadoNombre").html("<span  class='menor'><h6 class='menor'>Solo se acepta caracteres [A-Z]</h6></span>");
                    deshabilitar();
                } else {
                    $("#estadoNombre").html("<span  class='menor'><h6 class='menor'> </h6></span>");
                    if(validado()==true){
                            var x = document.getElementById('enviar');
                            x.disabled = false;
                    }
                }
            }

        }
    }
    
}

function validarCarnet(){
    if($("#ci").val().length == 0){
        $("#estadoCi").html("<span  class='menor'><h6 class='menor'> </h6></span>");
        deshabilitar();
    }else{
        if ($("#ci").val().length > 8) {
            $("#estadoCi").html("<span  class='menor'><h6 class='menor'>Ingrese un maximo de 8 caracteres</h6></span>");
                deshabilitar();
        } else {
            $("#estadoCi").html("<span  class='menor'><h6 class='menor'> </h6></span>");
                    if(validado()==true){
                        console.log(validado());
                            var x = document.getElementById('enviar');
                            x.disabled = false;
                    }
        }
    }
}

function validarDomicilio(){
    if($("#domicilio").val().length == 0){
        $("#estadoDomicilio").html("<span  class='menor'><h6 class='menor'> </h6></span>");
    }else{
        if ($("#domicilio").val().length < 3) {
            $("#estadoDomicilio").html("<span  class='menor'><h6 class='menor'>Ingrese al menos 3 caracteres</h6></span>");
        } else {
            $("#estadoDomicilio").html("<span  class='menor'><h6 class='menor'> </h6></span>");
        }
    }
}

function validarTelefono(){
    if($("#telefono").val().length == 0){
        $("#estadoTelefono").html("<span  class='menor'><h6 class='menor'> </h6></span>");
        deshabilitar();
    }else{
        if(($("#telefono").val().length == 1)){
            if(($("#telefono").val() != 4) && ($("#telefono").val() != 7) && ($("#telefono").val() != 6)){
                $("#estadoTelefono").html("<span  class='menor'><h6 class='menor'>Numero no existe</h6></span>");
                deshabilitar();
            }else{
                $("#estadoTelefono").html("<span  class='menor'><h6 class='menor'> </h6></span>");
                deshabilitar();
            }
        }else{
            if (($("#telefono").val().length != 8) && $("#telefono").val().length != 7) {
                $("#estadoTelefono").html("<span  class='menor'><h6 class='menor'>Numero no existe</h6></span>");
                deshabilitar();
            } else {
                $("#estadoTelefono").html("<span  class='menor'><h6 class='menor'> </h6></span>");
                if(validado()==true){
                    var x = document.getElementById('enviar');
                    x.disabled = false;
                }
            }
        }
    }
}

function validarNombrePaciente() {
    if($("#nombrePaciente").val().length == 0){
        
        $("#estadoPaciente").html("<span  class='menor'><h6 class='menor'> </h6></span>");
        deshabilitar();
    }else{
        if ($("#nombrePaciente").val().length < 3) {
            $("#estadoPaciente").html("<span  class='menor'><h6 class='menor'>Ingrese al menos 3 caracteres</h6></span>");
                deshabilitar();
        } else {
            if ($("#nombrePaciente").val().length > 50) {
                $("#estadoPaciente").html(
                    
                    "<span  class='menor'><h6 class='menor'>Ingrese de 3 a 50 caracteres</h6></span>");
                    deshabilitar();
            } else {
                var re = new RegExp("^[a-zA-ZÑñ ]+$");
                if (!re.test($("#nombrePaciente").val())) {
                    $("#estadoPaciente").html("<span  class='menor'><h6 class='menor'>Solo se acepta caracteres [A-Z]</h6></span>");
                    deshabilitar();
                } else {
                    $("#estadoPaciente").html("<span  class='menor'><h6 class='menor'> </h6></span>");
                    if(validado()==true){
                            var x = document.getElementById('enviar');
                            x.disabled = false;
                    }
                }
            }

        }
    }
    
}

function validarEspecie() {
    if($("#especie").val().length == 0){
        
        $("#estadoEspecie").html("<span  class='menor'><h6 class='menor'> </h6></span>");
        deshabilitar();
    }else{
        if ($("#especie").val().length < 3) {
            $("#estadoEspecie").html("<span  class='menor'><h6 class='menor'>Ingrese al menos 3 caracteres</h6></span>");
                deshabilitar();
        } else {
            if ($("#especie").val().length > 50) {
                $("#estadoEspecie").html(
                    
                    "<span  class='menor'><h6 class='menor'>Ingrese de 3 a 50 caracteres</h6></span>");
                    deshabilitar();
            } else {
                var re = new RegExp("^[a-zA-ZÑñ ]+$");
                if (!re.test($("#especie").val())) {
                    $("#estadoEspecie").html("<span  class='menor'><h6 class='menor'>Solo se acepta caracteres [A-Z]</h6></span>");
                    deshabilitar();
                } else {
                    $("#estadoEspecie").html("<span  class='menor'><h6 class='menor'> </h6></span>");
                    if(validado()==true){
                            var x = document.getElementById('enviar');
                            x.disabled = false;
                    }
                }
            }

        }
    }
    
}

function validarRaza() {
    if($("#raza").val().length == 0){
        $("#estadoRaza").html("<span  class='menor'><h6 class='menor'> </h6></span>");
        deshabilitar();
    }else{
        if ($("#raza").val().length < 3) {
            $("#estadoRaza").html("<span  class='menor'><h6 class='menor'>Ingrese al menos 3 caracteres</h6></span>");
                deshabilitar();
        } else {
            if ($("#raza").val().length > 50) {
                $("#estadoRaza").html(
                    
                    "<span  class='menor'><h6 class='menor'>Ingrese de 3 a 50 caracteres</h6></span>");
                    deshabilitar();
            } else {
                var re = new RegExp("^[a-zA-ZÑñ ]+$");
                if (!re.test($("#raza").val())) {
                    $("#estadoRaza").html("<span  class='menor'><h6 class='menor'>Solo se acepta caracteres [A-Z]</h6></span>");
                    deshabilitar();
                } else {
                    $("#estadoRaza").html("<span  class='menor'><h6 class='menor'> </h6></span>");
                    if(validado()==true){
                            var x = document.getElementById('enviar');
                            x.disabled = false;
                    }
                }
            }

        }
    }
    
}

function validarEdad(){
    if($("#edad").val().length == 0){
        $("#estadoEdad").html("<span  class='menor'><h6 class='menor'> </h6></span>");
        deshabilitar();
    }else{
        if($("#edad").val().length < 3){
            $("#estadoEdad").html("<span  class='menor'><h6 class='menor'>Ingrese al menos 3 caracteres</h6></span>");
            deshabilitar();
        }else{
            if($("#edad").val().length > 15){
                $("#estadoEdad").html("<span  class='menor'><h6 class='menor'>Ingrese de 3 a 15 caracteres</h6></span>");
                deshabilitar();
            }else{
                $("#estadoEdad").html("<span  class='menor'><h6 class='menor'> </h6></span>");
                    if(validado()==true){
                            var x = document.getElementById('enviar');
                            x.disabled = false;
                    }
            }
        }
    }
}

function validarPeso(){
    if($("#peso").val().length == 0){
        $("#estadoPeso").html("<span  class='menor'><h6 class='menor'> </h6></span>");
        deshabilitar();
    }else{
        if($("#peso").val().length < 3){
            $("#estadoPeso").html("<span  class='menor'><h6 class='menor'>Ingrese al menos 3 caracteres</h6></span>");
            deshabilitar();
        }else{
            if($("#peso").val().length > 20){
                $("#estadoPeso").html("<span  class='menor'><h6 class='menor'>Ingrese de 3 a 20 caracteres</h6></span>");
                deshabilitar();
            }else{
                var re = new RegExp("^[+-]?([0-9 ]+([.|,][A-Za-z0-9 ]*)?|[.][A-Za-z0-9 ]+)$");
                if (!re.test($("#peso").val())) {
                    $("#estadoPeso").html("<span  class='menor'><h6 class='menor'>Peso ingresado incorrecto</h6></span>");
                    deshabilitar();
                } else {
                    $("#estadoPeso").html("<span  class='menor'><h6 class='menor'> </h6></span>");
                    if(validado()==true){
                            var x = document.getElementById('enviar');
                            x.disabled = false;
                    }
                }
            }
        }
    }
}

function validarColorHeses(){
    if($("#colorHeses").val().length == 0){
        $("#estadoColorHeses").html("<span  class='menor'><h6 class='menor'> </h6></span>");
        
    }else{
        if ($("#colorHeses").val().length < 3) {
            $("#estadoColorHeses").html("<span  class='menor'><h6 class='menor'>Ingrese al menos 3 caracteres</h6></span>");
                
        } else {
            if ($("#colorHeses").val().length > 50) {
                $("#estadoColorHeses").html("<span  class='menor'><h6 class='menor'>Ingrese de 3 a 50 caracteres</h6></span>");
                   
            } else {
                var re = new RegExp("^[a-zA-ZÑñ ]+$");
                if (!re.test($("#colorHeses").val())) {
                    $("#estadoColorHeses").html("<span  class='menor'><h6 class='menor'>Solo se acepta caracteres [A-Z]</h6></span>");
                    
                } else {
                    $("#estadoColorHeses").html("<span  class='menor'><h6 class='menor'> </h6></span>");
                   
                }
            }

        }
    }
}

function validarColorMucosa(){
    if($("#colorMucosa").val().length == 0){
        $("#estadoColorMucosa").html("<span  class='menor'><h6 class='menor'> </h6></span>");
        
    }else{
        if ($("#colorMucosa").val().length < 3) {
            $("#estadoColorMucosa").html("<span  class='menor'><h6 class='menor'>Ingrese al menos 3 caracteres</h6></span>");
                
        } else {
            if ($("#colorMucosa").val().length > 50) {
                $("#estadoColorMucosa").html( "<span  class='menor'><h6 class='menor'>Ingrese de 3 a 50 caracteres</h6></span>");
                   
            } else {
                var re = new RegExp("^[a-zA-ZÑñ ]+$");
                if (!re.test($("#colorMucosa").val())) {
                    $("#estadoColorMucosa").html("<span  class='menor'><h6 class='menor'>Solo se acepta caracteres [A-Z]</h6></span>");
                    
                } else {
                    $("#estadoColorMucosa").html("<span  class='menor'><h6 class='menor'> </h6></span>");
                }
            }

        }
    }
}

function validarPiel(){
    if($("#piel").val().length == 0){
        $("#estadoPiel").html("<span  class='menor'><h6 class='menor'> </h6></span>");
        
    }else{
        if ($("#piel").val().length < 3) {
            $("#estadoPiel").html("<span  class='menor'><h6 class='menor'>Ingrese al menos 3 caracteres</h6></span>");
                
        } else {
            if ($("#piel").val().length > 50) {
                $("#estadoPiel").html( "<span  class='menor'><h6 class='menor'>Ingrese de 3 a 50 caracteres</h6></span>");
                   
            } else {
                var re = new RegExp("^[a-zA-ZÑñ ]+$");
                if (!re.test($("#piel").val())) {
                    $("#estadoPiel").html("<span  class='menor'><h6 class='menor'>Solo se acepta caracteres [A-Z]</h6></span>");
                    
                } else {
                    $("#estadoPiel").html("<span  class='menor'><h6 class='menor'> </h6></span>");
                }
            }

        }
    }
}

function validarBoca(){
    if($("#boca").val().length == 0){
        $("#estadoBoca").html("<span  class='menor'><h6 class='menor'> </h6></span>");
        
    }else{
        if ($("#boca").val().length < 3) {
            $("#estadoBoca").html("<span  class='menor'><h6 class='menor'>Ingrese al menos 3 caracteres</h6></span>");
                
        } else {
            if ($("#boca").val().length > 50) {
                $("#estadoBoca").html( "<span  class='menor'><h6 class='menor'>Ingrese de 3 a 50 caracteres</h6></span>");
                   
            } else {
                var re = new RegExp("^[a-zA-ZÑñ ]+$");
                if (!re.test($("#boca").val())) {
                    $("#estadoBoca").html("<span  class='menor'><h6 class='menor'>Solo se acepta caracteres [A-Z]</h6></span>");
                    
                } else {
                    $("#estadoBoca").html("<span  class='menor'><h6 class='menor'> </h6></span>");
                }
            }

        }
    }
}

function validarPalpacion(){
    if($("#palpacion").val().length == 0){
        $("#estadoPalpacion").html("<span  class='menor'><h6 class='menor'> </h6></span>");
        
    }else{
        if ($("#palpacion").val().length < 3) {
            $("#estadoPalpacion").html("<span  class='menor'><h6 class='menor'>Ingrese al menos 3 caracteres</h6></span>");
                
        } else {
            if ($("#palpacion").val().length > 50) {
                $("#estadoPalpacion").html( "<span  class='menor'><h6 class='menor'>Ingrese de 3 a 50 caracteres</h6></span>");
                   
            } else {
                var re = new RegExp("^[a-zA-ZÑñ ]+$");
                if (!re.test($("#palpacion").val())) {
                    $("#estadoPalpacion").html("<span  class='menor'><h6 class='menor'>Solo se acepta caracteres [A-Z]</h6></span>");
                    
                } else {
                    $("#estadoPalpacion").html("<span  class='menor'><h6 class='menor'> </h6></span>");
                }
            }

        }
    }
}

function validarAnimo(){
    if($("#animo").val().length == 0){
        $("#estadoAnimo").html("<span  class='menor'><h6 class='menor'> </h6></span>");
        
    }else{
        if ($("#animo").val().length < 3) {
            $("#estadoAnimo").html("<span  class='menor'><h6 class='menor'>Ingrese al menos 3 caracteres</h6></span>");
                
        } else {
            if ($("#animo").val().length > 50) {
                $("#estadoAnimo").html( "<span  class='menor'><h6 class='menor'>Ingrese de 3 a 50 caracteres</h6></span>");
                   
            } else {
                var re = new RegExp("^[a-zA-ZÑñ ]+$");
                if (!re.test($("#animo").val())) {
                    $("#estadoAnimo").html("<span  class='menor'><h6 class='menor'>Solo se acepta caracteres [A-Z]</h6></span>");
                    
                } else {
                    $("#estadoAnimo").html("<span  class='menor'><h6 class='menor'> </h6></span>");
                }
            }

        }
    }
}


function validarCosto(){
    if($("#costo").val().length == 0){
        $("#estadoCosto").html("<span  class='menor'><h6 class='menor'> </h6></span>");
        deshabilitar();
    }else{
            if($("#costo").val().length > 15){
                $("#estadoCosto").html("<span  class='menor'><h6 class='menor'>Monto ingresado no existe</h6></span>");
                deshabilitar();
            }else{
                var re = new RegExp("^[+-]?([0-9 ]+([.|,][0-9 ]*)?|[.][0-9 ]+)$");
                if (!re.test($("#costo").val())) {
                    $("#estadoCosto").html("<span  class='menor'><h6 class='menor'>Peso ingresado incorrecto</h6></span>");
                    deshabilitar();
                } else {
                    $("#estadoCosto").html("<span  class='menor'><h6 class='menor'> </h6></span>");
                    if(validado()==true){
                            var x = document.getElementById('enviar');
                            x.disabled = false;
                    }
                }
            }
    }
}

function submitDeleteSale(){
    $("#idform").submit();
    document.getElementById('enviar').disabled=true;
}

function deshabilitar(){
    var x = document.getElementById('enviar');
    x.disabled = true;
}

function validarEnvio(dato){
    var habilitado = new Boolean();
    if( $(dato).val().length != 0 ){
        var habilitado = true;
    }
    
    return habilitado;
}

function validado(){
    var habilitado = new Boolean();
    if( validarEnvio("#ci") == true){
        if(validarEnvio("#nombrePropietario")== true){
            if(validarEnvio("#telefono") == true){
                if(validarEnvio("#nombrePaciente") == true){
                    if(validarEnvio("#especie") == true){
                        if(validarEnvio("#raza") == true){
                            if(validarEnvio("#edad") == true){
                                if(validarEnvio("#peso") == true){
                                    if(validarEnvio("#costo") == true){
                                        var habilitado = true;
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }   
    }

    return habilitado;
}

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