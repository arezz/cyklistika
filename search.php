<?php
if (!empty($_POST["prijmeni"]) && !empty($_POST["jmeno"]))
{
  	$zadani = 1;
}
else if (!empty($_POST["prijmeni"]))
{
  	$zadani = 2;
}
else if (!empty($_POST["jmeno"]))
{
  	$zadani = 3;
} 
else 
{
	$zadani = 0;
}
?>
