<?php
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

?>
