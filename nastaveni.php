<?php
//$SQL_Server = "mysql.webzdarma.cz";
//$SQL_Uzivatel = "igmk";
//$SQL_Heslo = "lolipopx7";
//$Databaze = "igmk";
//$pripoj=MySQL_Connect($SQL_Server, $SQL_Uzivatel, $SQL_Heslo) or Die(MySQL_Error());
//MySQL_Select_Db($Databaze) or Die(MySQL_Error());
//MySQL_Query("SET NAMES 'cp1250'");
//session_start();

//$SQL_Server = "hirosima.raynet";
//$SQL_Server = "zakaznik.raynet.cz";
//$SQL_Uzivatel = "cyklistika";
//$SQL_Heslo = "peepu9to";
//$Databaze = "cyklistika";
//$pripoj=MySQL_Connect($SQL_Server, $SQL_Uzivatel, $SQL_Heslo) or Die(MySQL_Error());
//MySQL_Select_Db($Databaze) or Die(MySQL_Error());
//MySQL_Query("SET NAMES 'cp1250'");
//session_start();

$SQL_Server = "localhost";
$SQL_Uzivatel = "root";
$SQL_Heslo = "root";
$Databaze = "cyklistika";
$pripoj=MySQL_Connect($SQL_Server, $SQL_Uzivatel, $SQL_Heslo) or Die(MySQL_Error());
MySQL_Select_Db($Databaze) or Die(MySQL_Error());
MySQL_Query("SET NAMES 'cp1250'");
session_start();
?>