<?php
function ForceLogin(){
  if(!isset($_SESSION['user_id'])){
    header('Location:'.__SITE_ROOT__.'login.php');
  }
}

function forceDashboard(){
  if(isset($_SESSION['user_id'])){
    header('Location:'.__SITE_ROOT__.'dashboard.php');
  }
  
}
