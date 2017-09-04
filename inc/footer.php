<?php

//if there is no constant names __CONFIG__ defined, do not load this file
if(!defined('__CONFIG__')) {
  exit('You do not have a config file');
}

// Our config is below

?>


  <!-- jQuery is required -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <!-- UIkit JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.28/js/uikit.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.28/js/uikit-icons.min.js"></script>
  <script src="<?php echo __SITE_ROOT__;?>/assets/js/main.js"></script>
