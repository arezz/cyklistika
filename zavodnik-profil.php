<?php
  require("nastaveni.php");
  include("utils.php");
  $id_racer = 0;
  if (isset($_GET["id_racer"]))
  {
    $id_racer = $_GET["id_racer"];
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
       	<?php
        	$dotaz_zavodnik="SELECT * FROM racer r                    
                    WHERE r.id=$id_racer";
            $vysledek_zavodnik = MySQL_Query($dotaz_zavodnik);
            while ($zaznam = MySQL_Fetch_Array($vysledek_zavodnik))
            {
            	$firstname=$zaznam["firstname"];
              	$surname=$zaznam["surname"];
            }
          
        ?>
        <tr><td colspan="4" style="text-align:center; vertical-align:bottom; height:50px;"><h1><?php echo $firstname."&nbsp;".$surname ?></h1></td></tr>
          
        <?php 
          // 2011 +++++++++++++++++++++++++++++++++++++++++++++++++++++++++
            $pocetZavodniku = 0;
            $umisteniVKategorii = 0;
            $pocetZavodu = 0;

            $dotaz=sprintf("SELECT * FROM spac_results_2011 sr
                    JOIN spac_category c ON (sr.id_category=c.id)
                    WHERE sr.id_racer=$id_racer");
            $vysledek = MySQL_Query($dotaz);
            while ($zaznam = MySQL_Fetch_Array($vysledek))
            {
              $id=$zaznam["id"];
              $firstnameX=$zaznam["racer_firstname"];
              $surnameX=$zaznam["racer_surname"];
              $team=$zaznam["racer_team"];
              $category=$zaznam["prefix"];
              $categoryId=$zaznam["id_category"];
              $categoryName=$zaznam["name"];
              $totalPoints=$zaznam["total"];
              $totalPointsBest=$zaznam["total_best_races"];
              $r1=$zaznam["race_1"];              $r2=$zaznam["race_2"];
              $r3=$zaznam["race_3"];              $r4=$zaznam["race_4"];
              $r5=$zaznam["race_5"];              $r6=$zaznam["race_6"];
              $r7=$zaznam["race_7"];              $r8=$zaznam["race_8"];
              $r9=$zaznam["race_9"];              $r10=$zaznam["race_10"];
              $r11=$zaznam["race_11"];            $r12=$zaznam["race_12"];
              $r13=$zaznam["race_13"];            $r14=$zaznam["race_14"];
              $r15=$zaznam["race_15"];            $r16=$zaznam["race_16"];
              $r17=$zaznam["race_17"];            $r18=$zaznam["race_18"];

              $dotaz2 = "SELECT COUNT(*) pocet FROM spac_results_2011
                         WHERE id_category=$categoryId";
              $vysledek2 = MySQL_Query($dotaz2);
              while ($zaznam2 = MySQL_Fetch_Array($vysledek2))
              {
                $pocetZavodniku=$zaznam2["pocet"];
              }
              $dotaz3 = "SELECT COUNT(*) pocet FROM spac_results_2011
                         WHERE id_category=$categoryId AND total_best_races>$totalPointsBest";
              $vysledek3 = MySQL_Query($dotaz3);
              while ($zaznam3 = MySQL_Fetch_Array($vysledek3))
              {
                 $umisteniVKategorii=$zaznam3["pocet"] + 1;
              }

              $nejUmisteniBody = 0;
              $nejUmisteniPoradi = 0;
              $nejUmisteniZavod = "";
              if ($r1 >$nejUmisteniBody) {  $nejUmisteniBody=$r1;  $nejUmisteniZavod=$raceName11_1;  $nejUmisteniPoradi=getRealStanding2011(40, $r1); }
              if ($r2 >$nejUmisteniBody) {  $nejUmisteniBody=$r2;  $nejUmisteniZavod=$raceName11_2;  $nejUmisteniPoradi=getRealStanding2011(40, $r2); }
              if ($r3 >$nejUmisteniBody) {  $nejUmisteniBody=$r3;  $nejUmisteniZavod=$raceName11_3;  $nejUmisteniPoradi=getRealStanding2011(40, $r3); }
              if ($r4 >$nejUmisteniBody) {  $nejUmisteniBody=$r4;  $nejUmisteniZavod=$raceName11_4;  $nejUmisteniPoradi=getRealStanding2011(40, $r4); }
              if ($r5 >$nejUmisteniBody) {  $nejUmisteniBody=$r5;  $nejUmisteniZavod=$raceName11_5;  $nejUmisteniPoradi=getRealStanding2011(40, $r5); }
              if (($r6-10) >$nejUmisteniBody) {  $nejUmisteniBody=($r6-10);  $nejUmisteniZavod=$raceName11_6;  $nejUmisteniPoradi=getRealStanding2011(50, $r6); }
              if ($r7 >$nejUmisteniBody) {  $nejUmisteniBody=$r7;  $nejUmisteniZavod=$raceName11_7;  $nejUmisteniPoradi=getRealStanding2011(40, $r7); }
              if ($r8 >$nejUmisteniBody) {  $nejUmisteniBody=$r8;  $nejUmisteniZavod=$raceName11_8;  $nejUmisteniPoradi=getRealStanding2011(40, $r8); }
              if ($r9 >$nejUmisteniBody) {  $nejUmisteniBody=$r9;  $nejUmisteniZavod=$raceName11_9;  $nejUmisteniPoradi=getRealStanding2011(40, $r9); }
              //if ($r10 >$nejUmisteniBody) { $nejUmisteniBody=$r10; $nejUmisteniZavod=$raceName11_10; $nejUmisteniPoradi=getRealStanding2011(40, $r10); }
              //if ($r11 >$nejUmisteniBody) { $nejUmisteniBody=$r11; $nejUmisteniZavod=$raceName11_11; $nejUmisteniPoradi=getRealStanding2011(40, $r11); }
              if (($r12-10) >$nejUmisteniBody) { $nejUmisteniBody=($r12-10); $nejUmisteniZavod=$raceName11_12; $nejUmisteniPoradi=getRealStanding2011(50, $r12); }
              if ($r13 >$nejUmisteniBody) { $nejUmisteniBody=$r13; $nejUmisteniZavod=$raceName11_13; $nejUmisteniPoradi=getRealStanding2011(40, $r13); }
              if ($r14 >$nejUmisteniBody) { $nejUmisteniBody=$r14; $nejUmisteniZavod=$raceName11_14; $nejUmisteniPoradi=getRealStanding2011(40, $r14); }
              if ($r15 >$nejUmisteniBody) { $nejUmisteniBody=$r15; $nejUmisteniZavod=$raceName11_15; $nejUmisteniPoradi=getRealStanding2011(40, $r15); }
              if ($r16 >$nejUmisteniBody) { $nejUmisteniBody=$r16; $nejUmisteniZavod=$raceName11_16; $nejUmisteniPoradi=getRealStanding2011(40, $r16); }
              if ($r17 >$nejUmisteniBody) { $nejUmisteniBody=$r17; $nejUmisteniZavod=$raceName11_17; $nejUmisteniPoradi=getRealStanding2011(40, $r17); }
              if ($r18 >$nejUmisteniBody) { $nejUmisteniBody=$r18; $nejUmisteniZavod=$raceName11_18; $nejUmisteniPoradi=getRealStanding2011(40, $r18); }

              // pocet zavodu
              if ($r1 > 0) { $pocetZavodu += 1; }
              if ($r2 > 0) { $pocetZavodu += 1; }
              if ($r3 > 0) { $pocetZavodu += 1; }
              if ($r4 > 0) { $pocetZavodu += 1; }
              if ($r5 > 0) { $pocetZavodu += 1; }
              if ($r6 > 0) { $pocetZavodu += 1; }
              if ($r7 > 0) { $pocetZavodu += 1; }
              if ($r8 > 0) { $pocetZavodu += 1; }
              if ($r9 > 0) { $pocetZavodu += 1; }
              if ($r10 > 0) { $pocetZavodu += 1; }
              if ($r11 > 0) { $pocetZavodu += 1; }
              if ($r12 > 0) { $pocetZavodu += 1; }
              if ($r13 > 0) { $pocetZavodu += 1; }
              if ($r14 > 0) { $pocetZavodu += 1; }
              if ($r15 > 0) { $pocetZavodu += 1; }
              if ($r16 > 0) { $pocetZavodu += 1; }
              if ($r17 > 0) { $pocetZavodu += 1; }
              if ($r18 > 0) { $pocetZavodu += 1; }


              echo "<tr><td colspan=\"4\" style=\"text-align:center;\"><h3><a href=\"vysledky-zavodu-2011-celkove.php?id_category=$categoryId\">Sezona 2011</a></h3></td>";
              echo "<tr><td style=\"text-align:right; padding-right:15px;\">Oddíl:</td>
                    <td style=\"text-align:left; color:#FF8F16; padding-left:15px;\"><b>$team</b></td>
              		<td style=\"text-align:right; padding-right:15px;\">Dokončených závodů / celkem:</td>
                    <td style=\"text-align:left; padding-left:15px;\"><b>$pocetZavodu / 18</b></td></tr>";
              echo "<tr><td style=\"text-align:right; padding-right:15px;\">Kategorie:</td>
                    <td style=\"text-align:left; color:#FF8F16; padding-left:15px;\"><b>$category - $categoryName</b></td>
              	    <td style=\"text-align:right; padding-right:15px;\">Součet bodů (10 NEJ / celkem):</td>
                    <td style=\"text-align:left; padding-left:15px;\"><b>$totalPointsBest / $totalPoints</b></td></tr>";
              echo "<tr><td style=\"text-align:right; padding-right:15px;\">Konečné umístění:</td>
                    <td style=\"text-align:left; color:#FF8F16; padding-left:15px;\"><b>$umisteniVKategorii. / $pocetZavodniku (pouze s licencí)</b></td>
              		<td style=\"text-align:right; padding-right:15px;\">Nejlepší umístění:</td>
                    <td style=\"text-align:left; padding-left:15px;\"><b>$nejUmisteniPoradi. ($nejUmisteniZavod)</b></td></tr>";
            }
            if ($pocetZavodu === 0) {
            	echo "<tr><td colspan=\"4\" style=\"text-align:center;\"><h3>Sezona 2011 - bez účasti</h3></td>";
            }
            // 2011 -----------------------------------------------------------
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