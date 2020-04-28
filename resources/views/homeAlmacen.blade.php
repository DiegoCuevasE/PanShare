@extends('layouts.nav')

@section('content')

<div class="container my-5">

    <!-- Section: Block Content -->
    <section>
  
      <h3 class="font-weight-bold text-center dark-grey-text mb-5">¿Que deseas comprar hoy?</h3>
  
      <!-- Grid row -->
      <div class="row">
        <!-- Grid column -->
        <div class="col-lg-3 col-md-6  mb-4">
          <!-- Card -->
          <div class="card card-ecommerce">
            <!-- Card image -->
            <div class="view overlay">
              <img src="https://sanopan.cl/wp-content/uploads/2018/07/mini_marraqueta.png" class="img-fluid"
                alt="">
              <a>
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>
            <!-- Card image -->
            <!-- Card content -->
            <div class="card-body">
              <!-- Category & Title -->
              <h5 class="card-title mb-1">
                <strong>
                  <a href="" class="dark-grey-text">Marraqueta</a>
                </strong>
              </h5>
              <h3 class="card-text">
                  <p>Cantidad disponible <span class="text-success"><strong>5kg</strong></span> </p>
              </h3>
              <span class="badge badge-danger mb-2">Más vendido</span>
              <!-- Card footer -->
              <div class="card-footer px-1" style="background-color: rgba(0, 0, 0, 0); padding-bottom: 0rem">
                <span class="font-weight-bold">
                  <strong>$1.100</strong>
                </span>
                <span class="float-right">
                  <a class="material-tooltip-main" data-toggle="modal" data-target="#centralModalInfo" data-placement="top" title="Agregar al carro">
                    <i class="fas fa-shopping-cart grey-text ml-3"></i>
                  </a>
                  <a class="material-tooltip-main" data-toggle="tooltip" data-placement="top" title="Agregar a la lista de deseos">
                    <i class="fas fa-heart grey-text ml-3"></i>
                  </a>
                </span>
                <div class="md-form md-outline" style="margin-top: 1rem;margin-bottom: 0rem;">
                    <label for="cant">Cantidad</label>
                    <input type="number" aria-label="Search" class="form-control" name="cant" id="cant">
                </div>
              </div>
            </div>
            <!-- Card content -->
          </div>
          <!-- Card -->
        </div>
         
          <!-- Central Modal Medium Info -->
          <div class="modal fade" id="centralModalInfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-notify modal-success" role="document">
              <!--Content-->
              <div class="modal-content">
                <!--Header-->
                <div class="modal-header" style="padding-bottom: 0.5rem; padding-top: 0.5rem">
                  <p class="heading lead">Producto agregado correctamente</p>
         
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="white-text">&times;</span>
                  </button>
                </div>
         
                <!--Body-->
                <div class="modal-body">
                  <div class="text-center">
                    <i class="fas fa-check fa-4x mb-3 animated rotateIn"></i>
                    <p class="card-text">¿Que deseas hacer?</p>
                  </div>
                </div>
         
                <!--Footer-->
                <div class="modal-footer justify-content-center">
                  <a type="button" class="btn btn-success">Ir al carrito</a>
                  <a type="button" class="btn btn-outline-success waves-effect" data-dismiss="modal">Seguir comprando</a>
                </div>
              </div>
              <!--/.Content-->
            </div>
          </div>
          <!-- Central Modal Medium Info-->

          
        <!-- Grid column -->
      <!-- Grid row -->
    </div>
    </section>
    <!-- Section: Block Content -->
  
</div>
@endsection
