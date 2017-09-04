<?php

//if there is no constant names __CONFIG__ defined, do not load this file
if(!defined('__CONFIG__')) {
  exit('You do not have a config file');
}

// Sessions are always on
  if(!isset($_SESSION)){
    session_start();
  }
// exit('config.php');
// Our config is below

define('__SITE_ROOT__', '/login/');

//Allow Errors
// error_reporting(-1);
// ini_set('display_errors', 'On');
// error_reporting(E_ALL); ini_set('display_errors', 1);


// Include db.php
include_once 'classes/db.php';
include_once 'classes/filter.php';

$con = DB::getConnection();

// echo 'done config';
