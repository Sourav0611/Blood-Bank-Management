<?php
  error_reporting(0);
   include('config.php');
   session_destroy();
   header('location:index.php');
?>