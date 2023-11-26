	<!-- main-slider -->
	<section class="w3l-main-slider position-relative" id="home">
		<div class="companies20-content">
			<div class="owl-one owl-carousel owl-theme">
				<?php foreach($movierole as $lx):?>
				<div class="item">
					<li>
						<div class="slider-info banner-view bg bg2" style="background: url(<?=$img_p?><?=$lx["img"]?>) no-repeat center;"   >
							<div class="banner-info" >
								<h3><?=$lx["ten"]?></h3>
								<p><?=$lx["mota"]?></p>
								<a href="#small-dialog1" class="popup-with-zoom-anim play-view1">
									<span class="video-play-icon">
										<span class="fa fa-play"></span>
									</span>
									<h6>Xem Trailer</h6>
								</a>
								<!-- dialog itself, mfp-hide class is required to make dialog hidden -->
								<div id="small-dialog1" class="zoom-anim-dialog mfp-hide">
									<iframe src="https://player.vimeo.com/video/358205676" allow="autoplay; fullscreen"
										allowfullscreen=""></iframe>
								</div>
							</div>
						</div>
					</li>
				</div>
		 <?php endforeach;?>
			</div>
		</div>
	</section>
	<!-- //banner-slider-->
	<!-- main-slider -->
	<!--grids-sec1-->
	<section class="w3l-grids">
		<div class="grids-main py-5">
			<div class="container py-lg-3">
				<div class="headerhny-title">
					<div class="w3l-title-grids">
						<div class="headerhny-left">
							<h3 class="hny-title">Phim mới cập nhật</h3>
						</div>
						<div class="headerhny-right text-lg-right">
							<h4><a class="show-title" href="genre.html">Hiển thị tất cả</a></h4>
						</div>
					</div>
				</div>
				<div class="w3l-populohny-grids">
					<?php foreach ($movie as $mv):?>
					<div class="item vhny-grid">
						<div class="box16">
							<a href="?pg=detail&id=<?=$mv["id_phim"]?>">
								<figure>
									<img class="img-fluid" src="<?=$img_p?><?=$mv["img"]?>" alt="">
								</figure>
								<div class="box-content">
									<h3 class="title"><?=$mv["ten"]?></h3>
								</div>
								<!-- <span class="fa fa-play video-icon" aria-hidden="true"></span> -->
							</a>
						</div>
					</div>
					<?php endforeach;?>
				</div>
			</div>
		</div>
	</section>
	<!--//grids-sec1-->
	<!--grids-sec2-->
	<section class="w3l-grids">
		<div class="grids-main py-5">
			<div class="container py-lg-3">
				<div class="headerhny-title">
					<div class="w3l-title-grids">
						<div class="headerhny-left">
							<h3 class="hny-title" style="color: #f4cb9b;">Độc quyền trên movieon</h3>
						</div>
						<div class="headerhny-right text-lg-right">
							<h4><a class="show-title" href="genre.html">Hiển thị tất cả</a></h4>
						</div>
					</div>
				</div>
				<div class="owl-three owl-carousel owl-theme">
					<?php foreach($vip as $vp):?>
					<div class="item vhny-grid">
						<div class="box16 mb-0">
							<a href="?pg=detail&id=<?=$vp["id_phim"]?>">
								<figure>
									<img class="img-fluid" src="<?=$img_p?><?=$vp["img"]?>" alt=""  style="width: 214px; height: 342px;">
								</figure>
								<!-- <span class="fa fa-play video-icon" aria-hidden="true"></span> -->
							</a>
						</div>
						<h3> <a class="title-gd" href="?pg=detail&id=<?=$vp["id_phim"]?>" style="height: 54px;"><?=$vp["ten"]?></a></h3>
						<p><?=$vp["mota"]?></p>
						<div class="button-center text-center mt-4">
							<a href="?pg=detail&id=<?=$vp["id_phim"]?>" class="btn watch-button">Xem ngay</a>
						</div>

					</div>
					<?php endforeach;?>
				</div>
			</div>

		</div>
	</section>
	<!--grids-sec2-->
	<!--mid-slider -->
	<section class="w3l-mid-slider position-relative">
		<div class="companies20-content">
			<div class="owl-mid owl-carousel owl-theme">
               <?php foreach($luotview as $lv):?>
				<div class="item">
					<li>
						<div class="slider-info mid-view bg bg2 " style="background: url(<?=$img_p?><?=$lv["img"]?>) no-repeat center;">
							<div class="container">
								<div class="mid-info">
									<span class="sub-text"><?=$lv["tentl"]?></span>
									<h3><?=$lv["ten"]?></h3>
									<p><?=$lv["namsx"]?> ‧ <?=$lv["tentl"]?></p>
									<a class="watch" href="?pg=detail&id=<?=$lv["id_phim"]?>"><span class="fa fa-play"
											aria-hidden="true"></span>
										Xem Phim</a>
								</div>
							</div>
						</div>
					</li>
				</div>
				<?php endforeach;?>
			</div>
		</div>
	</section>
	<!-- //mid-slider-->
	<!--/tabs-->
	<section class="w3l-albums py-5" id="projects">
		<div class="container py-lg-4">
			<div class="row">
				<div class="col-lg-12 mx-auto">
					<!--Horizontal Tab-->
					<div id="parentHorizontalTab">
						<ul class="resp-tabs-list hor_1">
							<li>Hành Động</li>
							<li>Tình Cảm</li>
							<li>Kinh dị</li>
							<div class="clear"></div>
						</ul>
						<div class="resp-tabs-container hor_1">
							<div class="albums-content">
								<div class="row">
									<!--/set1-->
									<?php foreach ($moviehd as $hd):?>
									
									<div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
										<div class="slider-info">
											<div class="img-circle">
												<a href="?pg=detail&id=<?=$hd["id_phim"]?>">

													<img src="<?=$img_p?><?=$hd["img"]?>" class="img-fluid"
														alt="author image">
												</a>
											</div>
											<div class="message">
												<p>English</p>
												<a class="author-book-title" href="?pg=detail&id=<?=$hd["id_phim"]?>"><?=$hd["ten"]?></a>
											</div>
										</div>

									</div>
								<?php endforeach;?>
								</div>
							</div>
							<div class="albums-content">
								<div class="row">
								<?php foreach ($movietc as $tc):?>
									
									<div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
										<div class="slider-info">
											<div class="img-circle">
												<a href="?pg=detail&id=<?=$tc["id_phim"]?>">

													<img src="<?=$img_p?><?=$tc["img"]?>" class="img-fluid"
														alt="author image">
												</a>
											</div>
											<div class="message">
												<p>English</p>
												<a class="author-book-title" href="?pg=detail&id=<?=$tc["id_phim"]?>"><?=$tc["ten"]?></a>
												<h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

													</span>

													
												</h4>
											</div>
										</div>

									</div>
								<?php endforeach;?>
									<!--//set1-->
									<!--/set2-->
									<!--//set2-->
								</div>
							</div>
							<div class="albums-content">
								<div class="row">
									<!--/set3-->
									<?php foreach ($moviekd as $kd):?>
									
									<div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
										<div class="slider-info">
											<div class="img-circle">
												<a href="?pg=detail&id=<?=$kd["id_phim"]?>">

													<img src="<?=$img_p?><?=$kd["img"]?>" class="img-fluid"
														alt="author image">
												</a>
											</div>
											<div class="message">
												<p>English</p>
												<a class="author-book-title" href="?pg=detail&id=<?=$kd["id_phim"]?>"><?=$kd["ten"]?></a>
												<h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

													</span>

													
												</h4>
											</div>
										</div>

									</div>
								<?php endforeach;?>
								
									<!--//set3-->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- //tabs-->
	<script src="Layout/assets/js/jquery-1.9.1.min.js"></script>
