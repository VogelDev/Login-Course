<?php
  // Allow the config
  define('__CONFIG__', true);
  // require the config
  require_once "../inc/config.php";

  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    header('Content-Type: application/json');
    $return = [];

    // make sure user does not exist

    // make sure user can be added and is added

    // return the proper information to js to redirect

    $return['redirect'] = '/dashboard.php';

    echo json_encode($return, JSON_PRETTY_PRINT);
    exit;
  }
  else{
      exit('test');
  }
