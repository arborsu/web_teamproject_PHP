<?php session_start(); ?>
<?php include("config.php"); ?>
<?php
$db_account = $_POST['account'];
$db_password = $_POST['password'];
$pri = "沒有權限";
if($db_account != null && $db_password != null)
{
	
	$check = "SELECT * FROM member WHERE account = '$db_account'";
	$accountcheck = mysqli_query($link,$check);
	@mysqli_num_rows($accountcheck);
	$css=@mysqli_fetch_row($accountcheck);
	if($db_account != $css[1]){
		$sql = ("INSERT INTO member (account, password, admin_token) VALUES ('$db_account', '$db_password', '$pri')");
		mysqli_query($link,$sql);
		mysqli_close($link);
?>
<script language = "javascript">
alert("註冊成功");
</script>
<?php		
		echo '<meta http-equiv=REFRESH CONTENT=0;url=../index.php>';
							}
	else{
?>
<script language = "javascript">
alert("註冊失敗 帳號重複");
</script>

<?php
	echo '<meta http-equiv=REFRESH CONTENT=0;url=../index.php>';
	}
}
?>