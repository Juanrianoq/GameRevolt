<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GameRevolt - Inicio</title>
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/layout.css">
    <link rel="icon" href="../assets/images/control.ico">
</head>
<body>
    <?php
        include 'layout/header.php';
    ?>

    <main>
        <div id="news-container">
        <h1 id="title">Noticias</h1>
            <article class="news">

                <a href="news1.php">
                    <img src="../assets/images/news/Imagen-Noticia1.jpeg" alt="Captura del armamento y vehiculos pesados de Call of Duty: Cold War" class="images">
                </a>
                <a href="news1.php">
                    <div class="text-container">
                        <h2 class="art-title">
                            Activision ha revelado el futuro de la saga Call of Duty por culpa de un descuido en su última actualización. Un nuevo Black Ops podría confirmarse dentro de muy poco
                        </h2>
                        <br>
                        <h3 class="art-description">
                            Multitud de pistas apuntan a que una sexta entrega de Call of Duty: Black Ops está a punto de hacerse realidad
                        </h3>

                        <h4 class="autor">
                            por Bruno Ouviña el 23 de abril de 2024 a las 10:08 a.m.
                        </h4>
                    </div>   
                </a>
            </article>

            <hr>

            <article class="news">
                <a href="news2.php">
                    <img src="../assets/images/news/Imagen-Noticia2.jpeg" alt="Imagen de un PS4 y un XBOX siendo comparados" class="images">
                </a>
                <a href="news2.php">
                    <div class="text-container">
                        <h2 class="art-title">
                            "La demanda es muy débil". Las ventas de PS5 y Xbox Series X|S no contentan ni a AMD este 2024, que estima una caída importante para el resto del año
                        </h2>
                        <br>
                        <h3 class="art-description">
                            AMD dice que en la segunda mitad de 2024 será peor que la primera
                        </h3>

                        <h4 class="autor">
                            por Adrián Mira el 22 de abril de 2024 a las 13:25 p.m.
                        </h4>
                    </div>   
                </a>
            </article>
        </div>
    </main>
    <?php
        include 'layout/footer.php';
    ?>
</body>
</html>