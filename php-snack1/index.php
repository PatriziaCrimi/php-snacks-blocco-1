<!-- ............................. PHP ............................. -->
<?php
  /* ASSIGNMENT
  Creare un array $matches che contiene dei sotto-array, i quali rappresentano delle partite di basket.
  ogni partita avrà le seguenti caratteristiche:
    squadra di casa
    squadra ospite
    punti fatti dalla squadra di casa
    punti fatti dalla squadra ospite.
    L'obbiettivo è stampare a schermo tutte le partite utilizzando questo schema:
      [squadra di casa] - [squadra ospite] | [punti squadra di casa] - [punti squadra ospite]
    Ad esempio:
      Olimpia Milano - Cantù | 55 - 60
  */

  $title = 'PHP Snacks';
  $subtitle = 'Basket matches';
  $home_team = 'home team';
  $visiting_team = 'visiting team';
  $home_team_score = 'home team score';
  $visiting_team_score = 'visiting team score';
  $min_score = 20;
  $max_score = 100;
  $matches = [
    [
      $home_team => 'Los Angeles Lakers',
      $visiting_team => 'Golden State Warriors',
      $home_team_score => rand($min_score, $max_score),
      $visiting_team_score => rand($min_score, $max_score),
    ],
    [
      $home_team => 'Chicago Bulls',
      $visiting_team => 'Milwaukee Bucks',
      $home_team_score => rand($min_score, $max_score),
      $visiting_team_score => rand($min_score, $max_score),
    ],
    [
      $home_team => 'Toronto Raptors',
      $visiting_team => 'Boston Celtics',
      $home_team_score => rand($min_score, $max_score),
      $visiting_team_score => rand($min_score, $max_score),
    ],
    [
      $home_team => 'Houston Rockets',
      $visiting_team => 'Miami Heat',
      $home_team_score => rand($min_score, $max_score),
      $visiting_team_score => rand($min_score, $max_score),
    ],
    [
      $home_team => 'Los Angeles Clippers',
      $visiting_team => 'Denver Nuggets',
      $home_team_score => rand($min_score, $max_score),
      $visiting_team_score => rand($min_score, $max_score),
    ],
  ];
 ?>

<!-- ............................. HTML ............................. -->
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP Snack 1</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
  </head>
  <body>
    <div id="page-wrapper">
      <div class="container">
        <div class="row">
          <h1>
            <?php echo $title ?>
          </h1>
        </div>
        <div class="row">
          <h2>
            <?php echo $subtitle ?>
          </h2>
        </div>
        <div class="row">
          <div id="results">
            <h3>Results</h3>
            <p>
              Number of matches:
              <span>
                <?php
                  echo count($matches);
                ?>
              </span>
            </p>
            <div class="matches-list">
              <?php
              // Scanning the array of matches to print on screen the values of its keys
                for($i = 0; $i < count($matches); $i++) {
                  echo("<p>");
                  echo($matches[$i][$home_team] . ' - ' . $matches[$i][$visiting_team] . ' / ' . $matches[$i][$home_team_score] . ' - ' . $matches[$i][$visiting_team_score]);
                  // Creating a new line for any new match printed
                  echo("</p>");
                };
              ?>
            </div>
          </div>
        </div>
      </div>  <!-- End of container -->
    </div>  <!-- End of page wrapper -->
  </body>
</html>
