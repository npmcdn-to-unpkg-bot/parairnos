<!-- Header -->
<?php
include("header.php");
?>
<!-- /Header -->

<!-- Ingresar a mi cuenta -->
<div class="product-page">
  <div class="registerSection" >
     <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-3 col-md-offset-4">
            <div class="login card description-panel ">
              <form role="form">
              <h4>Ingresar a mi cuenta</h4>
              <hr>
              <div class="form-group">
                <input type="email" tabindex="1" placeholder="Email" class="form-control input-lg" id="email" name="email">
              </div>
              
              <div class="form-group">
                 <input type="password" tabindex="2" placeholder="Contraseña" class="form-control input-lg" id="password" name="password">
              </div>

              <label class="checkbox pull-left" for="checkbox1">
                 <input type="checkbox" value="" id="checkbox1" data-toggle="checkbox">
                   Recordarme
              </label>
              <div class="clearfix"></div>

              <hr>
              <div class="row">
                <div class="col-md-12"><a href="admin.php" class="btn btn-primary btn-block btn-lg btn-fill" href="#">Ingresar a mi cuenta</a></div>
              </div>
                <br>
                <p class="text-center"><a href="#" title="Forgot password">
                    ¿Olvidaste tu contraseña?</a>
                 </p>
            </form>
            </div>  
          </div>
        </div> 
     </div>
  </div>
</div>
<!-- /Ingresar a mi cuenta -->
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
<script src="assets/js/jquery.offcanvas.min.js"></script>
<script src="assets/js/retina.min.js"></script>
<script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/velocity/1.2.2/velocity.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/velocity/1.2.2/velocity.ui.min.js"></script>
<script type="text/javascript" src="//maps.google.com/maps/api/js?sensor=false"></script> 
<script src="https://npmcdn.com/flickity@1.1/dist/flickity.pkgd.min.js"></script>
<!--  Activaciones JS -->
<script src="assets/js/get-shit-done.js"></script>

<!-- Activando foco en Input -->
<script type="text/javascript">
   function autofocus() {
      document.getElementById('email').focus();
   }
   window.onload = autofocus;
</script>
<!-- /Activando foco en Input -->