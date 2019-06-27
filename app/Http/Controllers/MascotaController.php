<?php

namespace App\Http\Controllers;

use App\Mascota;
use Illuminate\Http\Request;
use App\Http\Requests\ValidarMascotaRequest;

class MascotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('mascotas.BuscarMascota');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mascota  $mascota
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $mascotas = Mascota::join('clientes','clientes.id_cli','=','mascotas.id_cli')
                           ->where('nombre_cli','like','%'.$request->nombre.'%')
                           ->where('nombre_ma','like','%'.$request->mascota.'%')
                           ->get();

        return view('mascotas.BuscarMascota')->with('mascota',$mascotas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mascotas.NuevoMascota');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ValidarMascotaRequest $request)
    {
        $mascota = new Mascota;

        $mascota->id_cli = $request->id_cli;
        $mascota->nombre_ma = $request->nombre_ma;
        $mascota->edad = $request->edad;
        $mascota->sexo = $request->sexo;

        $mascota->save();

        return view('mascotas.BuscarMascota');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mascota  $mascota
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mascota = Mascota::find($id);

        return view('mascotas.RecuperaMascota')->with('mascota',$mascota);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mascota  $mascota
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $mascota = Mascota::find($id);

        $mascota->id_cli = $request->id_cli;
        $mascota->nombre_ma = $request->nombre_ma;
        $mascota->edad = $request->edad;
        $mascota->sexo = $request->sexo;

        $mascota->save();

        return view('mascotas.BuscarMascota');
    }

    public function confirma($id)
    {
        $mascota = Mascota::find($id);

        return view('mascotas.ConfirmaMascota')->with('id',$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mascota  $mascota
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $mascota = Mascota::find($request->id_ma);

        $mascota->delete();

        return view('mascotas.BuscarMascota');
    }
}
