<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Http\Requests\StoreProductoRequest;
use App\Http\Requests\UpdateProductoRequest;
use App\Http\Requests\Producto\StoreRequest;
use App\Http\Requests\Producto\UpdateRequest;

class ProductoController extends Controller
{

    public function index()
    {
        $productos = Producto::get();
        return view('admin.producto.index', compact('productos'));
    }

    public function create()
    {
        return view('admin.producto.create', compact('producto'));
    }


    public function store(StoreProductoRequest $request)
    {
        Producto::create($request->all());
        return redirect()->route('productos.index');
    }

    public function edit(Producto $producto)
    {
        return view('admin.producto.show', compact('producto'));
    }
    
    public function show(Producto $producto)
    {
        return view('admin.producto.show', compact('producto'));
    }

    public function update(UpdateProductoRequest $request, Producto $producto)
    {
        $producto->update($request->all());
        return redirect()->route('productos.index');
    }

    public function destroy(Producto $producto)
    {
        $producto->delete();
        return redirect()->route('productos.index');
    }
}
