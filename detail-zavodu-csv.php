<?php
  require("nastaveni.php");
  $zavod = "1";
  if (isset($_GET["zavod"]))
  {
    $zavod = $_GET["zavod"];
  }
  echo "<?xml version='1.0' encoding='windows-1250' ?>\n";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=windows-1250" />
    <meta name="generator" content="PSPad editor, www.pspad.com" />
    <title>Cyklistika - seznam cyklistů</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
  </head>
  <body>
    <div class="container">
      <div class="content">
          Číslo;Kategorie;Číslo SPAC;Příjmení;Jméno;Oddíl;Poznámka;<br />
          <?php 

              $dotaz="SELECT c.prefix, rg.id, rg.surname, rg.name, rg.team, rg.spac_number, rg.date_time, rg.notice FROM spac_registration rg 
              JOIN spac_category c ON (rg.id_category=c.id)
              JOIN spac_race rc ON (rg.id_race=rc.id AND rc.id='$zavod')
              ORDER BY c.id, rg.date_time;";

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

              echo "$row;$category;$number;$surname;$name;$team;$notice;<br />";

              $i++;
            }
          ?>
      </div>
    </div>
  </body>
</html>
<?php MySQL_Close($pripoj); ?>