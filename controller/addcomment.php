<?php session_start(); ?>
<?php include("config.php"); ?>
<?php
$db_account = $_POST['usa'];
$db_message = $_POST['user_message'];
$db_pid = $_POST['pid'];
if($db_account != null && $db_message != null)
{
$sql = ("INSERT INTO comment (co_product_id, account, message) VALUES ('$db_pid', '$db_account', '$db_message')");
mysqli_query($link,$sql);
mysqli_close($link);
?>
<script language = "javascript">
alert("留言成功!");
</script>
<?php
echo "<script type='text/javascript'>";
echo "window.location.href='../product.php'";
echo "</script>"; 
}
?>
