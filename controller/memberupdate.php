<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("config.php");
$update_id = $_POST['user_id'];
$update_account = $_POST['user_account'];
$update_password = $_POST['user_password'];
$update_birthday = $_POST['user_birthday'];
$update_phone = $_POST['user_phone'];

if($_SESSION['user_account'] != null && $update_id != null && $update_account != null && $update_password != null)
{
      
    
        //更新資料庫資料語法
        $sql = "UPDATE member SET password='$update_password', birth='$update_birthday', phone='$update_phone' WHERE user_id='$update_id'";
        if(mysqli_query($link,$sql))
        {
?>
<script language = "javascript">
alert("修改成功!");
</script>
<?php
        echo '<meta http-equiv=REFRESH CONTENT=0;url=../membercenter.php>';
        }
        else
        {
?>
<script language = "javascript">
alert("修改失敗!");
</script>
<?php
			
              
                echo '<meta http-equiv=REFRESH CONTENT=0;url=../membercenter.php>';
        }
}
else
{

        echo '您無權限觀看此頁面!';
        
}
?>