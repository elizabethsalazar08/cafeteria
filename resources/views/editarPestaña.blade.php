@extends('master')

@section('pestaña')
<title>Presentación</title>
@stop

@section('titulo')
<h1>Cafecito Barranqueño Vintage</h1>
@stop

@section('contenido')
  <!--HERO-->
  <div class="text-center text-white d-flex align-items-center justify-content-center" 
           style="background-size: cover; background-position: center; height: 80vh;">
    <div class="bg-dark bg-opacity-50 p-5 rounded">
      <h1 class="display-4 fw-bold">Un viaje al sabor del pasado</h1>
      <p class="lead">Descubre el encanto de una cafetería vintage con aroma a historia.</p>
      <img src="{{ asset('img_cafeteria/cafe-presentacion.jpg') }}"
      height="200"
      widht="100">
    </div>
</div>

  <!-- CONTACTO -->
  <div class="container py-5 text-center">
    <h2 class="fw-bold mb-4">Contáctanos</h2>
    <p>📍 Calle Barrancos 2008, Riberas Central Park, Ciudad CulichiYork</p>
    <p>📞 +52 667 191 0607 | ✉️ cafe@cafecitovintage.com</p>
</div>
@stop
