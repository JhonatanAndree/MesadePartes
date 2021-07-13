<?php
require_once("config/conexion.php");
if (isset($_POST["enviar"]) and $_POST["enviar"] == "si") {
    require_once("models/Usuario.php");
    $usuario = new Usuario();
    $usuario->login();
}
?>

<html lang="es" class="no-focus">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

    <title>Mesa de partes</title>

    <meta name="description" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework">
    <meta property="og:site_name" content="Codebase">
    <meta property="og:description" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="public/assets/img/favicons/favicon.png">
    <link rel="icon" type="image/png" sizes="192x192" href="public/assets/img/favicons/favicon-192x192.png">
    <link rel="apple-touch-icon" sizes="180x180" href="public/assets/img/favicons/apple-touch-icon-180x180.png">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- Codebase framework -->
    <link rel="stylesheet" id="css-main" href="public/assets/css/codebase.min.css">
</head>

<body>
    <div id="page-container" class="main-content-boxed">
        <!-- Main Container -->
        <main id="main-container">
            <!-- Page Content -->
            <div class="bg-image" style="background-image: url('public/assets/img/photos/photo34@2x.jpg');">
                <div class="row mx-0 bg-black-op">
                    <div class="hero-static col-md-6 col-xl-8 d-none d-md-flex align-items-md-end">
                        <div class="p-30 invisible" data-toggle="appear">
                            <p class="font-size-h3 font-w600 text-white">
                                IESTP Manuel Gonzales Prada - El Porvenir
                            </p>
                            <p class="font-italic text-white-op">
                                Copyright &copy; <span class="js-year-copy">2021</span>
                            </p>
                        </div>
                    </div>
                    <div class="hero-static col-md-6 col-xl-4 d-flex align-items-center bg-white invisible" data-toggle="appear" data-class="animated fadeInRight">
                        <div class="content content-full">
                            <!-- Header -->
                            <div class="px-30 py-10">
                                <a class="link-effect font-w700" href="#">
                                    <i class="si si-fire"></i>
                                    <span class="font-size-xl text-primary-dark">Mesa de </span><span class="font-size-xl">partes</span>
                                </a>
                                <h2 class="h5 font-w400 text-muted mb-0">Inicio de sesión</h2>
                            </div>
                            <!-- END Header -->
                            <!-- Alert -->
                            <?php
                            if (isset($_GET["m"])) {
                                switch ($_GET["m"]) {
                                    case "1";
                            ?>
                                        <div class="alert alert-danger" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            <div class="d-flex align-items-center justify-content-start">
                                                <i class="icon ion-ios-checkmark alert-icon tx-32 mg-t-5 mg-xs-t-0"></i>
                                                <span> El Usuario y/o Contraseña son incorrectos. </span>
                                            </div>
                                        </div>
                                    <?php
                                        break;

                                    case "2";
                                    ?>
                                        <div class="alert alert-danger" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            <div class="d-flex align-items-center justify-content-start">
                                                <i class="icon ion-ios-checkmark alert-icon tx-32 mg-t-5 mg-xs-t-0"></i>
                                                <span> Los campos estan vacios.</span>
                                            </div>
                                        </div>
                            <?php
                                        break;
                                }
                            }
                            ?>
                            <!-- Alert -->

                            <!-- Formulario de acceso -->
                            <form action="" method="POST" id="loginnum1">
                                <div class="form-group row">
                                    <div class="col-12">
                                        <div class="form-material floating">
                                            <input type="email" class="form-control" id="correo" name="correo">
                                            <label for="login-username">Correo electrónico</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12">
                                        <div class="form-material floating">
                                            <input type="password" class="form-control" id="password" name="password">
                                            <label for="login-password">Contraseña</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12">
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="login-remember-me" name="login-remember-me">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">Recuerdame</span>
                                        </label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <input type="hidden" name="enviar" class="form-control" value="si">
                                    <button type="submit" class="btn btn-sm btn-hero btn-alt-primary">
                                        <i class="si si-login mr-10"></i>Iniciar Sesión
                                    </button>

                                    <div class="mt-30">
                                        <a class="link-effect text-muted mr-10 mb-5 d-inline-block" href="Registrarse/">
                                            <i class="fa fa-plus mr-5"></i> Crear Cuenta
                                        </a>
                                        <a class="link-effect text-muted mr-10 mb-5 d-inline-block" href="RecuperarContrasena/">
                                            <i class="fa fa-warning mr-5"></i> Olvidé mi contraseña
                                        </a>
                                    </div>
                                </div>
                            </form>
                            <!-- Fin Formulario de acceso -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Page Content -->
        </main>
        <!-- END Main Container -->
    </div>
    <!-- END Page Container -->

    <!-- Codebase Core JS -->
    <script src="public/assets/js/core/jquery.min.js"></script>
    <script src="public/assets/js/core/popper.min.js"></script>
    <script src="public/assets/js/core/bootstrap.min.js"></script>
    <script src="public/assets/js/core/jquery.slimscroll.min.js"></script>
    <script src="public/assets/js/core/jquery.scrollLock.min.js"></script>
    <script src="public/assets/js/core/jquery.appear.min.js"></script>
    <script src="public/assets/js/core/jquery.countTo.min.js"></script>
    <script src="public/assets/js/core/js.cookie.min.js"></script>
    <script src="public/assets/js/codebase.js"></script>

    <!-- Page JS Plugins -->
    <script src="public/assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>

    <!-- Page JS Code -->
    <script src="public/assets/js/pages/op_auth_signin.js"></script>
</body>

</html>