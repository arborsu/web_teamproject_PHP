<?php session_start(); ?>
<?php include("config.php"); ?>
<?php
$rc_uid = $_POST['rc_uid'];
$rc_pid = $_POST['rc_pid'];
$ans = $_POST['rc_token'];
$sqlr = "SELECT * FROM `commentrank` WHERE `rack_product_id` = '$rc_pid' ";
mysqli_query($link,$sqlr);//選擇從資料表中讀取所有的資料
$rcount=@mysqli_fetch_row($data);
$count=$rs[2];
mysqli_close($link);
if($ans == "yes")
{
$count++;
$sqlr = "UPDATE commentrank SET count='$count' WHERE rank_product_id='$rc_pid'";
mysqli_query($link,$sqlr);
mysqli_close($link);
?>
<script language = "javascript">
</script>
<?php
echo '<meta http-equiv=REFRESH CONTENT=0;url=./controller/addrecommend.php>';
}
else if($ans == "no")
{
$count--;
$sqlr = "UPDATE commentrank SET count='$count' WHERE rank_product_id='$rc_pid'";
mysqli_query($link,$sqlr);
mysqli_close($link);
?>
<script language = "javascript">
</script>
<?php	
echo '<meta http-equiv=REFRESH CONTENT=0;url=./controller/addrecommend.php>';
}
?>