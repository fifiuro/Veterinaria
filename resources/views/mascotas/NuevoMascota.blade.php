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
        <form action="{{ url('GuardarMascota') }}" method="post">
            @csrf
            <div class="card-body">
                <h4 class="card-title">NUEVA MASCOTA</h4>
                <div class="form-group row">
                    <label for="nombre_cli" class="col-sm-3 text-right control-label col-form-label">Nombre Cliente</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="nombre_cli" id="nombre_cli" required>
                    </div>
                </div>
                <div class="form-group row" >
                    <label for="nombre_ma" class="col-sm-3 text-right control-label col-form-label">Nombre Mascota</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="nombre_ma" id="nombre_ma" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="edad" class="col-sm-3 text-right control-label col-form-label">Edad</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="edad" id="edad" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="sexo" class="col-sm-3 text-right control-label col-form-label">Sexo</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="sexo" id="sexo" required>
                    </div>
                </div>
            </div>
            <div class="border-top">
                <div class="card-body">
                    <button type="submit" class="btn btn-primary">GUARDAR</button>
                    <a href="{{ url('BuscarMascota') }}" class="btn btn-danger">CANCELAR</a>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="col-md-3"></div>

@endsection