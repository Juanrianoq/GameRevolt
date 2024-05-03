<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
    <link rel="icon" href="../assets/images/control.ico">
    <link rel="stylesheet" href="../assets/css/log_in.css">
    <link rel="stylesheet" href="../assets/css/layout.css">
</head>
<body>
    <?php
        require 'layout/header.php';
    ?>

    <main>
        <div class="marco">
            <div class="contenido">
                <div class="titulo">
                    <h3 class="iniciarsesion">Iniciar Sesion</h3>
                </div>
                <form id="inicio" action="#" method="post">
                    <div class="correo">
                        <h3 class="nomcorreo">Correo</h3><br>
                        <input type="email" class="txtcorreo" size="35" required>
                    </div>
                    <div class="contraseña">
                        <h3 class="nomcontraseña">Contraseña</h3><br>
                        <input type="password" class="txtcontraseña" size="35" required>
                    </div>
                    <div class="boton">
                        <input type="submit" class="btnacceder" value="Acceder">
                    </div>
                </form>
                <div class="cuenta">
                    <h4 class="nomcuenta">¿No tienes una cuenta?</h4>
                    <a href="sign_in.php" class="nav-cuenta">Registrate</a>
                </div>
            </div>
        </div>
    </main>

    <?php
        require 'layout/footer.php';
    ?>
</body>
</html>