<script src="Layout/assets/js/easyResponsiveTabs.js"></script>
<script type="text/javascript">
	$(document).ready(function () {
		//Horizontal Tab
		$('#parentHorizontalTab').easyResponsiveTabs({
			type: 'default', //Types: default, vertical, accordion
			width: 'auto', //auto or any width like 600px
			fit: true, // 100% fit in a container
			tabidentify: 'hor_1', // The tab groups identifier
			activate: function (event) { // Callback function if tab is switched
				var $tab = $(this);
				var $info = $('#nested-tabInfo');
				var $name = $('span', $info);
				$name.text($tab.text());
				$info.show();
			}
		});
	});
</script>
<!-- //responsive tabs -->
<!--/theme-change-->
<script src="Layout/assets/js/theme-change.js"></script>
<!-- //theme-change-->
<script src="Layout/assets/js/owl.carousel.js"></script>
<!-- script for banner slider-->
<script>
	$(document).ready(function () {
		$('.owl-one').owlCarousel({
			stagePadding: 280,
			loop: true,
			margin: 20,
			nav: true,
			responsiveClass: true,
			autoplay: true,
			autoplayTimeout: 5000,
			autoplaySpeed: 1000,
			autoplayHoverPause: false,
			responsive: {
				0: {
					items: 1,
					stagePadding: 40,
					nav: false
				},
				480: {
					items: 1,
					stagePadding: 60,
					nav: true
				},
				667: {
					items: 1,
					stagePadding: 80,
					nav: true
				},
				1000: {
					items: 1,
					nav: true
				}
			}
		})
	})
</script>
<!-- //script -->
<script>
	$(document).ready(function () {
		$('.owl-three').owlCarousel({
			loop: true,
			margin: 20,
			nav: false,
			responsiveClass: true,
			autoplay: true,
			autoplayTimeout: 5000,
			autoplaySpeed: 1000,
			autoplayHoverPause: false,
			responsive: {
				0: {
					items: 2,
					nav: false
				},
				480: {
					items: 2,
					nav: true
				},
				667: {
					items: 3,
					nav: true
				},
				1000: {
					items: 5,
					nav: true
				}
			}
		})
	})
