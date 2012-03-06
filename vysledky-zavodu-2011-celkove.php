<?php
  require("nastaveni.php"); 
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
          <tr><td colspan="32" style="text-align:center; vertical-align:bottom; height:50px;"><h1>Konečné celkové výsledky za rok 2011</h1></td></tr>
           <tr>
            <th style="text-align:center; vertical-align:bottom; width:50px;">Pořadí</th>
            <th colspan="3" style="text-align:center; vertical-align:bottom; width:150px;">Příjmení</th>
            <th colspan="2" style="text-align:center; vertical-align:bottom; width:150px;">Jméno</th>
            <th colspan="6" style="text-align:center; vertical-align:bottom; width:150px;">Oddíl</th>
            <th style="text-align:center; vertical-align:bottom; width:30px;" title="Hodinovka">1.</th>
            <th style="text-align:center; vertical-align:bottom; width:30px;" title="Časovka ArcelorMittal">2.</th>
            <th style="text-align:center; vertical-align:bottom; width:30px;" title="Mlynářská časovka">3.</th>
            <th style="text-align:center; vertical-align:bottom; width:30px;" title="O cenu Krnova">4.</th>
            <th style="text-align:center; vertical-align:bottom; width:30px;" title="Tour de Sádek">5.</th>
            <th style="text-align:center; vertical-align:bottom; width:30px;" title="Velkopolomské okruhy (Mistrovství SPAC)">6.</th>
            <th style="text-align:center; vertical-align:bottom; width:30px;" title="Tour de Javorový">7.</th>
            <th style="text-align:center; vertical-align:bottom; width:30px;" title="Cena Continentalu">8.</th>
            <th style="text-align:center; vertical-align:bottom; width:30px;" title="Memoriál Aloise Dohnala">9.</th>
            <th style="text-align:center; vertical-align:bottom; width:30px;" title="MČR silnice">10.</th>
            <th style="text-align:center; vertical-align:bottom; width:30px;" title="MČR časovka">11.</th>
            <th style="text-align:center; vertical-align:bottom; width:30px;" title="Stonavská časovka (Mistrovství SPAC)">12.</th>
            <th style="text-align:center; vertical-align:bottom; width:30px;" title="Grand Prix Forman">13.</th>
            <th style="text-align:center; vertical-align:bottom; width:30px;" title="Velká cena Lašska">14.</th>
            <th style="text-align:center; vertical-align:bottom; width:30px;" title="Paskovský kriťák">15.</th>
            <th style="text-align:center; vertical-align:bottom; width:30px;" title="Mokrolazecká 60">16.</th>
            <th style="text-align:center; vertical-align:bottom; width:30px;" title="Bělské okruhy">17.</th>
            <th style="text-align:center; vertical-align:bottom; width:30px;" title="O pohár obce Krásná">18.</th>
            <th style="text-align:center; vertical-align:bottom; width:30px;">Celkem</th>
            <th colspan="2" style="text-align:center; vertical-align:bottom; width:30px;">Top 10</th>
          </tr>
          <?php 
            $dotaz="SELECT * FROM spac_results_2011 t
                 JOIN spac_category c ON (t.id_category=c.id)
                 ORDER BY id_category, total_best_races DESC";
            $vysledek = MySQL_Query($dotaz);
            $i = 1;
            $categoryTmp = "X";
            while ($zaznam = MySQL_Fetch_Array($vysledek))
            {
              $id=$zaznam["id"];
              $firstname=$zaznam["racer_firstname"];
              $surname=$zaznam["racer_surname"];
              $team=$zaznam["racer_team"];
              $category=$zaznam["prefix"];
              $r1=$zaznam["race_1"];
              $r2=$zaznam["race_2"];
              $r3=$zaznam["race_3"];
              $r4=$zaznam["race_4"];
              $r5=$zaznam["race_5"];
              $r6=$zaznam["race_6"];
              $r7=$zaznam["race_7"];
              $r8=$zaznam["race_8"];
              $r9=$zaznam["race_9"];
              $r10=$zaznam["race_10"];
              $r11=$zaznam["race_11"];
              $r12=$zaznam["race_12"];
              $r13=$zaznam["race_13"];
              $r14=$zaznam["race_14"];
              $r15=$zaznam["race_15"];
              $r16=$zaznam["race_16"];
              $r17=$zaznam["race_17"];
              $r18=$zaznam["race_18"];
              $total=$zaznam["total"];
              $totalBest=$zaznam["total_best_races"];

              if ($categoryTmp != $category) {
                  $categoryTmp = $category;
                  echo "<tr><td colspan=\"32\"> &nbsp;</td></tr>";
                  echo "<tr><td colspan=\"32\"> <h3>Kategorie $category</h3></td></tr>";
                  $i=1;
              }
              if ($i % 2)
              {
                echo "<tr><td style=\"text-align:center; vertical-align:bottom; width:50px;\">$i.</td>
                  <td colspan=\"3\" style=\"text-align:left; width:150px;\"><a href='zavodnik-profil.php?surname=$surname&firstname=$firstname'>$surname</a></td>
                  <td colspan=\"2\" style=\"text-align:left; width:150px;\">$firstname</td>
                  <td colspan=\"6\" style=\"text-align:left; width:150px;\">$team</td>
                  <td style=\"text-align:center; width:30px;\" title=\"Hodinovka\">$r1</td>
                  <td style=\"text-align:center; width:30px;\" title=\"Časovka ArcelorMittal\">$r2</td>
                  <td style=\"text-align:center; width:30px;\" title=\"Mlynářská časovka\">$r3</td>
                  <td style=\"text-align:center; width:30px;\" title=\"O cenu Krnova\">$r4</td>
                  <td style=\"text-align:center; width:30px;\" title=\"Tour de Sádek\">$r5</td>
                  <td style=\"text-align:center; width:30px;\" title=\"Velkopolomské okruhy (Mistrovství SPAC)\">$r6</td>
                  <td style=\"text-align:center; width:30px;\" title=\"Tour de Javorový\">$r7</td>
                  <td style=\"text-align:center; width:30px;\" title=\"Cena Continentalu\">$r8</td>
                  <td style=\"text-align:center; width:30px;\" title=\"Memoriál Aloise Dohnala\">$r9</td>
                  <td style=\"text-align:center; width:30px;\" title=\"MČR silnice\">$r10</td>
                  <td style=\"text-align:center; width:30px;\" title=\"MČR časovka\">$r11</td>
                  <td style=\"text-align:center; width:30px;\" title=\"Stonavská časovka (Mistrovství SPAC)\">$r12</td>
                  <td style=\"text-align:center; width:30px;\" title=\"Grand Prix Forman\">$r13</td>
                  <td style=\"text-align:center; width:30px;\" title=\"Velká cena Lašska\">$r14</td>
                  <td style=\"text-align:center; width:30px;\" title=\"Paskovský kriťák\">$r15</td>
                  <td style=\"text-align:center; width:30px;\" title=\"Mokrolazecká 60\">$r16</td>
                  <td style=\"text-align:center; width:30px;\" title=\"Bělské okruhy\">$r17</td>
                  <td style=\"text-align:center; width:30px;\" title=\"O pohár obce Krásná\">$r18</td>
                  <td style=\"text-align:center; width:30px;\">$total</td>
                  <td colspan=\"2\" style=\"text-align:center; width:30px;\">$totalBest</td>
                  </tr>\n\t";
              }
              if (!($i % 2))
              {
                echo "<tr class='odd'><td style=\"text-align:center; vertical-align:bottom; width:50px;\">$i.</td>
                  <td colspan=\"3\" style=\"text-align:left; width:150px;\"><a href='zavodnik-profil.php?surname=$surname&firstname=$firstname'>$surname</a></td>
                  <td colspan=\"2\" style=\"text-align:left; width:150px;\">$firstname</td>
                  <td colspan=\"6\" style=\"text-align:left; width:150px;\">$team</td>
                  <td style=\"text-align:center; width:30px;\" title=\"Hodinovka\">$r1</td>
                  <td style=\"text-align:center; width:30px;\" title=\"Časovka ArcelorMittal\">$r2</td>
                  <td style=\"text-align:center; width:30px;\" title=\"Mlynářská časovka\">$r3</td>
                  <td style=\"text-align:center; width:30px;\" title=\"O cenu Krnova\">$r4</td>
                  <td style=\"text-align:center; width:30px;\" title=\"Tour de Sádek\">$r5</td>
                  <td style=\"text-align:center; width:30px;\" title=\"Velkopolomské okruhy (Mistrovství SPAC)\">$r6</td>
                  <td style=\"text-align:center; width:30px;\" title=\"Tour de Javorový\">$r7</td>
                  <td style=\"text-align:center; width:30px;\" title=\"Cena Continentalu\">$r8</td>
                  <td style=\"text-align:center; width:30px;\" title=\"Memoriál Aloise Dohnala\">$r9</td>
                  <td style=\"text-align:center; width:30px;\" title=\"MČR silnice\">$r10</td>
                  <td style=\"text-align:center; width:30px;\" title=\"MČR časovka\">$r11</td>
                  <td style=\"text-align:center; width:30px;\" title=\"Stonavská časovka (Mistrovství SPAC)\">$r12</td>
                  <td style=\"text-align:center; width:30px;\" title=\"Grand Prix Forman\">$r13</td>
                  <td style=\"text-align:center; width:30px;\" title=\"Velká cena Lašska\">$r14</td>
                  <td style=\"text-align:center; width:30px;\" title=\"Paskovský kriťák\">$r15</td>
                  <td style=\"text-align:center; width:30px;\" title=\"Mokrolazecká 60\">$r16</td>
                  <td style=\"text-align:center; width:30px;\" title=\"Bělské okruhy\">$r17</td>
                  <td style=\"text-align:center; width:30px;\" title=\"O pohár obce Krásná\">$r18</td>
                  <td style=\"text-align:center; width:30px;\">$total</td>
                  <td colspan=\"2\" style=\"text-align:center; width:30px;\">$totalBest</td>
                  </tr>\n\t";
              }
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