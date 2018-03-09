<?php
mysqli_query($link,"SET CHARACTER SET UTF8");//設定中文



$pn=$_POST["pn"];  //ok likelist
$sql1 = "SELECT * FROM `product` WHERE `product_name` LIKE '%$pn%'";
//$pid=$_POST["pid"];
//$sql = "SELECT * FROM `product` WHERE `許可證字號` LIKE '%$pid%'";


//$id=$_REQUEST["id"];
//$sql = "SELECT * FROM `product` WHERE `product_id` =".$id;
//$name=$_POST["name"];
//$sql = "SELECT * FROM `product` WHERE `product_name` LIKE '%$name%'";
//$number=$_POST["number"];
//$sql = "SELECT * FROM `product` WHERE `許可證字號` LIKE '%$number%'";


$data1 = mysqli_query($link,$sql1);//選擇從資料表中讀取資料




if (mysqli_connect_errno($link)) 
{ 
    echo "連接 MySQL 失敗: " . mysqli_connect_error(); 
} 
if($pid == 'null')
{
echo "沒有撈到東西: ";
}

?>