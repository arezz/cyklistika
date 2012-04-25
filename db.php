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
            
            if (isset($_SESSION["administrace"]) && false) {
                $dotaz="INSERT INTO `spac_category`(`id`,`prefix`,`name`,`coefficient`,`season`) VALUES (NULL,'žm','žáci mladší 2002-2000','1.00','1900')";
                $vysledek = MySQL_Query($dotaz);                
                $dotaz="INSERT INTO `spac_category`(`id`,`prefix`,`name`,`coefficient`,`season`) VALUES (NULL,'žs','žáci starší 1999-1998','1.00','1900')";
                $vysledek = MySQL_Query($dotaz);     
                $dotaz="INSERT INTO `spac_category`(`id`,`prefix`,`name`,`coefficient`,`season`) VALUES (NULL,'žh','žákyně 2002-1998','1.00','1900')";
                $vysledek = MySQL_Query($dotaz);     
                $dotaz="INSERT INTO `spac_category`(`id`,`prefix`,`name`,`coefficient`,`season`) VALUES (NULL,'k','kadeti 1997-1996','1.00','1900')";
                $vysledek = MySQL_Query($dotaz);     
                $dotaz="INSERT INTO `spac_category`(`id`,`prefix`,`name`,`coefficient`,`season`) VALUES (NULL,'kh','kadetky 1997-1996','1.00','1900')";
                $vysledek = MySQL_Query($dotaz);     
                $dotaz="INSERT INTO `spac_category`(`id`,`prefix`,`name`,`coefficient`,`season`) VALUES (NULL,'mž','juniorky 1995-1994','1.00','1900')";
                $vysledek = MySQL_Query($dotaz);     
            }

            if (isset($_SESSION["administrace"]) && false) {
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
                // O
                replaceId(807,983);
                replaceId(1269,891);
                replaceId(224,167);
                replaceId(1028,215);
                replaceId(98,215);
                replaceId(168,107);
                replaceId(1357,1280);
                replaceId(899,96);
                replaceId(936,520);
                replaceId(611,381);
                replaceId(861,381);
                replaceId(932,510);
                replaceId(1551,1553);
                replaceId(1024,618);
                replaceId(207,614);
                replaceId(801,528);
                replaceId(963,528);
                replaceId(1265,1436);
                replaceId(1438,1224);
                replaceId(765,515);
                replaceId(257,515);
                replaceId(434,636);
                replaceId(1270,636);
                replaceId(1023,865);
                replaceId(1110,865);
                replaceId(602,1029);
                replaceId(524,3);
                replaceId(1570,1430);
                replaceId(553,343);
                replaceId(1426,1264);
                replaceId(863,616);
                replaceId(581,838);
                replaceId(210,80);
                replaceId(1377,1520);
                replaceId(985,871);
                replaceId(789,968);
                replaceId(187,667);
                replaceId(1140,1114);
                replaceId(1511,631);
            }
          ?>
        
      </div>      
    </div>
  </body>
</html>
<?php MySQL_Close($pripoj); ?>