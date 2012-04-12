<?php
  require("nastaveni.php"); 
  include("utils.php");
  $id_category = -1;
  if (isset($_GET["id_category"]))
  {
    $id_category = $_GET["id_category"];
  }
  echo "<?xml version='1.0' encoding='windows-1250' ?>\n";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=windows-1250" />
    <meta name="generator" content="PSPad editor, www.pspad.com" />
    <title>SPAC - statistiky</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
  </head>
  <body>
    <div class="container">
      <div class="menu">
        <?php include("menu.php"); ?>
      </div>
      <div class="content">
        <table>
          <tr><td colspan="32" style="text-align:center; vertical-align:bottom; height:50px;"><h1>Konečné celkové výsledky za rok 2002</h1></td></tr>
          <?php 
           echo "<tr>
            <th style=\"text-align:center; vertical-align:bottom; width:50px;\">Pořadí</th>
            <th colspan=\"3\" style=\"text-align:center; vertical-align:bottom; width:150px;\">Příjmení</th>
            <th colspan=\"2\" style=\"text-align:center; vertical-align:bottom; width:150px;\">Jméno</th>
            <th colspan=\"6\" style=\"text-align:center; vertical-align:bottom; width:150px;\">Oddíl</th>
            <th style=\"text-align:center; vertical-align:bottom; width:30px;\">Celkem</th>
          </tr>";
          
            if ($id_category === -1) {
	            $dotaz="SELECT * FROM spac_results_2002 t
	                 JOIN spac_category c ON (t.id_category=c.id)
	                 ORDER BY id_category, total DESC";
            } else {
            	$dotaz="SELECT * FROM spac_results_2002 t
	                 JOIN spac_category c ON (t.id_category=c.id)
	                 WHERE t.id_category=$id_category
	                 ORDER BY id_category, total DESC";
            }
            $vysledek = MySQL_Query($dotaz);
            $i = 1;
            $categoryTmp = "X";
            while ($zaznam = MySQL_Fetch_Array($vysledek))
            {
              $id=$zaznam["id"];
              $id_racer=$zaznam["id_racer"];
              $firstname=$zaznam["firstname"];
              $surname=$zaznam["surname"];
              $team=$zaznam["team"];
              $category=$zaznam["prefix"];
              $categoryName=$zaznam["name"];
              $total=$zaznam["total"];

              if ($categoryTmp != $category) {
                  $categoryTmp = $category;
                  echo "<tr><td colspan=\"32\"> &nbsp;</td></tr>";
                  echo "<tr><td colspan=\"32\"> <h3>Kategorie $category - $categoryName</h3></td></tr>";
                  $i=1;
              }
              if ($i % 2)
              {
                echo "<tr><td style=\"text-align:center; vertical-align:bottom; width:50px;\">$i.</td>";
              }
              else
              {
                echo "<tr class='odd'><td style=\"text-align:center; vertical-align:bottom; width:50px;\">$i.</td>";
              }
              echo "<td colspan=\"3\" style=\"text-align:left; width:150px;\"><a href='zavodnik-profil.php?id_racer=$id_racer'>$surname</a></td>
	                  <td colspan=\"2\" style=\"text-align:left; width:150px;\">$firstname</td>
	                  <td colspan=\"6\" style=\"text-align:left; width:150px;\">$team</td>
	                  <td style=\"text-align:center; width:30px;\">$total</td>
	                  </tr>\n\t";
              $i++;
            }
            echo "<tr><td colspan=\"32\"> &nbsp;</td></tr>";
          ?>
        </table>
      </div>
      <div class="paticka">
        <?php include("paticka.php"); ?>
      </div> 
    </div>
  </body>
</html>
<?php MySQL_Close($pripoj); ?>