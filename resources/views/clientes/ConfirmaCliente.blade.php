@extends('disenio.maestro')

@section('contenido')

<div class="col-md-3"></div>
<div class="col-md-6">
    <div class="card">
        <form action="{{ url('EliminaCliente') }}" method="post">
            @csrf
            <input type="hidden" name="id_cli" id="id_cli" value="{{ $id }}">
            <div class="card-body">
                <h4 class="card-title">¿ESTA SEGURO DE ELIMINAR EL CLIENTE?</h4>
            </div>
            <div class="border-top">
                <div class="card-body">
                    <button type="submit" class="btn btn-danger">SI</button>
                    <a href="{{ url('BuscarCliente') }}" class="btn btn-primary">NO</a>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="col-md-3"></div>

@endsection