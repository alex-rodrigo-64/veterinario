@extends('admin.layout')

@section('content')

<div class="card">
    <div class="card-header text-justify">
        <h2 class="text-center"><FONT FACE="small fonts">HISTORIAL</FONT></h2>
    </div>
    <div class="card-body">
        

        <div class="row justify-content-center ">
        <div class="col-10">
             
            <input class="form-control" id="myInput" type="text" placeholder="Buscar..">
            <br>

            <div class="table-responsive" style="height: 400px; overflow: auto">
                <table class="table table-bordered table-striped"  style="height: 400px">
                
                    <thead class="thead-light">
                        <tr>
                            
                            <th scope="col">Carnet</th>
                            <th scope="col">Nombre de Propietario</th>
                            <th scope="col">Nombre de Mascota</th>
                            <th scope="col">Opciones</th>
                        </tr>
                    </thead>
                    <tbody id="myTable">
                        @foreach ($pacientes as $pacientes)
                        <tr>
                            <th scope="row">
                                {{ $pacientes->carnet }}
                            </th>
                            <td>
                                {{ $pacientes->nombrePropietario }}
                            </td>
                          
                            <td>
                                {{ $pacientes->nombrePaciente}}
                            </td>
                            <td>
                                <a href="{{ url('/historial/'.$pacientes->carnet.'/'.$pacientes->nombrePaciente) }}" class="btn btn-sm btn-info">Detalles</a>
                                <button class="btn btn-sm btn-danger" type="submit" data-toggle="modal"
                                    data-target="#exampleModal{{$pacientes->carnet}}{{$pacientes->nombrePaciente}}">Eliminar</button>
                                <!-- modaal -->
                                <div class="modal fade" id="exampleModal{{$pacientes->carnet}}{{$pacientes->nombrePaciente}}" tabindex="-1" role="dialog"
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
                                                    ¿Esta seguro de eliminar este historial?
                                                </h3>
                                            </div>
                                            <div class="modal-footer">
                                                <form method="POST" id="idFormDeleteSale{{$pacientes->carnet}}{{$pacientes->nombrePaciente}}" action="{{url('/historial/'.$pacientes->carnet.'/'.$pacientes->nombrePaciente) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" id="idButtDelete{{$pacientes->carnet}}{{$pacientes->nombrePaciente}}" onclick="submitDeleteSale('{{$pacientes->carnet}}','{{$pacientes->nombrePaciente}}')" class="btn btn-danger float-right">Borrar</button>
                                                </form>
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Cancelar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
        
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
        
          </div>

    
        </div>
        </div>
    <div class="card-footer">
        <div class="row justify-content-center">
            <a href="{{ url('/') }}" ><button class="btn btn-primary" type="button">Volver</button></a>
        </div>
    </div>
</div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script>
            $(document).ready(function(){
              $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function() {
                  $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
              });
            });
    </script>
    <script>

        function submitDeleteSale(carnet, nombre){
            $("#idFormDeleteSale"+carnet+nombre).submit();
            document.getElementById('idButtDelete'+carnet+nombre).disabled=true;
        }
    </script>

@endsection