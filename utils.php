<?php
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
