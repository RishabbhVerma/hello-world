<?php
mysql_connect("localhost","root");
mysql_select_db("app1");
$a1=$_POST[t1];
$a2=$_POST[t2];
$a3=$_POST[t3];
$a4=$_POST[t4];
$a5=$_POST[t5];
$a6=$_POST[t6];
$a7=$_POST[t7];
$a8=$_POST[t8];
$a9=$_POST[t9];
$a=mysql_query("select * from login where uid='$a3' ");
$b=mysql_num_rows($a);
if($b==1)
{
header("location:l2.php?z=3");
}
else if($a8!=$a9)
{
header("location:l2.php?z=1");
}
else if($a1==null || $a2==null || $a3==null || $a4==null || $a5==null || $a6=null)
{
header("location:l2.php?z=4");
}
else
{
mysql_query("insert into login values('$a3','$a4')");
mysql_query("insert into signup values('$a1','$a2','$a3','$a4','$a5','$a6','$a7','$a8')");
header("location:l2.php?z=2");
}
?>





