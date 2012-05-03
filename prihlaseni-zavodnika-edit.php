<?php
  require("nastaveni.php");
  include("prihlaseni-zavodnika-edit-fce.php");
  include("utils-funkce.php");
  $id = $_GET["id"];
  $dotaz="SELECT * FROM spac_registration WHERE id=$id";
  $vysledek = MySQL_Query($dotaz);
  while ($zaznam = MySQL_Fetch_Array($vysledek))
  {
    $zavod=$zaznam["id_race"];;
    $prijmeni=$zaznam["surname"];;
    $jmeno=$zaznam["NAME"];
    $kategorie=$zaznam["id_category"];
    $cislo=$zaznam["spac_number"];
    $oddil=$zaznam["team"];
    $poznamka=$zaznam["notice"];
  }
  echo "<?xml version='1.0' encoding='windows-1250' ?>"; ?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">  
  <head>    
    <meta http-equiv="content-type" content="text/html; charset=windows-1250" />    
    <meta name="generator" content="PSPad editor, www.pspad.com" />    
    <title>SPAC - p�ihl�en� na z�vod</title>
    <link rel="stylesheet" type="text/css" href="style.css" />  
  </head>  
  <body>
    <div class="container">    
      <div class="menu">      
        <?php include("menu.php"); ?>    
      </div>    
      <div class="content">
        <form action="prihlaseni-zavodnika-edit.php?id=<?php echo $id; ?>" method="post">
          <table>        
            <tr><td colspan="2" style="text-align:center; vertical-align:bottom; height:50px;"><h1>Oprava p�ihl�en�ho z�vodn�ka</h1></td></tr>
            <tr><td style="text-align:right; vertical-align:top;">P��jmen�:&nbsp;</td><td style="text-align:left;"><input type="text" name="prijmeni" value="<?php echo "$prijmeni"; ?>"/><?php errmsg("prijmeni","Zadejte p��jmen�"); ?></td></tr>
            <tr><td style="text-align:right; vertical-align:top;">Jm�no:&nbsp;</td><td style="text-align:left;"><input type="text" name="jmeno" value="<?php echo "$jmeno"; ?>"/><?php errmsg("jmeno","Zadejte jm�no"); ?></td></tr>
            <tr><td style="text-align:right; vertical-align:top;">Odd�l:&nbsp;</td><td style="text-align:left;"><input type="text" name="oddil" value="<?php echo "$oddil"; ?>"/></td></tr>
            <tr><td style="text-align:right; vertical-align:top;">Startovn� ��slo:&nbsp;</td><td style="text-align:left;"><input type="text" name="cislo" value="<?php echo "$cislo"; ?>"/> (pouze pro <a href="http://www.spac-os.cz/web/_docs/seznam_licenci_2012.xls">licencovan�</a>)</td></tr>
            <tr><td style="text-align:right; vertical-align:top;">Pozn�mka:&nbsp;</td><td style="text-align:left;"><textarea name="poznamka" rows="4" cols="30" ><?php echo "$poznamka"; ?></textarea></td></tr>
            <tr><td></td><td style="text-align:left;"><input type="hidden" name="id" value="<?php echo $id; ?>" /><input type="hidden" name="zavod" value="<?php echo "$zavod"; ?>"/><input type="hidden" name="kategorie" value="<?php echo "$kategorie"; ?>"/><input type="hidden" name="action" value="1" /><input type="submit" value="Potvrdit" /></td></tr>
            <tr><td colspan="2" style="text-align:center;"><?php if (isset($succes)) { echo "<span class='succes'>$succes</span>"; } if (isset($error)){echo "<span class='error'>Jeden nebo v�ce �daj� nebylo vypln�no</span>";} ?></td></tr>
            <tr><td colspan="2" style="text-align:center;"><span class="error">*</span> povinn� �daje</td></tr>
          </table>            
        </form>    
      </div>
      <div class="paticka">
        <?php include("paticka.php"); ?>
      </div> 
    </div>  
  </body>
</html>
<?php MySQL_Close($pripoj); ?>