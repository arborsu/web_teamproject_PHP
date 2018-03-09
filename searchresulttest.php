<?php
$server='localhost';
$id='root';
$pwd='';
$dbname='foodtest';
$link = mysqli_connect($server, $id, $pwd, $dbname);
$dbname='foodtest';
mysqli_select_db($link, $dbname);
mysqli_query($link,"SET CHARACTER SET UTF8");//設定中文
$sqlall = "SELECT * FROM `foodtest`";
$sql = "SELECT * FROM `foodtest` WHERE `name` LIKE '%桂格%'";
$data = mysqli_query($link,$sqlall);//選擇從資料表中讀取所有的資料
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
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>測試資料庫連接</title>
</head>

<body>
<p>

</p>
<table width="700" border="1">
   <tr>
    <td >證字號</td>
	<td >類別</td>
	<td >中文品名</td>
	<td >保健功效</td>
  </tr>
  <?php
  for($i=1;$i<=mysqli_num_rows($data);$i++){
$rs=mysqli_fetch_row($data);
?>
  <tr>
    <td><?php echo $rs[0]?></td>
	<td><?php echo $rs[1]?></td>
	<td><?php echo $rs[2]?></td>
	<td><?php echo $rs[7]?></td>
  </tr>
  
  <?php
}
?>
</table>
<p>&nbsp;</p>
</body>
</html>