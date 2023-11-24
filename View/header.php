<!doctype html>
<html lang="zxx">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Movieon</title>
	<!-- Template CSS -->
	<link rel="stylesheet" href="Layout/assets/css/style-starter.css">
	<!-- Template CSS -->
	<link href="//fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;1,600&display=swap" rel="stylesheet">
	<!-- Template CSS -->
	<link rel="stylesheet" href="Layout/assets/css/dkVip.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>

<body>

	<!-- header -->
	<header id="site-header" class="w3l-header fixed-top">
		<!--/nav-->
		<nav class="navbar navbar-expand-lg navbar-light fill px-lg-0 py-0 px-3">
			<div class="container">
				<a class="navbar-brand" href="index.html">
					<img src="Upload/images/123.png" alt="Logo" style="height:65px;" />
				</a>
				<!-- if logo is image enable this   
						<a class="navbar-brand" href="#index.html">
							<img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
						</a> -->
				<button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
					data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
					aria-label="Toggle navigation">
					<!-- <span class="navbar-toggler-icon"></span> -->
					<span class="fa icon-expand fa-bars"></span>
					<span class="fa icon-close fa-times"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active">
							<a class="nav-link" href="index.html">Trang chủ</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link" href="genre.html" id="navbarDropdown">Thể loại</a>
							<div class="dropdown-content">
							<?php foreach($theloai as $tl):?>
											<a class="dropdown-item" href="?pg=genre&id=<?=$tl["id_loai"]?>"><?=$tl["tentl"]?></a>
										<?php endforeach;?>	
							</div>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="about.html">Giới thiệu</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="contact.html">Liên hệ</a>
						</li>
					</ul>

					<!--/search-right-->
					<!--/search-right-->
					<div class="search-right">
						<a href="#search" class="btn search-hny mr-lg-3 mt-lg-0 mt-4" title="search">Tìm kiếm<span
								class="fa fa-search ml-3" aria-hidden="true"></span></a>
						<!-- search popup -->
						<div id="search" class="pop-overlay">
							<div class="popup">
								<form action="#" method="post" class="search-box">
									<input type="search" placeholder="Nhập từ khóa" name="search" required="required"
										autofocus="">
									<button type="submit" class="btn"><span class="fa fa-search"
											aria-hidden="true"></span></button>
								</form>
								<div class="browse-items">
									<h3 class="hny-title two mt-md-5 mt-4">Thể loại:</h3>
									<ul class="search-items">
										<li><a href="genre.html">Hành động</a></li>
										<li><a href="genre.html">Tình cảm</a></li>
										<li><a href="genre.html">Hài hước</a></li>
										<li><a href="genre.html">Viễn tưởng</a></li>
										<li><a href="genre.html">Hài hước</a></li>
										<li><a href="genre.html">Viễn tưởng</a></li>
										<li><a href="genre.html">Tâm lý</a></li>
										<li><a href="genre.html">Kinh dị</a></li>
										<li><a href="genre.html">Cổ trang</a></li>
										<li><a href="genre.html">Phiêu lưu</a></li>
									</ul>
								</div>
							</div>
							<a class="close" href="#close">×</a>
						</div>
						<!-- /search popup -->
						<!--/search-right-->
					</div>
					<!--/phần user kèm đăng nhập đăng ký-->
					<ul class="navbar-nav ml-right">
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/login.html"><i class="fa-solid fa-user"></i></a>
						</li>
					</ul>
					<!--/phần user kèm đăng nhập đăng ký-->

					<!--/phần popup dùng để đăng ký VIP-->

					<!-- <button id="DK_dk_button">Đăng ký VIP</button> id này dùng để cho trường hợp cần nút bấm-->
					<button id="DK_dk_button" style="display: none;">Đăng ký VIP</button>

					<div id="DK_popup_overlay"></div>
					<div id="DK_popup_dkBox">
						<span id="DK_popup_close_button">X</span>
						<div class="DK_popup_pricing-table">
							<!-- Update IDs and function calls accordingly -->
							<div class="DK_popup_pricing-card">
								<h3 class="DK_popup_pricing-card-header">Bình thường</h3>
								<div class="DK_popup_price"><sup>VND</sup>0<span>/tháng</span></div>
								<ul>
									<li><strong>1</strong> Giới hạn những bộ phim</li>
									<li><strong>2</strong> Có quản cáo</li>
									<li><strong>3</strong> Không xem phim trên 720p</li>
									<li><strong>4</strong> giới hạn lưu phim</li>
								</ul>
							</div>
							<div class="DK_popup_pricing-card">
								<h3 class="DK_popup_pricing-card-header">ĐĂNG KÝ VIP</h3>
								<div class="DK_popup_price"><sup>VND</sup>99.000<span>/Tháng</span></div>
								<ul>
									<li><strong>1</strong> Khống giới hạn xem các bộ phim</li>
									<li><strong>2</strong> Không quản cáo</li>
									<li><strong>3</strong> Xem phim trên 720p</li>
									<li><strong>4</strong> không giới hạn lưu phim</li>
								</ul>
								<a href="#" class="DK_popup_order-btn">Đăng ký ngay</a>
							</div>
						</div>
					</div>
					<!--/phần popup dùng để đăng ký VIP-->

				</div>
				<!-- toggle switch for light and dark theme -->
				<!-- <div class="mobile-position">
					<nav class="navigation">
						<div class="theme-switch-wrapper">
							<label class="theme-switch" for="checkbox">
								<input type="checkbox" id="checkbox">
								<div class="mode-container">
									<i class="gg-sun"></i>
									<i class="gg-moon"></i>
								</div>
							</label>
						</div>
					</nav>
				</div> -->
				<!-- //toggle switch for light and dark theme -->
			</div>
		</nav>
		<!--//nav-->
	</header>