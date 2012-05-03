<?php
if (isset($_POST["action"])) //uz se odesilalo
{
    //blbovdornost start
    $err = array();
    $id = $_POST["id"];
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
    $oddil = $_POST["oddil"];
    $poznamka = $_POST["poznamka"];
    if (!empty($oddil))
    {
      $oddil = "'" . mysql_escape_string($oddil) . "'";
    }
    else
    {
      $oddil = "NULL";
    }
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
    }
    else //vse je v pohode jde se ukladat do db
    {
      $sql = "UPDATE spac_registration SET id_race=$zavod, surname='$prijmeni',name='$jmeno',id_category=$kategorie,team=$oddil,spac_number=$cislo,notice=$poznamka WHERE id=$id";
      //die(var_dump($sql));
      $vysldek = MySQL_Query($sql);
      if ($vysldek)
      {
      	$succes = "Závodník byl upraven";
      }
      else
      {
        $error = "Chyba databáze";
      }
    }
}
?>