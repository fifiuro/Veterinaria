@extends('disenio.maestro')

@section('contenido')

<div class="col-md-3"></div>
<div class="col-md-6">
    <div class="card">
        <form action="{{ url('ModificarCLiente') }}" method="post">
            @csrf
            <input type="hidden" name="id_cli" value="{{ $cliente->id_cli }}">
            <div class="card-body">
                <h4 class="card-title">MODIFICAR CLIENTE</h4>
                <div class="form-group row">
                    <label for="nombre_cli" class="col-sm-3 text-right control-label col-form-label">Nombre Cliente</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" name="nombre_cli" id="nombre_cli" value="{{ $cliente->nombre_cli }}" required>
                    </div>
                </div>
                <div class="form-group row" >
                    <label for="apellidos_cli" class="col-sm-3 text-right control-label col-form-label">Apellidos Cliente</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="apellidos_cli" id="apellidos_cli" value="{{ $cliente->apellidos_cli }}" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="ci" class="col-sm-3 text-right control-label col-form-label">C.I.</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="ci" id="ci" value="{{ $cliente->ci }}" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="celular" class="col-sm-3 text-right control-label col-form-label">Celular</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="celular" id="celular" value="{{ $cliente->celular }}" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-sm-3 text-right control-label col-form-label">Email</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="email" id="email" value="{{ $cliente->email }}" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="direccion" class="col-sm-3 text-right control-label col-form-label">Direccion</label>
                    <div class="col-sm-9">
                        <textarea class="form-control" name="direccion" id="direccion" cols="30" rows="10">{{ $cliente->direccion }}</textarea>
                    </div>
                </div>
            </div>
            <div class="border-top">
                <div class="card-body">
                    <button type="submit" class="btn btn-primary">GUARDAR</button>
                    <a href="{{ url('BuscarCliente') }}" class="btn btn-danger">CANCELAR</a>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="col-md-3"></div>

@endsection