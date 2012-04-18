<?php
  require("nastaveni.php");
  echo "<?xml version='1.0' encoding='windows-1250' ?>"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=windows-1250" />
    <meta name="generator" content="PSPad editor, www.pspad.com" />
    <title>SPAC - přihlašování a statistiky</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
  </head>
  <body>
    <div class="container">
      <div class="menu">
        <?php include("menu.php"); ?>
      </div>
      <div class="content">
          <table>
              <tr>
                  <td>&nbsp;</td>
                  <td colspan="2"><center><h2>Informace o projektu "SPAC - statistiky"</h2></center></td>
                  <td>&nbsp</td>
              </tr>
            <tr>
                <td><a href="http://www.spac-os.cz" target="blank"><img src="pics/logo_spac_orange.png"></img></a></td>
                  <td colspan="2">
                     Projekt vznikl jako podpora pro <strong>Slezský pohár amatérských cyklistů</strong>.
                       Primárně byl určen pro <strong>přihlašování na závody</strong>, avšak možnosti
                       php webu ve spojení s databází a spoustou dat k dispozici
                       mě motivovalo si s aplikací trošku pohrát. Výsledkem
                       je kompletní interaktivní <strong>archiv výsledků závodů SPAC od prvního
                       ročníku z roku 1998</strong>, včetně <strong>profilů jednotlivých
                       závodníků.</strong>
                  </td>
                  <td><a href="http://www.spac-os.cz" target="blank"><img src="pics/logo_spac_orange.png"></img></a></td>
            </tr>
            <tr>
                  <td>&nbsp;</td>
                  <td colspan="2">
                     V následující době plánuji udržovat data aktuální a z nových výsledků
                     vytřískat ještě něco navíc, jako třeba <strong>přehled oddílů (družstev) a
                     seznam členů</strong> (a jak do týmu bodovali na závodech
                     i celkem).
                  </td>
                  <td>&nbsp;</td>
            </tr>
               <tr>
                  <td>&nbsp;</td>
                  <td colspan="2">
                    Samozřejmě jako každý projekt, ani tento není bez chyb. Pokud tedy 
                    nějakou nesrovnalost objevíte, neváhejte mi napsat na mail
                    <a href="mailto:v.gruchala@gmail.com">v.gruchala@gmail.com</a>.
                    Stejně tak uvítám nápady a podněty pro další obsah stránek.
                  </td>
                  <td>&nbsp;</td>
            </tr>
            <tr>
                  <td>&nbsp;</td>
            </tr>
           <tr>
                  <td>&nbsp;</td>
                  <td colspan="2">
                       Autorem jednoduché architektury je <strong>Jakub Jaroš</strong>, za což mu
                       ještě jednou chci poděkovat, protože PHP a html nejsou mou silnou
                       stránkou. Celý web jsem již však převzal já (Vojta Gruchala) a jsem jeho jediným
                       administrátorem i programátorem.
                  </td>
                  <td>&nbsp;</td>
            </tr>
            <tr>
                  <td>&nbsp;</td>
            </tr>
           <tr>
                  <td>&nbsp;</td>
                  <td colspan="2">
                      Poslední poděkování patří firmě  <strong><a href="http://www.raynet.cz" target="blank">RAYNET s.r.o.</a></strong>,
                      u které teď běží databáze (stále zdarma, ale asi 100x
                      rychleji než u původního poskytovatele).
                  </td>
                  <td>&nbsp;</td>
            </tr>
            <tr>
                  <td>&nbsp;</td>
            </tr>
              <tr>
                  <td>&nbsp;</td>
                  <td  colspan="2">
                      
                  </td>                  
                  <td>&nbsp;</td>
            </tr>

       </table>
      </div>
      <div class="paticka">
        <?php include("paticka.php"); ?>
      </div>
    </div>
  </body>
</html>
<?php MySQL_Close($pripoj); ?>