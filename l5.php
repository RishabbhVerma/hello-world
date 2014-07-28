<?php
mysql_connect("localhost","root");
mysql_select_db("app1");
$a1=$_POST[t1];
$a2=$_POST[t2];
$a=mysql_query("select * from login where uid='$a1' and pass='$a2' ");
$b=mysql_num_rows($a);
if($b==1)
{
header("location:l6.php");
}
else
{
header("location:l4.php?z=1");
}
?>
