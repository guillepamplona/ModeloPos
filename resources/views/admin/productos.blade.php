@extends('adminlte::page')

@section('title', 'ModeloPos')

@section('content_header')
<h1>Dashboard</h1>
@stop

@section('content')
<p>Welcome to this beautiful admin panel.</p>
@foreach($productos as $producto)
    <div>{{$producto->nombre_producto}} {{$producto->valor_producto}}</div>
    <a href="/productos/{{$producto->id}}">Editar</a>
@endforeach
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

<script>
console.log('Hi!');
</script>
@stop
