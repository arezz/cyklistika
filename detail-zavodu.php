<?php
  require("nastaveni.php");
  $zavod = "1";
  if (isset($_GET["zavod"]))
  {
    $zavod = $_GET["zavod"];
  }
  $kategorie = "all";
  if (isset($_GET["kategorie"]))
  {
    $kategorie = $_GET["kategorie"];
  }
  echo "<?xml version='1.0' encoding='windows-1250' ?>\n";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=windows-1250" />
    <meta name="generator" content="PSPad editor, www.pspad.com" />
    <title>SPAC - seznam přihlášených</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
  </head>
  <body>
    <div class="container">
      <div class="menu">
        <?php include("menu.php"); ?>
      </div>
      <div class="content">
        <table>
          <tr><td style="vertical-align:bottom; height:50px;"><a href="vypis-zavodu.php">Zpět na výpis závodů</a></td><td colspan="3" style="text-align:center; vertical-align:bottom;"><h1>Seznam přihlášených závodníků</h1></td><td style="text-align:right; vertical-align:bottom;"><form action="detail-zavodu.php?zavod=<?php echo $zavod; ?>"><?php include("kategorie-combobox.php"); ?></form></td></tr>
          <tr>
            <td>&nbsp;</td>
            <td colspan="3">
                 <?php
                    $dotaz_pocet="SELECT count(*) cnt FROM spac_registration rg 
                    JOIN spac_category c ON (rg.id_category=c.id)
                    JOIN spac_race rc ON (rg.id_race=rc.id AND rc.id='$zavod') WHERE prefix='$choice'
                    ORDER BY c.id, rg.date_time;";
                    if ($choice == "all")
                    {
                      $dotaz_pocet="SELECT count(*) cnt FROM spac_registration rg 
                      JOIN spac_category c ON (rg.id_category=c.id)
                      JOIN spac_race rc ON (rg.id_race=rc.id AND rc.id='$zavod')
                      ORDER BY c.id, rg.date_time;";
                    }
                    $vysledek_pocet = MySQL_Query($dotaz_pocet);
                    while ($vysledek_zaznam = mysql_fetch_assoc($vysledek_pocet)) { 
                        $pocet=$vysledek_zaznam["cnt"];
                        echo "<h3>Počet přihlášených závodníků: $pocet</h3>";
                    }                    
                 ?>
            </td>
            <td>&nbsp;</td>
          </tr>
          <tr><th>Kategorie, start. číslo</th><th>Jméno</th><th>Oddíl</th><th>Datum a čas přihlášení</th><th>Poznámka</th></tr>
          <?php 
            $dotaz="SELECT c.prefix, rg.id, rg.surname, rg.name, rg.team, rg.spac_number, rg.date_time, rg.notice FROM spac_registration rg 
                    JOIN spac_category c ON (rg.id_category=c.id)
                    JOIN spac_race rc ON (rg.id_race=rc.id AND rc.id='$zavod') WHERE prefix='$choice'
                    ORDER BY c.id, rg.date_time;";
            if ($choice == "all")
            {
              $dotaz="SELECT c.prefix, rg.id, rg.surname, rg.name, rg.team, rg.spac_number, rg.date_time, rg.notice FROM spac_registration rg 
              JOIN spac_category c ON (rg.id_category=c.id)
              JOIN spac_race rc ON (rg.id_race=rc.id AND rc.id='$zavod')
              ORDER BY c.id, rg.date_time;";
            }
            $vysledek = MySQL_Query($dotaz);
            $i = 0;
            while ($zaznam = MySQL_Fetch_Array($vysledek))
            {
              $row=$i+1;
              $id=$zaznam["id"];
              $category=$zaznam["prefix"];
              $surname=$zaznam["surname"];
              $name=$zaznam["name"];
              $number=$zaznam["spac_number"];
              $team=$zaznam["team"];
              $date=$zaznam["date_time"];                                                                
              $notice=$zaznam["notice"];
              if (($i % 2) & isset($_SESSION['administrace']))
              {
                echo "<tr><td style=\"text-align:left;\">$row.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$category,&nbsp;&nbsp;&nbsp;$number</td><td style=\"text-align:left;\">$surname $name <span class='admin'><a href='edit.php?f=ucastnik&amp;id=$id&amp;zavod=$zavod&amp;kategorie=$kategorie'>[edit]</a> <a href='delete.php?f=ucastnik&amp;id=$id&amp;zavod=$zavod&amp;kategorie=$kategorie'>[delete]</a></span></td><td>$team</td><td>$date</td><td style=\"text-align:left;\">$notice</td></tr>\n\t";
              }
              if (!($i % 2) & isset($_SESSION['administrace']))
              {
                echo "<tr class='odd'><td style=\"text-align:left;\">$row.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$category,&nbsp;&nbsp;&nbsp;$number</td><td style=\"text-align:left;\">$surname $name <span class='admin'><a href='edit.php?f=ucastnik&amp;id=$id&amp;zavod=$zavod&amp;kategorie=$kategorie'>[edit]</a> <a href='delete.php?f=ucastnik&amp;id=$id&amp;zavod=$zavod&amp;kategorie=$kategorie'>[delete]</a></span></td><td>$team</td><td>$date</td><td style=\"text-align:left;\">$notice</td></tr>\n\t";
              }
              if (($i % 2) & !isset($_SESSION['administrace']))
              {
                echo "<tr><td style=\"text-align:left;\">$row.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$category,&nbsp;&nbsp;&nbsp;$number</td><td style=\"text-align:left;\">$surname $name</td><td>$team</td><td>$date</td><td style=\"text-align:left;\">$notice</td></tr>\n\t";
              }
              if (!($i % 2) & !isset($_SESSION['administrace']))
              {
                echo "<tr class='odd'><td style=\"text-align:left;\">$row.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$category,&nbsp;&nbsp;&nbsp;$number</td><td style=\"text-align:left;\">$surname $name</td><td>$team</td><td>$date</td><td style=\"text-align:left;\">$notice</td></tr>\n\t";
              }
              $i++;
            }
            echo "<tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td><a href='detail-zavodu-csv.php?zavod=$zavod'>Seznam CSV</a></td></tr>";
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