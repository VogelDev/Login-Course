<?php

//if there is no constant names __CONFIG__ defined, do not load this file
if(!defined('__CONFIG__')) {
  exit('You do not have a config file');
}
// exit('config.php');
// Our config is below

define('__SITE_ROOT__', '/login/');

// Include db.php
include_once 'classes/db.php';

$con = DB::getConnection();
