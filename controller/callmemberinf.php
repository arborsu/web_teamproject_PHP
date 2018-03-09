<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("config.php");
if($_SESSION['user_account'] == "notuser")
{
?>
<script language="javascript">

alert("您尚未登入!請重新登入!")
</script>
<?php
echo "<script type='text/javascript'>";
echo "window.location.href='../index.php'";
echo "</script>"; 
} 
else
{
        //將$_SESSION['username']丟給$id
        //這樣在下SQL語法時才可以給搜尋的值
        $userquery = $_SESSION['user_account'];
        $sql = "SELECT * FROM member where account='$userquery'";
        $result = mysqli_query($link,$sql);
        $row = @mysqli_fetch_row($result);


}
?>