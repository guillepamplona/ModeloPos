@extends('adminlte::page')

@section('title', 'ModeloPos')

@section('content_header')
<h1>Producto</h1>
@stop

@section('content')
<p>Editar Cliente</p>
<div class="card">
<div class="card-body">
    <table class="table table-fixed">
        <thead>
                <tr class="bg-indigo-600 text-black">
                    <th class="px-4 py-2">Cedula</th>
                    <th class="px-4 py-2">Nombres</th>
                    <th class="px-4 py-2">Apellidos</th>
                    <th class="px-4 py-2">Celular</th>
                    <th class="px-4 py-2">Email</th>
                    <th class="px-4 py-2">Dirección</th>
                    <th class="px-4 py-2">Departamento</th>
                    <th class="px-4 py-2">Ciudad</th>
                    <th class="px-4 py-2">Barrio</th>            
                    <th width:10px colspan="2"></th>
                </tr>
        </thead>
        <tbody>
            <div><th>{{$cliente->cedula_cliente}}</th><th>{{$cliente->nombres_cliente}}</th> <th>{{$cliente->apellidos_cliente}}</th><th> {{$cliente->celular_cliente}}</th>
                 <th> {{$cliente->email_cliente}}</th><th> {{$cliente->direccion_cliente}}</th><th> {{$cliente->departamento_cliente}}</th><th> {{$cliente->ciudad_cliente}}</th>
                 <th> {{$cliente->barrio_cliente}}</th>
            </div>
        </tbody>
        </table>
    <form method="post">
        <input type="number" name="cedula_cliente" value="{{$cliente->cedula_cliente}}" required>
        <input type="text" name="nombres_cliente" value="{{$cliente->nombres_cliente}}" required>
        <input type="text" name="apellidos_cliente"  value="{{$cliente->apellidos_cliente}}" required>
        <input type="number" name="celular_cliente" value="{{$cliente->celular_cliente}}" required>
        <input type="text" name="email_cliente" value="{{$cliente->email_cliente}}" required>
        <input type="text" name="direccion_cliente" value="{{$cliente->direccion_cliente}}" required>
        <input type="text" name="departamento_cliente"  value="{{$cliente->departamento_cliente}}" required>
        <input type="text" name="ciudad_cliente" value="{{$cliente->ciudad_cliente}}" required>
        <input type="text" name="barrio_cliente" value="{{$cliente->barrio_cliente}}" required>
        <input href="/clientes" type="submit" value="Guardar"/>
        @csrf
        <br>
        <form action="/clientes/{{$cliente->id}}/borrar" method="post">
            @csrf
            <input type="submit" value="Borrar"/>
        </form>
    </form>
    <button class="btn btn-success"><a class="text-white" href="/clientes">Volver a la lista de clientes</a></button>
    
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
