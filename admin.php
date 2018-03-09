
<html lang="en">

  <head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script type="text/javascript" language="javascript">
        $(document).ready(function(){
            $('.ann_header')
            .hover(function() {
                cursorChange(this);
            })
            .click(function() {
                foldToggle(this);
            });
            //.trigger('click');
            
            $('.ann_sub_header')
            .hover(function() {
                cursorChange(this);
            })
            .click(function() {
                foldToggle(this);
            })
            .trigger('click');  // 預設是折疊起來
            
        });
        
        // 打開or摺疊選單
        function foldToggle(element) {
            $(element).next('ul').slideToggle();
        }
        
        // 讓游標移到標題上時，圖案會變成手指
        function cursorChange(element, cursorType) {
            $(element).css('cursor', 'pointer');
        }
    </script>
    <title>Admin 後台系統頁面</title>

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
<?php include("./controller/calladmin.php"); ?>
 <!-- Page Header -->
    <header class="masthead" style="background-image: url('img/home-bg.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="page-heading">
              <h1>AdminSystem</h1>
              <span class="subheading">以下顯示管理員能使用的功能!</span>
            </div>
          </div>
        </div>
      </div>
    </header>

<center>	
<h3 class='ann_sub_header'>所有會員資料呈現</h3>
<ul>
           
        
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <table align="center">
            <tr>
            <th width="10%">會員編號</th>
              <th width="10%">會員帳號</th>
                <th width="25%">會員生日</th>
					<th width="25%">會員電話</th>
					<th width="20%">會員權限</th>
					
              </tr>
               <?php
                    for($i=1;$i<=@mysqli_num_rows($q);$i++){
                        $row = @mysqli_fetch_row($q);
                    ?>  
                        <tr>
                        <td><?php echo $row[0] ?></td>
                        <td><?php echo $row[1] ?></td>
					<?php
					if($row[3] != null){
					?>
						<td><?php echo $row[3] ?></td>
					<?php
					}
					else
					{
					?>
						<td>尚未填寫生日</td>
					<?php
					}
					?>
					<?php
					if($row[4] != null){
					?>
						<td><?php echo $row[4] ?></td>
					<?php
					}
					else
					{
					?>
						<td>尚未填寫電話</td>
					<?php
					}
					?>
                
				<td><?php echo $row[5] ?></td>
				<?php
                    }
                ?>
            </table>
        </div>
      </div>
    </div>
</ul>

<center>	
<h3 class='ann_sub_header'>產品分類1-調整血脂</h3>
<ul>
           
        
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <form name="searchresult">
                    <!--<form name="searchresult" action="../controller/dosearch.php" method="get">-->
                    <table align="center" style="border:3px #cccccc none; cellpadding="10" border='1'">
                        <tr>
                            <td>編號</td>
                            <td>產品名稱</td>
                            <td>申請商</td>
                            <td>證況</td>
							<td>成分</td>
							<td>保健功效</td>
                            <td>前往</td>
                        </tr>
                        <?php
			for($i=1;$i<=@mysqli_num_rows($sa);$i++){
                        $rw = @mysqli_fetch_row($sa);
		?>
                        <tr>
                            <form id="form1" name="form1" action="./editproduct.php" method="post">
                                <td>
                                <?php echo $rw[0]?>
                                </td>
                                <td>
                                <?php echo $rw[3]?>
                                </td>
                                <td>
                                <?php echo $rw[5]?>
                                </td>
                                <td>
                                <?php echo $rw[6]?>
                                </td>
								<td>
                                 <?php echo $rw[7]?>
                                </td>
								<td>
                                <?php echo $rw[8]?>
                                </td>

                                <input id="pid" type="hidden" type="text" name="pid" value="<?php echo $rw[0]?>">
                                <td><button type="submit">前往</button></td>
                            </form>

                        </tr>
                        <?php
		}
		?>
                    </table>
                </form>
        </div>
      </div>
    </div>
</ul>

<center>	
<h3 class='ann_sub_header'>產品分類2-胃腸功能</h3>
<ul>
           
        
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <form name="searchresult">
                    <!--<form name="searchresult" action="../controller/dosearch.php" method="get">-->
                    <table align="center" style="border:3px #cccccc none; cellpadding="10" border='1'">
                        <tr>
                            <td>編號</td>
                            <td>產品名稱</td>
                            <td>申請商</td>
                            <td>證況</td>
							<td>成分</td>
							<td>保健功效</td>
                            <td>前往</td>
                        </tr>
                        <?php
			for($i=1;$i<=@mysqli_num_rows($sb);$i++){
                        $rw = @mysqli_fetch_row($sb);
		?>
                        <tr>
                            <form id="form1" name="form1" action="./editproduct.php" method="post">
                                <td>
                                <?php echo $rw[0]?>
                                </td>
                                <td>
                                <?php echo $rw[3]?>
                                </td>
                                <td>
                                <?php echo $rw[5]?>
                                </td>
                                <td>
                                <?php echo $rw[6]?>
                                </td>
								<td>
                                 <?php echo $rw[7]?>
                                </td>
								<td>
                                <?php echo $rw[8]?>
                                </td>

                                <input id="pid" type="hidden" type="text" name="pid" value="<?php echo $rw[0]?>">
                                <td><button type="submit">前往</button></td>
                            </form>

                        </tr>
                        <?php
		}
		?>
                    </table>
                </form>
        </div>
      </div>
    </div>
</ul>
<br>
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
