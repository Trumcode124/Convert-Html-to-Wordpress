<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Fictional University</title>
    <!-- Tải các file css tiwf functions qua chỗ đây -->
    <?php wp_head(); ?>
</head>

<body>
    <header class="site-header">
        <div class="container">
            <h1 class="school-logo-text float-left">
                <a href="#"><strong>Fictional</strong> University</a>
            </h1>
            <span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search"
                    aria-hidden="true"></i></span>
            <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
            <div class="site-header__menu group">
                <nav class="main-navigation">
                    <ul>
                        <li><a href="#">Trang Chủ</a></li>
                        <li><a href="#">Sản Phẩm</a></li>
                        <li><a href="#">Khuyến Mãi</a></li>
                        <li><a href="#">Thông Tin Về Chúng Tôi</a></li>
                        <li><a href="#">Liên Hệ</a></li>
                    </ul>
                </nav>
                <div class="site-header__util">
                    <a href="#" class="btn btn--small btn--orange float-left push-right">Đăng Nhập</a>
                    <a href="#" class="btn btn--small btn--dark-orange float-left">Đăng Ký</a>
                    <span class="search-trigger js-search-trigger"><i class="fa fa-search"
                            aria-hidden="true"></i></span>
                </div>
            </div>
        </div>
    </header>