<!DOCTYPE html>
<?php include("header.php"); ?>
<?php
$user_account = $_SESSION['user_account'];
include ("./controller/config.php");
include ("./controller/callproductinf.php");

$cm1 = "SELECT * FROM `comment` WHERE `co_product_id` = '$getpid' ";
$content = mysqli_query($link,$cm1);//選擇從資料表中讀取所有的資料
	if (mysqli_connect_errno($link)) 
	{ 
		echo "連接 MySQL 失敗: " . mysqli_connect_error(); 
	} 	

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
        <style>
            td {
                font-family: Microsoft JhengHei;
            }

            h3 {
                font-family: Microsoft JhengHei;
            }

            .table-comment {
                width: 100%;
                float: left;
            }

        </style>

    </head>

    <body>

        <!-- Page Header -->
        <header class="masthead" style="background-image: url('img/product-bg.png')">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-10 mx-auto">
                        <div class="page-heading">
                            <h1>健康食品資訊</h1>
                            <span class="subheading">Health Food Information</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Main Content -->
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">






                    <table width="1000" border="1" align="center">
                        <?php
		          @mysqli_num_rows($data);
		          $rs=@mysqli_fetch_row($data);
				  @mysqli_num_rows($data2);
		          $rss=@mysqli_fetch_row($data2);
				  @mysqli_num_rows($data3);
		          $rc=@mysqli_fetch_row($data3);
				  @mysqli_num_rows($data4);
		          $rc_count=@mysqli_fetch_row($data4);
		          ?>
                            <form name="sendform" action="./controller/addlikelist.php" method="post">
                                <input id="uid" type="hidden" type="text" name="uid" value="<?php echo $user_account?>">
                                <input id="pid" type="hidden" type="text" name="pid" value="<?php echo $rs[0]?>">
                                <?php
if($user_account != "notuser"){
	if($rs[0] == $rss[2])
	{
?>
                                    <td>你已經收藏過了，請去Likelist查看！</button>
                                    </td>
                                    <?php
	}
	else
	{
?>
                                    <td><button type="submit">收藏</button></td>
                                    <?php
	}
}
?>
                            </form>

                            <!--<tr>
			      <td ><H3> <font color="#0000FF">產品ID</td>
			</tr>-->
                            <tr>
                                <td><input type="hidden" name="pid" value="<?php echo $rs[0]?>" readonly></td>
                                </form>
                            </tr>
                            <tr>
                                <tr>
                                    <td>
                                        <H3>
                                            <font color="#007799">許可證字號</td>
                                </tr>
                                <tr>
                                    <td>
                                        <?php echo $rs[1]?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <H3>
                                            <font color="#007799">此商品被推薦次數:
                                                <?php echo $rc_count[0] ?>
                                                <form name="sendform" action="./controller/addrecommend.php" method="post">
                                                    <input id="rc_uid" type="hidden" type="text" name="rc_uid" value="<?php echo $user_account?>">
                                                    <input id="rc_pid" type="hidden" type="text" name="rc_pid" value="<?php echo $rs[0]?>">


                                    </td>
                                    <tr>
                                        <td>
                                            <?php 
if($user_account != "notuser"){
	if($rs[0] != $rc[2]){
?>
                                            <input id="rc_token" type="hidden" type="text" name="rc_token" value="yes">
                                            <button type="submit">我要推薦此商品</button>
                                            </form>
                                            <?php
			}
			else
			{
?>
                                            <form name="sendform" action="./controller/addrecommend.php" method="post">
                                                <input id="rc_uid" type="hidden" type="text" name="rc_uid" value="<?php echo $user_account?>">
                                                <input id="rc_pid" type="hidden" type="text" name="rc_pid" value="<?php echo $rs[0]?>">
                                                <input id="rc_token" type="hidden" type="text" name="rc_token" value="no">
                                                <font color="#FF0000">你已經推薦過囉!
                                                    <button type="submit">取消推薦</button>
                                            </form>

                                            <?php
	}
}
else
{
?>
                                            <button type="submit" disabled>會員才能使用推薦功能</button>
                                            <?php
}
?>
                                        </td>
                                    </tr>
                                </tr>

                                <tr>
                                    <tr>
                                        <td>
                                            <H3>
                                                <font color="#007799">商品名稱</td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <?php echo $rs[3]?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <H3>
                                                <font color="#007799">成分</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <?php echo $rs[7]?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <H3>
                                                <font color="#007799">保健類別</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <?php echo $rs[8]?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <H3>
                                                <font color="#007799">保健功效</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <?php echo $rs[9]?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <H3>
                                                <font color="#007799">警語</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <?php echo $rs[10]?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <H3>
                                                <font color="#007799">注意事項</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <?php echo $rs[11]?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <H3>
                                                <font color="#007799">核可日期</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <?php echo $rs[4]?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <H3>
                                                <font color="#007799">申請商</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <?php echo $rs[5]?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <H3>
                                                <font color="#007799">證照狀況</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <?php echo $rs[6]?>
                                        </td>
                                    </tr>


                                    <div class="form-group">
                                        <center>

                                    </div>





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

                        <?php
if($user_account != "notuser"){
	?>
                            <form name="sendform" action="./controller/addcomment.php" method="post">
                                <div class="control-group">
                                    <div class="form-group floating-label-form-group controls">
                                        您的會員帳號:
                                        <br>
                                        <input type="text" class="form-control" value="<?php echo $user_account;?>" placeholder="Account" name="usa" readonly>
										<input type="hidden" name="pid" value="<?php echo $rs[0]?>" readonly>
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="form-group floating-label-form-group controls">
                                        您送出的訊息:
                                        <br>
                                        <input type="text" class="form-control" placeholder="請輸入評論" name="user_message">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <br>
                                <br>
                                <center><button type="submit" class="btn btn-primary" id="sendMessageButton">送出訊息</button>
								</form>
                                    <?php
}
else
{
?>



                                    <center>
                                        您非使用者，無法使用評論功能


                                        <?php
}
?>
                                        <table class="table-comment" align="center">
                                            <td>
                                                <H3>
                                                    <center>
                                                        <font color="#007799">評論區</td>
                                            <?php
		for($i=1;$i<=@mysqli_num_rows($content);$i++){
			$mg=@mysqli_fetch_row($content);
			 ?>
                                                <tr>
                                                    <p align="left">
                                                        <td>Message:
                                                            <?php echo $mg[3]?>
                                                            <p align="right">會員:
                                                                <?php echo $mg[2]?>
                                                        </td>

                                                </tr>

                                                <?php	
		}
		?>
                                        </table>




                                        <p class="copyright text-muted "> </p>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Bootstrap core JavaScript -->
        <script src="vendor/jquery/jquery.min.js "></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js "></script>

        <!-- Contact Form JavaScript -->
        <script src="js/jqBootstrapValidation.js "></script>
        <script src="js/contact_me.js "></script>

        <!-- Custom scripts for this template -->
        <script src="js/clean-blog.min.js "></script>

    </body>

    </html>
