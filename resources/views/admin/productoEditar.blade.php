@extends('adminlte::page')

@section('title', 'ModeloPos')

@section('content_header')
<h1>Dashboard</h1>
@stop

@section('content')
<p>Producto.</p>
<div>{{$producto->nombre_producto}} {{$produto->descripcion_producto}} {{$producto->valor_producto}}</div>
<form action="/productos/{{$producto->id}}/borrar" method="post">
    @csrf
    <input type="submit" value="Borrar"/>
</form>
<a href="/productos">Productos</a>
    <form method="post">
        <input type="text" name="nombre_producto" value="{{$producto->nombre_producto}}" required>
        <input type="text" name="descripcion_producto" value="{{$producto->descripcion_producto}}" required>
        <input type="number" name="valor_producto"  value="{{$producto->valor_producto}}" required>
        <input type="text" name="cantidad_producto" value="{{$producto->cantidad_producto}}" required>
        <input type="submit" value="Guardar" />
        @csrf
    </form>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

<script>
console.log('Hi!');
</script>
@stop
