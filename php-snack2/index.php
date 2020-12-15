<!-- ............................. PHP ............................. -->
<?php
  /* ASSIGNMENT
  Passare 3 parametri GET: name, mail e age
  e verificare (cercando nella documentazione i metodi che non conosciamo) che:
    1. name sia più lungo di 3 caratteri
    2. mail contenga un punto e una chiocciola
    3. age sia un numero.
  Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”.
  */

  $title = 'PHP Snacks';
  $subtitle = 'Contacts info check';
  $min_length = 3;
  $name = $_GET['name'];
  $mail = $_GET['mail'];
  $age = intval($_GET['age']);
  /*Using & to concatenate them:
   http://localhost:8888/boolean/php-snacks-blocco-1/php-snack2/index.php?name=NAME&mail=MAIL&age=NUM
  */
 ?>

<!-- ............................. HTML ............................. -->
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP Snack 2</title>
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
            <div class="clear-fix">
              <small>
                Name length:
                <span>
                  <?php
                  echo(strlen($name));
                  ?>
                </span>
              </small>
            </div>
            <p>
              User:
              <span class="bold">
                <?php
                echo $name;
                ?>
              </span>
            </p>
            <p>
              E-mail:
              <span class="bold">
                <?php
                echo $mail;
                ?>
              </span>
            </p>
            <p>
              Age:
              <span class="bold">
                <?php
                echo $age;
                ?>
              </span>
            </p>
            <div class="results-box">
              <span>
                <?php
                /* Checking that 'name' is longer than 'min_length' characters
                and that 'mail' contains both the dot '.' and the at '@' characters
                and that 'age' is a number.
                */
                if(strlen($name) > $min_length && strpos($mail, '.') !== false && strpos($mail, '@') !== false && is_int($age)) {
                  echo('Accesso riuscito');
                } else {
                  echo('Accesso negato');
                }
                ?>
              </span>
            </div>
          </div>
        </div>
      </div>  <!-- End of container -->
    </div>  <!-- End of page wrapper -->
  </body>
</html>
