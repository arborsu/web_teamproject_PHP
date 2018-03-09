<!DOCTYPE html>
<html lang="en">

  <head>

    
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Clean Blog - Start Bootstrap Theme</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/clean-blog.min.css" rel="stylesheet">

  </head>

  <body>
<?php include("header.php"); ?>
<?php include("./controller/call_likelist.php"); ?>
 <!-- Page Header -->
    <!-- Page Header -->
    <header class="masthead" style="background-image: url('img/likelist-bg.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="page-heading">
              <h1>收藏清單</h1>
              <span class="subheading">This is what you add to your list.</span>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <table align="center">
            <tr>
            <th width="20%">編號</th>
              <th width="65%">產品名稱</th>
                <th width="25%">詳細資訊</th>
					<th width="100%">刪除</th>
              </tr>
               <?php
                    for($i=1;$i<=$row_num;$i++){
                        $row = @mysqli_fetch_row($result);
                    ?>  
                        <tr>
                        <td><?php echo $i?></td>
                        <td><?php echo $row[1]?></td>
						<form id="pn" name="pn" action="product.php" method="post">
						<input id="pid" type="hidden" type="text" name="pid" value="<?php echo $row[0]?>">
                        <td><button "type="submit" >前往</button></td>
						</form>
						<form id="del" name="del" action="./controller/deletelike.php" method="post">
						<input id="uid" type="hidden" type="text" name="uid" value="<?php echo $_SESSION['user_account']?>">
						<input id="pid" type="hidden" type="text" name="pid" value="<?php echo $row[0]?>">
                        <td><button "type="submit" >刪除收藏</button></td>
                        </tr>
						</form>
                <?php
                    }
                ?>
            </table>
        </div>
      </div>
    </div>

    <hr>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <ul class="list-inline text-center">
            
            </ul>
            <p class="copyright text-muted">Copyright &copy; Your Website 2017</p>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/clean-blog.min.js"></script>

  </body>

</html>
