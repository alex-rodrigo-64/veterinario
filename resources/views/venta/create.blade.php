<style>
    table {
        padding: 130px; 
    button{
        width: 150px;
        margin-left: auto;
        margin-right: auto;
    }
    .menor {
                color:#D60202;
            }
    .card{
        padding: 15px 50px;
    }

</style> 
      <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card" >
                <div class="card-header">
                    <div class="card-title text-center">
                        <h4>Registro de Viva</h4>
                    </div>
                </div>
                      <div class="card-body">

                          <div class="row justify-content-center">
                              <div class="col-md-10">
                                  <div class="card" >
                                    <form action="{{url('/venta/create')}}" method="post" enctype="multipart/form-data">
                                        {{ csrf_field()}}
                                        <table class="table table-striped" id="tabla">
                                            <thead style="background : rgb(78, 137, 225">
                                                <tr>
                                                    <th class="text-center">Numero de Usuario</th>
                                                    <th class="text-center">Nombre</th>
                                                    <th class="text-center">C.I</th>
                                                    <th class="text-center">Eliminar</th>
                                                </tr>
                                            </thead> 
                                            <tbody id="tabla3">
                                                 <span id="estadoBoton"></span>
                                                <tr id="columna-0">
                                                    <td>
                                                        <input type="integer" class="form-control text-white required" name="numero_usuario[]" id="numero_usuario"  style="border-color: rgb(78, 137, 225)"
                                                            value="{{old('nombre_usuario')}}" onkeyup="validarNumeroUsuario()" autocomplete="off">
                                                        <datalist id="numero_usuario">
                                                        {!!  $errors->first('numero_usuario','<div class="invalid-feedback">:message</div>') !!}
                                                    </td>
                                                    <td>
                                                        <input type="text"  class="form-control text-white  {{$errors->has('nombre')?'is-invalid':'' }} required" name="nombre[]" style="border-color: rgb(78, 137, 225)" 
                                                            id="nombre" value="{{old('nombre')}}" onkeyup="comprobarNombre()" autocomplete="off">
                                                    </td>
                                                    <td>
                                                        <input type="int" class="form-control text-white ){{$errors->has('ci')?'is-invalid':'' }} required" name="ci[]" style="border-color: rgb(78, 137, 225)" 
                                                        id="ci" value="{{old('ci')}}" onkeyup="validarCi()" autocomplete="off" 
                                                        onkeypress="return ((event.charCode >= 48 && event.charCode <= 57) || (event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122)"> 
                                                    </td>
                                                    <td class="eliminar" id="deletRow" name="deletRow">
                                                        <div class="text-center">
                                                            <button class="btn btn-icon btn-danger"  type="button">
                                                                <span class="btn-inner--icon "><i class="tim-icons icon-trash-simple"></i></span>
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table> 
                                        <span id="estadoNombre"></span>
                                    <button type="button" class="btn btn-secundary btn-lg btn-block" id="add" name="add">Añadir</button>
                                  </div>
                              </div>
                          </div>
                    </div>  
             </div>
               <a href="{{ url('home') }}" class="btn btn-sm btn-danger">Cancelar</a>
            <button class="btn btn-sm btn-secundary float-right" id="sig" name="sig" disabled>Siguiente</button>
        </form>
    </div>
</div>

<script>
    
var bb = 0;
$(function() {
    console.log(existeValor("numero_usuario"));
        $("#add").on('click', function() {
            if(!existeValor("numero_usuario") && !existeValor("nombre") && !existeValor("ci"))
            {
                bb = bb + 1;
                $("#tabla tbody tr:eq(0)").clone().appendTo("#tabla").find('input')
                .attr('readonly', true);
                bb = bb + 1;
                limpiarCampos();
                $("#stateRow").html("<span  class='menor'><h5 class='menor'></h5></span>");
            } else {
                $("#stateRow").html("<h5 class='menor'>Revise todos los campos </h5>");
                vacio("numero_usuario");
                vacio("nombre");
                vacio("ci");
            }
            
        });
        $(document).on("click", ".eliminar", function() {
            if (bb > 0) {
                var parent = $(this).parents().get(0);
                $(parent).remove();
                bb = bb - 1;
                limpiarCampos();
            }
        });
   
});

function limpiarCampos() {
    $("#numero_usuario").val('');
    $("#nombre").val('');
    $("#ci").val('');
}

function existeValor($dato) {
        var boolean = false;
        var aux = document.getElementById($dato).value;
        if (aux == "") {
            boolean = true;
        }
        return boolean;
    }
    
    function vacio($valor) {
        var dato = document.getElementById($valor).value;
        var prueba = document.getElementById($valor);
        if (dato == "" ) {
            prueba.style.borderColor = 'red';
        } else {
            return dato;
        }
    }

    function comprobarNombre(){
                
        if($("#nombre").val() == ""){
             $("#estadoNombre").html("<span  class='menor'><h5 class='menor'> </h5></span>");
            }else{
                var re = new RegExp("^[a-zA-Z ]+$");
             if(!re.test($("#nombre").val())){
                 $("#estadoNombre").html("<span  class='menor'><h5 class='menor'>Solo se acepta letras [A-Z]</h5></span>");
                }else{
                 $("#estadoNombre").html("<span  class='menor'><h5 class='menor'> </h5></span>");
             }
        }
    }

    $(document).on('change keyup', '.required', function(e){
   let Disabled = true;
    $(".required").each(function() {
      let value = this.value
      if ((value)&&(value.trim() !=''))
          {
            Disabled = false
          }else{
            Disabled = true
            return false
          }
    });
   
   if(Disabled){
        $('#sig').prop("disabled", true);
      }else{
        $('#sig').prop("disabled", false);
      }
 })


    

</script>