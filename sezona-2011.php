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
           <a href='vysledky-zavodu-2011-celkove.php'><h2>Konečné celkové výsledky za rok 2011</h2></a> </br>

           <h2>Výsledky jednotlivých závodů v roce 2011</h2>

           <a href='vysledky-zavodu-2011-vsichni.php?zavod=race_1&zavod_jmeno=Hodinovka'>Hodinovka</a> </br>
           <a href='vysledky-zavodu-2011-vsichni.php?zavod=race_2&zavod_jmeno=Časovka ArcelorMittal'>Časovka ArcelorMittal</a> </br>
           <a href='vysledky-zavodu-2011-vsichni.php?zavod=race_3&zavod_jmeno=Mlynářská časovka'>Mlynářská časovka</a> </br>
           <a href='vysledky-zavodu-2011-vsichni.php?zavod=race_4&zavod_jmeno=O cenu Krnova'>O cenu Krnova</a> </br>
           <a href='vysledky-zavodu-2011-vsichni.php?zavod=race_5&zavod_jmeno=Tour de Sádek'>Tour de Sádek</a> </br>
           <a href='vysledky-zavodu-2011-vsichni.php?zavod=race_6&zavod_jmeno=Velkopolomské okruhy (Mistrovství SPAC)'>Velkopolomské okruhy (Mistrovství SPAC)</a> </br>
           <a href='vysledky-zavodu-2011-vsichni.php?zavod=race_7&zavod_jmeno=Tour de Javorový'>Tour de Javorový</a> </br>
           <a href='vysledky-zavodu-2011-vsichni.php?zavod=race_8&zavod_jmeno=Cena Continentalu'>Cena Continentalu</a> </br>
           <a href='vysledky-zavodu-2011-vsichni.php?zavod=race_9&zavod_jmeno=Memoriál Aloise Dohnala'>Memoriál Aloise Dohnala</a> </br>
           <a href='vysledky-zavodu-2011-vsichni.php?zavod=race_12&zavod_jmeno=Stonavská časovka (Mistrovství SPAC)'>Stonavská časovka (Mistrovství SPAC)</a> </br>
           <a href='vysledky-zavodu-2011-vsichni.php?zavod=race_13&zavod_jmeno=Grand Prix Forman'>Grand Prix Forman</a> </br>
           <a href='vysledky-zavodu-2011-vsichni.php?zavod=race_14&zavod_jmeno=Velká cena Lašska'>Velká cena Lašska</a> </br>
           <a href='vysledky-zavodu-2011-vsichni.php?zavod=race_15&zavod_jmeno=Paskovský kriťák'>Paskovský kriťák</a> </br>
           <a href='vysledky-zavodu-2011-vsichni.php?zavod=race_16&zavod_jmeno=Mokrolazecká 60'>Mokrolazecká 60</a> </br>
           <a href='vysledky-zavodu-2011-vsichni.php?zavod=race_17&zavod_jmeno=Bělské okruhy'>Bělské okruhy</a> </br>
           <a href='vysledky-zavodu-2011-vsichni.php?zavod=race_18&zavod_jmeno=O pohár obce Krásná'>O pohár obce Krásná</a> </br>

           </br>
           <a href="vypis-zavodu-2011.php">Archiv přihlášování na závody v roce 2011</a> </br>
       </center>
      </div>
      <div class="paticka">
        <?php include("paticka.php"); ?>
      </div> 
    </div>  
  </body>
</html>
<?php MySQL_Close($pripoj); ?>