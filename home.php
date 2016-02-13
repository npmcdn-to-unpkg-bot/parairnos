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
                  <div class="input-group-btn hidden-sm hidden-xs">
                     <button type="button" class="btn btn-personas" data-toggle="dropdown" tabindex="-1">
                     <span data-bind="bs-drp-sel-label">Personas</span>
                     <input type="hidden" name="country_path" data-bind="bs-drp-sel-value" value="us">
                     <span class="caret"></span>
                     </button>
                     <ul class="dropdown-menu" role="menu">
                        <!-- Loop -->
                        <li><a href="#">1 persona</a></li>
                        <li><a href="#">2 personas</a></li>
                        <li><a href="#">3 personas</a></li>
                        <li><a href="#">4 personas</a></li>
                        <li><a href="#">5 personas</a></li>
                        <li><a href="#">6 personas</a></li>
                        <li><a href="#">7 personas</a></li>
                        <li><a href="#">8 personas</a></li>
                        <li><a href="#">9 personas</a></li>
                        <li><a href="#">10 personas</a></li>
                        <!-- END Loop -->
                     </ul>
                  </div>
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
                           <img src="https://placeholdit.imgix.net/~text?txtsize=34&txt=250x200&w=250&h=200" alt="..."/>
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
                           <img src="https://placeholdit.imgix.net/~text?txtsize=34&txt=250x200&w=250&h=200" alt="..."/>
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
                           <img src="https://placeholdit.imgix.net/~text?txtsize=34&txt=250x200&w=250&h=200" alt="..."/>
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
                           <img src="https://placeholdit.imgix.net/~text?txtsize=34&txt=250x200&w=250&h=200" alt="..."/>
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
                           <img src="https://placeholdit.imgix.net/~text?txtsize=33&txt=400x400&w=400&h=400"/>
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
                           <img src="https://placeholdit.imgix.net/~text?txtsize=33&txt=400x400&w=400&h=400"/>
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
                           <img src="https://placeholdit.imgix.net/~text?txtsize=33&txt=400x400&w=400&h=400"/>
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
                           <img src="https://placeholdit.imgix.net/~text?txtsize=33&txt=400x400&w=400&h=400"/>
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
                           <img src="https://placeholdit.imgix.net/~text?txtsize=33&txt=400x400&w=400&h=400"/>
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
                           <img src="https://placeholdit.imgix.net/~text?txtsize=33&txt=400x400&w=400&h=400"/>
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
<?php
include("footer.php");
?>