<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("config.php");
if($_SESSION['user_account'] != "notuser")
{
        //將$_SESSION['username']丟給$id
        //這樣在下SQL語法時才可以給搜尋的值
        @mysqli_query("set names utf8");
        $userquery = $_SESSION['user_account'];
        //若以下$id直接用$_SESSION['username']將無法使用
        $sql = "SELECT product_id, product_name FROM likelist JOIN product on likelist.like_product_id = product.product_id WHERE like_account='$userquery'";
        $result = mysqli_query($link,$sql);
        $row_num = @mysqli_num_rows($result);

} 
else
{
?>
<script language="javascript">

alert("您尚未登入!請重新登入!")
</script>
<?php
echo "<script type='text/javascript'>";
echo "window.location.href='../login.php'";
echo "</script>"; 
}
?>