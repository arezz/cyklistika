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
                $dotaz="INSERT INTO `spac_category`(`id`,`prefix`,`name`,`coefficient`,`season`) VALUES (NULL,'�m','��ci mlad�� 2002-2000','1.00','1900')";
                $vysledek = MySQL_Query($dotaz);                
                $dotaz="INSERT INTO `spac_category`(`id`,`prefix`,`name`,`coefficient`,`season`) VALUES (NULL,'�s','��ci star�� 1999-1998','1.00','1900')";
                $vysledek = MySQL_Query($dotaz);     
                $dotaz="INSERT INTO `spac_category`(`id`,`prefix`,`name`,`coefficient`,`season`) VALUES (NULL,'�h','��kyn� 2002-1998','1.00','1900')";
                $vysledek = MySQL_Query($dotaz);     
                $dotaz="INSERT INTO `spac_category`(`id`,`prefix`,`name`,`coefficient`,`season`) VALUES (NULL,'k','kadeti 1997-1996','1.00','1900')";
                $vysledek = MySQL_Query($dotaz);     
                $dotaz="INSERT INTO `spac_category`(`id`,`prefix`,`name`,`coefficient`,`season`) VALUES (NULL,'kh','kadetky 1997-1996','1.00','1900')";
                $vysledek = MySQL_Query($dotaz);     
                $dotaz="INSERT INTO `spac_category`(`id`,`prefix`,`name`,`coefficient`,`season`) VALUES (NULL,'m�','juniorky 1995-1994','1.00','1900')";
                $vysledek = MySQL_Query($dotaz);     
            }

            if (isset($_SESSION["administrace"]) && false) {
            $dotaz="INSERT INTO `spac_race` (`name`, `date`, `place`, `championship`, `active_login`, `season`, `notice`) VALUES ('Cena Trispolu', '2013-04-24', 'Karlovice', 0, 1, 2013, 'silnice, ACS Drak Vrbno');";
                $vysledek = MySQL_Query($dotaz);                
                $dotaz="INSERT INTO `spac_race` (`name`, `date`, `place`, `championship`, `active_login`, `season`, `notice`) VALUES ('�asovka ArcelorMittal - mistrovstv�', '2013-05-12', 'No�ovice', 1, 0, 2013, '�asovka, Racing Ole�n� F-M');";
                $vysledek = MySQL_Query($dotaz);                
                $dotaz="            INSERT INTO `spac_race` (`name`, `date`, `place`, `championship`, `active_login`, `season`, `notice`) VALUES ('O cenu Krnova', '2013-05-19', 'Krnov', 0, 0, 2013, 'silnice, Cyklistika pro v�echny');";
                $vysledek = MySQL_Query($dotaz);                
                $dotaz="              INSERT INTO `spac_race` (`name`, `date`, `place`, `championship`, `active_login`, `season`, `notice`) VALUES ('Memori�l Jana Ferdyna', '2013-06-02', 'Bohum�n', 0, 0, 2013, 'silnice, LowellPro �afrata');";
                $vysledek = MySQL_Query($dotaz);                
                $dotaz="             INSERT INTO `spac_race` (`name`, `date`, `place`, `championship`, `active_login`, `season`, `notice`) VALUES ('Tour de S�dek', '2013-06-08', 'Velk� Heraltice - S�dek', 0, 0, 2013, 'silnice, TJ Lokomotiva Krnov');";
                $vysledek = MySQL_Query($dotaz);                
                $dotaz="              INSERT INTO `spac_race` (`name`, `date`, `place`, `championship`, `active_login`, `season`, `notice`) VALUES ('Velkopolomsk� okruhy', '2013-06-16', 'Velk� Polom', 0, 0, 2013, 'silnice, TJ Velk� Polom');";
                $vysledek = MySQL_Query($dotaz);                
                $dotaz="              INSERT INTO `spac_race` (`name`, `date`, `place`, `championship`, `active_login`, `season`, `notice`) VALUES ('Cena Continentalu', '2013-06-22', 'Fren�t�t p. Radho�t�m', 0, 0, 2013, 'z�vod do vrchu, CK Fren�t�t p.R.');";
                $vysledek = MySQL_Query($dotaz);                
                $dotaz="              INSERT INTO `spac_race` (`name`, `date`, `place`, `championship`, `active_login`, `season`, `notice`) VALUES ('Tour de Javorov�', '2013-06-23', 'Old�ichovice u T�ince', 0, 0, 2013, 'z�vod do vrchu, TJ T� T�inec');";
                $vysledek = MySQL_Query($dotaz);                
                $dotaz="             INSERT INTO `spac_race` (`name`, `date`, `place`, `championship`, `active_login`, `season`, `notice`) VALUES ('Memori�l Aloise Dohnala - mistrovstv�', '2013-06-29', 'Suchdol n. Odrou', 0, 0, 2013, 'silnice, Cyklokramo Suchdol n.O.');";
                $vysledek = MySQL_Query($dotaz);                
                $dotaz="              INSERT INTO `spac_race` (`name`, `date`, `place`, `championship`, `active_login`, `season`, `notice`) VALUES ('Krit�rium mezi ploty', '2013-07-07', 'Star� Ves n.O.', 0, 0, 2013, 'krit�rium, ACK Star� Ves n. Ond�ejnic�');";
                $vysledek = MySQL_Query($dotaz);                
                $dotaz="            INSERT INTO `spac_race` (`name`, `date`, `place`, `championship`, `active_login`, `season`, `notice`) VALUES ('Grand Prix Forman', '2013-08-04', 'Nov� Ji��n', 0, 0, 2013, 'silnice, Forman Cycling Team');";
                $vysledek = MySQL_Query($dotaz);                
                $dotaz="            INSERT INTO `spac_race` (`name`, `date`, `place`, `championship`, `active_login`, `season`, `notice`) VALUES ('Stonavsk� �asovka', '2013-08-11', 'Stonava', 0, 0, 2013, '�asovka, SDH Stonava');";
                $vysledek = MySQL_Query($dotaz);                
                $dotaz="            INSERT INTO `spac_race` (`name`, `date`, `place`, `championship`, `active_login`, `season`, `notice`) VALUES ('Mokrolazeck� 60', '2013-08-17', 'Mokr� Lazce', 0, 0, 2013, 'silnice, LK Mokr� Lazce');";
                $vysledek = MySQL_Query($dotaz);                
                $dotaz="            INSERT INTO `spac_race` (`name`, `date`, `place`, `championship`, `active_login`, `season`, `notice`) VALUES ('Velk� cena La�ska', '2013-08-25', 'Lichnov u NJ', 0, 0, 2013, 'silnice, CK Fren�t�t p.R.');";
                $vysledek = MySQL_Query($dotaz);                
                $dotaz="            INSERT INTO `spac_race` (`name`, `date`, `place`, `championship`, `active_login`, `season`, `notice`) VALUES ('Paskovsk� kri��k', '2013-09-01', 'Paskov', 0, 0, 2013, 'krit�rium, Sokol �abe�');";
                $vysledek = MySQL_Query($dotaz);                
                $dotaz="            INSERT INTO `spac_race` (`name`, `date`, `place`, `championship`, `active_login`, `season`, `notice`) VALUES ('B�lsk� okruhy', '2013-09-08', 'B�l�', 0, 0, 2013, 'silnice, CK Hobby Bohum�n');";
                $vysledek = MySQL_Query($dotaz);                
                $dotaz="            INSERT INTO `spac_race` (`name`, `date`, `place`, `championship`, `active_login`, `season`, `notice`) VALUES ('Tour de �upek', '2013-09-15', 'B�l�', 0, 0, 2013, 'silnice, Racing Ole�n�');";
                $vysledek = MySQL_Query($dotaz);                
                $dotaz="            INSERT INTO `spac_race` (`name`, `date`, `place`, `championship`, `active_login`, `season`, `notice`) VALUES ('O poh�r obce Kr�sn�', '2013-09-21', 'Kr�sn�', 0, 0, 2013, '�asovka, SDH Kr�sn�');";
                $vysledek = MySQL_Query($dotaz);                
                $dotaz="            INSERT INTO `spac_race` (`name`, `date`, `place`, `championship`, `active_login`, `season`, `notice`) VALUES ('Do vrchu Bahenec', '2013-09-22', 'Jablunkov', 0, 0, 2013, '�asovka, CK Orl�k Orlov�');";
                $vysledek = MySQL_Query($dotaz);               
                
            }
          ?>
        
      </div>      
    </div>
  </body>
</html>
<?php MySQL_Close($pripoj); ?>