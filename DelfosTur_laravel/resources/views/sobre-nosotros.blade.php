@extends('layouts.app')

@section('content')
@if (session('status'))
<div class="alert alert-success" role="alert">
    {{ session('status') }}
</div>
@endif
<div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="card bg-dark text-white">
          <img src="https://www.mundomarketing.com/wp-content/uploads/2017/06/2-7-e1497459707200.jpg" class="card-img" alt="...">
          <div class="card-img-overlay">
            <h5 class="card-title" id="tarjeta">Contamos con mas de 15 empleados</h5>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card bg-dark text-white">
          <img src="https://sistematdc.com/blog/wp-content/uploads/2020/04/Tendencias-de-marketing-digital-2019.png" class="card-img" alt="...">
          <div class="card-img-overlay">
            <h5 class="card-title" id="tarjeta2">Tenemos presencia en redes</h5>
          </div>
        </div>
      </div>
    </div>
  </div>
    <h1>Nuestros clientes nos avalan</h1>

<div class="card testimonial-card">
<div class="card-up indigo lighten-1"></div>

<div class="avatar mx-auto white">
  <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20%2810%29.jpg" class="rounded-circle"
    alt="cliente">
</div>

<div class="card-body">
  <h4 class="card-title">Anna Doe</h4>
  <hr>
  <p><i class="fas fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, adipisci.Eos, adipiscLorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, adipisc
  </p>
</div>

</div>

<div class="card testimonial-card">
<div class="card-up indigo lighten-1"></div>
<div class="avatar mx-auto white">
  <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20%2810%29.jpg" class="rounded-circle"
    alt="woman avatar">
</div>
<div class="card-body">
  <h4 class="card-title">Anna Doe</h4>
  <hr>
  <p><i class="fas fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, adipisci
  </p>
</div>

</div>
<div class="card testimonial-card">
<div class="card-up indigo lighten-1"></div>
<div class="avatar mx-auto white">
  <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20%2810%29.jpg" class="rounded-circle"
    alt="woman avatar">
</div>
<div class="card-body">
  <h4 class="card-title">Anna Doe</h4>
  <hr>
  <p><i class="fas fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, adipisci
  </p>
</div>
@endsection