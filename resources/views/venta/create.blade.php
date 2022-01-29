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
        
        <form action="{{url('/producto/registrarProducto')}}" id="idform" class="form" method="post"
        enctype="multipart/form-data">

        {{ csrf_field()}}


        <div class="col-md-11 mx-auto ">

            <div class=" row justify-content-center">
                <div class="col-5">

                    <label for="nombre" class="control-label">{{'Cliente'}}</label>
                    <input type="text" class="form-control" autocomplete="off" name="nombrePropietario" id="nombrePropietario">
                    <span id="estadoNombre"></span>
                    
                </div>
                <div class="col-5">

                    <label for="nanombre_contactome">Fecha</label>
                            <input class="form-control text-dark" type="datetime-local" name="fecha" value=""
                                id="fecha" onblur="validarFecha()" readonly>
                    
                </div>

            </div>
            <div class=" row justify-content-center">
                <div class="col-5">

                    <label for="domicilio" class="control-label">{{'Domicilio'}}</label>
                    <input type="text" class="form-control" autocomplete="off" name="domicilio" id="domicilio">
                    <span id="estadoDomicilio"></span>
                    
                </div>
                <div class="col-5">

                    
                </div>

            </div>
            <br>
        </div>    
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