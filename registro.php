<!-- header -->
<?php
   include("header.php");
?>
<!-- /header -->
<div class="wrapper">
<div class="registerSection" >
   <div class="container">
      <div class="row">
         <div class="col-md-6">
            <div class="planes">
               <div class="header">
                  <h2>Nuestros planes</h2>
                  <p>Conoce nuestras modalidades de publicación</p>
                  <br>
               </div>
               <div class="panel panel-default">
                  <div class="table-responsive">
                     <table class="table">
                        <thead>
                           <tr>
                              <td class="pricing-cell text-center" style="background: #F3F3F3">
                                 <div class="gratis">
                                    <h2>Gratis</h2>
                                 </div>
                              </td>
                              <td class="pricing-cell" style="background: #F3F3F3">
                                 <h4>Destacado simple</h4>
                                 <ul class="list-unstyled icon-bullets">
                                    <li>
                                       <p>Podés publicar 3 fotos de tu alojamiento</p>
                                    </li>
                                 </ul>
                              </td>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td class="text-center">
                                 <div class="trimestral">
                                    <h2><small>US$</small>30</h2>
                                    <p><small>/trimestral</small></p>
                                 </div>
                              </td>
                              <td>
                                 <h4 class="text-success">Destacado Trimestral</h4>
                                 <ul class="list-unstyled icon-bullets">
                                    <li>
                                       <p>Podés publicar hasta 15 fotos de tu alojamiento</p>
                                    </li>
                                    <li>
                                       <p>Tu publicación aparecerá arriba en los listados</p>
                                    </li>
                                    <li>
                                       <p>Mayor exposición</p>
                                    </li>
                                    <li>
                                       <p>Mayor cantidad de consultas</p>
                                    </li>
                                 </ul>
                              </td>
                           </tr>
                           <tr>
                              <td class="text-center" style="background: #F3F3F3">
                                 <div class="anual">
                                    <h2><small>US$</small>60</h2>
                                    <p><small>/anual</small></p>
                                 </div>
                              </td>
                              <td style="background: #F3F3F3">
                                 <h4 class="text-primary" >Destacado Anual</h4>
                                 <ul class="list-unstyled icon-bullets">
                                    <li>
                                       <p>Podés publicar hasta 15 fotos de tu alojamiento</p>
                                    </li>
                                    <li>
                                       <p>Tu publicación aparecerá arriba en los listados</p>
                                    </li>
                                    <li>
                                       <p>Mayor exposición</p>
                                    </li>
                                    <li>
                                       <p>Mayor cantidad de consultas</p>
                                    </li>
                                    <li>
                                       <p><strong>Ahorras un 50%</strong></p>
                                    </li>
                                 </ul>
                              </td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-offset-1 col-xs-12 col-sm-8 col-md-5">
            <div class="description-panel register">
               <form data-toggle="validator" data-disable="false" role="form">
                  <div class="header">
                     <h3>Crea una cuenta y reciba consultas de su alojamiento hoy</h3>
                     <div>
                        <p>
                           Para poder publicar tenés que ingresar a tu cuenta, o crear una cuenta nueva. 
                           Por favor, rellena los siguientes campos para crear una cuenta:
                        </p>
                        <br>
                     </div>
                  </div>
                  <div class="form-group">
                     <div class="left-inner-addon">
                        <i class="ico icon-user"></i> 
                        <input data-error="Ingresa un nombre" required type="text" tabindex="1" placeholder="Tu nombre (*)" class="form-control input-md" id="first_name" name="first_name">
                     </div>
                     <div class="help-block with-errors fade in"></div>
                  </div>
                  <div class="form-group">
                     <div class="left-inner-addon">
                        <i class="ico icon-user"></i> 
                        <input type="text" tabindex="2" placeholder="Tu apellido" class="form-control input-md" id="last_name" name="last_name">
                     </div>
                  </div>
                  <div class="form-group">
                     <div class="left-inner-addon">
                        <i class="ico icon-phone2"></i>
                        <input data-error="Teléfono inválido" type="number" tabindex="3" placeholder="Teléfono" class="form-control input-md" id="display_name" name="display_name"> 
                     </div>
                     <div class="help-block with-errors fade in"></div>
                  </div>
                  <div class="form-group">
                     <div class="left-inner-addon">
                        <i class="ico icon-envelope"></i>
                        <input data-error="Bruh, la dirección de correo es inválida" required type="email" tabindex="4" placeholder="Email (*)" class="form-control input-md" id="email" name="email">
                     </div>
                     <div class="help-block with-errors fade in"></div>
                  </div>
                  <div class="form-group">
                     <div class="left-inner-addon">
                        <i class="ico icon-lock"></i>
                        <input data-error="Asegúrate ingresar 6 carácteres" required data-minlength="6" type="password" tabindex="5" placeholder="Contraseña (*)" class="form-control input-md" id="password" name="password">
                     </div>
                     <span class="help-block with-errors fade in"></span>
                  </div>
                  <div class="form-group">
                     <div class="left-inner-addon">
                        <i class="ico icon-lock"></i>
                        <input data-error="La contraseñas no coinciden" data-match="#password" required data-minlength="6" type="password" tabindex="6" placeholder="Confirmar contraseña (*)" class="form-control input-md" id="password_confirmation" name="password_confirmation">
                     </div>
                     <span class="help-block with-errors fade in"></span>
                  </div>
                  <div class="row">
                     <div class="col-xs-12">
                        <button class="btn btn-primary btn-block btn-lg btn-fill" type="submit">Quiero registrarme</button>
                     </div>
                  </div>
                  <br>
                  <p class="text-center"> ¿Ya tienes una cuenta? <a href="ingresar.php" title="Forgot password">Inicia sesión</a></p>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- jQuery y Bootstrap -->
<script src="https://code.jquery.com/jquery-2.2.0.js"></script>
<script src="assets/js/jquery-ui-1.10.4.custom.min.js" type="text/javascript"></script>
<script src="assets/js/datepicker/jquery.plugin.js"></script>
<script src="assets/js/datepicker/jquery.datepick.js"></script>
<script src="assets/js/datepicker/jquery.datepick-es-AR.js"></script>
<script src="bootstrap3/js/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugins -->
<script src="assets/js/gsdk-checkbox.js"></script>
<script src="assets/js/gsdk-morphing.js"></script>
<script src="assets/js/gsdk-radio.js"></script>
<script src="assets/js/star-rating.js"></script>
<script src="assets/js/star-rating_LOCALE_ES.js"></script>
<script src="assets/js/bootstrap-select.js"></script>
<script src="assets/js/jquery.tagsinput.js"></script>
<script src="assets/js/jquery.offcanvas.min.js"></script>
<script src="assets/js/retina.min.js"></script>
<script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/velocity/1.2.2/velocity.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/velocity/1.2.2/velocity.ui.min.js"></script>
<script type="text/javascript" src="//maps.google.com/maps/api/js?sensor=false"></script> 
<script src="https://npmcdn.com/flickity@1.1/dist/flickity.pkgd.min.js"></script>
<!--  Activaciones JS -->
<script src="assets/js/get-shit-done.js"></script>
<script type="text/javascript">
   function autofocus() {
      document.getElementById('first_name').focus();
   }
   window.onload = autofocus;
</script>