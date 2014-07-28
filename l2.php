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
