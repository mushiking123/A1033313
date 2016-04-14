<?php session_start(); ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">	
</head>
<body>
<center>
<h2>註冊</h2>
<form action="" method="post">
請輸入帳號:<input type="text" name="acc"><br/>
請輸入密碼:<input type="password" name="pwd"><br/>
e-mail:<input type="text" name="email"><br/>
電話:<input type="text" name="phone"><br/>
<input type="submit">
<input type="reset">
</form>
<?php 
if(($_POST["acc"]) && ($_POST["pwd"])!=NULL){
	$acc=$_POST["acc"];
	$pwd=$_POST["pwd"];	
	$email=$_POST["email"];
	$phone=$_POST["phone"];
	$_SESSION['phone']=$phone;
	$_SESSION['mail']=$mail;

	
require('include.php');
if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $_POST["email"])) {
    echo "e-mail格式錯囉!要跳轉囉!"; 
    header('refresh:1; url="reg.php"');
}else{
$add="INSERT INTO login(account,pwd,email,phone) VALUES('$acc','$pwd','$email','$phone')";
$check="SELECT * FROM login WHERE account='$acc'";
$readresult=mysqli_query($link,$check);
$result=mysqli_fetch_array($readresult);
if ($result[1]=="$acc"){
	echo "帳號已被使用";
	echo	"<br/>";
	header('refresh:3; url="reg.php"');
}else
{
	mysqli_query($link,$add);
	echo "註冊成功，3秒後前往登入頁面";
	echo	"<br/>";
	header('refresh:3; url="log.php"');
}


}
}
?>
<a href="log.php">前往登入</a>
</center>
</body>
</html>