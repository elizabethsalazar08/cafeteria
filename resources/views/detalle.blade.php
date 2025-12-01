@extends('master')

@section('pestaña')
<title>Ver Pedidos</title>
@stop

@section('titulo')
<div class="row">
  <h1 class="col-8 align-self-start">Pedidos</h1>
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
    @foreach ($detalles as $detalle)
    <tr>
        <td>{{$producto->id}}</td>
        <td>{{$producto->nombre}}</td>
        <td>{{$producto->precio}}</td>
        <td><img src="{{ asset('img_cafeteria/'.$producto->imagen) }}"
            alt="{{$producto->nombre}}"
            widht="100"
            height="50">
        </td>
        <td>
            <a href="{{ url('/agregarProducto') }}/{{$producto->id}}"
            class="btn btn-primary btn-sm">Agregar</a>
</td>
</tr>
@endforeach
</tbody>
</table>
</div>
@stop