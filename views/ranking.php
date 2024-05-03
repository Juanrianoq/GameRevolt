<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GameRevolt</title>
  <link rel="stylesheet" href="../assets/css/layout.css">
  <link rel="stylesheet" href="../assets/css/ranking.css">
  <link rel="icon" href="../assets/images/control.ico">
</head>

  <body>
    <?php
      require 'layout/header.php';
    ?>

    <main>
      <h2 class="rank-title">Top 6: Los Mejores Juegos</h2>

      <div class="table-container">
        <div class="table-box">
          <table class="top-games-table">

            <thead>
              <tr>
                <th>Posición</th>
                <th>Juego y plataforma</th>
                <th>Género</th>
                <th>Estreno</th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <td class="positions"> 1 </td>
                <td>
                  <div class="games-info">
                    <img src="../assets/images/ranking/fifa23.png" width="100">
                    <p>
                      <strong>FIFA 23</strong> <br> PS5
                    </p>
                  </div>
                </td>
                <td class="genrer">Deportes</td>
                <td class="debut">30-09-2022</td>
              </tr>

              <tr>
                <td class="positions"> 2 </td>
                <td>
                  <div class="games-info">
                    <img src="../assets/images/ranking/elysium.png" width="100">
                    <p>
                      <strong>Valkyrie Elysium</strong> <br> PS4
                    </p>
                  </div>
                </td>
                <td class="genrer">Rol</td>
                <td class="debut">29-09-2022</td>
              </tr>

              <tr>
                <td class="positions"> 3 </td>
                <td>
                  <div class="games-info">
                    <img src="../assets/images/ranking/strayblade.png" width="100">
                    <p>
                      <strong>Stray Blade</strong> <br> Xbox Series
                    </p>
                  </div>
                </td>
                <td class="genrer">Acción</td>
                <td class="debut">20-04-2023</td>
              </tr>

              <tr>
                <td class="positions"> 4 </td>
                <td>
                  <div class="games-info">
                    <img src="../assets/images/ranking/manorlords.png" width="100">
                    <p>
                      <strong>Manor Lords</strong> <br> PC
                    </p>
                  </div>
                </td>
                <td class="genrer">Estrategia</td>
                <td class="debut">26-04-2024</td>
              </tr>

              <tr>
                <td class="positions"> 5 </td>
                <td>
                  <div class="games-info">
                    <img src="../assets/images/ranking/gtaV.png" width="100">
                    <p>
                      <strong>Grand Theft Auto VI</strong> <br> Xbox Series
                    </p>
                  </div>
                </td>
                <td class="genrer">Acción</td>
                <td class="debut">Por determinar</td>
              </tr>

              <tr>
                <td class="positions"> 6 </td>
                <td>
                  <div class="games-info">
                    <img src="../assets/images/ranking/miasma.png" width="100">
                    <p>
                      <strong>Miasma Chronicles</strong> <br> PS5
                    </p>
                  </div>
                </td>
                <td class="genrer">Rol</td>
                <td class="debut">23-05-2023</td>
              </tr>
            </tbody>

          </table>
        </div>
      </div>
    </main>

    <?php
      require 'layout/footer.php';
    ?>

  </body>
</html>