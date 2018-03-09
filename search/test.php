<?php
$server='localhost';
$id='root';
$pwd='';
$dbname='foodtest';
$link = mysqli_connect($server, $id, $pwd, $dbname);
$dbname='foodtest';
mysqli_select_db($link, $dbname);
$data = mysqli_query("SELECT * FROM foodtest where 1");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>資料庫網頁建置</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <p>查詢：
    <input name="food" type="text" id="food" value="" />
	<input type="submit" name="button" id="button" value="搜尋" />
  </p>
  <p>類別：
    <input type="submit" name="button" id="button" value="類別" />
  </p>
</form>
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