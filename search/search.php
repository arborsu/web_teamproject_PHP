<?php
mysql_connect("localhost","root","12345678");//連結伺服器
mysql_select_db("foodtest");//選擇資料庫
mysql_query("set names utf8");//以utf8讀取資料，讓資料可以讀取中文
$data=mysql_query("select * from food");//選擇從member資料表中讀取所有的資料
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>資料庫網頁建置</title>
</head>

<body>
<p>

</p>
<table width="700" border="1">
   <tr>
    <td >證字號</td>
    <td >類別</td>
    <td >中文品名</td>
    <td >核可日期</td>
    <td >申請商</td>
    <td >證況</td>
    <td >保健功效相關成分</td>
    <td >保健功效</td>
    <td >保健功效宣稱</td>
    <td >警語</td>
	<td >注意事項</td>
  </tr>
  <?php
  for($i=1;$i<=mysql_num_rows($data);$i++){
$rs=mysql_fetch_row($data);
?>
  <tr>
    <td><?php echo $rs[0]?></td>
    <td><?php echo $rs[1]?></td>
    <td><?php echo $rs[2]?></td>
    <td><?php echo $rs[3]?></td>
    <td><?php echo $rs[4]?></td>
    <td><?php echo $rs[5]?></td>
    <td><?php echo $rs[6]?></td>
    <td><?php echo $rs[7]?></td>
    <td><?php echo $rs[8]?></td>
    <td><?php echo $rs[9]?></td>
	<td><?php echo $rs[10]?></td
  </tr>
  
  <?php
}
?>
</table>
<p>&nbsp;</p>
</body>
</html>