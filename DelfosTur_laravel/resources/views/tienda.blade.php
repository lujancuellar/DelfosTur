@extends('layouts.app')

@section('content')
    
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <h2>Nuestros paquetes</h2>
    <div class="container">
    <div class="row">
        <div class="col-md-6" id="midiv">
            <div class="card">
                <img class="card-img-top" src="http://carburando.com/sites/default/files/bariloche_2.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Bariloche</h5>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">Paquete 1  <button>Añadir al carrito</button></li>
                  <li class="list-group-item">Paquete 2 <button>Añadir al carrito</button></li>
                  <li class="list-group-item">Paquete 3 <button>Añadir al carrito</button></li>
                </ul>
                <div class="card-body">
                </div>
              </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <img class="card-img-top" src="https://i2.wp.com/masikiosafaris.com/blog/wp-content/uploads/2019/06/cataratas-victoria.jpg?resize=300%2C200&ssl=1" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Cataratas</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">Paquete 1 <button>Añadir al carrito</button></li>
                  <li class="list-group-item">Paquete 2 <button>Añadir al carrito</button></li>
                  <li class="list-group-item">Paquete 3 <button>Añadir al carrito</button></li>
                </ul>
                <div class="card-body">
                </div>
              </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card" >
                <img class="card-img-top" id="img1" src="https://vignette.wikia.nocookie.net/people-dont-have-to-be-anything-else/images/1/1d/Catedral-cordoba-argentina-426.jpg-426-480x480.jpg/revision/latest?cb=20140519201827" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Cordoba</h5>
                  <p class="card-text">Aca va info de la localidad. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, adipisci</p>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">Paquete 1  <button>Añadir al carrito</button></li>
                  <li class="list-group-item">Paquete 2 <button>Añadir al carrito</button></li>
                  <li class="list-group-item">Paquete 3 <button>Añadir al carrito</button></li>
                </ul>
                <div class="card-body">
                </div>
              </div>
        </div>
        <div class="col-md-6">
            <div class="card" >
                <img class="card-img-top" id="img2" src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/24/Mar-del-plata.JPG/1200px-Mar-del-plata.JPG" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Mar Del Plata</h5>
                  <p class="card-text">Aca va info de la localidad. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, adipisci.</p>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">Paquete 1 <button>Añadir al carrito</button></li>
                  <li class="list-group-item">Paquete 2 <button>Añadir al carrito</button></li>
                  <li class="list-group-item">Paquete 3 <button>Añadir al carrito</button></li>
                </ul>
                <div class="card-body">
                </div>
              </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <img class="card-img-top" src="https://www.ciee.org/sites/default/files/content/program/main-image/66131_buenos_aires_open_campus_gettyimages-667138246.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Buenos aires</h5>
                  <p class="card-text">Aca va info de la localidad. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, adipisci</p>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">Paquete 1 <button>Añadir al carrito</button></li>
                  <li class="list-group-item">Paquete 2 <button>Añadir al carrito</button></li>
                  <li class="list-group-item">Paquete 3 <button>Añadir al carrito</button></li>
                </ul>
                <div class="card-body">
                </div>
              </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <img class="card-img-top" src="https://www.andbeyond.com/wp-content/uploads/sites/5/Valle-de-Cusi-Cusi-Salta-Province-Jujuy-Argentina.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Salta</h5>
                  <p class="card-text">Aca va info de la localidad. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, adipisci</p>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">Paquete 1<button>Añadir al carrito</button></li>
                  <li class="list-group-item">Paquete 2<button>Añadir al carrito</button></li>
                  <li class="list-group-item">Paquete 3<button>Añadir al carrito</button></li>
                </ul>
                <div class="card-body">
                </div>
              </div>
        </div>
    </div>
</div>


        @endsection