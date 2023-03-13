@extends('adminlte::page')

@section('title', 'ModeloPos')

@section('content_header')
<h1>Crear Cliente</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        <form method="post" class="form-group">
            <label for="">Cedula Cliente: <input width="10px" type="number" name="cedula_cliente" required></label>
            <br>
            <label for="">Nombres Cliente: <input type="text" name="nombres_cliente" required></label>
            <br>
            <label for="">Apellidos Cliente: <input type="text" name="apellidos_cliente" required></label>
            <br>
            <label for="">Celular Cliente: <input type="number" name="celular_cliente" required></label>
            <br>
            <label for="">Email Cliente: <input width="10px" type="text" name="email_cliente" required></label>
            <br>
            <label for="">Dirección Cliente: <input type="text" name="direccion_cliente" required></label>
            <br>
            <label for="">Departamento Cliente: <input type="text" name="departamento_cliente" required></label>
            <br>
            <label for="">Ciudad Cliente: <input type="text" name="ciudad_cliente" required></label>
            <br>
            <label for="">Barrio Cliente: <input type="text" name="barrio_cliente" required></label>
            <br>
            <input href="/clientes" type="submit" value="Guardar" />
            @csrf
            <br>
        </form>
    </div>
</div>
@stop