<!doctype html>
<html lang="es">
   <head>
      <meta charset="utf-8" />
      <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
      <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
      <title>Parairnos</title>
      <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
      <meta name="viewport" content="width=device-width" />
      <link href="bootstrap3/css/bootstrap.min.css" rel="stylesheet" />
      <link href="assets/css/gsdk.css" rel="stylesheet"/>
      <link href="assets/css/star-rating.min.css" rel="stylesheet"/>
      <link href="assets/js/datepicker/parairnos.datepick.css" rel="stylesheet" />
      <link href="assets/css/parairnos.css" rel="stylesheet" />
      <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
      <link href='assets/fonts/proxima-nova/proxima-nova.css' rel='stylesheet' type='text/css'>
      <link href="assets/fonts/linearicons/style.css" rel="stylesheet" />
      <link href="assets/css/parairnos-icon.css" rel="stylesheet" />
      <link href="assets/css/jquery.offcanvas.min.css" rel="stylesheet" />
      <link href="assets/js/master-slider/masterslider/skins/default/style.css" rel="stylesheet" type="text/css" >
      <link href="assets/js/master-slider/masterslider/style/masterslider.css" rel="stylesheet" type="text/css" >
      <link rel="stylesheet" href="//blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
      <link rel="stylesheet" href="https://raw.githubusercontent.com/blueimp/Bootstrap-Image-Gallery/master/css/bootstrap-image-gallery.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/formvalidation/0.6.1/css/formValidation.css">
   </head>
   
   <?php $current_page = basename($_SERVER['PHP_SELF']); ?>
   <body <?php 
      if ( $current_page == "registro.php" ){ 
        echo "class='register-page'"; } 
        elseif ( $current_page == "ingresar.php" ){ 
        echo "class='login-page'"; }
        ?>>
      <!-- Header -->
      <header>
         <nav class="navbar navbar-default navbar-burger navbar-fixed-top" role="navigation">
            <div class="container">
               <!-- Brand and toggle get grouped for better mobile display -->
               <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
                  <span class="sr-only">Activar navegación</span>
                  <span class="icon-bar bar1"></span>
                  <span class="icon-bar bar2"></span>
                  <span class="icon-bar bar3"></span>
                  </button>
                  <?php 
                  if ( $current_page != "home.php" ){ 
                    echo "<a href='#search' class='menu-link btn btn-default pull-right hidden-lg hidden-md'><i class='fa fa-search'></i></a>"; } 
                    ?>
                  <a class="navbar-brand" href="home.php"><img class="img-responsive" src="assets/img/logo.png" alt=""></a>
               </div>
               <nav id="menu" role="navigation" class="hidden-md hidden-sm hidden-lg">
                  <form method="GET" action="#" class="searchbar">
                     <input type="name" placeholder="Escribe tu destino..." name="query" class="form-control">
                     <a class="submit" href="javascript:;">
                     <i class="fa fa-search"></i>
                     </a>
                  </form>
               </nav>
               <!-- Collect the nav links, forms, and other content for toggling -->
               <div class="collapse navbar-collapse" id="navbar-collapse-1">
                  <ul class="nav navbar-nav navbar-right">
                     
                     <li class="dropdown country-dropdown">
                        <a href="#" class="dropdown-toggle " data-toggle="dropdown"> 
                        <img src="assets/img/flags/CL.png"/>
                        <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                           <li><a href="#"><img src="assets/img/flags/AR.png"/> Argentina</a></li>
                           <li><a href="#"><img src="assets/img/flags/BR.png"/> Brasil</a></li>
                           <li><a href="#"><img src="assets/img/flags/CO.png"/> Colombia</a></li>
                           <li><a href="#"><img src="assets/img/flags/SV.png"/> Uruguay</a></li>
                        </ul>
                     </li>
                     <li class="dropdown language-dropdown">
                        <a href="#" class="dropdown-toggle " data-toggle="dropdown"> 
                        Español
                        <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                           <li><a href="#">Español</a></li>
                           <li><a href="#">English</a></li>
                           <li><a href="#">Portuguese</a></li>
                        </ul>
                     </li>
                     <li><a href="ingresar.php">Entrar</a></li>
                     <li>
                        <form method="link" action="registro.php"><button class="btn btn-round btn-fill btn-success">Publicar gratis</button></form>
                     </li>
                  </ul>
               </div>
               <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
         </nav>
      </header>
      <!-- /Header -->