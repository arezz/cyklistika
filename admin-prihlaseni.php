<?php
if (isset($_POST["action"]))
{
  $dotaz = MySQL_Query("SELECT pwd FROM admin");
  $heslo = MySQL_Fetch_Array($dotaz);
  if ($_POST["password"] == $heslo[0])
  {
    $_SESSION["administrace"] = 1;
    $succes = 1;
  }
  else
  {
    $succes = 0;
  }
}
?>
