@extends('disenio.maestro')

@section('contenido')

<div class="col-md-12">
    <div class="card">
        <form action="{{ url('BuscarCliente') }}" method="post">
            @csrf
            <div class=" card-body">
                <h4 class="card-title">BUSCAR CLIENTE</h4>
                <div class="row">
                    <div class="form-group row col-md-5">
                        <label for="nombre" class="col-sm-3 text-right control-label col-form-label">Nombre Cliente</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre Cliente">
                        </div>
                    </div>
                    <div class="form-group row col-md-5">
                        <label for="email" class="col-sm-3 text-right control-label col-form-label">Email</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="email" id="email" placeholder="Email">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button type="submit" class="btn btn-primary">BUSCAR</button>
                        <a href="{{ url('NuevoCliente') }}" class="btn btn-danger">NUEVO</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
    @if (isset($clientes))
        <div class="card">
            <table class="table">
                <tr>
                    <td>Nombre Cliente</td>
                    <td>CI</td>
                    <td>Celular</td>
                    <td>Email</td>
                    <td>Dirección</td>
                    <td>Estado</td>
                    <td>Acciones</td>
                </tr>
                @foreach ($clientes as $key => $c)
                    <tr>
                        <td>{{ $c->nombre_cli }} {{ $c->apellidos_cli }}</td>
                        <td>{{ $c->ci }}</td>
                        <td>{{ $c->celular }}</td>
                        <td>{{ $c->email }}</td>
                        <td>{{ $c->direccion }}</td>
                        <td>
                            @if ($c->estado == 1)
                                <i class="fas fa-check"></i>
                            @else
                                <i class="fas fa-times"></i>
                            @endif
                        </td>
                        <td>
                            {{-- BOTON DE MODIFICAR CLIENTE --}}
                            <a href="{{ url('RecuperarCliente/'.$c->id_cli) }}" class="btn btn-warning">
                                <i class="far fa-edit"></i>
                            </a>
                            {{-- BOTON DE ELIMINAR CLIENTE --}}
                            <a href="{{ url('ConfirmaCliente/'.$c->id_cli) }}" class="btn btn-danger">
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