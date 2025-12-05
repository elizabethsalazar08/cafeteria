@extends('master')

@section('pestaña')
<title>Ver Pedidos</title>
@stop

@section('titulo')
<div class="row">
  <h1 class="col-8 align-self-start">Pedidos realizados</h1>
</div>
@stop

@section('contenido')
<div class="table-responsive">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Origen</th>
                <th>Fecha</th>
                <th>Total</th>
                <th>Opciones</th>
            </tr>
</thead>
<tbody>
    @foreach ($pedido as $realizado)
    <tr>
        <td>{{$realizado->id}}</td>
        <td>{{$realizado->nombre}}</td>
        <td>{{$realizado->origen}}</td>
        <td>{{$realizado->fecha}}</td>
        <td>{{$realizado->total}}</td>
        <td>
            <a href="{{ url('/eliminarPedido/'.$realizado->id)}}"
            class="btn btn-primary btn-sm">Eliminar</a>
</td>
</tr>
@endforeach
</tbody>
</table>
</div>
@stop