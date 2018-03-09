<?php
mysqli_query($link,"SET CHARACTER SET UTF8");//設定中文

$sql = "SELECT * FROM `recommendrank` ORDER BY count DESC LIMIT 10;" ;
$data = mysqli_query($link,$sql);//選擇從資料表中讀取所有的資料
mysqli_connect_errno($link); 
?>
<center>


<div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <table align="center">
            <tr>
              <th width="60%">產品名稱</th>
                <th width="25%">被推薦次數</th>
					<th width="25%">立刻前往</th>
              </tr>
		<?php
		for($i=1;$i<@mysqli_num_rows($data);$i++){
		$rs=@mysqli_fetch_row($data);
		$sql2 = "SELECT * FROM `product` WHERE product_id = '$rs[1]';" ;
		$data2 = mysqli_query($link,$sql2);
		$rs2=@mysqli_fetch_row($data2);
		?>
		<tr>
			<td><?php echo $rs2[3]?></td>
			<td><?php echo $rs[2]?></td>
			
			
			<form id="form1" name="form1" action="product.php" method="post">
			<input id="pid" type="hidden" type="text" name="pid" value="<?php echo $rs[1]?>">
			<td><button type="submit" >前往</button></td>
			</form>
		</tr>
		<?php
		}
		?>
		</table> 
		</div>
	</div>
</div>
