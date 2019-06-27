<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use App\Http\Requests\ValidarClienteRequest;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('clientes.BuscarCliente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $clientes = Cliente::whereRaw('concat(nombre_cli," ",apellidos_cli) like "%'.$request->nombre.'%"')
                           ->where('email','like','%'.$request->email.'%')
                           ->get();

        return view('clientes.BuscarCliente')->with('clientes',$clientes);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clientes.NuevoCliente');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ValidarClienteRequest $request)
    {
        $cliente = new Cliente;

        $cliente->nombre_cli = $request->nombre_cli;
        $cliente->apellidos_cli = $request->apellidos_cli;
        $cliente->ci = $request->ci;
        $cliente->celular = $request->celular;
        $cliente->email = $request->email;
        $cliente->direccion = $request->direccion;
        $cliente->estado = 1;

        $cliente->save();

        return view('clientes.BuscarCliente');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cliente = Cliente::find($id);

        return view('clientes.RecuperarCliente')->with('cliente',$cliente);
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
        $cliente = Cliente::find($request->id_cli);

        $cliente->nombre_cli = $request->nombre_cli;
        $cliente->apellidos_cli = $request->apellidos_cli;
        $cliente->ci = $request->ci;
        $cliente->celular = $request->celular;
        $cliente->email = $request->email;
        $cliente->direccion = $request->direccion;
        $cliente->estado = 1;

        $cliente->save();

        return view('clientes.BuscarCliente');
    }

    public function confirma($id)
    {
        return view('clientes.ConfirmaCliente')->with('id',$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $cliente = Cliente::find($request->id_cli);

        $cliente->delete();

        return view('clientes.BuscarCliente');
    }
}
