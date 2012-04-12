<?php
  require("nastaveni.php");
  include("search.php");
  echo "<?xml version='1.0' encoding='windows-1250' ?>"; ?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">  
  <head>    
    <meta http-equiv="content-type" content="text/html; charset=windows-1250" />    
    <meta name="generator" content="PSPad editor, www.pspad.com" />    
    <title>SPAC - statistiky</title>
    <link rel="stylesheet" type="text/css" href="style.css" />  
  </head>  
  <body>
    <div class="container">    
      <div class="menu">      
        <?php include("menu.php"); ?>    
      </div>    
      <div class="content">
       <center>
           <h2>Přehled výsledků jednotlivých závodů v letech 1998-2011</h2>

		   <h3>
           <a href="sezona-2011.php">2011</a>&nbsp;&nbsp;|&nbsp;&nbsp;
           <a href="vysledky-celkove-2010.php">2010</a>
           </h3>
           </br></br>
           <form action="statistiky.php" method="post">      
	          <table>        
	            <tr><td colspan="2" style="text-align:center; vertical-align:bottom; height:50px;"><h1>Vyhledání závodníka</h1></td></tr>
	            <tr><td style="text-align:right; vertical-align:top;">Příjmení:&nbsp;</td><td style="text-align:left;"><input type="text" name="prijmeni"/></td></tr>
	            <tr><td style="text-align:right; vertical-align:top;">Jméno:&nbsp;</td><td style="text-align:left;"><input type="text" name="jmeno"/></td></tr>
	            <tr><td></td><td style="text-align:left;"><input type="hidden" name="action" value="1" /><input type="submit" value="Vyhledat" /></td></tr>
	            <tr><td>&nbsp;</td></tr>
	          </table>
	          
	            <?php 
	            if (isset($zadani)) {
	            	if ($zadani == 1) {
	            		$dotaz = sprintf("SELECT * FROM racer r
	            				WHERE r.surname LIKE CONCAT((UPPER('%s')),'%%') AND 
	            				  UPPER(r.firstname) LIKE CONCAT((UPPER('%s')),'%%')",
			                    mysql_real_escape_string($_POST["prijmeni"]),
			                    mysql_real_escape_string($_POST["jmeno"]));
			            echo "<strong>Nalezené záznamy (".$_POST["prijmeni"]." ".$_POST["jmeno"]."):</strong>";                    
	            	} else if ($zadani == 2) { 
	            		$dotaz = sprintf("SELECT * FROM racer r
	            				WHERE r.surname LIKE CONCAT((UPPER('%s')),'%%')",
			                    mysql_real_escape_string($_POST["prijmeni"]));
	                    echo "<strong>Nalezené záznamy (".$_POST["prijmeni"]."):</strong>";
	            	} else if ($zadani == 3) { 
	            		$dotaz = sprintf("SELECT * FROM racer r
	            				WHERE UPPER(r.firstname) LIKE CONCAT((UPPER('%s')),'%%')",
			                    mysql_real_escape_string($_POST["jmeno"]));
	                    echo "<strong>Nalezené záznamy (".$_POST["jmeno"]."):</strong>";
	            	} else {
	            		$dotaz = "SELECT * FROM racer WHERE 1=2"; // nechci vysledek
	            	}
	            	echo "</br>";	            	
	            	
		            $vysledek = MySQL_Query($dotaz);
		            $i = 0;
		            while ($zaznam = MySQL_Fetch_Array($vysledek))
		            {
		            	$id=$zaznam["id"];
		              	$surname=$zaznam["surname"];
		              	$firstname=$zaznam["firstname"];
		              	
		              	echo "<a href='zavodnik-profil.php?id_racer=$id'>$surname $firstname</a>";
		              	echo "</br>";		            
		            }	            	
	            } 	                      
	            ?>
	        </form>    
       </center>
      </div>
      <div class="paticka">
        <?php include("paticka.php"); ?>
      </div> 
    </div>  
  </body>
</html>
<?php MySQL_Close($pripoj); ?>