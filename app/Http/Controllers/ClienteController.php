<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Http\Requests\StoreClienteRequest;
use App\Http\Requests\UpdateClienteRequest;
use App\Http\Requests\Cliente\StoreRequest;
use App\Http\Requests\Cliente\UpdateRequest;

class ClienteController extends Controller
{

    public function index()
    {
        $clientes = Cliente::get();
        return view('admin.cliente.index', compact('clientes'));
    }

    public function create()
    {
        return view('admin.cliente.create', compact('cliente'));
    }

    public function store(StoreClienteRequest $request)
    {
        Cliente::create($request->all());
        return redirect()->route('clientes.index');
    }

    public function edit(Cliente $cliente)
    {
        return view('admin.cliente.show', compact('cliente'));
    }

    public function show(Cliente $cliente)
    {
        return view('admin.cliente.show', compact('cliente'));
    }

    public function update(UpdateClienteRequest $request, Cliente $cliente)
    {
        $cliente->update($request->all());
        return redirect()->route('clientes.index');
    }

    public function destroy(Cliente $cliente)
    {
        $cliente->delete();
        return redirect()->route('clientes.index');
    }
}
