<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("include.php");
$id=$_SESSION["acc"];

if($_SESSION['acc'] != NULL)
{
        //刪除資料庫資料語法
        $sql = "DELETE FROM login where account='$id'";
        if(mysql_query($sql))
        {
                echo '刪除成功!';
                //echo '<meta http-equiv=REFRESH CONTENT=2;url=member.php>';
        }
        else
        {
                echo '刪除失敗!';
                //echo '<meta http-equiv=REFRESH CONTENT=2;url=member.php>';
        }
}