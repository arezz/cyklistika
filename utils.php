<?php
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
