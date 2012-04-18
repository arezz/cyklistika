<?php
  require("nastaveni.php");
  echo "<?xml version='1.0' encoding='windows-1250' ?>"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=windows-1250" />
    <meta name="generator" content="PSPad editor, www.pspad.com" />
    <title>SPAC - p�ihla�ov�n� a statistiky</title>
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
                     Projekt vznikl jako podpora pro <strong>Slezsk� poh�r amat�rsk�ch cyklist�</strong>.
                       Prim�rn� byl ur�en pro <strong>p�ihla�ov�n� na z�vody</strong>, av�ak mo�nosti
                       php webu ve spojen� s datab�z� a spoustou dat k dispozici
                       m� motivovalo si s aplikac� tro�ku pohr�t. V�sledkem
                       je kompletn� interaktivn� <strong>archiv v�sledk� z�vod� SPAC od prvn�ho
                       ro�n�ku z roku 1998</strong>, v�etn� <strong>profil� jednotliv�ch
                       z�vodn�k�.</strong>
                  </td>
                  <td><a href="http://www.spac-os.cz" target="blank"><img src="pics/logo_spac_orange.png"></img></a></td>
            </tr>
            <tr>
                  <td>&nbsp;</td>
                  <td colspan="2">
                     V n�sleduj�c� dob� pl�nuji udr�ovat data aktu�ln� a z nov�ch v�sledk�
                     vyt��skat je�t� n�co nav�c, jako t�eba <strong>p�ehled odd�l� (dru�stev) a
                     seznam �len�</strong> (a jak do t�mu bodovali na z�vodech
                     i celkem).
                  </td>
                  <td>&nbsp;</td>
            </tr>
               <tr>
                  <td>&nbsp;</td>
                  <td colspan="2">
                    Samoz�ejm� jako ka�d� projekt, ani tento nen� bez chyb. Pokud tedy 
                    n�jakou nesrovnalost objev�te, nev�hejte mi napsat na mail
                    <a href="mailto:v.gruchala@gmail.com">v.gruchala@gmail.com</a>.
                    Stejn� tak uv�t�m n�pady a podn�ty pro dal�� obsah str�nek.
                  </td>
                  <td>&nbsp;</td>
            </tr>
            <tr>
                  <td>&nbsp;</td>
            </tr>
           <tr>
                  <td>&nbsp;</td>
                  <td colspan="2">
                       Autorem jednoduch� architektury je <strong>Jakub Jaro�</strong>, za co� mu
                       je�t� jednou chci pod�kovat, proto�e PHP a html nejsou mou silnou
                       str�nkou. Cel� web jsem ji� v�ak p�evzal j� (Vojta Gruchala) a jsem jeho jedin�m
                       administr�torem i program�torem.
                  </td>
                  <td>&nbsp;</td>
            </tr>
            <tr>
                  <td>&nbsp;</td>
            </tr>
           <tr>
                  <td>&nbsp;</td>
                  <td colspan="2">
                      Posledn� pod�kov�n� pat�� firm�  <strong><a href="http://www.raynet.cz" target="blank">RAYNET s.r.o.</a></strong>,
                      u kter� te� b�� datab�ze (st�le zdarma, ale asi 100x
                      rychleji ne� u p�vodn�ho poskytovatele).
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