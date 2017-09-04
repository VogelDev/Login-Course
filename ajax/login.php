<?php
  // Allow the config
  define('__CONFIG__', true);
  // require the config
  require_once "../inc/config.php";

  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    header('Content-Type: application/json');

    $return = [];
    $email = Filter::String($_POST['email']);
    $password = Filter::String($_POST['password']);

    // make sure user does not exist
    $findUser = $con->prepare("SELECT user_id, password FROM users WHERE email = LOWER(:email) LIMIT 1");
    $findUser->bindParam(':email', $email, PDO::PARAM_STR);
    $findUser->execute();

    // var_dump($findUser->rowCount()==1);
    if($findUser->rowCount() == 1){

      $user = $findUser->fetch(PDO::FETCH_ASSOC);
      $user_id = (int)$user['user_id'];

      $hash = $user['password'];

      if(password_verify($password, $hash)){
        $_SESSION['user_id'] = $user_id;
        $return['redirect'] = __SITE_ROOT__.'dashboard.php';
        $return['is_logged_in'] = true;
      }else{
        $return['error'] = 'Invalid username or password';
      }

    }else{
      $return['error'] = "You do not have an account. <a href='".__SITE_ROOT__."register.php'>Register here</a>";
      $return['is_logged_in'] = false;
    }

    echo json_encode($return, JSON_PRETTY_PRINT);
    exit;

  }
  else{
      exit('INVALID URL');
  }
