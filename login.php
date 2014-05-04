<?php
include "koneksi.php";
session_start();
if(isset($_POST['Login']))
{
$Username = $_POST['user'];
$Password = $_POST['pass'];
$query = mysql_query("select count(*) as acces from login where Username='$Username' and Password='$Password'");
$row=mysql_fetch_array($query);
if($row['acces'] == '1')
  {
   session_register("Username");
   header("location:forminsert.php");
  }
   else
        {
         ?>
            <script language="JavaScript">
            alert('Maaf, login anda tidak valid.');
            document.location='formlogin.php';
            </script>
            <?
        }
}
?>   
