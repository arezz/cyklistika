<?php
  require("nastaveni.php");
  include("admin-prihlaseni.php");
  echo "<?xml version='1.0' encoding='windows-1250' ?>\n";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=windows-1250" />
    <meta name="generator" content="PSPad editor, www.pspad.com" />
    <title>Cyklistika</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
  </head>
  <body>
    <div class="container">
      <div class="menu">
        <?php include("menu.php"); ?>
      </div>
      <div class="content">
        <form action='admin.php' method='post'>
          <table class="prihlaseni">
            <tr><td style="height:50px; text-align:center; vertical-align:bottom;"><h1>Administrace</h1></td></tr>
            <tr><td style="text-align:center;"><?php if (isset($_SESSION['administrace'])) {echo "<span class='succes'>Přihlášení proběhlo úspěšně</span>";} else {echo "Heslo pro administraci:&nbsp;<input type='password' name='password' /><input type='hidden' name='action' value='1' /><input type='submit' value='OK' />(nedokončeno)";} ?></td></tr>
            <tr><td style="text-align:center;"><?php if (isset($succes)) {if ($succes == 0) {echo "<span class='error'>Nesprávné heslo</span>";}}  ?></td></tr>
          </table>
        </form>
      </div>
    </div>
  </body>
</html>
<?php MySQL_Close($pripoj); ?>