<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("config.php");
if($_SESSION == null)
{
?>
<script language="javascript">

alert("您沒有權限! 無法登入")
</script>
<?php
echo "<script type='text/javascript'>";
echo "window.location.href='../index.php'";
echo "</script>"; 
} 
else if($_SESSION['user_account'] != null || $_SESSION['level'] == "管理員")
{
$a = "調節血脂功能";
$b = "胃腸功能";
$c = "護肝功能";
$d = "骨質保健";
$e = "免疫調節";
$f = "抗疲勞";
$g = "牙齒保健";
$h = "輔助調整過敏體質";
$i = "延緩衰老";
$j = "促進鐵吸收";
$sql="SELECT * FROM member ORDER BY user_id ASC";
$q=mysqli_query($link,$sql);
$sqla = "SELECT * FROM `product` WHERE `保健功效` LIKE '%$a%'";
$sqlb = "SELECT * FROM `product` WHERE `保健功效` LIKE '%$b%'";
$sqlc = "SELECT * FROM `product` WHERE `保健功效` LIKE '%$c%'";
$sqld = "SELECT * FROM `product` WHERE `保健功效` LIKE '%$d%'";
$sqle = "SELECT * FROM `product` WHERE `保健功效` LIKE '%$e%'";
$sqlf = "SELECT * FROM `product` WHERE `保健功效` LIKE '%$f%'";
$sqlg = "SELECT * FROM `product` WHERE `保健功效` LIKE '%$g%'";
$sqlh = "SELECT * FROM `product` WHERE `保健功效` LIKE '%$h%'";
$sqli = "SELECT * FROM `product` WHERE `保健功效` LIKE '%$i%'";
$sqlj = "SELECT * FROM `product` WHERE `保健功效` LIKE '%$j%'";
$sa=mysqli_query($link,$sqla);
$sb=mysqli_query($link,$sqlb);
$sc=mysqli_query($link,$sqlc);
$sd=mysqli_query($link,$sqld);
$se=mysqli_query($link,$sqle);
$sf=mysqli_query($link,$sqlf);
$sg=mysqli_query($link,$sqlg);
$sh=mysqli_query($link,$sqlh);
$si=mysqli_query($link,$sqli);
$sj=mysqli_query($link,$sqlj);

}
?>