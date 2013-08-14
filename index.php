<?php
if(isset($_POST['name'])&& isset($_POST['surname']) && isset($_POST['username'])&&isset($_POST[''])&&isset($_POST['password'])&&isset($_POST['email']) )
$name = $_POST['name'];
$surname = $_POST['surname'];
$username = $_POST['username'];
$re_password = $_POST['re_password'];
$password = $_POST['password'];
$email = $_POST['email'];



?>
<!DOCTYPE html>
<html>
<head>
<title>Bootstrap</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css" />
<link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.mine.css" />
</head>
<body>
<form name="form1" method="post" action="index.php">
<div id="box">
<?php

if(!empty($name)&&!empty($surname)&&!empty($username)&&!empty($re_passworrd)&&!empty($password)&&!empty($email))
{
	echo'Registered<br>
';
}
else
{
	echo'fill in everything.<br>
';
}

if(!preg_match('/[a-zA-Z]{1,}/',$name))
{
	echo'enter firstname<br>
';
}
if(!preg_match('/[a-zA-Z]{1,}/',$surname))
{
	echo'enter lastname<br>
';
}

if(!preg_match('/[a-zA-Z0-9\.]{1,8}/',$username))
{
	echo'enter username<br>
';
}

if(!preg_match('/[a-zA-Z0-9\.]{1,}/',$password))
{
	echo'enter password<br>
';
}

if(!preg_match('/[a-zA-Z0-9\.]{1,}/',$re_password))
{
	echo'enter password<br>
';
}

if(!preg_match('/[a-z0-9\-\.\_]+\@[a-z0-9\-\.]+\.[a-z0-9]/',$email))
{
	echo'enter email<br>
';
}
?>
<h1>My project</h1>


<p>&nbsp;</p>


<div class="control-group warning">
  <label class="control-label" for="inputWarning" >Name</label>
  <div class="controls">
    <input type="text" id="name" name="name" placeholder="name">
  </div>
</div>
 
<div class="control-group error">
  <label class="control-label" for="inputError" >Surname</label>
  <div class="controls">
    <input type="text" id="inputError" name="surname" placeholder="surname">
  </div>
</div>
 
<div class="control-group info">
  <label class="control-label" for="inputInfo" >Username</label>
  <div class="controls">
    <input type="text" id="inputInfo" name="username" placeholder="Username">
  </div>
</div>
 
<div class="control-group success">
  <label class="control-label" for="inputSuccess" >Password</label>
  <div class="controls">
    <input type="text" id="inputSuccess" name="password" placeholder="Password">
  </div>
</div>

<div class="control-group success">
  <label class="control-label" for="inputSuccess" >Password</label>
  <div class="controls">
    <input type="text" id="inputSuccess" name="re_password" placeholder="Password">
  </div>
</div>

<div class="control-group warning">
  <label class="control-label" for="inputWarning" >Email</label>
  <div class="controls">
    <input type="text" id="inputWarning" name="email" placeholder="email">
  </div>
</div>
<input type="submit" name="Submit" value="submit">
</form>
<p>

  <script src="http://code.jquery.com/jquery.js"></script>
</p>
</div>
</body>
</html>