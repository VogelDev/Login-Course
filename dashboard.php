<?php
  // Allow the config
  define('__CONFIG__', true);
  // require the config
  require_once 'inc/config.php';
  if(!isset($_SESSION['user_id'])){
    header('Location:'.__SITE_ROOT__.'index.php');
  }
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
      <?php
      echo "Hello, world! Today is: ";
      echo date("Y m d");
    ?>
        <p>
          <a href="login.php">Login</a>
        </p>
        <p>
          <a href="register.php">Register</a>
        </p>
    </div>

    <?php require_once "inc/footer.php"; ?>
  </body>

  </html>
