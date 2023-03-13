<?php

namespace App\Http\Controllers;

use App\Models\Venta;
use App\Models\Cliente;
use App\Models\Producto;
use App\Http\Requests\StoreVentaRequest;
use App\Http\Requests\UpdateVentaRequest;
use App\Http\Requests\Venta\StoreRequest;
use App\Http\Requests\Venta\UpdateRequest;

class VentaController extends Controller
{
    public function index()
    {
        $ventas = Venta::get();
        return view('admin.venta.index', compact('ventas'));
    }


    public function create()
    {
        $clientes = Cliente::get();
        $productos = Producto::get();
        return view('admin.venta.create', compact('venta', 'cliente', 'producto'));
    }

    public function store(StoreVentaRequest $request)
    {
        Venta::create($request->all());
        return redirect()->route('ventas.index');
    }

    public function edit(Venta $venta)
    {
        $clientes = Cliente::get();
        $productos = Producto::get();
        return view('admin.venta.show', compact('venta', 'cliente', 'producto'));
    }

    public function show(Venta $venta)
    {
        return view('admin.venta.show', compact('venta'));
    }

    public function update(UpdateVentaRequest $request, Venta $venta)
    {
        $venta->update($request->all());
        return redirect()->route('ventas.index');
    }


    public function destroy(Venta $venta)
    {
        $venta->delete();
        return redirect()->route('ventas.index');
    }
}
