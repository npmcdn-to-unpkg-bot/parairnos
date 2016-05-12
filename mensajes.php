<?php
   include("header-admin.php");
?>
<div class="wrapper">
<!-- Barra headline y buscador -->
<div class="parairnos-page">
   <div class="container">
      <div class="row">
         <!-- Titulo de página -->
         <div class="col-md-8 col-sm-8">
            <h3>
               Mi cuenta
            </h3>
         </div>
         <!-- Titulo de página -->
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
                  <li class="active"><a href="mensajes.php">Mis mensajes <span class="badge">3</span></a></li>
                  <li><a href="planes.php">Planes</a></li>
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
         <!-- Menu sidebar -->
         <div class="col-md-3">
            <div class="card" id="admin-sidebar" role="navigation">
               <div class="list-group">
                  <a href="mensajes.php" class="list-group-item selected"><i class="fa fa-inbox"></i>
                  Todos los recibidos <span class="badge pull-right">34</span></a>
                  <a href="mensajes.php" class="list-group-item"> <i class="fa fa-check"></i>
                  Leídos</a>
                  <a href="mensajes.php" class="list-group-item"><i class="fa fa-bolt"></i>
                  No leídos</a>
                  <a href="mensajes.php" class="list-group-item"><i class="fa fa-trash"></i>
                  Papelera</a>
               </div>
            </div>
         </div>
         <!-- /Menu sidebar -->
         <!-- Mensajes -->
         <div class="col-md-9">
            <div class="card">
               <div class="content">
                  <h4>Todos los mensajes recibidos</h4>
                  <hr>
                  <div class="mail-box pre-scrollable">
                     <aside class="lg-side">
                        <div class="inbox-body">
                           <!-- Opciones de mensajes -->
                           <div class="mail-option">
                              <div class="chk-all">
                                 <input type="checkbox" class="mail-checkbox mail-group-checkbox">
                                 <div class="btn-group">
                                    <a data-toggle="dropdown" href="#" class="btn mini all" aria-expanded="false">
                                    Todo
                                    <i class="fa fa-angle-down "></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                       <li><a href="#"> Nada</a></li>
                                       <li><a href="#"> Leído</a></li>
                                       <li><a href="#"> No leido</a></li>
                                    </ul>
                                 </div>
                              </div>
                              <div class="btn-group">
                                 <a data-original-title="Refresh" data-placement="top" data-toggle="dropdown" href="#" class="btn mini tooltips">
                                 <i class=" fa fa-refresh"></i>
                                 </a>
                              </div>
                              <div class="btn-group hidden-phone">
                                 <a data-toggle="dropdown" href="#" class="btn mini blue" aria-expanded="false">
                                 Más
                                 <i class="fa fa-angle-down "></i>
                                 </a>
                                 <ul class="dropdown-menu">
                                    <li><a href="#"><i class="fa fa-pencil"></i> Marcar como no leído</a></li>
                                    <li><a href="#"><i class="fa fa-ban"></i> Marcar como spam</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#"><i class="fa fa-trash-o"></i> Eliminar</a></li>
                                 </ul>
                              </div>
                              <div class="btn-group">
                                 <a data-toggle="dropdown" href="#" class="btn mini blue">
                                 Marcar como
                                 <i class="fa fa-angle-down "></i>
                                 </a>
                                 <ul class="dropdown-menu">
                                    <li><a href="#"><i class="fa fa-pencil"></i> Marcar como leído</a></li>
                                    <li><a href="#"><i class="fa fa-ban"></i> Marcar como Spam</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#"><i class="fa fa-trash-o"></i> Eliminar</a></li>
                                 </ul>
                              </div>
                           </div>
                           <!-- Opciones de mensajes -->
                           <!-- Tabla de mensajes -->
                           <div class="table-responsive">
                              <table class="table table-inbox table-hover">
                                 <tbody> 
                                    <tr class="unread clickable-row" data-href="respuesta.php">
                                       <td class="inbox-small-cells">
                                          <span class="checkbox">
                                          <input type="checkbox" value="" data-toggle="checkbox">
                                          </span>
                                       </td>
                                       <td class="view-message dont-show">Luís Acevedo</td>
                                       <td class="view-message">Departamento Euromarina 3 dormtorios 2 camas matrimonial </td>
                                       <td class="view-message text-right">9:27 AM</td>
                                    </tr>
                                    <tr class="unread clickable-row" data-href="respuesta.php">
                                       <td class="inbox-small-cells">
                                          <span class="checkbox">
                                          <input type="checkbox" value="" data-toggle="checkbox">
                                          </span>
                                       </td>
                                       <td class="view-message dont-show">Luís Concepción</td>
                                       <td class="view-message">Arriendo departamento Termas de Chillán</td>
                                       <td class="view-message text-right">15 Marzo</td>
                                    </tr>
                                    <tr class="unread clickable-row" data-href="respuesta.php">
                                       <td class="inbox-small-cells">
                                          <span class="checkbox">
                                          <input type="checkbox" value="" data-toggle="checkbox">
                                          </span>
                                       </td>
                                       <td class="view-message dont-show">Carolina Mejía</td>
                                       <td class="view-message">Alojamiento en el Centro de Santiago departamentos 1 y 2 Dormitorios </td>
                                       <td class="view-message text-right">15 de Marzo</td>
                                    </tr>
                                    <tr class="clickable-row" data-href="respuesta.php">
                                       <td class="inbox-small-cells">
                                          <span class="checkbox">
                                          <input type="checkbox" value="" data-toggle="checkbox">
                                          </span>
                                       </td>
                                       <td class="view-message dont-show">Daniel Monteninos</td>
                                       <td class="view-message">Alojamiento en el Centro de Santiago departamentos 1 y 2 Dormitorios</td>
                                       <td class="view-message text-right">1 de Marzo</td>
                                    </tr>
                                    <tr class="clickable-row" data-href="respuesta.php">
                                       <td class="inbox-small-cells">
                                          <span class="checkbox">
                                          <input type="checkbox" value="" data-toggle="checkbox">
                                          </span>
                                       </td>
                                       <td class="view-message dont-show">Gabriela Pérez</td>
                                       <td class="view-message">Departamento Euromarina 3 dormtorios 2 camas matrimonial</td>
                                       <td class="view-message text-right">23 de Mayo</td>
                                    </tr>
                                    <tr class="clickable-row" data-href="respuesta.php">
                                       <td class="inbox-small-cells">
                                          <span class="checkbox">
                                          <input type="checkbox" value="" data-toggle="checkbox">
                                          </span>
                                       </td>
                                       <td class="view-message dont-show">Marcelo Rivas </td>
                                       <td class="view-message">Departamento Euromarina 3 dormtorios 2 camas matrimonial</td>
                                       <td class="view-message text-right">14 de Marzo</td>
                                    </tr>
                                    <tr class="clickable-row" data-href="respuesta.php">
                                       <td class="inbox-small-cells">
                                          <span class="checkbox">
                                          <input type="checkbox" value="" data-toggle="checkbox">
                                          </span>
                                       </td>
                                       <td class="view-message dont-show">Pedro Lara</td>
                                       <td class="view-message">Departamento Euromarina 3 dormtorios 2 camas matrimonial</td>
                                       <td class="view-message text-right">19 de Febrero</td>
                                    </tr>
                                    <tr class="clickable-row" data-href="respuesta.php">
                                       <td class="inbox-small-cells">
                                          <span class="checkbox">
                                          <input type="checkbox" value="" data-toggle="checkbox">
                                          </span>
                                       </td>
                                       <td class="view-message dont-show">Micaela Rodríguez</td>
                                       <td class="view-message view-message">Departamento Euromarina 3 dormtorios 2 camas matrimonial</td>
                                       <td class="view-message text-right">4 de Marzo</td>
                                    </tr>
                                    <tr class="clickable-row" data-href="respuesta.php">
                                       <td class="inbox-small-cells">
                                          <span class="checkbox">
                                          <input type="checkbox" value="" data-toggle="checkbox">
                                          </span>
                                       </td>
                                       <td class="view-message dont-show">Carlos Medina</td>
                                       <td class="view-message view-message">Departamento Euromarina 3 dormtorios 2 camas matrimonial</td>
                                       <td class="view-message text-right">13 de Junio</td>
                                    </tr>
                                    <tr class="clickable-row" data-href="respuesta.php">
                                       <td class="inbox-small-cells">
                                          <span class="checkbox">
                                          <input type="checkbox" value="" data-toggle="checkbox">
                                          </span>
                                       </td>
                                       <td class="view-message dont-show">Rita Indiana</td>
                                       <td class="view-message view-message">Departamento Euromarina 3 dormtorios 2 camas matrimonial</td>
                                       <td class="view-message text-right">24 de Marzo</td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                           <!-- Tabla de mensajes -->
                           <br>
                           <ul class="unstyled inbox-pagination">
                                 <li><span>1-10 de 34</span></li>
                                 <li>
                                    <a class="np-btn" href="#"><i class="fa fa-angle-left  pagination-left"></i></a>
                                 </li>
                                 <li>
                                    <a class="np-btn" href="#"><i class="fa fa-angle-right pagination-right"></i></a>
                                 </li>
                           </ul>

                        </div>
                     </aside>
                  </div>
               </div>
            </div>
         </div>
         <!-- /Mensajes -->
      </div>
   </div>
</div>
<!-- Contenedor admin -->
<?php
include("footer.php");
?>

<script type="text/javascript">
   jQuery(document).ready(function($) {
    $(".clickable-row .view-message").click(function() {
        window.document.location = $(this).parent().data("href");
    });
});
</script>