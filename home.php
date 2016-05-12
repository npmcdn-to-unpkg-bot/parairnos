<?php
include("header.php");
?>
<div class="wrapper home">
   <!-- Buscador -->
   <div class="parallax">
      <div class="motto">
         <h3>¿A dónde quieres ir?
         <small>Busca en +5,000 propiedades</small>
         </h3>
         <form role="search">
            <div class="form-group calendar">
               <div class="input-group">
                  <input type="text" class="form-control parairnosSearch" placeholder="Escribe tu destino...">
                  <!-- Calendario desde -->
                  <span class="dpd1 has-feedback input-group-addon hidden-sm hidden-xs">
                     <input id="dpd1" type="text" class="datepicker blue form-control SearchDesde" placeholder="Llegada">
                     <i class="icon-calendar-search form-control-feedback"></i>
                  </span>
                  <!-- /Calendario desde -->
                  <!-- Calendario hasta -->
                  <span class="dpd2 input-group-addon hidden-sm hidden-xs has-feedback">
                     <div class="left-inner-addon ">
                        <input id="dpd2" type="text" class="datepicker blue form-control SearchHasta" placeholder="Salida">
                        <i class="icon-calendar-search form-control-feedback"></i>
                     </div>
                  </span>
                  <!-- /Calendario hasta-->
                  <!-- Selector de personas -->
                  <div class="input-group-btn hidden-sm hidden-xs personasSelect">
                     <div class="form-group">
                       <select data-width="120px" title="Personas" class="form-control selectpicker" id="personas">
                         <option data-hidden="true">Personas</option>
                         <option value="1" >1 persona</option>
                         <option value="2" >2 personas</option>
                         <option value="3" >3 personas</option>
                         <option value="4" >4 personas</option>
                         <option value="5" >4 personas</option>
                         <option value="6" >5 personas</option>
                         <option value="7" >6 personas</option>
                       </select>
                     </div>
                  </div>
                  <!-- /Selector de personas --> 
                  <span class="input-group-btn">
                     <button class="btn btn-fill btn-primary" type="button"><span class="fa fa-search"></span> <span class="hidden-xs hidden-sm">Buscar</span></button>
                  </span>
               </div>
            </div>
         </form>
      </div>
   </div>
   <!-- Buscador -->
   <!-- Inicia contenedor -->
   <div class="section mainSection">
      <div class="container">
         <!-- Avisos destacados -->
         <div class="row avisos-destacados">
            <div class="col-md-12">
               <div class="tim-title text-center">
                  <h2 class="section-title">Avisos destacados <small> (<a href="resultados.php">Ver todos los avisos</a>)</small></h2>
                  <div class="seperator"></div>
               </div>
            </div>
            <!-- Aviso -->
            <div class="col-md-6 col-sm-6">
               <div class="card card-horizontal">
                  <div class="row">
                     <div class="col-md-5">
                        <div class="image">
                           <img src="assets/img/hotel2/shot.jpg" alt="..."/>
                        </div>
                        <span class="destacado-ad">
                           <span class="label label-warning label-fill">Destacado</span>
                        </span>
                     </div>
                     <div class="col-md-7">
                        <div class="content">
                           <a class="card-link ellipsis" href="detalle.php">
                              <h4 class="title text-info">Departamento Euromarina 3 dormtorios 2 camas matrimonial equipado para 6 $ 90.000 por nocheArriendo departamento Termas de Chillán </h4>
                           </a>
                           <p class="category text-left">
                              <i class="fa fa-star text-warning"></i>
                              <i class="fa fa-star text-warning"></i>
                              <i class="fa fa-star-o"></i>
                              <i class="fa fa-star-o"></i>
                              <i class="fa fa-star-o"></i>
                              <span class="review-total">(25)</span>
                           </p>
                           <a class="card-link" href="detalle.php">
                              <p class="description">La Querencia de Algarrobo / Cabañas para 2</p>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- termina tarjeta -->
            </div>
            <!-- /Aviso -->
            <!-- Aviso -->
            <div class="col-md-6 col-sm-6">
               <div class="card card-horizontal">
                  <div class="row">
                     <div class="col-md-5">
                        <div class="image">
                           <img src="assets/img/hotel1/shot.jpg" alt="..."/>
                        </div>
                        <span class="destacado-ad">
                           <span class="label label-warning label-fill">Destacado</span>
                        </span>
                     </div>
                     <div class="col-md-7">
                        <div class="content">
                           <a class="card-link" href="detalle.php">
                              <h4 class="title text-info">Arriendo departamento Termas de Chillán </h4>
                           </a>
                           <p class="category text-left">
                              <i class="fa fa-star text-warning"></i>
                              <i class="fa fa-star text-warning"></i>
                              <i class="fa fa-star text-warning"></i>
                              <i class="fa fa-star text-warning"></i>
                              <i class="fa fa-star-o"></i>
                              <span class="review-total">(15)</span>
                           </p>
                           <a class="card-link" href="detalle.php">
                              <p class="description">Departamento para 6 personas en Chillán, Chillán, Región del Bío Bío, Chile</p>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- termina tarjeta -->
            </div>
            <!-- /Aviso -->
            <div class="col-md-6 col-sm-6">
               <div class="card card-horizontal">
                  <div class="row">
                     <div class="col-md-5">
                        <div class="image">
                           <img src="assets/img/hotel3/shot.jpg" alt="..."/>
                        </div>
                        <span class="destacado-ad">
                           <span class="label label-warning label-fill">Destacado</span>
                        </span>
                     </div>
                     <div class="col-md-7">
                        <div class="content">
                           <a class="card-link" href="detalle.php">
                              <h4 class="title text-info">Arriendo departamento Termas de Chillán </h4>
                           </a>
                           <p class="category text-left">
                              <i class="fa fa-star text-warning"></i>
                              <i class="fa fa-star text-warning"></i>
                              <i class="fa fa-star text-warning"></i>
                              <i class="fa fa-star text-warning"></i>
                              <i class="fa fa-star-o"></i>
                              <span class="review-total">(2)</span>
                           </p>
                           <a class="card-link" href="detalle.php">
                              <p class="description">Departamento para 6 personas en Chillán, Chillán, Región del Bío Bío, Chile</p>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- termina tarjeta -->
            </div>
            <!-- Aviso -->
            <div class="col-md-6 col-sm-6">
               <div class="card card-horizontal">
                  <div class="row">
                     <div class="col-md-5">
                        <div class="image">
                           <img src="assets/img/hotel4/shot.jpg" alt="..."/>
                        </div>
                        <span class="destacado-ad">
                           <span class="label label-warning label-fill">Destacado</span>
                        </span>
                     </div>
                     <div class="col-md-7">
                        <div class="content">
                           <a class="card-link" href="detalle.php">
                              <h4 class="title text-info">Arriendo departamento Termas de Chillán </h4>
                           </a>
                           <p class="category text-left">
                              <i class="fa fa-star text-warning"></i>
                              <i class="fa fa-star text-warning"></i>
                              <i class="fa fa-star text-warning"></i>
                              <i class="fa fa-star text-warning"></i>
                              <i class="fa fa-star-o"></i>
                              <span class="review-total">(17)</span>
                           </p>
                           <a class="card-link" href="detalle.php">
                              <p class="description">Departamento para 6 personas en Chillán, Chillán, Región del Bío Bío, Chile</p>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- termina tarjeta -->
            </div>
            <!-- /Aviso -->
         </div>
         <br>
         <div class="row avisos-destacados">
            <div class="col-md-12">
                      <div id="Carousel" class="carousel slide">
                       
                      <ol class="carousel-indicators">
                          <li data-target="#Carousel" data-slide-to="0" class="active"></li>
                          <li data-target="#Carousel" data-slide-to="1"></li>
                      </ol>
                       
                      <!-- Carousel items -->
                      <div class="carousel-inner">
                          
                      <div class="item active">
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <div class="card">
                                    <div class="image" style="max-height: 180px; background-image: url(assets/img/hotel2/6.jpg); background-position: center center; background-size: cover;"><img alt="..." src="assets/img/hotel2/6.jpg" style="display: none;">
                                    </div>
                                    <span class="destacado-ad">
                                       <span class="label label-warning label-fill">Destacado</span>
                                    </span>
                                    <div class="content">
                                        <a class="card-link" href="detalle.php">
                                            <h4 class="title text-info">Arriendo departamento Termas de Chillán </h4>
                                        </a>
                                        <p class="category text-left">
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star-o "></i>
                                            <span class="review-total">(12)</span>
                                        </p>
                                        <a class="card-link" href="detalle.php">
                                            <p class="description">Departamento para 6 personas en Chillán, Chillán, Región del Bío Bío, Chile</p>
                                        </a>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <!-- termina tarjeta -->
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="card">
                                    <div class="image" style="max-height: 180px; background-image: url(assets/img/hotel2/2.jpg); background-position: center center; background-size: cover;"><img alt="..." src="assets/img/hotel2/2.jpg" style="display: none;">
                                    </div>
                                    <span class="destacado-ad">
                                       <span class="label label-warning label-fill">Destacado</span>
                                    </span>
                                    <div class="content">
                                        <a class="card-link" href="detalle.php">
                                            <h4 class="title text-info">Arriendo departamento Termas de Chillán </h4>
                                        </a>
                                        <p class="category text-left">
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star-o "></i>
                                            <span class="review-total">(12)</span>
                                        </p>
                                        <a class="card-link" href="detalle.php">
                                            <p class="description">Departamento para 6 personas en Chillán, Chillán, Región del Bío Bío, Chile</p>
                                        </a>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <!-- termina tarjeta -->
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="card">
                                    <div class="image" style="max-height: 180px; background-image: url(assets/img/hotel2/3.jpg); background-position: center center; background-size: cover;"><img alt="..." src="assets/img/hotel2/3.jpg" style="display: none;">
                                    </div>
                                    <span class="destacado-ad">
                                       <span class="label label-warning label-fill">Destacado</span>
                                    </span>
                                    <div class="content">
                                        <a class="card-link" href="detalle.php">
                                            <h4 class="title text-info">Arriendo departamento Termas de Chillán </h4>
                                        </a>
                                        <p class="category text-left">
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star-o "></i>
                                            <span class="review-total">(12)</span>
                                        </p>
                                        <a class="card-link" href="detalle.php">
                                            <p class="description">Departamento para 6 personas en Chillán, Chillán, Región del Bío Bío, Chile</p>
                                        </a>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <!-- termina tarjeta -->
                            </div>
                        </div><!--.row-->
                      </div><!--.item-->
                       
                      <div class="item">
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <div class="card">
                                    <div class="image" style="max-height: 180px; background-image: url(assets/img/hotel2/4.jpg); background-position: center center; background-size: cover;"><img alt="..." src="assets/img/hotel2/4.jpg" style="display: none;">
                                    </div>
                                    <span class="destacado-ad">
                                       <span class="label label-warning label-fill">Destacado</span>
                                    </span>
                                    <div class="content">
                                        <a class="card-link" href="detalle.php">
                                            <h4 class="title text-info">Arriendo departamento Termas de Chillán </h4>
                                        </a>
                                        <p class="category text-left">
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star-o "></i>
                                            <span class="review-total">(12)</span>
                                        </p>
                                        <a class="card-link" href="detalle.php">
                                            <p class="description">Departamento para 6 personas en Chillán, Chillán, Región del Bío Bío, Chile</p>
                                        </a>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <!-- termina tarjeta -->
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="card">
                                    <div class="image" style="max-height: 180px; background-image: url(assets/img/hotel2/5.jpg); background-position: center center; background-size: cover;"><img alt="..." src="assets/img/hotel2/5.jpg" style="display: none;">
                                    </div>
                                    <span class="destacado-ad">
                                       <span class="label label-warning label-fill">Destacado</span>
                                    </span>
                                    <div class="content">
                                        <a class="card-link" href="detalle.php">
                                            <h4 class="title text-info">Arriendo departamento Termas de Chillán </h4>
                                        </a>
                                        <p class="category text-left">
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star-o "></i>
                                            <span class="review-total">(12)</span>
                                        </p>
                                        <a class="card-link" href="detalle.php">
                                            <p class="description">Departamento para 6 personas en Chillán, Chillán, Región del Bío Bío, Chile</p>
                                        </a>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <!-- termina tarjeta -->
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="card">
                                    <div class="image" style="max-height: 180px; background-image: url(assets/img/hotel2/1.jpg); background-position: center center; background-size: cover;"><img alt="..." src="assets/img/hotel2/1.jpg" style="display: none;">
                                    </div>
                                    <span class="destacado-ad">
                                       <span class="label label-warning label-fill">Destacado</span>
                                    </span>
                                    <div class="content">
                                        <a class="card-link" href="detalle.php">
                                            <h4 class="title text-info">Arriendo departamento Termas de Chillán </h4>
                                        </a>
                                        <p class="category text-left">
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star-o "></i>
                                            <span class="review-total">(12)</span>
                                        </p>
                                        <a class="card-link" href="detalle.php">
                                            <p class="description">Departamento para 6 personas en Chillán, Chillán, Región del Bío Bío, Chile</p>
                                        </a>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <!-- termina tarjeta -->
                            </div>
                        </div><!--.row-->
                      </div><!--.item-->
                       
                      </div><!--.carousel-inner-->
                        <a data-slide="prev" href="#Carousel" class="left carousel-control"> <i class="fa fa-chevron-left"></i></a>
                        <a data-slide="next" href="#Carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
                      </div><!--.Carousel-->
                       
            </div>
         </div>
         <!-- Avisos destacados -->
         <!-- Destinos populares -->
         <div class="row destinos-populares">
            <div class="col-md-12">
               <div class="tim-title text-center">
                  <h2 class="section-title">Destinos populares en Chile <small>(<a href="resultados.php">Ver todos los destinos</a>)</small></h2>
                  <div class="seperator"></div>
               </div>
               <div class="row">
                  <!-- Destino -->
                  <div class="col-md-4 col-sm-4">
                     <div class="card card-background">
                        <div class="image zoom-over">
                           <img src="assets/img/chile/santiago.jpg"/>
                           <div class="filter"></div>
                        </div>
                        <div class="content">
                           <a href="resultados.php">
                              <br>
                              <h2 class="title">Santiago</h2>
                           </a>
                        </div>
                        <div class="footer">
                           <ul class="list-inline">
                              <li><a href="#">Santiago de Chile</a></li>
                              <li><a href="#">Cajón del Maipo</a></li>
                              <li><a href="#">Calera de Tango</a></li>
                              <li><a href="#">Pirque</a></li>
                           </ul>
                        </div>
                     </div>
                     <!-- termina tarjeta -->
                  </div>
                  <!-- /Destino -->
                  <!-- Destino -->
                  <div class="col-md-4 col-sm-4">
                     <div class="card card-background">
                        <div class="image zoom-over">
                           <img src="assets/img/chile/patagonia.jpg"/>
                           <div class="filter"></div>
                        </div>
                        <div class="content">
                           <a href="#">
                              <br>
                              <h2 class="title">Patagonia Islas</h2>
                           </a>
                        </div>
                        <div class="footer">
                           <ul class="list-inline">
                              <li><a href="#">Puerto Natales</a></li>
                              <li><a href="#">Punta Arenas</a></li>
                              <li><a href="#">Chaitén</a></li>
                              <li><a href="#">Isla de Pascua</a></li>
                              <li><a href="#">Isla Grande de Chiloé</a></li>
                              <li><a href="#">Isla Mocha</a></li>
                           </ul>
                        </div>
                     </div>
                     <!-- termina tarjeta -->
                  </div>
                  <!-- /Destino -->
                  <div class="col-md-4 col-sm-4">
                     <div class="card card-background">
                        <div class="image zoom-over">
                           <img src="assets/img/chile/litoral.jpg"/>
                           <div class="filter"></div>
                        </div>
                        <div class="content">
                           <a href="#">
                              <br>
                              <h2 class="title">Litoral Central</h2>
                           </a>
                        </div>
                        <div class="footer">
                           <ul class="list-inline">
                              <li><a href="#">Valparaiso</a></li>
                              <li><a href="#">Viña del Mar</a></li>
                              <li><a href="#">Valle de Aconcagua</a></li>
                              <li><a href="#">Algarrobo</a></li>
                              <li><a href="#">San Antonio</a></li>
                           </ul>
                        </div>
                     </div>
                     <!-- termina tarjeta -->
                  </div>
                  <!-- Destino -->
                  <div class="col-md-4 col-sm-4">
                     <div class="card card-background">
                        <div class="image zoom-over">
                           <img src="assets/img/chile/norte.jpg"/>
                           <div class="filter"></div>
                        </div>
                        <div class="content">
                           <a href="#">
                              <br>
                              <h2 class="title">Norte</h2>
                           </a>
                        </div>
                        <div class="footer">
                           <ul class="list-inline">
                              <li><a href="#">Arica</a></li>
                              <li><a href="#">Iquique</a></li>
                              <li><a href="#">Calama</a></li>
                              <li><a href="#">Antofagasta</a></li>
                              <li><a href="#">Copiapó</a></li>
                              <li><a href="#">Vallenar</a></li>
                              <li><a href="#">La Serena</a></li>
                              <li><a href="#">Coquimbo</a></li>
                           </ul>
                        </div>
                     </div>
                     <!-- termina tarjeta -->
                  </div>
                  <!-- /Destino -->
                  <div class="col-md-4 col-sm-4">
                     <div class="card card-background">
                        <div class="image zoom-over">
                           <img src="assets/img/chile/sur.jpg"/>
                           <div class="filter"></div>
                        </div>
                        <div class="content">
                           <a href="#">
                              <br>
                              <h2 class="title">Sur</h2>
                           </a>
                        </div>
                        <div class="footer">
                           <ul class="list-inline">
                              <li><a href="#">Rancagua</a></li>
                              <li><a href="#">Curicó</a></li>
                              <li><a href="#">Talca</a></li>
                              <li><a href="#">Chillán</a></li>
                              <li><a href="#">Concepción</a></li>
                              <li><a href="#">Punta Arenas</a></li>
                           </ul>
                        </div>
                     </div>
                     <!-- termina tarjeta -->
                  </div>
                  <!-- Destino -->
                  <div class="col-md-4 col-sm-4">
                     <div class="card card-background">
                        <div class="image zoom-over">
                           <img src="assets/img/chile/araucania.jpg"/>
                           <div class="filter"></div>
                        </div>
                        <div class="content">
                           <a href="#">
                              <br>
                              <h2 class="title">Araucanía</h2>
                           </a>
                        </div>
                        <div class="footer">
                           <ul class="list-inline">
                              <li><a href="#">Angol</a></li>
                              <li><a href="#">Victoria</a></li>
                              <li><a href="#">Temuco</a></li>
                              <li><a href="#">Pucón</a></li>
                              <li><a href="#">Villa Rica</a></li>
                              <li><a href="#">Vallenar</a></li>
                              <li><a href="#">La Serena</a></li>
                              <li><a href="#">Coquimbo</a></li>
                           </ul>
                        </div>
                     </div>
                     <!-- termina tarjeta -->
                  </div>
                  <!-- /Destino -->
               </div>
            </div>
         </div>
         <!-- /Destinos populares -->
      </div>
      <div class="space"></div>
   </div>
   <!-- /Termina contenedor -->
<style> 
.carousel {
    margin-bottom: 20px;

}
/* The controlsy */
.carousel-control {
   left: -102px;
}
.carousel-control.right {
   right: -82px;
}
/* The indicators */
.carousel-indicators {
   margin-top: 30px; 
   right: 50%;
   top: auto;
   bottom: -30px;
   margin-right: -19px;
}
/* The colour of the indicators */
.carousel-indicators li {
   background: #cecece;
}
.carousel-indicators .active {
background: #428bca;
}
</style>
<?php
include("footer.php");
?>

<script type="text/javascript">
   $(document).ready(function() {
       $('#Carousel').carousel({
           interval: 5000
       })
   });
</script>