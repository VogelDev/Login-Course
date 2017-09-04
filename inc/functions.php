<?php
function ForceLogin(){
  if(!isset($_SESSION['user_id'])){
    header('Location:'.__SITE_ROOT__.'login.php');
  }else{
    date_default_timezone_set('America/Atikokan');
  }
}

function forceDashboard(){
  if(isset($_SESSION['user_id'])){
    date_default_timezone_set('America/Atikokan');
    header('Location:'.__SITE_ROOT__.'dashboard.php');
  }

}
