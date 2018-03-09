<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("config.php");
$update_id = $_POST['product_id'];

$update_num = $_POST['product_num'];
$update_name = $_POST['product_name'];
$update_make = $_POST['product_make'];
$update_class = $_POST['product_class'];
$update_function = $_POST['product_function'];
$update_warning = $_POST['product_warning'];
$update_causion = $_POST['product_causion'];
$update_date = $_POST['product_date'];
$update_com = $_POST['product_com'];
$update_now = $_POST['product_now'];

if($update_id != null)
{
	//UPDATE `product` SET `product_id`='1',`許可證字號`='1',`類別`='1',`product_name`='1',`certificate_date`='1',`申請商`='1',`證況`='1',`保健功效相關成分`='1',`保健功效`='1',`保健功效宣稱`='1',`警語`='1',`注意事項`='1' WHERE 1
        //更新資料庫資料語法
        $sql = "UPDATE product SET `product_name`='$update_name', `保健功效相關成分`='$update_make', `保健功效宣稱`='$update_function', `警語`='$update_warning', `注意事項`='$update_causion', `certificate_date`='$update_date', `申請商`='$update_com', `證況`='$update_now'   WHERE `product_id`='$update_id'";
        if(mysqli_query($link,$sql))
        {
?>
<script language = "javascript">
alert("修改成功!");
</script>
<?php
        echo '<meta http-equiv=REFRESH CONTENT=0;url=../editproduct.php>';
        }
        //if($update_id != null)
		else
        {
?>
<script language = "javascript">
alert("修改失敗!");
</script>
<?php
			
              
		echo '<meta http-equiv=REFRESH CONTENT=0;url=../editproduct.php>';
        }
}
/*else
{

        echo '您無權限觀看此頁面!';
        
}*/
?>