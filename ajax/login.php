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
    $user_found = User::Find($email, true);

    // var_dump($findUser->rowCount()==1);
    if($user_found){

      $user = $user_found;
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
