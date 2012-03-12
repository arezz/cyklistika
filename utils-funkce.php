<?php
  function errmsg($name,$text)
  {
    global $err;
    if(isset($err[$name]))
    {
      echo "<span class='error'>$text</span>";
    }
    else
    {
      echo "<span class='error'>*</span>";
    }
    return;
  }
  function writte($name)
  {
    global $err;
    if (isset($_POST[$name]) & (count($err) > 0))
    {
      echo "value='$_POST[$name]'";
    }
    return;
  }
?>