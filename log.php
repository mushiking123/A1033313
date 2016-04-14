<?php session_start(); ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">	
</head>
<body>
<center>
<h2>登入</h2>
<form action="" method="post">
請輸入帳號:<input type="text" name="acc"><br/>
請輸入密碼:<input type="password" name="pwd"><br/>
<input type="submit">
<input type="reset">
</form>
<?php
require('include.php');
if(isset($_POST["acc"])){
	$acc=$_POST["acc"];
	$pwd=$_POST["pwd"];
//新增資料


//include('header.php');


//$add="INSERT INTO user2(name,pwd) VALUES('$uName','$uPwd')";
//mysqli_query($link,$add);
//讀取資料
$read="SELECT * FROM login WHERE account='$acc' AND pwd='$pwd'";
$readresult=mysqli_query($link,$read);

$rows=mysqli_num_rows($readresult);
	
if($rows){
	echo "Success";
	$_SESSION["check"]="yes";
	$_SESSION["acc"]=$acc;
	$_SESSION["pwd"]=$pwd;

	header('Location:index.php');
}
	
else{
	echo "Failed, Will back to login page after 3 second";
	header('refresh:3; url="login1.php"');
	//echo "where r u from?";
}
}
?>
<a href="reg.php">前往註冊</a>
</center>
</body>
</html>
