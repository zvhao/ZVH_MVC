<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="http:\\localhost\nlcs_mvc/public/img/logo-bg-white.png">
    <title>ZVH Shop</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <?php if (isset($params['css']) && is_array($params['css'])) : ?>
        <?php foreach($params['css'] as $key => $value) : ?>
            <link rel="stylesheet" href="<?= $this->getCss($value)?>">
        <?php endforeach; ?>
    <?php endif; ?>

</head>

<body>
    <div class="app">

        <!-- header -->
        <header class="header">
            <div class="grid wide">
                <div class="box-header">
                    <div class="row align-items-center">
                        <div class="header-logo col-2">
                            <a href="<?= BASE_URL . '/home'?>" class="logo-link">
                                <img src="http:\\localhost\nlcs_mvc/public/img/logo-removebg.png" alt="" class="logo-img">
                            </a>
                        </div>
                        <div class="header-mid col-8">
                            <div class="menu-top">
                                <ul class="list-top d-flex p-2 list-unstyled">
                                    <li class="list-top-item header-hotline">
                                        <i class="fa-solid fa-phone"></i>
                                        <span class="font-weight-bold">HOTLINE:</span>
                                        <a href="tel:0938744376">0938744376</a>
                                    </li>
                                    <li class="list-top-item header-search">
                                        <form action="" method="get" class="header-search-form input-group">
                                            <input type="text" class="input-search form-control"
                                                placeholder="T??m s???n ph???m...">
                                            <button class="btn-search btn" type="submit">
                                                <i class="fa-solid fa-magnifying-glass"></i>
                                            </button>

                                            <!-- history search -->
                                            <div class="header-search-history">
                                                <h3 class="header-search-history-heading">T??M KI???M NHI???U NH???T</h3>
                                                <ul class="header-search-history-list">
                                                    <li class="header-search-hisroty-item">
                                                        <a href="">V???t c???u l??ng</a>
                                                    </li>
                                                    <li class="header-search-hisroty-item">
                                                        <a href="">Qu??? c???u l??ng</a>
                                                    </li>
                                                    <li class="header-search-hisroty-item">
                                                        <a href="">Qu???n c??n c???u l??ng</a>
                                                    </li>
                                                    <li class="header-search-hisroty-item">
                                                        <a href="">?????ng ph???c c???u l??ng</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="header-right col-2">
                            <div class="header-item header-account">
                                <a href="#" class="a-header-right header-account-link">
                                    <span class="box-icon">
                                        <i class="fa-solid fa-user"></i>
                                    </span>
                                    <span class="item-title">T??I KHO???N</span>
                                    <ul class="header-account-option">
                                        <li class="option-select">
                                            <a class="a-option " href="<?= BASE_URL . '/login'?>">
                                                <i class="fa-solid fa-arrow-right-to-bracket"></i>
                                                ????ng nh???p</a>
                                        </li>
                                        <li class="option-select">
                                            <a class="a-option heading-regis" href="<?= BASE_URL . '/register'?>">
                                                <i class="fa-solid fa-user-plus"></i>
                                                ????ng k??</a>
                                        </li>
                                    </ul>
                                </a>
                            </div>
                            <div class="header-item header-cart">
                                <a href="<?= BASE_URL . '/cart' ?> " class="a-header-right header-cart-link">
                                    <span class="box-icon">
                                        <i class="fa-solid fa-cart-arrow-down"></i>
                                    </span>
                                    <span class="item-title">GI??? H??NG</span>

                                    <span class="header-cart-notice">0</span>

                                    <!-- No cart .header-no-cart-->
                                    <div class="header-cart-list .header-no-cart">
                                        <img src="http:\\localhost\nlcs_mvc/public/img/no-cart.png" alt="" class="header-no-cart-img">
                                        <span class="header-no-cart-msg">
                                            Ch??a c?? s???n ph???m
                                        </span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- navbar -->
            <nav class="main-menu bg-main">
                <div class="container">
                    <ul class="nav-list list-unstyled d-flex justify-content-around">
                        <li class="nav-item">
                            <a class="nav-link" href="<?= BASE_URL . '/home'?>">TRANG CH???</a>
                        </li>
                        <li class="nav-item header-has-menu-product">
                            <a class="nav-link" href="<?= BASE_URL . '/product'?>">S???N PH???M
                                <i class="fa-solid fa-angle-down"></i>
                            </a>
                            <!-- menu-product -->
                            <div class="header-menu-product p-4">
                                <div class="header-menu-product-list">
                                    <ul class="row d-flex flex-wrap">
                                        <li class="col header-product-list">
                                            <a class="header-heading-product" href="">V???T C???U L??NG</a>
                                            <ul class="level1">
                                                <li class="level2">
                                                    <a href="">V???t c???u l??ng Yonex</a>
                                                </li>
                                                <li class="level2">
                                                    <a href="">V???t c???u l??ng Victor</a>
                                                </li>
                                                <li class="level2">
                                                    <a href="">V???t c???u l??ng Lining</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="col header-product-list">
                                            <a class="header-heading-product" href="">GI??Y C???U L??NG</a>
                                            <ul class="level1">
                                                <li class="level2">
                                                    <a href="">Gi??y c???u l??ng Yonex</a>
                                                </li>
                                                <li class="level2">
                                                    <a href="">Gi??y c???u l??ng Victor</a>
                                                </li>
                                                <li class="level2">
                                                    <a href="">Gi??y c???u l??ng Lining</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="col header-product-list">
                                            <a class="header-heading-product" href="">PH??? KI???N C???U L??NG</a>
                                            <ul class="level1">
                                                <li class="level2">
                                                    <a href="">Qu??? c???u l??ng</a>
                                                </li>
                                                <li class="level2">
                                                    <a href="">Qu???n c??n c???u l??ng</a>
                                                </li>
                                                <li class="level2">
                                                    <a href="">B??nh n?????c c???u l??ng</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </li>

                        <li class="nav-item"><a class="nav-link" href="<?= BASE_URL . '/news'?>">TIN T???C</a></li>
                        <li class="nav-item has-menu-guide">
                            <a class="nav-link" href="<?= BASE_URL . '/guide'?>">H?????NG D???N
                                <i class="fa-solid fa-angle-down"></i>
                            </a>

                            <div class="guide-list">
                                <ul class="">
                                    <li><a class="" href="">H?????ng d???n mua h??ng v?? thanh to??n</a></li>
                                    <li><a class="" href="">H?????ng d???n s??? d???ng d???ng c???, ph??? ki???n</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="<?= BASE_URL . '/introduce'?>">GI???I THI???U</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= BASE_URL . '/contact'?>">LI??N H???</a></li>
                    </ul>
                </div>
            </nav>
        </header>