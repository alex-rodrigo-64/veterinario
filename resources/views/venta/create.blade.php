@extends('admin.layout')

@section('content')

<div class="container">
    <div class="card">
        <div class="card-header text-center">
            <h3><FONT FACE="small fonts">NUEVA VENTA</FONT></h3>
        </div>
                 <div class="card-body">
                     <h5 class="text-center"><FONT FACE="small fonts">REGISTRO DE VENTA</FONT></h5>
                 </div>
        
        <form action="{{url('/create')}}"  class="form" method="post"
        enctype="multipart/form-data">

             {{ csrf_field()}}

            <div class="col-md-11 mx-auto ">

                <div class=" row justify-content-center">
                    <div class="col-5">

                        <label for="nombre" class="control-label required">{{'Cliente'}}</label>
                        <input type="text" class="form-control" autocomplete="off" name="nombre" id="nombre">
                        <span id="estadoNombre"></span>
                        
                    </div>
                    <div class="col-5">

                        <label for="nanombre_contactome">Fecha</label>
                                <input class="form-control text-dark" type="datetime-local" name="fecha"
                                    id="fecha" onblur="validarFecha()">
                        
                    </div>

                </div>
            </div>
            <br>
            @include('venta.tabla.tabla')
            <br>
                <div class="col-md-11 mx-auto ">

                    <div class=" row justify-content-center">
                        <div class="col-5">
                            <div class="form-group">
                                <label for="email">Total</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">Bs.</span>
                                    </div>
                                    <input type="number" require onclick="if(this.value=='0.00') this.value=''"
                                        class="form-control" id="total" name="total">
                                </div>
                            </div>
                        </div>
                            <div class="col-5">
                            
                            </div>
                    </div>

                    <div class="form-group">
                            <label for="telefono">Observaciones</label>
                            <textarea class="form-control required" id="observaciones" name="observaciones" rows="3"></textarea>
                     </div>

                     <button type="submit" class="btn btn-success btn-lg btn-block">Guardar</button>

                </div>
                <br>    
        </form>
        
    </div>
</div>
<a  href="{{ url('/recepcion/create') }}">ss</a>

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


@endsection