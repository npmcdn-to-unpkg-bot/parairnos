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
            <!-- Buscador -->
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
                     <li class="active"><a href="admin.php">Mis publicaciones</a></li>
                     <li><a href="datos.php">Mis datos</a></li>
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
   <div class="admin-section">
      <div class="container">
         <div class="row">
            <div class="col-md-3 col-sm-3">
               <!-- Menu sidebar -->
               <div class="sidebar-offcanvas card" id="admin-sidebar" role="navigation">
                  <div class="list-group">
                     <a href="#" class="list-group-item selected">
                     <i class="fa fa-map-marker"></i>
                     Todas mis publicaciones</a>
                     <a href="#" class="list-group-item"> <i class="fa fa-check"></i>
                     Avisos publicados</a>
                     <a href="#" class="list-group-item"><i class="fa fa-pause"></i>
                     Avisos no publicados</a>
                     <a href="#" class="list-group-item"><i class="fa fa-trash"></i>
                     Avisos eliminados</a>
                  </div>
               </div>
               <!-- /Menu sidebar -->
               <!-- Stock disponible -->
               <div class="stock card panel-default">
                  <div class="panel-heading">
                     <h3 class="panel-title">
                     Stock disponible
                     </h3>
                  </div>
                  <div class="panel-body">
                     <ul class="media-list">
                        <li class="media">
                           <div class="media-body">
                              <h5>
                              <span class="text-stock">Avisos destacados</span>
                              <span class="badge pull-right">
                                 3
                              </span>
                              </h5>
                              <h5>
                              <span class="text-stock">Avisos simples</span>
                              <span class="badge pull-right">
                                 6
                              </span>
                              </h5>
                           </div>
                        </li>
                     </ul>
                     <a href="admin.php" class="btn btn-fill btn-success btn-block">Publicar alojamiento</a>
                  </div>
               </div>
               <!-- /Stock disponible -->
            </div>
            <div class="col-md-9 col-sm-9">
               <!-- Alerta éxito -->
               <div class="alert alert-success fade in" role="alert">
                  <a href="#" class="fa fa-close pull-right" data-dismiss="alert" aria-label="close"></a>
                  <h4>Aviso Publicado. Dispone de 0 Avisos Destacados para publicar</h4>
                  <p>
                     Para visualizar su anuncio, haga <a href="#" title="Click aquí">click aquí</a><br><br>
                  </p>
               </div>
               <!-- /Alerta éxito -->
               <!-- Alerta fracaso -->
               <div class="alert alert-danger fade in" role="alert">
                  <a href="#" class="fa fa-close pull-right" data-dismiss="alert" aria-label="close"></a>
                  <h4>Su cuenta ha sido suspendida por falta de pago</h4>
                  <p>
                     Puede reactivarla pagando desde el link de pago. Para ponerse en contacto con nosotros por favor escriba a <a href="mailto:info@parairnos.com" title="Parairnos Email">info@parairnos.com</a><br><br>
                  </p>
               </div>
               <!-- /Alerta fracaso -->
               <!-- Filtro Publicaciones -->
               <div class="row">
                  <div class="col-md-3 col-md-offset-9">
                     <form class="form-inline">
                        <div class="form-group">
                           <select name="huge" class="selectpicker ordernarPor">
                              <option value="0" selected> Todas mis publicaciones</option>
                              <option value="1">Publicaciones destacadas </option>
                              <option value="2">Publicaciones simples</option>
                           </select>
                        </div>
                     </form>
                  </div>
               </div>
               <!-- /Filtro Publicaciones -->
               <div class="clearfix"></div>
               <!-- Publicaciones destacadas -->
               <h4>3 Publicaciones destacadas:</h4>
               <div class="card">
                  <div class="content">
                     <div class="publicacion">
                        <div class="row">
                           <div class="col-xs-12 col-md-9 col-sm-9 media">
                              <a class="pull-left leftImgCard" href="#">
                                 <span class="label label-danger label-fill">Pausado</span>
                                 <img width="150" height="150" class="media-object" src="assets/img/hotel1/shot.jpg">
                              </a>
                              <div class="content">
                                 <a class="card-link" href="detalle.php">
                                    <h4 class="title text-info">Arriendo departamento Termas de Chillán </h4>
                                 </a>
                                 <p class="description">
                                    Casa en alquiler para 1 persona
                                    <br>
                                    Cuenta con 1 habitacion y 1 baño
                                    <br>
                                    <h3 class="price">
                                    <span class="text-success">
                                    <sup>$</sup>80.000</span><sup> /por noche</sup>
                                    </h3>
                                    <span></span>
                                 </p>
                              </div>
                           </div>
                           <div class="col-xs-12 col-sm-3 col-md-3 pull-right">
                              <span>Tu aviso está al 60%</span>
                              <div class="progress">
                                 <div class="progress-bar progress-bar-striped active progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                 </div>
                              </div>
                              <button rel="tooltip" title="Publicar" type="button" class="btn btn-fill btn-lg btn-circle"><i class="fa fa-play"></i></button>
                              <button rel="tooltip" title="Editar calendario" type="button" class="btn btn-fill btn-lg btn-circle"><i class="fa fa-calendar"></i></button>
                              <button rel="tooltip" title="Editar publicación" type="button" class="btn btn-fill btn-lg btn-circle"><i class="fa fa-pencil"></i></button>
                              <button rel="tooltip" title="Borrar publicación" type="button" class="btn btn-fill btn-lg btn-circle"><i class="fa fa-remove"></i></button>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-12">
                           </div>
                        </div>
                        <div class="clearfix"></div>
                     </div>
                  </div>
                  <div class="footer">
                     <ul class="detalle nav nav-section nav-justified">
                        <li>
                           <h6>
                           Publicado el</h6>
                           <p>
                              <span><small><i class="fa fa-calendar"></i>07/11/2015</small></span>
                           </p>
                        </li>
                        <li>
                           <h6>
                           Vencimiento</h6>
                           <p>
                              <span><small><i class="fa fa-calendar"></i> 22/01/2016</small></span>
                           </p>
                        </li>
                        <li>
                           <h6>
                           Vistas</h6>
                           <p>
                              <span><small><i class="fa fa-eye"></i> 3</small></span>
                           </p>
                        </li>
                        <li>
                           <h6>
                           Consultas</h6>
                           <p>
                              <span><small><i class="fa fa-envelope-o"></i> 0</small></span>
                           </p>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="card">
                  <div class="content">
                     <div class="publicacion">
                        <div class="row">
                           <div class="col-xs-12 col-md-9 col-sm-9 media">
                              <a class="pull-left" href="#">
                                 <img width="150" height="150" class="media-object" src="assets/img/hotel2/shot.jpg">
                              </a>
                              <div class="content">
                                 <a class="card-link" href="detalle.php">
                                    <h4 class="title text-info">Arriendo departamento Termas de Chillán </h4>
                                 </a>
                                 <p class="description">
                                    Casa en alquiler para 1 persona
                                    <br>
                                    Cuenta con 1 habitacion y 1 baño
                                    <br>
                                    <h3 class="price">
                                    <span class="text-success">
                                    <sup>$</sup>80.000</span><sup> /por noche</sup>
                                    </h3>
                                 </p>
                              </div>
                           </div>
                           <div class="col-xs-12 col-sm-3 col-md-3 pull-right">
                              <span>Tu aviso está al 77%</span>
                              <div class="progress">
                                 <div class="progress-bar progress-bar-striped active progress-bar-success" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">
                                 </div>
                              </div>
                              <button type="button" class="btn btn-fill btn-lg btn-circle"><i class="fa fa-pause"></i></button>
                              <button type="button" class="btn btn-fill btn-lg btn-circle"><i class="fa fa-calendar"></i></button>
                              <button type="button" class="btn btn-fill btn-lg btn-circle"><i class="fa fa-pencil"></i></button>
                              <button type="button" class="btn btn-fill btn-lg btn-circle"><i class="fa fa-remove"></i></button>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-12">
                           </div>
                        </div>
                        <div class="clearfix"></div>
                     </div>
                  </div>
                  <div class="footer">
                     <ul class="detalle nav nav-section nav-justified">
                        <li>
                           <h6>
                           Publicado el</h6>
                           <p>
                              <span><small><i class="fa fa-calendar"></i>07/11/2015</small></span>
                           </p>
                        </li>
                        <li>
                           <h6>
                           Vencimiento</h6>
                           <p>
                              <span><small><i class="fa fa-calendar"></i> 22/01/2016</small></span>
                           </p>
                        </li>
                        <li>
                           <h6>
                           Vistas</h6>
                           <p>
                              <span><small><i class="fa fa-eye"></i> 3</small></span>
                           </p>
                        </li>
                        <li>
                           <h6>
                           Consultas</h6>
                           <p>
                              <span><small><i class="fa fa-envelope-o"></i> 0</small></span>
                           </p>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="card">
                  <div class="content">
                     <div class="publicacion">
                        <div class="row">
                           <div class="col-xs-12 col-md-9 col-sm-9 media">
                              <a class="pull-left" href="#">
                                 <img width="150" height="150" class="media-object" src="assets/img/hotel3/shot.jpg">
                              </a>
                              <div class="content">
                                 <a class="card-link" href="detalle.php">
                                    <h4 class="title text-info">Arriendo departamento Termas de Chillán </h4>
                                 </a>
                                 <p class="description">
                                    Casa en alquiler para 1 persona
                                    <br>
                                    Cuenta con 1 habitacion y 1 baño
                                    <br>
                                    <h3 class="price">
                                    <span class="text-success">
                                    <sup>$</sup>80.000</span><sup> /por noche</sup>
                                    </h3>
                                    <span></span>
                                 </p>
                              </div>
                           </div>
                           <div class="col-xs-12 col-md-3 pull-right">
                              <span>Tu aviso está al 25%</span>
                              <div class="progress">
                                 <div class="progress-bar progress-bar-striped active progress-bar-success" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;">
                                 </div>
                              </div>
                              <button type="button" class="btn btn-fill btn-lg btn-circle"><i class="fa fa-pause"></i></button>
                              <button type="button" class="btn btn-fill btn-lg btn-circle"><i class="fa fa-calendar"></i></button>
                              <button type="button" class="btn btn-fill btn-lg btn-circle"><i class="fa fa-pencil"></i></button>
                              <button type="button" class="btn btn-fill btn-lg btn-circle"><i class="fa fa-remove"></i></button>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-12">
                           </div>
                        </div>
                        <div class="clearfix"></div>
                     </div>
                  </div>
                  <div class="footer">
                     <ul class="detalle nav nav-section nav-justified">
                        <li>
                           <h6>
                           Publicado el</h6>
                           <p>
                              <span><small><i class="fa fa-calendar"></i>07/11/2015</small></span>
                           </p>
                        </li>
                        <li>
                           <h6>
                           Vencimiento</h6>
                           <p>
                              <span><small><i class="fa fa-calendar"></i> 22/01/2016</small></span>
                           </p>
                        </li>
                        <li>
                           <h6>
                           Vistas</h6>
                           <p>
                              <span><small><i class="fa fa-eye"></i> 3</small></span>
                           </p>
                        </li>
                        <li>
                           <h6>
                           Consultas</h6>
                           <p>
                              <span><small><i class="fa fa-envelope-o"></i> 0</small></span>
                           </p>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="clearfix"></div>
               <br>
               <!-- /Publicaciones destacadas -->
               <!-- Publicaciones simples -->
               <h4>2 Publicaciones simples:</h4>
               <div class="card">
                  <div class="content">
                     <div class="publicacion">
                        <div class="row">
                           <div class="col-xs-12 col-md-9 col-sm-9 media">
                              <a class="pull-left leftImgCard" href="#">
                                 <span class="label label-danger label-fill">Pausado</span>
                                 <img width="150" height="150" class="media-object" src="assets/img/hotel4/shot.jpg">
                              </a>
                              <div class="content">
                                 <a class="card-link" href="detalle.php">
                                    <h4 class="title text-info">Arriendo departamento Termas de Chillán </h4>
                                 </a>
                                 <p class="description">
                                    Casa en alquiler para 1 persona
                                    <br>
                                    Cuenta con 1 habitacion y 1 baño
                                    <br>
                                    <h3 class="price">
                                    <span class="text-success">
                                    <sup>$</sup>80.000</span><sup> /por noche</sup>
                                    </h3>
                                    <span></span>
                                 </p>
                              </div>
                           </div>
                           <div class="col-xs-12 col-md-3 pull-right">
                              <span>Tu aviso está al 60%</span>
                              <div class="progress">
                                 <div class="progress-bar progress-bar-striped active progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                 </div>
                              </div>
                              <button type="button" class="btn btn-fill btn-lg btn-circle"><i class="fa fa-play"></i></button>
                              <button type="button" class="btn btn-fill btn-lg btn-circle"><i class="fa fa-calendar"></i></button>
                              <button type="button" class="btn btn-fill btn-lg btn-circle"><i class="fa fa-pencil"></i></button>
                              <button type="button" class="btn btn-fill btn-lg btn-circle"><i class="fa fa-remove"></i></button>
                              <a href="wizard.php#tab5" style="margin-top:15px" class="btn btn-block btn-fill btn-md btn-primary">
                                 Destacar
                              </a>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-12">
                           </div>
                        </div>
                        <div class="clearfix"></div>
                     </div>
                  </div>
                  <div class="footer">
                     <ul class="detalle nav nav-section nav-justified">
                        <li>
                           <h6>
                           Publicado el</h6>
                           <p>
                              <span><small><i class="fa fa-calendar"></i>07/11/2015</small></span>
                           </p>
                        </li>
                        <li>
                           <h6>
                           Vencimiento</h6>
                           <p>
                              <span><small><i class="fa fa-calendar"></i> 22/01/2016</small></span>
                           </p>
                        </li>
                        <li>
                           <h6>
                           Vistas</h6>
                           <p>
                              <span><small><i class="fa fa-eye"></i> 3</small></span>
                           </p>
                        </li>
                        <li>
                           <h6>
                           Consultas</h6>
                           <p>
                              <span><small><i class="fa fa-envelope-o"></i> 0</small></span>
                           </p>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="card">
                  <div class="content">
                     <div class="publicacion">
                        <div class="row">
                           <div class="col-xs-12 col-md-9 col-sm-9 media">
                              <a class="pull-left leftImgCard" href="#">
                                 <span class="label label-danger label-fill">Pausado</span>
                                 <img width="150" height="150" class="media-object" src="assets/img/hotel1/3.jpg">
                              </a>
                              <div class="content">
                                 <a class="card-link" href="detalle.php">
                                    <h4 class="title text-info">Arriendo departamento Termas de Chillán </h4>
                                 </a>
                                 <p class="description">
                                    Casa en alquiler para 1 persona
                                    <br>
                                    Cuenta con 1 habitacion y 1 baño
                                    <br>
                                    <h3 class="price">
                                    <span class="text-success">
                                    <sup>$</sup>80.000</span><sup> /por noche</sup>
                                    </h3>
                                 </p>
                              </div>
                           </div>
                           <div class="col-xs-12 col-md-3 pull-right">
                              <span>Tu aviso está al 77%</span>
                              <div class="progress">
                                 <div class="progress-bar progress-bar-striped active progress-bar-success" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">
                                 </div>
                              </div>
                              <button type="button" class="btn btn-fill btn-lg btn-circle"><i class="fa fa-play"></i></button>
                              <button type="button" class="btn btn-fill btn-lg btn-circle"><i class="fa fa-calendar"></i></button>
                              <button type="button" class="btn btn-fill btn-lg btn-circle"><i class="fa fa-pencil"></i></button>
                              <button type="button" class="btn btn-fill btn-lg btn-circle"><i class="fa fa-remove"></i></button>
                              <a href="wizard.php#tab5" style="margin-top:15px" class="btn btn-block btn-fill btn-md btn-primary">
                                 Destacar
                              </a>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-12">
                           </div>
                        </div>
                        <div class="clearfix"></div>
                     </div>
                  </div>
                  <div class="footer">
                     <ul class="detalle nav nav-section nav-justified">
                        <li>
                           <h6>
                           Publicado el</h6>
                           <p>
                              <span><small><i class="fa fa-calendar"></i>07/11/2015</small></span>
                           </p>
                        </li>
                        <li>
                           <h6>
                           Vencimiento</h6>
                           <p>
                              <span><small><i class="fa fa-calendar"></i> 22/01/2016</small></span>
                           </p>
                        </li>
                        <li>
                           <h6>
                           Vistas</h6>
                           <p>
                              <span><small><i class="fa fa-eye"></i> 3</small></span>
                           </p>
                        </li>
                        <li>
                           <h6>
                           Consultas</h6>
                           <p>
                              <span><small><i class="fa fa-envelope-o"></i> 0</small></span>
                           </p>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="clearfix"></div>
               <!-- /Publicaciones simples -->
            </div>
         </div>
      </div>
   </div>
   <!-- Contenedor admin  -->
<?php
include("footer.php");
?>