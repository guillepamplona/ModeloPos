@extends('adminlte::page')

@section('title', 'ModeloPos')

@section('content_header')
<h1>Productos Actuales</h1>
@stop

@section('content')
<button class="guardarProducto" name="guardarProducto">Agregar Producto</button>
<div>
    <table class="table-fixed w-full">
        <thead>
            <tr class="bg-indigo-600 text-black">
                <th class="px-4 py-2">ID</th>
                <th class="px-4 py-2">Nombre</th>
                <th class="px-4 py-2">Descripción</th>
                <th class="px-4 py-2">Valor</th>
                <th class="px-4 py-2">Cantidad</th>
            </tr>
        </thead>
        <tbody>
            @foreach($productos as $producto)
            <tr>
                <td class="border px-4 py-2">{{$producto->id_producto}}</td>
                <td class="border px-4 py-2">{{$producto->nombre_producto}}</td>
                <td class="border px-4 py-2">{{$producto->descripcion_producto}}</td>
                <td class="border px-4 py-2">{{$producto->valor_producto}}</td>
                <td class="border px-4 py-2">{{$producto->cantidad_producto}}</td>
                <td><button type="button" class="btn btn-primary"><a class="text-white" href="/productos/{{$producto->id}}">Editar</a></td></button>
                <td><button type="button" class="btn btn-danger"><a class="text-white" href="/productos/{{$producto->id}}">Borrar</a></td></button>
            </tr>
            @endforeach
        </tbody>
    </table>
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
