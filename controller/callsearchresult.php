<?php
mysqli_query($link,"SET CHARACTER SET UTF8");//設定中文

$db_search = $_POST['search'];
/*if($db_search != 'null')
{*/
	$sql = "SELECT * FROM `product` WHERE `product_name` LIKE '%$db_search%'";
/*}
else
{	
	$db_search = $_POST['classes'];
	$sql = "SELECT * FROM `foodtest` WHERE `8` LIKE '%$db_search%'";
}*/
$data = mysqli_query($link,$sql);//選擇從資料表中讀取所有的資料
//$data = mysqli_query($link,$sql);//選擇從資料表中讀取帶有桂格的資料
if (mysqli_connect_errno($link)) 
{ 
    echo "連接 MySQL 失敗: " . mysqli_connect_error(); 
} 
/*if (!$data) { 
	echo("Error description: " . mysqli_error($link));
	} else if(mysqli_num_rows($data) == 1){
    // omitted
	} 
	else {
		echo "invablid username or password";
	}*/
?>