</script>
<!-- //script -->
<!-- /mid-script -->
<script>
	$(document).ready(function () {
		$('.owl-mid').owlCarousel({
			loop: true,
			margin: 0,
			nav: false,
			responsiveClass: true,
			autoplay: true,
			autoplayTimeout: 5000,
			autoplaySpeed: 1000,
			autoplayHoverPause: false,
			responsive: {
				0: {
					items: 1,
					nav: false
				},
				480: {
					items: 1,
					nav: false
				},
				667: {
					items: 1,
					nav: true
				},
				1000: {
					items: 1,
					nav: true
				}
			}
		})
	})
</script>
<!-- //mid-script -->

<!-- script for owlcarousel -->
<!-- Template JavaScript -->
<script src="Layout/assets/js/jquery.magnific-popup.min.js"></script>
<script>
	$(document).ready(function () {
		$('.popup-with-zoom-anim').magnificPopup({
			type: 'inline',

			fixedContentPos: false,
			fixedBgPos: true,

			overflowY: 'auto',

			closeBtnInside: true,
			preloader: false,

			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-zoom-in'
		});

		$('.popup-with-move-anim').magnificPopup({
			type: 'inline',

			fixedContentPos: false,
			fixedBgPos: true,

			overflowY: 'auto',

			closeBtnInside: true,
			preloader: false,

			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-slide-bottom'
		});
	});
</script>
<!--//-->
<!-- disable body scroll which navbar is in active -->
<script>
	$(function () {
		$('.navbar-toggler').click(function () {
			$('body').toggleClass('noscroll');
		})
	});
</script>
<!-- disable body scroll which navbar is in active -->

<!--/MENU-JS-->
<script>
	$(window).on("scroll", function () {
		var scroll = $(window).scrollTop();

		if (scroll >= 80) {
			$("#site-header").addClass("nav-fixed");
		} else {
			$("#site-header").removeClass("nav-fixed");
		}
	});

	//Main navigation Active Class Add Remove
	$(".navbar-toggler").on("click", function () {
		$("header").toggleClass("active");
	});
	$(document).on("ready", function () {
		if ($(window).width() > 991) {
			$("header").removeClass("active");
		}
		$(window).on("resize", function () {
			if ($(window).width() > 991) {
				$("header").removeClass("active");
			}
		});
	});
</script>
<!--//MENU-JS-->

<script src="Layout/assets/js/bootstrap.min.js"></script>
<script>
	// Hàm kiểm tra xem người dùng đã đăng ký chưa
	function DK_isDKvip() {
		return localStorage.getItem('DK_DKvip') === 'true';
	}

	// Khi trang web được tải xong
	window.addEventListener('DOMContentLoaded', (event) => {
		// Nếu người dùng chưa đăng ký
		if (!DK_isDKvip()) {
			// Hiển thị popup sau 2 giây
			setTimeout(DK_showPopup, 2000);
		}
	});

	// Khi người dùng nhấn vào nút đăng ký
	document.getElementById('DK_dk_button').addEventListener('click', DK_showPopup);

	// Khi người dùng nhấn vào vùng ngoài popup
	document.getElementById('DK_popup_overlay').addEventListener('click', DK_hidePopup);

	// Khi người dùng nhấn vào nút đóng popup
	document.getElementById('DK_popup_close_button').addEventListener('click', DK_hidePopup);

	// Khi người dùng đăng ký thành công
	function DK_onSuccessfuldk() {
		// Đặt giá trị của 'DKvip' trong localStorage thành 'true'
		localStorage.setItem('DK_DKvip', 'true');
		// Ẩn popup
		DK_hidePopup();
	}

	// Hàm hiển thị popup
	function DK_showPopup() {
		var popup = document.getElementById('DK_popup_dkBox');
		// Hiển thị popup
		popup.style.display = 'block';
		// Đặt độ trong suốt của popup thành 0
		popup.style.opacity = 0;
		setTimeout(function () {
			// Thêm hiệu ứng cho popup
			popup.style.transition = 'opacity 1s';
			// Đặt độ trong suốt của popup thành 1, tạo hiệu ứng hiện dần
			popup.style.opacity = 1;
		}, 100);
		// Hiển thị vùng ngoài popup
		document.getElementById('DK_popup_overlay').style.display = 'block';
	}

	// Hàm ẩn popup
	function DK_hidePopup() {
		var popup = document.getElementById('DK_popup_dkBox');
		// Thêm hiệu ứng cho popup
		popup.style.transition = 'opacity 1s';
		// Đặt độ trong suốt của popup thành 0, tạo hiệu ứng ẩn dần
		popup.style.opacity = 0;
		setTimeout(function () {
			// Ẩn popup
			popup.style.display = 'none';
			// Ẩn vùng ngoài popup
			document.getElementById('DK_popup_overlay').style.display = 'none';
		}, 1000);
	}
</script>