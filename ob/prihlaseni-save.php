<?php
if (isset($_POST["action"])) //uz se odesilalo
{
//blbovdornost start
$err = array();
if ($_POST["zavod"] != "empty")
{ 
  $zavod = $_POST["zavod"];
}
else
{
  $err["zavod"] = 1;
}
if (!empty($_POST["prijmeni"]))
{
  $prijmeni = $_POST["prijmeni"];
}
else
{
  $err["prijmeni"] = 1;
}
if (!empty($_POST["jmeno"]))
{
  $jmeno = $_POST["jmeno"];
}
else
{
  $err["jmeno"] = 1;
}
if (!empty($_POST["oddil"]))
{
  $oddil = $_POST["oddil"];
  $oddil = "'" . mysql_escape_string($oddil) . "'";
}
else
{
  $err["oddil"] = 1;
}
if ($_POST["kategorie"] != "empty")
{
  $kategorie = $_POST["kategorie"];
}
else
{
  $err["kategorie"] = 1;
}
$i = 0;
//blbovzdornost konec 
$poznamka = $_POST["poznamka"];
if (!empty($_POST["cislo"]))
{
  $cislo = $_POST["cislo"];
}
else
{
   $cislo = "NULL";
}
if (!empty($poznamka))
{
  $poznamka = "'" . mysql_escape_string($poznamka) . "'";
}
else
{
  $poznamka = "NULL";
}
if (count($err) > 0) //uzivatel je blb
{
  $error = 1;
  //header("Location: prihlaseni-zavodnika.php".$error."&chyba=1"); //chyba se odesle zpet
}
else //vse je v pohode jde se ukladat do db
{
  $save="INSERT INTO spac_registration(id_category,id_race,surname,name,spac_number,team,notice) VALUES ('$kategorie', '$zavod', '$prijmeni', '$jmeno', $cislo, $oddil, $poznamka)";
  $vysledek=MySQL_Query($save);
  if ($vysledek)
  {
    //echo "Vše v poøádku";
    $succes = 1;
  }
  if ($vysledek == false)
  {
    //echo "Chyba";
    $succes = 0;
  }  
}
}
?>
