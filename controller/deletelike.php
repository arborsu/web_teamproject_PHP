<?php session_start(); ?>
<?php include("config.php"); ?>
<?php
$db_uid = $_POST['uid'];
$db_pid = $_POST['pid'];
if($db_uid != null && $db_pid != null)
{
//$sql = "SELECT * FROM `product` WHERE `product_id` LIKE '$getpid'";
$sql = ("DELETE FROM `likelist` WHERE `like_account` LIKE '$db_uid' AND `like_product_id` = '$db_pid'");
mysqli_query($link,$sql);
mysqli_close($link);
?>
<script language = "javascript">
alert("刪除成功");
</script>
<?php
echo '<meta http-equiv=REFRESH CONTENT=0;url=../likelist.php>';
}
?>