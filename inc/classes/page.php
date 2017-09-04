<?php

// If there is no constant defined called __CONFIG__, do not load this file
if(!defined('__CONFIG__')) {
	exit('You do not have a config file');
}

class Page{
  public static function ForceLogin(){
    if(!isset($_SESSION['user_id'])){
      header('Location:'.__SITE_ROOT__.'login.php');
    }else{
      date_default_timezone_set('America/Atikokan');
    }
  }

  public static function forceDashboard(){
    if(isset($_SESSION['user_id'])){
      date_default_timezone_set('America/Atikokan');
      header('Location:'.__SITE_ROOT__.'dashboard.php');
    }

  }
}
