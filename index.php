<!doctype html>
<html class="no-js" lang="">
    <head>
        <?php
            include('Datos/conexion.php');

        ?>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Cluster Impulsar -Inscripciones</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <!--        <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">-->


        <!--For Plugins external css-->
        <link rel="stylesheet" href="assets/css/plugins.css" />
        <link rel="stylesheet" href="assets/css/lato-webfont.css" />
        <link rel="stylesheet" href="assets/css/magnific-popup.css">



        <!--Theme custom css -->
        <link rel="stylesheet" href="assets/css/style.css">

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="assets/css/responsive.css" />

        <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <!--Home page style-->
    <div id="home" class="home">
        <header>

            <div class='preloader'><div class='loaded'>&nbsp;</div></div>
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><img src="assets/images/logo.png" alt="" /></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="index.php">Inscripciones</a></li>
                        <li><a href="login.php">Log in</a></li>

                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

        </header>
    <body>

        <div class="container" >



                    <div class="col-md-6 col-md-offset-6 col-sm-12 col-xs-12">
                        <div class="home-content" >

                            <h1>Inscripción a Seminario</h1>
                            <form action='../Impulsar/Control/TInscripcion.php' method='POST'>

                                <div class="form-group">
                                     <label for="emp">Empresa:</label>
                                    <input type="text" class="form-control" id="emp" placeholder="Empresa " name="emp">
                                </div>
                                <div class="form-group">
                                     <label for="car">Cargo:</label>
                                    <input type="text" class="form-control" id="car" placeholder="Cargo" name="car">
                                </div>
                                <div class="form-group">
                                     <label for="nombre">Nombre:</label>
                                    <input type="text" class="form-control" id="nombre" placeholder="Nombre" name="nombre">
                                </div>
                                <div class="form-group">
                                     <label for="apellidos">Apellidos:</label>
                                    <input type="text" class="form-control" id="apellidos" placeholder="Apellidos" name="apellidos">
                                </div>
                                <div class="form-group">
                                     <label for="tel">Telefono:</label>
                                    <input type="text" class="form-control" id="tel" placeholder="Telefono" name="tel">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email:</label>
                                    <input type="email" class="form-control" id="email" placeholder="Correo" name="email">
                                </div>


                                <button type="submit" class="tn btn-primary btn-lg " value="Ingresar"  name="OK" style="margin-left: 90px;">Registrar</button>

                                </form>




                            <div class="available">
                                <p>
                                    Más información :
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                </p>
                            </div>

                        </div>
                    </div>


            </div>

        <!--Footer-->
        <footer id="footer" class="footer colorsbg">
            <div class="container">
                <div class="row">

                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="copyright text-left">


                            <p>Desarrollo CITT Viña del Mar</p>

                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="copyright text-right">
                            <p>Cluster Impulsar | Quinta Region</p>
                        </div>
                    </div>

                </div>
            </div>
        </footer>


        <script src="assets/js/vendor/jquery-1.11.2.min.js"></script>
        <script src="assets/js/vendor/bootstrap.min.js"></script>


        <script src="http://maps.google.com/maps/api/js"></script>
        <script src="assets/js/gmaps.min.js"></script>

        <script src="assets/js/jquery.magnific-popup.js"></script>

        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>
    </body>
    </div>
</html>
