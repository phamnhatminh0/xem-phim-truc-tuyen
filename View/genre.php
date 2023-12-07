	<!--/breadcrumbs -->
	<div class="w3l-breadcrumbs">
		<nav id="breadcrumbs" class="breadcrumbs">
			<div class="container page-wrapper">
				<a href="?pg=home">Trang chủ</a> » <span class="breadcrumb_last" aria-current="page">Thể loại</span>
			</div>
		</nav>
	</div>
	<!--//breadcrumbs -->
	<!--/genre -->
	<!--grids-sec1-->
	<!--//grids-sec1-->
	<!--grids-sec1-->
	<section class="w3l-grids">
		<div class="grids-main py-5">
			<div class="container py-lg-4">
				<div class="headerhny-title">
					<div class="w3l-title-grids">
						<div class="headerhny-left">
						<?php foreach($tencungtheloai as $pctl):?>
							<h3 class="hny-title">Phim <?=$pctl["tentl"]?></h3>
							<?php endforeach;?>
						</div>
						<div class="headerhny-right text-lg-right">
							<h4><a class="show-title" onclick="doi()" >Sắp xếp A-Z</a></h4>
						</div>
					</div>
				</div>
				<div class="w3l-populohny-grids" id="doi">
					<?php foreach($cacphimcungloai as $pctl):?>
					<div class="item vhny-grid">
						<div class="box16 mb-0">
							<a href="?pg=detail&id=<?=$pctl["id_phim"]?>">
								<figure>
									<img class="img-fluid" src="<?=$img_p?><?=$pctl["img"]?>" alt="">
								</figure>
								<div class="box-content">
									<h3 class="title"><?=$pctl["ten"]?></h3>
								</div>
							</a>
						</div>
					</div>
					<?php endforeach;?>
				</div>
			</div>

			

		</div>
	</section>
	<!--//grids-sec1-->
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
<script>
let dau= document.querySelector('#doi');
let myString = `<?php foreach($tims as $tm):?>
					<div class="item vhny-grid">
						<div class="box16 mb-0">
							<a href="?pg=detail&id=<?=$tm["id_phim"]?>">
								<figure>
									<img class="img-fluid" src="<?=$img_p?><?=$tm["img"]?>" alt="">
								</figure>
								<div class="box-content">
									<h3 class="title"><?=$tm["ten"]?></h3>
								</div>
							</a>
						</div>
					</div>
				<?php endforeach;?>`;
				function doi(){
					dau.innerHTML=myString;
				}
</script>