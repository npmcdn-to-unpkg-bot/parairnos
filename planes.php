<?php
include("header-admin.php");
?>
<div class="wrapper">
   <!-- Barra headline y buscador -->
   <div class="parairnos-page">
      <div class="container">
         <div class="row">
            <!-- Titulo de página -->
            <div class="col-md-8 col-sm-8 col-xs-12">
               <h3>
               Mi cuenta
               </h3>
            </div>
            <!-- /Titulo de página -->
            <!-- Buscador -->
            <div class="col-md-4 col-sm-4 col-xs-12 hidden-xs hidden-sm">
               <form method="GET" action="#" class="searchbar">
                  <input type="name" placeholder="Escribe tu destino..." name="query" class="form-control">
                  <a class="submit" href="javascript:;">
                     <i class="fa fa-search"></i>
                  </a>
               </form>
            </div>
            <!-- /Buscador -->
         </div>
      </div>
   </div>
   <!-- /Barra headline y buscador -->
   <!-- Menu top -->
   <div class="admin-menu">
      <div id="navbar">
         <nav class="navbar navbar-default" role="navigation">
            <div class="container">
               <div>
                  <ul class="nav navbar-nav">
                     <li><a href="admin.php">Mis publicaciones</a></li>
                     <li><a href="datos.php">Mis datos</a></li>
                     <li><a href="mensajes.php">Mis mensajes <span class="badge">3</span></a></li>
                     <li class="active"><a href="planes.php">Planes</a></li>
                  </ul>
               </div>
               <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
         </nav>
      </div>
      <!--  end navbar -->
   </div>
   <!-- /Menu top -->
   <!-- Contenedor admin -->
   <div class="admin-section">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="card">
                  <div class="content">
                     <!-- Tabs de navegación -->
                     <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#planesSimp" role="tab" data-toggle="tab">Nuestros planes</a></li>
                        <li role="presentation"><a href="#planesIn" role="tab" data-toggle="tab">Planes para inmobiliarias</a></li>
                     </ul>
                     <!-- /Tabs de navegación -->
                     <!-- Contenedor de planes -->
                     <div class="tab-content">
                        <!-- Planes simples -->
                        <div role="tabpanel" class="tab-pane fade in active" id="planesSimp">
                           <p>Si necesitás publicar más de 5 avisos, te recomendamos explorar nuestros planes para inmobiliarias.</p>
                           <div class="row form-group product-chooser">
                              <!-- Plan gratuito -->
                              <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                 <div class="product-chooser-item propiedad-gratis">
                                    <div class="card-price">
                                       <div class="content">
                                          <div class="center-block text-center gratis">
                                             <h2>Gratis</h2>
                                          </div>
                                          <br>
                                          <h4 class="text-default text-center">Destacado Simple</h4>
                                          <ul class="list-unstyled list-lines">
                                             <li>
                                                <i class="fa fa-check"></i> Podés publicar 3 fotos de tu alojamiento
                                             </li>
                                             <li>
                                                <i class="fa fa-times"></i> Tu publicación aparecerá abajo en los listados
                                             </li>
                                             <li>
                                                <i class="fa fa-times"></i> Menor exposición
                                             </li>
                                             <li>
                                                <i class="fa fa-times"></i> Menor cantidad de consultas
                                             </li>
                                          </ul>
                                          <br>
                                          <div class="btn btn-fill btn-md btn-default center-block btn-round">Elegir</div>
                                       </div>
                                    </div>
                                    <!-- end card -->
                                    <input type="radio" name="product" checked="checked">
                                    <div class="clear"></div>
                                 </div>
                              </div>
                              <!-- /Plan gratuito -->
                              <!-- Plan trimestral -->
                              <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                 <div class="product-chooser-item propiedad-destacada-trimestral selected">
                                    <div class="card-price">
                                       <div class="content">
                                          <div class="center-block text-center trimestral">
                                             <h2><small>US$</small>30</h2>
                                             <p><small>/trimestral</small></p>
                                          </div>
                                          <br>
                                          <h4 class="text-success text-center">Destacado Trimestral</h4>
                                          <ul class="list-unstyled list-lines">
                                             <li>
                                                <i class="fa fa-check"></i> Podés publicar hasta 15 fotos de tu alojamiento
                                             </li>
                                             <li>
                                                <i class="fa fa-check"></i> Tu publicación aparecerá arriba en los listados
                                             </li>
                                             <li>
                                                <i class="fa fa-check"></i> Mayor exposición
                                             </li>
                                             <li>
                                                <i class="fa fa-check"></i> Mayor cantidad de consultas
                                             </li>
                                          </ul>
                                          <br>
                                          <div class="btn btn-fill btn-md btn-success center-block btn-round">Elegir</div>
                                       </div>
                                    </div>
                                    <!-- end card -->
                                    <input type="radio" name="product">
                                    <div class="clear"></div>
                                 </div>
                              </div>
                              <!-- /Plan trimestral -->
                              <!-- Plan anual -->
                              <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                 <div class="product-chooser-item propiedad-destacada-anual">
                                    <div class="card-price">
                                       <div class="content">
                                          <div class="center-block text-center anual">
                                             <h2><small>US$</small>60</h2>
                                             <p><small>/anual</small></p>
                                          </div>
                                          <br>
                                          <h4 class="text-primary text-center">Destacado Anual</h4>
                                          <span class="center-block btn-round text-center label label-primary label-md">¡Ahorras un 50%!</span>
                                          <ul class="list-unstyled list-lines">
                                             <li>
                                                <i class="fa fa-check"></i> Podés publicar hasta 15 fotos de tu alojamiento
                                             </li>
                                             <li>
                                                <i class="fa fa-check"></i> Tu publicación aparecerá arriba en los listados
                                             </li>
                                             <li>
                                                <i class="fa fa-check"></i> Mayor exposición
                                             </li>
                                             <li>
                                                <i class="fa fa-check"></i> Mayor cantidad de consultas
                                             </li>
                                          </ul>
                                          <br>
                                          <div class="btn btn-fill btn-md btn-primary center-block btn-round">Elegir</div>
                                       </div>
                                    </div>
                                    <!-- end card -->
                                    <input type="radio" name="product">
                                    <div class="clear"></div>
                                 </div>
                              </div>
                              <!-- /Plan anual -->
                           </div>
                        </div>
                        <!-- Planes simples -->
                        <!-- Planes para inmobiliarias -->
                        <div role="tabpanel" class="tab-pane fade" id="planesIn">
                           <p>Si necesitás publicar más de 5 avisos, te recomendamos explorar nuestros planes para inmobiliarias.</p>
                           <div class="row form-group product-chooser">
                              <!-- Plan 10+1 -->
                              <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                                 <div class="product-chooser-item propiedad-gratis">
                                    <div class="card-price">
                                       <div class="content">
                                          <h4 class="text-default text-center">Plan 10 + 1</h4>
                                          <p class="text-center">Publique hasta 10 Avisos Simples y 1 Destacado.</p>
                                          <br>
                                          <div class="btn btn-fill btn-md btn-default center-block btn-round">Elegir</div>
                                       </div>
                                    </div>
                                    <!-- end card -->
                                    <input type="radio" name="product" checked="checked">
                                    <div class="clear"></div>
                                 </div>
                              </div>
                              <!-- /Plan 10+1 -->
                              <!-- Plan 25+3 -->
                              <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                                 <div class="product-chooser-item propiedad-destacada-trimestral selected">
                                    <div class="card-price">
                                       <div class="content">
                                          <h4 class="text-success text-center">Plan 25 + 3</h4>
                                          <p class="text-center">
                                             Publique hasta 25 Avisos Simples y 3 Avisos Destacados.
                                          </p>
                                          <br>
                                          <div class="btn btn-fill btn-md btn-success center-block btn-round">Elegir</div>
                                       </div>
                                    </div>
                                    <!-- end card -->
                                    <input type="radio" name="product">
                                    <div class="clear"></div>
                                 </div>
                              </div>
                              <!-- /Plan 25+3 -->
                              <!-- Plan 50+5 -->
                              <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                                 <div class="product-chooser-item propiedad-destacada-anual">
                                    <div class="card-price">
                                       <div class="content">
                                          <h4 class="text-warning text-center">Plan 50 + 5</h4>
                                          <p class="text-center">Publique 50 avisos simples y 5 destacados. </p>
                                          <br>
                                          <div class="btn btn-fill btn-md btn-warning center-block btn-round">Elegir</div>
                                       </div>
                                    </div>
                                    <!-- end card -->
                                    <input type="radio" name="product">
                                    <div class="clear"></div>
                                 </div>
                              </div>
                              <!-- /Plan 50+5 -->
                              <!-- Plan ilimitado -->
                              <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                                 <div class="product-chooser-item propiedad-destacada-anual">
                                    <div class="card-price">
                                       <div class="content">
                                          <h4 class="text-primary text-center">Plan ilimitado + 10</h4>
                                          <p class="text-center">Publique avisos simples ilimitados y 10 destacado. </p>
                                          <br>
                                          <div class="btn btn-fill btn-md btn-primary center-block btn-round">Elegir</div>
                                       </div>
                                    </div>
                                    <!-- end card -->
                                    <input type="radio" name="product">
                                    <div class="clear"></div>
                                 </div>
                              </div>
                              <!-- /Plan ilimitado -->
                           </div>
                        </div>
                        <!-- Planes para inmobiliarias -->
                     </div>
                     <!-- /Contenedor de planes -->
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- /Contenedor admin -->
</div>
<?php
include("footer.php");
?>
<!-- Activando Tabs -->
<script>
$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
e.target // newly activated tab
e.relatedTarget // previous active tab
})
</script>
<!-- /Activando Tabs -->