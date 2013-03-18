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
            $dotaz="INSERT INTO `spac_race` (`name`, `date`, `place`, `championship`, `active_login`, `season`, `notice`) VALUES ('Cena Trispolu', '2013-04-24', 'Karlovice', 0, 1, 2013, 'silnice, ACS Drak Vrbno');";
                $vysledek = MySQL_Query($dotaz);                
                $dotaz="INSERT INTO `spac_race` (`name`, `date`, `place`, `championship`, `active_login`, `season`, `notice`) VALUES ('Časovka ArcelorMittal - mistrovství', '2013-05-12', 'Nošovice', 1, 0, 2013, 'časovka, Racing Olešná F-M');";
                $vysledek = MySQL_Query($dotaz);                
                $dotaz="            INSERT INTO `spac_race` (`name`, `date`, `place`, `championship`, `active_login`, `season`, `notice`) VALUES ('O cenu Krnova', '2013-05-19', 'Krnov', 0, 0, 2013, 'silnice, Cyklistika pro všechny');";
                $vysledek = MySQL_Query($dotaz);                
                $dotaz="              INSERT INTO `spac_race` (`name`, `date`, `place`, `championship`, `active_login`, `season`, `notice`) VALUES ('Memoriál Jana Ferdyna', '2013-06-02', 'Bohumín', 0, 0, 2013, 'silnice, LowellPro Šafrata');";
                $vysledek = MySQL_Query($dotaz);                
                $dotaz="             INSERT INTO `spac_race` (`name`, `date`, `place`, `championship`, `active_login`, `season`, `notice`) VALUES ('Tour de Sádek', '2013-06-08', 'Velké Heraltice - Sádek', 0, 0, 2013, 'silnice, TJ Lokomotiva Krnov');";
                $vysledek = MySQL_Query($dotaz);                
                $dotaz="              INSERT INTO `spac_race` (`name`, `date`, `place`, `championship`, `active_login`, `season`, `notice`) VALUES ('Velkopolomské okruhy', '2013-06-16', 'Velká Polom', 0, 0, 2013, 'silnice, TJ Velká Polom');";
                $vysledek = MySQL_Query($dotaz);                
                $dotaz="              INSERT INTO `spac_race` (`name`, `date`, `place`, `championship`, `active_login`, `season`, `notice`) VALUES ('Cena Continentalu', '2013-06-22', 'Frenštát p. Radhoštěm', 0, 0, 2013, 'závod do vrchu, CK Frenštát p.R.');";
                $vysledek = MySQL_Query($dotaz);                
                $dotaz="              INSERT INTO `spac_race` (`name`, `date`, `place`, `championship`, `active_login`, `season`, `notice`) VALUES ('Tour de Javorový', '2013-06-23', 'Oldřichovice u Třince', 0, 0, 2013, 'závod do vrchu, TJ TŽ Třinec');";
                $vysledek = MySQL_Query($dotaz);                
                $dotaz="             INSERT INTO `spac_race` (`name`, `date`, `place`, `championship`, `active_login`, `season`, `notice`) VALUES ('Memoriál Aloise Dohnala - mistrovství', '2013-06-29', 'Suchdol n. Odrou', 0, 0, 2013, 'silnice, Cyklokramo Suchdol n.O.');";
                $vysledek = MySQL_Query($dotaz);                
                $dotaz="              INSERT INTO `spac_race` (`name`, `date`, `place`, `championship`, `active_login`, `season`, `notice`) VALUES ('Kritérium mezi ploty', '2013-07-07', 'Stará Ves n.O.', 0, 0, 2013, 'kritérium, ACK Stará Ves n. Ondřejnicí');";
                $vysledek = MySQL_Query($dotaz);                
                $dotaz="            INSERT INTO `spac_race` (`name`, `date`, `place`, `championship`, `active_login`, `season`, `notice`) VALUES ('Grand Prix Forman', '2013-08-04', 'Nový Jičín', 0, 0, 2013, 'silnice, Forman Cycling Team');";
                $vysledek = MySQL_Query($dotaz);                
                $dotaz="            INSERT INTO `spac_race` (`name`, `date`, `place`, `championship`, `active_login`, `season`, `notice`) VALUES ('Stonavská časovka', '2013-08-11', 'Stonava', 0, 0, 2013, 'časovka, SDH Stonava');";
                $vysledek = MySQL_Query($dotaz);                
                $dotaz="            INSERT INTO `spac_race` (`name`, `date`, `place`, `championship`, `active_login`, `season`, `notice`) VALUES ('Mokrolazecká 60', '2013-08-17', 'Mokré Lazce', 0, 0, 2013, 'silnice, LK Mokré Lazce');";
                $vysledek = MySQL_Query($dotaz);                
                $dotaz="            INSERT INTO `spac_race` (`name`, `date`, `place`, `championship`, `active_login`, `season`, `notice`) VALUES ('Velká cena Lašska', '2013-08-25', 'Lichnov u NJ', 0, 0, 2013, 'silnice, CK Frenštát p.R.');";
                $vysledek = MySQL_Query($dotaz);                
                $dotaz="            INSERT INTO `spac_race` (`name`, `date`, `place`, `championship`, `active_login`, `season`, `notice`) VALUES ('Paskovský kriťák', '2013-09-01', 'Paskov', 0, 0, 2013, 'kritérium, Sokol Žabeň');";
                $vysledek = MySQL_Query($dotaz);                
                $dotaz="            INSERT INTO `spac_race` (`name`, `date`, `place`, `championship`, `active_login`, `season`, `notice`) VALUES ('Bělské okruhy', '2013-09-08', 'Bělá', 0, 0, 2013, 'silnice, CK Hobby Bohumín');";
                $vysledek = MySQL_Query($dotaz);                
                $dotaz="            INSERT INTO `spac_race` (`name`, `date`, `place`, `championship`, `active_login`, `season`, `notice`) VALUES ('Tour de Čupek', '2013-09-15', 'Bělá', 0, 0, 2013, 'silnice, Racing Olešná');";
                $vysledek = MySQL_Query($dotaz);                
                $dotaz="            INSERT INTO `spac_race` (`name`, `date`, `place`, `championship`, `active_login`, `season`, `notice`) VALUES ('O pohár obce Krásná', '2013-09-21', 'Krásná', 0, 0, 2013, 'časovka, SDH Krásná');";
                $vysledek = MySQL_Query($dotaz);                
                $dotaz="            INSERT INTO `spac_race` (`name`, `date`, `place`, `championship`, `active_login`, `season`, `notice`) VALUES ('Do vrchu Bahenec', '2013-09-22', 'Jablunkov', 0, 0, 2013, 'časovka, CK Orlík Orlová');";
                $vysledek = MySQL_Query($dotaz);               
                
            }
          ?>
        
      </div>      
    </div>
  </body>
</html>
<?php MySQL_Close($pripoj); ?>