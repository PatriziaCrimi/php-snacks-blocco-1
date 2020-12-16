<!-- ............................. PHP ............................. -->
<?php
  /* ASSIGNMENT
  Creare un array di array.
  Ogni array figlio avrà come chiave una data in questo formato: DD/MM/YYYY (ad es 31/01/2007)
  e come valore un array di post associati a quella data.
  Stampare ogni data con i relativi post.
  */

  $title = 'PHP Snacks';
  $subtitle = 'Blog posts';
  $posts_list = [
    '10/01/2019' => [
      [
          'title' => 'Post 1',
          'author' => 'Michele Papagni',
          'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
      ],
      [
          'title' => 'Post 2',
          'author' => 'Michele Papagni',
          'text' => 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
      ],
    ],
    '10/02/2019' => [
      [
          'title' => 'Post 3',
          'author' => 'Michele Papagni',
          'text' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.'
      ]
    ],
    '15/05/2019' => [
      [
          'title' => 'Post 4',
          'author' => 'Michele Papagni',
          'text' => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
      ],
      [
          'title' => 'Post 5',
          'author' => 'Michele Papagni',
          'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
      ],
      [
          'title' => 'Post 6',
          'author' => 'Michele Papagni',
          'text' => 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
      ]
    ],
    '19/07/2019' => [
      [
          'title' => 'Post 7',
          'author' => 'Michele Papagni',
          'text' => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
      ],
      [
          'title' => 'Post 8',
          'author' => 'Michele Papagni',
          'text' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
      ],
      [
          'title' => 'Post 9',
          'author' => 'Michele Papagni',
          'text' => 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
      ]
    ],
    '28/09/2019' => [
      [
          'title' => 'Post 10',
          'author' => 'Michele Papagni',
          'text' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.'
      ]
    ],
    '04/12/2019' => [
      [
          'title' => 'Post 11',
          'author' => 'Michele Papagni',
          'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
      ],
      [
          'title' => 'Post 12',
          'author' => 'Michele Papagni',
          'text' => 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
      ],
    ],
  ];
?>

<!-- ............................. HTML ............................. -->
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP Snack 3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
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
          <div class="posts-wrapper">
            <?php
            // Scrolling the array of posts to print the date and access the multidimensional associative arrays contained in it
            foreach ($posts_list as $date => $date_posts) { ?>
              <div class="date-posts-box">
                <h3> <?php echo($date); ?> </h3>
                <ul>
                  <?php
                  // Scrolling the associative array of posts to print on screen all the details of each post
                  for ($i=0; $i < count($date_posts); $i++) { ?>
                    <li class="card">
                      <h4> <?php echo($date_posts[$i]['title']); ?> </h4>
                      <h5> <?php echo($date_posts[$i]['author']); ?> </h5>
                      <p> <?php echo($date_posts[$i]['text']); ?> </p>
                    </li>
                    <?php
                  };
                  ?>
                </ul>
              </div>
              <?php
            };
            ?>
          </div>  <!-- Closing posts wrapper -->
        </div>
      </div>  <!-- Closing container -->
    </div>  <!-- Closing page wrapper -->
  </body>
</html>
