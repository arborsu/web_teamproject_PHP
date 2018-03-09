<?php session_start(); ?>
<?php include("config.php"); ?>
<?php
$db_uid = $_POST['uid'];
$db_pid = $_POST['pid'];
if($db_uid != null && $db_pid != null)
{
$sql = ("INSERT INTO likelist (like_account, like_product_id) VALUES ('$db_uid', '$db_pid')");
mysqli_query($link,$sql);
mysqli_close($link);
?>
<script language = "javascript">
alert("收藏成功");
</script>
<?php
echo '<meta http-equiv=REFRESH CONTENT=0;url=../product.php>';
}
?>