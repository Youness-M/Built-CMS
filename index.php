<?php
	include_once 'include/functions.php';
	$settingsdata=showeditsetting();
//$rowsub=listsubmenudefault('29');
////echo $rowsub[1];die;
//var_dump($rowsub);die;
?>
<!DOCTYPE HTML>
<html>
<head>
<title>
    <?php echo $settingsdata['title'] ?>
</title>
<!---css--->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!---css--->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="<?php echo $settingsdata['description'] ?>" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!---js--->
<script src="js/jquery-1.12.0.min.js"></script>
<script src="js/bootstrap.js"></script>
<!---js--->
<!--JS for animate-->
	<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
	<script src="js/wow.min.js"></script>
		<script>
			new WOW().init();
		</script>
	<!--//end-animate-->

<!---webfont--->
<link href='//fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!---webfont--->
<link rel="stylesheet" type="text/css" href="css/style_common.css" />
 <link rel="stylesheet" type="text/css" href="css/style9.css" />      
</head>
<body>
	<!---header--->
		<div class="header-section">
			<div class="container">
				<div class="head-bottom">
					<div class="logo  wow fadeInDownBig animated animated" data-wow-delay="0.4s">
						<h1><a href="index.html">Agrox<span>Farming company</span></a></h1>
					</div>
				</div>
			</div>
		</div>
		<!---header--->
		<!---banner--->
		<div class="banner">
			<div class="container">
				<nav class="navbar navbar-default">
					<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
								<?php
								$row=listmenudefault();
								foreach ($row as $val):
								?>
								<li><a href="<?php echo $val['url']; ?>" class="wow fadeInDownBig" data-wow-delay=".2s">
										<?php echo $val['title']; ?>
									</a>
                                    <?php
                                        $rowsub=listsubmenudefault($val['id']);
                                        if ($rowsub):
                                     ?>
									<ul class="dropdown-menu">
                                        <?php
                                            foreach ($rowsub as $value):
                                        ?>
										<li>
											<a href="">
                                                <?php echo $value['title']; ?>
											</a>
										</li>
                                        <?php endforeach;  ?>
                                    </ul>
                                    <?php endif; ?>

								</li>
								<?php endforeach; ?>
							</ul>
						</div>
					</div>
				</nav>
				<div class="banner-center">
					<marquee><h3>
بهترین مزرعه کشاورزی</h3></marquee>
				</div>
				
			</div>
		</div>
<!---banner-->
	<!---welcome-->
	<div class="content">
		<div class="welcome-section">
			<div class="container">
			<div class="banner-bottom">
					<div class="banner-grids">

                    <?php
                        $widget=listwidgetdefault();
                        foreach($widget as $valwidget):
                    ?>
						<div class="col-md-4 banner-grid wow fadeInRight animated" data-wow-delay=".5s">
							<h4><?php echo $valwidget['title'];?></h4>
							<div class="ban1">
								<div class="ban-images  view fourth-effect">
									<img src="include/<?php echo $valwidget['img'];?>" class="img-responsive" alt="">
								<div class="mask"></div>
								</div>
								<p><?php echo $valwidget['text'];?> </p>
								<a href="about.html" class="button hvr-wobble-bottom">اطلاعات بیشتر</a>
							</div>
						</div>
                        <?php  endforeach; ?>






						<div class="clearfix"></div>
					</div>




				</div>
				<h2>خوش آمدید</h2>
				<div class="welcome-grids">
					<div class="col-md-3 welcome-grid wow fadeInRight animated" data-wow-delay=".5s">
						<div class="welcome-text">
							<h4>

لورم ایپسوم </h4>
							<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است</p>
						</div>
						<div class="welcome-icon">
							<img src="images/i1.png">
						</div>
					</div>
					<div class="col-md-3 welcome-grid wow fadeInDownBig animated" data-wow-delay=".5s">
						<div class="welcome-text">
							<h4>

لورم ایپسوم </h4>
							<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است</p>
						</div>
						<div class="welcome-icon">
							<img src="images/i2.png">
						</div>
					</div>
					<div class="col-md-3 welcome-grid wow fadeInUpBig animated" data-wow-delay=".5s">
						<div class="welcome-text">
							<h4>

لورم ایپسوم </h4>
							<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است</p>
						</div>
						<div class="welcome-icon">
							<img src="images/i3.png">
						</div>
					</div>
					<div class="col-md-3 welcome-grid wow fadeInLeft animated" data-wow-delay=".5s">
						<div class="welcome-text">
							<h4>

