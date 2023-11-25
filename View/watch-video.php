<link rel="stylesheet" href="Layout/assets/css/style1.css" type="text/css">
<!-- //watch-video -->
        
           <!-- Breadcrumb Begin -->
           <div class="w3l-breadcrumbs">
            <nav id="breadcrumbs" class="breadcrumbs">
                <div class="container page-wrapper" style="display: flex; gap: 3px;">
                    <a href="index.html">Trang chủ</a> » <a href="index.html">Phim</a>»<span class="breadcrumb_last" aria-current="page">Xem phim</span>
                </div>
            </nav>
        </div>
    <!-- Breadcrumb End -->

    <!-- Anime Section Begin -->
    <section class="anime-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div  class="anime__video__player ">
                        <video class="w-100"  id="player" playsinline controls data-poster="Layout/assets/videos/anime-watch.jpg">
                            <source src="Layout/assets/videos/1.mp4" type="video/mp4" />
                            <!-- Captions are optional -->
                            <track kind="captions" label="English captions" src="#" srclang="en" default />
                        </video>
                        <h5 class="tieude"><?=$xuatphim["ten"]?></h5>
                        <h7>Lượt xem:<?=$xuatphim["luotxem"]?></h7>
                    </div>
                    <div class="anime__details__episodes">
                        <div class="section-title">
                            <h5>Giới thiệu</h5>
                        </div>
                       <p class="mota"><?=$xuatphim["mota"]?></p>
                    </div>
                        <section class="w3l-grids">
                            <div class="section-title">
                                <h5>Diễn viên</h5>
                            </div>
                            <div class="grids-main">
                                <div class="container">
                                    <div class="owl-three owl-carousel owl-theme">
                                        <?php foreach($dienvien as $dv):?>
                                        <div class="item vhny-grid">
                                            <div class="mb-0">
                                                <a href="genre.html">
                                                    <figure>
                                                        <img class="img-fluid rounded-circle" src="<?=$img?><?=$dv["img"]?>" alt="" style="width: 160px; height: 160px;">
                                                        </figure>
                                                        <h6 class="tendv"><?=$dv["ten"]?></h6>
                                                    
                                                   
                                                </a>
                                            </div>
                                    
                                            
                                           
                    
                                        </div>
                                        <?php endforeach;?>
                                    </div>
                                </div>
                    
                            </div>
                        </section>          
                    
                    <div class="anime__details__episodes">
                        <div class="section-title">
                            <h5>Tập phim</h5>
                        </div>
                        <a href="#">Ep 01</a>
                        <a href="#">Ep 02</a>
                        <a href="#">Ep 03</a>
                        <a href="#">Ep 04</a>
                        <a href="#">Ep 05</a>
                        <a href="#">Ep 06</a>
                        <a href="#">Ep 07</a>
                        <a href="#">Ep 08</a>
                        <a href="#">Ep 09</a>
                        <a href="#">Ep 10</a>
                        <a href="#">Ep 11</a>
                        <a href="#">Ep 12</a>
                        <a href="#">Ep 13</a>
                        <a href="#">Ep 14</a>
                        <a href="#">Ep 15</a>
                        <a href="#">Ep 16</a>
                        <a href="#">Ep 17</a>
                        <a href="#">Ep 18</a>
                        <a href="#">Ep 19</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="anime__details__review">
                        <div class="section-title">
                            <h5>Bình luận</h5>
                        </div>
                        <?php foreach($binhluan as $bl):?>
                        <div class="anime__review__item">
                            <div class="anime__review__item__pic">
                                <img src="<?=$img?><?=$bl["img"]?>" alt="">
                            </div>
                            <div class="anime__review__item__text">
                                <h6><?=$bl["ten"]?> <span><?=$bl["ngaybl"]?></span></h6>
                                <p><?=$bl["noidung"]?></p>
                            </div>
                        </div>
                    <?php endforeach;?>
                    </div>
                    <div class="anime__details__form">
                        <div class="section-title">
                            <h5>Bình luận của bạn</h5>
                        </div>
                        <form action="#">
                            <textarea placeholder="Bình luận của bạn"></textarea>
                            <button type="submit"> Gửi</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Anime Section End -->
<!-- //watch-video -->
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