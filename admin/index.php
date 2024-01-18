<?php include("config/bd.php");
$url = "http://localhost/condominio_comarca/index.php"
?>
<!doctype html>
<html lang="es">

<head>
    <title>Administrador</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">

</head>

<body class="bg-danger-subtle d-flex justify-content-center align-items-center vh-100">
    <div class="bg-white p-5 rounded-5 text-danger shadow" style="width: 25rem">
        <div class="d-flex justify-content-center">
            
                <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor" class="bi bi-file-earmark-bar-graph-fill" viewBox="0 0 16 16">
                    <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0M9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1m.5 10v-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5m-2.5.5a.5.5 0 0 1-.5-.5v-4a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5zm-3 0a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5z" />
                </svg>
            
        </div>
        <div class="text-center fs-5 fw-bold"> Sistema de Información de Administración de Condominios </div>
        <div class="input-group m-4">
            <form action="iniciarSesion.php" method="POST">
                <?php
                if (isset($_GET['error'])) { ?>
                    <div class="alert alert-danger">
                        <?php echo $_GET['error'] ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php } ?>




                <div class="input-group mt-4 ">
                    <div class="input-group-text bg-dark">
                        <img src="../images/username-icon.svg" alt="username-icon" style="height: 1rem" />
                    </div>
                    <input type="email" id="usuario" name="usuario" placeholder="Correo electrónico" class="form-control bg-light">
                </div>
                <div class="input-group mt-1">
                    <div class="input-group-text bg-dark">
                        <img src="../images/password-icon.svg" alt="password-icon" style="height: 1rem" />
                    </div>
                    <input type="password" id="clave" name="clave" placeholder="Ingrese contraseña" class="form-control bg-light">
                </div>
                <div class="input-group-append d-flex text-black">
                    <button id="show_password" class="btn " type="button" onclick="mostrarPassword()"> <span class="bi bi-eye-fill"></span> </button>
                    <p class="m-1">Ver contraseña</p>
                </div>
                <div class="">
                    <input type="submit" value="Iniciar sesión" class="btn btn-dark text-white  w-100 mt-4 fw-semibold shadow-sm">

                </div>
            </form>
            <div class="text-center">
                <button type="button" class="btn btn-danger mt-4 w-100">
                    <a class="text-light " href="<?php echo $url; ?> ">Ver Sitio Web</a>
                </button>

            </div>
        </div>
    </div>




    <script type="text/javascript">
        function mostrarPassword() {
            var cambio = document.getElementById("clave");
            if (cambio.type == "password") {
                cambio.type = "text";
                $('.icon').removeClass('bi bi-eye-fill').addClass('bi bi-eye');
            } else {
                cambio.type = "password";
                $('.icon').removeClass('bi bi-eye-fill').addClass('bi bi-eye-fill');
            }
        }
    </script>










    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
    <script src="bottom-login.js"></script>

</body>

</html>