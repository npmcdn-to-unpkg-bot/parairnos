<?php
   include("header.php");
   ?>
<div class="wrapper">
<div class="parairnos-page">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="row">
               <div class="col-md-8">
                  <h3>
                     Arriendos en Santiago
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
   </div>
</div>
<div class="searchSection mainSection">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <ol class="breadcrumb">
               <li><a href="home.php#">Inicio</a></li>
               <li><a href="#">Chile</a></li>
               <li class="active">Santiago de Chile</li>
            </ol>
         </div>
      </div>
      <div class="row">
         <div class="col-xs-6  col-md-6">
            <button class="visible-xs visible-sm btn filtrarResultado js-toggle-offcanvas">
            Filtrar resultados
            </button> 
         </div>
         <div class="col-xs-6 col-md-6 hidden-lg hidden-md hidden-sm">
                  <form class="form-inline">
                     <div class="form-group">
                        <select name="huge" class="selectpicker" data-style="form-control" data-menu-style="">
                           <option disabled selected> Ordenar por</option>
                           <option value="1">Fecha </option>
                           <option value="1">Precio</option>
                        </select>
                     </div>
                  </form>
         </div>
      </div>
      <div class="row">
         <div class="col-lg-3 col-md-4 hidden-xs hidden-sm">
            <!-- inicia filtros -->
            <?php
               include("filtros.php");
               ?>
            <!-- termina filtros -->
         </div>
         <div class="col-lg-9 col-md-8 avisos-destacados">
            <div class="row selectFilters">
               <div class="col-lg-8 col-md-6">
                  <h5 class="lead"><strong class="text-info">351</strong> resultados encontrados</h5>
               </div>
               <div class="col-lg-4 col-md-6 hidden-xs">
                  <form class="form-inline pull-right">
                     <div class="form-group">
                        <div class="list-group list-group-horizontal">
                           <a rel="tooltip" title="Vertical" href="#" data-href="contenido2.php" class="sort1 list-group-item "><i class="fa fa-th-list fa-white"></i></a>
                           <a rel="tooltip" title="Horizontal" href="#" data-href="contenido1.php" class="sort2 list-group-item"><i class="fa fa-th fa"></i></a>
                        </div>
                     </div>
                     <div class="form-group">
                        <select name="huge" class="selectpicker ordernarPor">
                           <option disabled selected> Ordenar por</option>
                           <option value="1">Fecha </option>
                           <option value="1">Precio</option>
                        </select>
                     </div>
                  </form>
               </div>
            </div>
            <div class="results-content">
               <div class="card card-horizontal">
                  <div class="row">
                     <div class="col-lg-3 col-md-3">
                        <div class="image">
                           <img src="assets/img/hotel1/shot.jpg"/>     
                        </div>
                        <div class="destacado-ad">
                        <span class="label label-warning label-fill">Destacado</span>
                        </div>
                     </div>
                     <div class="col-lg-7 col-md-6">
                        <div class="content">
                           <a class="card-link" href="detalle.php">
                              <h4 class="title text-info">Arriendo departamento Termas de Chillán </h4>
                           </a>
                           <p class="category text-left">
                              <i class="fa fa-star text-warning"></i>
                              <i class="fa fa-star text-warning"></i>
                              <i class="fa fa-star text-warning"></i>
                              <i class="fa fa-star text-warning"></i>
                              <i class="fa fa-star-o "></i>
                              <span class="review-total">(12)</span>
                           </p>
                           <a class="card-link" href="detalle.php">
                              <p class="description hidden-xs">Departamento para 6 personas en Chillán, Chillán, Región del Bío Bío, Chile</p>
                           </a>
                           <ul class="list-inline amenities">
                              <li> <span class="parairnos-icon icono-125"></span> 3 Habitaciones</li>
                              <li> <span class="parairnos-icon icono-008"></span> 2 Baños</li>
                              <li> <span class="parairnos-icon icono-023"></span> 6 Capacidad</li>
                           </ul>
                        </div>
                     </div>
                     <div class="col-lg-2 col-md-3">
                        <div class="price-content content text-right">
                           <span class="price text-success"> 
                           $ 22,000
                           </span>
                           <div class="price-sub">Por día</div>
                           <!-- <img src="assets/img/destacado.png" alt=""> -->
                        </div>
                     </div>
                  </div>
               </div>
               <!-- termina tarjeta -->
               <div class="card card-horizontal">
                  <div class="row">
                     <div class="col-lg-3 col-md-3">
                        <div class="image">
                           <img src="assets/img/hotel2/shot.jpg"/>     
                        </div>
                        <div class="destacado-ad">
                        <span class="label label-warning label-fill">Destacado</span>
                        </div>
                     </div>
                     <div class="col-lg-7 col-md-6">
                        <div class="content">
                           <a class="card-link" href="detalle.php">
                              <h4 class="title text-info">Alojamiento en el Centro de Santiago departamentos 1 y 2 Dormitorios </h4>
                           </a>
                           <p class="category text-left">
                              <i class="fa fa-star text-warning"></i>
                              <i class="fa fa-star text-warning"></i>
                              <i class="fa fa-star text-warning"></i>
                              <i class="fa fa-star-o"></i>
                              <i class="fa fa-star-o "></i>
                              <span class="review-total">(12)</span>
                           </p>
                           <a class="card-link" href="detalle.php">
                              <p class="description hidden-xs">Departamento en arriendo para 5 personas en Eleuterio Ramírez, Santiago, Santiago, Región Metropolitana, Chile</p>
                           </a>
                           <ul class="list-inline amenities">
                              <li> <span class="parairnos-icon icono-125"></span> 3 Habitaciones</li>
                              <li> <span class="parairnos-icon icono-008"></span> 2 Baños</li>
                              <li> <span class="parairnos-icon icono-023"></span> 6 Capacidad</li>
                           </ul>
                        </div>
                     </div>
                     <div class="col-lg-2 col-md-3">
                        <div class="price-content content text-right">
                           <span class="price text-success"> 
                           $ 36,000
                           </span>
                           <div class="price-sub">Por día</div>
                           <!-- <img src="assets/img/destacado.png" alt=""> -->
                        </div>
                     </div>
                  </div>
               </div>
               <!-- termina tarjeta -->
               <div class="card card-horizontal">
                  <div class="row">
                     <div class="col-lg-3 col-md-3">
                        <div class="image">
                           <img src="assets/img/hotel3/shot.jpg"/>     
                        </div>
                        <div class="destacado-ad">
                        <span class="label label-warning label-fill">Destacado</span>
                        </div>
                     </div>
                     <div class="col-lg-7 col-md-6">
                        <div class="content">
                           <a class="card-link" href="detalle.php">
                              <h4 class="title text-info">Arriendo departamento Termas de Chillán </h4>
                           </a>
                           <p class="category text-left">
                              <i class="fa fa-star text-warning"></i>
                              <i class="fa fa-star text-warning"></i>
                              <i class="fa fa-star-o"></i>
                              <i class="fa fa-star-o"></i>
                              <i class="fa fa-star-o "></i>
                              <span class="review-total">(6)</span>
                           </p>
                           <a class="card-link" href="detalle.php">
                              <p class="description hidden-xs">Departamento para 6 personas en Chillán, Chillán, Región del Bío Bío, Chile</p>
                           </a>
                           <ul class="list-inline amenities">
                              <li> <span class="parairnos-icon icono-125"></span> 3 Habitaciones</li>
                              <li> <span class="parairnos-icon icono-008"></span> 2 Baños</li>
                              <li> <span class="parairnos-icon icono-023"></span> 6 Capacidad</li>
                           </ul>
                        </div>
                     </div>
                     <div class="col-lg-2 col-md-3">
                        <div class="price-content content text-right">
                           <span class="price text-success"> 
                           $ 22,000
                           </span>
                           <div class="price-sub">Por día</div>
                           <!-- <img src="assets/img/destacado.png" alt=""> -->
                        </div>
                     </div>
                  </div>
               </div>
               <!-- termina tarjeta -->
               <div class="card card-horizontal">
                  <div class="row">
                     <div class="col-lg-3 col-md-3">
                        <div class="image">
                           <img src="assets/img/hotel4/shot.jpg"/>
                        </div>
                        <div class="destacado-ad">
                        <span class="label label-warning label-fill">Destacado</span>
                        </div>
                     </div>
                     <div class="col-lg-7 col-md-6">
                        <div class="content">
                           <a class="card-link" href="#">
                              <h4 class="title text-info">Arriendo departamento Termas de Chillán </h4>
                           </a>
                           <p class="category text-left">
                              <i class="fa fa-star text-warning"></i>
                              <i class="fa fa-star text-warning"></i>
                              <i class="fa fa-star text-warning"></i>
                              <i class="fa fa-star text-warning"></i>
                              <i class="fa fa-star text-warning "></i>
                              <span class="review-total">(16)</span>
                           </p>
                           <a class="card-link" href="#">
                              <p class="description hidden-xs">Departamento para 6 personas en Chillán, Chillán, Región del Bío Bío, Chile</p>
                           </a>
                           <ul class="list-inline amenities">
                              <li> <span class="parairnos-icon icono-125"></span> 3 Habitaciones</li>
                              <li> <span class="parairnos-icon icono-008"></span> 2 Baños</li>
                              <li> <span class="parairnos-icon icono-023"></span> 6 Capacidad</li>
                           </ul>
                        </div>
                     </div>
                     <div class="col-lg-2 col-md-3">
                        <div class="price-content content text-right">
                           <span class="price text-success"> 
                           $ 22,000
                           </span>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- termina tarjeta -->
               <div class="card card-horizontal">
                  <div class="row">
                     <div class="col-lg-3 col-md-3">
                        <div class="image">
                           <img src="assets/img/hotel1/shot.jpg"/>
                        </div>
                        <div class="destacado-ad">
                        <span class="label label-warning label-fill">Destacado</span>
                        </div>
                     </div>
                     <div class="col-lg-7 col-md-6">
                        <div class="content">
                           <a class="card-link" href="#">
                              <h4 class="title text-info">Arriendo departamento Termas de Chillán </h4>
                           </a>
                           <p class="category text-left">
                              <i class="fa fa-star text-warning"></i>
                              <i class="fa fa-star text-warning"></i>
                              <i class="fa fa-star text-warning"></i>
                              <i class="fa fa-star text-warning"></i>
                              <i class="fa fa-star-o "></i>
                              <span class="review-total">(17)</span>
                           </p>
                           <a class="card-link" href="#">
                              <p class="description hidden-xs">Departamento para 6 personas en Chillán, Chillán, Región del Bío Bío, Chile</p>
                           </a>
                           <ul class="list-inline amenities">
                              <li> <span class="parairnos-icon icono-125"></span> 3 Habitaciones</li>
                              <li> <span class="parairnos-icon icono-008"></span> 2 Baños</li>
                              <li> <span class="parairnos-icon icono-023"></span> 6 Capacidad</li>
                           </ul>
                        </div>
                     </div>
                     <div class="col-lg-2 col-md-3">
                        <div class="price-content content text-right">
                           <span class="price text-success"> 
                           $ 22,000
                           </span>
                           <div class="price-sub">Por día</div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- termina tarjeta -->
               <div class="card card-horizontal">
                  <div class="row">
                     <div class="col-lg-3 col-md-3">
                        <div class="image">
                           <img src="assets/img/hotel2/shot.jpg"/>     
                        </div>
                     </div>
                     <div class="col-lg-7 col-md-6">
                        <div class="content">
                           <a class="card-link" href="#">
                              <h4 class="title text-info">Alojamiento en el Centro de Santiago departamentos 1 y 2 Dormitorios </h4>
                           </a>
                           <p class="category text-left">
                              <i class="fa fa-star text-warning"></i>
                              <i class="fa fa-star text-warning"></i>
                              <i class="fa fa-star text-warning"></i>
                              <i class="fa fa-star text-warning"></i>
                              <i class="fa fa-star-o "></i>
                              <span class="review-total">(27)</span>
                           </p>
                           <a class="card-link" href="#">
                              <p class="description hidden-xs">Departamento en arriendo para 5 personas en Eleuterio Ramírez, Santiago, Santiago, Región Metropolitana, Chile</p>
                           </a>
                           <ul class="list-inline amenities">
                              <li> <span class="parairnos-icon icono-125"></span> 3 Habitaciones</li>
                              <li> <span class="parairnos-icon icono-008"></span> 2 Baños</li>
                              <li> <span class="parairnos-icon icono-023"></span> 6 Capacidad</li>
                           </ul>
                        </div>
                     </div>
                     <div class="col-lg-2 col-md-3">
                        <div class="price-content content text-right">
                           <span class="price text-success"> 
                           $ 36,000
                           </span>
                           <div class="price-sub">Por día</div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- termina tarjeta -->
               <div class="card card-horizontal">
                  <div class="row">
                     <div class="col-lg-3 col-md-3">
                        <div class="image">
                           <img src="assets/img/hotel3/shot.jpg"/>  
                        </div>
                     </div>
                     <div class="col-lg-7 col-md-6">
                        <div class="content">
                           <a class="card-link" href="#">
                              <h4 class="title text-info">Arriendo departamento Termas de Chillán </h4>
                           </a>
                           <p class="category text-left">
                              <i class="fa fa-star text-warning"></i>
                              <i class="fa fa-star text-warning"></i>
                              <i class="fa fa-star text-warning"></i>
                              <i class="fa fa-star text-warning"></i>
                              <i class="fa fa-star-o "></i>
                              <span class="review-total">(19)</span>
                           </p>
                           <a class="card-link" href="#">
                              <p class="description hidden-xs">Departamento para 6 personas en Chillán, Chillán, Región del Bío Bío, Chile</p>
                           </a>
                           <ul class="list-inline amenities">
                              <li> <span class="parairnos-icon icono-125"></span> 3 Habitaciones</li>
                              <li> <span class="parairnos-icon icono-008"></span> 2 Baños</li>
                              <li> <span class="parairnos-icon icono-023"></span> 6 Capacidad</li>
                           </ul>
                        </div>
                     </div>
                     <div class="col-lg-2 col-md-3">
                        <div class="price-content content text-right">
                           <span class="price text-success "> 
                           $ 22,000
                           </span>
                           <div class="price-sub">Por día</div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- termina tarjeta -->
               <div class="card card-horizontal">
                  <div class="row">
                     <div class="col-lg-3 col-md-3">
                        <div class="image">
                           <img src="assets/img/hotel4/shot.jpg"/>
                        </div>
                     </div>
                     <div class="col-lg-7 col-md-6">
                        <div class="content">
                           <a class="card-link" href="#">
                              <h4 class="title text-info">Arriendo departamento Termas de Chillán </h4>
                           </a>
                           <p class="category text-left">
                              <i class="fa fa-star text-warning"></i>
                              <i class="fa fa-star text-warning"></i>
                              <i class="fa fa-star text-warning"></i>
                              <i class="fa fa-star text-warning"></i>
                              <i class="fa fa-star-o "></i>
                              <span class="review-total">(11)</span>
                           </p>
                           <a class="card-link" href="#">
                              <p class="description hidden-xs">Departamento para 6 personas en Chillán, Chillán, Región del Bío Bío, Chile</p>
                           </a>
                           <ul class="list-inline amenities">
                              <li> <span class="parairnos-icon icono-125"></span> 3 Habitaciones</li>
                              <li> <span class="parairnos-icon icono-008"></span> 2 Baños</li>
                              <li> <span class="parairnos-icon icono-023"></span> 6 Capacidad</li>
                           </ul>
                        </div>
                     </div>
                     <div class="col-lg-2 col-md-3">
                        <div class="price-content content text-right">
                           <span class="price text-success"> 
                           $ 22,000
                           </span>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- termina tarjeta -->
               <div class="card card-horizontal">
                  <div class="row">
                     <div class="col-lg-3 col-md-3">
                        <div class="image">
                           <img src="assets/img/hotel1/shot.jpg"/>
                        </div>
                     </div>
                     <div class="col-lg-7 col-md-6">
                        <div class="content">
                           <a class="card-link" href="#">
                              <h4 class="title text-info">Arriendo departamento Termas de Chillán </h4>
                           </a>
                           <p class="category text-left">
                              <i class="fa fa-star text-warning"></i>
                              <i class="fa fa-star text-warning"></i>
                              <i class="fa fa-star text-warning"></i>
                              <i class="fa fa-star text-warning"></i>
                              <i class="fa fa-star-o "></i>
                              <span class="review-total">(19)</span>
                           </p>
                           <a class="card-link" href="#">
                              <p class="description hidden-xs">Departamento para 6 personas en Chillán, Chillán, Región del Bío Bío, Chile</p>
                           </a>
                           <ul class="list-inline amenities">
                              <li> <span class="parairnos-icon icono-125"></span> 3 Habitaciones</li>
                              <li> <span class="parairnos-icon icono-008"></span> 2 Baños</li>
                              <li> <span class="parairnos-icon icono-023"></span> 6 Capacidad</li>
                           </ul>
                        </div>
                     </div>
                     <div class="col-lg-2 col-md-3">
                        <div class="price-content content text-right">
                           <span class="price text-success"> 
                           $ 22,000
                           </span>
                           <div class="price-sub">Por día</div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- termina tarjeta -->
               <div class="card card-horizontal">
                  <div class="row">
                     <div class="col-lg-3 col-md-3">
                        <div class="image">
                           <img src="assets/img/hotel2/shot.jpg"/>    
                        </div>
                     </div>
                     <div class="col-lg-7 col-md-6">
                        <div class="content">
                           <a class="card-link" href="#">
                              <h4 class="title text-info">Alojamiento en el Centro de Santiago departamentos 1 y 2 Dormitorios </h4>
                           </a>
                           <p class="category text-left">
                              <i class="fa fa-star text-warning"></i>
                              <i class="fa fa-star text-warning"></i>
                              <i class="fa fa-star text-warning"></i>
                              <i class="fa fa-star text-warning"></i>
                              <i class="fa fa-star-o "></i>
                              <span class="review-total">(12)</span>
                           </p>
                           <a class="card-link" href="#">
                              <p class="description hidden-xs">Departamento en arriendo para 5 personas en Eleuterio Ramírez, Santiago, Santiago, Región Metropolitana, Chile</p>
                           </a>
                           <ul class="list-inline amenities">
                              <li> <span class="parairnos-icon icono-125"></span> 3 Habitaciones</li>
                              <li> <span class="parairnos-icon icono-008"></span> 2 Baños</li>
                              <li> <span class="parairnos-icon icono-023"></span> 6 Capacidad</li>
                           </ul>
                        </div>
                     </div>
                     <div class="col-lg-2 col-md-3">
                        <div class="price-content content text-right">
                           <span class="price text-success"> 
                           $ 36,000
                           </span>
                           <div class="price-sub">Por día</div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- termina tarjeta -->
               <div class="card card-horizontal">
                  <div class="row">
                     <div class="col-lg-3 col-md-3">
                        <div class="image">
                           <img src="assets/img/hotel3/shot.jpg"/>     
                        </div>
                     </div>
                     <div class="col-lg-7 col-md-6">
                        <div class="content">
                           <a class="card-link" href="#">
                              <h4 class="title text-info">Arriendo departamento Termas de Chillán </h4>
                           </a>
                           <p class="category text-left">
                              <i class="fa fa-star text-warning"></i>
                              <i class="fa fa-star text-warning"></i>
                              <i class="fa fa-star text-warning"></i>
                              <i class="fa fa-star text-warning"></i>
                              <i class="fa fa-star-o "></i>
                              <span class="review-total">(16)</span>
                           </p>
                           <a class="card-link" href="#">
                              <p class="description hidden-xs">Departamento para 6 personas en Chillán, Chillán, Región del Bío Bío, Chile</p>
                           </a>
                           <ul class="list-inline amenities">
                              <li> <span class="parairnos-icon icono-125"></span> 3 Habitaciones</li>
                              <li> <span class="parairnos-icon icono-008"></span> 2 Baños</li>
                              <li> <span class="parairnos-icon icono-023"></span> 6 Capacidad</li>
                           </ul>
                        </div>
                     </div>
                     <div class="col-lg-2 col-md-3">
                        <div class="price-content content text-right">
                           <span class="price text-success"> 
                           $ 22,000
                           </span>
                           <div class="price-sub">Por día</div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- termina tarjeta -->
               <div class="card card-horizontal">
                  <div class="row">
                     <div class="col-lg-3 col-md-3">
                        <div class="image">
                           <img src="assets/img/hotel4/shot.jpg"/>
                        </div>
                     </div>
                     <div class="col-lg-7 col-md-6">
                        <div class="content">
                           <a class="card-link" href="#">
                              <h4 class="title text-info">Arriendo departamento Termas de Chillán </h4>
                           </a>
                           <p class="category text-left">
                              <i class="fa fa-star text-warning"></i>
                              <i class="fa fa-star text-warning"></i>
                              <i class="fa fa-star text-warning"></i>
                              <i class="fa fa-star text-warning"></i>
                              <i class="fa fa-star-o "></i>
                              <span class="review-total">(62)</span>
                           </p>
                           <a class="card-link" href="#">
                              <p class="description hidden-xs">Departamento para 6 personas en Chillán, Chillán, Región del Bío Bío, Chile</p>
                           </a>
                           <ul class="list-inline amenities">
                              <li> <span class="parairnos-icon icono-125"></span> 3 Habitaciones</li>
                              <li> <span class="parairnos-icon icono-008"></span> 2 Baños</li>
                              <li> <span class="parairnos-icon icono-023"></span> 6 Capacidad</li>
                           </ul>
                        </div>
                     </div>
                     <div class="col-lg-2 col-md-3">
                        <div class="price-content content text-right">
                           <span class="price text-success"> 
                           $ 22,000
                           </span>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- termina tarjeta -->
               <div class="card card-horizontal">
                  <div class="row">
                     <div class="col-lg-3 col-md-3">
                        <div class="image">
                           <img src="assets/img/hotel1/shot.jpg"/>
                        </div>
                     </div>
                     <div class="col-lg-7 col-md-6">
                        <div class="content">
                           <a class="card-link" href="#">
                              <h4 class="title text-info">Arriendo departamento Termas de Chillán </h4>
                           </a>
                           <p class="category text-left">
                              <i class="fa fa-star text-warning"></i>
                              <i class="fa fa-star text-warning"></i>
                              <i class="fa fa-star text-warning"></i>
                              <i class="fa fa-star text-warning"></i>
                              <i class="fa fa-star-o "></i>
                              <span class="review-total">(19)</span>
                           </p>
                           <a class="card-link" href="#">
                              <p class="description hidden-xs">Departamento para 6 personas en Chillán, Chillán, Región del Bío Bío, Chile</p>
                           </a>
                           <ul class="list-inline amenities">
                              <li> <span class="parairnos-icon icono-125"></span> 3 Habitaciones</li>
                              <li> <span class="parairnos-icon icono-008"></span> 2 Baños</li>
                              <li> <span class="parairnos-icon icono-023"></span> 6 Capacidad</li>
                           </ul>
                        </div>
                     </div>
                     <div class="col-lg-2 col-md-3">
                        <div class="price-content content text-right">
                           <span class="price text-success"> 
                           $ 22,000
                           </span>
                           <div class="price-sub">Por día</div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- termina tarjeta -->
               <div class="card card-horizontal">
                  <div class="row">
                     <div class="col-lg-3 col-md-3">
                        <div class="image">
                           <img src="assets/img/hotel2/shot.jpg"/>     
                        </div>
                     </div>
                     <div class="col-lg-7 col-md-6">
                        <div class="content">
                           <a class="card-link" href="#">
                              <h4 class="title text-info">Alojamiento en el Centro de Santiago departamentos 1 y 2 Dormitorios </h4>
                           </a>
                           <p class="category text-left">
                              <i class="fa fa-star text-warning"></i>
                              <i class="fa fa-star text-warning"></i>
                              <i class="fa fa-star text-warning"></i>
                              <i class="fa fa-star text-warning"></i>
                              <i class="fa fa-star-o "></i>
                              <span class="review-total">(34)</span>
                           </p>
                           <a class="card-link" href="#">
                              <p class="description hidden-xs">Departamento en arriendo para 5 personas en Eleuterio Ramírez, Santiago, Santiago, Región Metropolitana, Chile</p>
                           </a>
                           <ul class="list-inline amenities">
                              <li> <span class="parairnos-icon icono-125"></span> 3 Habitaciones</li>
                              <li> <span class="parairnos-icon icono-008"></span> 2 Baños</li>
                              <li> <span class="parairnos-icon icono-023"></span> 6 Capacidad</li>
                           </ul>
                        </div>
                     </div>
                     <div class="col-lg-2 col-md-3">
                        <div class="price-content content text-right">
                           <span class="price text-success"> 
                           $ 36,000
                           </span>
                           <div class="price-sub">Por día</div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- termina tarjeta -->
               <div class="card card-horizontal">
                  <div class="row">
                     <div class="col-lg-3 col-md-3">
                        <div class="image">
                           <img src="assets/img/hotel3/shot.jpg"/>     
                        </div>
                     </div>
                     <div class="col-lg-7 col-md-6">
                        <div class="content">
                           <a class="card-link" href="#">
                              <h4 class="title text-info">Arriendo departamento Termas de Chillán </h4>
                           </a>
                           <p class="category text-left">
                              <i class="fa fa-star text-warning"></i>
                              <i class="fa fa-star text-warning"></i>
                              <i class="fa fa-star text-warning"></i>
                              <i class="fa fa-star text-warning"></i>
                              <i class="fa fa-star-o "></i>
                              <span class="review-total">(19)</span>
                           </p>
                           <a class="card-link" href="#">
                              <p class="description hidden-xs">Departamento para 6 personas en Chillán, Chillán, Región del Bío Bío, Chile</p>
                           </a>
                           <ul class="list-inline amenities">
                              <li> <span class="parairnos-icon icono-125"></span> 3 Habitaciones</li>
                              <li> <span class="parairnos-icon icono-008"></span> 2 Baños</li>
                              <li> <span class="parairnos-icon icono-023"></span> 6 Capacidad</li>
                           </ul>
                        </div>
                     </div>
                     <div class="col-lg-2 col-md-3">
                        <div class="price-content content text-right">
                           <span class="price text-success"> 
                           $ 22,000
                           </span>
                           <div class="price-sub">Por día</div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- termina tarjeta -->
               <div class="card card-horizontal">
                  <div class="row">
                     <div class="col-lg-3 col-md-3">
                        <div class="image">
                           <img src="assets/img/hotel4/shot.jpg"/>
                        </div>
                     </div>
                     <div class="col-lg-7 col-md-6">
                        <div class="content">
                           <a class="card-link" href="#">
                              <h4 class="title text-info">Arriendo departamento Termas de Chillán </h4>
                           </a>
                           <p class="category text-left">
                              <i class="fa fa-star text-warning"></i>
                              <i class="fa fa-star text-warning"></i>
                              <i class="fa fa-star text-warning"></i>
                              <i class="fa fa-star text-warning"></i>
                              <i class="fa fa-star-o "></i>
                              <span class="review-total">(17)</span>
                           </p>
                           <a class="card-link" href="#">
                              <p class="description hidden-xs">Departamento para 6 personas en Chillán, Chillán, Región del Bío Bío, Chile</p>
                           </a>
                           <ul class="list-inline amenities">
                              <li> <span class="parairnos-icon icono-125"></span> 3 Habitaciones</li>
                              <li> <span class="parairnos-icon icono-008"></span> 2 Baños</li>
                              <li> <span class="parairnos-icon icono-023"></span> 6 Capacidad</li>
                           </ul>
                        </div>
                     </div>
                     <div class="col-lg-2 col-md-3">
                        <div class="price-content content text-right">
                           <span class="price text-success"> 
                           $ 22,000
                           </span>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- termina tarjeta -->
            </div>
            <div class="row">
               <div class="col-md-12 text-center">
                  <ul class="pagination pagination-blue">
                     <li><a href="#">&laquo;</a></li>
                     <li><a href="#">1</a></li>
                     <li><a href="#">2</a></li>
                     <li class="active"><a href="#">3</a></li>
                     <li><a href="#">4</a></li>
                     <li><a href="#">5</a></li>
                     <li><a href="#">&raquo;</a></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="space"></div>
   <!-- termina contenedor -->
</div>
<!-- termina sección -->
<nav id="offcanvas-filters" style="visible-xs visible-sm">
   <?php
      include("filtros.php");
      ?>
</nav>
<?php
   include("footer.php");
   ?>
<script>
   $(document).ready(function(){
   
       $.ajaxSetup({cache:false});
   
       $(".sort1").click(function() {
         $(this).tooltip('hide');
         var post_link = $(this).data("href");  
         $(".results-content").html("<p class='loading'>Cargando contenido...</p>");
         $(".results-content").load(post_link);
         return false;
       });
   
       $(".sort2").click(function() {
         $(this).tooltip('hide');
         var post_link = $(this).data("href");  
         $(".results-content").html("<p class='loading'>Cargando contenido...</p>");
         $(".results-content").load(post_link);
         return false;
       });
   });
</script>
<script>
   var $el = $("#offcanvas-filters").offcanvas();
   
   $(".js-toggle-offcanvas").on("click", function() {
       $el.offcanvas("toggle");
   });
</script>