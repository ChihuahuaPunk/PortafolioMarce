<?php
    $bodyclass = 'pagina-interior';
    $pagetitle =  'Proyecto de Prueba';
    $detalleproyecto = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
    $nombreproyecto = 'Proyecto de Prueba';
    $imgname = 'port001.jpg';
    $imggrande = 'port002.jpg';
?>
<?php include 'header.php'; ?>
    <body  <?php if($bodyclass) { echo 'class="' . $bodyclass . '"'; } ?>>
        <div class="contenedorfondo">
            <div class="container">
             <header>
                 <div class="contenedor-logo col-xs-12 col-lg-4">
                     <img src="images/marceavatar.gif" alt="" class="logo">
                 </div><!-- /.contenedor-logo -->
                 <div class="contenedor-bio col-xs-12 col-lg-8">
                        <h1 class="nombre-mio">Portafolio Marcela Vergara</h1>
                     <p>¡Hola! Bienvenido/a. Soy diseñadora gráfica web front-end, ilustradora, artesana de Santiago, Chile.  En este sitio web muestro mi portafolio actualizado y sirve también para que me puedas contactar.</p>
                 </div><!-- /.contenedor-bio -->
             </header>
             <section class="menu col-xs-12">
                  <nav>
                      <a href="index.html" class="icon-item-menu icon-iconocasa">Inicio</a>
                     <a href="#" class="icon-item-menu icon-iconomalet">Portafolio</a>
                        <a href="#" class="icon-item-menu icon-iconobla">Quién soy</a>
                     <a href="#" class="icon-item-menu icon-iconosobre">Contacto</a>
                 </nav>
             </section><!-- /.menu -->
             <hr class="separador col-xs-12">
             <section class="proyectos">
                  <div class="col-xs-12 col-lg-6 un-proyecto">
                    <a href="images/<?php echo $imggrande; ?>" class="js-modal">
                        <img src="images/<?php echo $imgname; ?>" class="img-responsive" alt="">
                    </a>
                 </div><!-- /.col-xs-6 -->
                 <div class="col-xs-12 col-lg-6 texto-proyecto">
                     <h2 class="titulo-proyecto"><?php echo $nombreproyecto; ?></h2>
                     <p class="descripcion-proyecto"><?php echo $detalleproyecto; ?></p>
                 </div><!-- /.col-xs-12 col-lg-6 texto-proyecto -->
              </section><!-- /.proyectos -->
             </div><!--.container-->
        </div><!--contenedorfondo-->
<?php include 'footer.php'; ?>
<div class="overlay"></div>
<?php // Esto es un comentario ?>