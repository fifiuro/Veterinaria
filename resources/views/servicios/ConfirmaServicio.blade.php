@extends('disenio.maestro')

@section('contenido')

<div class="col-md-3"></div>
<div class="col-md-6">
    <div class="card">
        <form action="{{ url('EliminaServicio') }}" method="post">
            @csrf
            <input type="hidden" name="id_se" id="id_se" value="{{ $id }}">
            <div class="card-body">
                <h4 class="card-title">¿ESTA SEGURO DE ELIMINAR EL SERVICIO?</h4>
            </div>
            <div class="border-top">
                <div class="card-body">
                    <button type="submit" class="btn btn-danger">SI</button>
                    <a href="{{ url('BuscarServicio') }}" class="btn btn-primary">NO</a>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="col-md-3"></div>

@endsection