<link href="https://fonts.googleapis.com/css2?family=Arima+Madurai:wght@300;400;500;700&display=swap" rel="stylesheet">
<!-- themify icons -->
<link href='Layout/assets/fonts user/themify-icons/themify-icons.css' rel='stylesheet'>
<!-- app css -->
<link rel="stylesheet" href="Layout/assets/css/styleuser.css">
<div class="w3l-breadcrumbs">
    <nav id="breadcrumbs" class="breadcrumbs">
        <div class="container page-wrapper">
            <a href="?pg=home">Trang chủ</a> » <span class="breadcrumb_last" aria-current="page">User</span>
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
                                    <img src="Upload/images/user/<?= $hienthi["img_user"] ?>" alt="avatar" class="account__img">
                                    <div class="account-info">
                                        <h3>Tài khoản của</h3>
                                        <p><?= $hienthi["ten_user"] ?></p>
                                    </div>
                                </li>
                                <li class="account__item">
                                    <a href="user.html" class="account__link account__link-active">
                                        <i class="account__icon ti-user"></i>
                                        Thông tin cá nhân
                                    </a>
                                </li>
                                <li class="account__item">
                                    <a href="lichsuxem.html" class="account__link">
                                        <i class="account__icon ti-briefcase"></i>
                                        Lịch sử xem
                                    </a>
                                </li>
                                <li class="account__item">
                                    <a href="bosuutap.html" class="account__link">
                                        <i class="account__icon ti-location-pin"></i>
                                        Bộ sưu tập
                                    </a>
                                </li>
                                <li class="account__item">
                                    <a href="?pg=dangxuat" class="account__link" onclick="return confirmLogout();">
                                        Đăng xuất
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <style>
                        .text {
                            font-size: 15px;
                        }

                        .text:hover {
                            color: #00DC5A;
                            ;
                        }

                        .text-input {
                            width: 300px;
                            height: 40px;
                            padding: 5px 20px;
                            box-sizing: border-box;
                            border: 2px solid #00dc5a;
                            border-radius: 4px;
                        }

                        .button-input {
                            width: 135px;
                            height: 40px;
                            padding: 5px 20px;
                            box-sizing: border-box;
                            border: 2px solid #00dc5a;
                            border-radius: 4px;
                        }

                        .button-input:hover {
                            color: #00dc5a;
                        }
                    </style>

                    <div class="col-8 col-sm-12">
                        <div class="profile">
                            <h1 style="color: #00dc5a;">Đổi mật khẩu</h1>
                            <div class="box-group f-height">
                                <div class="col-12">
                                    <div class="alert alert-danger" role="alert" id="error-message" style="display: none;"></div>
                                    <?php if (isset($_SESSION['loi'])) : ?>
                                        <div class="alert alert-danger" role="alert">
                                            <?= $_SESSION['loi'] ?>
                                        </div>
                                    <?php endif;
                                    unset($_SESSION['loi']); ?>
                                    <form id="profile-form" action="" method="POST" enctype="multipart/form-data">
                                        <div class="form-group-profile">
                                            <label for="" class="profile-label">Mật khẩu cũ</label>
                                            <span><input type="text" name="pass" id="" class="text-input"></span>
                                        </div>
                                        <div class="form-group-profile">
                                            <label for="" class="profile-label">Mật khẩu mới</label>
                                            <span><input type="text" name="mkmoi" id="" class="text-input"></span>
                                        </div>
                                        <div class="form-group-profile">
                                            <label for="" class="profile-label">Nhập lại mật khẩu mới</label>
                                            <span><input type="text" name="nlmk" id="" class="text-input"></span>
                                        </div>
                                        <div class="form-group-profile">
                                            <label for="phone" class="profile-label"><button class="button-input" name="submit">Lưu</button></label>
                                            <span><a href="?pg=Forgotpassword" class="forget_pass">Bạn quên mật khẩu</a></span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
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
    $(document).ready(function() {
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
    $(document).ready(function() {
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
<script>
    function confirmLogout() {
        var r = confirm("Bạn muốn đăng xuất chứ?");
        if (r == true) {
            return true;
        } else {
            return false;
        }
    }
</script>


<script>
    document.querySelector('#profile-form').addEventListener('submit', function(event) {
        var textInput = document.querySelector('input[type="text"]');
        var fileInput = document.querySelector('input[type="file"]');
        var errorElement = document.querySelector('#error-message');
        var textError = 'bạn đã vượt quá 250 ký tự';
        var fileError = 'file của bạn không phải là hình ảnh';
        var bothError = 'tên tài khoản và hình ảnh sai';

        var textErrorOccurred = textInput.value.length > 250;
        var fileErrorOccurred = fileInput.files[0] && !fileInput.files[0].type.startsWith('image/');

        // Kiểm tra lỗi cho input text và input file
        if (textErrorOccurred && fileErrorOccurred) {
            errorElement.innerText = bothError;
            errorElement.style.display = 'block';
            event.preventDefault();
        } else if (textErrorOccurred) {
            errorElement.innerText = textError;
            errorElement.style.display = 'block';
            event.preventDefault();
        } else if (fileErrorOccurred) {
            errorElement.innerText = fileError;
            errorElement.style.display = 'block';
            event.preventDefault();
        }
    });
</script>