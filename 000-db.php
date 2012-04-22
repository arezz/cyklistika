<?php
  require("nastaveni.php");
  echo "<?xml version='1.0' encoding='windows-1250' ?>\n";

  function replaceId($oldId, $newId) {
        $dotaz="UPDATE spac_results_2011 SET id_racer=$newId WHERE id_racer=$oldId";
        $vysledek = MySQL_Query($dotaz);
         $dotaz="UPDATE spac_results_2010 SET id_racer=$newId WHERE id_racer=$oldId";
        $vysledek = MySQL_Query($dotaz);
         $dotaz="UPDATE spac_results_2009 SET id_racer=$newId WHERE id_racer=$oldId";
        $vysledek = MySQL_Query($dotaz);
         $dotaz="UPDATE spac_results_2008 SET id_racer=$newId WHERE id_racer=$oldId";
        $vysledek = MySQL_Query($dotaz);
         $dotaz="UPDATE spac_results_2007 SET id_racer=$newId WHERE id_racer=$oldId";
        $vysledek = MySQL_Query($dotaz);
         $dotaz="UPDATE spac_results_2006 SET id_racer=$newId WHERE id_racer=$oldId";
        $vysledek = MySQL_Query($dotaz);
         $dotaz="UPDATE spac_results_2005 SET id_racer=$newId WHERE id_racer=$oldId";
        $vysledek = MySQL_Query($dotaz);
         $dotaz="UPDATE spac_results_2004 SET id_racer=$newId WHERE id_racer=$oldId";
        $vysledek = MySQL_Query($dotaz);
         $dotaz="UPDATE spac_results_2003 SET id_racer=$newId WHERE id_racer=$oldId";
        $vysledek = MySQL_Query($dotaz);
         $dotaz="UPDATE spac_results_2002 SET id_racer=$newId WHERE id_racer=$oldId";
        $vysledek = MySQL_Query($dotaz);
         $dotaz="UPDATE spac_results_2001 SET id_racer=$newId WHERE id_racer=$oldId";
        $vysledek = MySQL_Query($dotaz);
         $dotaz="UPDATE spac_results_2000 SET id_racer=$newId WHERE id_racer=$oldId";
        $vysledek = MySQL_Query($dotaz);
         $dotaz="UPDATE spac_results_1999 SET id_racer=$newId WHERE id_racer=$oldId";
        $vysledek = MySQL_Query($dotaz);
         $dotaz="UPDATE spac_results_1998 SET id_racer=$newId WHERE id_racer=$oldId";
        $vysledek = MySQL_Query($dotaz);

        echo "replaced racer id ($oldId -> $newId) <br>";
  }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=windows-1250" />
    <meta name="generator" content="PSPad editor, www.pspad.com" />
    <title>SPAC - db funkce</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
  </head>
  <body>
    <div class="container">
      <div class="content">
       
          <?php
            if (isset($_SESSION["administrace"]) && false) {
                $dotaz="UPDATE spac_race SET active_login=1 WHERE id=24";
                $vysledek = MySQL_Query($dotaz);
                if ($vysledek) { echo "success<br>"; }
            }

            if (isset($_SESSION["administrace"]) && true) {
                replaceId(221, 140);
                replaceId(797, 931);
                replaceId(11, 190);
                replaceId(1124, 190);
                replaceId(1168, 1132);
                replaceId(225, 173);
                replaceId(204, 75);
                replaceId(597, 75);
                replaceId(1414,1259);
                replaceId(651, 718);
                replaceId(946, 517);
                replaceId(217, 134);
                replaceId(1415, 1559);
                replaceId(1198, 1559);
                replaceId(774,2);
                replaceId(1238,1300);
                replaceId(856,316);
                replaceId(1119,1147);
                replaceId(977,804);
                replaceId(186,28);
                replaceId(999,825);
                replaceId(10,178);
                replaceId(1090,178);
                replaceId(682,155);
                replaceId(175,655);
                replaceId(492,655);
                replaceId(1397,133);
                replaceId(849,598);
                replaceId(1219,1560);
                replaceId(695,1560);
                replaceId(1558,1143);
                replaceId(480,172);
                replaceId(1352,604);
                replaceId(1030,852);
                replaceId(698,674);
                replaceId(1216,90);
                replaceId(626,90);
                replaceId(1206,1018);
                replaceId(627,892);
                replaceId(1218,1195);
                replaceId(283,954);
                replaceId(951,954);
                replaceId(1493,1171);
                replaceId(819,353);
                replaceId(860,406);
                replaceId(263,27);
                replaceId(1155,57);
                replaceId(122,218);
                replaceId(245,501);
                replaceId(6,183);
                replaceId(1556,1402);
                replaceId(1440,1103);
                replaceId(586,373);
                replaceId(1026,621);
                replaceId(822,335);
                replaceId(129,441);
                replaceId(645,441);
                replaceId(223,160);
                replaceId(1276,1392);
                replaceId(1482,1328);
                replaceId(338,1443);
                replaceId(803,45);
                replaceId(1319,1459);
                replaceId(1346,1503);
                replaceId(308,487);
                replaceId(730,487);
                replaceId(552,940);
                replaceId(1182,445);
                replaceId(1089,188);
                replaceId(119,213);
                replaceId(1080,795);
                replaceId(301,522);
                replaceId(443,643);
                // N 
            }
          ?>
        
      </div>      
    </div>
  </body>
</html>
<?php MySQL_Close($pripoj); ?>