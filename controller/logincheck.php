<?php session_start(); ?>
<?php include("config.php"); ?>
<?php
$db_account = $_POST['account'];
$db_password = $_POST['password'];



$sql = "SELECT * FROM member where account = '$db_account'";
$result = mysqli_query($link,$sql);
$row = @mysqli_fetch_row($result);
//判斷帳號與密碼是否為空白
//以及MySQL資料庫裡是否有這個會員
if($db_account != null && $db_password != null && $row[1] == $db_account && $row[2] == $db_password)
{
		//將帳號寫入session，方便驗證使用者身份
        $_SESSION['user_account'] = $db_account;
		$_SESSION['level'] = $row[5];
?>
<script language = "javascript">
alert("登入成功");
</script>
<?php
        echo '<meta http-equiv=REFRESH CONTENT=0;url=../index.php>';
}
else
{
?>
<script language = "javascript">
alert("登入失敗，請確認是否輸入正確的帳號密碼");
</script>
<?php
        echo '<meta http-equiv=REFRESH CONTENT=0;url=../login.php>';
}

?>