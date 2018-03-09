
<?php
$server='localhost';
$id='root';
$pwd='';
$dbname='foodtest';
$link = mysqli_connect($server, $id, $pwd, $dbname);
$dbname='foodtest';
mysqli_select_db($link, $dbname);
mysqli_query($link,"SET CHARACTER SET UTF8");//設定中文
//$sqlall = "SELECT * FROM `foodtest`";
//$sqlq = "SELECT * FROM `foodtest` WHERE `name` LIKE '%桂格%'";
$db_search = $_POST['search'];
if($db_search != 'null')
{
	$sql = "SELECT * FROM `foodtest` WHERE `name` LIKE '%$db_search%'";
	echo '<meta http-equiv=REFRESH CONTENT=0;url=./searchresult.php.php>';
}
else
{	
	$db_search = $_POST['classes'];
	$sql = "SELECT * FROM `foodtest` WHERE `8` LIKE '%$db_search%'";
	echo '<meta http-equiv=REFRESH CONTENT=0;url=./searchresult.php.php>';
}
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
<?php
/*$server='localhost';
$id='root';
$pwd='';
$dbname='foodtest';
$link = mysqli_connect($server, $id, $pwd, $dbname);
$dbname='foodtest';
mysqli_select_db($link, $dbname);
mysqli_query($link,"SET CHARACTER SET UTF8");//設定中文
$sqlall = "SELECT * FROM `foodtest`";
//$sql = "SELECT * FROM `foodtest` WHERE `name` LIKE '%桂格%'";
$data = mysqli_query($link,$sql);//選擇從資料表中讀取所有的資料
//$data = mysqli_query($link,$sql);//選擇從資料表中讀取帶有桂格的資料
if (mysqli_connect_errno($link)) 
{ 
    echo "連接 MySQL 失敗: " . mysqli_connect_error(); 
} 
*/
/*if (!$data) { 
	echo("Error description: " . mysqli_error($link));
	} else if(mysqli_num_rows($data) == 1){
    // omitted
	} 
	else {
		echo "invablid username or password";
	}
*/
	
?>
<?php
#$db_account = $_POST['account'];
#$db_password = $_POST['password'];
#$sql = "SELECT * FROM `foodtest` where `COL 1` = '$db_account'";
#$result = mysqli_query($link,$sql);
#$row = @mysqli_fetch_row($result);

//模糊搜尋
/*
$db_search = $_POST['search'];
$sql = "SELECT * FROM `foodtest` WHERE `name` LIKE '%$db_search%'";
$result = mysqli_query($link,$sql);
$row = @mysqli_fetch_row($result);
*/
?>
