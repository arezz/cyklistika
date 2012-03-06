<?php
  require("nastaveni.php");
  include("utils.php");
  $table = "spac_results_2011";
  if (isset($_GET["table"]))
  {
    $table = $_GET["table"];
  }
  $zavod = "race_1";
  if (isset($_GET["zavod"]))
  {
    $zavod = $_GET["zavod"];
  }
  $zavod_jmeno = "Hodinovka";
  if (isset($_GET["zavod_jmeno"]))
  {
    $zavod_jmeno = $_GET["zavod_jmeno"];
  }
  $raceMaxPoints = 40;
  if ($zavod === "race_6" || $zavod === "race_12") {
      $raceMaxPoints = 50;
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
          <tr><td colspan="4" style="text-align:center; vertical-align:bottom; height:50px;"><h1>Výpis výsledků pro závod <?php echo $zavod_jmeno ?> </h1></td></tr>
           <tr>
            <th style="text-align:center; vertical-align:bottom; width:50px;">Pořadí</th>
            <th style="text-align:center; vertical-align:bottom; width:150px;">Jméno</th>
            <th style="text-align:center; vertical-align:bottom; width:150px;">Oddíl</th>
            <th style="text-align:center; vertical-align:bottom; width:30px;">Body</th>
          </tr>
          <?php 
            $dotaz="SELECT * FROM $table t
                 JOIN spac_category c ON (t.id_category=c.id)
                 ORDER BY id_category, $zavod DESC";
            $vysledek = MySQL_Query($dotaz);
            $i = 1;
            while ($zaznam = MySQL_Fetch_Array($vysledek))
            {
              $id=$zaznam["id"];
              $firstname=$zaznam["racer_firstname"];
              $surname=$zaznam["racer_surname"];
              $team=$zaznam["racer_team"];
              $category=$zaznam["prefix"];
              $points=$zaznam["$zavod"];
              if ($points > 0) {
                  if ($i == 1) {
                      echo "<tr><td colspan=\"4\"> <h3>Kategorie $category</h3></td></tr>";
                  }
                  if ($i % 2)
                  {
                    echo "<tr><td style=\"text-align:center; vertical-align:bottom; width:50px;\">$i. (reálně ".getRealStanding2011($raceMaxPoints,$points).".)</td>
                        <td style=\"text-align:left; width:150px;\"><a href='zavodnik-profil.php?surname=$surname&firstname=$firstname'>$surname $firstname</a></td>
                        <td style=\"text-align:left; width:150px;\">$team</td>
                        <td style=\"text-align:center; width:50px;\">$points</td></tr>\n\t";
                  }
                  if (!($i % 2))
                  {
                    echo "<tr class='odd'><td style=\"text-align:center; vertical-align:bottom; width:50px;\">$i. (reálně ".getRealStanding2011($raceMaxPoints,$points).".)</td>
                      <td style=\"text-align:left; width:150px;\"><a href='zavodnik-profil.php?surname=$surname&firstname=$firstname'>$surname $firstname</a></td>
                      <td style=\"text-align:left; width:150px;\">$team</td>
                      <td style=\"text-align:center; width:50px;\">$points</td></tr>\n\t";
                  }
                  $i++;
              } else {
                  if ($i > 1) {
                     echo "<tr><td colspan=\"4\"> &nbsp;</td></tr>";
                  }
                  $i=1;
              }
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