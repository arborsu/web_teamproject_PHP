<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<?php include("./controller/config.php");?>

<?php 
$name = "管理員";
session_start(); 
if($_SESSION == null){
$_SESSION['user_account'] = "notuser";
}
?>
<!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu	  
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
<?php
		  if($_SESSION['user_account'] == "admin"){
?>			  
			<li class="nav-item">
              <a class="nav-link" href="admin.php">AdminSystem</a>
            </li>
<?php
		  }
?>
			<li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="searchchoice.php">Search</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="likelist.php">LikeList</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="membercenter.php">MemberCenter</a>
            </li>
<?php
		if($_SESSION['user_account'] == "notuser"){
?>
            <li class="nav-item">
              <a class="nav-link" href="login.php">LogIn</a>
			<li class="nav-item">
              <a class="nav-link">您目前是遊客!</a>
<?php
}
else
{            
?>
			<li class="nav-item">
              <a class="nav-link" href="../controller/logout.php">LogOut</a>
			  <li class="nav-item">
              <a class="nav-link">會員: <?php echo $_SESSION['user_account']; ?> 您好!</a>
<?php
}
?>

			</li>
          </ul>
        </div>
      </div>
</nav>
