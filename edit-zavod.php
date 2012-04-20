<?php
  require("nastaveni.php");
  include("edit-zavod-fce.php");
  $id = $_GET["id"];
  $dotaz="SELECT * FROM spac_race WHERE id=$id";
  $vysledek = MySQL_Query($dotaz);
  while ($zaznam = MySQL_Fetch_Array($vysledek))
  {
    $name=$zaznam["name"];
    $date=$zaznam["date"];
    $place=$zaznam["place"];
    $championship=$zaznam["championship"];                                                                
    $season=$zaznam["season"];
    $active=$zaznam["active_login"];
    $notice=$zaznam["notice"];
  }
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
        <form action="edit-zavod.php?id=<?php echo $id; ?>" method="post">
          <table>
            <tr><td colspan="6" style="text-align:center; vertical-align:bottom; height:50px;"><h1>Editace závodu</h1></td></tr>
            <tr><th>Název závodu</th><th>Datum (rrrr-mm-dd)</th><th>Místo</th><th>Šampionát (integer)</th><th>Sezóna (integer)</th><th>Poznámka</th><th style="width:20px;">Aktivní</th></tr>
            <tr><td><input type="text" name="name" value="<?php echo "$name"; ?>" maxlength="64" /></td><td><input type="text" name="date" value="<?php echo "$date"; ?>" /></td><td><input type="text" name="place" value="<?php echo "$place"; ?>" maxlength="64" /></td><td><input type="text" name="championship" value="<?php echo "$championship"; ?>" maxlength="11" /></td><td><input type="text" name="season" value="<?php echo "$season"; ?>" maxlength="11" /></td><td><input type="text" name="notice" value="<?php echo "$notice"; ?>" maxlength="256" /></td><td><input type="checkbox" name="active" <?php if ($active == 1) {echo "checked='checked'";} ?> /></td></tr>
            <tr><td colspan="6" style="text-align:center;"><input type="hidden" name="action" value="1" /><input type="hidden" name="id" value="<?php echo $id; ?>" /><input type="submit" value="Upravit" /></td></tr>
            <tr><td colspan="6" style="text-align:center;"><?php if (isset($error)){echo "<span class='error'>$error</span>";}if (isset($succes)){echo "<span class='succes'>$succes</span>";} ?></td></tr>
          </table>
        </form>
      </div>
    </div>
  </body>
</html>
<?php MySQL_Close($pripoj); ?>