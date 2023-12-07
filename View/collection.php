<link href="https://fonts.googleapis.com/css2?family=Arima+Madurai:wght@300;400;500;700&display=swap" rel="stylesheet">
    <!-- themify icons -->
<link href='Layout/assets/fonts user/themify-icons/themify-icons.css' rel='stylesheet'>
    <!-- app css -->
<link rel="stylesheet" href="Layout/assets/css/styleuser.css">
        <!-- //header -->
        <div class="w3l-breadcrumbs">
            <nav id="breadcrumbs" class="breadcrumbs">
                <div class="container page-wrapper">
                    <a href="?pg=home">Trang chủ</a> » <span class="breadcrumb_last" aria-current="page">Bộ sưu tập</span>
                </div>
            </nav>
        </div>
        <section>
            <div>
                <div class="containerr">
                    <div class="box">
                        <div class="rowa">
						<div class="col-4">
						<div class="account">
							<ul class="account__list">
								<li class="account__item">
									<img src="Upload/images/User/<?= $hienthi["img_user"] ?>" alt="avatar" class="account__img">
									<div class="account-info">
										<h3>Tài khoản của</h3>
										<p><?= $hienthi["ten_user"] ?></p>
									</div>
								</li>
								<li class="account__item">
									<a href="?pg=user" class="account__link account__link-active">
										<i class="account__icon ti-user"></i>
										Thông tin cá nhân
									</a>
								</li>
								<li class="account__item">
									<a href="?pg=lichsu" class="account__link">
										<i class="account__icon ti-briefcase"></i>
										Lịch sử xem
									</a>
								</li>
								<li class="account__item">
									<a href="?pg=bosuutap" class="account__link">
										<i class="account__icon ti-location-pin"></i>
										Bộ sưu tập
									</a>
								</li>
								<li class="account__item">
									<a href="?pg=dangxuat" class="account__link" onclick="return confirmLogout();">
									<i class="fa-solid fa-right-from-bracket"></i>
										Đăng xuất
									</a>
								</li>
							</ul>
						</div>
					</div>


                            <div class="col-8 col-sm-12">
                                <h1>Bộ sưu tập</h1>
                                <br/>
                                <div class="cot">
                                <?php foreach ($kqyt as $yt):?>
                                <div class="box16">
                                    <a href="?pg=them&id=<?=$yt["id_phim"]?>&tap=<?=$yt["id_tap"]?>">
                                        <figure>
                                            <img class="img-fluid" src="<?=$img_p?><?=$yt["img"]?>" alt="" style="height: 304.8px; width: 254.9px;">
        
                                        </figure>
                                        <div class="box-content">
                                            <h3 class="title"><?=$yt["ten"]?></h3>
                                            </h4>
                                        </div>
                                    </a>
                                </div>
                                <?php endforeach;?>
  
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <!-- footer-66 -->
        <script src="Layout/assets/js/jquery-3.3.1.min.js"></script>
<!--/theme-change-->
<script src="Layout/assets/js/theme-change.js"></script>
<!-- //theme-change-->
<script src="Layout/assets/js/owl.carousel.js"></script>
<script>
	$(document).ready(function () {
		$('.owl-four').owlCarousel({
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
					items: 1,
					nav: false
				},
				480: {
					items: 2,
					nav: true
				},
				667: {
					items: 2,
					nav: true
				},
				1000: {
					items: 2,
					nav: true
				}
			}
		})
	})
</script>
<script>
	$(document).ready(function () {
		$('.owl-two').owlCarousel({
			loop: true,
			margin: 40,
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
					items: 2,
					nav: true
				},
				667: {
					items: 2,
					margin: 20,
					nav: true
				},
				1000: {
					items: 3,
					nav: true
				}
			}
		})
	})
</script>
<!-- //script -->
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