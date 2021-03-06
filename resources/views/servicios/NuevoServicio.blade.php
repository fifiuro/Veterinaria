@extends('disenio.maestro')

@section('contenido')

<div class="col-md-3"></div>
<div class="col-md-6">
    <section class="content">
        @if($errors->any())
            <div class="alert alert-danger alert-dismissible">
                <h4>
                    <i class="icon fa fa-ban"></i>
                    Error
                </h4>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @yield('contenido')
    </section>
    <div class="card">
        <form action="{{ url('GuardarServicio') }}" method="post">
            @csrf
            <div class="card-body">
                <h4 class="card-title">NUEVO SERVICIO</h4>
                <div class="form-group row">
                    <label for="nombre_se" class="col-sm-3 text-right control-label col-form-label">Nombre Servicio</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="nombre_se" id="nombre_se" value="{{ old('nombre_se') }}" required>
                    </div>
                </div>
                <div class="form-group row" >
                    <label for="precio" class="col-sm-3 text-right control-label col-form-label">Precio</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="precio" id="precio" value="{{ old('precio') }}" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="obs_se" class="col-sm-3 text-right control-label col-form-label">Descripcion del Servicio</label>
                    <div class="col-sm-9">
                        <textarea class="form-control" name="obs_se" id="obs_se" cols="30" rows="10">{{ old('obs_se') }}</textarea>
                    </div>
                </div>
            </div>
            <div class="border-top">
                <div class="card-body">
                    <button type="submit" class="btn btn-primary">GUARDAR</button>
                    <a href="{{ url('BuscarServicio') }}" class="btn btn-danger">CANCELAR</a>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="col-md-3"></div>

@endsection