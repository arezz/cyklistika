<?php
  function errmsg($name,$text)
  {
    if(isset($_GET[$name]))
    {
      if ($_GET[$name] == 0)
      {
        echo "<span class='error'>$text</span>";
      }
    }
    else
    {
      echo "<span class='error'>*</span>";
    }
    return $text;
  }
?>