<?php
   include("header.php");
?>
<div class="wrapper">
<!-- Contenedor admin -->
<div class="admin-section error-page">
   <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="text-center">
                <h2>
                    Oops!</h2>
                <h1>
                    Error 404</h1>
                <p>
                    Lo sentimos, ha surgido un error, la página solicitada no ha sido encontrada!
                </p>

                <p>
                  <a href="home.php" class="btn btn-primary btn-lg btn-fill">
                  <i class="fa fa-home"></i> Volver a Inicio </a>

                  <a href="mailto:soporte@parairnos.com" class="btn btn-default btn-lg btn-fill">
                  <i class="fa fa-envelope"></i> Contactar a soporte técnico </a>
               </p>
            </div>
        </div>
    </div>
</div>
</div>
<!-- /Contenedor admin -->
<?php
include("footer.php");
?>
<!-- /Llamada Bootstrap Rating -->
<script>
   jQuery(document).ready(function () {
       // initialize with defaults
       $("#input-id").rating();
   
       // with plugin options
       $("#input-id").rating({'size':'lg'});
   });
</script>
<!-- /Llamada Bootstrap Rating -->