<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Search Engine -->
    <meta name="description" content="Curso Taller superior: Sección audiovisual, Escuela de Diseño UC">
    <meta name="image" content="http://diseno.uc.cl/wp-content/uploads/2011/01/diseno_uc_web.jpg">
    <!-- Schema.org for Google -->
    <meta itemprop="name" content="Taller Audiovisual UC">
    <meta itemprop="description" content="Curso Taller superior: Sección audiovisual, Escuela de Diseño UC">
    <meta itemprop="image" content="http://diseno.uc.cl/wp-content/uploads/2011/01/diseno_uc_web.jpg">
    <!-- Twitter -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="Taller Audiovisual UC">
    <meta name="twitter:description" content="Curso Taller superior: Sección audiovisual, Escuela de Diseño UC">
    <meta name="twitter:image:src" content="http://diseno.uc.cl/wp-content/uploads/2011/01/diseno_uc_web.jpg">
    <meta name="twitter:player" content="https://player.vimeo.com/video/220253480">
    <!-- Open Graph general (Facebook, Pinterest & Google+) -->
    <meta name="og:title" content="Taller Audiovisual UC">
    <meta name="og:description" content="Curso Taller superior: Sección audiovisual, Escuela de Diseño UC">
    <meta name="og:image" content="http://diseno.uc.cl/wp-content/uploads/2011/01/diseno_uc_web.jpg">
    <meta name="og:url" content="http://talleraudiovisualuc.cl">
    <meta name="og:site_name" content="Taller Audiovisual UC">
    <meta name="og:locale" content="es_CL">
    <meta name="og:video" content="https://player.vimeo.com/video/220253480">
    <meta name="og:type" content="website">


    <title>Taller Audiovisual UC</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>

    <!-- Theme CSS -->
    <link href="css/agency.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js" integrity="sha384-0s5Pv64cNZJieYFkXYOTId2HMA2Lfb6q2nAcx2n0RTLUnCAoTTsS0nKEO27XyKcY" crossorigin="anonymous"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js" integrity="sha384-ZoaMbDF+4LeFxg6WdScQ9nnR1QC2MIRxA1O9KWEXQwns1G8UNyIEZIQidzb0T1fo" crossorigin="anonymous"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
            
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Introducción</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio">Portafolio</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">Sobre el curso</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contacto</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
  <?php include('header.php');?>

<!-- Services Section -->
  <?php include('services.php');?>

    <!-- Portfolio Grid Section -->
    <section id="portfolio" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Portafolio</h2>
                    <h3 class="section-subheading text-muted">Encargos y proyectos realizados en el curso.</h3>
                </div>
            </div>

            <?php
            $inspiracion = array_map('str_getcsv', file('data/datos.csv'));
            array_walk($inspiracion, function(&$a) use ($inspiracion) {$a = array_combine($inspiracion[0], $a);});
            array_shift($inspiracion);
            $all = count($inspiracion);
            for($n=0; $n < $all; $n++){?>


                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal<?php print $n?>" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                          <div class="portfolio-hover-content">
                          <i class="fa fa-plus fa-3x"></i>
                        </div>
                          </div>

          <img src="<?php print($inspiracion[$n]["image"])?>" class="img-responsive" alt="">
          </a>
                    <article class="portfolio-caption">
                      <h4><?php print($inspiracion[$n]["title"])?></h4>
                    <p class="text-muted"><?php print($inspiracion[$n]["excerpt"])?>.</p><p>
                    </article>

                  </div><!--/col-sm-6-->

                <?php };?>

        </div>
    </section>

    <!-- About Section -->
    <?php include('about.php');?>

    <!-- Clients Aside -->
  <?php include('clients.php');?>

    <!-- Contact Section -->
    <?php include('contact.php');?>

<!-- Footer -->
    <?php include('footer.php');?>

    <!-- Portfolio Modals -->
    <?php
   $inspiracion = array_map('str_getcsv', file('data/datos.csv'));
   array_walk($inspiracion, function(&$a) use ($inspiracion) {$a = array_combine($inspiracion[0], $a);});
   array_shift($inspiracion);
   $all = count($inspiracion);
   for($n=0; $n < $all; $n++){
   ?>

   <div class="portfolio-modal modal fade" id="portfolioModal<?php print $n?>" tabindex="-1" role="dialog" aria-hidden="true">
       <div class="modal-content">
           <div class="close-modal" data-dismiss="modal">
               <div class="lr">
                   <div class="rl">
                   </div>
               </div>
           </div>
           <div class="container">
               <div class="row">

                   <div class="col-lg-8 col-lg-offset-2">
                       <div class="modal-body">
                           <h2><?php print($inspiracion[$n]["title"])?></h2>
                           <p><?php print($inspiracion[$n]["content"])?></p>
                         <div class="embed-responsive embed-responsive-16by9">
                             <?php print($inspiracion[$n]["video"])?>
                           </div>

                          <br> <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
   <?php };?>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb" crossorigin="anonymous"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/agency.min.js"></script>

</body>

</html>
