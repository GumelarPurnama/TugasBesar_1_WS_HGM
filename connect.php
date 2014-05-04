<?
$serverName="localhost";
$userName="root";
$password="";
$dbName="test";
$conn=mysql_connect($serverName, $userName,$password) or
die("Koneksi gagal");
$db=mysql_select_db($dbName,$conn) or
die("DataBase tidak tersedia");
?>
