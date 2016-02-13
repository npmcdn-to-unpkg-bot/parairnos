<?php
   include("header.php");
   ?>
<div class="wrapper product-page">
<div class="parairnos-page">
   <div class="container">
      <div class="row">
         <div class="col-md-8 col-sm-8 col-xs-12">
            <h3>
               Publica un nuevo lugar
            </h3>
         </div>
         <div class="col-md-4 col-sm-4 col-xs-12 hidden-xs hidden-sm">
            <form method="GET" action="#" class="searchbar">
               <input type="name" placeholder="Escribe tu destino..." name="query" class="form-control">
               <a class="submit" href="javascript:;">
               <i class="fa fa-search"></i>
               </a>
            </form>
         </div>
      </div>
   </div>
</div>
<div class="mainSection detailSection wizardSection">
   <div class="container">
      <div class="row">
         <div class="col-md-8">
            <div class="description-panel card">
               <h4 class="section-title">Datos de la propiedad</h4>
               <p>
                  Información con la que se presentará tu propiedad en los resultados de la búsqueda.
                  Completá tu aviso con la mayor cantidad de datos para subir las vistas y consultas sobre tu propiedad. <br><br>
               </p>
               <form method="post" id="contact-form" role="form">
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
                  <div class="row">
                     <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="form-group">
                           <label for="huge">Período mínimo de alquiler</label>
                           <select name="huge" class="selectpicker" data-style="form-control" data-menu-style="">
                              <option value="1"> Por día</option>
                              <option value="7"> Por semana</option>
                              <option value="30"> Por mes</option>
                              <option value="15"> Por quincena</option>
                           </select>
                        </div>
                     </div>
                     <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="form-group">
                           <label for="huge">Precio de referencia</label>
                           <input type="text" placeholder="" id="name" class="form-control" name="name">
                        </div>
                     </div>
                     <div class="col-xs-4 col-sm-4 col-md-4">
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
                     </div>
                  </div>
                  <div class="form-group">
                     <label class="checkbox checkbox-azure" for="checkbox2">
                     <input type="checkbox" value="" id="checkbox2" data-toggle="checkbox">
                     Wifi
                     </label>
                     <label class="checkbox checkbox-azure" for="checkbox2">
                     <input type="checkbox" value="" id="checkbox2" data-toggle="checkbox">
                     Parrilla
                     </label>
                     <label class="checkbox checkbox-azure" for="checkbox2">
                     <input type="checkbox" value="" id="checkbox2" data-toggle="checkbox">
                     Pileta
                     </label>
                     <label class="checkbox checkbox-azure" for="checkbox2">
                     <input type="checkbox" value="" id="checkbox2" data-toggle="checkbox">
                     Dvd
                     </label>
                     <label class="checkbox checkbox-azure" for="checkbox2">
                     <input type="checkbox" value="" id="checkbox2" data-toggle="checkbox">
                     Televisión
                     </label>
                     <label class="checkbox checkbox-azure" for="checkbox2">
                     <input type="checkbox" value="" id="checkbox2" data-toggle="checkbox">
                     Garage
                     </label>
                     <label class="checkbox checkbox-azure" for="checkbox2">
                     <input type="checkbox" value="" id="checkbox2" data-toggle="checkbox">
                     Aire Acondicionado
                     </label>
                     <label class="checkbox checkbox-azure" for="checkbox2">
                     <input type="checkbox" value="" id="checkbox2" data-toggle="checkbox">
                     Calefacción
                     </label>
                     <label class="checkbox checkbox-azure" for="checkbox2">
                     <input type="checkbox" value="" id="checkbox2" data-toggle="checkbox">
                     Jardín
                     </label>
                  </div>
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
                     </div>
                     <div class="col-xs-6 col-sm-6 col-md-6">
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
                     </div>
                  </div>
                  <div class="form-group">
                     <label for="name">Pueblo o ciudad</label>
                     <input type="text" placeholder="" id="name" class="form-control" name="name">
                  </div>
                  <div class="form-group">
                     <label for="name">Direccion</label>
                     <input type="text" placeholder="Calle y número" id="name" class="form-control" name="name">
                  </div>
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
                  <h4 class="section-title">Elige una modalidad de publicación</h4>
                  <p>
                     Si para probar querés elegir el gratuito, luego podés subir la categoría del plan y obtener los beneficios.
                  </p>
                  <div class="row form-group product-chooser">
                     <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="product-chooser-item propiedad-destacada selected">
                           <div class="card-price">
                              <div class="content">
                                 <h6 class="category">Publicación destacada</h6>
                                 <h4 class="text-center">
                                    Disponibles 1
                                 </h4>
                                 <ul class="list-unstyled list-lines">
                                    <li>
                                       <i class="fa fa-check"></i> Podés publicar hasta 15 fotos de tu propiedad
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
                                    <li>
                                       <i class="fa fa-check"></i> Tendrá una medalla identificatoria
                                    </li>
                                    <li>
                                       <i class="fa fa-check"></i> Podés incorporar promociones en los alquileres
                                    </li>
                                 </ul>
                              </div>
                           </div>
                           <!-- end card -->
                           <input type="radio" name="product" checked="checked">
                           <div class="clear"></div>
                        </div>
                     </div>
                     <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="product-chooser-item propiedad-simple">
                           <div class="card-price">
                              <div class="content">
                                 <h6 class="category">Publicación simple</h6>
                                 <h4 class="text-center">
                                    5 disponibles
                                 </h4>
                                 <ul class="list-unstyled list-lines">
                                    <li>
                                       <i class="fa fa-check"></i> Sólo podés publicar 3 fotos
                                    </li>
                                    <li>
                                       <i class="fa fa-check"></i> Tu publicación aparecerá al final de los listados
                                    </li>
                                    <li>
                                       <i class="fa fa-check"></i> Menor exposición
                                    </li>
                                    <li>
                                       <i class="fa fa-check"></i> Menos consultas
                                    </li>
                                    <li>
                                       <i class="fa fa-check"></i> No tiene medalla identificatoria
                                    </li>
                                    <li>
                                       <i class="fa fa-check"></i> No permite incorporar promociones
                                    </li>
                                 </ul>
                              </div>
                           </div>
                           <!-- end card -->
                           <input type="radio" name="product">
                           <div class="clear"></div>
                        </div>
                     </div>
                  </div>
                  <h4 class="section-title">Fotos</h4>
                  <div class="form-group">
                     <label for="name">Fotos de la propiedad</label>
                     <input type="file" class="form-control photo-post">
                  </div>
                  <div class="form-group">
                     <button class="btn btn-lg btn-fill btn-info">Guardar y continuar</button>
                  </div>
               </form>
            </div>
         </div>
         <div class="col-md-4">
            <div class="contact-info description-panel">
               <h5> ¿Por qué publicar tu alojamiento?</h5>
               <p class="text-muted"> 
               <div class="info info-horizontal">
                  <div class="icon icon-grey icon-sm">
                     <i class="fa fa-check"></i>
                  </div>
                  <div class="description">
                     <h4> Es seguro </h4>
                     <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui.</p>
                  </div>
               </div>
               </p>
               <div class="info info-horizontal">
                  <div class="icon icon-grey icon-sm">
                     <i class="fa fa-check"></i>
                  </div>
                  <div class="description">
                     <h4> Es fácil </h4>
                     <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti.</p>
                  </div>
               </div>
               <div class="info info-horizontal">
                  <div class="icon icon-grey icon-sm">
                     <i class="fa fa-check"></i>
                  </div>
                  <div class="description">
                     <h4> Es gratis </h4>
                     <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis.</p>
                  </div>
               </div>
               <br>
               <h5>¿Alguna pregunta?</h5>
               <p class="text-muted"> Revisa nuestra página 'Cómo funciona'<br>
               </p>
            </div>
         </div>
      </div>
   </div>
</div>
<?php
   include("footer.php");
?>