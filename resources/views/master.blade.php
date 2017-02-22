<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('title')</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/home/logo.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> (+84) 917 60 90 75</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> 1361135@student.hcmus.edu.vn</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="https://www.facebook.com/kidabandoned"><i class="fa fa-facebook"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="apple-store"><img src="images/home/logo.png" width="40" /></a>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Cuộn</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="apple-store" class="active">Trang Chủ</a></li>
								<li class="dropdown"><a href="products">Sản Phẩm<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
										<li><a href="macbookair">Macbook Air</a></li>
										<li><a href="macbook">Macbook</a></li>
										<li><a href="ipadair2">iPad Air 2</a></li> 
										<li><a href="ipadmini4">iPad Mini 4</a></li>
										<li><a href="iphone6s">iPhone 6S</a></li>
										<li><a href="iphone6splus">iPhone 6S Plus</a></li>
                                    </ul>
                                </li>
								<li><a href="contact-us">Liên hệ</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<input type="text" placeholder="Tìm Kiếm"/>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->

	<section>
		@yield('section')
	</section>

	<footer id="footer"><!--Footer-->		
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Tin tức</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Tin mới</a></li>
								<li><a href="#">Khuyến mãi</a></li>
								<li><a href="#">Tuyển dụng</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Chính Sách</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Chính sách giao hàng</a></li>
								<li><a href="#">Chính sách đổi trả</a></li>
								<li><a href="#">Chính sách bảo hành</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Dịch vụ & Hỗ trợ</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Hệ thống cửa hàng</a></li>
								<li><a href="#">Hướng dẫn mua hàng</a></li>
								<li><a href="#">Hướng dẫn thanh toán</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Có thắc mắc?</h2>
							<ul class="nav nav-pills nav-stacked">
								<li>Bán hàng (7:30 - 21:00)</li>
								<li>Hotline: 0917 60 90 75</li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2>Nhận voucher</h2>
							<form action="#" class="searchform">
								<input type="text" placeholder="Nhập địa chỉ e-mail của bạn" />
								<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright ©<a target="_blank" href="http://www.themeum.com"><i>Themeum</i></a></span>
					<p class="pull-right">Re-Designed by <span><a target="_blank" href="http://www.facebook.com/kidabandoned">Trần Thành Nhân</a></span></p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	

  
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>