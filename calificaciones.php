<?php
   include("header.php");
?>
<div class="wrapper">
<!-- Barra headline y buscador -->
<div class="parairnos-page">
   <div class="container">
      <div class="row">
         <!-- Titulo de página -->
         <div class="col-md-8 col-sm-8 col-xs-12 hidden-xs hidden-sm">
            <h3>
               Califica tu experiencia
            </h3>
         </div>
         <!-- /Titulo de página -->
         <!-- Buscador -->
         <div class="col-md-4 col-sm-4 col-xs-12">
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
<!-- Contenedor admin -->
<div class="admin-section datos-section">
   <div class="container">
      <div class="row">
         <div class="col-md-6 col-sm-8 col-sm-offset-2 col-md-offset-3">
            <div class="card">
               <div class="content">
                  <div class="row">
                     <!-- Contenedor deja tu opinión -->
                     <div class="col-sm-12 col-md-12">
                        <h4>
                           Deja tu opinión para <a href="#" title=""><span style="text-primary">Pinamar Norte Golf</span></a>
                        </h4>
                        <div class="media media-post">
                           <form role="form">
                              <div class="form-group">
                                 <label>¿Qué te pareció?</label>
                                 <input id="input-id" type="number" class="rating" min=0 max=5 step=0.5 data-symbol="&#xf005;" data-glyphicon="false" data-rating-class="rating-fa" >
                              </div>
                              <div class="form-group">
                                 <input type="text" class="form-control" id="name" name="name" placeholder="Nombre" required>
                              </div>
                              <div class="form-group">
                                 <input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
                              </div>
                              <textarea class="form-control" placeholder="Comentario..."maxlength="140"  rows="6"></textarea>
                              <div class="media-footer">
                                 <a href="#" class="btn btn-info btn-round btn-fill btn-wd pull-right">Enviar comentario</a>   
                              </div>
                           </form>
                        </div>
                     </div>
                     <!-- Contenedor deja tu opinión -->
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- /Contenedor admin -->
<?php
include("footer.php");
?>
<!-- /Llamada Bootstrap Rating -->
<script>
   jQuery(document).ready(function () {
       // initialize with defaults
       $("#input-id").rating();
   
       // with plugin options
       $("#input-id").rating({'size':'lg'});
   });
</script>
<!-- /Llamada Bootstrap Rating -->