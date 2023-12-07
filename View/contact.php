	<!--/breadcrumbs -->
	<div class="w3l-breadcrumbs">
		<nav id="breadcrumbs" class="breadcrumbs">
			<div class="container page-wrapper">
				<a href="?pg=home">Trang chủ</a> » <span class="breadcrumb_last" aria-current="page">Liên hệ</span>
			</div>
		</nav>
	</div>
	<!--//breadcrumbs -->
	<!-- contact1 -->
	<section class="w3l-contact-1">
		<div class="contacts-9 py-5">
			<div class="container py-lg-4">
				<div class="headerhny-title text-center">
					<h3 class="hny-title mb-0">ĐỂ LẠI TIN NHẮN</h3>
					<p class="hny-title mb-lg-5 mb-4">Nếu bạn có câu hỏi liên quan đến dịch vụ của chúng tôi, vui lòng
						liên hệ với chúng tôi bằng cách liên hệ một trong các phương thức sau</p>
				</div>
				<div class="contact-view mt-lg-5 mt-4">
					<!-- <div class="conhny-form-section">
						<form action="https://sendmail.w3layouts.com/submitForm" method="post" class="formhny-sec">
							<div class="form-grids">
								<div class="form-input">
									<input type="text" name="w3lName" id="w3lName" placeholder="Tên của bạn*"
										required="" />
								</div>
								<div class="form-input">
									<input type="email" name="w3lSender" id="w3lSender" placeholder="Email*" required />
								</div>
							</div>
							<br />
							<div class="form-grids1">
								<div class="form-input">
									<input type="text" name="w3lSubject" id="w3lSubject" placeholder="Tiêu đề"
										required />
								</div>
							</div>
							<div class="form-input mt-4">
								<textarea name="w3lMessage" id="w3lMessage" placeholder="Nội dung"
									required=""></textarea>
							</div>
							<div class="submithny text-right mt-4">
								<button class="btn read-button">Gửi</button>
							</div>
						</form>
					</div> -->

					<div class="d-grid contact-addres-inf mt-5 pt-lg-4">
						<div class="contact-info-left d-grid">
							<div class="contact-info">
								<div class="icon">
									<span class="fa fa-location-arrow" aria-hidden="true"></span>
								</div>
								<div class="contact-details">
									<h4>Địa chỉ:</h4>
									<p>Thành phố Hồ Chí Minh</p>
								</div>
							</div>
							<div class="contact-info">
								<div class="icon">
									<span class="fa fa-phone" aria-hidden="true"></span>
								</div>
								<div class="contact-details">
									<h4>Số điện thoại:</h4>
									<p><a href="tel:+598-658-456">+84 123-456-789</a></p>
								</div>
							</div>
							<div class="contact-info">
								<div class="icon">
									<span class="fa fa-envelope-open-o" aria-hidden="true"></span>
								</div>
								<div class="contact-details">
									<h4>Mail:</h4>
									<p><a href="mailto:mail@example.com" class="email">info@movieon.com</a></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="contact-map">
			<iframe
				src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.4439805400734!2d106.62348867442887!3d10.853796757763105!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752a20d8555e69%3A0x743b1e9558fb89e0!2sOrbital!5e0!3m2!1sen!2sin!4v1700624828485!5m2!1sen!2sin"
				style="border:0" allowfullscreen=""></iframe>
		</div>
	</section>
	<!-- /contact1 -->
    <script src="Layout/assets/js/jquery-3.3.1.min.js"></script>
<!-- Template JavaScript -->
<!--/theme-change-->
<script src="Layout/assets/js/theme-change.js"></script>
<!-- //theme-change-->
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