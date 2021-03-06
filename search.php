<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
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
    <!-- Page Header -->
    <header class="masthead" style="background-image: url('img/search-bg.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="page-heading">
              <h1>關鍵字查詢</h1>
              <span class="subheading">Search keyords</span>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <p>關鍵字查詢</p>
          <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
          <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
          <!-- To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
          <!--<form name="sendsearch" action="../controller/dosearch.php" method="post">-->
		  <form name="sendsearch" action="./searchresult.php" method="post">
            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label>Search</label>
                <input type="text" class="form-control" placeholder="輸入關鍵字" name="search" required data-validation-required-message="Please enter your search.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <br>
            <div id="success"></div>
            <div class="form-group">
              <center>
			  <button type="submit" class="btn btn-primary" id="sendMessageButton">Search</button>
            </div>
          </form>
		  <!--<form name="sendsearch" action="./searchresult.php" method="post">
		  	<p>分類查詢</p>
			<button type="submit" class="btn btn-primary" name="classes" value="調節血脂">調節血脂</button>
			<button type="submit" class="btn btn-primary" name="classes" value="胃腸功能">胃腸功能</button>
			<button type="submit" class="btn btn-primary" name="classes" value="護肝功能">護肝功能</button>
			<button type="submit" class="btn btn-primary" name="classes" value="骨質保健">骨質保健</button>
			<button type="submit" class="btn btn-primary" name="classes" value="免疫調節">免疫調節</button>
			<button type="submit" class="btn btn-primary" name="classes" value="抗疲勞">抗疲勞</button>
			<button type="submit" class="btn btn-primary" name="classes" value="牙齒保健">牙齒保健</button>
			<button type="submit" class="btn btn-primary" name="classes" value="輔助調整過敏體質">輔助調整過敏體質</button>
			<button type="submit" class="btn btn-primary" name="classes" value="延緩衰老">延緩衰老</button>
			<button type="submit" class="btn btn-primary" name="classes" value="促進鐵吸收">促進鐵吸收</button>
			</form>-->
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