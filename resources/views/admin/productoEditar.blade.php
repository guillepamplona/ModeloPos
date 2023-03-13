@extends('adminlte::page')

@section('title', 'ModeloPos')

@section('content_header')
<h1>Producto</h1>
@stop

@section('content')
<p>Editar Producto</p>
<div class="card">
<div class="card-body">
    <table class="table table-fixed">
        <thead>
                <tr class="bg-indigo-600 text-black">
                    <th class="px-4 py-2">Nombre</th>
                    <th class="px-4 py-2">Descripción</th>
                    <th class="px-4 py-2">Valor</th>
                    <th class="px-4 py-2">Cantidad</th>
                    <th width:10px colspan="2"></th>
                </tr>
        </thead>
        <tbody>
            <div><th>{{$producto->nombre_producto}}</th><th>{{$producto->descripcion_producto}}</th> <th>{{$producto->valor_producto}}</th><th> {{$producto->cantidad_producto}}</th></div>
        </tbody>
        </table>
    <form method="post">
        <input type="text" name="nombre_producto" value="{{$producto->nombre_producto}}" required>
        <input type="text" name="descripcion_producto" value="{{$producto->descripcion_producto}}" required>
        <input type="number" name="valor_producto"  value="{{$producto->valor_producto}}" required>
        <input type="text" name="cantidad_producto" value="{{$producto->cantidad_producto}}" required>
        <input href="/productos" type="submit" value="Guardar"/>
        @csrf
        <br>
        <form action="/productos/{{$producto->id}}/borrar" method="post">
            @csrf
            <input type="submit" value="Borrar"/>
        </form>
    </form>
    <button class="btn btn-success"><a class="text-white" href="/productos">Volver a productos</a></button>
    
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
