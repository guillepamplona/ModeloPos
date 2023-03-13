<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cliente;
use App\Models\Producto;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function productoindex()
    {
        return view('admin.index');
    }
    public function productocreate()
    {
        $producto = new Producto;
        return view('admin.create', ['producto' => $producto]);
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
    
    public function index()
    {
        return view('admin.index');
    }
    public function clientecreate()
    {
        $cliente = new Cliente;
        return view('admin.create', ['cliente' => $cliente]);
    }
    public function clientesIndex()
    {
        $clientes = Cliente::all();
        return view('admin.clientes', ['clientes' => $clientes]);
    }

    public function clienteEditar($id)
    {
        $cliente = Cliente::where('id', $id)->firstOrFail();
        return view('admin.clienteEditar', ['cliente' => $cliente]);
    }
    public function borrarCliente($id)
    {
        Cliente::where('id', $id)->delete();
        $clientes = Cliente::all();
        return view('admin.clientes',['clientes'=>$clientes]);
    }

    public function guardarCliente($id)
    {
        $params = Request::capture();
        Cliente::where("id", $id)->update([
            'cedula_cliente' => $params['cedula_cliente'],
            'nombres_cliente' => $params['nombres_cliente'],
            'apellidos_cliente' => $params['apellidos_cliente'],
            'celular_cliente' => $params['celular_cliente'],
            'email_cliente' => $params['email_cliente'],
            'direccion_cliente' => $params['direccion_cliente'],
            'ciudad_cliente' => $params['ciudad_cliente'],
            'barrio_cliente' => $params['barrio_cliente']]);
        $cliente = Cliente::where("id", $id)->firstOrFail();
        return view('/clientes', ['cliente' => $cliente]);
    }
}
