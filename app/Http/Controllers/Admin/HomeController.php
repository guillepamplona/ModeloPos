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
    public function productoCreateView(Request $request)
    {
        // $request->validate([
        //     'nombre_producto'=>'required',
        //     'descripcion_producto'=>'required',
        //     'valor_producto'=>'required',
        //     'cantidad_producto'=>'required'
        //    ]);
        // $producto = Producto::create($request->all());
        return view ('admin.create');
    }

    public function productoCreate(Request $request)
    {
        $request->validate([
            'nombre_producto'=>'required',
            'descripcion_producto'=>'required',
            'valor_producto'=>'required',
            'cantidad_producto'=>'required'
           ]);
        Producto::create($request->all());
        return redirect('/productos');
    }
    public function store(Request $request)
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