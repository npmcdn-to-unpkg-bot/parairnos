<!-- Sidebar Filtros -->
<div class="card card-refine">
   <!-- Cabezal -->
   <div class="header">
      <h4 class="title">Filtrar por 
         <a href="resultados.php" class="btn btn-default btn-xs btn pull-right btn-simple" rel="tooltip" title="Limpiar filtros">
         <i class="fa fa-refresh"></i>
         </a>
      </h4>
   </div>
   <!-- /Cabezal -->
   <div class="content">
      <div class="panel-group" id="accordion">
         <!-- Rango de precio -->
         <div class="panel panel-default">
            <div class="panel-heading">
               <h6 class="panel-title">
                  <a data-toggle="collapse" href="#refinePrice">
                  Rango de precio
                  <i class="fa fa-caret-up pull-right"></i>
                  </a>
               </h6>
            </div>
            <div id="refinePrice" class="panel-collapse collapse in">
               <div class="panel-body">
                  <div class="center-block">
                     <ul class="nav nav-pills filtrosDSQM">
                        <li class="active" ><a href="#">Día</a></li>
                        <li><a href="#">Semana</a></li>
                        <li><a href="#">Quincena</a></li>
                        <li><a href="#">Mes</a></li>
                     </ul>
                  </div>
               </div>
               <div class="panel-body">
                  <a href="resultados.php" class="checkbox">
                  <input checked type="checkbox" value="" data-toggle="checkbox">
                  Entre $ 0 y $ 300 <span class="badge pull-right">1465</span>
                  </a>
                  <a href="resultados.php" class="checkbox">
                  <input checked onclick='window.location.assign("resultados.php")' type="checkbox" value="" data-toggle="checkbox">
                  Entre $ 300 y $ 600 <span class="badge pull-right">645</span>
                  </a>
                  <a href="resultados.php" class="checkbox">
                  <input onclick='window.location.assign("resultados.php")' type="checkbox" value="" data-toggle="checkbox">
                  Entre $ 600 y $ 1.000  <span class="badge pull-right">113</span>
                  </a>
                  <a href="resultados.php" class="checkbox">
                  <input type="checkbox" value="" data-toggle="checkbox">
                  Más de $ 1.000 <span class="badge pull-right">838</span>
                  </a>
               </div>
            </div>
         </div>
         <!-- /Rango de precio -->
         <!-- Tipo de propiedad -->
         <div class="panel panel-default">
            <div class="panel-heading">
               <h6 class="panel-title">
                  <a data-toggle="collapse" href="#TipoDePropiedad" class="collapsed">
                  Tipo de propiedad
                  <i class="fa fa-caret-up pull-right"></i>
                  </a>
               </h6>
            </div>
            <div id="TipoDePropiedad" class="panel-collapse collapse">
               <div class="panel-body">
                  <a href="resultados.php" class="checkbox">
                  <input type="checkbox" value="" data-toggle="checkbox">
                  Casa en arriendo <span class="badge pull-right">14</span>
                  </a>
                  <a href="resultados.php" class="checkbox">
                  <input type="checkbox" value="" data-toggle="checkbox">
                  Departamento en arriendo <span class="badge pull-right">6</span>
                  </a>
                  <a href="resultados.php" class="checkbox">
                  <input type="checkbox" value="" data-toggle="checkbox">
                  Hosteria <span class="badge pull-right">11</span>
                  </a>
                  <a href="resultados.php" class="checkbox">
                  <input type="checkbox" value="" data-toggle="checkbox">
                  Hotel <span class="badge pull-right">8</span>
                  </a>  
               </div>
            </div>
         </div>
         <!-- Tipo de propiedad -->
         <!-- Características -->
         <div class="panel panel-default">
            <div class="panel-heading">
               <h6 class="panel-title">
                  <a data-toggle="collapse" href="#caracteristicas">
                  Características
                  <i class="fa fa-caret-up pull-right"></i>
                  </a>
               </h6>
            </div>
            <div id="caracteristicas" class="panel-collapse collapse in">
               <div class="panel-body">
                  <a href="resultados.php" class="checkbox">
                  <input type="checkbox" value="" data-toggle="checkbox">
                  Aire acondicionado <span class="badge pull-right">14</span>
                  </a>
                  <a href="resultados.php" class="checkbox">
                  <input type="checkbox" value="" data-toggle="checkbox">
                  Calefacción <span class="badge pull-right">68</span>
                  </a>
                  <a href="resultados.php" class="checkbox">
                  <input type="checkbox" value="" data-toggle="checkbox">
                  Dvd <span class="badge pull-right">6</span>
                  </a>
                  <a href="resultados.php" class="checkbox">
                  <input type="checkbox" value="" data-toggle="checkbox">
                  Garage <span class="badge pull-right">19</span>
                  </a>
                  <a href="resultados.php" class="checkbox">
                  <input type="checkbox" value="" data-toggle="checkbox">
                  Jardín <span class="badge pull-right">17</span>
                  </a>
                  <a href="resultados.php" class="checkbox">
                  <input type="checkbox" value="" data-toggle="checkbox">
                  Parrilla <span class="badge pull-right">32</span>
                  </a>
                  <a href="resultados.php" class="checkbox">
                  <input type="checkbox" value="" data-toggle="checkbox">
                  Pileta <span class="badge pull-right">54</span>
                  </a>
                  <a href="resultados.php" class="checkbox">
                  <input type="checkbox" value="" data-toggle="checkbox">
                  Televisión <span class="badge pull-right">112</span>
                  </a>
                  <a href="resultados.php" class="checkbox">
                  <input type="checkbox" value="" data-toggle="checkbox">
                  Wifi <span class="badge pull-right">76</span>
                  </a>
               </div>
            </div>
         </div>
         <!-- Características -->
         <!-- Cantidad de personas -->
         <div class="panel panel-default">
            <div class="panel-heading">
               <h6 class="panel-title">
                  <a data-toggle="collapse" href="#CantidadDePersonas" class="collapsed">
                  Cantidad de personas
                  <i class="fa fa-caret-up pull-right"></i>
                  </a>
               </h6>
            </div>
            <div id="CantidadDePersonas" class="panel-collapse collapse">
               <div class="panel-body">
                  <a href="resultados.php" class="checkbox">
                  <input type="checkbox" value="" data-toggle="checkbox">
                  1 persona <span class="badge pull-right">23</span>
                  </a>
                  <a href="resultados.php" class="checkbox">
                  <input type="checkbox" value="" data-toggle="checkbox">
                  2 personas <span class="badge pull-right">11</span>
                  </a>
                  <a href="resultados.php" class="checkbox">
                  <input type="checkbox" value="" data-toggle="checkbox">
                  3 personas <span class="badge pull-right">17</span>
                  </a>
                  <a href="resultados.php" class="checkbox">
                  <input type="checkbox" value="" data-toggle="checkbox">
                  4 personas <span class="badge pull-right">54</span>
                  </a>
                  <a href="resultados.php" class="checkbox">
                  <input type="checkbox" value="" data-toggle="checkbox">
                  5 personas <span class="badge pull-right">28</span>
                  </a>
                  <a href="resultados.php" class="checkbox">
                  <input type="checkbox" value="" data-toggle="checkbox">
                  6 personas <span class="badge pull-right">41</span>
                  </a>
                  <a href="resultados.php" class="checkbox">
                  <input type="checkbox" value="" data-toggle="checkbox">
                  7 personas <span class="badge pull-right">13</span>
                  </a>
                  <a href="resultados.php" class="checkbox">
                  <input type="checkbox" value="" data-toggle="checkbox">
                  8 personas <span class="badge pull-right">86</span>
                  </a>
                  <a href="resultados.php" class="checkbox">
                  <input type="checkbox" value="" data-toggle="checkbox">
                  9 personas <span class="badge pull-right">27</span>
                  </a>
                  <a href="resultados.php" class="checkbox">
                  <input type="checkbox" value="" data-toggle="checkbox">
                  10 personas <span class="badge pull-right">54</span>
                  </a>
               </div>
            </div>
         </div>
         <!-- Cantidad de personas -->
      </div>
   </div>
</div>
<!-- /Sidebar Filtros -->