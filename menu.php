<h2>
<a href="vypis-zavodu.php">Aktuální sezóna</a>&nbsp;&nbsp;|&nbsp;&nbsp;
<a href="prihlaseni-zavodnika.php">Pøihlášení na závod</a>&nbsp;&nbsp;|&nbsp;&nbsp;
<a href="statistiky.php">Statistiky</a>&nbsp;&nbsp;|&nbsp;&nbsp;
<a href="index.php">Info</a>&nbsp;&nbsp;|&nbsp;&nbsp;
<a href="diskuze.php">Diskuze</a>&nbsp;&nbsp;|&nbsp;&nbsp;
<a href="http://www.spac-os.cz/" target="blank">SPAC</a>
<?php if ($_SESSION["administrace"] == 1) 
{echo"&nbsp;&nbsp;|&nbsp;&nbsp;<a href='logout.php'>Odhlásit se</a>";} 
?>
</h2>