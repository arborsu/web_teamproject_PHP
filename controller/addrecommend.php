<?php session_start(); ?>
<?php include("config.php"); ?>
<?php
$rc_uid = $_POST['rc_uid'];
$rc_pid = $_POST['rc_pid'];
$ans = $_POST['rc_token'];
$sqlr = "SELECT * FROM `recommendrank` WHERE `rank_product_id` = '$rc_pid' ";
$data5 = mysqli_query($link,$sqlr);//選擇從資料表中讀取所有的資料
@mysqli_num_rows($data5);
$rcr=@mysqli_fetch_row($data5);
$count=$rcr[2];
if($count == null)
{
	$zero = 0 ;
	$insertrank = ("INSERT INTO recommendrank (rank_product_id, count) VALUES ('$rc_pid', '$zero')");
	mysqli_query($link,$insertrank);
	if($ans == "yes")
	{
	$sql = ("INSERT INTO recommend (rc_account, rc_product_id) VALUES ('$rc_uid', '$rc_pid')");
	mysqli_query($link,$sql);
	//mysqli_close($link);
	$count++;
	$sqlr = "UPDATE recommendrank SET count='$count' WHERE rank_product_id='$rc_pid'";
	mysqli_query($link,$sqlr);
	mysqli_close($link);
	?>
	<script language = "javascript">
	alert("推薦成功");
	window.location.href="../product.php";
	</script>
	<?php
	}
	else if($ans == "no")
	{
	$sql = ("DELETE FROM `recommend` WHERE `rc_account` LIKE '$rc_uid' AND `rc_product_id` = '$rc_pid'");
	mysqli_query($link,$sql);
	//mysqli_close($link);
	$count--;
	$sqlr = "UPDATE recommendrank SET count='$count' WHERE rank_product_id='$rc_pid'";
	mysqli_query($link,$sqlr);
	mysqli_close($link);
	?>
	<script language = "javascript">
	alert("取消推薦了Q_Q!");
	window.location.href="../product.php";
	</script>
	<?php	
	}
}
else if($count != null)
{
	if($ans == "yes")
	{
	$sql = ("INSERT INTO recommend (rc_account, rc_product_id) VALUES ('$rc_uid', '$rc_pid')");
	mysqli_query($link,$sql);
	//mysqli_close($link);
	$count++;
	$sqlr = "UPDATE recommendrank SET count='$count' WHERE rank_product_id='$rc_pid'";
	mysqli_query($link,$sqlr);
	mysqli_close($link);
	?>
	<script language = "javascript">
	alert("推薦成功");
	window.location.href="../product.php";
	</script>
	<?php
	}
	else if($ans == "no")
	{
	$sql = ("DELETE FROM `recommend` WHERE `rc_account` LIKE '$rc_uid' AND `rc_product_id` = '$rc_pid'");
	mysqli_query($link,$sql);
	//mysqli_close($link);
	$count--;
	$sqlr = "UPDATE recommendrank SET count='$count' WHERE rank_product_id='$rc_pid'";
	mysqli_query($link,$sqlr);
	mysqli_close($link);
	?>
	<script language = "javascript">
	alert("取消推薦了Q_Q!");
	window.location.href="../product.php";
	</script>
	<?php	
	}



}
?>
