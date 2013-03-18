<?php
  require("nastaveni.php");
  echo "<?xml version='1.0' encoding='windows-1250' ?>\n";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=windows-1250" />
    <meta name="generator" content="PSPad editor, www.pspad.com" />
    <title>SPAC - výpis závodů 2013</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
  </head>
  <body>
    <div class="container">
      <div class="menu">
        <?php include("menu.php"); ?>
      </div>
      <div class="content">
        <table>
          <tr><td colspan="4" style="text-align:center; vertical-align:bottom; height:50px;"><h1>Výpis závodů</h1></td></tr>
          <tr><td colspan="4" style="text-align:center; vertical-align:top; height:40px;">Pro seznam přihlášených klikněte na název závodu.</td></tr>
          <tr>
            <th>Datum závodu</th>
            <th>Název</th>
            <th>Místo</th>
            <th>Poznámka</th>
          </tr>
          <?php 
            $dotaz="SELECT * FROM spac_race WHERE season=2013 ORDER BY date";
            $vysledek = MySQL_Query($dotaz);
            $i = 0;
            while ($zaznam = MySQL_Fetch_Array($vysledek))
            {
              $id=$zaznam["id"];
              $name=$zaznam["name"];
              $date=$zaznam["date"];
              $place=$zaznam["place"];
              $championship=$zaznam["championship"];                                                                
              $season=$zaznam["season"];
              $notice=$zaznam["notice"];
              $date=(string)$date;
              list($rok,$mesic,$den)=explode('-',$date);
              $den = (int)$den;
              $monnumber = array("01","02","03","04","05","06","07","08","09","10","11","12");
              $monname = array("ledna", "února", "března", "dubna", "května", "června", "července", "srpna", "září", "října", "listopadu", "prosince");
              $mesic = str_replace($monnumber, $monname, $mesic);
              if (($i % 2) & isset($_SESSION["administrace"]))
              {
                echo "<tr><td>$den. $mesic $rok</td><td style=\"text-align:left;\"><a href='detail-zavodu.php?zavod=$id'>$name</a> <span class='admin'><a href='vypis-zavodu-edit-zavod.php?id=$id'>[edit]</a> <a href='delete.php?f=zavod&amp;id=$id'>[delete]</a></span></td><td style=\"text-align:left;\">$place</td><td style=\"text-align:left;\">$notice</td></tr>\n\t";
              }
              if (!($i % 2) & isset($_SESSION["administrace"]))
              {
                echo "<tr class='odd'><td>$den. $mesic $rok</td><td style=\"text-align:left;\"><a href='detail-zavodu.php?zavod=$id'>$name</a> <span class='admin'><a href='vypis-zavodu-edit-zavod.php?id=$id'>[edit]</a> <a href='delete.php?f=zavod&amp;id=$id'>[delete]</a></span></td><td style=\"text-align:left;\">$place</td><td style=\"text-align:left;\">$notice</td></tr>\n\t";
              }
              if (($i % 2) & !isset($_SESSION["administrace"]))
              {
                echo "<tr><td>$den. $mesic $rok</td><td style=\"text-align:left;\"><a href='detail-zavodu.php?zavod=$id'>$name</a></td><td style=\"text-align:left;\">$place</td><td style=\"text-align:left;\">$notice</td></tr>\n\t";
              }
              if (!($i % 2) & !isset($_SESSION["administrace"]))
              {
                echo "<tr class='odd'><td>$den. $mesic $rok</td><td style=\"text-align:left;\"><a href='detail-zavodu.php?zavod=$id'>$name</a></td><td style=\"text-align:left;\">$place</td><td style=\"text-align:left;\">$notice</td></tr>\n\t";
              }               
              $i++;
            }            
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