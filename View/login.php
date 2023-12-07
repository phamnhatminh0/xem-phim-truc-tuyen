<link rel="stylesheet" href="Layout/assets/css/style1.css" type="text/css">
<!-- //watch-video -->
<!-- Breadcrumb Begin -->
<div class="w3l-breadcrumbs">
    <nav id="breadcrumbs" class="breadcrumbs">
        <div class="container page-wrapper" style="display: flex; gap: 3px;">
            <a href="index.html">Trang chủ</a> » <span class="breadcrumb_last" aria-current="page">Đăng nhập</span>
        </div>
    </nav>
</div>
<!-- Breadcrumb End -->
<!-- Normal Breadcrumb Begin -->
<section class="normal-breadcrumb set-bg" data-setbg="Upload/images/Banner/banner1.jpg" style="position: relative; opacity:0.3" >
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="normal__breadcrumb__text">
                </div>
            </div>
        </div>
    </div>
</section>
<div class="h2">
<h2 class="h2_login" style="color: #00dc5a; "><strong>ĐĂNG NHẬP</strong></h2>

</div>

<style>
    .h2{
        display: flex;
        justify-content: center;
        align-items: center;
        position: absolute;
        top: 300px;
        width: 100%;   
    }
</style>
<!-- Normal Breadcrumb End -->

<!-- Login Section Begin -->
<section class="login spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="login__form">
                    <h3>Đăng nhập</h3>

                    <?php if (isset($_SESSION['loi'])) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= $_SESSION['loi'] ?>
                        </div>
                    <?php endif;
                    unset($_SESSION['loi']); ?>

                    <form action="" method="POST">
                        <div class="input__item">
                            <input type="text" placeholder="Email của bạn" name="email" autocomplete="off" style="color: black;">
                            <span><i class="fas fa-envelope" style="color: black;"></i></span>
                        </div>
                        <div class="input__item">
                            <input type="password" placeholder="Mật khẩu" name="pass" style="color: black;">
                            <span><i class="fas fa-lock" style="color: black;"></i></span>
                        </div>
                        <button type="submit" class="site-btn" name="login" style="background-color: #00DC5A;">Đăng nhập</button>
                    </form>
                    <a href="?pg=Forgotpassword" class="forget_pass">Quên mật khẩu</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="login__register">
                    <h3>Bạn chưa có tài khoản?</h3>
                    <a href="?pg=dangky" class="primary-btn" style="background-color: #00DC5A; color: #fff" ;>Đăng ký ngay</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Login Section End -->


<!-- responsive tabs -->
<script src="Layout/assets/js/jquery-1.9.1.min.js"></script>
<script src="Layout/assets/js/easyResponsiveTabs.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        //Horizontal Tab
        $('#parentHorizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion
            width: 'auto', //auto or any width like 600px
            fit: true, // 100% fit in a container
            tabidentify: 'hor_1', // The tab groups identifier
            activate: function(event) { // Callback function if tab is switched
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
<!-- //theme-change-->
<script src="Layout/assets/js/owl.carousel.js"></script>
<!-- script for banner slider-->
<script>
    $(document).ready(function() {
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
    $(document).ready(function() {
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
<!-- /mid-script -->
<script>
    $(document).ready(function() {
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
    $(document).ready(function() {
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
    $(function() {
        $('.navbar-toggler').click(function() {
            $('body').toggleClass('noscroll');
        })
    });
</script>
<!-- disable body scroll which navbar is in active -->

<!--/MENU-JS-->
<script>
    $(window).on("scroll", function() {
        var scroll = $(window).scrollTop();

        if (scroll >= 80) {
            $("#site-header").addClass("nav-fixed");
        } else {
            $("#site-header").removeClass("nav-fixed");
        }
    });

    //Main navigation Active Class Add Remove
    $(".navbar-toggler").on("click", function() {
        $("header").toggleClass("active");
    });
    $(document).on("ready", function() {
        if ($(window).width() > 991) {
            $("header").removeClass("active");
        }
        $(window).on("resize", function() {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
        });
    });
</script>

<!--//MENU-JS-->

<script src="Layout/assets/js/bootstrap.min.js"></script>

<script src="Layout/assets/js/jquery-3.3.1.min.js"></script>
<script src="Layout/assets/js/bootstrap.min.js"></script>
<script src="Layout/assets/js/player.js"></script>
<script src="Layout/assets/js/jquery.nice-select.min.js"></script>
<script src="Layout/assets/js/mixitup.min.js"></script>
<script src="Layout/assets/js/jquery.slicknav.js"></script>
<script src="Layout/assets/js/owl.carousel.min.js"></script>
<script src="Layout/assets/js/main.js"></script>
<script>
    $(document).ready(function() {
        $('[data-setbg]').each(function() {
            var bg = $(this).data('setbg');
            $(this).css('background-image', 'url(' + bg + ')');
        });
    });
</script>
<script src="Layout/assets/js/theme-change.js"></script>