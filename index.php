<?php
  require("nastaveni.php");
  echo "<?xml version='1.0' encoding='windows-1250' ?>\n";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=windows-1250" />
    <meta name="generator" content="PSPad editor, www.pspad.com" />
    <title>SPAC - p�ihla�ov�n� na z�vody a statistiky</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
  </head>
  <body>
    <div class="container">
      <div class="menu">        
        <?php include("menu.php"); ?>
      </div>
      <div class="content">
      </div>
      <div class="paticka">
        <?php include("paticka.php"); ?>
      </div>          
    </div>
  </body>
</html>
<?php MySQL_Close($pripoj); ?>