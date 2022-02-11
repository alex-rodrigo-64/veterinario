<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<style>
    #formulario1 {
        margin: 0 auto;
        text-align: center;
        border-radius: 10px;
        border: 1px solid #ffffff;
        width: 600px;
    
    }
    
    .card .table td,
    .card .table th {
        padding-right: 0.1rem;
        padding-left: 0.1rem;
    }
    </style>
    
    <div class="col-md-9 mx-auto ">
            <div class="table-responsive">
                <table class="table" id="tabla">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">Codigo de Barras</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Cantidad</th>
                            <th scope="col">Precio/Bs.</th>
                            <th scope="col">Subtotal/Bs.</th>
                            <th scope="col">Eliminar</th>
                        </tr>
                    </thead>
                    <tbody >
                        
                        <tr >
                            <th>
                                <input class="form-control" autocomplete="off" name="codigoI[]" id="codigoI" list="codigo">
                                
                               
                            </th>
                            <td>
                                <input type="text" class="form-control" autocomplete="off" name="nombre[]" id="nombre"
                                    onclick="style=borderColor:#cad1d7"  
                                    value="{{ isset($transferencia->nombre)?$transferencia->nombre:old('nombre')  }}">
                                
                                <span id="estadoNombre"></span>
                            </td>
                            <td>
                                <input type="number" class="form-control  {{$errors->has('cantidad')?'is-invalid':'' }}"
                                    name="cantidad[]" id="cantidad" autocomplete="off">  <span id="estadoCantidad"></span>
                            </td>
                            <td>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">Bs.</span>
                                    </div>
                                    <input type="number" class="form-control  {{$errors->has('precio')?'is-invalid':'' }}"
                                        name="precio[]" autocomplete="off"  id="precio"
                                        value="{{ isset($transferencia->precio)?$transferencia->precio:old('precio')  }}">
                                </div>
            
                            </td>

                            <td>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">Bs.</span>
                                    </div>
                                    <input type="number" class="form-control  {{$errors->has('subTotal')?'is-invalid':'' }}"
                                        name="subTotal[]" id="subTotal"
                                        value="{{ isset($transferencia->subTotal)?$transferencia->subTotal:old('subTotal')  }}">
                                </div>
            
                            </td>
                            <td class="eliminar">
                                <button class="btn btn-icon btn-danger" type="button" >
                                    <span class="btn-inner--icon"><i class="ni ni-fat-remove"></i></span>
                                </button>
                            </td>
                        </tr>
            
                    </tbody>
                </table>
                        <div class="div text-center">
                            <span id="stateRow"></span>
                        </div>
                        <button type="button" class="btn btn-success btn-lg btn-block" id="adicional" name="adicional">Añadir y
                            Calcular</button>
                
            </div>
    </div>

    