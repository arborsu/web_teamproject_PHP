<html lang="en">

  <head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
<?php //include("./controller/callproductinf.php"); 
include("./controller/adimproductinf.php");
?>
 <!-- Page Header -->
    <header class="masthead" style="background-image: url('img/contact-bg.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="page-heading">
              <h1>後台商品資料更新</h1>
              <span class="subheading">Show product information</span>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
		<input type="button" value="返回上一頁" onclick="location.href='./admin.php'">
          <p>產品資料:</p>
          <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
          <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
          <!-- To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
          <form name="sendidpw" action="./controller/productupdate.php" method="post">
            
			<table width="1000" border="1" align="center">
                        <?php
		          @mysqli_num_rows($data);
		          $rs=@mysqli_fetch_row($data);
		          ?>
                            <tr>
									<tr>
                                        <td>
                                            <H3>
                                                <font color="#007799">產品ID</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="text" class="form-control" placeholder="" name="product_id" value="<?php echo $rs[0]?>" readonly>
                                        </td>
                                    </tr>
									<tr>
										<td>
											<H3>
                                            <font color="#007799">許可證字號</td>
									</tr>
									<tr>
										<td>
										<input type="text" class="form-control" placeholder="" name="product_num" value="<?php echo $rs[1]?>" readonly>
										</td>
									</tr>
                  
                                    <tr>
                                        <td>
                                            <H3>
                                                <font color="#007799">商品名稱</td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="text" class="form-control" placeholder="" name="product_name" value="<?php echo $rs[3]?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <H3>
                                                <font color="#007799">成分</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="text" class="form-control" placeholder="" name="product_make" value="<?php echo $rs[7]?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <H3>
                                                <font color="#007799">保健類別</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="text" class="form-control" placeholder="" name="product_class" value="<?php echo $rs[8]?>" readonly>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <H3>
                                                <font color="#007799">保健功效</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="text" class="form-control" placeholder="" name="product_function" value="<?php echo $rs[9]?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <H3>
                                                <font color="#007799">警語</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="text" class="form-control" placeholder="" name="product_warning" value="<?php echo $rs[10]?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <H3>
                                                <font color="#007799">注意事項</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="text" class="form-control" placeholder="" name="product_causion" value="<?php echo $rs[11]?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <H3>
                                                <font color="#007799">核可日期</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="text" class="form-control" placeholder="" name="product_date" value="<?php echo $rs[4]?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <H3>
                                                <font color="#007799">申請商</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="text" class="form-control" placeholder="" name="product_com" value="<?php echo $rs[5]?>">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <H3>
                                                <font color="#007799">證照狀況</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="text" class="form-control" placeholder="" name="product_now" value="<?php echo $rs[6]?>">
                                        </td>
                                    </tr>
                                    <div class="form-group">
                                        <center>

                                    </div>
                    </table>
            <div class="form-group">
				<center>
				<br>
				<button type="submit" class="btn btn-primary" id="sendMessageButton">Confirm</button>
			  
            </div>
          </form>
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

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/clean-blog.min.js"></script>

  </body>

</html>
