

<?php
mysqli_query($link,"SET CHARACTER SET UTF8");//設定中文



//$pn=$_POST["pn"];  //ok likelist
//$sql = "SELECT * FROM `product` WHERE `product_name` LIKE '%$pn%'";
if($_POST != null){
$_SESSION['pid']=$_POST["pid"];
$getpid = $_SESSION['pid'];
$sql = "SELECT * FROM `product` WHERE `product_id` LIKE '$getpid'";
$data = mysqli_query($link,$sql);//選擇從資料表中讀取資料
//$sql2 = "SELECT * FROM `likelist` WHERE `like_account`= '$user_account' AND `like_product_id` = '$getpid' ";
//$data2 = mysqli_query($link,$sql2);
}
else
{


$getpid = $_SESSION['pid'];
$sql = "SELECT * FROM `product` WHERE `product_id` LIKE '%$getpid%'";
$data = mysqli_query($link,$sql);//選擇從資料表中讀取資料
//$sql2 = "SELECT * FROM `likelist` WHERE `like_account`= '$user_account' AND `like_product_id` = '$getpid' ";
//$data2 = mysqli_query($link,$sql2);
}

//$id=$_REQUEST["id"];
//$sql = "SELECT * FROM `product` WHERE `product_id` =".$id;
//$name=$_POST["name"];
//$sql = "SELECT * FROM `product` WHERE `product_name` LIKE '%$name%'";
//$number=$_POST["number"];
//$sql = "SELECT * FROM `product` WHERE `許可證字號` LIKE '%$number%'";



//$data1 = mysqli_query($link,$sql1);//選擇從資料表中讀取資料



if (mysqli_connect_errno($link)) 
{ 
    echo "連接 MySQL 失敗: " . mysqli_connect_error(); 
} 
if($getpid == 'null')
{
echo "沒有撈到東西: ";
}

?>