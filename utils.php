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
    
    $raceName98_1="Bezru�";
    $raceName98_2="Tour de �upek";
    $raceName98_3="Kru�berk";
    $raceName98_4="�ermanice";
    $raceName98_5="�avisov";
    $raceName98_6="Bru�p.";
    $raceName98_7="Jile�ov.";
    $raceName98_8="Fr�dek-M�stek";
    $raceName98_9="Tour de Javorov�";
    $raceName98_10="Bohuslavice";
    $raceName98_11="Mokrolazeck� 60";
    
    $raceName99_1="Tour de �upek";
    $raceName99_2="Kru�berk";
    $raceName99_3="�ermanice";
    $raceName99_4="Sk�ipov";
    $raceName99_5="Jile�ov.";
    $raceName99_6="Bru�p.";
    $raceName99_7="Bohum.";
    $raceName99_8="Bohuslavice";
    $raceName99_9="Mokrolazeck� 60";
    
    $raceName00_1="Major s. Bohuslavice";
    $raceName00_2="Tour de �upek";
    $raceName00_3="Bohum�nsk� �asovka";
    $raceName00_4="Orlov�";
    $raceName00_5="Kru�berk";
    $raceName00_6="�ermanice";
    $raceName00_7="Kyjov.";
    $raceName00_8="Jile�ov.";
    $raceName00_9="Tour de Javorov�";
    $raceName00_10="Jump Sport";
    $raceName00_11="La�sk� �asovka Bru�p.";
    $raceName00_12="Kiss �as Ostr.";
    $raceName00_13="GP Ostr.";
    $raceName00_14="Master Prix";
    $raceName00_15="Mokrolazeck� 60";
    $raceName00_16="Borov�";
    $raceName00_17="U Obrus. Bohusl.";
    
    $raceName03_1="Bohuslavice";
    $raceName03_2="�asovka Bohuslavice";
    $raceName03_3="Z�ti��";
    $raceName03_4="Velkopolomsk� okruhy";
    $raceName03_5="Mas. prix.";
    $raceName03_6="Lipt��";
    $raceName03_7="Jump sp.";
    $raceName03_8="�elezn� Drak";
    $raceName03_9="Velk� cena Vala�sk�ho Kr�lovstv�";
    $raceName03_10="Mokrolazeck� 60";
    $raceName03_11="Chr. cup";
    
    $raceName04_1="Bolatice";
    $raceName04_2="Kru�berk";
    $raceName04_3="Bohum�nsk� �asovka";
    $raceName04_4="Velkopolomsk� okruhy";
    $raceName04_5="Tour de Javorov�";
    $raceName04_6="Krit�rium";
    $raceName04_7="�asovka j.";
    $raceName04_8="Lipt��";
    $raceName04_9="�asovka dvojic";
    $raceName04_10="Velk� cena Vala�sk�ho Kr�lovstv�";
    $raceName04_11="Mokrolazeck� 60";
    $raceName04_12="Bolatice";
    
    $raceName05_1="Bohum�nsk� �asovka";
    $raceName05_2="Velkopolomsk� okruhy";
    $raceName05_3="Osobl. v�b.";
    $raceName05_4="�asovka dvojic";
    $raceName05_5="Tour de Javorov�";
    $raceName05_6="Velk� cena Vala�sk�ho Kr�lovstv�";
    $raceName05_7="Mokrolazeck� 60";
    
    $raceName06_1="Bohum�nsk� �asovka";
    $raceName06_2="Bohum�nsk� 5hodinovka";
    $raceName06_3="Velk� cena Vala�sk�ho Kr�lovstv�";
    $raceName06_4="�asovka Klapka";
    $raceName06_5="Bohum�nsk� dvojboj";
    
    $raceName07_1="Tour de �upek";
    $raceName07_2="Bohum�nsk� �asovka";
    $raceName07_3="Velkopolomsk� okruhy";
    $raceName07_4="Tour de Javorov�";
    $raceName07_5="FT";
    $raceName07_6="Krnovsk� Goof�k";
    $raceName07_7="�elezn� Drak";
    $raceName07_8="Bohum�nsk� 5hodinovka";
    $raceName07_9="Velk� cena La�ska";
    $raceName07_10="Paskovsk� kri��k";
    $raceName07_11="Mokrolazeck� 60";
    $raceName07_12="Petrovick� �asovka";
    $raceName07_13="Bohum�nsk� dvojboj";
    $raceName07_14="�as";
    
    $raceName08_1="O cenu Krnova";
    $raceName08_2="Bohum�nsk� dvojboj";
    $raceName08_3="Tour de Javorov�";
    $raceName08_4="Krnovsk� Goof�k";
    $raceName08_5="Memori�l Aloise Dohnala";
    $raceName08_6="Krit�rium Star� Ves";
    $raceName08_7="�elezn� Drak";
    $raceName08_8="Klimkovick� �asovka";
    $raceName08_9="Bohum�nsk� 5hodinovka";
    $raceName08_10="Velkopolomsk� okruhy"; 
    $raceName08_11="Stonavsk� �asovka (Mistrovstv� SPAC)";
    $raceName08_12="Velk� cena La�ska";
    $raceName08_13="Paskovsk� kri��k";
    $raceName08_14="Mokrolazeck� 60 (Mistrovstv� SPAC)";
    $raceName08_15="Petrovick� �asovka";
    $raceName08_16="Tour de �upek";
    
    $raceName09_1="�asovka Sta���";
    $raceName09_2="Mlyn��sk� �asovka";
    $raceName09_3="O cenu Krnova";
    $raceName09_4="Bohum�nsk� �asovka";
    $raceName09_5="Velkopolomsk� okruhy (Mistrovstv� SPAC)";
    $raceName09_6="Tour de S�dek";
    $raceName09_7="Tour de Javorov�";
    $raceName09_8="Memori�l Aloise Dohnala";
    $raceName09_9="MR SAC �asovka";
    $raceName09_10="MR SAC silnice";
    $raceName09_11="Barto�ovice";
    $raceName09_12="Bohum�nsk� 5hodinovka";
    $raceName09_13="Stonavsk� �asovka (Mistrovstv� SPAC)";
    $raceName09_14="Velk� cena La�ska";
    $raceName09_15="Paskovsk� kri��k";
    $raceName09_16="Mokrolazeck� 60";
    $raceName09_17="Petrovick� �asovka";      

    $raceName10_1="�asovka Sta���";
    $raceName10_2="Tour de �upek";
    $raceName10_3="Mlyn��sk� �asovka";
    $raceName10_4="O cenu Krnova";
    $raceName10_5="�asovka Velk� Heraltice (Mistrovstv� SPAC)";
    $raceName10_6="Velkopolomsk� okruhy";
    $raceName10_7="Tour de S�dek";
    $raceName10_8="Tour de Javorov�";
    $raceName10_9="Memori�l Aloise Dohnala";
    $raceName10_10="Cena Continentalu";
    $raceName10_11="Bohum�nsk� 5hodinovka";
    $raceName10_12="Stonavsk� �asovka";
    $raceName10_13="Velk� cena La�ska (Mistrovstv� SPAC)";
    $raceName10_14="Paskovsk� kri��k";
    $raceName10_15="Mokrolazeck� 60";
    $raceName10_16="Petrovick� �asovka";
    $raceName10_17="O poh�r obce Kr�sn�";

    $raceName11_1="Hodinovka";
    $raceName11_2="�asovka ArcelorMittal";
    $raceName11_3="Mlyn��sk� �asovka";
    $raceName11_4="O cenu Krnova";
    $raceName11_5="Tour de S�dek";
    $raceName11_6="Velkopolomsk� okruhy (Mistrovstv� SPAC)";
    $raceName11_7="Tour de Javorov�";
    $raceName11_8="Cena Continentalu";
    $raceName11_9="Memori�l Aloise Dohnala";
    $raceName11_10="M�R silnice";
    $raceName11_11="M�R �asovka";
    $raceName11_12="Stonavsk� �asovka (Mistrovstv� SPAC)";
    $raceName11_13="Grand Prix Forman";
    $raceName11_14="Velk� cena La�ska";
    $raceName11_15="Paskovsk� kri��k";
    $raceName11_16="Mokrolazeck� 60";
    $raceName11_17="B�lsk� okruhy";
    $raceName11_18="O poh�r obce Kr�sn�";

    $raceName12_1="Cena Trispolu";
    $raceName12_2="Hodinovka";
    $raceName12_3="�asovka ArcelorMittal";
    $raceName12_4="Mlyn��sk� �asovka";
    $raceName12_5="O cenu Krnova";
    $raceName12_6="Tour de S�dek";
    $raceName12_7="Velkopolomsk� okruhy";
    $raceName12_8="Krit�rium Zl�n";
    $raceName12_9="Cena Continentalu";
    $raceName12_10="Tour de Javorov�";
    $raceName12_11="M�R �asovka";
    $raceName12_12="M�R silnice";
    $raceName12_13="Grand Prix Forman (Mistrovstv� SPAC)";
    $raceName12_14="Stonavsk� �asovka (Mistrovstv� SPAC)";
    $raceName12_15="Velk� cena La�ska";
    $raceName12_16="Mokrolazeck� 60";
    $raceName12_17="Paskovsk� kri��k";
    $raceName12_18="B�lsk� okruhy";
    $raceName12_19="Memori�l Aloise Dohnala";
    $raceName12_20="O poh�r obce Kr�sn�";
?>
