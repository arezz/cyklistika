<?php

    function getRealStanding2005($points) {
      if ($points == 15) { return 1; }
      if ($points == 14) { return 1; }
      if ($points == 12) { return 2; }
      if ($points == 10) { return 3; }
      if ($points == 8) { return 4; }
      if ($points < 8 && $points > 1) {
          return 12 - $points;
      }
      if ($points == 1) { return 11; }
      return 0;
    }

    function getRealStanding2006($points) {
      if ($points == 8) { return 1; }
      if ($points == 6) { return 2; }
      if ($points == 4) { return 3; }
      if ($points == 3) { return 4; }
      if ($points == 2) { return 5; }
      if ($points == 1) { return 6; }
      return 0;
    }

    function getRealStanding2009($spacLicence, $points, $champ) {
      $realPoints = 0;
      if ($spacLicence == 1 && $champ == 1) { // mistrak vydelit 2
          $realPoints = round($points / 2);
      } else {
          $realPoints = $points;
      }
      if ($realPoints == 40) { return 1; }
      if ($realPoints == 38) { return 2; }
      if ($realPoints == 36) { return 3; }
      if ($realPoints < 36 && $realPoints > 1) {
          return 38 - $realPoints;
      }
      if ($realPoints == 1) { return 37; }
      return 0;
    }
    
    function getRealStanding2010($spacLicence, $points) {
      $realPoints = 0;
      if ($spacLicence == 1) { // vydelit 1.1
          $realPoints = round($points / 1.1);
      } else {
          $realPoints = $points;
      }
      if ($realPoints == 40) { return 1; }
      if ($realPoints == 38) { return 2; }
      if ($realPoints == 36) { return 3; }
      if ($realPoints < 36 && $realPoints > 1) {
          return 38 - $realPoints;
      }
      if ($realPoints == 1) { return 37; }
      return 0;
    }

    function getRealStanding2011($maxPoints, $points) {
      $realPoints = 0;
      if ($maxPoints == 60) { // MCR SAC
          $realPoints = round($points / 1.5);
      } else if ($maxPoints == 50) { // M SPAC
          $realPoints = ($points - 10);
      } else {
          $realPoints = $points;
      }
      if ($realPoints == 40) { return 1; }
      if ($realPoints == 38) { return 2; }
      if ($realPoints == 36) { return 3; }
      if ($realPoints < 36 && $realPoints > 1) {
          return 38 - $realPoints;
      }
      if ($realPoints == 1) { return 37; }
      return 0;
    }

    function getRealStanding2012($maxPoints, $points) {
      $realPoints = 0;
      if ($maxPoints == 20) {
          return 0; // Trispol
      } else if ($maxPoints == 70) { // M SPAC
          $realPoints = ($points - 10);
      } else {
          $realPoints = $points;
      }
      if ($realPoints == 60) { return 1; }
      if ($realPoints == 55) { return 2; }
      if ($realPoints == 50) { return 3; }
      if ($realPoints == 48) { return 4; }
      if ($realPoints == 46) { return 5; }
      if ($realPoints == 44) { return 6; }
      if ($realPoints == 42) { return 7; }
      if ($realPoints == 40) { return 8; }
      if ($realPoints < 40 && $realPoints > 1) {
          return 48 - $realPoints;
      }
      if ($realPoints == 1) { return 47; }
      return 0;
    }
    
    $raceName98_1="Bezruè";
    $raceName98_2="Tour de Èupek";
    $raceName98_3="Kružberk";
    $raceName98_4="Žermanice";
    $raceName98_5="Èavisov";
    $raceName98_6="Brušp.";
    $raceName98_7="Jilešov.";
    $raceName98_8="Frýdek-Místek";
    $raceName98_9="Tour de Javorový";
    $raceName98_10="Bohuslavice";
    $raceName98_11="Mokrolazecká 60";
    
    $raceName99_1="Tour de Èupek";
    $raceName99_2="Kružberk";
    $raceName99_3="Žermanice";
    $raceName99_4="Skøipov";
    $raceName99_5="Jilešov.";
    $raceName99_6="Brušp.";
    $raceName99_7="Bohum.";
    $raceName99_8="Bohuslavice";
    $raceName99_9="Mokrolazecká 60";
    
    $raceName00_1="Major s. Bohuslavice";
    $raceName00_2="Tour de Èupek";
    $raceName00_3="Bohumínská èasovka";
    $raceName00_4="Orlová";
    $raceName00_5="Kružberk";
    $raceName00_6="Žermanice";
    $raceName00_7="Kyjov.";
    $raceName00_8="Jilešov.";
    $raceName00_9="Tour de Javorový";
    $raceName00_10="Jump Sport";
    $raceName00_11="Lašská èasovka Brušp.";
    $raceName00_12="Kiss èas Ostr.";
    $raceName00_13="GP Ostr.";
    $raceName00_14="Master Prix";
    $raceName00_15="Mokrolazecká 60";
    $raceName00_16="Borová";
    $raceName00_17="U Obrus. Bohusl.";
    
    $raceName03_1="Bohuslavice";
    $raceName03_2="èasovka Bohuslavice";
    $raceName03_3="Zátiší";
    $raceName03_4="Velkopolomské okruhy";
    $raceName03_5="Mas. prix.";
    $raceName03_6="Liptáò";
    $raceName03_7="Jump sp.";
    $raceName03_8="Železný Drak";
    $raceName03_9="Velká cena Valašského Království";
    $raceName03_10="Mokrolazecká 60";
    $raceName03_11="Chr. cup";
    
    $raceName04_1="Bolatice";
    $raceName04_2="Kružberk";
    $raceName04_3="Bohumínská èasovka";
    $raceName04_4="Velkopolomské okruhy";
    $raceName04_5="Tour de Javorový";
    $raceName04_6="Kritérium";
    $raceName04_7="èasovka j.";
    $raceName04_8="Liptáò";
    $raceName04_9="èasovka dvojic";
    $raceName04_10="Velká cena Valašského Království";
    $raceName04_11="Mokrolazecká 60";
    $raceName04_12="Bolatice";
    
    $raceName05_1="Bohumínská èasovka";
    $raceName05_2="Velkopolomské okruhy";
    $raceName05_3="Osobl. výb.";
    $raceName05_4="èasovka dvojic";
    $raceName05_5="Tour de Javorový";
    $raceName05_6="Velká cena Valašského Království";
    $raceName05_7="Mokrolazecká 60";
    
    $raceName06_1="Bohumínská èasovka";
    $raceName06_2="Bohumínská 5hodinovka";
    $raceName06_3="Velká cena Valašského Království";
    $raceName06_4="èasovka Klapka";
    $raceName06_5="Bohumínský dvojboj";
    
    $raceName07_1="Tour de Èupek";
    $raceName07_2="Bohumínská èasovka";
    $raceName07_3="Velkopolomské okruhy";
    $raceName07_4="Tour de Javorový";
    $raceName07_5="FT";
    $raceName07_6="Krnovský Goofák";
    $raceName07_7="Železný Drak";
    $raceName07_8="Bohumínská 5hodinovka";
    $raceName07_9="Velká cena Lašska";
    $raceName07_10="Paskovský kriák";
    $raceName07_11="Mokrolazecká 60";
    $raceName07_12="Petrovická èasovka";
    $raceName07_13="Bohumínský dvojboj";
    $raceName07_14="èas";
    
    $raceName08_1="O cenu Krnova";
    $raceName08_2="Bohumínský dvojboj";
    $raceName08_3="Tour de Javorový";
    $raceName08_4="Krnovský Goofák";
    $raceName08_5="Memoriál Aloise Dohnala";
    $raceName08_6="Kritérium Stará Ves";
    $raceName08_7="Železný Drak";
    $raceName08_8="Klimkovická èasovka";
    $raceName08_9="Bohumínská 5hodinovka";
    $raceName08_10="Velkopolomské okruhy"; 
    $raceName08_11="Stonavská èasovka (Mistrovství SPAC)";
    $raceName08_12="Velká cena Lašska";
    $raceName08_13="Paskovský kriák";
    $raceName08_14="Mokrolazecká 60 (Mistrovství SPAC)";
    $raceName08_15="Petrovická èasovka";
    $raceName08_16="Tour de Èupek";
    
    $raceName09_1="Èasovka Staøíè";
    $raceName09_2="Mlynáøská èasovka";
    $raceName09_3="O cenu Krnova";
    $raceName09_4="Bohumínská èasovka";
    $raceName09_5="Velkopolomské okruhy (Mistrovství SPAC)";
    $raceName09_6="Tour de Sádek";
    $raceName09_7="Tour de Javorový";
    $raceName09_8="Memoriál Aloise Dohnala";
    $raceName09_9="MR SAC èasovka";
    $raceName09_10="MR SAC silnice";
    $raceName09_11="Bartošovice";
    $raceName09_12="Bohumínská 5hodinovka";
    $raceName09_13="Stonavská èasovka (Mistrovství SPAC)";
    $raceName09_14="Velká cena Lašska";
    $raceName09_15="Paskovský kriák";
    $raceName09_16="Mokrolazecká 60";
    $raceName09_17="Petrovická èasovka";      

    $raceName10_1="Èasovka Staøíè";
    $raceName10_2="Tour de Èupek";
    $raceName10_3="Mlynáøská èasovka";
    $raceName10_4="O cenu Krnova";
    $raceName10_5="Èasovka Velké Heraltice (Mistrovství SPAC)";
    $raceName10_6="Velkopolomské okruhy";
    $raceName10_7="Tour de Sádek";
    $raceName10_8="Tour de Javorový";
    $raceName10_9="Memoriál Aloise Dohnala";
    $raceName10_10="Cena Continentalu";
    $raceName10_11="Bohumínská 5hodinovka";
    $raceName10_12="Stonavská èasovka";
    $raceName10_13="Velká cena Lašska (Mistrovství SPAC)";
    $raceName10_14="Paskovský kriák";
    $raceName10_15="Mokrolazecká 60";
    $raceName10_16="Petrovická èasovka";
    $raceName10_17="O pohár obce Krásná";

    $raceName11_1="Hodinovka";
    $raceName11_2="Èasovka ArcelorMittal";
    $raceName11_3="Mlynáøská èasovka";
    $raceName11_4="O cenu Krnova";
    $raceName11_5="Tour de Sádek";
    $raceName11_6="Velkopolomské okruhy (Mistrovství SPAC)";
    $raceName11_7="Tour de Javorový";
    $raceName11_8="Cena Continentalu";
    $raceName11_9="Memoriál Aloise Dohnala";
    $raceName11_10="MÈR silnice";
    $raceName11_11="MÈR èasovka";
    $raceName11_12="Stonavská èasovka (Mistrovství SPAC)";
    $raceName11_13="Grand Prix Forman";
    $raceName11_14="Velká cena Lašska";
    $raceName11_15="Paskovský kriák";
    $raceName11_16="Mokrolazecká 60";
    $raceName11_17="Bìlské okruhy";
    $raceName11_18="O pohár obce Krásná";

    $raceName12_1="Cena Trispolu";
    $raceName12_2="Hodinovka";
    $raceName12_3="Èasovka ArcelorMittal";
    $raceName12_4="Mlynáøská èasovka";
    $raceName12_5="O cenu Krnova";
    $raceName12_6="Tour de Sádek";
    $raceName12_7="Velkopolomské okruhy";
    $raceName12_8="Kritérium Zlín";
    $raceName12_9="Cena Continentalu";
    $raceName12_10="Tour de Javorový";
    $raceName12_11="MÈR èasovka";
    $raceName12_12="MÈR silnice";
    $raceName12_13="Grand Prix Forman (Mistrovství SPAC)";
    $raceName12_14="Stonavská èasovka (Mistrovství SPAC)";
    $raceName12_15="Velká cena Lašska";
    $raceName12_16="Mokrolazecká 60";
    $raceName12_17="Paskovský kriák";
    $raceName12_18="Bìlské okruhy";
    $raceName12_19="Memoriál Aloise Dohnala";
    $raceName12_20="O pohár obce Krásná";
?>
