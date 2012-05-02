<?php
  require("nastaveni.php");
  include("vypis-zavodu-pridat-zavod-fce.php");
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
        <form action="vypis-zavodu-pridat-zavod.php" method="post">
          <table>
            <tr><td colspan="6" style="text-align:center; vertical-align:bottom; height:50px;"><h1>P�idat z�vod</h1></td></tr>
            <tr><th>N�zev z�vodu</th><th>Datum (rrrr-mm-dd)</th><th>M�sto</th><th>�ampion�t (integer)</th><th>Sez�na (integer)</th><th>Pozn�mka</th><th>Aktivn�</th></tr>
            <tr><td><input type="text" name="name" maxlength="64" /></td><td><input type="text" name="date" /></td><td><input type="text" name="place" maxlength="64" /></td><td><input type="text" name="championship" maxlength="11" /></td><td><input type="text" name="season" maxlength="11" /></td><td><input type="text" name="notice" maxlength="256" /></td><td><input type="checkbox" name="active" checked="checked"/></td></tr>
            <tr><td colspan="6" style="text-align:center;"><input type="hidden" name="action" value="1" /><input type="submit" value="P�idat z�vod" /></td></tr>
            <tr><td colspan="6" style="text-align:center;"><?php if (isset($error)){echo "<span class='error'>$error</span>";}if (isset($succes)){echo "<span class='succes'>$succes</span>";} ?></td></tr>
          </table>
        </form>
      </div>
    </div>
  </body>
</html>
<?php MySQL_Close($pripoj); ?>