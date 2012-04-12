<?php
  require("nastaveni.php");
  include("utils.php");
  echo "<?xml version='1.0' encoding='windows-1250' ?>"; ?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">  
  <head>    
    <meta http-equiv="content-type" content="text/html; charset=windows-1250" />    
    <meta name="generator" content="PSPad editor, www.pspad.com" />    
    <title>SPAC - statistiky 2010</title>
    <link rel="stylesheet" type="text/css" href="style.css" />  
  </head>  
  <body>
    <div class="container">    
      <div class="menu">      
        <?php include("menu.php"); ?>    
      </div>    
      <div class="content">
       <center>
           </ br>
           
           NEPOUZIVANE, protoze vysledky jednotlivych zavodu jsou spatne (razeni je diky koeficientu posrane)
           
           <a href='vysledky-celkove-2010.php'><h2>Konečné celkové výsledky za rok 2010</h2></a> </br>

           <h2>Výsledky jednotlivých závodů v roce 2010</h2>

		<?php
           echo 
	          "<a href='vysledky-zavodu-2010.php?zavod=race_1&zavod_jmeno=$raceName10_1'>$raceName10_1</a> </br>
	           <a href='vysledky-zavodu-2010.php?zavod=race_2&zavod_jmeno=$raceName10_2'>$raceName10_2</a> </br>
	           <a href='vysledky-zavodu-2010.php?zavod=race_3&zavod_jmeno=$raceName10_3'>$raceName10_3</a> </br>
	           <a href='vysledky-zavodu-2010.php?zavod=race_4&zavod_jmeno=$raceName10_4'>$raceName10_4</a> </br>
	           <a href='vysledky-zavodu-2010.php?zavod=race_5&zavod_jmeno=$raceName10_5'>$raceName10_5</a> </br>
	           <a href='vysledky-zavodu-2010.php?zavod=race_6&zavod_jmeno=$raceName10_6'>$raceName10_6</a> </br>
	           <a href='vysledky-zavodu-2010.php?zavod=race_7&zavod_jmeno=$raceName10_7'>$raceName10_7</a> </br>
	           <a href='vysledky-zavodu-2010.php?zavod=race_8&zavod_jmeno=$raceName10_8'>$raceName10_8</a> </br>
	           <a href='vysledky-zavodu-2010.php?zavod=race_9&zavod_jmeno=$raceName10_9'>$raceName10_9</a> </br>
	           <a href='vysledky-zavodu-2010.php?zavod=race_10&zavod_jmeno=$raceName10_10'>$raceName10_10</a> </br>
	           <a href='vysledky-zavodu-2010.php?zavod=race_11&zavod_jmeno=$raceName10_11'>$raceName10_11</a> </br>
	           <a href='vysledky-zavodu-2010.php?zavod=race_12&zavod_jmeno=$raceName10_12'>$raceName10_12</a> </br>
	           <a href='vysledky-zavodu-2010.php?zavod=race_13&zavod_jmeno=$raceName10_13'>$raceName10_13</a> </br>
	           <a href='vysledky-zavodu-2010.php?zavod=race_14&zavod_jmeno=$raceName10_14'>$raceName10_14</a> </br>
	           <a href='vysledky-zavodu-2010.php?zavod=race_15&zavod_jmeno=$raceName10_15'>$raceName10_15</a> </br>
	           <a href='vysledky-zavodu-2010.php?zavod=race_16&zavod_jmeno=$raceName10_16'>$raceName10_16</a> </br>
	           <a href='vysledky-zavodu-2010.php?zavod=race_17&zavod_jmeno=$raceName10_17'>$raceName10_17</a> </br>";	           
		?>
		
       </center>
      </div>
      <div class="paticka">
        <?php include("paticka.php"); ?>
      </div> 
    </div>  
  </body>
</html>
<?php MySQL_Close($pripoj); ?>