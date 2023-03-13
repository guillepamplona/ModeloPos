<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProductoRequest;
use App\Http\Requests\UpdateProductoRequest;
use App\Http\Requests\Producto\StoreRequest;
use App\Http\Requests\Producto\UpdateRequest;

class ProductoController extends Controller
{

    public function index()
    {
        return view('admin.index');
    }
    public function create()
    {
       
    }
    public function productosIndex()
    {
        $productos = Producto::all();
        return view('admin.productos', ['productos' => $productos]);
    }

    public function productoEditar($id)
    {
        $producto = Producto::where('id', $id)->firstOrFail();
        return view('admin.productoEditar', ['producto' => $producto]);
    }
    public function borrarProducto($id)
    {
        Producto::where('id', $id)->delete();
        $productos = Producto::all();
        return view('admin.productos',['productos'=>$productos]);
    }

    public function guardarProducto($id)
    {
        $params = Request::capture();
        Producto::where("id", $id)->update([
            'nombre_producto' => $params['nombre_producto'],
            'descripcion_producto' => $params['descripcion_producto'],
            'valor_producto' => $params['valor_producto'],
            'cantidad_producto' => $params['cantidad_producto']]);
        $producto = Producto::where("id", $id)->firstOrFail();
        return view('admin.productoEditar', ['producto' => $producto]);
    }
}
