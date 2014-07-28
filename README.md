hello-world
===========

My first repositoru on Github
I love to do programming
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body><center>		
<h1 class="text-success">ONLINE RETAIL STORE</h1>
</center>
<div class="container-fluid">
&nbsp;&nbsp;<a href="l4.php" class="btn btn-primary btn-lg" role="button">Login</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="l2.php" class="btn btn-primary btn-lg" role="button">Signup</a>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>

<!DOCTYPE html>
<html lang="en">
  <head>
  <title>
  Sign UP
  </title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	</head>
  <body><br>
  <div class="form-group container">
<a href="l1.php" class="btn btn-primary btn-lg">Login</a></div>
  <center>
<?php
$d=$_GET[z];
if($d==1)
{
echo"<font color=magenta><h2>please enter correct code</h2></font>";
}
if($d==2)
{
echo"<font color=magenta><h2>user is successfull created</h2></font>";
}
if($d==3)
{
echo"<font color=red><h2>user is already exist</h2></font>";
}
if($d==4)
{
echo"<font color=red><h2>please fill all the information below</h2></font>";
}
?>
</center>
<center><h1 class="text-info">Please Signup here</h1></center>
<form name="frm1" method="post" action="l3.php" class="form-horizontal" role="form">
<div class="form-group">
<label class="col-sm-2 control-label">First name</label>
<div class="col-sm-6">
<input type="text" class="form-control" name="t1" placeholder="Enter Firstname">
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label">Last Name</label>
<div class="col-sm-6">
<input type="text" name="t2" class="form-control" placeholder="Enter Lastname">
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label">User Email</label>
<div class="col-sm-6">
<input type="email" name="t3" class="form-control" placeholder="Enter Email">
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label">User Password</label>
<div class="col-sm-6">
<input type="password" name="t4" class="form-control" placeholder="Enter Password">
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label">Mobileno</label>
<div class="col-sm-6">
<input type="text" name="t5" class="form-control" placeholder="Enter MobileNO">
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label">Address</label>
<div class="col-sm-6">
<input type="text" name="t6" class="form-control" placeholder="Enter Address">
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label">DOB</label>
<div class="col-sm-6">
<input type="date" name="t7" class="form-control" placeholder="Enter date of Birth"></div></div>
<div class="form-group">
<label class="col-sm-2 control-label">EnterCode</label>
<div class="col-sm-6">
<input type="text" name="t8" class="form-control" placeholder="Enter Code Show below">
</div></div>
<div class="form-group">
<div class="col-sm-offset-2 col-sm-10">
<?php
$a="0123456789";
$b="";
for($i=0;$i<6;$i++)
{
$c=$a{rand(0,9)};
$b=$b.$c;
$d=$c.".jpg";
echo"<img src=$d>";
}
echo"<input type=hidden name=t9 value=$b>";

?>
</div></div>
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <input type="submit" class="btn btn-default active" value="Signup">
    </div>
  </div>
</form>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>


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

<!DOCTYPE html>
<html lang="en">
  <head><title>Login Page</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<a href="l1.php" class="btn btn-link btn-lg">Link</a>
<form class="form-horizontal" role="form" method="post" action="l5.php">
<center>
<?php
$a=$_GET[z];
if($a==1)
{
echo"<font color=magenta><h2>Invalid user id or password</h2></font>";
} 
?></center>
  <div class="form-group">
    <label for="a1" class="col-sm-4 control-label">Email</label>
    <div class="col-sm-3">
      <input type="email" class="form-control" id="a1" name="t1" placeholder="Email">
    </div>
  </div>
  <div class="form-group">
    <label for="a2"class="col-sm-4 control-label">Password</label>
    <div class="col-sm-3">
      <input type="password" class="form-control" id="a2" name="t2" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-4 col-sm-10">
      <div class="checkbox">
        <label>
          <input type="checkbox"> Remember me
        </label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-4 col-sm-10">
      <button type="submit" class="btn btn-default active">Sign in</button>
    </div>
  </div>
</form>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>


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











