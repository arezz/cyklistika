<?php
if (isset($_GET["zavod"]))
{
  $zavod=$_GET["zavod"];
}
if (isset($_GET["kategorie"]))
{
  $kategorie=$_GET["kategorie"];
}
if (isset($_GET["f"]) & isset($_GET["id"]))
{
  $f = $_GET["f"];
  $id = $_GET["id"];
  if ($f == "zavod") 
  {
    if (!isset($_GET["yes"]))
    {
      $sql = MySQL_Query("SELECT name,date,place FROM spac_race WHERE id=$id");
      $sql = MySQL_Fetch_Array($sql);
      $name = $sql['name']." ".$sql['date'].", ".$sql['place'];
      echo "<div class='prompt'><span class='question'>Smazat závod <i>$name</i> z databáze? Akci nelze vrátit zpìt.</span><br /><a href='delete.php?f=$f&amp;id=$id&amp;yes=1'>ANO</a> / <a href='vypis-zavodu.php'>NE</a></div>";
    }
    else
    {
      $sql = MySQL_Query("DELETE FROM spac_race WHERE id=$id");
      $sql2 = MySQL_Query("DELETE FROM spac_registration where id_race=$id");
      header("Location: vypis-zavodu.php");      
    }
  }
  if ($f == "ucastnik")
  {
    if (!isset($_GET["yes"]))
    {
      $sql = MySQL_Query("SELECT surname, name FROM spac_registration WHERE id=$id");
      $sql = MySQL_Fetch_Array($sql);
      $name = $sql['surname']." ".$sql['name'];
      echo "<div class='prompt'><span class='question'>Smazat úèastníka závodu <i>$name</i> z databáze? Akci nelze vrátit zpìt.</span><br /><a href='delete.php?f=$f&amp;id=$id&amp;yes=1&amp;zavod=$zavod&amp;kategorie=$kategorie'>ANO</a> / <a href='detail-zavodu.php?zavod=$zavod&amp;kategorie=$kategorie'>NE</a></div>";
    }
    else
    {
      $sql = MySQL_Query("DELETE FROM spac_registration WHERE id=$id");
      header("Location: detail-zavodu.php?zavod=$zavod&amp;kategorie=$kategorie");
    }
  }
}
?>
