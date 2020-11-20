@extends('layouts.app')

@section('content')
    <div class="container">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-example-2" data-slide-to="1"></li>
              <li data-target="#carousel-example-2" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <div class="view">
                  <img class="d-block w-100" src="https://www.infozona.com.ar/wp-content/uploads/2020/05/Cataratas_saiko3p_123RF_1587014049.jpg"
                    alt="First slide">
                  <div class="mask rgba-black-light"></div>
                </div>
                <div class="carousel-caption">
                  <h3 class="h3-responsive">Cataratas</h3>
                  <a href="tienda.html" class="btn btn-primary">Ir a la tienda</a>
                </div>
              </div>
              <div class="carousel-item">
                <div class="view">
                  <img class="d-block w-100" src="http://viviargentina.lanacion.com.ar/dist/img/cordoba/desk/header.jpg"
                    alt="Second slide">
                  <div class="mask rgba-black-strong"></div>
                </div>
                <div class="carousel-caption">
                  <h3 class="h3-responsive">Córdoba</h3>
                  <a href="tienda.html" class="btn btn-primary">Ir a la tienda</a>
                </div>
              </div>
              <div class="carousel-item">
                <div class="view">
                  <img class="d-block w-100" src="https://i.ytimg.com/vi/t_oxgV4zpWQ/maxresdefault.jpg"
                    alt="Third slide">
                  <div class="mask rgba-black-slight"></div>
                </div>
                <div class="carousel-caption">
                  <h3 class="h3-responsive">Mar Del Plata</h3>
                  <a href="tienda.html" class="btn btn-primary">Ir a la tienda</a>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
            <div>
                
            </div>
          </div>
          <h2 id="titulo">Convenios</h2>
          <div class="row">
            <div class="col-sm-3">
              <div class="card">
                <div class="card-body">
                  <img class="rounded-circle" src="https://i.pinimg.com/736x/25/1f/99/251f99f84985a77d5ef591ae2b62d534.jpg" alt="Card image cap" width="140" height="140" >
                  <h5 class="card-title">Protocolo de covid-19</h5>
                  <p class="card-text">Todos los viajes cumplen con la normativa vigente contra el covid-19.</p>
                  <a href="https://www.argentina.gob.ar/justicia/derechofacil/leysimple/covid-19-prohibicion-de-ingreso-al-territorio-nacional" class="btn btn-primary">Ver normativa vigente</a>
                </div>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="card">
                <div class="card-body">
                    <img class="rounded-circle" src="https://tse4.mm.bing.net/th?id=OIP._T2rAnVRscCzTdeUjidc3gHaHa&pid=Api&P=0&w=300&h=300" alt="Card image cap" width="140" height="140">
                  <h5 class="card-title">Descuentos en hoteles</h5>
                  <p class="card-text">Por tener acuerdos con ** contamos con precios rebajados en todos sus paquetes.</p>
                  <a href="tienda.html" class="btn btn-primary">Ir a la tienda</a>
                </div>
              </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                  <div class="card-body">
                    <img class="rounded-circle" src="http://img.freepik.com/free-vector/healthy-food_23-2147526989.jpg?size=338&ext=jpg" alt="Card image cap" width="140" height="140" >
                    <h5 class="card-title">Desayuno y cena gratis</h5>
                    <p class="card-text">Contamos también con opción vegetariana y vegana.</p>
                    <a href="tienda.html" class="btn btn-primary">Ir a la tienda</a>
                  </div>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="card">
                  <div class="card-body">
                    <img class="rounded-circle" src="https://tse2.mm.bing.net/th?id=OIP.8-aROLy_dVVk7v6t9LcBcwHaHa&pid=Api&P=0&w=300&h=300" alt="Card image cap" width="140" height="140" >
                    <h5 class="card-title">Solo viajes por Argentina</h5>
                    <p class="card-text">Para favorecer la economía actual, nuestros paquetes solo incluyen viajes por territorio nacional.</p>
                    <a href="tienda.html" class="btn btn-primary">Ir a la tienda</a>
                  </div>
                </div>
              </div>
          </div>
            <h2>Paquetes agotados que a partir del 5/01 volverán a estar disponibles</h2>
          <div class="row">
            <div class="col-md-6">
              <h2 class="featurette-heading">Buenos Aires</h2>
              <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
            </div>
            <div class="col-md-6">
              <img class="featurette-image img-fluid mx-auto" src="https://quieroserlibre.com/wp-content/uploads/2019/10/Caminito-Buenos-Aires-Barrio-de-la-Boca-Argentina.jpg" data-holder-rendered="true">
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <h2>Salta<h2>
              <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
            </div>
            <div class="col-md-6">
              <img class="featurette-image img-fluid mx-auto" src="https://www.conclusion.com.ar/wp-content/uploads/2015/09/salta-sismo-editada.jpg" data-holder-rendered="true">
            </div>
          </div>
    </div>
@endsection