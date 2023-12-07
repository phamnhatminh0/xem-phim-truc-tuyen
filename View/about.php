	<!--/breadcrumbs -->
	<div class="w3l-breadcrumbs">
		<nav id="breadcrumbs" class="breadcrumbs">
			<div class="container page-wrapper">
				<a href="?pg=home">Trang chủ</a> » <span class="breadcrumb_last" aria-current="page">Giới thiệu</span>
			</div>
		</nav>
	</div>
	<!--//breadcrumbs -->
	<!-- /about-->
	<div class="w3l-ab-grids py-5">
		<div class="container py-lg-4">
			<div class="row ab-grids-sec align-items-center">
				<div class="col-lg-6 ab-right">
					<img class="img-fluid" src="Upload/images/Banner/banner1.jpg">
				</div>
				<div class="col-lg-6 ab-left pl-lg-4 mt-lg-0 mt-5">
					<h3 class="hny-title">GIẢI TRÍ TUYỆT VỜI</h3>
					<p class="mt-3">Với trang web xem phim của chúng tôi, bạn có thể thoải mái thưởng thức những 
					bộ phim yêu thích của mình ngay tại nhà, vào bất kỳ lúc nào và bất kỳ nơi đâu chỉ
					với một kết nối internet.</p>
				</div>
			</div>

			<div class="w3l-counter-stats-info text-center">
				<div class="stats_left">
					<div class="counter_grid">
						<div class="icon_info">
							<p class="counter"><?=$tongphim?></p>
							<h4>Bộ phim</h4>

						</div>
					</div>
				</div>
				<div class="stats_left">
					<div class="counter_grid">
						<div class="icon_info">
							<p class="counter"><?=$tongtheloai?></p>
							<h4>Thể loại</h4>

						</div>
					</div>
				</div>
				<div class="stats_left">
					<div class="counter_grid">
						<div class="icon_info">
							<p class="counter"><?=$luotxem?></p>
							<h4>Lượt xem</h4>

						</div>
					</div>
				</div>
				<div class="stats_left">
					<div class="counter_grid">
						<div class="icon_info">
							<p class="counter"><?=$tongTVDK?></p>
							<h4>Thành viên vip</h4>

						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
	<!-- //about-->
	<!--grids-sec1-->
	<section class="w3l-team" id="team">
		<div class="grids-main py-5">
			<div class="container py-lg-4">
				<div class="headerhny-title">
					<h3 class="hny-title">NHÀ SÁNG LẬP</h3>
				</div>
				<div class="owl-team owl-carousel owl-theme">
					<div class="item vhny-grid">
						<div class="d-grid team-info">
							<div class="column position-relative">
								<a href="#url"><img src="Upload/images/User/us1.jpg" alt=""
										class="img-fluid rounded team-image" /></a>
							</div>
							<div class="column text-center">
								<h3 class="name-pos"><a href="#url">Lại Gia Kiên</a></h3>

							</div>
						</div>

					</div>
					<div class="item vhny-grid">
						<div class="box16">
							<div class="d-grid team-info">
								<div class="column position-relative">
									<a href="#url"><img src="Upload/images/User/us2.jpg" alt=""
											class="img-fluid rounded team-image" /></a>
								</div>
								<div class="column text-center">
									<h3 class="name-pos"><a href="#url">Lê Phước Thịnh</a></h3>

								</div>
							</div>
						</div>

					</div>
					<div class="item vhny-grid">
						<div class="box16">
							<div class="d-grid team-info">
								<div class="column position-relative">
									<a href="#url"><img src="Upload/images/User/us3.jpg" alt=""
											class="img-fluid rounded team-image" /></a>
								</div>
								<div class="column text-center">
									<h3 class="name-pos"><a href="#url">Phạm Nhật Minh</a></h3>

								</div>
							</div>
						</div>

					</div>
					<div class="item vhny-grid">
						<div class="box16">
							<div class="d-grid team-info">
								<div class="column position-relative">
									<a href="#url"><img src="Upload/images/User/us4.jpg" alt=""
											class="img-fluid rounded team-image" /></a>
								</div>
								<div class="column text-center">
									<h3 class="name-pos"><a href="#url">Nguyễn Quang trí</a></h3>

								</div>
							</div>
						</div>

					</div>
					<div class="item vhny-grid">
						<div class="box16">
							<div class="d-grid team-info">
								<div class="column position-relative">
									<a href="#url"><img src="Upload/images/User/us5.jpg" alt=""
											class="img-fluid rounded team-image" /></a>
								</div>
								<div class="column text-center">
									<h3 class="name-pos"><a href="#url">Phạm Hồng Phước</a></h3>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>



		</div>
	</section>
	<!--//grids-sec1-->
	<!--/testimonials-->
	<!--//testimonials-->
    <script src="Layout/assets/js/jquery-3.3.1.min.js"></script>
<!-- stats -->
<script src="Layout/assets/js/jquery.waypoints.min.js"></script>
<script src="Layout/assets/js/jquery.countup.js"></script>
<script>
	$('.counter').countUp();
</script>
<!-- //stats -->
<!--/theme-change-->
<script src="Layout/assets/js/theme-change.js"></script>
<!-- //theme-change-->
<script src="Layout/assets/js/owl.carousel.js"></script>
<!-- script for banner slider-->
<script>
	$(document).ready(function () {
		$('.owl-team').owlCarousel({
			loop: true,
			margin: 20,
			nav: false,
			responsiveClass: true,
			autoplay: false,
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
					items: 4,
					nav: true
				}
			}
		})
	})
</script>
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
					items: 6,
					nav: true
				}
			}
		})
	})
</script>
<!-- //script -->
<!-- for tesimonials carousel slider -->
<script>
	$(document).ready(function () {
		$(".owl-clients").owlCarousel({
			loop: true,
			margin: 40,
			responsiveClass: true,
			responsive: {
				0: {
					items: 1,
					nav: true
				},
				736: {
					items: 2,
					nav: false
				},
				1000: {
					items: 3,
					nav: true,
					loop: false
				}
			}
		})
	})
</script>
<!-- //script -->
<!-- script for owlcarousel -->
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