<?php
  require("../nastaveni.php");
  include("prihlaseni-save.php");
  include("../utils-funkce.php");
  echo "<?xml version='1.0' encoding='windows-1250' ?>"; ?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">  
  <head>    
    <meta http-equiv="content-type" content="text/html; charset=windows-1250" />    
    <meta name="generator" content="PSPad editor, www.pspad.com" />    
    <title>Přihlášení na závod</title>
    <link rel="stylesheet" type="text/css" href="style.css" />  
  </head>  
  <body>
    <div class="container">    
      <div class="content">
        <form action="prihlaseni-zavodnika.php" method="post">      
          <table>        
            <tr><td colspan="2" style="text-align:center; vertical-align:bottom; height:50px;"><h1>Přihlášení na závod</h1></td></tr>
            <tr><td style="text-align:right; vertical-align:top;">Závod:&nbsp;</td><td style="text-align:left;"><?php include("prihlaseni-combobox-zavod.php"); errmsg("zavod","Vyberte závod"); ?></td></tr>
            <tr><td style="text-align:right; vertical-align:top;">Příjmení:&nbsp;</td><td style="text-align:left;"><input type="text" name="prijmeni" <?php writte("prijmeni"); ?>/><?php errmsg("prijmeni","Zadejte příjmení"); ?></td></tr>
            <tr><td style="text-align:right; vertical-align:top;">Jméno:&nbsp;</td><td style="text-align:left;"><input type="text" name="jmeno" <?php writte("jmeno"); ?>/><?php errmsg("jmeno","Zadejte jméno"); ?></td></tr>
            <tr><td style="text-align:right; vertical-align:top;">E-mail:&nbsp;</td><td style="text-align:left;"><input type="text" name="oddil" <?php writte("oddil"); ?>/><?php errmsg("oddil","Zadejte email"); ?></td></tr>
            <tr><td style="text-align:right; vertical-align:top;">Kategorie:&nbsp;</td><td style="text-align:left;"><?php include("prihlaseni-combobox-kategorie.php"); errmsg("kategorie","Vyberte kategorii"); ?></td></tr>
            <tr><td style="text-align:right; vertical-align:top;">Poznámka:&nbsp;</td><td style="text-align:left;"><textarea name="poznamka" rows="4" cols="40"></textarea></td></tr>
            <tr><td></td><td style="text-align:left;"><input type="hidden" name="action" value="1" /><input type="submit" value="Potvrdit" /></td></tr>
            <tr><td colspan="2" style="text-align:center;"><?php if (isset($succes)) {if ($succes == 1){ echo "<span class='succes'>Závodník byl úspěšně přihlášen</span>";} if ($succes == 0) { echo "<span class='error'>Chyba na straně serveru</span>";} } if (isset($error)){echo "<span class='error'>Jeden nebo více údajů nebylo vyplněno</span>";} ?></td></tr>
            <tr><td colspan="2" style="text-align:center;"><span class="error">*</span> povinné údaje</td></tr>
            <tr><td>&nbsp;</td></tr>
            <tr><td colspan="2" style="text-align:center; vertical-align:bottom; height:50px;"><a href="zavod-hrabyne.php">Seznam přihlášených</a></td></tr>
          </table>
        </form>    
      </div>       
    </div>  
  </body>
</html>
<?php MySQL_Close($pripoj); ?>