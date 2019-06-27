@extends('disenio.maestro')

@section('contenido')

<div class="col-md-12">
    <div class="card">
        <form action="{{ url('BuscarMascota') }}" method="post">
            @csrf
            <div class=" card-body">
                <h4 class="card-title">BUSCAR MASCOTAS</h4>
                <div class="row">
                    <div class="form-group row col-md-5">
                        <label for="nombre" class="col-sm-3 text-right control-label col-form-label">Nombre Cliente</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre Cliente">
                        </div>
                    </div>
                    <div class="form-group row col-md-5">
                        <label for="mascota" class="col-sm-3 text-right control-label col-form-label">Nombre de Mascota</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="mascota" id="mascota" placeholder="Nombre Mascota">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button type="submit" class="btn btn-primary">BUSCAR</button>
                        <a href="{{ url('NuevoMascota') }}" class="btn btn-danger">NUEVO</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
    @if (isset($mascota))
        <div class="card">
            <table class="table">
                <tr>
                    <td>Nombre Cliente</td>
                    <td>Nombre Mascota</td>
                    <td>Edad</td>
                    <td>Acciones</td>
                </tr>
                @foreach ($mascota as $key => $m)
                    <tr>
                        <td>{{ $m->nombre_cli }} {{ $c->apellidos_cli }}</td>
                        <td>{{ $m->nombre_ma }}</td>
                        <td>{{ $m->edad }}</td>
                        <td>{{ $m->sexo }}</td>
                        <td>
                            {{-- BOTON DE MODIFICAR MASCOTA --}}
                            <a href="{{ url('RecuperarMascota/'.$m->id_ma) }}" class="btn btn-warning">
                                <i class="far fa-edit"></i>
                            </a>
                            {{-- BOTON DE ELIMINAR MASCOTA --}}
                            <a href="{{ url('ConfirmaMascota/'.$m->id_ma) }}" class="btn btn-danger">
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