<?php
if (isset($_POST["action"]))
{
  $id = $_POST["id"];
  $name = $_POST["name"];
  $date = $_POST["date"];
  $place = $_POST["place"];
  $championship = $_POST["championship"];
  $season = $_POST["season"];
  $notice = $_POST["notice"];
  if (isset($_POST["active"]))
  {
    $active = 1;
  }
  else
  {
    $active = 0;
  }
  if (isset($_POST["id"]) & isset($_POST["name"]) & isset($_POST["championship"]) & isset($_POST["season"]))
  {
    if (ctype_digit($championship) & ctype_digit($season))
    {
      $sql = "UPDATE spac_race SET name='$name',date='$date',place='$place',championship=$championship,active_login=$active,season=$season,notice='$notice' WHERE id=$id";
      $vysldek = MySQL_Query($sql);
      if ($vysldek)
      {
      	$succes = "Z�vod byl upraven";
      }
      else
      {
        $error = "Chyba datab�ze";
      }
    }
    else
    {
      $error = "N�kter� datov� typy nesouhlas�";
    }
  }
  else
  {
    $error = "N�kter� �daje z�staly nevypln�ny";
  }
}
?>
