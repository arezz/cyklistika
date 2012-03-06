<?php
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
      if ($realPoints == 1) { return 38; }
      return 0;
    }

?>
