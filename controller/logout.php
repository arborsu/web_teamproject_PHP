<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
//將session清空
unset($_SESSION['user_account']);
unset($_SESSION['level']);
session_destroy();
?>
<script language = "javascript">
alert("登出成功");
</script>
<?php
echo '<meta http-equiv=REFRESH CONTENT=0;url=../index.php>';
?>