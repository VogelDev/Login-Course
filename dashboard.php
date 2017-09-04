<?php
  // Allow the config
  define('__CONFIG__', true);
  // require the config
  require_once 'inc/config.php';
  ForceLogin();

  $user = new User($_SESSION['user_id']);
?>

  <!DOCTYPE html>
  <html land="en">

  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device width, initial-scale=1" />
    <meta name="robots" content="follow" />

    <title>Page Title</title>

    <base href="<?php echo __SITE_ROOT__; ?>" />
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.28/css/uikit.min.css" />
  </head>

  <body>

    <div class="uk-section uk-container">
      <h1>Dashboard</h1>
      <p>Hello
      <?php

      echo $user->email.', you registered at '.date('F j, Y, g:i a', time($user->reg_time));
    ?>
        <p>
          <a href="logout.php">Logout</a>
        </p>
    </div>

    <?php require_once "inc/footer.php"; ?>
  </body>

  </html>
