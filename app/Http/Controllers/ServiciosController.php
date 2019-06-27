<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servicio;
use App\Http\Requests\ValidarServicioRequest;

class ServiciosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('servicios.BuscarServicio');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $servicio = Servicio::where('nombre_se','like','%'.$request->nombre.'%')
                            ->where('precio','like','%'.$request->precio.'%')
                            ->get();

        return view('servicios.BuscarServicio')->with('servicio',$servicio);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('servicios.NuevoServicio');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ValidarServicioRequest $request)
    {
        $servicio = new Servicio;

        $servicio->nombre_se = $request->nombre_se;
        $servicio->precio = $request->precio;
        $servicio->obs_ser = $request->obs_se;
        $servicio->estado = 1;

        $servicio->save();

        return view('servicios.BuscarServicio');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $servicio = Servicio::find($id);

        return view('servicios.RecuperarServicio')->with('servicio',$servicio);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $servicio = Servicio::find($request->id_se);

        $servicio->nombre_se = $request->nombre_se;
        $servicio->precio = $request->precio;
        $servicio->obs_ser = $request->obs_se;
        $servicio->estado = 1;

        $servicio->save();

        return view('servicios.BuscarServicio');
    }

    public function confirma($id)
    {
        return view('servicios.ConfirmaServicio')->with('id',$id);
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $servicio = Servicio::find($request->id_se);

        $servicio->delete();

        return view('servicios.BuscarServicio');
    }
}
