<html>
<body>
<center>
<?php
$no=$_GET["no"];
include('include.php');

$read="SELECT * FROM login WHERE no=".$no;
$readresult=mysqli_query($link,$read);
$result=mysqli_fetch_array($readresult);

echo "<form action='updateresult.php' method='post'>";
echo "編號:".$result[0]."<br/>";
echo "<input type='hidden' name='no' value='".$result[0]."'>";

echo "密碼:<input type='text' name='pwd' value='".$result[2]."'><br/>";
echo "email:<input type='text' name='email' value='".$result[3]."'><br/>";
echo "電話:<input type='text' name='phone' value='".$result[4]."'><br/>";
echo "<input type='submit' value='更新'>";
echo "<input type='reset'>";
echo "</form>";

?>
</center>
</body>
</html>