<?php
  require("nastaveni.php");
  echo "<?xml version='1.0' encoding='windows-1250' ?>\n";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=windows-1250" />
    <meta name="generator" content="PSPad editor, www.pspad.com" />
    <title>SPAC - db funkce</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
  </head>
  <body>
    <div class="container">
      <div class="content">
       
          <?php
            
            $dotaz="UPDATE spac_race SET active_login=1 WHERE id=24";
            $vysledek = MySQL_Query($dotaz);
          ?>
        
      </div>      
    </div>
  </body>
</html>
<?php MySQL_Close($pripoj); ?>