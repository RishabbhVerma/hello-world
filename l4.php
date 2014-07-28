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
