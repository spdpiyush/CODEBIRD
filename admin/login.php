<?php 
 session_start();

?>
<!DOCTYPE html>
<html>
<head>
<title>CODEBIRD ADMIN LOGIN</title>
</head>
<body>
<center>
<h1>CODEBIRD LOGIN </h1>
<form action="login.php" method="post">
<label>Username</label><br/>
<input type="text" name="user_name"><br/><br/>
<label>Password</label><br/>
<input type="password" name="user_pass"><br/>
<br/>
<input type="submit" name="login" value="Login">

</form>
</center>
</body>
</html>
<?php
include("/includes/connect.php");
if(isset($_POST['login'])){
	
	$user_name = mysql_real_escape_string($_POST['user_name']);
	$user_pass = mysql_real_escape_string($_POST['user_pass']);
	
	$encrypt = md5($user_pass);
	$login_query = "select * from admin_login where user_name ='$user_name' AND user_password ='$user_pass'";
	
	$run = mysql_query($login_query);
	if(mysql_num_rows($run)>0){
		
		$_SESSION['user_name'] = $user_name;
		echo "<script>window.open('index.php','_self')</script>";
	}
	else{
		echo "<script>alert('Username or Password is Incorrect')</script>";
	}
}

?>