<?php
   include("header-admin.php");
?>
<!-- /header -->
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
                  <li class="active"><a href="datos.php">Mis datos</a></li>
                  <li><a href="mensajes.php">Mis mensajes <span class="badge">3</span></a></li>
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
<div class="admin-section datos-section">
   <div class="container">
      <div class="row">
         <div class="col-md-3">
            <div class="card" >
               <div class="text-center content">
                  <img class="avatar" src="assets/img/placeholder.png" alt="...">
                  <div class="form-group">
                     <div id="fileselector">
                        <label class="btn btn-default" for="upload-file-selector">
                        <input id="upload-file-selector" type="file">
                        <i class="fa_icon icon-upload-alt margin-correction"></i>Cambiar avatar
                        </label>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-9">
            <div class="card">
               <div class="content">
                  <h4>Datos personales</h4>
                  <hr>
                  <div class="row">
                     <div class="col-md-7">
                        <form role="form">
                           <div class="form-group">
                              <label for="first_name">Nombre</label>
                              <input value="José" type="text" tabindex="1" placeholder="Tu nombre" class="form-control input-md" id="first_name" name="first_name">                   
                           </div>
                           <div class="form-group">
                              <label class="control-label" for="last_name">Apellido</label>
                              <input value="Paulino" type="text" tabindex="2" placeholder="Tu apellido" class="form-control input-md" id="last_name" name="last_name">
                           </div>
                           <div class="form-group">
                              <label class="control-label" for="phone">Teléfono</label>
                              <input value="541151179847" type="text" tabindex="3" placeholder="Teléfono" class="form-control input-md" id="display_name" name="display_name">
                           </div>
                           <div class="form-group">
                              <label class="control-label" for="email">Email</label>
                              <input value="josepaulinog@gmail.com" type="email" tabindex="4" placeholder="Email" class="form-control input-md" id="email" name="email">
                           </div>
                           <div class="form-group">
                              <a href="admin.php" class="pull-right btn btn-primary btn-md btn-fill" href="#">Actualizar datos</a>  
                           </div>
                        </form>
                     </div>
                  </div>
                  <h4>Actualizar contraseña</h4>
                  <hr>
                  <div class="row">
                     <div class="col-md-7">
                        <form role="form">
                           <div class="form-group">
                              <label class="control-label" for="email">Contraseña</label>
                              <input value="password" type="password" tabindex="4" class="form-control input-md" id="password" name="password">
                           </div>
                           <div class="form-group">
                              <label class="control-label" for="email">Repetir contraseña</label>
                              <input value="password" type="password" tabindex="5" class="form-control input-md" id="password" name="password">
                           </div>
                           <div class="form-group">
                              <a href="admin.php" class="pull-right btn btn-primary btn-md btn-fill" href="#">Cambiar contraseña</a>   
                           </div>
                        </form>
                     </div>
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