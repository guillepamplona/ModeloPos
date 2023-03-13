<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Producto;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }
    public function create()
    {
        $producto = new Producto;
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
