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
                  <a href="#" class="list-group-item selected"><i class="fa fa-inbox"></i>
                  Todos los recibidos</a>
                  <a href="#" class="list-group-item"> <i class="fa fa-check"></i>
                  Leídos</a>
                  <a href="#" class="list-group-item"><i class="fa fa-pause"></i>
                  No leídos</a>
                  <a href="#" class="list-group-item"><i class="fa fa-trash"></i>
                  Papelera</a>
               </div>
            </div>
         </div>
         <!-- /Menu sidebar -->
         <!-- Mensajes -->
         <div class="col-md-9">
            <div class="card">
               <div class="content">
                  <h4>Mensajes</h4>
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
                              <ul class="unstyled inbox-pagination">
                                 <li><span>1-50 de 234</span></li>
                                 <li>
                                    <a class="np-btn" href="#"><i class="fa fa-angle-left  pagination-left"></i></a>
                                 </li>
                                 <li>
                                    <a class="np-btn" href="#"><i class="fa fa-angle-right pagination-right"></i></a>
                                 </li>
                              </ul>
                           </div>
                           <!-- Opciones de mensajes -->
                           <!-- Tabla de mensajes -->
                           <div class="table-responsive">
                              <table class="table table-inbox table-hover">
                                 <tbody>
                                    <tr class="unread">
                                       <td class="inbox-small-cells">
                                          <input type="checkbox" class="mail-checkbox">
                                       </td>
                                       <td class="view-message dont-show">PHPClass</td>
                                       <td class="view-message">Added a new class: Login Class Fast Site</td>
                                       <td class="view-message text-right">9:27 AM</td>
                                    </tr>
                                    <tr class="unread">
                                       <td class="inbox-small-cells">
                                          <input type="checkbox" class="mail-checkbox">
                                       </td>
                                       <td class="view-message dont-show">Google Webmaster </td>
                                       <td class="view-message">Improve the search presence of WebSite</td>
                                       <td class="view-message text-right">15 Marzo</td>
                                    </tr>
                                    <tr class="">
                                       <td class="inbox-small-cells">
                                          <input type="checkbox" class="mail-checkbox">
                                       </td>
                                       <td class="view-message dont-show">JW Player</td>
                                       <td class="view-message">Last Chance: Upgrade to Pro for </td>
                                       <td class="view-message text-right">15 de Marzo</td>
                                    </tr>
                                    <tr class="">
                                       <td class="inbox-small-cells">
                                          <input type="checkbox" class="mail-checkbox">
                                       </td>
                                       <td class="view-message dont-show">Tim Reid, S P N</td>
                                       <td class="view-message">Boost Your Website Traffic</td>
                                       <td class="view-message text-right">1 de Marzo</td>
                                    </tr>
                                    <tr class="">
                                       <td class="inbox-small-cells">
                                          <input type="checkbox" class="mail-checkbox">
                                       </td>
                                       <td class="view-message dont-show">Freelancer.com</td>
                                       <td class="view-message">Stop wasting your visitors </td>
                                       <td class="view-message text-right">23 de Mayo</td>
                                    </tr>
                                    <tr class="">
                                       <td class="inbox-small-cells">
                                          <input type="checkbox" class="mail-checkbox">
                                       </td>
                                       <td class="view-message dont-show">WOW Slider </td>
                                       <td class="view-message">New WOW Slider v7.8 - 67% off</td>
                                       <td class="view-message text-right">14 de Marzo</td>
                                    </tr>
                                    <tr class="">
                                       <td class="inbox-small-cells">
                                          <input type="checkbox" class="mail-checkbox">
                                       </td>
                                       <td class="view-message dont-show">LinkedIn Pulse</td>
                                       <td class="view-message">The One Sign Your Co-Worker Will Stab</td>
                                       <td class="view-message text-right">19 de Febrero</td>
                                    </tr>
                                    <tr class="">
                                       <td class="inbox-small-cells">
                                          <input type="checkbox" class="mail-checkbox">
                                       </td>
                                       <td class="view-message dont-show">Drupal Community</td>
                                       <td class="view-message view-message">Welcome to the Drupal Community</td>
                                       <td class="view-message text-right">4 de Marzo</td>
                                    </tr>
                                    <tr class="">
                                       <td class="inbox-small-cells">
                                          <input type="checkbox" class="mail-checkbox">
                                       </td>
                                       <td class="view-message dont-show">Facebook</td>
                                       <td class="view-message view-message">Somebody requested a new password </td>
                                       <td class="view-message text-right">13 de Junio</td>
                                    </tr>
                                    <tr class="">
                                       <td class="inbox-small-cells">
                                          <input type="checkbox" class="mail-checkbox">
                                       </td>
                                       <td class="view-message dont-show">Skype</td>
                                       <td class="view-message view-message">Password successfully changed</td>
                                       <td class="view-message text-right">24 de Marzo</td>
                                    </tr>
                                    <tr class="">
                                       <td class="inbox-small-cells">
                                          <input type="checkbox" class="mail-checkbox">
                                       </td>
                                       <td class="view-message dont-show">Google+</td>
                                       <td class="view-message">alireza, do you know</td>
                                       <td class="view-message text-right">9 de Marzo</td>
                                    </tr>
                                    <tr class="">
                                       <td class="inbox-small-cells">
                                          <input type="checkbox" class="mail-checkbox">
                                       </td>
                                       <td class="dont-show">Zoosk </td>
                                       <td class="view-message">7 new singles we think you'll like</td>
                                       <td class="view-message text-right">14 de Mayo</td>
                                    </tr>
                                    <tr class="">
                                       <td class="inbox-small-cells">
                                          <input type="checkbox" class="mail-checkbox">
                                       </td>
                                       <td class="view-message dont-show">LinkedIn </td>
                                       <td class="view-message">Alireza: Nokia Networks, System Group and </td>
                                       <td class="view-message text-right">25 de Febrero</td>
                                    </tr>
                                    <tr class="">
                                       <td class="inbox-small-cells">
                                          <input type="checkbox" class="mail-checkbox">
                                       </td>
                                       <td class="dont-show">Facebook</td>
                                       <td class="view-message view-message">Your account was recently logged into</td>
                                       <td class="view-message text-right">14 de Marzo</td>
                                    </tr>
                                    <tr class="">
                                       <td class="inbox-small-cells">
                                          <input type="checkbox" class="mail-checkbox">
                                       </td>
                                       <td class="view-message dont-show">Twitter</td>
                                       <td class="view-message">Your Twitter password has been changed</td>
                                       <td class="view-message text-right">7 de Abril</td>
                                    </tr>
                                    <tr class="">
                                       <td class="inbox-small-cells">
                                          <input type="checkbox" class="mail-checkbox">
                                       </td>
                                       <td class="view-message dont-show">InternetSeer Website Monitoring</td>
                                       <td class="view-message">http://golddesigner.org/ Performance Report</td>
                                       <td class="view-message text-right">14 de Julio</td>
                                    </tr>
                                    <tr class="">
                                       <td class="inbox-small-cells">
                                          <input type="checkbox" class="mail-checkbox">
                                       </td>
                                       <td class="view-message dont-show">AddMe.com</td>
                                       <td class="view-message">Submit Your Website to the AddMe Business Directory</td>
                                       <td class="view-message text-right">10 de Agosto</td>
                                    </tr>
                                 </tbody>
                              </table>
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