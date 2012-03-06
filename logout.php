<?php
  session_start();
  unset($_SESSION["administrace"]);
  header("Location: index.php");
?>
