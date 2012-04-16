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
    <title>SPAC - statistiky - profil</title>
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
              $pocetZavodu = 0;
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
			  $pocetZavodniku=$zaznam["total_racers"]; 
              $umisteniVKategorii=$zaznam["final_standing"];
              
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


              echo "<tr><td colspan=\"4\" style=\"text-align:center;\"><h3><a href=\"vysledky-celkove-2011.php?id_category=$categoryId\">Sezona 2011</a></h3></td>";
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
            	echo "<tr><td colspan=\"4\" style=\"text-align:center;\"><h3>Sezona 2011 - bez účasti nebo účast bez licence</h3></td>";
            }
            // 2011 -----------------------------------------------------------
            
            // 2010 +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
            $pocetZavodu = 0;

            $dotaz=sprintf("SELECT * FROM spac_results_2010 sr
                    JOIN spac_category c ON (sr.id_category=c.id)
                    WHERE sr.id_racer=$id_racer");
            $vysledek = MySQL_Query($dotaz);
            while ($zaznam = MySQL_Fetch_Array($vysledek))
            {
              $pocetZavodu = 0;
              $id=$zaznam["id"];
              $firstnameX=$zaznam["firstname"];
              $surnameX=$zaznam["surname"];
              $team=$zaznam["team"];
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
              $r17=$zaznam["race_17"];            
			  $pocetZavodniku=$zaznam["total_racers"]; 
              $umisteniVKategorii=$zaznam["final_standing"];
              $spacLicence=$zaznam["spac_licence"];
              
              $nejUmisteniBody = 0;
              $nejUmisteniPoradi = 0;
              $nejUmisteniZavod = "";
              if ($r1 >$nejUmisteniBody) {  $nejUmisteniBody=$r1;  $nejUmisteniZavod=$raceName10_1;  $nejUmisteniPoradi=getRealStanding2010($spacLicence, $r1); }
              if ($r2 >$nejUmisteniBody) {  $nejUmisteniBody=$r2;  $nejUmisteniZavod=$raceName10_2;  $nejUmisteniPoradi=getRealStanding2010($spacLicence, $r2); }
              if ($r3 >$nejUmisteniBody) {  $nejUmisteniBody=$r3;  $nejUmisteniZavod=$raceName10_3;  $nejUmisteniPoradi=getRealStanding2010($spacLicence, $r3); }
              if ($r4 >$nejUmisteniBody) {  $nejUmisteniBody=$r4;  $nejUmisteniZavod=$raceName10_4;  $nejUmisteniPoradi=getRealStanding2010($spacLicence, $r4); }
              if (($r5-5) >$nejUmisteniBody) {  $nejUmisteniBody=($r5-5);  $nejUmisteniZavod=$raceName10_5;  $nejUmisteniPoradi=getRealStanding2010($spacLicence, ($r5-5)); }
              if ($r6 >$nejUmisteniBody) {  $nejUmisteniBody=$r6;  $nejUmisteniZavod=$raceName10_6;  $nejUmisteniPoradi=getRealStanding2010($spacLicence, $r6); }
              if ($r7 >$nejUmisteniBody) {  $nejUmisteniBody=$r7;  $nejUmisteniZavod=$raceName10_7;  $nejUmisteniPoradi=getRealStanding2010($spacLicence, $r7); }
              if ($r8 >$nejUmisteniBody) {  $nejUmisteniBody=$r8;  $nejUmisteniZavod=$raceName10_8;  $nejUmisteniPoradi=getRealStanding2010($spacLicence, $r8); }
              if ($r9 >$nejUmisteniBody) {  $nejUmisteniBody=$r9;  $nejUmisteniZavod=$raceName10_9;  $nejUmisteniPoradi=getRealStanding2010($spacLicence, $r9); }
              if ($r10 >$nejUmisteniBody) { $nejUmisteniBody=$r10; $nejUmisteniZavod=$raceName10_10; $nejUmisteniPoradi=getRealStanding2010($spacLicence, $r10); }
              if ($r11 >$nejUmisteniBody) { $nejUmisteniBody=$r11; $nejUmisteniZavod=$raceName10_11; $nejUmisteniPoradi=getRealStanding2010($spacLicence, $r11); }
              if ($r12 >$nejUmisteniBody) { $nejUmisteniBody=$r12; $nejUmisteniZavod=$raceName10_12; $nejUmisteniPoradi=getRealStanding2010($spacLicence, $r12); }
              if (($r13-5) >$nejUmisteniBody) { $nejUmisteniBody=($r13-5); $nejUmisteniZavod=$raceName10_13; $nejUmisteniPoradi=getRealStanding2010($spacLicence, ($r13-5)); }
              if ($r14 >$nejUmisteniBody) { $nejUmisteniBody=$r14; $nejUmisteniZavod=$raceName10_14; $nejUmisteniPoradi=getRealStanding2010($spacLicence, $r14); }
              if ($r15 >$nejUmisteniBody) { $nejUmisteniBody=$r15; $nejUmisteniZavod=$raceName10_15; $nejUmisteniPoradi=getRealStanding2010($spacLicence, $r15); }
              if ($r16 >$nejUmisteniBody) { $nejUmisteniBody=$r16; $nejUmisteniZavod=$raceName10_16; $nejUmisteniPoradi=getRealStanding2010($spacLicence, $r16); }
              if ($r17 >$nejUmisteniBody) { $nejUmisteniBody=$r17; $nejUmisteniZavod=$raceName10_17; $nejUmisteniPoradi=getRealStanding2010($spacLicence, $r17); }
              
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

              echo "<tr><td colspan=\"4\" style=\"text-align:center;\"><h3><a href=\"vysledky-celkove-2010.php?id_category=$categoryId\">Sezona 2010</a></h3></td>";
              echo "<tr><td style=\"text-align:right; padding-right:15px;\">Oddíl:</td>
                    <td style=\"text-align:left; color:#FF8F16; padding-left:15px;\"><b>$team</b></td>
              		<td style=\"text-align:right; padding-right:15px;\">Dokončených závodů / celkem:</td>
                    <td style=\"text-align:left; padding-left:15px;\"><b>$pocetZavodu / 17</b></td></tr>";
              echo "<tr><td style=\"text-align:right; padding-right:15px;\">Kategorie:</td>
                    <td style=\"text-align:left; color:#FF8F16; padding-left:15px;\"><b>$category - $categoryName</b></td>
              	    <td style=\"text-align:right; padding-right:15px;\">Součet bodů (10 NEJ / celkem):</td>
                    <td style=\"text-align:left; padding-left:15px;\"><b>$totalPointsBest / $totalPoints</b></td></tr>";
              echo "<tr><td style=\"text-align:right; padding-right:15px;\">Konečné umístění:</td>
                    <td style=\"text-align:left; color:#FF8F16; padding-left:15px;\"><b>$umisteniVKategorii. / $pocetZavodniku</b></td>
              		<td style=\"text-align:right; padding-right:15px;\">Nejlepší umístění:</td>
                    <td style=\"text-align:left; padding-left:15px;\"><b>$nejUmisteniPoradi. ($nejUmisteniZavod)</b></td></tr>";
            }
            if ($pocetZavodu === 0) {
            	echo "<tr><td colspan=\"4\" style=\"text-align:center;\"><h3>Sezona 2010 - bez účasti</h3></td>";
            }
            // 2010 -----------------------------------------------------------

            // 2009 +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
            $pocetZavodu = 0;
            $dotaz=sprintf("SELECT * FROM spac_results_2009 sr
                    JOIN spac_category c ON (sr.id_category=c.id)
                    WHERE sr.id_racer=$id_racer");
            $vysledek = MySQL_Query($dotaz);
            while ($zaznam = MySQL_Fetch_Array($vysledek))
            {
              $pocetZavodu = 0;
              $id=$zaznam["id"];
              $firstnameX=$zaznam["firstname"];
              $surnameX=$zaznam["surname"];
              $team=$zaznam["team"];
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
              $r17=$zaznam["race_17"];
	      $pocetZavodniku=$zaznam["total_racers"];
              $umisteniVKategorii=$zaznam["final_standing"];
              $spacLicence=$zaznam["spac_licence"];

              $nejUmisteniBody = 0;
              $nejUmisteniPoradi = 0;
              $nejUmisteniZavod = "";
              if ($r1 >$nejUmisteniBody) {  $nejUmisteniBody=$r1;  $nejUmisteniZavod=$raceName09_1;  $nejUmisteniPoradi=getRealStanding2009($spacLicence, $r1, 0); }
              if ($r2 >$nejUmisteniBody) {  $nejUmisteniBody=$r2;  $nejUmisteniZavod=$raceName09_2;  $nejUmisteniPoradi=getRealStanding2009($spacLicence, $r2, 0); }
              if ($r3 >$nejUmisteniBody) {  $nejUmisteniBody=$r3;  $nejUmisteniZavod=$raceName09_3;  $nejUmisteniPoradi=getRealStanding2009($spacLicence, $r3, 0); }
              if ($r4 >$nejUmisteniBody) {  $nejUmisteniBody=$r4;  $nejUmisteniZavod=$raceName09_4;  $nejUmisteniPoradi=getRealStanding2009($spacLicence, $r4, 0); }
              if ($spacLicence==0 && $r5 > $nejUmisteniBody) {  $nejUmisteniBody=$r5;  $nejUmisteniZavod=$raceName09_5;  $nejUmisteniPoradi=getRealStanding2009($spacLicence, $r5, 0); }
              if ($spacLicence==1 && ($r5/2) >$nejUmisteniBody) {  $nejUmisteniBody=$r5/2;  $nejUmisteniZavod=$raceName09_5;  $nejUmisteniPoradi=getRealStanding2009($spacLicence, $r5, 1); }
              if ($r6 >$nejUmisteniBody) {  $nejUmisteniBody=$r6;  $nejUmisteniZavod=$raceName09_6;  $nejUmisteniPoradi=getRealStanding2009($spacLicence, $r6, 0); }
              if ($r7 >$nejUmisteniBody) {  $nejUmisteniBody=$r7;  $nejUmisteniZavod=$raceName09_7;  $nejUmisteniPoradi=getRealStanding2009($spacLicence, $r7, 0); }
              if ($r8 >$nejUmisteniBody) {  $nejUmisteniBody=$r8;  $nejUmisteniZavod=$raceName09_8;  $nejUmisteniPoradi=getRealStanding2009($spacLicence, $r8, 0); }
              if ($r9 >$nejUmisteniBody) {  $nejUmisteniBody=$r9;  $nejUmisteniZavod=$raceName09_9;  $nejUmisteniPoradi=getRealStanding2009($spacLicence, $r9, 0); }
              if ($r10 >$nejUmisteniBody) { $nejUmisteniBody=$r10; $nejUmisteniZavod=$raceName09_10; $nejUmisteniPoradi=getRealStanding2009($spacLicence, $r10, 0); }
              if ($r11 >$nejUmisteniBody) { $nejUmisteniBody=$r11; $nejUmisteniZavod=$raceName09_11; $nejUmisteniPoradi=getRealStanding2009($spacLicence, $r11, 0); }
              if ($r12 >$nejUmisteniBody) { $nejUmisteniBody=$r12; $nejUmisteniZavod=$raceName09_12; $nejUmisteniPoradi=getRealStanding2009($spacLicence, $r12, 0); }
              if ($spacLicence==0 && $r13 >$nejUmisteniBody) { $nejUmisteniBody=$r13; $nejUmisteniZavod=$raceName09_13; $nejUmisteniPoradi=getRealStanding2009($spacLicence, $r13, 0); }
              if ($spacLicence==1 && ($r13/2) >$nejUmisteniBody) { $nejUmisteniBody=$r13/2; $nejUmisteniZavod=$raceName09_13; $nejUmisteniPoradi=getRealStanding2009($spacLicence, $r13, 1); }
              if ($r14 >$nejUmisteniBody) { $nejUmisteniBody=$r14; $nejUmisteniZavod=$raceName09_14; $nejUmisteniPoradi=getRealStanding2009($spacLicence, $r14, 0); }
              if ($r15 >$nejUmisteniBody) { $nejUmisteniBody=$r15; $nejUmisteniZavod=$raceName09_15; $nejUmisteniPoradi=getRealStanding2009($spacLicence, $r15, 0); }
              if ($r16 >$nejUmisteniBody) { $nejUmisteniBody=$r16; $nejUmisteniZavod=$raceName09_16; $nejUmisteniPoradi=getRealStanding2009($spacLicence, $r16, 0); }
              if ($r17 >$nejUmisteniBody) { $nejUmisteniBody=$r17; $nejUmisteniZavod=$raceName09_17; $nejUmisteniPoradi=getRealStanding2009($spacLicence, $r17, 0); }

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

              echo "<tr><td colspan=\"4\" style=\"text-align:center;\"><h3><a href=\"vysledky-celkove-2009.php?id_category=$categoryId\">Sezona 2009</a></h3></td>";
              echo "<tr><td style=\"text-align:right; padding-right:15px;\">Oddíl:</td>
                    <td style=\"text-align:left; color:#FF8F16; padding-left:15px;\"><b>$team</b></td>
              		<td style=\"text-align:right; padding-right:15px;\">Dokončených závodů / celkem:</td>
                    <td style=\"text-align:left; padding-left:15px;\"><b>$pocetZavodu / 17</b></td></tr>";
              echo "<tr><td style=\"text-align:right; padding-right:15px;\">Kategorie:</td>
                    <td style=\"text-align:left; color:#FF8F16; padding-left:15px;\"><b>$category - $categoryName</b></td>
              	    <td style=\"text-align:right; padding-right:15px;\">Součet bodů (11 NEJ / celkem):</td>
                    <td style=\"text-align:left; padding-left:15px;\"><b>$totalPointsBest / $totalPoints</b></td></tr>";
              echo "<tr><td style=\"text-align:right; padding-right:15px;\">Konečné umístění:</td>
                    <td style=\"text-align:left; color:#FF8F16; padding-left:15px;\"><b>$umisteniVKategorii. / $pocetZavodniku</b></td>
              		<td style=\"text-align:right; padding-right:15px;\">Nejlepší umístění:</td>
                    <td style=\"text-align:left; padding-left:15px;\"><b>$nejUmisteniPoradi. ($nejUmisteniZavod)</b></td></tr>";
            }
            if ($pocetZavodu === 0) {
            	echo "<tr><td colspan=\"4\" style=\"text-align:center;\"><h3>Sezona 2009 - bez účasti</h3></td>";
            }
            // 2009 -----------------------------------------------------------

            // 2008 +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
            $pocetZavodu = 0;
            $dotaz=sprintf("SELECT * FROM spac_results_2008 sr
                    JOIN spac_category c ON (sr.id_category=c.id)
                    WHERE sr.id_racer=$id_racer");
            $vysledek = MySQL_Query($dotaz);
            while ($zaznam = MySQL_Fetch_Array($vysledek))
            {
              $pocetZavodu = 0;
              $id=$zaznam["id"];
              $firstnameX=$zaznam["firstname"];
              $surnameX=$zaznam["surname"];
              $team=$zaznam["team"];
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
	      $pocetZavodniku=$zaznam["total_racers"];
              $umisteniVKategorii=$zaznam["final_standing"];
              $spacLicence=$zaznam["spac_licence"];

              $nejUmisteniBody = 0;
              $nejUmisteniPoradi = 0;
              $nejUmisteniZavod = "";
              if ($r1 >$nejUmisteniBody) {  $nejUmisteniBody=$r1;  $nejUmisteniZavod=$raceName08_1;  $nejUmisteniPoradi=getRealStanding2009($spacLicence, $r1, 0); }
              if ($r2 >$nejUmisteniBody) {  $nejUmisteniBody=$r2;  $nejUmisteniZavod=$raceName08_2;  $nejUmisteniPoradi=getRealStanding2009($spacLicence, $r2, 0); }
              if ($r3 >$nejUmisteniBody) {  $nejUmisteniBody=$r3;  $nejUmisteniZavod=$raceName08_3;  $nejUmisteniPoradi=getRealStanding2009($spacLicence, $r3, 0); }
              if ($r4 >$nejUmisteniBody) {  $nejUmisteniBody=$r4;  $nejUmisteniZavod=$raceName08_4;  $nejUmisteniPoradi=getRealStanding2009($spacLicence, $r4, 0); }
              if ($r5 >$nejUmisteniBody) {  $nejUmisteniBody=$r5;  $nejUmisteniZavod=$raceName08_5;  $nejUmisteniPoradi=getRealStanding2009($spacLicence, $r5, 0); }
              if ($r6 >$nejUmisteniBody) {  $nejUmisteniBody=$r6;  $nejUmisteniZavod=$raceName08_6;  $nejUmisteniPoradi=getRealStanding2009($spacLicence, $r6, 0); }
              if ($r7 >$nejUmisteniBody) {  $nejUmisteniBody=$r7;  $nejUmisteniZavod=$raceName08_7;  $nejUmisteniPoradi=getRealStanding2009($spacLicence, $r7, 0); }
              if ($r8 >$nejUmisteniBody) {  $nejUmisteniBody=$r8;  $nejUmisteniZavod=$raceName08_8;  $nejUmisteniPoradi=getRealStanding2009($spacLicence, $r8, 0); }
              if ($r9 >$nejUmisteniBody) {  $nejUmisteniBody=$r9;  $nejUmisteniZavod=$raceName08_9;  $nejUmisteniPoradi=getRealStanding2009($spacLicence, $r9, 0); }
              if ($r10 >$nejUmisteniBody) { $nejUmisteniBody=$r10; $nejUmisteniZavod=$raceName08_10; $nejUmisteniPoradi=getRealStanding2009($spacLicence, $r10, 0); }
              if ($spacLicence==0 && $r11 >$nejUmisteniBody) { $nejUmisteniBody=$r11; $nejUmisteniZavod=$raceName08_11; $nejUmisteniPoradi=getRealStanding2009($spacLicence, $r11, 0); }
              if ($spacLicence==1 && ($r11/2) >$nejUmisteniBody) { $nejUmisteniBody=$r11/2; $nejUmisteniZavod=$raceName08_11; $nejUmisteniPoradi=getRealStanding2009($spacLicence, $r11, 1); }
              if ($r12 >$nejUmisteniBody) { $nejUmisteniBody=$r12; $nejUmisteniZavod=$raceName08_12; $nejUmisteniPoradi=getRealStanding2009($spacLicence, $r12, 0); }
              if ($r13 >$nejUmisteniBody) { $nejUmisteniBody=$r13; $nejUmisteniZavod=$raceName08_13; $nejUmisteniPoradi=getRealStanding2009($spacLicence, $r13, 0); }
              if ($spacLicence==0 && $r14 >$nejUmisteniBody) { $nejUmisteniBody=$r14; $nejUmisteniZavod=$raceName08_14; $nejUmisteniPoradi=getRealStanding2009($spacLicence, $r14, 0); }
              if ($spacLicence==1 && ($r14/2) >$nejUmisteniBody) { $nejUmisteniBody=$r14/2; $nejUmisteniZavod=$raceName08_14; $nejUmisteniPoradi=getRealStanding2009($spacLicence, $r14, 1); }
              if ($r15 >$nejUmisteniBody) { $nejUmisteniBody=$r15; $nejUmisteniZavod=$raceName08_15; $nejUmisteniPoradi=getRealStanding2009($spacLicence, $r15, 0); }
              if ($r16 >$nejUmisteniBody) { $nejUmisteniBody=$r16; $nejUmisteniZavod=$raceName08_16; $nejUmisteniPoradi=getRealStanding2009($spacLicence, $r16, 0); }

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

              echo "<tr><td colspan=\"4\" style=\"text-align:center;\"><h3><a href=\"vysledky-celkove-2008.php?id_category=$categoryId\">Sezona 2008</a></h3></td>";
              echo "<tr><td style=\"text-align:right; padding-right:15px;\">Oddíl:</td>
                    <td style=\"text-align:left; color:#FF8F16; padding-left:15px;\"><b>$team</b></td>
              		<td style=\"text-align:right; padding-right:15px;\">Dokončených závodů / celkem:</td>
                    <td style=\"text-align:left; padding-left:15px;\"><b>$pocetZavodu / 16</b></td></tr>";
              echo "<tr><td style=\"text-align:right; padding-right:15px;\">Kategorie:</td>
                    <td style=\"text-align:left; color:#FF8F16; padding-left:15px;\"><b>$category - $categoryName</b></td>
              	    <td style=\"text-align:right; padding-right:15px;\">Součet bodů (11 NEJ / celkem):</td>
                    <td style=\"text-align:left; padding-left:15px;\"><b>$totalPointsBest / $totalPoints</b></td></tr>";
              echo "<tr><td style=\"text-align:right; padding-right:15px;\">Konečné umístění:</td>
                    <td style=\"text-align:left; color:#FF8F16; padding-left:15px;\"><b>$umisteniVKategorii. / $pocetZavodniku</b></td>
              		<td style=\"text-align:right; padding-right:15px;\">Nejlepší umístění:</td>
                    <td style=\"text-align:left; padding-left:15px;\"><b>$nejUmisteniPoradi. ($nejUmisteniZavod)</b></td></tr>";
            }
            if ($pocetZavodu === 0) {
            	echo "<tr><td colspan=\"4\" style=\"text-align:center;\"><h3>Sezona 2008 - bez účasti</h3></td>";
            }
            // 2008 -----------------------------------------------------------

            // 2007 +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
            $pocetZavodu = 0;
            $dotaz=sprintf("SELECT * FROM spac_results_2007 sr
                    JOIN spac_category c ON (sr.id_category=c.id)
                    WHERE sr.id_racer=$id_racer");
            $vysledek = MySQL_Query($dotaz);
            while ($zaznam = MySQL_Fetch_Array($vysledek))
            {
              $pocetZavodu = 0;
              $id=$zaznam["id"];
              $firstnameX=$zaznam["firstname"];
              $surnameX=$zaznam["surname"];
              $team=$zaznam["team"];
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
	      $pocetZavodniku=$zaznam["total_racers"];
              $umisteniVKategorii=$zaznam["final_standing"];

              $nejUmisteniBody = 0;
              $nejUmisteniPoradi = 0;
              $nejUmisteniZavod = "";
              if ($r1 >$nejUmisteniBody) {  $nejUmisteniBody=$r1;  $nejUmisteniZavod=$raceName07_1;  $nejUmisteniPoradi=getRealStanding2011(40, $r1); }
              if ($r2 >$nejUmisteniBody) {  $nejUmisteniBody=$r2;  $nejUmisteniZavod=$raceName07_2;  $nejUmisteniPoradi=getRealStanding2011(40, $r2); }
              if ($r3 >$nejUmisteniBody) {  $nejUmisteniBody=$r3;  $nejUmisteniZavod=$raceName07_3;  $nejUmisteniPoradi=getRealStanding2011(40, $r3); }
              if ($r4 >$nejUmisteniBody) {  $nejUmisteniBody=$r4;  $nejUmisteniZavod=$raceName07_4;  $nejUmisteniPoradi=getRealStanding2011(40, $r4); }
              if ($r5 >$nejUmisteniBody) {  $nejUmisteniBody=$r5;  $nejUmisteniZavod=$raceName07_5;  $nejUmisteniPoradi=getRealStanding2011(40, $r5); }
              if ($r6 >$nejUmisteniBody) {  $nejUmisteniBody=$r6;  $nejUmisteniZavod=$raceName07_6;  $nejUmisteniPoradi=getRealStanding2011(40, $r6); }
              if ($r7 >$nejUmisteniBody) {  $nejUmisteniBody=$r7;  $nejUmisteniZavod=$raceName07_7;  $nejUmisteniPoradi=getRealStanding2011(40, $r7); }
              if ($r8 >$nejUmisteniBody) {  $nejUmisteniBody=$r8;  $nejUmisteniZavod=$raceName07_8;  $nejUmisteniPoradi=getRealStanding2011(40, $r8); }
              if ($r9 >$nejUmisteniBody) {  $nejUmisteniBody=$r9;  $nejUmisteniZavod=$raceName07_9;  $nejUmisteniPoradi=getRealStanding2011(40, $r9); }
              if ($r10 >$nejUmisteniBody) { $nejUmisteniBody=$r10; $nejUmisteniZavod=$raceName07_10; $nejUmisteniPoradi=getRealStanding2011(40, $r10); }
              if ($r11 >$nejUmisteniBody) { $nejUmisteniBody=$r11; $nejUmisteniZavod=$raceName07_11; $nejUmisteniPoradi=getRealStanding2011(40, $r11); }
              if ($r12 >$nejUmisteniBody) { $nejUmisteniBody=$r12; $nejUmisteniZavod=$raceName07_12; $nejUmisteniPoradi=getRealStanding2011(40, $r12); }
              if ($r14 >$nejUmisteniBody) { $nejUmisteniBody=$r14; $nejUmisteniZavod=$raceName07_14; $nejUmisteniPoradi=getRealStanding2011(40, $r14); }
              
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

              echo "<tr><td colspan=\"4\" style=\"text-align:center;\"><h3><a href=\"vysledky-celkove-2007.php?id_category=$categoryId\">Sezona 2007</a></h3></td>";
              echo "<tr><td style=\"text-align:right; padding-right:15px;\">Oddíl:</td>
                    <td style=\"text-align:left; color:#FF8F16; padding-left:15px;\"><b>$team</b></td>
              		<td style=\"text-align:right; padding-right:15px;\">Dokončených závodů / celkem:</td>
                    <td style=\"text-align:left; padding-left:15px;\"><b>$pocetZavodu / 14</b></td></tr>";
              echo "<tr><td style=\"text-align:right; padding-right:15px;\">Kategorie:</td>
                    <td style=\"text-align:left; color:#FF8F16; padding-left:15px;\"><b>$category - $categoryName</b></td>
              	    <td style=\"text-align:right; padding-right:15px;\">Součet bodů (9 NEJ / celkem):</td>
                    <td style=\"text-align:left; padding-left:15px;\"><b>$totalPointsBest / $totalPoints</b></td></tr>";
              echo "<tr><td style=\"text-align:right; padding-right:15px;\">Konečné umístění:</td>
                    <td style=\"text-align:left; color:#FF8F16; padding-left:15px;\"><b>$umisteniVKategorii. / $pocetZavodniku</b></td>
              		<td style=\"text-align:right; padding-right:15px;\">Nejlepší umístění:</td>
                    <td style=\"text-align:left; padding-left:15px;\"><b>$nejUmisteniPoradi. ($nejUmisteniZavod)</b></td></tr>";
            }
            if ($pocetZavodu === 0) {
            	echo "<tr><td colspan=\"4\" style=\"text-align:center;\"><h3>Sezona 2007 - bez účasti</h3></td>";
            }
            // 2007 -----------------------------------------------------------

            // 2006 +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
            $pocetZavodu = 0;
            $dotaz=sprintf("SELECT * FROM spac_results_2006 sr
                    JOIN spac_category c ON (sr.id_category=c.id)
                    WHERE sr.id_racer=$id_racer");
            $vysledek = MySQL_Query($dotaz);
            while ($zaznam = MySQL_Fetch_Array($vysledek))
            {
              $pocetZavodu = 0;
              $id=$zaznam["id"];
              $firstnameX=$zaznam["firstname"];
              $surnameX=$zaznam["surname"];
              $team=$zaznam["team"];
              $category=$zaznam["prefix"];
              $categoryId=$zaznam["id_category"];
              $categoryName=$zaznam["name"];
              $totalPoints=$zaznam["total"];
              $r1=$zaznam["race_1"];              $r2=$zaznam["race_2"];
              $r3=$zaznam["race_3"];              $r4=$zaznam["race_4"];
              $r5=$zaznam["race_5"];
	      $pocetZavodniku=$zaznam["total_racers"];
              $umisteniVKategorii=$zaznam["final_standing"];

              $nejUmisteniBody = 0;
              $nejUmisteniPoradi = 0;
              $nejUmisteniZavod = "";
              if ($r1 >$nejUmisteniBody) {  $nejUmisteniBody=$r1;  $nejUmisteniZavod=$raceName06_1;  $nejUmisteniPoradi=getRealStanding2006($r1); }
              if ($r2 >$nejUmisteniBody) {  $nejUmisteniBody=$r2;  $nejUmisteniZavod=$raceName06_2;  $nejUmisteniPoradi=getRealStanding2006($r2); }
              if ($r3 >$nejUmisteniBody) {  $nejUmisteniBody=$r3;  $nejUmisteniZavod=$raceName06_3;  $nejUmisteniPoradi=getRealStanding2006($r3); }
              if ($r4 >$nejUmisteniBody) {  $nejUmisteniBody=$r4;  $nejUmisteniZavod=$raceName06_4;  $nejUmisteniPoradi=getRealStanding2006($r4); }
              if ($r5 >$nejUmisteniBody) {  $nejUmisteniBody=$r5;  $nejUmisteniZavod=$raceName06_5;  $nejUmisteniPoradi=getRealStanding2006($r5); }

              // pocet zavodu
              if ($r1 > 0) { $pocetZavodu += 1; }
              if ($r2 > 0) { $pocetZavodu += 1; }
              if ($r3 > 0) { $pocetZavodu += 1; }
              if ($r4 > 0) { $pocetZavodu += 1; }
              if ($r5 > 0) { $pocetZavodu += 1; }

              echo "<tr><td colspan=\"4\" style=\"text-align:center;\"><h3><a href=\"vysledky-celkove-2006.php?id_category=$categoryId\">Sezona 2006</a></h3></td>";
              echo "<tr><td style=\"text-align:right; padding-right:15px;\">Oddíl:</td>
                    <td style=\"text-align:left; color:#FF8F16; padding-left:15px;\"><b>$team</b></td>
              		<td style=\"text-align:right; padding-right:15px;\">Dokončených závodů / celkem:</td>
                    <td style=\"text-align:left; padding-left:15px;\"><b>$pocetZavodu / 5</b></td></tr>";
              echo "<tr><td style=\"text-align:right; padding-right:15px;\">Kategorie:</td>
                    <td style=\"text-align:left; color:#FF8F16; padding-left:15px;\"><b>$category - $categoryName</b></td>
              	    <td style=\"text-align:right; padding-right:15px;\">Součet bodů:</td>
                    <td style=\"text-align:left; padding-left:15px;\"><b>$totalPoints</b></td></tr>";
              echo "<tr><td style=\"text-align:right; padding-right:15px;\">Konečné umístění:</td>
                    <td style=\"text-align:left; color:#FF8F16; padding-left:15px;\"><b>$umisteniVKategorii. / $pocetZavodniku</b></td>
              		<td style=\"text-align:right; padding-right:15px;\">Nejlepší umístění:</td>
                    <td style=\"text-align:left; padding-left:15px;\"><b>$nejUmisteniPoradi. ($nejUmisteniZavod)</b></td></tr>";
            }
            if ($pocetZavodu === 0) {
            	echo "<tr><td colspan=\"4\" style=\"text-align:center;\"><h3>Sezona 2006 - bez účasti</h3></td>";
            }
            // 2006 -----------------------------------------------------------

            // 2005 +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
            $pocetZavodu = 0;
            $dotaz=sprintf("SELECT * FROM spac_results_2005 sr
                    JOIN spac_category c ON (sr.id_category=c.id)
                    WHERE sr.id_racer=$id_racer");
            $vysledek = MySQL_Query($dotaz);
            while ($zaznam = MySQL_Fetch_Array($vysledek))
            {
              $pocetZavodu = 0;
              $id=$zaznam["id"];
              $firstnameX=$zaznam["firstname"];
              $surnameX=$zaznam["surname"];
              $team=$zaznam["team"];
              $category=$zaznam["prefix"];
              $categoryId=$zaznam["id_category"];
              $categoryName=$zaznam["name"];
              $totalPoints=$zaznam["total"];
              $totalPointsBest=$zaznam["total_best_races"];
              $r1=$zaznam["race_1"];              $r2=$zaznam["race_2"];
              $r3=$zaznam["race_3"];              $r4=$zaznam["race_4"];
              $r5=$zaznam["race_5"];              $r6=$zaznam["race_6"];
              $r7=$zaznam["race_7"];             
	      $pocetZavodniku=$zaznam["total_racers"];
              $umisteniVKategorii=$zaznam["final_standing"];

              $nejUmisteniBody = 0;
              $nejUmisteniPoradi = 0;
              $nejUmisteniZavod = "";
              if ($r1 >$nejUmisteniBody) {  $nejUmisteniBody=$r1;  $nejUmisteniZavod=$raceName05_1;  $nejUmisteniPoradi=getRealStanding2005($r1); }
              if ($r2 >$nejUmisteniBody) {  $nejUmisteniBody=$r2;  $nejUmisteniZavod=$raceName05_2;  $nejUmisteniPoradi=getRealStanding2005($r2); }
              if ($r3 >$nejUmisteniBody) {  $nejUmisteniBody=$r3;  $nejUmisteniZavod=$raceName05_3;  $nejUmisteniPoradi=getRealStanding2005($r3); }
              if ($r4 >$nejUmisteniBody) {  $nejUmisteniBody=$r4;  $nejUmisteniZavod=$raceName05_4;  $nejUmisteniPoradi=getRealStanding2005($r4); }
              if ($r5 >$nejUmisteniBody) {  $nejUmisteniBody=$r5;  $nejUmisteniZavod=$raceName05_5;  $nejUmisteniPoradi=getRealStanding2005($r5); }
              if ($r6/2 >$nejUmisteniBody) {  $nejUmisteniBody=$r6/2;  $nejUmisteniZavod=$raceName05_6;  $nejUmisteniPoradi=getRealStanding2005($r6/2); }
              if ($r7 >$nejUmisteniBody) {  $nejUmisteniBody=$r7;  $nejUmisteniZavod=$raceName05_7;  $nejUmisteniPoradi=getRealStanding2005($r7); }
              
              // pocet zavodu
              if ($r1 > 0) { $pocetZavodu += 1; }
              if ($r2 > 0) { $pocetZavodu += 1; }
              if ($r3 > 0) { $pocetZavodu += 1; }
              if ($r4 > 0) { $pocetZavodu += 1; }
              if ($r5 > 0) { $pocetZavodu += 1; }
              if ($r6 > 0) { $pocetZavodu += 1; }
              if ($r7 > 0) { $pocetZavodu += 1; }

              echo "<tr><td colspan=\"4\" style=\"text-align:center;\"><h3><a href=\"vysledky-celkove-2005.php?id_category=$categoryId\">Sezona 2005</a></h3></td>";
              echo "<tr><td style=\"text-align:right; padding-right:15px;\">Oddíl:</td>
                    <td style=\"text-align:left; color:#FF8F16; padding-left:15px;\"><b>$team</b></td>
              		<td style=\"text-align:right; padding-right:15px;\">Dokončených závodů / celkem:</td>
                    <td style=\"text-align:left; padding-left:15px;\"><b>$pocetZavodu / 7</b></td></tr>";
              echo "<tr><td style=\"text-align:right; padding-right:15px;\">Kategorie:</td>
                    <td style=\"text-align:left; color:#FF8F16; padding-left:15px;\"><b>$category - $categoryName</b></td>
              	    <td style=\"text-align:right; padding-right:15px;\">Součet bodů (5 NEJ / celkem):</td>
                    <td style=\"text-align:left; padding-left:15px;\"><b>$totalPointsBest / $totalPoints</b></td></tr>";
              echo "<tr><td style=\"text-align:right; padding-right:15px;\">Konečné umístění:</td>
                    <td style=\"text-align:left; color:#FF8F16; padding-left:15px;\"><b>$umisteniVKategorii. / $pocetZavodniku</b></td>
              		<td style=\"text-align:right; padding-right:15px;\">Nejlepší umístění:</td>
                    <td style=\"text-align:left; padding-left:15px;\"><b>$nejUmisteniPoradi. ($nejUmisteniZavod)</b></td></tr>";
            }
            if ($pocetZavodu === 0) {
            	echo "<tr><td colspan=\"4\" style=\"text-align:center;\"><h3>Sezona 2005 - bez účasti</h3></td>";
            }
            // 2005 -----------------------------------------------------------


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