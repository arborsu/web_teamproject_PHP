<!DOCTYPE html>
<?php
include ("./controller/config.php");
include ("./controller/callsearchclassresult.php");
/*//
$number = 10;//每次要顯示10筆資料
$total=@mysqli_num_rows($data);//總共有幾筆資料
$pages=ceil($total/$number);//透過無條件進位法，算出共需要幾頁
//用來呈現資料
$p=$_GET['p'];
if($p == ''){
 $p=1;
}
$start = ($p-1)*$number;
$sqlp = "SELECT * FROM `product` WHERE `保健功效` LIKE '%$db_search%' limit $start, $number";
$datap = mysqli_query($link,$sqlp);
*/
?>
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
        <header class="masthead" style="background-image: url('img/contact-bg.jpg')">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-10 mx-auto">
                        <div class="page-heading">
                            <h1>分類結果</h1>
                            <span class="subheading">Research result of category</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Main Content -->
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <!--<p>關鍵字查詢</p>-->
                    <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
                    <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
                    <!-- To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->

                </div>
                <form name="searchresult">
                    <!--<form name="searchresult" action="../controller/dosearch.php" method="get">-->
                    <table align="center" style="border:3px #cccccc none; cellpadding="10" border='1'">
                        <tr>
                            <td>證字號</td>
                            <td>類別</td>
                            <td>中文品名</td>
                            <td>保健功效</td>
                            <td>前往</td>
                        </tr>
                        <?php
		for($i=1;$i<=@mysqli_num_rows($data);$i++){
			$rs=@mysqli_fetch_row($data);
		?>
                        <tr>
                            <form id="form1" name="form1" action="product.php" method="post">
                                <td>
                                    <?php echo $rs[1]?>
                                </td>
                                <td>
                                    <?php echo $rs[2]?>
                                </td>
                                <td>
                                    <?php echo $rs[3]?>
                                </td>
                                <td>
                                    <?php echo $rs[8]?>
                                </td>

                                <input id="pid" type="hidden" type="text" name="pid" value="<?php echo $rs[0]?>">
                                <td><button type="submit">前往</button></td>
                            </form>

                        </tr>
                        <?php
		}
		?>
                    </table>
                </form>
            </div>

            <hr>

            <!-- Footer -->
            <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-10 mx-auto">
                            <ul class="list-inline text-center">
                                <li class="list-inline-item">
                                    <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
                                </li>
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
