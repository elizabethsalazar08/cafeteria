@extends('master')

@section('pestaña')
<title>Presentación</title>
@stop

@section('titulo')
<h1>Cafecito Barranqueño Vintage</h1>
@stop

@section('contenido')
  <!--HERO-->
  <section class="text-center text-white d-flex align-items-center justify-content-center" 
           style="background-image: url('https://images.unsplash.com/photo-1509042239860-f550ce710b93');
                  background-size: cover; background-position: center; height: 80vh;">
    <div class="bg-dark bg-opacity-50 p-5 rounded">
      <h1 class="display-4 fw-bold">Un viaje al sabor del pasado</h1>
      <p class="lead">Descubre el encanto de una cafetería vintage con aroma a historia.</p>
      <a href="#menu" class="btn btn-light btn-lg mt-3">Ver Menú</a>
    </div>
  </section>

  <!-- CONTACTO -->
  <section id="contacto" class="container py-5 text-center">
    <h2 class="fw-bold mb-4">Contáctanos</h2>
    <p>📍 Calle Barrancos 2008, Riberas Central Park, Ciudad CulichiYork</p>
    <p>📞 +52 667 191 0607 | ✉️ cafe@cafecitovintage.com</p>
  </section>
@stop

<section id="menu" class="py-5 bg-white">
    <div class="container text-center">
      <h2 class="fw-bold mb-4">Nuestro Menú</h2>
      <div class="row g-4">
        <div class="col-md-4">
          <div class="card h-100 shadow-sm">
            <img src="https://images.unsplash.com/photo-1511920170033-f8396924c348" 
                 class="card-img-top" alt="Café Espresso">
            <div class="card-body">
              <h5 class="card-title">Café Espresso</h5>
              <p class="card-text">Intenso y aromático, preparado con granos seleccionados de alta calidad.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card h-100 shadow-sm">
            <img src="https://images.unsplash.com/photo-1509042239860-f550ce710b93" 
                 class="card-img-top" alt="Cappuccino">
            <div class="card-body">
              <h5 class="card-title">Cappuccino</h5>
              <p class="card-text">Espuma perfecta y un toque de cacao, la mezcla ideal entre café y cremosidad.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card h-100 shadow-sm">
            <img src="https://images.unsplash.com/photo-1521305916504-4a1121188589" 
                 class="card-img-top" alt="Pastelería">
            <div class="card-body">
              <h5 class="card-title">Pastelería Artesanal</h5>
              <p class="card-text">Dulces caseros que te transportan a otra época. ¡Perfectos para acompañar tu café!</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>