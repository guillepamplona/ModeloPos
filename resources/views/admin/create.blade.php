@extends('adminlte::page')

@section('title', 'ModeloPos')

@section('content_header')
<h1>Crear Producto</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        {!! Form::open(['route' => 'admin.create' ]) !!}

        <div class="form-group">

            {!! Form::label('name', 'Nombre Producto') !!}
            {!! Form::text('name', null, ["class" => "form-control"]) !!}
        </div>
        {!! Form::close() !!}
    </div>
</div>
@stop