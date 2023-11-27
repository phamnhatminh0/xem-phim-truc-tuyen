	<!-- footer-66 -->
	<footer class="w3l-footer">
		<section class="footer-inner-main">
			<div class="footer-hny-grids py-5">
				<div class="container py-lg-4">
					<div class="text-txt">
						<div class="right-side">
							<div class="row footer-links">
								<div class="col-md-3 col-sm-6 sub-two-right mt-5">
									<h6>Phim</h6>
									<ul>
										<li><a href="#">Độc quyền trên Movieon</a></li>
										<li><a href="#">Phim mới cập nhật</a></li>
										<li><a href="#">Phim nhiều lượt xem</a></li>
									</ul>
								</div>
								<div class="col-md-3 col-sm-6 sub-two-right mt-5">
									<h6>Thông tin</h6>
									<ul>
										<li><a href="about.html">Giới thiệu</a> </li>
										<li><a href="contact.html">Liên hệ</a></li>
										<li><a href="#">Đăng nhập</a> </li>
										<li><a href="#">Đăng ký</a> </li>
									</ul>
								</div>
								<div class="col-md-3 col-sm-6 sub-two-right mt-5">
									<h6>Địa chỉ</h6>
									<ul>
										<li><a href="genre.html">Tòa nhà QTSC9 (toà T), đường Tô Ký, quận 12, TP HCM</a>
										</li>
									</ul>
								</div>
								<div class="col-md-3 col-sm-6 sub-two-right mt-5">
									<h6>Ưu đãi</h6>
									<form action="#" class="subscribe mb-3" method="post">
										<input type="email" name="email" placeholder="Email của bạn" required="">
										<button><span class="fa fa-envelope-o"></span></button>
									</form>
									<p>
										Nhập email của bạn vào đây để nhận được những tin tức và ưu đã mới nhất từ chúng
										tôi.
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			</div>
			<div class="below-section">
				<div class="container">
					<div class="copyright-footer">
						<div class="columns text-lg-left">
							<p>&copy; 2023 Movieon. All rights reserved</p>
						</div>
					</div>
				</div>
			</div>
			<!-- copyright -->
			<!-- move top -->
			<button onclick="topFunction()" id="movetop" title="Go to top">
				<span class="fa fa-arrow-up" aria-hidden="true"></span>
			</button>
			<script>
				// When the user scrolls down 20px from the top of the document, show the button
				window.onscroll = function() {
					scrollFunction()
				};

				function scrollFunction() {
					if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
						document.getElementById("movetop").style.display = "block";
					} else {
						document.getElementById("movetop").style.display = "none";
					}
				}

				// When the user clicks on the button, scroll to the top of the document
				function topFunction() {
					document.body.scrollTop = 0;
					document.documentElement.scrollTop = 0;
				}
			</script>
			<!-- /move top -->

		</section>
	</footer>
	<!--//footer-66 -->
	</body>

	</html>