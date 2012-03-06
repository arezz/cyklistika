<?php
  require("nastaveni.php");
  echo "<?xml version='1.0' encoding='windows-1250' ?>"; ?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">  
  <head>    
    <meta http-equiv="content-type" content="text/html; charset=windows-1250" />    
    <meta name="generator" content="PSPad editor, www.pspad.com" />    
    <title>SPAC - statistiky 2011</title>
    <link rel="stylesheet" type="text/css" href="style.css" />  
  </head>  
  <body>
    <div class="container">    
      <div class="menu">      
        <?php include("menu.php"); ?>    
      </div>    
      <div class="content">
       <center>
           </br>
           <a href='vysledky-zavodu-2011-celkove.php'><h2>Kone�n� celkov� v�sledky za rok 2011</h2></a> </br>

           <h2>V�sledky jednotliv�ch z�vod� v roce 2011</h2>

           <a href='vysledky-zavodu-2011-vsichni.php?zavod=race_1&zavod_jmeno=Hodinovka'>Hodinovka</a> </br>
           <a href='vysledky-zavodu-2011-vsichni.php?zavod=race_2&zavod_jmeno=�asovka ArcelorMittal'>�asovka ArcelorMittal</a> </br>
           <a href='vysledky-zavodu-2011-vsichni.php?zavod=race_3&zavod_jmeno=Mlyn��sk� �asovka'>Mlyn��sk� �asovka</a> </br>
           <a href='vysledky-zavodu-2011-vsichni.php?zavod=race_4&zavod_jmeno=O cenu Krnova'>O cenu Krnova</a> </br>
           <a href='vysledky-zavodu-2011-vsichni.php?zavod=race_5&zavod_jmeno=Tour de S�dek'>Tour de S�dek</a> </br>
           <a href='vysledky-zavodu-2011-vsichni.php?zavod=race_6&zavod_jmeno=Velkopolomsk� okruhy (Mistrovstv� SPAC)'>Velkopolomsk� okruhy (Mistrovstv� SPAC)</a> </br>
           <a href='vysledky-zavodu-2011-vsichni.php?zavod=race_7&zavod_jmeno=Tour de Javorov�'>Tour de Javorov�</a> </br>
           <a href='vysledky-zavodu-2011-vsichni.php?zavod=race_8&zavod_jmeno=Cena Continentalu'>Cena Continentalu</a> </br>
           <a href='vysledky-zavodu-2011-vsichni.php?zavod=race_9&zavod_jmeno=Memori�l Aloise Dohnala'>Memori�l Aloise Dohnala</a> </br>
           <a href='vysledky-zavodu-2011-vsichni.php?zavod=race_12&zavod_jmeno=Stonavsk� �asovka (Mistrovstv� SPAC)'>Stonavsk� �asovka (Mistrovstv� SPAC)</a> </br>
           <a href='vysledky-zavodu-2011-vsichni.php?zavod=race_13&zavod_jmeno=Grand Prix Forman'>Grand Prix Forman</a> </br>
           <a href='vysledky-zavodu-2011-vsichni.php?zavod=race_14&zavod_jmeno=Velk� cena La�ska'>Velk� cena La�ska</a> </br>
           <a href='vysledky-zavodu-2011-vsichni.php?zavod=race_15&zavod_jmeno=Paskovsk� kri��k'>Paskovsk� kri��k</a> </br>
           <a href='vysledky-zavodu-2011-vsichni.php?zavod=race_16&zavod_jmeno=Mokrolazeck� 60'>Mokrolazeck� 60</a> </br>
           <a href='vysledky-zavodu-2011-vsichni.php?zavod=race_17&zavod_jmeno=B�lsk� okruhy'>B�lsk� okruhy</a> </br>
           <a href='vysledky-zavodu-2011-vsichni.php?zavod=race_18&zavod_jmeno=O poh�r obce Kr�sn�'>O poh�r obce Kr�sn�</a> </br>

           </br>
           <a href="vypis-zavodu-2011.php">Archiv p�ihl�ov�n� na z�vody v roce 2011</a> </br>
       </center>
      </div>
      <div class="paticka">
        <?php include("paticka.php"); ?>
      </div> 
    </div>  
  </body>
</html>
<?php MySQL_Close($pripoj); ?>