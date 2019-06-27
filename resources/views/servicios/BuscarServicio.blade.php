@extends('disenio.maestro')

@section('contenido')

<div class="col-md-12">
    <div class="card">
        <form action="{{ url('BuscarServicio') }}" method="post">
            @csrf
            <div class=" card-body">
                <h4 class="card-title">BUSCAR SERVICIO</h4>
                <div class="row">
                    <div class="form-group row col-md-5">
                        <label for="nombre" class="col-sm-3 text-right control-label col-form-label">Nombre Servicio</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre Servicio">
                        </div>
                    </div>
                    <div class="form-group row col-md-5">
                        <label for="precio" class="col-sm-3 text-right control-label col-form-label">Precio</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="precio" id="precio" placeholder="Email">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button type="submit" class="btn btn-primary">BUSCAR</button>
                        <a href="{{ url('NuevoServicio') }}" class="btn btn-danger">NUEVO</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
    @if (isset($servicio))
        <div class="card">
            <table class="table">
                <tr>
                    <td>Nombre Servicio</td>
                    <td>Precio</td>
                    <td>Observaciones</td>
                    <td>Acciones</td>
                </tr>
                @foreach ($servicio as $key => $s)
                    <tr>
                        <td>{{ $s->nombre_se }}</td>
                        <td>{{ $s->precio }}</td>
                        <td>{{ $s->obs_ser }}</td>
                        <td>
                            @if ($s->estado == 1)
                                <i class="fas fa-check"></i>
                            @else
                                <i class="fas fa-times"></i>
                            @endif
                        </td>
                        <td>
                            {{-- BOTON DE MODIFICAR SERVICIO --}}
                            <a href="{{ url('RecuperarServicio/'.$s->id_se) }}" class="btn btn-warning">
                                <i class="far fa-edit"></i>
                            </a>
                            {{-- BOTON DE ELIMINAR SERVICIO --}}
                            <a href="{{ url('ConfirmaServicio/'.$s->id_se) }}" class="btn btn-danger">
                                <i class="fas fa-trash-alt"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    @endif
</div>

@endsection