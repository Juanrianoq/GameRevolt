<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GameRevolt - Reseñas</title>
    <link rel="stylesheet" href="../assets/css/main_review.css">
    <link rel="stylesheet" href="../assets/css/layout.css">
    <link rel="icon" href="../assets/images/control.ico">
</head>
<body>
    <?php
        include 'layout/header.php';
    ?>

    <main>
        <div id="reviews-container">
        <h1 id="title">Reseñas</h1>
            <article class="reviews">

                <a href="review1.php">
                    <img src="../assets/images/reviews/image-review1.jpeg" alt="Imagen trailer Sand Land" class="images">
                </a>
                <a href="review1.php">
                    <div class="text-container">
                        <h2 class="art-title">
                            Me alegra haberme equivocado con este RPG de acción y mundo abierto porque es un gran tributo a Akira Toriyama. Análisis de Sand Land
                        </h2>
                        <br>
                        <h3 class="art-description">
                            La acción RPG de Sand Land nos permite pilotar los geniales Toriyama-mechs que vimos en Dragon Ball, sin duda el mejor homenaje a las obras del ilustre Akira Toriyama.
                        </h3>

                        <h4 class="autor">
                            por Alejandro Morillas el 2 de mayo de 2024 a las 09:15 a.m.
                        </h4>
                    </div>   
                </a>
            </article>

            <hr>

            <article class="reviews">
                <a href="review2.php">
                    <img src="../assets/images/reviews/imagen-review2.jpeg" alt="Imagen de un PS4 y un XBOX siendo comparados" class="images">
                </a>
                <a href="review2.php">
                    <div class="text-container">
                        <h2 class="art-title">
                            Hemos esperado 13 años por un juego de tenis que sabe a poco, obra sobrevalorada. Análisis en profundidad de Top Spin 2K25
                        </h2>
                        <br>
                        <h3 class="art-description">
                            Hangar 13 y 2K traen de nuevo a la vida la saga Top Spin con una entrega que apenas mejora lo que ya hizo hace más de una década
                        </h3>

                        <h4 class="autor">
                            por José A. Mateo Albuerne el 29 de abril de 2024 a las 15:45 p.m.
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