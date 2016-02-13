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
               Calendario de Reservas
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
   <!-- Contenedor admin -->
   <div class="admin-section datos-section">
      <!-- Volver a tu cuenta  -->
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <ol class="breadcrumb">
                  <li><a href="admin.php" class="link-info">
                     <i class="fa fa-chevron-left"></i>Volver a tu cuenta
                  </a>
               </li>
            </ol>
         </div>
      </div>
      <!-- /Volver a tu cuenta -->
      <!-- Tabla de reservas -->
      <div class="row">
         <div class="col-md-12">
            <div class="card">
               <div class="content">
                  <div class="row">
                     <div class="col-md-12">
                        <ul class="calendarioPaginador">
                           <li class="dropdown">
                              <a href="#" class="dropdown-toggle " data-toggle="dropdown">
                                 <h4 class="no-margin"><strong>Arriendo departamento Termas de Chillán</strong><b class="caret"></b></h4>
                              </a>
                              <ul class="dropdown-menu">
                                 <li><a href="#">Arriendo departamento Termas de Chillán</a></li>
                                 <li class="divider"></li>
                                 <li><a href="#">Arriendo departamento Termas de Chillán</a></li>
                                 <li class="divider"></li>
                                 <li><a href="#">Arriendo departamento Termas de Chillán</a></li>
                                 <li class="divider"></li>
                                 <li><a href="#">Arriendo departamento Termas de Chillán</a></li>
                              </ul>
                           </li>
                        </ul>
                     </div>
                  </div>
                  <hr>
                  <h4>
                  Lista de Reservas
                  </h4>
                  <div class="table-responsive calendarioReservas">
                     <table class="table table-bordered ">
                        <thead>
                           <tr class="info">
                              <th>Desde</th>
                              <th>Hasta</th>
                              <th>Nombre</th>
                              <th>Precio</th>
                              <th>Contacto</th>
                              <th>Acciones</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td><input value="21/01/2016" id="name" class="form-control" type="text">
                           </td>
                           <td>
                              <input value="26/01/2016" id="name" class="form-control" type="text">
                           </td>
                           <td>
                              <input value="luis@example.com" id="name" class="form-control" type="text">
                           </td>
                           <td>
                              <input value="54,000" id="name" class="form-control" type="text">
                           </td>
                           <td><input value="Luis" id="name" class="form-control" type="text">
                        </td>
                        <td style="width: 110px">
                           <a id="editar" class='btn-fill btn btn-success btn-sm' href="#">
                              <span class="fa fa-check"></span>
                           </a>
                           <a id="guardar" href="#" class="btn-fill btn btn-danger btn-sm">
                              <span class="fa fa-remove"></span>
                           </a>
                           <a id="borrar" href="#" class="btn-fill btn btn-danger btn-sm">
                              <span class="fa fa-remove"></span>
                           </a>
                        </td>
                     </tr>
                     <tr>
                        <td>3/03/2016</td>
                        <td>16/05/2016</td>
                        <td>maria@example.com</td>
                        <td>51,400</td>
                        <td>Maria</td>
                        <td style="width: 110px">
                           <a id="editar" class='btn-fill btn btn-info btn-sm' href="#">
                              <span class="fa fa-pencil"></span>
                           </a>
                           <a id="guardar" href="#" class="btn-fill btn btn-danger btn-sm">
                              <span class="fa fa-remove"></span>
                           </a>
                           <a id="borrar" href="#" class="btn-fill btn btn-danger btn-sm">
                              <span class="fa fa-remove"></span>
                           </a>
                        </td>
                     </tr>
                     <tr>
                        <td>13/06/2016</td>
                        <td>21/06/2016</td>
                        <td>julio@example.com</td>
                        <td>3,900</td>
                        <td>Julio</td>
                        <td style="width: 110px">
                           <a id="editar" class='btn-fill btn btn-info btn-sm' href="#">
                              <span class="fa fa-pencil"></span>
                           </a>
                           <a id="guardar" href="#" class="btn-fill btn btn-danger btn-sm">
                              <span class="fa fa-remove"></span>
                           </a>
                           <a id="borrar" href="#" class="btn-fill btn btn-danger btn-sm">
                              <span class="fa fa-remove"></span>
                           </a>
                        </td>
                     </tr>
                  </tbody>
               </table>
            </div>
            <button type="button" class="btn btn-fill btn-success" data-toggle="modal" data-target="#modalReserva">
            Agregar nueva reserva
            </button>
         </div>
      </div>
      <!-- /Tabla de reservas -->
      <!-- Contenedor calendario de reservas -->
      <div class="card">
         <div class="content">
            <div class="row">
               <div class="col-md-6">
                  <h4>
                  Calendario de reservas
                  </h4>
               </div>
               <div class="col-md-6">
                  <div class="pull-right">
                     <div class="label label-lg label-danger label-fill">Reservado</div>
                     <div class="label label-lg label-success label-fill">Disponible</div>
                  </div>
               </div>
               <div class="clearfix"></div>
               <!-- Calendario de reservas -->
               <div class="col-md-12">
                  <div id="calendario-ocupacional-admin"></div>
               </div>
               <!-- /Calendario de reservas -->
               <div class="col-md-8">
                  <!-- Código compartir calendario -->
                  <p>
                     <h4>
                     Para mostrar el calendario en su propia pagina, puede usar el codigo siguiente:
                     </h4>
                  </p>
                                    <pre class="prettyprint">&lt;iframe src="http://www.parairnos.com/iframeCalendario/19018" 
                                             frameBorder="0" width="521" height="256" scrolling="no">
                                             &lt;/iframe>
                  </pre>
                  <!-- Código compartir calendario -->
               </div>
            </div>
         </div>
      </div>
      <!-- /Contenedor calendario de reservas -->
   </div>
</div>
</div>
</div>
<!-- /Contenedor admin -->
<?php
include("footer.php");
?>
<!-- Modal Agregar nueva Reserva -->
<div class="modal fade" id="modalReserva" tabindex="-1" role="dialog" aria-labelledby="modalReservacion">
<div class="modal-dialog" role="document">
<div class="modal-content">
   <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <h4 class="modal-title" id="modalReservacion">Agregar nueva reserva</h4>
   </div>
   <div class="modal-body">
      <form role="form" id="contact-form" method="post">
         <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Nombre y apellido"/>
         </div>
         <div class="form-group">
            <label for="precio">Precio</label>
            <input type="number" name="precio" class="form-control" id="precio" placeholder="Precio"/>
         </div>
         <div class="form-group">
            <label for="contacto">Contacto</label>
            <input type="text" name="contacto" class="form-control" id="contacto" placeholder="Contacto"/>
         </div>
         <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6">
               <div class="form-group">
                  <input id="dpd1" type="text" placeholder="Desde" class="form-control datepicker" name="Desde">
               </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
               <div class="form-group">
                  <input id="dpd2" type="text" placeholder="Hasta" class="form-control datepicker" name="Hasta">
               </div>
            </div>
         </div>
      </form>
   </div>
   <div class="modal-footer">
      <button type="button" class="btn btn-danger btn-fill" data-dismiss="modal">Cerrar</button>
      <button type="button" class="btn btn-success btn-fill">Guardar reserva</button>
   </div>
</div>
</div>
</div>
<!-- /Modal Agregar nueva Reserva -->