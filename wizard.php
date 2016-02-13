<?php
   include("header-admin.php");
?>
<link href="assets/css/wizard.css" rel="stylesheet" />

<div class="wrapper product-page">
   <!-- Barra headline y buscador -->
   <div class="parairnos-page">
      <div class="container">
         <div class="row">
            <div class="col-md-8 col-sm-8 col-xs-12">
               <h3>
                  Publica un nuevo lugar
               </h3>
            </div>
         </div>
      </div>
   </div>
   <!-- /Barra headline y buscador -->
   <!-- Contenedor Wizard -->
   <div class="mainSection detailSection wizardSection">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div id="parairnos-wizard" class="card">
                  <div class="wz-heading wz-w-label">
                     <!--Progress bar-->
                     <div class="progress progress-xs">
                        <div class="progress-bar progress-bar-striped progress-bar-success active" ></div>
                     </div>
                     <!--Navegación-->
                     <ul class="wz-steps wz-icon-bw wz-nav-off text-lg">
                        <!-- Datos básicos -->
                        <li class="col-xs-2 active">
                           <a href="#tab1" data-toggle="tab" aria-expanded="false">
                           <span class="ico-wrap ico-wrap-xs icoz-circle bg-dark">
                           <span class="wz-icon ico-txt text-bold">1</span>
                           <i class="wz-ico-done fa fa-check"></i>
                           </span>
                           <small class="wz-desc box-block">Datos básicos</small>
                           </a>
                        </li>
                        <!-- Datos básicos -->
                        <!-- Ubicación -->
                        <li class="col-xs-2">
                           <a href="#tab2" data-toggle="tab" aria-expanded="false">
                           <span class="ico-wrap ico-wrap-xs icoz-circle bg-dark">
                           <span class="wz-icon ico-txt text-bold">2</span>
                           <i class="wz-ico-done fa fa-check"></i>
                           </span>
                           <small class="wz-desc box-block">Ubicación</small>
                           </a>
                        </li>
                        <!-- Ubicación -->
                        <!-- Tus datos -->
                        <li class="col-xs-2">
                           <a href="#tab3" data-toggle="tab" aria-expanded="true">
                           <span class="ico-wrap ico-wrap-xs icoz-circle bg-dark">
                           <span class="wz-icon ico-txt text-bold">3</span>
                           <i class="wz-ico-done fa fa-check"></i>
                           </span>
                           <small class="wz-desc box-block">Tus datos</small>
                           </a>
                        </li>
                        <!-- /Tus datos -->
                        <!-- Fotos -->
                        <li class="col-xs-2">
                           <a href="#tab4" data-toggle="tab">
                           <span class="ico-wrap ico-wrap-xs icoz-circle bg-dark">
                           <span class="wz-icon ico-txt text-bold">4</span>
                           <i class="wz-ico-done fa fa-check"></i>
                           </span>
                           <small class="wz-desc box-block">Fotos</small>
                           </a>
                        </li>
                        <!-- /Fotos -->
                        <!-- Planes -->
                        <li class="col-xs-2">
                           <a href="#tab5" data-toggle="tab">
                           <span class="ico-wrap ico-wrap-xs icoz-circle bg-dark">
                           <span class="wz-icon ico-txt text-bold">5</span>
                           <i class="wz-ico-done fa fa-check"></i>
                           </span>
                           <small class="wz-desc box-block">Elige un plan</small>
                           </a>
                        </li>
                        <!-- /Planes -->
                        <!-- Publicar -->
                        <li class="col-xs-2">
                           <a href="#tab6" data-toggle="tab">
                           <span class="ico-wrap ico-wrap-xs icoz-circle bg-dark">
                           <span class="wz-icon ico-txt text-bold"><i class="fa fa-check"></i></span>
                           <i class="wz-ico-done fa fa-check"></i>
                           </span>
                           <small class="wz-desc box-block">Publicar</small>
                           </a>
                        </li>
                        <!-- /Publicar -->
                     </ul>
                     <!--Navegación-->
                  </div>
                  <!--Formulario-->
                  <form class="">
                     <div class="panel-body">
                        <div class="tab-content">
                           <!-- Datos básicos -->
                           <div class="tab-pane fade in active" id="tab1">
                              <div class="row">
                                 <div class="col-md-6">
                                    <h4 class="section-title">Datos del alojamiento</h4>
                                    <div class="form-group">
                                       <label for="name">Título con el que se mostrará su propiedad</label>
                                       <input type="text" placeholder="" id="name" class="form-control" name="name">
                                    </div>
                                    <div class="form-group">
                                       <label for="message">Descripción de la propiedad</label>
                                       <textarea rows="3" id="message" class="form-control" name="message"></textarea>
                                    </div>
                                    <div class="row">
                                       <div class="col-xs-12 col-sm-12 col-md-12">
                                          <div class="form-group">
                                             <label for="huge">Tipo de propiedad</label>
                                             <select name="huge" class="selectpicker" data-style="form-control" data-menu-style="">
                                                <option value="7"> Casa Quinta </option>
                                                <option value="2"> Departamento </option>
                                                <option value="3"> Cabañas / Bungalows </option>
                                                <option value="4"> Apart </option>
                                                <option value="5"> Hostería </option>
                                                <option value="6"> Hotel </option>
                                             </select>
                                          </div>
                                       </div>
                                       <div class="col-xs-4 col-sm-4 col-md-4">
                                          <div class="form-group">
                                             <label for="huge">Capacidad</label>
                                             <select name="huge" class="selectpicker" data-style="form-control" data-menu-style="">
                                                <option value="1"> 1 </option>
                                                <option value="2"> 2 </option>
                                                <option value="3"> 3 </option>
                                                <option value="4"> 4 </option>
                                                <option value="5"> 5 </option>
                                                <option value="6"> 6 </option>
                                             </select>
                                          </div>
                                       </div>
                                       <div class="col-xs-4 col-sm-4 col-md-4">
                                          <div class="form-group">
                                             <label for="huge">Dormitorios</label>
                                             <select name="huge" class="selectpicker" data-style="form-control" data-menu-style="">
                                                <option value="1"> 1 </option>
                                                <option value="2"> 2 </option>
                                                <option value="3"> 3 </option>
                                                <option value="4"> 4 </option>
                                                <option value="5"> 5 </option>
                                                <option value="6"> 6 </option>
                                                <option value="7"> 7 </option>
                                                <option value="8"> 8 </option>
                                                <option value="9"> 9 </option>
                                                <option value="10"> 10 </option>
                                             </select>
                                          </div>
                                       </div>
                                       <div class="col-xs-4 col-sm-4 col-md-4">
                                          <div class="form-group">
                                             <label for="huge">Baños</label>
                                             <select name="huge" class="selectpicker" data-style="form-control" data-menu-style="">
                                                <option value="1"> 1 </option>
                                                <option value="2"> 2 </option>
                                                <option value="3"> 3 </option>
                                                <option value="4"> 4 </option>
                                                <option value="5"> 5 </option>
                                                <option value="6"> 6 </option>
                                                <option value="7"> 7 </option>
                                                <option value="8"> 8 </option>
                                                <option value="9"> 9 </option>
                                                <option value="10"> 10 </option>
                                             </select>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <h4 class="section-title">Precio</h4>
                                    <div class="form-group">
                                       <label for="huge">Precio del alquiler</label>
                                       <div class="input-group">
                                          <input type="text" placeholder="" id="name" class="form-control" name="name">
                                          <div class="input-group-btn">
                                             <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Período mínimo <span class="caret"></span></button>
                                             <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a href="#">Por día</a></li>
                                                <li><a href="#">Por semana</a></li>
                                                <li><a href="#">Por mes</a></li>
                                                <li><a href="#">Por quincena</a></li>
                                             </ul>
                                          </div>
                                          <!-- /btn-group -->
                                       </div>
                                       <!-- /input-group -->    
                                    </div>
                                    <div class="form-group">
                                       <label for="huge">Moneda</label>
                                       <select name="huge" class="selectpicker" data-style="form-control" data-menu-style="">
                                          <option value="ARS"> Pesos Argentinos</option>
                                          <option value="BRL"> Reales</option>
                                          <option value="CLP"> Pesos Chilenos</option>
                                          <option value="UYU"> Pesos Uruguayos</option>
                                          <option value="COP"> Pesos Colombianos</option>
                                          <option value="USD"> Dólares</option>
                                       </select>
                                    </div>
                                    <h4 class="section-title">Características / Servicios</h4>
                                    <div class="row">
                                       <div class="col-md-4">
                                          <div class="form-group">
                                             <label class="checkbox checkbox-azure" for="checkbox2">
                                             <input type="checkbox" value="" id="checkbox2" data-toggle="checkbox"> Wifi
                                             </label>
                                             <label class="checkbox checkbox-azure" for="checkbox2">
                                             <input type="checkbox" value="" id="checkbox2" data-toggle="checkbox"> Parrilla
                                             </label>
                                             <label class="checkbox checkbox-azure" for="checkbox2">
                                             <input type="checkbox" value="" id="checkbox2" data-toggle="checkbox"> Pileta
                                             </label>
                                          </div>
                                       </div>
                                       <div class="col-md-4">
                                          <label class="checkbox checkbox-azure" for="checkbox2">
                                          <input type="checkbox" value="" id="checkbox2" data-toggle="checkbox"> Dvd
                                          </label>
                                          <label class="checkbox checkbox-azure" for="checkbox2">
                                          <input type="checkbox" value="" id="checkbox2" data-toggle="checkbox"> Televisión
                                          </label>
                                          <label class="checkbox checkbox-azure" for="checkbox2">
                                          <input type="checkbox" value="" id="checkbox2" data-toggle="checkbox"> Garage
                                          </label>
                                       </div>
                                       <div class="col-md-4">
                                          <label class="checkbox checkbox-azure" for="checkbox2">
                                          <input type="checkbox" value="" id="checkbox2" data-toggle="checkbox"> Aire Acondicionado
                                          </label>
                                          <label class="checkbox checkbox-azure" for="checkbox2">
                                          <input type="checkbox" value="" id="checkbox2" data-toggle="checkbox"> Calefacción
                                          </label>
                                          <label class="checkbox checkbox-azure" for="checkbox2">
                                          <input type="checkbox" value="" id="checkbox2" data-toggle="checkbox"> Jardín
                                          </label>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!-- /Datos básicos -->
                           <!-- Ubicación -->
                           <div class="tab-pane fade" id="tab2">
                              <h4 class="section-title">Ubicación</h4>
                              <div class="row">
                                 <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                       <label for="huge">País</label>
                                       <select name="huge" class="selectpicker" data-style="form-control" data-menu-style="">
                                          <option value="15">Argentina</option>
                                          <option value="34">Brasil</option>
                                          <option value="49">Chile</option>
                                          <option value="52">Colombia</option>
                                          <option value="234">Uruguay</option>
                                          <option value="178">Peru</option>
                                          <option value="161">Mexico</option>
                                       </select>
                                    </div>
                                    <div class="form-group">
                                       <label for="huge">Provincia</label>
                                       <select name="huge" class="selectpicker" data-style="form-control" data-menu-style="">
                                          <option value="102">Buenos Aires</option>
                                          <option value="103">Catamarca</option>
                                          <option value="104">Chaco</option>
                                          <option value="105">Chubut</option>
                                          <option value="106">Cordoba</option>
                                          <option value="107">Corrientes</option>
                                          <option value="108">Capital Federal</option>
                                          <option value="109">Entre Ríos</option>
                                          <option value="110">Formosa</option>
                                          <option value="111">Jujuy</option>
                                          <option value="112">La Pampa</option>
                                          <option value="113">La Rioja</option>
                                          <option value="114">Mendoza</option>
                                          <option value="115">Misiones</option>
                                          <option value="116">Neuquén</option>
                                          <option value="117">Rio Negro</option>
                                          <option value="118">Salta</option>
                                          <option value="119">San Juan</option>
                                          <option value="120">San Luis</option>
                                          <option value="121">Santa Cruz</option>
                                          <option value="122">Santa Fe</option>
                                          <option value="123">Santiago del Estero</option>
                                          <option value="124">Tierra del Fuego</option>
                                          <option value="125">Tucumán</option>
                                       </select>
                                    </div>
                                    <div class="form-group">
                                       <label for="name">Pueblo o ciudad</label>
                                       <input type="text" placeholder="" id="name" class="form-control" name="name">
                                    </div>
                                    <div class="form-group">
                                       <label for="name">Direccion</label>
                                       <input type="text" placeholder="Calle y número" id="name" class="form-control" name="name">
                                    </div>
                                 </div>
                                 <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="map" id="map"></div>
                                 </div>
                              </div>
                           </div>
                           <!-- /Ubicación -->
                           <!-- Tus datos -->
                           <div class="tab-pane fade" id="tab3">
                              <div class="row">
                                 <div class="col-md-6">
                                    <h4 class="section-title">Tus datos</h4>
                                    <div class="form-group">
                                       <label for="name">Nombre</label>
                                       <input type="text" placeholder="" id="name" class="form-control" name="name">
                                    </div>
                                    <div class="form-group">
                                       <label for="name">Email</label>
                                       <input type="text" placeholder="Calle y número" id="name" class="form-control" name="name">
                                    </div>
                                    <div class="form-group">
                                       <label for="name">Teléfonos</label>
                                       <input type="text" placeholder="Calle y número" id="name" class="form-control" name="name">
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!-- /Tus datos -->
                           <!-- Fotos -->
                           <div class="tab-pane fade" id="tab4">
                              <div class="row">
                                 <div class="col-md-6">
                                    <h4 class="section-title">Fotos</h4>
                                    <div class="form-group">
                                       <label for="name">Fotos de la propiedad</label>
                                       <input type="file" class="form-control photo-post">
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!-- /Fotos -->
                           <!-- Planes -->
                           <div class="tab-pane fade" id="tab5">
                              <h4 class="section-title">Elige una modalidad de publicación</h4>
                              <p>
                                 Si para probar querés elegir el gratuito, luego podés subir la categoría del plan y obtener los beneficios.
                              </p>
                              <div class="row form-group product-chooser">
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
                                                   <i class="fa fa-check text-default"></i> Podés publicar 3 fotos de tu alojamiento
                                                </li>
                                                <li>
                                                   <i class="fa fa-times text-default"></i> Tu publicación aparecerá abajo en los listados
                                                </li>
                                                <li>
                                                   <i class="fa fa-times text-default"></i> Menor exposición
                                                </li>
                                                <li>
                                                   <i class="fa fa-times text-default"></i> Menor cantidad de consultas
                                                </li>
                                             </ul>
                                             <br>
                                             <div class="btn btn-fill btn-md btn-default center-block">Elegir</div>
                                          </div>
                                       </div>
                                       <!-- end card -->
                                       <input type="radio" name="product" checked="checked">
                                       <div class="clear"></div>
                                    </div>
                                 </div>
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
                                                   <i class="fa fa-check text-default"></i> Podés publicar hasta 15 fotos de tu alojamiento
                                                </li>
                                                <li>
                                                   <i class="fa fa-check text-default"></i> Tu publicación aparecerá arriba en los listados
                                                </li>
                                                <li>
                                                   <i class="fa fa-check text-default"></i> Mayor exposición
                                                </li>
                                                <li>
                                                   <i class="fa fa-check text-default"></i> Mayor cantidad de consultas
                                                </li>
                                             </ul>
                                             <br>
                                             <div class="btn btn-fill btn-md btn-success center-block">Elegir</div>
                                          </div>
                                       </div>
                                       <!-- end card -->
                                       <input type="radio" name="product">
                                       <div class="clear"></div>
                                    </div>
                                 </div>
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
                                             <span class="center-block text-center label label-primary label-md">¡Ahorras un 50%!</span>
                                             <ul class="list-unstyled list-lines">
                                                <li>
                                                   <i class="fa fa-check text-default"></i> Podés publicar hasta 15 fotos de tu alojamiento
                                                </li>
                                                <li>
                                                   <i class="fa fa-check text-default"></i> Tu publicación aparecerá arriba en los listados
                                                </li>
                                                <li>
                                                   <i class="fa fa-check text-default"></i> Mayor exposición
                                                </li>
                                                <li>
                                                   <i class="fa fa-check text-default"></i> Mayor cantidad de consultas
                                                </li>
                                             </ul>
                                             <br>
                                             <div class="btn btn-fill btn-md btn-primary center-block">Elegir</div>
                                          </div>
                                       </div>
                                       <!-- end card -->
                                       <input type="radio" name="product">
                                       <div class="clear"></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!-- /Planes -->
                           <!-- Publicar -->
                           <div class="tab-pane fade text-center" id="tab6">
                              <h2 class="section-title">¡Felicidades!</h2>
                              <p>
                                 Su alojamiento ha sido publicado.
                              </p>
                           </div>
                           <!-- /Publicar -->
                        </div>
                     </div>
                     <!--Footer button-->
                     <div class="first-footer panel-footer text-right">
                        <div class="box-inline">
                           <button class="previous btn btn-default btn-fill" type="button">Anterior</button>
                           <button class="next btn btn-default btn-success btn-fill" type="button">Guardar y Continuar</button>
                        </div>
                     </div>
                     <div class="second-footer panel-footer text-center">
                        <div class="box-inline">
                           <a href="admin.php">
                           <button disabled="" class="finish btn btn-default btn-default btn-fill" type="button" style="display: none;">Volver al panel de control</button>
                           </a>
                           <button disabled="" class="finish btn btn-default btn-default btn-fill" type="button" style="display: none;">Configurar calendario ocupacional</button>
                           <a href="detalle.php">
                           <button disabled="" class="finish btn btn-default btn-success btn-fill" type="button" style="display: none;">Ver aviso</button>
                           </a>
                        </div>
                     </div>
                  </form>
                  <!--/Termina Formulario-->
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- /Contenedor Wizard -->
</div>
<?php
   include("footer.php");
?>
<!--  Plugins -->
<script src="assets/js/wizard.js"></script>