لورم ایپسوم </h4>
							<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است</p>
						</div>
						<div class="welcome-icon">
							<img src="images/i4.png">
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<!---welcome-->
		<!---product-->
		<div class="product-section">
			<div class="container">
				<h3>محصولات محبوب</h3>
				<div class="product-grids">

				<div class="product-grids">




                    <?php
                    $product=listprodefault();
                    foreach ($product as $value):
                        ?>
                        <div class="col-md-6 product-grid1 wow fadeInLeft animated" data-wow-delay=".5s">
                            <div class="product1-right">
                                <h4>
                                    <?php echo $value['title']; ?>
                                </h4>
                                <p>
                                    <?php echo $value['text']; ?>
                                </p>
                                <a href="gallery.html">
                                    <i class="glyphicon glyphicon-circle-arrow-left" aria-hidden="true"></i>
                                </a>
                            </div>
                            <div class="product1-left">
                                <img src="include/<?php echo $value['img']; ?>" class="img-responsive" alt=""/>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                    <?php endforeach; ?>















					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<!---product-->
		<!---news--->
		<div class="news-section">





			<div class="container">




				<h3>آخرین اخبار</h3>


                <?php
                    $title=listnewsdefault();
                    foreach ($title as $val):
                ?>

				<div class="news-grids wow fadeInLeft animated" data-wow-delay=".5s">
					<div class="col-md-4 new-grid">
						<div id="box" class="burst-circle teal">
							<div class="caption"></div>
							<img src="include/<?php echo $val['img'];?>" class="img-responsive" width="200" height="200" />
							<h4> طرح‌نما </h4>
						</div>
					</div>
					<div class="col-md-8 new-grid1 hvr-bounce-to-left">
						<h5><i class="glyphicon glyphicon-calendar" aria-hidden="true">
                                <?php
                                $cluster=selectparentnews($val['procat']);
                                //                           echo $cluster;die;
                                echo $cluster;
                                ?>
                            </i><?php echo "    ".$val['date'];?></h5>
						<h4><?php echo $val['title'];?></h4>
						<p><?php echo $val['text'];?></p>
					</div>
					<div class="clearfix"></div>
				</div>
                <?php endforeach; ?>





			</div>








		</div>
			<!---news--->
		<!---Testimonials--->
		<div class="testimonials-section">
			<div class="container">
				<h3>گواهی نامه</h3>
				<div class="testimonials-grids">
					<div class="col-md-2 testimonials-grid1 wow fadeInLeft animated" data-wow-delay=".5s">
						<img src="images/t1.png" class="img-responsive" alt=""/>
					</div>
					<div class="col-md-10 testimonials-grid wow fadeInRight animated" data-wow-delay=".5s">
						<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد</p>
						<h5>ایمان مدائنی</h5>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<!---Testimonials--->
	</div>
	<!---footer--->
		<div class="footer-section">
			<div class="container">
			<div class="footer-grids">
				<div class="col-md-3 footer-grid wow fadeInLeft animated" data-wow-delay=".5s">
					<h4>درباره ما</h4>
					<ul>
						<li>
تمرکز بر مشتری</li>						
						<li>

لورم ایپسوم یا طرح‌نما </li>
						<li>

لورم ایپسوم یا طرح‌نما </li>
						<li>عملکردها</li>
						<li>نوآوری</li>
						<li>
مسئوليت ها</li>
					</ul>
				</div>
				<div class="col-md-3 footer-grid wow fadeInDownBig animated" data-wow-delay=".5s">
					<h4>راه حل ها</h4>
					<ul>
						<li>
مرکز تماس</li>
						<li>پشتیبانی مشتریان</li>
						<li>

لورم ایپسوم یا طرح‌نما </li>
						<li>طرح‌نما </li>
						<li>
وب سلف سرویس</li>
						<li>معیارهای عملکرد</li>
					</ul>
				</div>
				<div class="col-md-3 footer-grid wow fadeInUpBig animated" data-wow-delay=".5s">
				<h4>کارها</h4>
					<ul>
						<li>
پشتیبانی مشتریان</li>
						<li>
پشتیبانی پلاتین</li>
						<li>پشتیبانی طلا</li>
						<li>آموزش</li>
						<li>کارگاه های آموزشی</li>
						<li>
آموزش آنلاین</li>
					</ul>
				</div>
				<div class="col-md-3 footer-grid wow fadeInLeft animated" data-wow-delay=".5s">
					<h4>تماس با ما</h4>
					<p><?php echo $settingsdata['address'] ?></p>

					<p></p>
					<p>
تلفن: <?php echo $settingsdata['tel'] ?></p>
					<p>فکس: <?php echo $settingsdata['fax'] ?></p>
					<a href="mailto:</a>
				</div>
				<div class="clearfix"></div>
			</div>
			</div>
		</div>	
	<!---footer--->
	<!--copy-->
	<div class="copy-section wow fadeInLeft animated" data-wow-delay=".5s"">
		<div class="container">
				<div class="social-icons">
					<a href="<?php echo $settingsdata['insta'] ?>"><i class="icon3"></i></a>
					<a href="<?php echo $settingsdata['facebook'] ?>"><i class="icon"></i></a>
<!--					<a href="#"><i class="icon2"></i></a>-->
<!--					<a href="#"><i class="icon3"></i></a>-->
				</div>
			<p><?php echo $settingsdata['copright'] ?></p>
		</div>
	</div>
	<!--copy-->
</body>
</html>
