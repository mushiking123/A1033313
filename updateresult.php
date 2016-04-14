<html>
<body>
<center>
<?php
	$no=$_POST["no"];
	$pwd=$_POST["pwd"];
	$email=$_POST["email"];
	$phone=$_POST["phone"];
	include('include.php');
$update="UPDATE login SET pwd='$pwd',email='$email',phone='$phone' WHERE no=".$no;
mysqli_query($link,$update);
$read="SELECT * FROM login";
$readresult=mysqli_query($link,$read);
	echo "<table border='1'>";
	echo "<tr><td>密碼</td><td>email</td><td>電話</td></tr>";
while($result=mysqli_fetch_array($readresult)){
	echo "<tr>";
	echo "<td>".$result[2]."</td><td>".$result[3]."</td><td>".$result[4]."</td>";
	echo "<td><a href='profile.php?no=".$result[0]."'>更新資料</a></td>";
	echo "<td><a href='checkdel.php'>刪除帳號</a></td>";
	
	echo "</tr>";
}
	echo "</table>";

?>
</center>
</body>
</html>