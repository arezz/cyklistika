<?php
  require("nastaveni.php");
  include("utils.php");
  $zavod = "race_1";
  if (isset($_GET["zavod"]))
  {
    $zavod = $_GET["zavod"];
  }
  $zavod_jmeno = "";
  if (isset($_GET["zavod_jmeno"]))
  {
    $zavod_jmeno = $_GET["zavod_jmeno"];
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
      
      NEPOUZIVANE, protoze vysledky jednotlivych zavodu jsou spatne (razeni je diky koeficientu posrane)
      
        <table>
          <tr><td colspan="4" style="text-align:center; vertical-align:bottom; height:50px;"><h1>Výpis výsledků pro závod <?php echo $zavod_jmeno ?> </h1></td></tr>
           <tr>
            <th style="text-align:center; vertical-align:bottom; width:50px;">Pořadí</th>
            <th style="text-align:center; vertical-align:bottom; width:150px;">Jméno</th>
            <th style="text-align:center; vertical-align:bottom; width:150px;">Oddíl</th>
            <th style="text-align:center; vertical-align:bottom; width:30px;">Body</th>
          </tr>
          <?php 
            $dotaz="SELECT * FROM spac_results_2010 t
                 JOIN spac_category c ON (t.id_category=c.id)
                 ORDER BY id_category, $zavod DESC";
            $vysledek = MySQL_Query($dotaz);
            while ($zaznam = MySQL_Fetch_Array($vysledek))
            {
              $id=$zaznam["id"];
              $id_racer=$zaznam["id_racer"];
              $firstname=$zaznam["firstname"];
              $surname=$zaznam["surname"];
              $team=$zaznam["team"];
              $category=$zaznam["prefix"];
              $points=$zaznam["$zavod"];
              $standing=$zaznam["final_standing"];
              
              if ($standing == 1) {
              	  if ($category != "A") {
              	  	echo "<tr><td colspan=\"4\"> &nbsp;</td></tr>";
               	  }
                  echo "<tr><td colspan=\"4\"> <h3>Kategorie $category</h3></td></tr>";
              }
              if ($standing % 2)
              {
                  echo "<tr><td style=\"text-align:center; vertical-align:bottom; width:50px;\">$standing.</td>";
              }
              else
              {
                echo "<tr class='odd'><td style=\"text-align:center; vertical-align:bottom; width:50px;\">$standing.</td>";
              }
              echo "<td style=\"text-align:left; width:150px;\"><a href='zavodnik-profil.php?id_racer=$id_racer'>$surname $firstname</a></td>
                  <td style=\"text-align:left; width:150px;\">$team</td>
                  <td style=\"text-align:center; width:50px;\">$points</td></tr>\n\t";
            }
            echo "<tr><td colspan=\"4\"> &nbsp;</td></tr>";
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