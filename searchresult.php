<!DOCTYPE html>
<?php
include ("./controller/config.php");
include ("./controller/callsearchresult.php");
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
                            <h1>搜尋結果</h1>
                            <span class="subheading">Research result</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Main Content -->
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <table align="center" style="border:3px #cccccc none; cellpadding="10" border='1'" >
                        <tr>
                            <td width="20%">證字號</td>
                            <td width="30%">類別</td>
                            <td width="30%">中文品名</td>
                            <td width="30%">保健功效</td>
                            <td width="40%">前往</td>
                        </tr>
                        <?php
		for($i=1;$i<=@mysqli_num_rows($data);$i++){
			$rs=@mysqli_fetch_row($data);
		?>
                        <tr>

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

                            <form id="form1" name="form1" action="product.php" method="post">
                                <input id="pid" type="hidden" type="text" name="pid" value="<?php echo $rs[0]?>">
                                <td><button type="submit">前往</button></td>
                            </form>
                        </tr>
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

        <!-- Contact Form JavaScript -->
        <script src="js/jqBootstrapValidation.js"></script>
        <script src="js/contact_me.js"></script>

        <!-- Custom scripts for this template -->
        <script src="js/clean-blog.min.js"></script>

    </body>

    </html>
