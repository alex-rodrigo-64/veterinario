@extends('admin.layout')

@section('content')


<div class="card shadow">
    <div class="card-header border-0">
        <div class="card-header text-center">
            <h3><FONT FACE="small fonts">NUEVO PRODUCTO</FONT></h3>
        </div>

    </div>


    <script>


    function validarMarca() {

        if ($("#marca").val() == "") {
            $("#estadoMarca").html("<span  class='menor'><h5 class='menor'> </h5></span>");
        } else {
            if ($("#marca").val().length < 3) {
                $("#estadoMarca").html(
                    "<span  class='menor'><h5 class='menor'>Ingrese de 3 a 50 caracteres</h5></span>");
            } else {
                if ($("#marca").val().length > 50) {
                    $("#estadoMarca").html(
                        "<span  class='menor'><h5 class='menor'>Ingrese de 3 a 50 caracteres</h5></span>");
                } else {
                    //    var re = new RegExp("^[0-9a-zA-Z ]+$");
                    var regex = /^[a-zA-Z ]+$/;
                    if (!regex.test($("#marca").val())) {
                        $("#estadoMarca").html(
                            "<span  class='menor'><h5 class='menor'>Solo se acepta caracteres [A-Z]</h5></span>");
                    } else {
                        $("#estadoMarca").html("<span  class='menor'><h5 class='menor'> </h5></span>");
                    }

                }

            }

        }
    }

    function validarPrecioCosto() {
        var re = new RegExp("^[+-]?([0-9]+([.|,][0-9]*)?|[.][0-9]+)$");
        var prueba = document.getElementById("precioCosto");
        if ($("#precioCosto").val() == "") {
            $("#estadoPrecioCosto").html("<span  class='menor'><h5 class='menor'> </h5></span>");
        } else {
            if ($("#precioCosto").val() <= 0) {
                $("#estadoPrecioCosto").html(
                    "<span  class='menor'><h5 class='menor'>Monto ingresado debe ser mayor a 0</h5></span>");
            } else {
                if (!re.test($("#precioCosto").val()) || $("#precioCosto").val() == 'e' || $("#precioCosto").val() ==
                    '-') {
                    $("#estadoPrecioCosto").html(
                        "<span  class='menor'><h5 class='menor'>Monto ingresado incorrecto</h5></span>");
                } else {
                    $("#estadoPrecioCosto").html("<span  class='menor'><h5 class='menor'> </h5></span>");
                }
            }
        }
    }

    function validarPrecioVenta() {

        var re = new RegExp("^[+-]?([0-9]+([.|,][0-9]*)?|[.][0-9]+)$");
        var prueba = document.getElementById("precioVenta");
        if ($("#precioVenta").val() == "") {
            $("#estadoPrecioVenta").html("<span  class='menor'><h5 class='menor'> </h5></span>");
        } else {
            if ($("#precioVenta").val() <= 0) {
                $("#estadoPrecioVenta").html(
                    "<span  class='menor'><h5 class='menor'>Monto ingresado debe ser mayor a 0</h5></span>");
            } else {
                if (!re.test($("#precioVenta").val()) || $("#precioVenta").val() == 'e' || $(
                        "#precioVenta").val() == '-') {
                    $("#estadoPrecioVenta").html(
                        "<span  class='menor'><h5 class='menor'>Monto ingresado incorrecto</h5></span>");
                } else {
                    $("#estadoPrecioVenta").html("<span  class='menor'><h5 class='menor'> </h5></span>");
                }
            }
        }


    }


    function validarCantidad() {
        var prueba = document.getElementById("cantidad");
        var re = new RegExp("^([1-9]+\\d*)|[0]");
        if ($("#cantidad").val() == "") {
            $("#estadoCantidad").html("<span  class='menor'><h5 class='menor'> </h5></span>");
        } else {
            if ($("#cantidad").val() <= 0) {
                $("#estadoCantidad").html(
                    "<span  class='menor'><h5 class='menor'>Cantidad debe ser mayor a 0</h5></span>");
            } else {
                if (!re.test($("#cantidad").val()) || $("#cantidad").val() == 'e' || $("#cantidad").val() == '-') {
                    $("#estadoCantidad").html(
                        "<span  class='menor'><h5 class='menor'>Cantidad ingresada incorrecta</h5></span>");
                } else {
                    prueba.style.borderColor = '#cad1d7';

                    $("#estadoCantidad").html("<span  class='menor'><h5 class='menor'> </h5></span>");

                }
            }
        }
    }


    function validarCategoria() {

        var cod = document.getElementById("categoria").value;
        //console.log(cod);
        if (cod != "Elige una Categoria") {
            $("#estadoCategoria").html("<span  class='menor'><h5 class='menor'> </h5></span>");
        } else {
            $("#estadoCategoria").html("<span  class='menor'><h5 class='menor'>Seleccione una categoria</h5></span>");
        }
    }

    function existeValor($dato) {
        var boolean = false;
        var aux = document.getElementById($dato).value;
        if (aux == "") {
            boolean = true;
        }
        return boolean;
    }

    </script>
    <style>
    .estado-no-disponible-usuario {
        color: #D60202;
    }

    .estado-disponible-usuario {
        color: #2FC332;
    }

    .menor {
        color: #D60202;
    }
    </style>

    <form action="{{url('/producto')}}"  class="form" method="post"
        enctype="multipart/form-data">

        {{ csrf_field()}}


        <div class="col-md-11 mx-auto ">

            <div class=" row justify-content-center">
                <div class="col-5">
                    <label for="nombre" class="control-label">{{'Nombre'}}</label>
                    <input type="text" class="form-control" name="nombre"
                        autocomplete="off" id="nombre"
                        value="{{ isset($personal->apellido)?$personal->apellido:old('nombre') }}"
                        onblur="comprobarNombre()"><span id="estadoProducto"></span>
                    
                </div>
                <div class="col-5">
                    <label for="codigoBarra" class="control-label">{{'Codigo Barra'}}</label>
                    <input type="text" class="form-control  "
                        autocomplete="off" name="codigoBarra" id="codigoBarra"
                        value="{{ isset($personal->email)?$personal->email:old('codigoBarra')  }}"
                        onblur="comprobarCodigoBarra()"><span id="estadoCodigoBarra"></span>
                    
                </div>

            </div>
            <div class=" row justify-content-center">
                <div class="col-5">
                    <label for="marca" class="control-label">{{'Marca'}}</label>
                    <input type="text" class="form-control "
                        autocomplete="off" name="marca" autocomplete="off" id="marca"
                        value="{{ isset($personal->codigoSis)?$personal->codigoSis:old('marca') }}"
                        onkeyup="validarMarca()"><span id="estadoMarca"></span>
                    
                </div>
                <div class="col-5">
                    <label for="categoria">Categoria</label>
                    <select name="categoria" id="categoria"
                        class="form-control" onblur="validarCategoria()">
                        <option selected disabled>Elige una Categoria</option>
                        @foreach ($categoria as $categoria)
                        <option {{ old('categoria') == $categoria->id ? "selected" : "" }} value="{{$categoria->id}}">
                            {{$categoria->nombre}}</option>
                        @endforeach
                    </select><span id="estadoCategoria"></span>
                    
                </div>


            </div>
            <div class=" row justify-content-center">
                <div class="col-5">
                    <label for="precioCosto" class="control-label">{{'Precio Costo'}}</label>
                    <input type="integer" step="0.01"
                        class="form-control " autocomplete="off"
                        name="precio_costo" id="precio_costo"
                        onkeypress="return (event.charCode >= 44 && event.charCode <= 57)"
                        value="{{ isset($personal->codigoSis)?$personal->codigoSis:old('precioCosto') }}"
                        onkeyup="validarPrecioCosto()"><span id="estadoPrecioCosto"></span>
                    
                </div>
                <div class="col-5">
                    <label for="precioVenta" class="control-label">{{'Precio Venta'}}</label>
                    <input type="integer" step="0.01"
                        class="form-control  " autocomplete="off"
                        name="precio_venta" id="precio_venta"
                        onkeypress="return (event.charCode >= 44 && event.charCode <= 57)"
                        value="{{ isset($personal->telefono)?$personal->telefono:old('precioVenta')  }}"
                        onkeyup="validarPrecioVenta()"><span id="estadoPrecioVenta"></span>
                    
                </div>
            </div>
            <div class=" row justify-content-center">
                
                 <div class="col-5">
                    <label for="cantidad" class="control-label">{{'Cantidad'}}</label>
                    <input type="integer" class="form-control "
                        name="cantidad" autocomplete="off" id="cantidad"
                        onkeypress="return (event.charCode >= 48 && event.charCode <= 57)"
                        value="{{ isset($personal->password)?$personal->password:old('cantidad') }}"
                        onkeyup="validarCantidad()"><span id="estadoCantidad"></span>
                    
                </div>
                <div class="col-5">

                </div>
                
            </div>
            

            <br>
        </div>
        <div class=" row justify-content-center">

            <div class="col-5">
                <a href="{{url('inventario')}}" class="btn btn-primary">Volver</a>
            </div>
            <div class="col-5">
                <button type="submit" class="btn btn-success float-right" >Guardar</button>
            </div>
        </div>


    </form>
    
    <br>

</div>

@endsection