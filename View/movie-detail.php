    <!-- Breadcrumb Begin -->
    <link rel="stylesheet" href="Layout/assets/css/chitietphim.css">
    <div class="w3l-breadcrumbs">
        <nav id="breadcrumbs" class="breadcrumbs">
            <div class="container page-wrapper" style="display: flex; gap: 3px;">
                <a href="index.html">Home</a> » <span class="breadcrumb_last" aria-current="page">Chi tiết phim</span>
            </div>
        </nav>
    </div>
    <!-- Breadcrumb End -->
    <!--phim chính-->

    <section class="movie-detail">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <img class="img-fluid" src="<?=$img?><?= $chitiet["img"]?>" alt="Your Image">
                </div>
                <div class="col-md-8 ">
                    <h1 class="title"><?=$chitiet["ten"]?></h1>
                    <p class="bold-text">Thể loại: <span class="normal-text"><a class="alink" href=""><?= $chitiet["tentl"]?></a></span></p>
                    <div class="release-duration">
                        <p class="bold-text">Phát hành: <span class="normal-text"><?=$chitiet["namsx"]?></span></p>
                        <p class="bold-text">Thời lượng: <span class="normal-text">28 tập</span></p>
                    </div>
                    <p class="normal-text"><?= $chitiet["mota"]?></p>
                   <a href="?pg=watch&id=<?=$chitiet["id_phim"]?>"> <button class="watch-button2"> Xem phim </button></a>
                    <button class="watch-button2" style="background-color: #25867d;">Yêu thích</button>
                </div>
            </div>
        </div>
    </section>
    <!--phim chính-->
    <!--phim cùng thể loại-->
    <section class="w3l-grids">
        <div class="grids-main py-5">
            <div class="container py-lg-3">
                <div class="headerhny-title">
                    <div class="w3l-title-grids">
                        <div class="headerhny-left">
                            <h3 class="hny-title">Phim cùng thể loại</h3>
                        </div>
                        <div class="headerhny-right text-lg-right">
                            <h4><a class="show-title" href="genre.html">Hiển thị tất cả</a></h4>
                        </div>
                    </div>
                </div>
                <div class="w3l-populohny-grids">
                    <?php foreach($cungtheloai as $ctl):?>
                    <div class="item vhny-grid">
                        <div class="box16">
                            <a href="genre.html">
                                <figure>
                                    <img class="img-fluid" src="<?=$img?><?=$ctl["img"]?>" alt="">
                                </figure>
                                <div class="box-content">
                                    <h3 class="title"><?=$ctl["ten"]?></h3>
                                    <h4> <span class="post"><span class="fa fa-clock-o"> </span> 1 Hr 4min

                                        </span>

                                        <span class="post fa fa-heart text-right"></span>
                                    </h4>
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
    <!--//phim cùng thể loại-->
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