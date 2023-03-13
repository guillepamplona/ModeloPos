@extends('adminlte::page')

@section('title', 'ModeloPos')

@section('content_header')
<h1>Crear Producto</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        <form method="post"  class="form-group">
            <label for="">Nombre Producto:  <input width="10px" type="text" name="nombre_producto" value="{{$producto->nombre_producto}}" required></label>
            <br>
            <label for="">Descripción Producto:   <input type="text" name="descripcion_producto" value="{{$producto->descripcion_producto}}" required></label>
            <br>
            <label for="">Valor Producto:    <input type="number" name="valor_producto"  value="{{$producto->valor_producto}}" required></label>
            <br>
            <label for="">Cantidad Producto:    <input type="text" name="cantidad_producto" value="{{$producto->cantidad_producto}}" required></label>
            <br>
            <input href="/productos" type="submit" value="Guardar"/>
            @csrf
            <br>
        </form>
    </div>
</div>
@stop