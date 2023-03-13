@extends('adminlte::page')

@section('title', 'ModeloPos')

@section('content_header')
<h1>Clientes</h1>
@stop

@section('content')
 {{-- <button class="guardarProducto" name="guardarProducto">Agregar Producto</button> --}}
<div class="card">
    <div class="card-header">
        <a class="btn btn-primary btn-sm" href="">Agregar Cliente</a>
    </div>
    <div class="card-body">
    <table class="table table-fixed">
        <thead>
            <tr class="bg-indigo-600 text-black">
                <th class="px-4 py-2">ID</th>
                <th class="px-4 py-2">Cedula</th>
                <th class="px-4 py-2">Nombres</th>
                <th class="px-4 py-2">Apellidos</th>
                <th class="px-4 py-2">Celular</th>
                <th class="px-4 py-2">Email</th>
                <th class="px-4 py-2">Dirección</th>
                <th class="px-4 py-2">Departamento</th>
                <th class="px-4 py-2">Ciudad</th>
                <th class="px-4 py-2">Barrio</th>
                <th colspan="2"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($clientes as $cliente)
            <tr>
                <td class="border px-4 py-2">{{$cliente->id}}</td>
                <td class="border px-4 py-2">{{$cliente->cedula_cliente}}</td>
                <td class="border px-4 py-2">{{$cliente->nombres_cliente}}</td>
                <td class="border px-4 py-2">{{$cliente->apellidos_cliente}}</td>
                <td class="border px-4 py-2">{{$cliente->celular_producto}}</td>
                <td class="border px-4 py-2">{{$cliente->email_cliente}}</td>
                <td class="border px-4 py-2">{{$cliente->direccion_cliente}}</td>
                <td class="border px-4 py-2">{{$cliente->departamento_cliente}}</td>
                <td class="border px-4 py-2">{{$cliente->ciudad_cliente}}</td>
                <td class="border px-4 py-2">{{$cliente->barrio_cliente}}</td>
                <td><button type="button" class="btn btn-primary"><a class="text-white" href="/clientes/{{$cliente->id}}">Editar</a></button></td>
                <td><button type="button" class="btn btn-danger"><a class="text-white" href="/clientes/{{$cliente->id}}">Borrar</a></td></button>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

<script>
console.log('Hi!');
</script>
@stop
