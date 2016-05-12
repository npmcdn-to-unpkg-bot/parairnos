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
                  <span><h4>Aviso: <a href="#">Departamento Euromarina 3 dormtorios 2 camas matrimonial </a></h4></span>
                  <hr>
                  <div class="mail-box pre-scrollable">
                     <aside class="lg-side">
                        <div class="inbox-body">

                           <!-- Tabla de mensajes -->
                           <div class="mail-box-content">
                              <div class="mail-box-header">
                                 <div class="mail-box-message-container">
                                    <div class="header">
                                       <div class="media">
                                          <span class="pull-left">
                                             <div class="avatar">
                                                <img class="media-object" src="https://s3.amazonaws.com/uifaces/faces/twitter/rem/128.jpg" alt="...">
                                             </div>
                                          </span>
                                          <div class="media-body">
                                             <h4 class="media-heading">Luís Acevedo</h4>
                                             <div class="clearfix"></div>
                                             <a href="#">luis.acevedo@gmail.com</a>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="card">
                                       <div class="content">
                                          <p>Hola Buenos días, quería saber si tienen disponibilidad para el Miércoles 23/03 y cuanto es el valor para 7 personas. Espero respuestas</p>
                                          <p>Gracias!</p>
                                       </div>
                                       <div class="content text-right message-date">
                                          <small class="text-muted">12 de Septiembre</small>
                                       </div>
                                    </div>
                                 </div>
                                 <br>
                                 <div class="mail-box-message-container">
                                    <div class="header">
                                       <div class="media">
                                          <span class="pull-left">
                                             <div class="avatar">
                                                <img class="media-object" src="https://s3.amazonaws.com/uifaces/faces/twitter/soffes/128.jpg" alt="...">
                                             </div>
                                          </span>
                                          <div class="media-body">
                                             <h4 class="media-heading">Gastón Fernández</h4>
                                             <div class="clearfix"></div>
                                             <a href="#">gaston@latinmail.com</a>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="card">
                                       <div class="content">
                                          <p>Por supuesto, tenenemos disponibilidad inmediata. Si le interesa podemos agendar una visita y conversar los detalles, dime que día te acomoda y coordinamos.
                                          <p>Saludos cordiales,</p>
                                          <p>Gastón Fernández</p>
                                       </div>
                                       <div class="content text-right message-date">
                                          <small class="text-muted">12 de Septiembre</small>
                                       </div>
                                    </div>
                                 </div>
                                 <br>
                              </div>
                              <div class="mail-box-footer well">  
                                          <strong>Responder mensaje</strong>
                                          <br> <br>                        
                                          <form role="form">
                                             <div class="media">
                                                <span class="pull-left">
                                                   <div class="avatar">
                                                      <img class="media-object" src="https://s3.amazonaws.com/uifaces/faces/twitter/soffes/128.jpg" alt="...">
                                                   </div>
                                                </span>
                                                <div class="media-body">
                                                   <div class="form-group">
                                                      <p>Para: Luis Acevedo (<a href="#">luis.acevedo@gmail.com</a>)</p>

                                                      <label for="textarea_box">Introduce tu mensaje</label>
                                                      <textarea class="form-control labelinplace" rows="3" name="textarea_box"></textarea>
                                                   </div>
                                                </div>
                                             </div>

                                             <div class="form-group">
                                                <a href="admin.php" class="pull-right btn btn-primary btn-md btn-fill">Enviar</a> 
                                                <div class="clearfix"></div> 
                                             </div>
                                          </form>
                              </div>
                           </div>
                           <!-- Tabla de mensajes -->
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
    $(function () {
        $(".labelinplace").labelinplace();
    });
</script>